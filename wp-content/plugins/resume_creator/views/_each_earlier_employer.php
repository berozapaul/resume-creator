<h3>
  <?php echo $employer_name[$index];?>
  <a class="action_delete">Delete</a>
</h3>
<div>
  <p>
    <label>Employer</label><br>
    <input type="text" name="employer_name[]" value="<?php echo $employer_name[$index];?>">
  </p>
  <p>
    <label>Year</label><br>
    <input type="text" name="year[]" value="<?php echo $year[$index];?>">
  </p>
  <p>
    <label>Position</label><br>
    <input type="text" name="position[]" value="<?php echo $position[$index];?>">
  </p>
</div>