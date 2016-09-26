<div class="wrap">
  <h2>Add resume information</h2>
  <div id="resume_accordion" class="resume_container">
    <h3>Basic information</h3>
    <div class="basic_info">
      <?=$this->render('_basic_info', array('user_id' => $user->ID));?>
    </div>
    <h3>Recent projects</h3>
    <div class="recent_projects">
      <?=$this->render('_recent_projects', array('user_id' => $user->ID));?>
    </div>
    <h3>Previous projects</h3>
    <div class="previous_projects">
      <?=$this->render('_previous_projects', array('user_id' => $user->ID));?>
    </div>
    <h3>Earlier employers</h3>
    <div class="earlier_employers">
      <?=$this->render('_earlier_employers', array('user_id' => $user->ID));?>
    </div>
    <h3>Education</h3>
    <div class="education">
      <?=$this->render('_education', array('user_id' => $user->ID));?>
    </div>
    <h3>Courses</h3>
    <div class="courses">
      <?=$this->render('_courses', array('user_id' => $user->ID));?>
    </div>
    <h3>Solstice</h3>
    <div class="solstice">
      <?=$this->render('_solstice', array('user_id' => $user->ID));?>
    </div>
    <h3>Summary project experience</h3>
    <div class="experience_summary">
      <?=$this->render('_experience_summary', array('user_id' => $user->ID));?>
    </div>
    <h3>Refer</h3>
    <div class="refer">
      <?=$this->render('_refer', array('user_id' => $user->ID));?>
    </div>
  </div>
  <input type="hidden" id="user_id" value="<?php echo $_REQUEST['user']?>">
</div>
