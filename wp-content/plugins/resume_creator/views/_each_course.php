<h3>
  <?php echo $course_name[$index];?>
  <a class="action_delete">Delete</a>
</h3>
<div>
  <p>
    <label>School</label><br>
    <input type="text" name="course_name[]" value="<?php echo $course_name[$index];?>">
  </p>
  <p>
    <label>Year</label><br>
    <input type="text" name="year[]" value="<?php echo $year[$index];?>">
  </p>
</div>