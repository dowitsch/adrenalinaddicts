<?php
//about theme info
add_action( 'admin_menu', 'skt_elastic_abouttheme' );
function skt_elastic_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-elastic'), esc_html__('About Theme', 'skt-elastic'), 'edit_theme_options', 'skt_elastic_guide', 'skt_elastic_mostrar_guide');   
} 
//guidline for about theme
function skt_elastic_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_attr_e('Theme Information', 'skt-elastic'); ?>
		   </div>
          <p><?php esc_attr_e('Elastic is a multipurpose WordPress theme which is lightweight, flexible, scalable, simple to handle and comes with in built page builder which has around 30 pre defined blocks for easy to use multimedia blocks for pages. It is very modern, intuitive and can be used for any type of industry like cafe, restaurant, business, corporate, coaching, adventure, tours and travels, resort, hotel, spa, fitness, gym, yoga, IT company, software, digitial, online business, large and small as well as medium enterprises, agency as well. It is responsive, RTL compliant and works with popular multilingual plugins as well. It is shortcodes friendly, gutenberg editor friendly and call to action friendly with contact form, gallery, slider plugins tested and compliant with WooCommerce for shop and eCommerce. Easy to use theme comes with step by step documentation and backed with quick and friendly support.','skt-elastic'); ?></p>
		  <a href="<?php echo esc_url(SKT_ELASTIC_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_ELASTIC_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_attr_e('Live Demo', 'skt-elastic'); ?></a> | 
				<a href="<?php echo esc_url(SKT_ELASTIC_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_attr_e('Buy Pro', 'skt-elastic'); ?></a> | 
				<a href="<?php echo esc_url(SKT_ELASTIC_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_attr_e('Documentation', 'skt-elastic'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_ELASTIC_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>