<?php
  $data = $this->getUserMetaData(['user_id' => $user_id, 'key' => 'earlier_employers']);
?>
<form>
  <div id="earlier_employers" class="accordion_element">
    <?php if(count($data['employer_name']) > 0): ?>
      <?php foreach($data['employer_name'] as $index => $employerName): $data['index'] = $index;?>
        <?php $this->render('_each_earlier_employer', $data); ?>
      <?php endforeach; ?>
    <?php endif; ?>
    <h3 class="last_accordion_header">Add previous projects</h3>
    <div class="last_accordion_content">
      <p>
        <label>Employer</label><br>
        <input type="text" name="employer_name[]">
      </p>
      <p>
        <label>Year</label><br>
        <input type="text" name="year[]">
      </p>
      <p>
        <label>Position</label><br>
        <input type="text" name="position[]">
      </p>
    </div>
  </div>
  <p>
    <input type="hidden" name="meta_key" value="earlier_employers">
    <input type="hidden" name="required_field" value="employer_name">
    <input type="hidden" name="single_view" value="_each_earlier_employer">
    <a class="button button-primary action_save" href="javascript:void(0);">Save</a>
    <span class="success_msg"></span>
    <span class="error_msg"></span>
  </p>
</form>