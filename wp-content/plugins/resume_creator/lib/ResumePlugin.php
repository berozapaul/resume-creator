<?php
if ( ! class_exists( 'WP_List_Table' ) ) {
  require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

if ( ! class_exists( 'WkHtmlToPdf' ) ) {
  require_once( plugin_dir_path( __FILE__ ) . '../lib/wkhtmltopdf.php' );
}

class ResumePlugin {
  const RC_SLUG = 'resume-creator';
  public $pluginDir;
  public $users_obj;
  public $user_obj;

  public function __construct() {
    $this->pluginDir = plugin_dir_path( __FILE__ ) . '../';
    $upload = wp_upload_dir();
    $upload_dir = $upload['basedir'].'/sherpapdf/';
    $upload_url = $upload['baseurl'].'/sherpapdf/';
    define('RC_UPLOAD_DIR', $upload_dir);
    define('RC_UPLOAD_URL', $upload_url);
  }

  public function resumeAdminMenu(){
    if(!current_user_can('edit_users')):
      _e('You do not have the appropriate permission to view this content.', self::RC_SLUG);
    else:
      if($_REQUEST['page'] === 'resume-creator'){
        $action = $_REQUEST['action'];
        $method = 'showUserList';

        switch ($action) {
          case 'add':
            $method = 'showResumeForm';
            $this->getUserData();
            break;

          case 'view':
            $method = 'showResumeView';
            $this->getUserData();
            break;

          case 'pdf':
            $method = 'downloadPDF';
            $this->getUserData();
            break;

          default:
            $this->getUserList();
            break;
        }
      }
    endif;

    add_submenu_page('users.php', 'Resumes', 'Resumes', 'publish_pages', self::RC_SLUG, array($this, "$method"));
    add_action('admin_enqueue_scripts', array($this, 'loadScripts'));
  }

  /**
   * Screen options
   */
  public function getUserData() {
    $userId = $_REQUEST['user'];
    $this->user_obj = get_userdata($userId);
  }

  /**
   * Screen options
   */
  public function getUserList() {
    $option = 'per_page';
    $args   = ['label'   => 'Users','default' => 5, 'option'  => 'users_per_page'];

    add_screen_option( $option, $args );
    $this->users_obj = new Users_List();
  }

  /**
   * Plugin user page
   */
  public function showResumeForm() {
     $this->render('_resume_form', array('user' => $this->user_obj));
  }

  /**
   * Plugin user page
   */
  public function downloadPDF() {
    $user_id = $_REQUEST['user'];
    define('WKHTMLPATH', 'xvfb-run -a /usr/bin/wkhtmltopdf');

    $upload_dir_html = RC_UPLOAD_DIR . 'html';
    $upload_dir_pdf  = RC_UPLOAD_DIR . 'pdf';

    if (! is_dir($upload_dir_html)) {
      $old_umask = umask(0); mkdir( $upload_dir_html, 0777, 1); umask($old_umask);
    }

    if (! is_dir($upload_dir_pdf)) {
      $old_umask = umask(0); mkdir( $upload_dir_pdf, 0777, 1); umask($old_umask);
    }

    $pdfContent = $this->showResumeView(true);
    $filePathHTML = $this->createHTMLFile($pdfContent);
    $pdf = new WkHtmlToPdf;
    $pdf->setOptions ( array (
            'no-outline', // Make Chrome not complain
            'margin-top' => 0,
            'margin-right' => 0,
            'margin-bottom' => 0,
            'margin-left' => 0,

            // Default page options
            // 'disable-smart-shrinking'
    ));
    $pdf->addPage($filePathHTML);

    $pdfName = $user_id . "_user_resume";
    $pdfPath = RC_UPLOAD_DIR."pdf/".$pdfName.".pdf";
    $filePath = RC_UPLOAD_URL."pdf/".$pdfName.".pdf";

    $saved = $pdf->saveAs($pdfPath);

    if($saved) {
        $html = '<h2>Successfully generated PDF.</h2><a href="'.$filePath.'" download>Download</a>';
        echo $html;
    }
    echo $pdf->getError();
  }

  /**
   * HTML file creation
   */
  public function createHTMLFile($content){
    $user_id = $_REQUEST['user'];
    $fileNameHTML = $user_id . "_user_resume.html";
    $filePathHTML = RC_UPLOAD_DIR."html/".$fileNameHTML;

    $fh = fopen($filePathHTML, 'w'); // or die("error");
    $fw = fwrite($fh, $content);

    if($fw){
      return $filePathHTML;
    }
  }

  /**
   * Plugin user page
   */
  public function showResumeView($return = false) {
    $user_id = $_REQUEST['user'];
    $userMetaData = get_user_meta($user_id);
    $data = array(
      'user' => $this->user_obj,
      'umeta' => $userMetaData,
      'basic_info' => $this->parseUserMetaData($userMetaData['basic_information'][0]),
      'rprojects' => $this->parseUserMetaData($userMetaData['recent_projects'][0]),
      'pprojects' => $this->parseUserMetaData($userMetaData['previous_projects'][0]),
      'eemployers' => $this->parseUserMetaData($userMetaData['earlier_employers'][0]),
      'education' => $this->parseUserMetaData($userMetaData['rc_education'][0]),
      'courses' => $this->parseUserMetaData($userMetaData['rc_courses'][0]),
      'solstice' => $this->parseUserMetaData($userMetaData['rc_solstice'][0]),
      'esummary' => $this->parseUserMetaData($userMetaData['experience_summary'][0])
    );
// $this->d($data, true);
    if($return){
      return $this->render('_resume_view', $data, false);
    }
    else{
      $this->render('_resume_view', $data, true);
    }
  }

  /**
   * Plugin user list page
   */
  public function showUserList() {
     $this->render('_user_list', array('obj' => $this->users_obj));
  }

  public function rc_save_user_meta(){
    $user_id  = $_REQUEST['user_id'];
    $response = new stdClass();
    $isEmpty  = false;

    parse_str($_REQUEST['data'], $output);
    $response->meta_key = $output['meta_key'];
    $response->single_view = $output['single_view'];
    $response->required_field = $output['required_field'];

    if(in_array($output['meta_key'], array('recent_projects', 'previous_projects', 'earlier_employers', 'rc_education', 'rc_courses', 'rc_solstice'))){
       $data = array_map('array_filter', $output);
       $_REQUEST['data'] = http_build_query($data);

       $valueCnt = count($data[$response->required_field]);
       $isEmpty = $valueCnt > 0 ? false : true;
       $data['index'] = $valueCnt > 0 ? $valueCnt - 1 : 0;

       $dbData = $this->getUserMetaData(['user_id' => $user_id, 'key' => $response->meta_key]);
       if($valueCnt > count($dbData[$response->required_field])){
         $response->html = $this->render($response->single_view, $data, false);
       }
    }

    if($user_id && !$isEmpty){
      update_user_meta($user_id, $response->meta_key, $_REQUEST['data']);
      $response->success = true;
    }
    else{
      $response->success = false;
    }

    echo json_encode($response);
    exit;
  }

  public function getUserMetaData($params){
    $userMetaStr = get_user_meta($params['user_id'], $params['key'], true);
    if($userMetaStr){
      parse_str($userMetaStr, $data);
    }
    return $data;
  }

  public function parseUserMetaData($metaData){
    $data = array();
    if($metaData){
      parse_str($metaData, $data);
    }
    return $data;
  }

  public function render($template, $data, $showOutput = true)
  {
     if (!$this->pluginDir)
     {
         die("Set \$this->pluginDir for your plugin before calling render().");
     }

     $data['pluginPrefix'] = $this->prefix;

     extract($data);

     ob_start();

     $viewDir = $this->pluginDir . 'views';
     $viewFile = $viewDir . '/' . $template . '.php';

     if (file_exists($viewFile))
     {
        include($viewFile);
     } else {
       die("Missing $viewFile");
     }

     $output = ob_get_clean();
     if ($showOutput) {
         echo $output;
     } else {
        return $output;
     }
  }

  public function loadScripts($hook) {
    if($hook && $hook == "users_page_resume-creator"):
       wp_enqueue_script('jquery');
       wp_enqueue_script('jquery-ui-core');
       wp_enqueue_script('jquery-ui-accordion');
       wp_register_style('rc_css', plugins_url('../css/user-resume-creator.css?version='.rand(100,1000), __FILE__));
       wp_enqueue_style('jquery-ui-core-style', '//code.jquery.com/ui/1.12.1/themes/redmond/jquery-ui.css');
       wp_enqueue_style('rc_css');
       wp_register_script('rc_js', plugins_url('../js/user-resume-creator.js?version='.rand(100,1000), __FILE__));
       wp_enqueue_script('rc_js');
    endif;
  }

  public function d($r, $f = null)
  {
     echo '<pre>';
     print_r($r);
     echo '</pre>';

     if($f) exit;
  }

} // End of class


class Users_List extends WP_List_Table {

  /** Class constructor */
  public function __construct() {

    parent::__construct( [
      'singular' => __( 'User', 'rc' ), //singular name of the listed records
      'plural'   => __( 'Users', 'rc' ), //plural name of the listed records
      'ajax'     => false //does this table support ajax?
    ] );
  }


  /**
   * Retrieve customers data from the database
   *
   * @param int $per_page
   * @param int $page_number
   *
   * @return mixed
   */
  public static function get_customers( $per_page = 5, $page_number = 1 ) {
    global $wpdb;
    $sql = "SELECT * FROM {$wpdb->prefix}users";
    if ( ! empty( $_REQUEST['orderby'] ) ) {
      $sql .= ' ORDER BY ' . esc_sql( $_REQUEST['orderby'] );
      $sql .= ! empty( $_REQUEST['order'] ) ? ' ' . esc_sql( $_REQUEST['order'] ) : ' ASC';
    }

    $sql .= " LIMIT $per_page";
    $sql .= ' OFFSET ' . ( $page_number - 1 ) * $per_page;
    $result = $wpdb->get_results( $sql, 'ARRAY_A' );
    return $result;
  }


  /**
   * Returns the count of records in the database.
   *
   * @return null|string
   */
  public static function record_count() {
    global $wpdb;
    $sql = "SELECT COUNT(*) FROM {$wpdb->prefix}users";
    return $wpdb->get_var( $sql );
  }

  /** Text displayed when no customer data is available */
  public function no_items() {
    _e( 'No users avaliable.', 'rc' );
  }

  /**
   * Render a column when no column specific method exist.
   *
   * @param array $item
   * @param string $column_name
   *
   * @return mixed
   */
  public function column_default( $item, $column_name ) {
    switch ( $column_name ) {
      case 'user_email':
        return $item[ $column_name ];
      default:
        return print_r( $item, true ); //Show the whole array for troubleshooting purposes
    }
  }

  /**
   * Render the bulk edit checkbox
   *
   * @param array $item
   *
   * @return string
   */
  function column_cb( $item ) {
    return sprintf(
      '<input type="checkbox" name="bulk-delete[]" value="%s" />', $item['ID']
    );
  }

  /**
   * Method for name column
   *
   * @param array $item an array of DB data
   *
   * @return string
   */
  function column_name( $item ) {
    $add_nonce = wp_create_nonce( 'rc_add_resume_info' );
    $view_nonce = wp_create_nonce( 'rc_preview_resume_info' );
    $pdf_nonce = wp_create_nonce( 'rc_pdf_resume_info' );
    $title = '<strong>' . $item['user_nicename'] . '</strong>';
    $filePath = RC_UPLOAD_URL."pdf/".$item['ID']."_user_resume.pdf";

    $actions = [
      'add' => sprintf( '<a href="?page=%s&action=%s&user=%s&_wpnonce=%s">Add</a>', esc_attr( $_REQUEST['page'] ), 'add', absint( $item['ID'] ), $add_nonce ),
      'view' => sprintf( '<a href="?page=%s&action=%s&user=%s&_wpnonce=%s">Preview</a>', esc_attr( $_REQUEST['page'] ), 'view', absint( $item['ID'] ), $view_nonce ),
      'pdf' => sprintf( '<a href="?page=%s&action=%s&user=%s&_wpnonce=%s">Create pdf</a>', esc_attr( $_REQUEST['page'] ), 'pdf', absint( $item['ID'] ), $pdf_nonce ),
      'download' => sprintf( '<a href="'.$filePath.'" download="'.$item['user_login'].'">Download</a>')
    ];

    return $title . $this->row_actions( $actions );
  }

  /**
   *  Associative array of columns
   *
   * @return array
   */
  function get_columns() {
    $columns = [
      'cb'      => '<input type="checkbox" />',
      'name'    => __( 'Name', 'rc' ),
      'user_email' => __( 'Email', 'rc' )
    ];

    return $columns;
  }


  /**
   * Columns to make sortable.
   *
   * @return array
   */
  public function get_sortable_columns() {
    $sortable_columns = array(
      'name' => array( 'user_nicename', true ),
      'user_email' => array( 'user_email', false )
    );

    return $sortable_columns;
  }


  /**
   * Handles data query and filter, sorting, and pagination.
   */
  public function prepare_items() {

    $this->_column_headers = $this->get_column_info();

    $per_page     = $this->get_items_per_page( 'users_per_page', 10);
    $current_page = $this->get_pagenum();
    $total_items  = self::record_count();

    $this->set_pagination_args( [
      'total_items' => $total_items, //WE have to calculate the total number of items
      'per_page'    => $per_page //WE have to determine how many items to show on a page
    ] );

    $this->items = self::get_customers( $per_page, $current_page );
  }

} // End of class
?>
