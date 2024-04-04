<?php

function sajiddev_customizer( $wp_customize ){
     // 1 Copyright Section

          $wp_customize->add_section(
               'sec_copyright',
               array(
                    'title' => __('Copyright Settings', 'sajiddev'),
                    'description' => __('Copyright Settings', 'sajiddev')
               )

          );
          

          $wp_customize->add_setting(
               'set_copyright',
               array(
                    'type' => 'theme_mod',
                    'default' => __('Copyright X - All Rights Reserved', 'sajiddev'),
                    'sanitize_callback' => 'sanitize_text_field'
               )
          );


          $wp_customize->add_control(
               'set_copyright',
               array(
                    'Label' => __('Copyright Information', 'sajiddev'),
                    'description' => __('Please, type your description', 'sajiddev'),
                    'section' => 'sec_copyright',
                    'type' => 'text'
               )
          );

     // 2 Hero Section
          $wp_customize->add_section(
               'sec_hero',
               array(
                    'title' => __('Hero Section', 'sajiddev'),
               )
          );

          /************ Title ***************/
          $wp_customize->add_setting(
               'sec_hero_title',
               array(
                    'type' => 'theme_mod',
                    'default' => __('Please, add some title', 'sajiddev'),
                    'sanitize_callback' => 'sanitize_text_field'
               )
          );


          $wp_customize->add_control(
               'sec_hero_title',
               array(
                    'Label' => __('Hero title', 'sajiddev'),
                    'description' => __('Please, type your title here', 'sajiddev'),
                    'section' => 'sec_hero',
                    'type' => 'text'
               )
          );


          /************ Sub Title ***************/
          $wp_customize->add_setting(
               'sec_hero_subtitle',
               array(
                    'type' => 'theme_mod',
                    'default' => __('Please, add some subtitle', 'sajiddev'),
                    'sanitize_callback' => 'sanitize_textarea_field'
               )
          );


          $wp_customize->add_control(
               'sec_hero_subtitle',
               array(
                    'Label' => __('Hero subtitle', 'sajiddev'),
                    'description' => __('Please, type your subtitle here', 'sajiddev'),
                    'section' => 'sec_hero',
                    'type' => 'textarea'
               )
          );


          /************ Button ***************/
          $wp_customize->add_setting(
               'sec_hero_button_text',
               array(
                    'type' => 'theme_mod',
                    'default' => __('Learn more', 'sajiddev'),
                    'sanitize_callback' => 'sanitize_text_field'
               )
          );


          $wp_customize->add_control(
               'sec_hero_button_text',
               array(
                    'Label' => __('Hero button text', 'sajiddev'),
                    'description' => __('Please, type your hero button text here', 'sajiddev'),
                    'section' => 'sec_hero',
                    'type' => 'text'
               )
          );


          /************ Button Link ***************/
          $wp_customize->add_setting(
               'sec_hero_button_link',
               array(
                    'type' => 'theme_mod',
                    'default' => '#',
                    'sanitize_callback' => 'esc_url_raw'
               )
          );


          $wp_customize->add_control(
               'sec_hero_button_link',
               array(
                    'Label' => __('Hero button Link', 'sajiddev'),
                    'description' => __('Please, type your hero button link here', 'sajiddev'),
                    'section' => 'sec_hero',
                    'type' => 'url'
               )
          );

          /************ Hero Height ***************/
          $wp_customize->add_setting(
               'set_hero_height',
               array(
                    'type' => 'theme_mod',
                    'default' => 800,
                    'sanitize_callback' => 'absint'
               )
          );
          


          $wp_customize->add_control(
               'set_hero_height',
               array(
                    'Label' => __('Hero height', 'sajiddev'),
                    'description' => __('Please, set height ', 'sajiddev'),
                    'section' => 'sec_hero',
                    'type' => 'number'
               )
          );
          
          
          /************ Hero Background ***************/
          $wp_customize->add_setting(
               'set_hero_background',
               array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'absint'
               )
          );
          $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize,'set_hero_background',
          array(
               'label' => 'Hero Image',
               'section' => 'sec_hero',
               'mime_type' => 'image'
          )));

          
          // 3. Blog
          $wp_customize->add_section( 
          'sec_blog', 
          array(
               'title' => __('Blog Section', 'sajiddev')
          ) );
     
          // Posts per page
          $wp_customize->add_setting( 
               'set_per_page', 
               array(
               'type' => 'theme_mod',
               'sanitize_callback' => 'absint'
          ) );

          $wp_customize->add_control( 
               'set_per_page', 
               array(
               'label' => __('Posts per page', 'sajiddev'),
               'description' => __('How many items to display in the post list?', 'sajiddev'),			
               'section' => 'sec_blog',
               'type' => 'number'
          ) );

          // Post categories to include
          $wp_customize->add_setting( 
               'set_category_include', 
               array(
               'type' => 'theme_mod',
               'sanitize_callback' => 'sanitize_text_field'
          ) );

          $wp_customize->add_control( 
               'set_category_include', 
               array(
               'label' => __('Post categories to include', 'sajiddev'),
               'description' => __('Comma separated values or single category ID', 'sajiddev'),
               'section' => 'sec_blog',
               'type' => 'text'
          ) );	

          // Post categories to exclude
          $wp_customize->add_setting( 
               'set_category_exclude', 
               array(
               'type' => 'theme_mod',
               'sanitize_callback' => 'sanitize_text_field'
          ) );

          $wp_customize->add_control( 
               'set_category_exclude', 
               array(
               'label' => __('Post categories to exclude', 'sajiddev'),
               'description' => __('Comma separated values or single category ID', 'sajiddev'),			
               'section' => 'sec_blog',
               'type' => 'text'
          ) );
}
add_action('customize_register', 'sajiddev_customizer');