<?php
  $data = $this->getUserMetaData(['user_id' => $user_id, 'key' => 'rc_courses']);
?>
<form>
  <div id="rc_courses" class="accordion_element">
    <?php if(count($data['course_name']) > 0): ?>
      <?php foreach($data['course_name'] as $index => $courseName): $data['index'] = $index;?>
        <?php $this->render('_each_course', $data); ?>
      <?php endforeach; ?>
    <?php endif; ?>
    <h3 class="last_accordion_header">Add course</h3>
    <div class="last_accordion_content">
      <p>
        <label>Course name</label><br>
        <input type="text" name="course_name[]">
      </p>
      <p>
        <label>Year</label><br>
        <input type="text" name="year[]">
      </p>
    </div>
  </div>
  <p>
    <input type="hidden" name="meta_key" value="rc_courses">
    <input type="hidden" name="required_field" value="course_name">
    <input type="hidden" name="single_view" value="_each_course">
    <a class="button button-primary action_save" href="javascript:void(0);">Save</a>
    <span class="success_msg"></span>
    <span class="error_msg"></span>
  </p>
</form>