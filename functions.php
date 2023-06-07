<?php
add_action( 'init', 'orange612_custom_init' );
function orange612_custom_init() {

  if ( function_exists( 'acf_add_options_page' ) ) {
		$parent = acf_add_options_page([
			'page_title' 	=> 'Configuración',
			'menu_title'	=> 'Configuración',
			'menu_slug' 	=> 'configuracion',
			'redirect'		=> false
		]);
	}

  
}
