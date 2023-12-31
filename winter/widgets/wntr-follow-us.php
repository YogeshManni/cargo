<?php
/**
 * pixeltemplate
 * @copyright  Copyright (c) 2010 pixeltemplate. (https://www.pixeltemplate.com)
 * @license    https://www.pixeltemplate.com/license/
 */
?>
<?php // Reference:  http://codex.wordpress.org/Widgets_API
class FollowMeWidget extends WP_Widget
{
   function  __construct(){
		$widget_settings = array('description' => 'Follow Us Widget', 'classname' => 'widgets-follow-us');
		parent::__construct(false,$name='WT - Follow Us Widget',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
		$linkURL1 = empty($instance['linkURL1']) ? '' : $instance['linkURL1'];
		$linkURL2 = empty($instance['linkURL2']) ? '' : $instance['linkURL2'];
		$linkURL3 = empty($instance['linkURL3']) ? '' : $instance['linkURL3'];
		$linkURL4 = empty($instance['linkURL4']) ? '' : $instance['linkURL4'];
		$linkURL5 = empty($instance['linkURL5']) ? '' : $instance['linkURL5'];
		$linkURL6 = empty($instance['linkURL6']) ? '' : $instance['linkURL6'];
		$linkURL7 = empty($instance['linkURL7']) ? '' : $instance['linkURL7'];
		$linkURL8 = empty($instance['linkURL8']) ? '' : $instance['linkURL8'];
		$linkURL9 = empty($instance['linkURL9']) ? '' : $instance['linkURL9'];
		$linkURL10 = empty($instance['linkURL10']) ? '' : $instance['linkURL10'];
		echo wp_kses_post($before_widget);		
		if(!empty($title)) :			
			echo wp_kses_post($before_title);			
		endif;
		if($title)		
		echo wp_kses_post($title);	
		if(!empty($title)) :			
			echo wp_kses_post($after_title);				
		endif;
		?>
	
	<ul class="toggle-block">
		<div id="follow_us" class="follow-us">	
	<li>
	<?php if(!empty($linkURL1)) :  ?>
		<a href="<?php echo esc_url($linkURL1); ?>" title="<?php echo esc_attr_e('Facebook', 'Buildry');?>" class="facebook social_icon"> <i class="fab fa-facebook" aria-hidden="true"></i><div class="social-label"><?php echo esc_html_e('Facebook','Buildry'); ?></div></a>
	<?php endif; ?>
	<?php if(!empty($linkURL2)) :  ?>
		<a href="<?php echo esc_url($linkURL2); ?>" title="<?php echo esc_attr_e('Twitter', 'Buildry');?>" class="twitter social_icon"><i class="fab fa-twitter"></i><div class="social-label"><?php echo esc_html_e('Twitter','Buildry'); ?></div></a>
	<?php endif; ?>	
	<?php if(!empty($linkURL3)) :  ?>
		<a href="<?php echo esc_url($linkURL3); ?>" title="<?php echo esc_attr_e('Linkedin', 'Buildry');?>" class="linkedin social_icon"><i class="fab fa-linkedin"></i><div class="social-label"><?php echo esc_html_e('Linkedin','Buildry'); ?></div></a>
	<?php endif; ?>
	<?php if(!empty($linkURL4)) :  ?>
		<a href="<?php echo esc_url($linkURL4); ?>" title="<?php echo esc_attr_e('RSS', 'Buildry');?>" class="rss social_icon"><i class="fa fa-rss"></i><div class="social-label"><?php echo esc_html_e('RSS','Buildry'); ?></div></a>
	<?php endif; ?>
	<?php if(!empty($linkURL5)) :  ?>
		<a href="<?php echo esc_url($linkURL5); ?>" title="<?php echo esc_attr_e('Youtube', 'Buildry');?>" class="youtube social_icon"><i class="fab fa-youtube"></i><div class="social-label"><?php echo esc_html_e('Youtube','Buildry'); ?></div></a>
	<?php endif; ?>	
	<?php if(!empty($linkURL6)) :  ?>
		<a href="<?php echo esc_url($linkURL6); ?>" title="<?php echo esc_attr_e('Pinterest', 'Buildry');?>" class="pinterest social_icon"><i class="fab fa-pinterest"></i><div class="social-label"><?php echo esc_html_e('Pinterest','Buildry'); ?></div></a>
	<?php endif; ?>
	<?php if(!empty($linkURL7)) :  ?>
		<a href="<?php echo esc_url($linkURL7); ?>" title="<?php echo esc_attr_e('Google Plus', 'Buildry');?> " class="google-plus social_icon"><i class="fab fa-google-plus"></i><div class="social-label"><?php echo esc_html_e('Google Plus','Buildry'); ?></div></a>
	<?php endif; ?>
	<?php if(!empty($linkURL8)) :  ?>
		<a href="<?php echo esc_url($linkURL8); ?>" title="<?php echo esc_attr_e('Skype', 'Buildry');?>" class="skype social_icon"><i class="fab fa-skype"></i><div class="social-label"><?php echo esc_html_e('Skype','Buildry'); ?></div></a>
	<?php endif; ?>
	<?php if(!empty($linkURL9)) :  ?>
		<a href="<?php echo esc_url($linkURL9); ?>" title="<?php echo esc_attr_e('Instagram', 'Buildry');?>" class="instagram social_icon"><i class="fa fa-instagram"></i><div class="social-label"><?php echo esc_html_e('Instagram','Buildry'); ?></div></a>
	<?php endif; ?>	
	<?php if(!empty($linkURL10)) :  ?>
		<a href="<?php echo esc_url($linkURL10); ?>" title="<?php echo esc_attr_e('Vimeo', 'Buildry');?>" class="vimeo social_icon"><i class="fa fa-vimeo"></i><div class="social-label"><?php echo esc_html_e('Vimeo','Buildry'); ?></div></a>
	<?php endif; ?>	
	</li>
</div>
	</ul>

<?php
		echo wp_kses_post($after_widget);
	}
    function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['linkURL1'] = strip_tags($new_instance['linkURL1']);
		$instance['linkURL2'] = strip_tags($new_instance['linkURL2']);
		$instance['linkURL3'] = strip_tags($new_instance['linkURL3']);
		$instance['linkURL4'] = strip_tags($new_instance['linkURL4']);
		$instance['linkURL5'] = strip_tags($new_instance['linkURL5']);
		$instance['linkURL6'] = strip_tags($new_instance['linkURL6']);
		$instance['linkURL7'] = strip_tags($new_instance['linkURL7']);
		$instance['linkURL8'] = strip_tags($new_instance['linkURL8']);
		$instance['linkURL9'] = strip_tags($new_instance['linkURL9']);	
		$instance['linkURL10'] = strip_tags($new_instance['linkURL10']);
		return $instance;
	}
    function form($instance){	
		$instance = wp_parse_args( (array) $instance, array(	
		'title'=>'Follow Us',	
		'linkURL1' => '#', 
		'linkURL2' => '#',
		'linkURL3' => '#', 
		'linkURL4' => '#', 
		'linkURL5' => '#',
		'linkURL6' => '#',
		'linkURL7' => '#',
		'linkURL8' => '#',
		'linkURL9' => '#',
		'linkURL10' => '#') );
		$title = esc_attr($instance['title']);		
		$linkURL1 = esc_attr($instance['linkURL1']);
		$linkURL2 = esc_attr($instance['linkURL2']);
		$linkURL3 = esc_attr($instance['linkURL3']);
		$linkURL4 = esc_attr($instance['linkURL4']);
		$linkURL5 = esc_attr($instance['linkURL5']);
		$linkURL6 = esc_attr($instance['linkURL6']);
		$linkURL7 = esc_attr($instance['linkURL7']);
		$linkURL8 = esc_attr($instance['linkURL8']);
		$linkURL9 = esc_attr($instance['linkURL9']);
		$linkURL10 = esc_attr($instance['linkURL10']);?>
<p><label for="<?php echo esc_attr($this->get_field_id('title'));?>"><?php esc_html_e('Title:', '
Buildry'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('title'));?>" name="<?php echo esc_attr($this->get_field_name('title'));?>" type="text" value="<?php echo esc_attr($title);?>" /></p>
<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL1'));?>"><strong>Facebook</strong></label>
<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL1'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL1'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL1'));?>" type="text" value="<?php echo esc_attr($linkURL1);?>" />
  <label>(e.g. http://www.facebook.com/...)</label>
  <br />
</p>

<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL2'));?>"><strong>Twitter</strong></label>
<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL2'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL2'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL2'));?>" type="text" value="<?php echo esc_attr($linkURL2);?>" />
  <label>(e.g. http://www.Twitter.com/...)</label>
  <br />
</p>

<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL3'));?>"><strong>Linkedin</strong></label>
<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL3'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL3'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL3'));?>" type="text" value="<?php echo esc_attr($linkURL3);?>" />
  <label>(e.g. http://linkedin.com...)</label>
  <br />
</p>

<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL4'));?>"><strong>RSS</strong></label>
<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL4'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL4'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL4'));?>" type="text" value="<?php echo esc_attr($linkURL4);?>" />
  <label>(e.g. http://feeds.feedburner.com/...)</label>
  <br />
</p>

<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL5'));?>"><strong>Youtube</strong></label>
<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL5'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL5'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL5'));?>" type="text" value="<?php echo esc_attr($linkURL5);?>" />
  <label>(e.g. http://www.youtube.com/...)</label>
  <br />
</p>

<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL6'));?>"><strong>Pinterest</strong></label>
<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL6'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL6'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL6'));?>" type="text" value="<?php echo esc_attr($linkURL6);?>" />
  <label>(e.g. http://www.pinterest.com/...)</label>
  <br />
</p>

<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL7'));?>"><strong>Google Plus</strong></label>
<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL7'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL7'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL7'));?>" type="text" value="<?php echo esc_attr($linkURL7);?>" />
  <label>(e.g. http://www.google.com/...)</label>
  <br />
</p>

<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL8'));?>"><strong>Skype</strong></label>
<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL8'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL8'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL8'));?>" type="text" value="<?php echo esc_attr($linkURL8);?>" />
  <label>(e.g. http://www.skype.com/...)</label>
  <br />
</p>

<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL9'));?>"><strong>Instagram</strong></label>
<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL9'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL9'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL9'));?>" type="text" value="<?php echo esc_attr($linkURL9);?>" />
  <label>(e.g. http://www.instagram.com/...)</label>
  <br />
</p>

<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL10'));?>"><strong>Vimeo</strong></label>
<p>
  <label for="<?php echo esc_attr($this->get_field_id('linkURL10'));?>">Link URL:<br />
  </label>
  <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkURL10'));?>" name="<?php echo esc_attr($this->get_field_name('linkURL10'));?>" type="text" value="<?php echo esc_attr($linkURL10);?>" />
  <label>(e.g. http://www.vimeo.com/...)</label>
  <br />
</p>
<?php
	}
}

function follow_me_register_widgets()
{
	global $wp_widget_factory;
    $wp_widget_factory->register('FollowMeWidget');
}
add_action('widgets_init', 'follow_me_register_widgets');
// end foolow me widgets
?>