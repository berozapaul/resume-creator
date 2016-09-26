<?php
  $data = $this->getUserMetaData(['user_id' => $user_id, 'key' => 'previous_projects']);
?>
<form>
  <div id="previous_project" class="accordion_element">
    <?php if(count($data['company_name']) > 0): ?>
      <?php foreach($data['company_name'] as $index => $companyName): $data['index'] = $index;?>
        <?php $this->render('_each_previous_project', $data); ?>
      <?php endforeach; ?>
    <?php endif; ?>
    <h3 class="last_accordion_header">Add previous projects</h3>
    <div class="last_accordion_content">
      <p>
        <label>Company name</label><br>
        <input type="text" name="company_name[]">
      </p>
      <p>
        <label>Year</label><br>
        <input type="text" name="year[]">
      </p>
      <p>
        <label>Project</label><br>
        <textarea cols="35" rows="5" name="project_details[]"></textarea>
      </p>
    </div>
  </div>
  <p>
    <input type="hidden" name="meta_key" value="previous_projects">
    <input type="hidden" name="required_field" value="company_name">
    <input type="hidden" name="single_view" value="_each_previous_project">
    <a class="button button-primary action_save" href="javascript:void(0);">Save</a>
    <span class="success_msg"></span>
    <span class="error_msg"></span>
  </p>
</form>