<?php

// Lets us give it instructions and tell it what to do by using this add action function
// The first argument is where we tell wordpress what type of instructions we are giving it 

// 
function university_files(){
  wp_enqueue_script('main-university-js',get_theme_file_uri('/build/index.js'), array('jquery'), '1.0',true);
  // Google fonts
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'); 
  // Font-awesome
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  // WP function and pointed towards the CSS file that we wanted to load
  wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}
// WP function for calling function,
//  second argument is name of a function that you want WP to call at a specific moment 
// first argument is how you say which moment that should be
// Why we don't add parentheses right after function name
// Because we don't want to literally call this function right now
// 
add_action('wp_enqueue_scripts', 'university_files');