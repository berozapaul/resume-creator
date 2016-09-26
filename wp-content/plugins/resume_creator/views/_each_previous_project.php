<h3>
  <?php echo $company_name[$index];?>
  <a class="action_delete">Delete</a>
</h3>
<div>
  <p>
    <label>Company name</label><br>
    <input type="text" name="company_name[]" value="<?php echo $company_name[$index];?>">
  </p>
  <p>
    <label>Year</label><br>
    <input type="text" name="year[]" value="<?php echo $year[$index];?>">
  </p>
  <p>
    <label>Project</label><br>
    <textarea cols="35" rows="5" name="project_details[]"><?php echo $project_details[$index];?></textarea>
  </p>
</div>