<!-- This file is used to markup the administration form of the widget. -->
<div class="wrapper">
  <fieldset>
    <legend>
      <?php _e('Cforms Counter', PLUGIN_LOCALE); ?>
    </legend>
    
	<div class="option">
      <label for="title">
        <?php _e('Title: ', PLUGIN_LOCALE); ?>
      </label>
      <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" class="">
    </div>
	
    <div class="option">
      <label for="form_id">
        <?php _e('Form ID', PLUGIN_LOCALE); ?>
      </label>
      <input type="text" id="<?php echo $this->get_field_id('form_ID'); ?>" name="<?php echo $this->get_field_name('form_ID'); ?>" value="<?php echo $instance['form_ID']; ?>" class="">
    </div>
    
	<div class="option">
      <label for="countdown">
        <?php _e('Countdown', PLUGIN_LOCALE); ?>
      </label>
      <input type="text" id="<?php echo $this->get_field_id('countdown'); ?>" name="<?php echo $this->get_field_name('countdown'); ?>" value="<?php echo $instance['countdown']; ?>" class="">
    </div>
	
	<div class="option">
      <label for="counter_text">
        <?php _e('Counter Text', PLUGIN_LOCALE); ?>
      </label>
      <input type="text" id="<?php echo $this->get_field_id('counter_text'); ?>" name="<?php echo $this->get_field_name('counter_text'); ?>" value="<?php echo $instance['counter_text']; ?>" class="">
    </div>
    
  </fieldset>
</div>
  