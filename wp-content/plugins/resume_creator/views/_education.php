<?php
  $data = $this->getUserMetaData(['user_id' => $user_id, 'key' => 'rc_education']);
?>
<form>
  <div id="rc_education" class="accordion_element">
    <?php if(count($data['school_name']) > 0): ?>
      <?php foreach($data['school_name'] as $index => $schoolName): $data['index'] = $index;?>
        <?php $this->render('_each_education', $data); ?>
      <?php endforeach; ?>
    <?php endif; ?>
    <h3 class="last_accordion_header">Add education</h3>
    <div class="last_accordion_content">
      <p>
        <label>School</label><br>
        <input type="text" name="school_name[]">
      </p>
      <p>
        <label>Year</label><br>
        <input type="text" name="year[]">
      </p>
      <p>
        <label>Education</label><br>
        <textarea cols="35" rows="5" name="education[]"></textarea>
      </p>
    </div>
  </div>
  <p>
    <input type="hidden" name="meta_key" value="rc_education">
    <input type="hidden" name="required_field" value="school_name">
    <input type="hidden" name="single_view" value="_each_education">
    <a class="button button-primary action_save" href="javascript:void(0);">Save</a>
    <span class="success_msg"></span>
    <span class="error_msg"></span>
  </p>
</form>