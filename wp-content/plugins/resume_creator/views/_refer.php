<?php
  $referenceStr = get_user_meta($user_id, 'rc_reference', true);
  if($referenceStr){
    parse_str($referenceStr, $referenceArr);
  }
?>
<form>
<p>
  <label>Refer</label><br>
  <textarea cols="40" rows="5" name="reference"><?php echo $referenceArr['reference'];?></textarea>
</p>
<p>
  <input type="hidden" name="meta_key" value="rc_reference">
  <a class="button button-primary action_save" href="javascript:void(0);">Save</a>
  <span class="success_msg"></span>
  <span class="error_msg"></span>
</p>
</form>