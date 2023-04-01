<?php
function twenty_cust ($wp_customizer) {
	$wp_customizer->add_section('cust_titles', array(
		'title' => __('Title cust', 'cust'),
		'priority' => '30',
	));
	$wp_customizer->add_setting('cust_title', array(
		'default' => "Mission Statement",
		'transport' => 'refresh',

	));
	$wp_customizer->add_control('cust_title_ctrl', array(
		'label' => __('label', 'cust'),
		'section'=> 'cust_titles',
		'settings'=> 'cust_title',
		'type' => 'text',

	));
}
add_action( 'customize_register', 'twenty_cust' );




// function cust_customizer_settings($wp_customizer){
// 	$wp_customizer->add_section('cust_services',array(
// 		'title'=>__('Services','customizer'),
// 		'priority'=>'30'
// 	));

// 	$wp_customizer->add_setting('cust_services_heading',array(
// 		'default'=>"Mission Statement",
// 		'transport'=>'refresh', //postMessage
// //		'type'=>'option' //theme_mod or option
// 	));

// 	$wp_customizer->add_control('cust_services_heading_ctrl',array(
// 		'label'=>__('Services Heading','customizer'),
// 		'section'=>'cust_services',
// 		'settings'=>'cust_services_heading',
// 		'type'=>'text'
// 	));


// }
// add_action('customize_register','cust_customizer_settings');
