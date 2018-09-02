<?php

class cd_locations_widget extends WP_Widget
{

  // Setup Widget Details
  public function __construct()
  {
    $widget_options = array(
      'classname'   => 'locations_widget',
      'description' => 'Locations widget for address, phone and fax number',
    );
    parent::__construct('locations_widget', 'Locations Widget', $widget_options);
  }

  // Widget Output Displayed on Front End
  public function widget($args, $instance)
  {
    $title = apply_filters('widget_title', $instance['title']);
    $address = apply_filters('widget_address', $instance['address']);
    $address2 = apply_filters('widget_address2', $instance['address2']);
    $address_city = apply_filters('widget_address_city', $instance['address_city']);
    $address_state = apply_filters('widget_address_state', $instance['address_state']);
    $address_zip = apply_filters('widget_address_zip', $instance['address_zip']);
    $address_country = apply_filters('widget_address_country', $instance['address_country']);
    $phone = apply_filters('widget_phone', $instance['phone']);
    $fax = apply_filters('widget_fax', $instance['fax']);

    echo $args['before_widget'] . $args['before_title'] . $args['after_title'];?>

    <address class="footer__address">
    	<?php if ( !empty($title) ) {	echo '<h3 class="footer__address-name">'.$title.'</h3>';}	?>
    	<?php if ( !empty($address) ) {	echo '<p class="footer__address-addr">'.$address.'<br>'.(!empty($address2) ? $address2.'<br>' : '').(!empty($address_city) ? $address_city.',' : '').(!empty($address_state) ? $address_state.' ' : '').(!empty($address_zip) ? $address_zip.' ' : '').(!empty($address_country) ? $address_country.' ' : '').'</p>';	}	?>
      <?php if ( !empty($phone) or !empty($fax)  ) {
      	echo '<p class="footer__address-phone">'.(!empty($phone) ? '<strong>Phone:</strong> <a href="tel:'.$phone.'">'.$phone.'</a><br>' : '').(!empty($fax) ? '<strong>Fax:</strong> <a href="tel:'.$fax.'">'.$fax.'</a><br>' : '').'</p>';
      }	?>
	  </address>

  	<?php echo $args['after_widget'];
  }

  // Widget Fields Backend
  public function form($instance)
  {
  // Location Name
  $title = !empty($instance['title']) ? $instance['title'] : ''; ?>
  <p>
    <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
    <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>" class="widefat title" />
  </p>
  <?php
  // Location Address
  $address = !empty($instance['address']) ? $instance['address'] : ''; ?>
  <p>
    <label for="<?php echo $this->get_field_id('address'); ?>">Address:</label>
    <input type="text" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" value="<?php echo esc_attr($address); ?>" class="widefat title" />
  </p>
  <?php
  // Location Address 2
  $address2 = !empty($instance['address2']) ? $instance['address2'] : ''; ?>
  <p>
    <label for="<?php echo $this->get_field_id('address2'); ?>">Address 2:</label>
    <input type="text" id="<?php echo $this->get_field_id('address2'); ?>" name="<?php echo $this->get_field_name('address2'); ?>" value="<?php echo esc_attr($address2); ?>" class="widefat title" />
  </p>
  <?php
  // Location City
  $address_city = !empty($instance['address_city']) ? $instance['address_city'] : ''; ?>
  <p>
    <label for="<?php echo $this->get_field_id('address_city'); ?>">City:</label>
    <input type="text" id="<?php echo $this->get_field_id('address_city'); ?>" name="<?php echo $this->get_field_name('address_city'); ?>" value="<?php echo esc_attr($address_city); ?>" class="widefat title" />
  </p>
  <?php
  // Location State
  $address_state = !empty($instance['address_state']) ? $instance['address_state'] : ''; ?>
  <p>
    <label for="<?php echo $this->get_field_id('address_state'); ?>">State:</label>
    <input type="text" id="<?php echo $this->get_field_id('address_state'); ?>" name="<?php echo $this->get_field_name('address_state'); ?>" value="<?php echo esc_attr($address_state); ?>" class="widefat title" />
  </p>
  <?php
  // Location Zip
  $address_zip = !empty($instance['address_zip']) ? $instance['address_zip'] : ''; ?>
  <p>
    <label for="<?php echo $this->get_field_id('address_zip'); ?>">Zip:</label>
    <input type="text" id="<?php echo $this->get_field_id('address_zip'); ?>" name="<?php echo $this->get_field_name('address_zip'); ?>" value="<?php echo esc_attr($address_zip); ?>" class="widefat title" />
  </p>
  <?php
  // Location Country
  $address_country = !empty($instance['address_country']) ? $instance['address_country'] : ''; ?>
  <p>
    <label for="<?php echo $this->get_field_id('address_country'); ?>">Country:</label>
    <input type="text" id="<?php echo $this->get_field_id('address_country'); ?>" name="<?php echo $this->get_field_name('address_country'); ?>" value="<?php echo esc_attr($address_country); ?>" class="widefat title" />
  </p>
  <?php
  // Location Phone
  $phone = !empty($instance['phone']) ? $instance['phone'] : ''; ?>
  <p>
    <label for="<?php echo $this->get_field_id('phone'); ?>">Phone:</label>
    <input type="text" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" value="<?php echo esc_attr($phone); ?>" class="widefat title" />
  </p>
  <?php
  // Location Fax
  $fax = !empty($instance['fax']) ? $instance['fax'] : ''; ?>
  <p>
    <label for="<?php echo $this->get_field_id('fax'); ?>">Fax:</label>
    <input type="text" id="<?php echo $this->get_field_id('fax'); ?>" name="<?php echo $this->get_field_name('fax'); ?>" value="<?php echo esc_attr($fax); ?>" class="widefat title" />
  </p>
  <?php
}

  // Update WordPress Database with widget
  public function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = strip_tags(trim($new_instance['title']));
    $instance['address'] = strip_tags(trim($new_instance['address']));
    $instance['address2'] = strip_tags(trim($new_instance['address2']));
    $instance['address_city'] = strip_tags(trim($new_instance['address_city']));
    $instance['address_state'] = strip_tags(trim($new_instance['address_state']));
    $instance['address_zip'] = strip_tags(trim($new_instance['address_zip']));
    $instance['address_country'] = strip_tags(trim($new_instance['address_country']));
    $instance['phone'] = strip_tags(trim($new_instance['phone']));
    $instance['fax'] = strip_tags(trim($new_instance['fax']));
    return $instance;
  }

}

// Register and Init Widget
function register_locations_widget()
{
  register_widget('cd_locations_widget');
}
add_action('widgets_init', 'register_locations_widget');