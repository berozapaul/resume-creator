<h3>
  <?php echo $solstice_name[$index];?>
  <a class="action_delete">Delete</a>
</h3>
<div>
  <p>
    <label>School</label><br>
    <input type="text" name="solstice_name[]" value="<?php echo $solstice_name[$index];?>">
  </p>
  <p>
    <label>Year</label><br>
    <input type="text" name="year[]" value="<?php echo $year[$index];?>">
  </p>
</div>