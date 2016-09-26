<?php
  $data = $this->getUserMetaData(['user_id' => $user_id, 'key' => 'recent_projects']);
?>
<form>
  <div id="project_accordion" class="accordion_element">
    <?php if(count($data['company_name']) > 0): ?>
      <?php foreach($data['company_name'] as $index => $companyName): $data['index'] = $index;?>
        <?php $this->render('_each_project', $data); ?>
      <?php endforeach; ?>
    <?php endif; ?>
    <h3 class="last_accordion_header">Add new projects</h3>
    <div class="last_accordion_content">
      <p>
        <label>Company name</label><br>
        <input type="text" name="company_name[]">
      </p>
      <p>
        <label>Project name</label><br>
        <input type="text" name="project_name[]">
      </p>
      <p>
        <label>Period</label><br>
        <input type="text" name="period[]">
      </p>
      <p>
        <label>Role</label><br>
        <input type="text" name="project_role[]">
      </p>
      <p>
        <label>Purpose</label><br>
        <textarea cols="35" rows="5" name="project_purpose[]"></textarea>
      </p>
      <p>
        <label>Delivers/Tasks</label><br>
        <textarea cols="35" rows="5" name="project_tasks[]"></textarea>
      </p>
      <p>
        <label>Technologies</label><br>
        <textarea cols="35" rows="5" name="project_technology[]"></textarea>
      </p>
    </div>
  </div>
  <p>
    <input type="hidden" name="meta_key" value="recent_projects">
    <input type="hidden" name="required_field" value="company_name">
    <input type="hidden" name="single_view" value="_each_project">
    <a class="button button-primary action_save" href="javascript:void(0);">Save</a>
    <span class="success_msg"></span>
    <span class="error_msg"></span>
  </p>
</form>