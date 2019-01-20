<?php

add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );
add_filter( 'show_admin_bar', '__return_false' );