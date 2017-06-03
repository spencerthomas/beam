<?php 
global $qode_options_elision;
?>
	<div class="column_inner">
		<aside>
			<?php	
			$sidebar = "";

			$is_woocommerce=false;
			if(function_exists("is_woocommerce")){
				$is_woocommerce = is_woocommerce();
				if($is_woocommerce){
					$id = get_option('woocommerce_shop_page_id');
				}
			}
		
			if(get_post_meta($id, 'qode_choose-sidebar', true) != ""){
				$sidebar = get_post_meta($id, 'qode_choose-sidebar', true);
			}else{
				if (is_singular("post")) {
					if($qode_options_elision['blog_single_sidebar_custom_display'] != ""){
						$sidebar = $qode_options_elision['blog_single_sidebar_custom_display'];
					}else{
						$sidebar = "Sidebar";
					}
				} elseif (is_singular("portfolio_page")) {
					if(isset($qode_options_elision['portfolio_single_sidebar_custom_display']) && $qode_options_elision['portfolio_single_sidebar_custom_display'] != ""){
						$sidebar = $qode_options_elision['portfolio_single_sidebar_custom_display'];
					} else{
						$sidebar = "Sidebar Portfolio";
					}
				}else {
					$sidebar = "Sidebar Page";
				}
			}
			?>
				
			<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar($sidebar)) : 
			endif;  ?>
		</aside>
	</div>
