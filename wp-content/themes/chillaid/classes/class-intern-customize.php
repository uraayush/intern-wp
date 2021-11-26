<?php
/**
 * Customizer settings for this theme.
 *
 */

if ( ! class_exists( 'Intern_Customize' ) ) {
	/**
	 * Customizer Settings.
	 *
	 */
	class Intern_Customize {

		/**
		 * Constructor. Instantiate the object.
		 *
		 */
		public function __construct() {
			add_action( 'customize_register', array( $this, 'register' ) );
		}

		/**
		 * Register customizer options.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 * @return void
		 */
		public function register( $wp_customize ) {
			$wp_customize->add_panel('intern_social_panel', array(
				'title' => 'Footer Settings',
				'description' => 'Footer Setting',
				'priority' => 13,
			));
			$wp_customize->add_section('intern_social', array(
				'title' => 'Social Platform',
				'priority' => 13,
				'panel' => 'intern_social_panel',
			));
			$socials = array(
				'facebook'=>'Facebook',
				'twitter'=> 'Twitter',
				'instagram'=> 'Instagram'
			);
			foreach($socials  as $sKey =>$social):
				$wp_customize->add_setting('intern_social['.$sKey.']', array(
					'default' => '',
				));
				$wp_customize->add_control( 'intern_social_data['.$sKey.']', array(
					'label' => __($social, 'dwd'),
					'section' => 'intern_social',
					'type' => 'text',
					'settings' => 'intern_social['.$sKey.']',
				));
			endforeach;

		
		}
	}
}
