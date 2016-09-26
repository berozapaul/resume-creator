<?php

class CorePlugin {

  public $pluginDir;

  public function __construct()
  {

  }

  public function setPluginDir($dir)
  {
      $this->pluginDir = $dir;
  }

  public function init()
  {

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

   public function slug($str, $char = '-')
   {
      // Lower case the string and remove whitespace from the beginning or end
      $str = trim(strtolower($str));

      // Remove single quotes from the string
      $str = str_replace("'", '', $str);

      // Every character other than a-z, 0-9 will be replaced with a single dash (-)
      $str = preg_replace("/[^a-z0-9]+/", $char, $str);

      // Remove any beginning or trailing dashes
      $str = trim($str, $char);

      return $str;
   }

   public static function sanitize($str, $char = '-')
   {
      $str = trim(strtolower($str));

      $str = str_replace("'", '', $str);

      $str = preg_replace("/[^a-z0-9.]+/", $char, $str);

      $str = trim($str, $char);

      return $str;
   }

  public function getParam($key)
  {
     return $_REQUEST[$this->prefix . '_' . $key];
  }

  public function activate()
  {

  }

  public function deactivate()
  {

  }

  public function d($r, $f = null)
  {
     echo '<pre>';
     print_r($r);
     echo '</pre>';

     if($f) exit;
  }
} // End of class


?>
