<?php 
/*
Template Name: Contact Page
*/ 
?>

<?php
get_header();

$hide_contact_form_website = "";
if (isset($qode_options_elision['hide_contact_form_website'])) $hide_contact_form_website = $qode_options_elision['hide_contact_form_website'];

if(get_post_meta($id, "qode_responsive-title-image", true) != ""){
 $responsive_title_image = get_post_meta($id, "qode_responsive-title-image", true);
}else{
	$responsive_title_image = $qode_options_elision['responsive_title_image'];
}

if(get_post_meta($id, "qode_fixed-title-image", true) != ""){
 $fixed_title_image = get_post_meta($id, "qode_fixed-title-image", true);
}else{
	$fixed_title_image = $qode_options_elision['fixed_title_image'];
}

if(get_post_meta($id, "qode_title-image", true) != ""){
 $title_image = get_post_meta($id, "qode_title-image", true);
}else{
	$title_image = $qode_options_elision['title_image'];
}
$title_image_height = "";
$title_image_width = "";
if(!empty($title_image)){
	$title_image_url_obj = parse_url($title_image);
  if (file_exists($_SERVER['DOCUMENT_ROOT'].$title_image_url_obj['path']))
		list($title_image_width, $title_image_height, $title_image_type, $title_image_attr) = getimagesize($_SERVER['DOCUMENT_ROOT'].$title_image_url_obj['path']);
}

if(get_post_meta($id, "qode_title-height", true) != ""){
 $title_height = get_post_meta($id, "qode_title-height", true);
}else{
	$title_height = $qode_options_elision['title_height'];
}

$title_background_color = '';
if(get_post_meta($id, "qode_page-title-background-color", true) != ""){
 $title_background_color = get_post_meta($id, "qode_page-title-background-color", true);
}else{
	$title_background_color = $qode_options_elision['title_background_color'];
}

$show_title_image = true;
if(get_post_meta($id, "qode_show-page-title-image", true)) {
	$show_title_image = false;
}
if($qode_options_elision['enable_google_map'] == "yes"){
	$container_class= " full_map";
} else {
	$container_class= "";
}
$qode_page_title_style = "standard";
if(get_post_meta($id, "qode_page_title_style", true) != ""){
	$qode_page_title_style = get_post_meta($id, "qode_page_title_style", true);
}else{
	if(isset($qode_options_elision['title_style'])) {
		$qode_page_title_style = $qode_options_elision['title_style'];
	} else {
		$qode_page_title_style = "standard";
	}
}
$height_class = "";
if($qode_page_title_style == "title_on_bottom") {
	$height_class = " title_on_bottom";
}

?>
	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php if(get_post_meta($id, "qode_page_scroll_amount_for_sticky", true)) { ?>
			<script>
			var page_scroll_amount_for_sticky = <?php echo get_post_meta($id, "qode_page_scroll_amount_for_sticky", true); ?>;
			</script>
		<?php } ?>
		
		<?php if(!get_post_meta($id, "qode_show-page-title", true)) { ?>
			<div class="title<?php echo $height_class; ?> <?php if($responsive_title_image == 'no' && $title_image != "" && ($fixed_title_image == "yes" || $fixed_title_image == "yes_zoom") && $show_title_image == true){ echo 'has_fixed_background '; if($fixed_title_image == "yes_zoom"){ echo 'zoom_out '; } } if($responsive_title_image == 'no' && $title_image != "" && $fixed_title_image == "no" && $show_title_image == true){ echo 'has_background'; } if($responsive_title_image == 'yes' && $show_title_image == true){ echo 'with_image'; } ?>" style="<?php if($responsive_title_image == 'no' && $title_image != "" && $show_title_image == true){ if($title_image_width != ''){ echo 'background-size:'.$title_image_width.'px auto;'; } echo 'background-image:url('.$title_image.');';  } if($title_height != ''){ echo 'height:'.$title_height.'px;'; } if($title_background_color != ''){ echo 'background-color:'.$title_background_color.';'; } ?>">
				<div class="image <?php if($responsive_title_image == 'yes' && $title_image != "" && $show_title_image == true){ echo "responive"; }else{ echo "not_responsive"; } ?>"><?php if($title_image != ""){ ?><img src="<?php echo $title_image; ?>" alt="&nbsp;" /> <?php } ?></div>
				<?php if(!get_post_meta($id, "qode_show-page-title-text", true)) { ?>
					<div class="title_holder">
						<div class="container">
							<div class="container_inner clearfix">
								<?php if($qode_page_title_style == "title_on_bottom") {  ?>
									<div class="title_on_bottom_wrap">
										<div class="title_on_bottom_holder">
											<div class="title_on_bottom_holder_inner" <?php if(get_post_meta($id, "qode_page_title_holder_color", true)) { ?> style="background-color:<?php echo get_post_meta($id, "qode_page_title_holder_color", true) ?>" <?php } ?>>
												<h1<?php if(get_post_meta($id, "qode_page-title-color", true)) { ?> style="color:<?php echo get_post_meta($id, "qode_page-title-color", true) ?>" <?php } ?>><span><?php the_title(); ?></span></h1>
											</div>
										</div>
									</div>
								<?php } else { ?>
									<h1<?php if(get_post_meta($id, "qode_page-title-color", true)) { ?> style="color:<?php echo get_post_meta($id, "qode_page-title-color", true) ?>" <?php } ?>><span><?php the_title(); ?></span></h1>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
		<?php if($qode_options_elision['enable_google_map'] == "yes"){ ?>
			<div class="google_map" id="map_canvas"></div>
		<?php } ?>
		<div class="container">
		<div class="container_inner<?php echo $container_class; ?> clearfix">
				<div class="contact_detail">
					
					<?php if($qode_options_elision['enable_contact_form'] == "yes"){ ?>
					<div class="two_columns_33_66 clearfix grid2">
						<div class="column1">
							<div class="column_inner">
								<div class="contact_info">
									<?php the_content(); ?>
								</div>	
							</div>
						</div>
						<div class="column2">
							<div class="column_inner">
								<div class="contact_form">
									<h4><?php if($qode_options_elision['contact_heading_above'] != "") { echo $qode_options_elision['contact_heading_above'];  } else { ?><?php _e('Contact Us', 'qode'); ?><?php } ?></h4>
									<form id="contact-form" method="post" action="">
										<div class="two_columns_50_50 clearfix">
											<div class="column1">
												<div class="column_inner">
													<input type="text" class="requiredField" name="fname" id="fname" value="" placeholder="<?php _e('First Name *', 'qode'); ?>" />
												</div>
											</div>
											<div class="column2">
												<div class="column_inner">
													<input type="text" class="requiredField" name="lname" id="lname" value="" placeholder="<?php _e('Last Name *', 'qode'); ?>" />
												</div>
											</div>
										</div>
										<?php if ($hide_contact_form_website == "yes") { ?>
											<input type="text" class="requiredField email" name="email" id="email" value="" placeholder="<?php _e('Email *', 'qode'); ?>" />
											<input type="hidden" name="website" id="website" value="" />
										<?php } else { ?>
											<div class="two_columns_50_50 clearfix">
												<div class="column1">
													<div class="column_inner">
														<input type="text" class="requiredField email" name="email" id="email" value="" placeholder="<?php _e('Email *', 'qode'); ?>" />
													</div>
												</div>
												<div class="column2">
													<div class="column_inner">
														<input type="text" name="website" id="website" value="" placeholder="<?php _e('Website', 'qode'); ?>" />
													</div>
												</div>
											</div>
										<?php }?>
		
										<textarea name="message" id="message" rows="10" placeholder="<?php _e('Message', 'qode'); ?>"></textarea>
										
										<?php
										if($qode_options_elision['use_recaptcha'] == "yes") :
											require_once('includes/recaptchalib.php');
											if($qode_options_elision['recaptcha_public_key']) {
												$publickey = $qode_options_elision['recaptcha_public_key'];
											} else {
												$publickey = "6Ld5VOASAAAAABUGCt9ZaNuw3IF-BjUFLujP6C8L";
											}
											if($qode_options_elision['recaptcha_private_key']) {
												$privatekey = $qode_options_elision['recaptcha_private_key'];
											} else {
												$privatekey = "6Ld5VOASAAAAAKQdKVcxZ321VM6lkhBsoT6lXe9Z";
											}

											if($qode_options_elision['page_transitions'] != ""){ ?>
												<script type="text/javascript">
													var RecaptchaOptions = {theme: 'clean'};
													Recaptcha.create("<?php echo $publickey; ?>","captchaHolder",{theme: "clean",callback: Recaptcha.focus_response_field});
												</script>
											<?php } ?>
											<p id="captchaHolder"><?php echo recaptcha_get_html($publickey); ?></p>
											<p id="captchaStatus">&nbsp;</p>
										<?php endif; ?>
										
										<span class="submit_button_contact">
											<input class="qbutton" type="submit" value="<?php _e('CONTACT US', 'qode'); ?>" />
										</span>
									</form>	
								</div>
	
							</div>
						</div>
					</div>
					<?php }  else { ?>
						<div class="contact_info">
							<?php the_content(); ?>
						</div>
					<?php } ?>
				</div>	
		</div>	
	</div>	
		
<?php endwhile; ?>
<?php endif; ?>
<script type="text/javascript">
jQuery(document).ready(function($){
    $j('form#contact-form').submit(function(){
        $j('form#contact-form .contact-error').remove();
        var hasError = false;
        $j('form#contact-form .requiredField').each(function() {
            if(jQuery.trim($j(this).val()) == '' || jQuery.trim($j(this).val()) == jQuery.trim($j(this).attr('placeholder'))){
                var labelText = $j(this).prev('label').text();
                $j(this).parent().append('<strong class="contact-error"><?php _e('This is a required field', 'qode'); ?></strong>');
                $j(this).addClass('inputError');
                hasError = true;
            } else { //else 1 
                if($j(this).hasClass('email')) { //if hasClass('email')
                    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    if(!emailReg.test(jQuery.trim($j(this).val()))){
                        var labelText = $j(this).prev('label').text();
                        $j(this).parent().append('<strong class="contact-error"><?php _e('Please enter a valid email address.', 'qode'); ?></strong>');
                        $j(this).addClass('inputError');
                        hasError = true;
                    } 
                } //end of if hasClass('email')

            } // end of else 1 
        }); //end of each()
        
        if(!hasError){
			challengeField = $j("input#recaptcha_challenge_field").val();
			responseField = $j("input#recaptcha_response_field").val();
			name =  $j("input#fname").val();
			lastname =  $j("input#lname").val();
			email =  $j("input#email").val();
			website =  $j("input#website").val();
			message =  $j("textarea#message").val();
			
			var form_post_data = "";
			
			var html = $j.ajax({
			type: "POST",
			url: "<?php echo QODE_ROOT; ?>/includes/ajax_mail.php",
			data: "recaptcha_challenge_field=" + challengeField + "&recaptcha_response_field=" + responseField + "&name=" + name + "&lastname=" + lastname + "&email=" + email + "&website=" + website + "&message=" + message,
			async: false
			}).responseText;
			
			if(html == "success"){
				var formInput = $j(this).serialize();
				
				$j("form#contact-form").before('<div class="contact-success"><strong><?php _e('THANK YOU!', 'qode'); ?></strong><p><?php _e('Your email was successfully sent. We will contact you as soon as possible.', 'qode'); ?></p></div>');
				$j("form#contact-form").hide();
				$j.post($j(this).attr('action'),formInput);
				hasError = false;
				return false; 
			} else {
				<?php
				if ($qode_options_elision['use_recaptcha'] == "yes"){
				?>
					$j("#recaptcha_response_field").parent().append('<span class="contact-error extra-padding"><?php _e('Invalid Captcha', 'qode'); ?></span>');
					Recaptcha.reload();
				<?php
				} else {
				?>
					$j("form#contact-form").before('<div class="contact-success"><strong><?php _e("Email server problem", 'qode'); ?></strong></p></div>');
				<?php    
				}
				?>
				return false;
			}
        }
        return false;
    });
});
</script>   
	
<?php get_footer(); ?>			