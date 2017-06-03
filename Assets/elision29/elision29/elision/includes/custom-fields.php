<?php 
if ( !class_exists('myCustomFields') ) {

	class myCustomFields {
		/**
		* @var  string  $prefix  The prefix for storing custom fields in the postmeta table
		*/
		var $prefix = 'qode_';
		/**
		* @var  array  $postTypes  An array of public custom post types, plus the standard "post" and "page" - add the custom types you want to include here
		*/
		var $postTypes = array( "page", "post", "portfolio_page", "testimonials", "slides", "carousels");
		/**
		* @var  array  $customFields  Defines the custom fields available
		*/
		var $customFields =	array(
			array(
				"name"			=> "page_scroll_amount_for_sticky",
				"title"			=> "Scroll amount for sticky header appear (px)",
				"description"	=> "",
				"type"			=> "text",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "header-style",
				"title"			=> "Header style",
				"description"	=> "",
				"type"			=> "selectbox-header-style",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "header_color_per_page",
				"title"			=> "Initial header background color",
				"description"	=> "",
				"type"			=> "colorpicker",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "header_color_transparency_per_page",
				"title"			=> "Initial header background color transparency (0 to 1)",
				"description"	=> "",
				"type"			=> "text",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "show-page-title",
				"title"			=> "Don't show page title area",
				"description"	=> "",
				"type"			=> "checkbox",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "show-page-title-text",
				"title"			=> "Don't show title",
				"description"	=> "",
				"type"			=> "checkbox",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "page_title_style",
				"title"			=> "Page title style",
				"description"	=> "",
				"type"			=> "selectbox_title_style",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "page_title_text_single_post",
				"title"			=> "Page title",
				"description"	=> "",
				"type"			=> "text",
				"scope"			=>	array("post"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "page-title-text",
				"title"			=> "Show post title in 'title area'",
				"description"	=> "",
				"type"			=> "checkbox",
				"scope"			=>	array("post"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "page-title-color",
				"title"			=> "Title Color",
				"description"	=> "",
				"type"			=> "colorpicker",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "page_title_holder_color",
				"title"			=> "Title Holder Color",
				"description"	=> "",
				"type"			=> "colorpicker",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "page-title-background-color",
				"title"			=> "Title Background Color",
				"description"	=> "",
				"type"			=> "colorpicker",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "show-page-title-image",
				"title"			=> "Don't show page title image",
				"description"	=> "",
				"type"			=> "checkbox",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "responsive-title-image",
				"title"			=> "Responsive title image",
				"description"	=> "",
				"type"			=> "selectbox-responsive-title-image",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "fixed-title-image",
				"title"			=> "Parallax title image / Only if title image is not responsive",
				"description"	=> "",
				"type"			=> "selectbox-fixed-title-image",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "title-image",
				"title"			=> "Title image",
				"description"	=> "",
				"type"			=> "image-title-image",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "title-height",
				"title"			=> "Title height (px) / Only if title image is not responsive",
				"description"	=> "",
				"type"			=> "text",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "show-sidebar",
				"title"			=> "Choose sidebar",
				"description"	=> "",
				"type"			=> "selectbox",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "choose-sidebar",
				"title"			=> "Choose sidebar to display",
				"description"	=> "",
				"type"			=> "selectbox-sidebar",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "enable_content_bottom_area",
				"title"			=> "Enable content bottom area",
				"description"	=> "",
				"type"			=> "selectbox-responsive-title-image",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "choose_content_bottom_sidebar",
				"title"			=> "Choose content bottom sidebar to display",
				"description"	=> "",
				"type"			=> "selectbox-sidebar",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "content_bottom_sidebar_in_grid",
				"title"			=> "Content bottom sidebar in grid",
				"description"	=> "",
				"type"			=> "selectbox-fixed-title-image",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "content_bottom_background_color",
				"title"			=> "Content bottom background color",
				"description"	=> "",
				"type"			=> "colorpicker",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "hide-featured-image",
				"title"			=> "Hide featured image",
				"description"	=> "",
				"type"			=> "selectbox-featured-image",
				"scope"			=>	array("post"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "show-animation",
				"title"			=> "Choose animation",
				"description"	=> "",
				"type"			=> "selectbox-animation",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "choose-blog-category",
				"title"			=> "Choose blog category",
				"description"	=> "",
				"type"			=> "selectbox-category",
				"scope"			=>	array("page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "show-posts-per-page",
				"title"			=> "Posts per page",
				"description"	=> "",
				"type"			=> "text",
				"scope"			=>	array("page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "enable-page-comments",
				"title"			=> "Enable comments",
				"description"	=> "",
				"type"			=> "checkbox",
				"scope"			=>	array("page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "choose-portfolio-single-view",
				"title"			=> "Choose portfolio single view",
				"description"	=> "",
				"type"			=> "selectbox-portfolio-single",
				"scope"			=>	array("portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "choose-number-of-portfolio-columns",
				"title"			=> "Choose number of columns (Only for portfolio gallery view)",
				"description"	=> "",
				"type"			=> "selectbox-portfolio-columns-number",
				"scope"			=>	array("portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "choose-portfolio-list-page",
				"title"			=> "Choose portfolio back link",
				"description"	=> "",
				"type"			=> "selectbox-portfolio-list-page",
				"scope"			=>	array("portfolio_page"),
				"capability"	=> "manage_options"
			),
            array(
                "name"			=> "portfolio-external-link",
                "title"			=> "Portfolio External Link",
                "description"	=> "",
                "type"			=> "text",
                "scope"			=>	array("portfolio_page"),
                "capability"	=> "manage_options"
            ),
			array(
				"name"			=> "revolution-slider",
				"title"			=> "Enter Layer slider or Qode slider shortcode",
				"description"	=> "",
				"type"			=> "text",
				"scope"			=>	array("page","post","portfolio_page"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "testimonial-author",
				"title"			=> "Author",
				"description"	=> "",
				"type"			=> "text",
				"scope"			=>	array("testimonials"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "testimonial-text",
				"title"			=> "Text",
				"description"	=> "",
				"type"			=> "textarea",
				"scope"			=>	array("testimonials"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "slide-hide-title",
				"title"			=> "Hide Slide Title",
				"description"	=> "",
				"type"			=> "checkbox",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"dependency" => ""
			),
			array(
				"name"			=> "slide-background-type",
				"title"			=> "Slide Background Type",
				"description"	=> "",
				"type"			=> "slide-background-type",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"dependency" => ""
			),
			array(
				"name"			=> "slide-image",
				"title"			=> "Slide Image",
				"description"	=> "",
				"type"			=> "slide-image",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"dependency" => ""
			),
			array(
				"name"			=> "slide-video-webm",
				"title"			=> "Slide Video (webm)",
				"description"	=> "",
				"type"			=> "slide-video-input",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"dependency" => ""
			),
			array(
				"name"			=> "slide-video-mp4",
				"title"			=> "Slide Video (mp4)",
				"description"	=> "",
				"type"			=> "slide-video-input",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"dependency" => ""
			),
			array(
				"name"			=> "slide-video-ogv",
				"title"			=> "Slide Video (ogv)",
				"description"	=> "",
				"type"			=> "slide-video-input",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"dependency" => ""
			),
			array(
				"name"			=> "slide-video-image",
				"title"			=> "Slide Video preview image",
				"description"	=> "",
				"type"			=> "slide-video-image",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"dependency" => ""
			),
			array(
				"name"			=> "slide-video-overlay",
				"title"			=> "Use transparent overlay over video",
				"description"	=> "",
				"type"			=> "slide-video-checkbox",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"dependency" => ""
			),
			array(
				"name"			=> "slide-thumbnail",
				"title"			=> "Slide Graphic",
				"description"	=> "",
				"type"			=> "slide-thumbnail",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"dependency" => ""
			),
			array(
				"name"			=> "slide-text",
				"title"			=> "Slide text",
				"description"	=> "",
				"type"			=> "textarea",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
			),
			array(
				"name"			=> "slide-title-color",
				"title"			=> "Slide title color",
				"description"	=> "",
				"type"			=> "colorpicker",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"dependency" => ""
			),
			array(
				"name"			=> "slide-title-font-size",
				"title"			=> "Slide title font size (px)",
				"description"	=> "",
				"type"			=> "short-text-200",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"dependency" 	=> ""
			),
			array(
				"name"			=> "slide-title-line-height",
				"title"			=> "Slide title line height (px)",
				"description"	=> "",
				"type"			=> "short-text-200",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"dependency" 	=> ""
			),
			array(
				"name"			=> "slide-text-color",
				"title"			=> "Slide text color",
				"description"	=> "",
				"type"			=> "colorpicker",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"dependency" => ""
			),
			array(
				"name"			=> "slide-text-font-size",
				"title"			=> "Slide text font size (px)",
				"description"	=> "",
				"float_left" 	=> "yes",
				"clear_after" 	=> "",
				"type"			=> "short-text-200",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"dependency" 	=> ""
			),
			array(
				"name"			=> "slide-text-line-height",
				"title"			=> "Slide text line height (px)",
				"description"	=> "",
				"float_left" 	=> "yes",
				"clear_after" 	=> "",
				"type"			=> "short-text-200",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"dependency" 	=> ""
			),
			array(
				"name"			=> "slide-button-label",
				"title"			=> "Button label",
				"description"	=> "",
				"type"			=> "short-text",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"class" => "short-input"
			),
			array(
				"name"			=> "slide-button-link",
				"title"			=> "Button link",
				"description"	=> "",
				"type"			=> "short-text",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"class" => "short-input"
			),
			array(
				"name"			=> "slide-content-alignment",
				"title"			=> "Slide Content Alignment",
				"description"	=> "",
				"type"			=> "selectbox-content-alignment",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
			),
			array(
				"name"			=> "slide-content-width",
				"title"			=> "Content Width (%)",
				"description"	=> "",
				"type"			=> "short-text",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
				"class" => "short-input"
			),
			array(
				"name"			=> "slide-content-top",
				"title"			=> "Content From Top (%)",
				"description"	=> "",
				"type"			=> "short-text",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
			),
			array(
				"name"			=> "slide-content-left",
				"title"			=> "Content From Left (%)",
				"description"	=> "",
				"type"			=> "short-text",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
			),
			array(
				"name"			=> "slide-content-bottom",
				"title"			=> "Content From Bottom (%)",
				"description"	=> "",
				"type"			=> "short-text",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
			),
			array(
				"name"			=> "slide-content-right",
				"title"			=> "Content From Right (%)",
				"description"	=> "",
				"type"			=> "short-text",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
			),
			array(
				"name"			=> "slide-header-style",
				"title"			=> "Header style for this slide",
				"description"	=> "",
				"type"			=> "selectbox-header-style",
				"scope"			=>	array("slides"),
				"capability"	=> "manage_options",
			),
			array(
				"name"			=> "carousel-image",
				"title"			=> "Carousel Image (Min width needs to be 220px)",
				"description"	=> "",
				"type"			=> "image-title-image",
				"scope"			=>	array("carousels"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "carousel-hover-image",
				"title"			=> "Carousel Hover Image (Min width needs to be 220px)",
				"description"	=> "",
				"type"			=> "carousel-image",
				"scope"			=>	array("carousels"),
				"capability"	=> "manage_options"
			),
			array(
				"name"			=> "carousel-item-link",
				"title"			=> "Link",
				"description"	=> "",
				"type"			=> "short-text",
				"scope"			=>	array("carousels"),
				"capability"	=> "manage_options",
			),
			array(
				"name"			=> "carousel-item-target",
				"title"			=> "Target",
				"description"	=> "",
				"type"			=> "selectbox-carousel-item-target",
				"scope"			=>	array("carousels"),
				"capability"	=> "manage_options",
			),
		);
		/**
		* PHP 4 Compatible Constructor
		*/
		//function myCustomFields() { $this->__construct(); }
		/**
		* PHP 5 Constructor
		*/
		function __construct() {
			add_action( 'admin_menu', array( &$this, 'createCustomFields' ) );
			add_action( 'save_post', array( &$this, 'saveCustomFields' ), 1, 2 );
			// Comment this line out if you want to keep default custom fields meta box
			add_action( 'do_meta_boxes', array( &$this, 'removeDefaultCustomFields' ), 10, 3 );
		}
		/**
		* Remove the default Custom Fields meta box
		*/
		function removeDefaultCustomFields( $type, $context, $post ) {
			foreach ( array( 'normal', 'advanced', 'side' ) as $context ) {
				foreach ( $this->postTypes as $postType ) {
					remove_meta_box( 'postcustom', $postType, $context );
				}
			}
		}
		/**
		* Create the new Custom Fields meta box
		*/
		function createCustomFields() {
			if ( function_exists( 'add_meta_box' ) ) {
				foreach ( $this->postTypes as $postType ) {
					add_meta_box( 'my-custom-fields', 'Qode Custom Fields', array( &$this, 'displayCustomFields' ), $postType, 'normal', 'high' );
					if($postType != "testimonials" && $postType != "slides" && $postType != "carousels") {
						add_meta_box( 'my-custom-portfolio', 'Qode Portfolio', array( &$this, 'displayCustomPortfolio' ), 'portfolio_page', 'normal', 'high' );
						add_meta_box( 'my-custom-seo', 'Qode SEO Fields', array( &$this, 'displayCustomSeo' ), $postType, 'normal', 'high' );
					}
				}
			}
		}
		/**
		* Display the new Custom Fields meta box
		*/
		function displayCustomFields() {
			global $post;
			global $qode_options_elision;
			?>
			<div class="form-wrap">
				<?php
				wp_nonce_field( 'my-custom-fields', 'my-custom-fields_wpnonce', false, true );
				foreach ( $this->customFields as $customField ) {
					// Check scope
					$scope = $customField[ 'scope' ];
					$output = false;
					foreach ( $scope as $scopeItem ) {
						switch ( $scopeItem ) {
							default: {
								if ( $post->post_type == $scopeItem )
									$output = true;
								break;
							}
						}
						if ( $output ) break;
					}
					// Check capability
					if ( !current_user_can( $customField['capability'], $post->ID ) )
						$output = false;
					// Output if allowed
					if ( $output ) { ?>
						<div class="form-field form-required">
							<?php
							switch ( $customField[ 'type' ] ) {
								case "checkbox": {
									// Checkbox
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
									echo '<input type="checkbox" name="' . $this->prefix . $customField['name'] . '" id="' . $this->prefix . $customField['name'] . '" value="yes"';
									if ( get_post_meta( $post->ID, $this->prefix . $customField['name'], true ) == "yes" )
										echo ' checked="checked"';
									echo '" style="width: auto;" />';
									break;
								}
								case "selectbox": {
									// Selectbox
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
									 echo '<select name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '"> ';
									?>
										<option value="" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "" ) { ?> selected="selected" <?php } ?>></option>
										<option value="default" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "default" ) { ?> selected="selected" <?php } ?>>No Sidebar</option>
										<option value="1" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "1" ) { ?> selected="selected" <?php } ?>>Sidebar 1/3 right</option>
										<option value="2" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "2" ) { ?> selected="selected" <?php } ?>>Sidebar 1/4 right</option>
										<option value="3" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "3" ) { ?> selected="selected" <?php } ?>>Sidebar 1/3 left</option>
										<option value="4" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "4" ) { ?> selected="selected" <?php } ?>>Sidebar 1/4 left</option>
                                    
                                    <?php 
                                    echo '</select>';
									break;
								}
								case "selectbox_title_style": {
									// Selectbox
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
									 echo '<select name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '"> ';
									?>
										<option value="" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "" ) { ?> selected="selected" <?php } ?>></option>
										<option value="standard" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "standard" ) { ?> selected="selected" <?php } ?>>Standard</option>    
										<option value="title_on_bottom" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "title_on_bottom" ) { ?> selected="selected" <?php } ?>>Title on Bottom</option>    
                                    <?php 
                                    echo '</select>';
									break;
								}
								case "selectbox-featured-image": {
									// Selectbox
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
									 echo '<select name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '"> ';
									?>
										<option value="no" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "no" ) { ?> selected="selected" <?php } ?>>No</option>
										<option value="yes" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "yes" ) { ?> selected="selected" <?php } ?>>Yes</option>
									
                                    <?php 
                                    echo '</select>';
									break;
								}
								case "selectbox-category": {
										$categories = get_categories(); 
										
										echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
										echo '<select name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '"> ';
											echo '<option value=""></option>';
											foreach($categories as $category) :
												echo '<option value="'. $category->term_id .'"';
												if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == $category->term_id ) { echo 'selected="selected"';}
												echo '>';
												echo $category->name . '</option>';
											
											endforeach;
										echo '</select>';
									
									break;
								}
								case "selectbox-portfolio-single": {
										// Selectbox
										echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
										echo '<select name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '"> ';
										?>
											<option value="" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "" ) { ?> selected="selected" <?php } ?>></option>
											<option value="1" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "1" ) { ?> selected="selected" <?php } ?>>Portfolio small images</option>
											<option value="2" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "2" ) { ?> selected="selected" <?php } ?>>Portfolio small slider</option>
											<option value="5" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "5" ) { ?> selected="selected" <?php } ?>>Portfolio big images</option>
											<option value="3" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "3" ) { ?> selected="selected" <?php } ?>>Portfolio big slider</option>
											<option value="4" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "4" ) { ?> selected="selected" <?php } ?>>Portfolio custom</option>
											<option value="7" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "7" ) { ?> selected="selected" <?php } ?>>Portfolio full width custom</option>
											<option value="6" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "6" ) { ?> selected="selected" <?php } ?>>Portfolio gallery</option>
										<?php 
										echo '</select>';
									
									break;
								}
								case "selectbox-portfolio-columns-number": {
										// Selectbox
										echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
										echo '<select name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '"> ';
										?>
											<option value="" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "" ) { ?> selected="selected" <?php } ?>></option>
											<option value="2" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "2" ) { ?> selected="selected" <?php } ?>>2 Columns</option>
											<option value="3" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "3" ) { ?> selected="selected" <?php } ?>>3 Columns</option>
											<option value="4" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "4" ) { ?> selected="selected" <?php } ?>>4 Columns</option>
										<?php 
										echo '</select>';
									
									break;
								}
								case "selectbox-portfolio-list-page": {
										// Selectbox
										echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
										
										$args = array(
											'show_option_none' => ' ',
											'option_none_value' => '',
											'selected' => get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ),
											'name' => $this->prefix . $customField[ 'name' ]
										);
										wp_dropdown_pages($args);
									
									break;
								}
								
								case "selectbox-animation": {
									$page_transitions = "2";
									if (isset($qode_options_elision['page_transitions'])) $page_transitions = $qode_options_elision['page_transitions'];
									if($page_transitions == "1" || $page_transitions == "2" || $page_transitions == "3" || $page_transitions == "4"){
										// Selectbox
										echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
										 echo '<select name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '"> ';
										?>
											<option value="" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "default" ) { ?> selected="selected" <?php } ?>></option>
											<option value="no_animation" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "no_animation" ) { ?> selected="selected" <?php } ?>>No animation</option>
											<option value="updown" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "updown" ) { ?> selected="selected" <?php } ?>>Up / Down</option>
											<option value="fade" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "fade" ) { ?> selected="selected" <?php } ?>>Fade</option>
											<option value="updown_fade" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "updown_fade" ) { ?> selected="selected" <?php } ?>>Up/Down (In) / Fade (Out)</option>
											<option value="leftright" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "leftright" ) { ?> selected="selected" <?php } ?>>Left / Right</option>
											<?php 
											echo '</select>';
									}
									break;
								}
								case "selectbox-responsive-title-image": {
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
									echo '<select name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '"> ';
									?>
										<option value="" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "" ) { ?> selected="selected" <?php } ?>></option>
										<option value="no" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "no" ) { ?> selected="selected" <?php } ?>>No</option>
										<option value="yes" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "yes" ) { ?> selected="selected" <?php } ?>>Yes</option>
									<?php 
									echo '</select>';
									
									break;
								}
								case "selectbox-fixed-title-image": {
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
									echo '<select name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '"> ';
									?>
										<option value="" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "" ) { ?> selected="selected" <?php } ?>></option>
										<option value="no" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "no" ) { ?> selected="selected" <?php } ?>>No</option>
										<option value="yes" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "yes" ) { ?> selected="selected" <?php } ?>>Yes</option>
										<option value="yes_zoom" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "yes_zoom" ) { ?> selected="selected" <?php } ?>>Yes, with zoom out</option>
									<?php 
									echo '</select>';
									
									break;
								}
								case "selectbox-header-style": {
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
									echo '<select name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '"> ';
									?>
										<option value="" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "" ) { ?> selected="selected" <?php } ?>></option>
										<option value="light" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "light" ) { ?> selected="selected" <?php } ?>>Light</option>
										<option value="dark" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "dark" ) { ?> selected="selected" <?php } ?>>Dark</option>
									<?php 
									echo '</select>';
									
									break;
								}
								case "image-title-image": {
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
									echo '<div class="image_holder"><input type="text" id="title_image" name="' . $this->prefix . $customField[ 'name' ] . '" class="title_image" value="'.htmlspecialchars( get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) ).'" /><input class="upload_button" type="button" value="Upload file"></div>';
									break;
								}
								case "slide-background-type": {
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;&nbsp;&nbsp;';
									echo '<label for="image_background" style="display:inline;"><b>Image</b></label>&nbsp;';
									echo '<input class="slide_background_type" data-type="image_type" type="radio" name="' . $this->prefix . $customField['name'] . '" id="image_background" value="image"';
									if ( get_post_meta( $post->ID, $this->prefix . $customField['name'], true ) == "image" )
										echo ' checked="checked"';
									echo '" style="width: auto;" />';
									echo '<label for="video_background" style="display:inline;"><b>Video</b></label>&nbsp;';
									echo '<input class="slide_background_type" data-type="video_type" type="radio" name="' . $this->prefix . $customField['name'] . '" id="video_background" value="video"';
									if ( get_post_meta( $post->ID, $this->prefix . $customField['name'], true ) == "video" )
										echo ' checked="checked"';
									echo '" style="width: auto;" />';
									break;
								}
								case "slide-image": {
									echo '<div class="image_type">';
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
									echo '<div class="image_holder"><input type="text" id="slide_image" name="' . $this->prefix . $customField[ 'name' ] . '" class="slide_image" value="'.htmlspecialchars( get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) ).'" /><input class="upload_button" type="button" value="Upload file"></div>';
									echo '</div>';
									break;
								}
								case "slide-thumbnail": {
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
									echo '<div class="image_holder"><input type="text" id="slide_thumbnail" name="' . $this->prefix . $customField[ 'name' ] . '" class="slide_thumbnail" value="'.htmlspecialchars( get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) ).'" /><input class="upload_button" type="button" value="Upload file"></div>';
									break;
								}
								case "slide-video-input": {
									echo '<div class="video_type">';
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'"><b>' . $customField[ 'title' ] . '</b></label>';
									echo '<input type="text" name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '" value="' . htmlspecialchars( get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) ) . '" />';
									echo '</div>';
									break;
								}
								case "slide-video-image": {
									echo '<div class="video_type">';
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
									echo '<div class="image_holder"><input type="text" id="slide_video_image" name="' . $this->prefix . $customField[ 'name' ] . '" class="slide_image" value="'.htmlspecialchars( get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) ).'" /><input class="upload_button" type="button" value="Upload file"></div>';
									echo '</div>';
									break;
								}
								case "slide-video-checkbox": {
									echo '<div class="video_type">';
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
									echo '<input type="checkbox" name="' . $this->prefix . $customField['name'] . '" id="' . $this->prefix . $customField['name'] . '" value="yes"';
									if ( get_post_meta( $post->ID, $this->prefix . $customField['name'], true ) == "yes" )
										echo ' checked="checked"';
									echo '" style="width: auto;" />';
									echo '</div>';
									break;
								}
								case "selectbox-content-alignment": {
									// Selectbox
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
									 echo '<select name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '"> ';
									?>
										<option value="" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "" ) { ?> selected="selected" <?php } ?>></option>
										<option value="left" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "left" ) { ?> selected="selected" <?php } ?>>Left</option>
										<option value="center" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "center" ) { ?> selected="selected" <?php } ?>>Center</option>
										<option value="right" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "right" ) { ?> selected="selected" <?php } ?>>Right</option>
									
                                    <?php 
                                    echo '</select>';
									break;
								}
								case "selectbox-sidebar": {
										// Selectbox
										echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
										
										echo '<select name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '">';
										echo '<option value=""></option>';
										foreach ( $GLOBALS['wp_registered_sidebars'] as $sidebar ) {
											if(isUserMadeSidebar(ucwords($sidebar['name']))){
										?>
												
												 <option value="<?php echo ucwords( $sidebar['id'] ); ?>" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == ucwords( $sidebar['id'] ) ) { ?> selected="selected" <?php } ?>>
														<?php echo ucwords( $sidebar['name'] ); ?>
												 </option>
												 
										<?php	}
											}
										echo '</select>';
									
									break;
								}
								case "carousel-image": {
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
									echo '<div class="image_holder"><input type="text" id="carousel-image" name="' . $this->prefix . $customField[ 'name' ] . '" class="title_image" value="'.htmlspecialchars( get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) ).'" /><input class="upload_button" type="button" value="Upload file"></div>';
									break;
								}
								case "selectbox-carousel-item-target": {
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'" style="display:inline;"><b>' . $customField[ 'title' ] . '</b></label>&nbsp;&nbsp;';
									echo '<select name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '"> ';
									?>
										<option value="" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "" ) { ?> selected="selected" <?php } ?>></option>
										<option value="_self" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "_self" ) { ?> selected="selected" <?php } ?>>Self</option>
										<option value="_blank" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "_blank" ) { ?> selected="selected" <?php } ?>>Blank</option>
										<option value="_parent" <?php if (get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) == "_parent" ) { ?> selected="selected" <?php } ?>>Parent</option>
									<?php 
									echo '</select>';
									
									break;
								}					
								case "datepicker": {
									// Datepicker
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'"><b>' . $customField[ 'title' ] . '</b></label>';
									echo '<input type="text" class="datepicker" name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '" value="' . htmlspecialchars( get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) ) . '" />';
									
									break;
								}
								case "colorpicker": {
									//Colorpicker
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'"><b>' . $customField[ 'title' ] . '</b></label>';
									echo '<div class="colorSelector"><div style="background-color:'.htmlspecialchars( get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) ) .'"></div></div>';
									echo '<input type="text" name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '" value="' . htmlspecialchars( get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) ) . '" size="10" maxlength="10" />';
									
									break;
								}
								case "textarea":
								case "wysiwyg": {
									// Text area
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'"><b>' . $customField[ 'title' ] . '</b></label>';
									echo '<textarea name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '" columns="30" rows="3">' . htmlspecialchars( get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) ) . '</textarea>';
									// WYSIWYG
									if ( $customField[ 'type' ] == "wysiwyg" ) { ?>
										<script type="text/javascript">
											jQuery( document ).ready( function() {
												jQuery( "<?php echo $this->prefix . $customField[ 'name' ]; ?>" ).addClass( "mceEditor" );
												if ( typeof( tinyMCE ) == "object" && typeof( tinyMCE.execCommand ) == "function" ) {
													tinyMCE.execCommand( "mceAddControl", false, "<?php echo $this->prefix . $customField[ 'name' ]; ?>" );
												}
											});
										</script>
									<?php }
									break;
								}
								default: {
									// Plain text field
									echo '<label for="' . $this->prefix . $customField[ 'name' ] .'"><b>' . $customField[ 'title' ] . '</b></label>';
									echo '<input type="text" name="' . $this->prefix . $customField[ 'name' ] . '" id="' . $this->prefix . $customField[ 'name' ] . '" value="' . htmlspecialchars( get_post_meta( $post->ID, $this->prefix . $customField[ 'name' ], true ) ) . '" />';
									break;
								}
							}
							?>
							<?php if ( $customField[ 'description' ] ) echo '<p>' . $customField[ 'description' ] . '</p>'; ?>
						</div>
					<?php
					}
				} ?>
			</div>
			<?php
		}	/**
		* Display the new Custom Fields meta box
		*/
		function displayCustomSeo() {
			global $post;
			?>
			<div class="form-wrap">
			<div class="input form-field">
					<?php
					$seo_title = get_post_meta( $post->ID, $this->prefix . 'seo_title', true );
					?>
				<label for="seo_title"><b>SEO Title</b></label>
				<input id="seo_title" class="seo_title" type="text" value="<?php echo $seo_title; ?>" name="seo_title">
			</div>
			<div class="input form-field">
					<?php
					$seo_keywords = get_post_meta( $post->ID, $this->prefix . 'seo_keywords', true );
					?>
				<label for="seo_keywords"><b>SEO Keywords</b></label>
				<input id="seo_keywords" class="seo_keywords" type="text" value="<?php echo $seo_keywords; ?>" name="seo_keywords">
			</div>		
			<div class="input form-field">
					<?php
					$seo_description = get_post_meta( $post->ID, $this->prefix . 'seo_description', true );
					?>
				<label for="seo_description"><b>SEO Description</b></label>
				<textarea id="seo_description" class="seo_description" name="seo_description"><?php echo $seo_description; ?></textarea>
			</div>		
					

					

			
		</div>
			<?php
		}
		
		function displayCustomPortfolio() {
			global $post;
			?>
			<div class="form-wrap">
					<div class="hidden_portfolio_images">
						<div class="input form-field">
							<label><b>Order number</b></label>
							<input class="ordernumber" type="text" id="portfolioimgordernumber_x" name="portfolioimgordernumber_x" size="10" />
						</div>
						<div class="input form-field">
							<label for=""><b>Image/Video title (only for gallery layout - Portfolio Style 6)</b></label>
							<input type="text" name="portfoliotitle_x" id="portfoliotitle_x" class="portfoliotitle" />
						</div>
						<div class="input form-field">
							<label for=""><b>Image</b></label>
							<input type="text" id="portfolioimg_x" name="portfolioimg_x" class="portfolioimg" />
							<input class="upload_button" type="button" value="Upload file">
						</div>
						<div class="input form-field">
							<label for=""><b>Video type</b></label>
							<select name="portfoliovideotype_x" id="portfoliovideotype_x" class="portfoliovideotype">
								<option value=""></option>
								<option value="youtube">Youtube</option>
								<option value="vimeo">Vimeo</option>
								<option value="self">Self hosted</option>
							</select>
						</div>
						<div class="input form-field">
							<label for=""><b>Video ID</b></label>
							<input type="text" name="portfoliovideoid_x" id="portfoliovideoid_x" class="portfoliovideoid" />
						</div>
						<div class="input form-field">
							<label for=""><b>Video image</b></label>
							<input type="text" id="portfoliovideoimage_x" name="portfoliovideoimage_x" class="portfolio_self_video portfolioimg" />
							<input class="upload_button" type="button" value="Upload file">
						</div>
						<div class="input form-field">
							<label for=""><b>Video webm</b></label>
							<input type="text" name="portfoliovideowebm_x" id="portfoliovideowebm_x" class="portfolio_self_video" />
						</div>
						<div class="input form-field">
							<label for=""><b>Video mp4</b></label>
							<input type="text" name="portfoliovideomp4_x" id="portfoliovideomp4_x" class="portfolio_self_video" />
						</div>
						<div class="input form-field">
							<label for=""><b>Video ogv</b></label>
							<input type="text" name="portfoliovideoogv_x" id="portfoliovideoogv_x" class="portfolio_self_video" />
						</div>
					</div>
					
					<div class="hidden_portfolio">
						<div class="input form-field">
							<label><b>Order number</b></label>
							<input class="ordernumber" type="text" id="optionlabelordernumber_x" name="optionlabelordernumber_x" size="10" />
						</div>
						<div class="input form-field">
							<label for=""><b>Option Label</b></label>
							<input type="text" id="optionLabel_x" name="optionLabel_x" />
						</div>
						<div class="input form-field">
							<label for=""><b>Option Value</b></label>
							<textarea rows="8" cols="40" id="optionValue_x" name="optionValue_x"></textarea>
						</div>						
						<div class="input form-field">
							<label for=""><b>Option Url</b></label>
							<input type="text" id="optionUrl_x" name="optionUrl_x" />
						</div>	
						
					</div>
					
<div class="add_portfolio_images">
<h3>Portfolio images/videos</h3>
<div class="add_portfolio_images_inner">
<?php
$no = 1;
$portfolio_images = get_post_meta( $post->ID, $this->prefix . 'portfolio_images', true );
if (count($portfolio_images)>1) {
	usort($portfolio_images, "comparePortfolioImages");
}
while (isset($portfolio_images[$no-1])) {
	$portfolio_image = $portfolio_images[$no-1];
?>
				
<div class="portfolio_image" rel="<?php echo $no; ?>" style="display: block;">
<div class="input form-field">
<label for="portfolioimgordernumber_<?php echo $no; ?>"><b>Order number</b></label>
<input id="portfolioimgordernumber_<?php echo $no; ?>" type="text" name="portfolioimgordernumber[]" value="<?php echo isset($portfolio_image['portfolioimgordernumber'])?stripslashes($portfolio_image['portfolioimgordernumber']):""; ?>" class="ordernumber" />
</div>
<div class="input form-field">
<label for="portfoliotitle_<?php echo $no; ?>"><b>Image/Video title (only for gallery layout - Portfolio Style 6)</b></label>
<input id="portfoliotitle_<?php echo $no; ?>" type="text" name="portfoliotitle[]" value="<?php echo isset($portfolio_image['portfoliotitle'])?stripslashes($portfolio_image['portfoliotitle']):""; ?>" class="portfoliotitle" />
</div>
<div class="input form-field">
<label for="portfolioimg_<?php echo $no; ?>"><b>Image</b></label>
<input id="portfolioimg_<?php echo $no; ?>" type="text" name="portfolioimg[]" value="<?php echo stripslashes($portfolio_image['portfolioimg']); ?>" class="portfolioimg" />
<input class="upload_button" type="button" value="Upload file">
</div>
<div class="input form-field">
	<label for="portfoliovideotype_<?php echo $no; ?>"><b>Video type</b></label>
	<select name="portfoliovideotype[]" id="portfoliovideotype_<?php echo $no; ?>" class="portfoliovideotype">
		<option value=""></option>
		<option <?php if(isset($portfolio_image['portfoliovideotype'])){ if($portfolio_image['portfoliovideotype'] == "youtube") echo "selected='selected'"; } ?> value="youtube">Youtube</option>
		<option <?php if(isset($portfolio_image['portfoliovideotype'])){ if($portfolio_image['portfoliovideotype'] == "vimeo") echo "selected='selected'"; } ?> value="vimeo">Vimeo</option>
		<option <?php if(isset($portfolio_image['portfoliovideotype'])){ if($portfolio_image['portfoliovideotype'] == "self") echo "selected='selected'"; } ?> value="self">Self hosted</option>
	</select>
</div>
<div class="input form-field">
<label for="portfoliovideoid_<?php echo $no; ?>"><b>Video ID</b></label>
<input id="portfoliovideoid_<?php echo $no; ?>" type="text" name="portfoliovideoid[]" value="<?php echo isset($portfolio_image['portfoliovideoid'])?stripslashes($portfolio_image['portfoliovideoid']):""; ?>" class="portfoliovideoid" />
</div>
<div class="input form-field">
	<label for="portfoliovideoimage_<?php echo $no; ?>"><b>Video image</b></label>
	<input type="text" id="portfoliovideoimage_<?php echo $no; ?>" name="portfoliovideoimage[]" value="<?php echo isset($portfolio_image['portfoliovideoimage'])?stripslashes($portfolio_image['portfoliovideoimage']):""; ?>" class="portfolio_self_video portfolioimg" />
	<input class="upload_button" type="button" value="Upload file">
</div>
<div class="input form-field">
	<label for="portfoliovideowebm_<?php echo $no; ?>"><b>Video webm</b></label>
	<input type="text" id="portfoliovideowebm_<?php echo $no; ?>" name="portfoliovideowebm[]" value="<?php echo isset($portfolio_image['portfoliovideowebm'])?stripslashes($portfolio_image['portfoliovideowebm']):""; ?>" class="portfolio_self_video" />
</div>
<div class="input form-field">
	<label for="portfoliovideomp4_<?php echo $no; ?>"><b>Video mp4</b></label>
	<input type="text" id="portfoliovideomp4_<?php echo $no; ?>" name="portfoliovideomp4[]" value="<?php echo isset($portfolio_image['portfoliovideomp4'])?stripslashes($portfolio_image['portfoliovideomp4']):""; ?>" class="portfolio_self_video" />
</div>
<div class="input form-field">
	<label for="portfoliovideoogv_<?php echo $no; ?>"><b>Video ogv</b></label>
	<input type="text" id="portfoliovideoogv_<?php echo $no; ?>" name="portfoliovideoogv[]" value="<?php echo isset($portfolio_image['portfoliovideoogv'])?stripslashes($portfolio_image['portfoliovideoogv']):""; ?>" class="portfolio_self_video" />
</div>
<a class="remove_image" href="/" onclick="javascript: return false;">Remove portfolio image/video</a>
</div>

					
			
<?php
	$no++;
}
?>
				<a class="add_image" onclick="javascript: return false;" href="/" >Add portfolio image/video</a>
</div>
</div>
					
<div class="add_portfolios">
<h3>Option Items</h3>
<div class="add_portfolios_inner">
<?php
$no = 1;
$portfolios = get_post_meta( $post->ID, $this->prefix . 'portfolios', true );
if (count($portfolios)>1) {
	usort($portfolios, "comparePortfolioOptions");
}
while (isset($portfolios[$no-1])) {
	$portfolio = $portfolios[$no-1];
?>
				
<div class="portfolio" rel="<?php echo $no; ?>" style="display: block;">
<div class="input form-field">
<label for="optionlabelordernumber_<?php echo $no; ?>"><b>Order number</b></label>
<input id="optionlabelordernumber_<?php echo $no; ?>" type="text" name="optionlabelordernumber[]" value="<?php echo isset($portfolio['optionlabelordernumber'])?stripslashes($portfolio['optionlabelordernumber']):""; ?>" class="ordernumber" />
</div>
<div class="input form-field">
<label for="optionLabel_<?php echo $no; ?>"><b>Option Label</b></label>
<input id="optionLabel_<?php echo $no; ?>" type="text" name="optionLabel[]" value="<?php echo stripslashes($portfolio['optionLabel']); ?>">
</div>
<div class="input form-field">
<label for="optionValue_<?php echo $no; ?>"><b>Option Value</b></label>
<textarea id="optionValue_<?php echo $no; ?>" name="optionValue[]" cols="40" rows="8"><?php echo stripslashes($portfolio['optionValue']); ?></textarea>
</div>
<div class="input form-field">
<label for="optionUrl_<?php echo $no; ?>"><b>Option Url</b></label>
<input id="optionUrl_<?php echo $no; ?>" type="text" name="optionUrl[]" value="<?php echo stripslashes($portfolio['optionUrl']); ?>">
</div>

<a class="remove_option" href="/" onclick="javascript: return false;">Remove portfolio option</a>
</div>


					
			
<?php
	$no++;
}
?>
				<a class="add_option" onclick="javascript: return false;" href="/" >Add portfolio option</a>
</div>
</div>
			<div class="input form-field">
<?php
$portfolio_date = get_post_meta( $post->ID, $this->prefix . 'portfolio_date', true );
?>
				<label for="portfolio_date<?php echo $no; ?>"><b>Portfolio Date</b></label>
				<input id="portfolio_date" class="datepicker" type="text" value="<?php echo $portfolio_date; ?>" name="portfolio_date">
			</div>
		</div>
			<?php
		}
		
		/**
		* Save the new Custom Fields values
		*/
		function saveCustomFields( $post_id, $post ) {
			if ( !isset( $_POST[ 'my-custom-fields_wpnonce' ] ) || !wp_verify_nonce( $_POST[ 'my-custom-fields_wpnonce' ], 'my-custom-fields' ) )
				return;
			if ( !current_user_can( 'edit_post', $post_id ) )
				return;
			if ( ! in_array( $post->post_type, $this->postTypes ) )
				return;
			foreach ( $this->customFields as $customField ) {
				if ( current_user_can( $customField['capability'], $post_id ) ) {
					if ( isset( $_POST[ $this->prefix . $customField['name'] ] ) && trim( $_POST[ $this->prefix . $customField['name'] ] ) !== "" ) {
						$value = $_POST[ $this->prefix . $customField['name'] ];
						// Auto-paragraphs for any WYSIWYG
						if ( $customField['type'] == "wysiwyg" ) $value = wpautop( $value );
						update_post_meta( $post_id, $this->prefix . $customField[ 'name' ], $value );
					} else {
						delete_post_meta( $post_id, $this->prefix . $customField[ 'name' ] );
					}
				}
			}
			
			
			$sliders = false;
			if (isset($_POST['title'])) {
			if (is_array($_POST['title'])) {
			foreach ($_POST['title'] as $key => $value) {
				$sliders_val[$key] = array('unique'=>$_POST['unique'][$key]);
				foreach ($_POST['title'][$key] as $key1 => $value1) {
					$sliders_val[$key][$key1] = array('ordernumber'=>$_POST['ordernumber'][$key][$key1],'toplabel'=>$_POST['toplabel'][$key][$key1],'title'=>$value1,'img'=>$_POST['img'][$key][$key1],'link'=>$_POST['link'][$key][$key1],'linklabel'=>$_POST['linklabel'][$key][$key1],'description'=>$_POST['description'][$key][$key1],'descposition'=>$_POST['descposition'][$key][$key1],'color'=>$_POST['color'][$key][$key1],'titlecolor'=>$_POST['titlecolor'][$key][$key1],'linkcolor'=>$_POST['linkcolor'][$key][$key1]);
					$sliders = true;
				}
			}
			}
			}
			
			 if ( current_user_can( $customField['capability'], $post_id ) ) {
						if ($sliders) {
								update_post_meta( $post_id, $this->prefix . 'sliders', $sliders_val );
						} else {
								delete_post_meta( $post_id, $this->prefix . 'sliders' );
						}
				}
				
			$portfolios = false;
			if (isset($_POST['optionLabel'])) {
			foreach ($_POST['optionLabel'] as $key => $value) {
					$portfolios_val[$key] = array('optionLabel'=>$value,'optionValue'=>$_POST['optionValue'][$key],'optionUrl'=>$_POST['optionUrl'][$key],'optionlabelordernumber'=>$_POST['optionlabelordernumber'][$key]); 
					$portfolios = true;
				
			}
			}
			
			
			 if ( current_user_can( $customField['capability'], $post_id ) ) {
						if ($portfolios) {
								update_post_meta( $post_id, $this->prefix . 'portfolios', $portfolios_val );
						} else {
								delete_post_meta( $post_id, $this->prefix . 'portfolios' );
						}
				}
				
			$portfolio_images = false;
			if (isset($_POST['portfolioimg'])) {
			foreach ($_POST['portfolioimg'] as $key => $value) {
					$portfolio_images_val[$key] = array('portfolioimg'=>$_POST['portfolioimg'][$key],'portfoliotitle'=>$_POST['portfoliotitle'][$key],'portfolioimgordernumber'=>$_POST['portfolioimgordernumber'][$key], 'portfoliovideotype'=>$_POST['portfoliovideotype'][$key], 'portfoliovideoid'=>$_POST['portfoliovideoid'][$key], 'portfoliovideoimage'=>$_POST['portfoliovideoimage'][$key], 'portfoliovideowebm'=>$_POST['portfoliovideowebm'][$key], 'portfoliovideomp4'=>$_POST['portfoliovideomp4'][$key], 'portfoliovideoogv'=>$_POST['portfoliovideoogv'][$key] );
					$portfolio_images = true;
				
			}
			}
			
			
			 if ( current_user_can( $customField['capability'], $post_id ) ) {
						if ($portfolio_images) {
								update_post_meta( $post_id, $this->prefix . 'portfolio_images', $portfolio_images_val );
						} else {
								delete_post_meta( $post_id, $this->prefix . 'portfolio_images' );
						}
				}
				

			$portfolio_date = "";
			if (isset($_POST['portfolio_date']))
				$portfolio_date = $_POST['portfolio_date'];
			 if ( current_user_can( $customField['capability'], $post_id ) ) {
						if ($portfolio_date) {
								update_post_meta( $post_id, $this->prefix . 'portfolio_date', $portfolio_date );
						} else {
								delete_post_meta( $post_id, $this->prefix . 'portfolio_date' );
						}
				}
				
			$seo_title = $_POST['seo_title'];
			$seo_description = $_POST['seo_description'];
			$seo_keywords = $_POST['seo_keywords'];
			if ( current_user_can( $customField['capability'], $post_id ) ) {
				if ($seo_title) {
						update_post_meta( $post_id, $this->prefix . 'seo_title', $seo_title );
				} else {
						delete_post_meta( $post_id, $this->prefix . 'seo_title' );
				}
				if ($seo_description) {
					update_post_meta( $post_id, $this->prefix . 'seo_description', $seo_description );
				} else {
					 delete_post_meta( $post_id, $this->prefix . 'seo_description' );
				}
				if ($seo_keywords) {
					update_post_meta( $post_id, $this->prefix . 'seo_keywords', $seo_keywords );
				} else {
					delete_post_meta( $post_id, $this->prefix . 'seo_keywords' );
				}
			 }
		}
		
		

		

	} // End Class

} // End if class exists statement

// Instantiate the class
if ( class_exists('myCustomFields') ) {
	$myCustomFields_var = new myCustomFields();
}
?>