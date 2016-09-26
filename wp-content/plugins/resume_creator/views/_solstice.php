<?php
  $data = $this->getUserMetaData(['user_id' => $user_id, 'key' => 'rc_solstice']);
?>
<form>
  <div id="rc_solstice" class="accordion_element">
    <?php if(count($data['solstice_name']) > 0): ?>
      <?php foreach($data['solstice_name'] as $index => $solsticeName): $data['index'] = $index;?>
        <?php $this->render('_each_solstice', $data); ?>
      <?php endforeach; ?>
    <?php endif; ?>
    <h3 class="last_accordion_header">Add solstice</h3>
    <div class="last_accordion_content">
      <p>
        <label>Solstice name</label><br>
        <input type="text" name="solstice_name[]">
      </p>
      <p>
        <label>Year</label><br>
        <input type="text" name="year[]">
      </p>
    </div>
  </div>
  <p>
    <input type="hidden" name="meta_key" value="rc_solstice">
    <input type="hidden" name="required_field" value="solstice_name">
    <input type="hidden" name="single_view" value="_each_solstice">
    <a class="button button-primary action_save" href="javascript:void(0);">Save</a>
    <span class="success_msg"></span>
    <span class="error_msg"></span>
  </p>
</form>