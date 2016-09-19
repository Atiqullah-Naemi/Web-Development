<?php 

/*
Plugin Name: AtContactFa
Description: This plugin allows to display a very simple contact details of your company in your website.
Version: 1.0.0
Author: Atiqullah Naemi
Author URI: https://au.linkedin.com/in/atiqullah-naemi-2a4b6a99
License: GPL2
*/

class AtContactFa extends WP_Widget
{
	public function __construct()
	{
		$options = array(
					'name' => 'AtContactFa',
					'description' => 'A very simple contact form widget',
			);
		parent::__construct('AtContactFa', '', $options);
	}
	public function widget($args, $instace)
	{
		$title = apply_filters('widget_title', $instace['title']);
		$name =  $instace['name'];
		$address = $instace['address'];
		$cityAndZipcode = $instace['cityAndZipcode'];
		$stateAndCountry = $instace['stateAndCountry'];
		$phone = $instace['phone'];
		$email = $instace['email'];

		echo '<h3 style="color:#10A6D8">'.$title.'</h3>'.'<br />';
		echo $name.'<br />';
		echo $address.'<br />';
		echo $cityAndZipcode.'<br />';
		echo $stateAndCountry.'<br />';
		echo $phone.'<br />';
		echo $email.'<br />';

	}
	public function form($instace)
	{
		if(isset($instace['title']))
		{
			$title = $instace['title'];
		}
		else 
		{
			$title = __('AtContactFa', 'text_domain');
		}

		$name = $instace['name'];
		$address = $instace['address'];
		$cityAndZipcode = $instace['cityAndZipcode'];
		$stateAndCountry = $instace['stateAndCountry'];
		$phone = $instace['phone'];
		$email = $instace['email'];

		?>

		<p>
		<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
		name="<?php echo $this->get_field_name('title'); ?>"
		value="<?php echo esc_attr($title); ?>" >
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('name'); ?>"><?php _e('Company Name:'); ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('name'); ?>"
		name="<?php echo $this->get_field_name('name'); ?>"
		value="<?php echo esc_attr($name); ?>" >
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Address:'); ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('address'); ?>"
		name="<?php echo $this->get_field_name('address'); ?>"
		value="<?php echo esc_attr($address); ?>" >
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('cityAndZipcode'); ?>"><?php _e('cityAndZipcode:'); ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('cityAndZipcode'); ?>"
		name="<?php echo $this->get_field_name('cityAndZipcode'); ?>"
		value="<?php echo esc_attr($cityAndZipcode); ?>" >
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('stateAndCountry'); ?>"><?php _e('stateAndCountry:'); ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('stateAndCountry'); ?>"
		name="<?php echo $this->get_field_name('stateAndCountry'); ?>"
		value="<?php echo esc_attr($stateAndCountry); ?>" >
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Phone:'); ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('phone'); ?>"
		name="<?php echo $this->get_field_name('phone'); ?>"
		value="<?php echo esc_attr($phone); ?>" >
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('E-mail:'); ?></label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('email'); ?>"
		name="<?php echo $this->get_field_name('email'); ?>"
		value="<?php echo esc_attr($email); ?>" >
		</p>

		<?php 
	}
}

add_action('widgets_init', 'register_af_contact');
function register_af_contact()
{
	register_widget('AtContactFa');
}

?>
