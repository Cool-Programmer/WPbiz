<?php 
		function biz_customizer_register($wp_customize)
	{
		// Banner section
		// Creating the 'container'
		$wp_customize->add_section('banner', [
			'title' => __('Banner', 'wpbiz'),
			'description' => sprintf(__('Options for home page banner', 'wpbiz')),
			'priority' => 130
		]);



		// Banner Heading setting
		$wp_customize->add_setting('banner_heading', [
			'default' => _x('Banner Heading', 'wpbiz'),
			'type' => 'theme_mod'
		]);

		// Banner Heading controller
		$wp_customize->add_control('banner_heading', [
			'label' => __('Heading', 'wpbiz'),
			'section' => 'banner',
			'priority' => 20
		]);



		// Banner Text setting
		$wp_customize->add_setting('banner_text', [
			'default' => _x('Banner Text', 'wpbiz'),
			'type' => 'theme_mod'
		]);

		// Banner Text controller
		$wp_customize->add_control('banner_text', [
			'label' => __('Banner Text', 'wpbiz'),
			'section' => 'banner',
			'priority' => 20
		]);



		// Banner's button text setting
		$wp_customize->add_setting('button_text', [
			'default' => _x('Click Me', 'wpbiz'),
			'type' => 'theme_mod'
		]);

		// Banner's button text control
		$wp_customize->add_control('button_text', [
			'label' => __('Button Text', 'wpbiz'),
			'section' => 'banner',
			'priority' => 20
		]);



		// Banner's button url setting
		$wp_customize->add_setting('button_url', [
			'default' => '#',
			'type' => 'theme_mod'
		]);

		// Banner's button url setting
		$wp_customize->add_control('button_url', [
			'label' => 'Button URL',
			'section' => 'banner',
			'priority' => 20
		]);



		// Banner's backgroud image setting
		$wp_customize->add_setting('banner_image', [
			'default' => get_template_directory_uri() . '/img/banner.jpg'
		]);

		// Banner's background control
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'banner_image',
				[
					'label' => __('Background Image', 'wpbiz'),
					'section' => 'banner',
					'settings' => 'banner_image'
				]
			)
		);



		/*------------------------------------*/
		// Creating box 1 container
		$wp_customize->add_section('box1', [
			'title' => __('First Box', 'wpbiz'),
			'description' => sprintf(__('The first box on the front page')),
			'priority' => 140
		]);



		// Settings for the first box's icon
		$wp_customize->add_setting('box1-icon', [
			'default' => 'fa fa-chart',
			'type' => 'theme_mod'
		]);

		// Controller for the first box's icon
		$wp_customize->add_control('box1-icon', [
			'label' => __('Font-Awesome icon of the first box', 'wpbiz'),
			'section' => 'box1', 
			'priority' => 20
		]);


		// Settings for the first box's heading
		$wp_customize->add_setting('box1-heading', [
			'default' => __('Box Heading', 'wpbiz'),
			'type' => 'theme_mod'
		]);

		// Control for the first box's heading
		$wp_customize->add_control('box1-heading', [
			'label' => __('First Box Heading', 'wpbiz'),
			'section' => 'box1',
			'priority' => 20
		]);


		// Settings for the first box's text
		$wp_customize->add_setting('box1-text', [
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
			'mod' => 'theme_mod'
		]);

		// Controls for the first box's text
		$wp_customize->add_control('box1-text', [
			'label' => __('First Box Text', 'wpbiz'),
			'section' => 'box1',
			'priority' => 20
		]);





		/* -------------------------------------------- */
		// Second box container section
		$wp_customize->add_section('box2', [
			'title' => 'Second Box',
			'description' => sprintf('Second Box Section'),
			'priority' => 150
		]);



		// Settings for the second box's icon
		$wp_customize->add_setting('box2-icon', [
			'default' => 'fa fa-code',
			'type' => 'theme_mod'
		]);

		// Controls for the second box's icon
		$wp_customize->add_control('box2-icon', [
			'label' => __('Font Awesome Icon of the Second Box', 'wpbiz'),
			'section' => 'box2',
			'priority' => 20
		]);


		// Settings for the second box's heading
		$wp_customize->add_setting('box2-heading', [
			'default' => 'Box 2 Heading',
			'type' => 'theme_mod'
		]);

		// Controls for the second box's heading
		$wp_customize->add_control('box2-heading', [
			'label' => __('Second Box Heading', 'wpbiz'),
			'section' => 'box2',
			'priority' => 20
		]);



		// Settings for the second box's text
		$wp_customize->add_setting('box2-text', [
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
			'type' => 'theme_mod'
		]);

		// Controls for the second box's text
		$wp_customize->add_control('box2-text', [
			'label' => 'Box 2 Text',
			'section' => 'box2',
			'priority' => 20
		]);




		/* -------------------------------------------- */
		// Third box container
		$wp_customize->add_section('box-3', [
			'title' => 'Third Box',
			'description' => sprintf('Third Box Section'),
			'priority' => 160
		]);


		// Settings for the third box's icon
		$wp_customize->add_setting('box3-icon', [
			'default' => 'fa fa-desktop',
			'type' => 'theme_mod'
		]);

		// Controls for the second box's icon
		$wp_customize->add_control('box3-icon', [
			'label' => __('Font Awesome icon of the third box', 'wpbiz'),
			'section' => 'box-3',
			'priority' => 20
		]);



		// Settings for the third box's heading
		$wp_customize->add_setting('box3-heading', [
			'default' => 'Box 3 Heading', 
			'type' => 'theme_mod'
		]);

		// Controls for the third box's heading
		$wp_customize->add_control('box3-heading', [
			'label' => __('Box 3 Heading', 'wpbiz'),
			'section' => 'box-3',
			'priority' => 20
		]);



		// Settings for the third box's text
		$wp_customize->add_setting('box3-text', [
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
			'type' => 'theme_mod'
		]);

		// Controls for the third box's text
		$wp_customize->add_control('box3-text', [
			'label' => __('Box 3 Text', 'wpbiz'),
			'section' => 'box-3',
			'priority' => 20
		]);
	}
	add_action('customize_register', 'biz_customizer_register');
?>