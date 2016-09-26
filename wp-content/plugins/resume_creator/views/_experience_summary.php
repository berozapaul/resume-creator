<?php
  $summaryStr = get_user_meta($user_id, 'experience_summary', true);
  if($summaryStr){
    parse_str($summaryStr, $summaryArr);
  }
?>
<form>
<p>
  <label>Summary project experience</label><br>
  <textarea cols="50" rows="10" name="experience_summary"><?php echo $summaryArr['experience_summary'];?></textarea>
</p>
<p>
  <input type="hidden" name="meta_key" value="experience_summary">
  <a class="button button-primary action_save" href="javascript:void(0);">Save</a>
  <span class="success_msg"></span>
  <span class="error_msg"></span>
</p>
</form>