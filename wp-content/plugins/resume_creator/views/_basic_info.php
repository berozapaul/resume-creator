<?php
  $userMetaStr = get_user_meta($user_id, 'basic_information', true);
  if($userMetaStr){
    parse_str($userMetaStr, $userMetaArr);
  }
?>
<form>
<p>
  <label>Designation</label><br>
  <input type="text" name="designation" value="<?php echo $userMetaArr['designation'];?>">
</p>

<p>
  <label>Birthday</label><br>
  <input type="text" name="birth_day" value="<?php echo $userMetaArr['birth_day'];?>">
</p>

<p>
  <label>Nationality</label><br>
  <select name="nationality">
    <option <?php if($userMetaArr['nationality'] == 'Norwegian') echo 'selected'?> value="Norwegian">Norwegian</option>
    <option <?php if($userMetaArr['nationality'] == 'Swedish') echo 'selected'?> value="Swedish">Swedish</option>
    <option <?php if($userMetaArr['nationality'] == 'Danish') echo 'selected'?> value="Danish">Danish</option>
  </select>
</p>

<p>
  <label>Language</label><br>
  <select name="language">
    <option <?php if($userMetaArr['language'] == 'Norwegian') echo 'selected' ?> value="Norwegian">Norwegian</option>
    <option <?php if($userMetaArr['language'] == 'Swedish') echo 'selected' ?> value="Swedish">Swedish</option>
    <option <?php if($userMetaArr['language'] == 'Danish') echo 'selected' ?> value="Danish">Danish</option>
    <option <?php if($userMetaArr['language'] == 'English') echo 'selected' ?> value="English">English</option>
  </select>
</p>

<p>
  <label>Civil status</label><br>
  <select name="civil_status">
    <option <?php if($userMetaArr['civil_status'] == 'Gift') echo 'selected' ?> value="Gift">Gift</option>
    <option <?php if($userMetaArr['civil_status'] == 'Ugift') echo 'selected' ?> value="Ugift">Ugift</option>
  </select>
</p>

<p>
  <input type="hidden" name="meta_key" value="basic_information">
  <a class="button button-primary action_save" href="javascript:void(0);">Save</a>
  <span class="success_msg"></span>
  <span class="error_msg"></span>
</p>
</form>