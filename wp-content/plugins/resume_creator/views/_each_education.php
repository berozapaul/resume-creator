<h3>
  <?php echo $school_name[$index];?>
  <a class="action_delete">Delete</a>
</h3>
<div>
  <p>
    <label>School</label><br>
    <input type="text" name="school_name[]" value="<?php echo $school_name[$index];?>">
  </p>
  <p>
    <label>Year</label><br>
    <input type="text" name="year[]" value="<?php echo $year[$index];?>">
  </p>
  <p>
    <label>Education</label><br>
    <textarea cols="35" rows="5" name="education[]"><?php echo $education[$index];?></textarea>
  </p>
</div>