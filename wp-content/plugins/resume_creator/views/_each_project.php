<h3>
  <?php echo $company_name[$index] . '-' . $project_name[$index];?>
  <a class="action_delete">Delete</a>
</h3>
<div>
  <p>
    <label>Company name</label><br>
    <input type="text" name="company_name[]" value="<?php echo $company_name[$index];?>">
  </p>
  <p>
    <label>Project name</label><br>
    <input type="text" name="project_name[]" value="<?php echo $project_name[$index];?>">
  </p>
  <p>
    <label>Period</label><br>
    <input type="text" name="period[]" value="<?php echo $period[$index];?>">
  </p>
  <p>
    <label>Role</label><br>
    <input type="text" name="project_role[]" value="<?php echo $project_role[$index]?>">
  </p>
  <p>
    <label>Purpose</label><br>
    <textarea cols="35" rows="5" name="project_purpose[]"><?php echo $project_purpose[$index]?></textarea>
  </p>
  <p>
    <label>Delivers/Tasks</label><br>
    <textarea cols="35" rows="5" name="project_tasks[]"><?php echo $project_tasks[$index]; ?></textarea>
  </p>
  <p>
    <label>Technologies</label><br>
    <textarea cols="35" rows="5" name="project_technology[]"><?php echo $project_technology[$index]; ?></textarea>
  </p>
</div>