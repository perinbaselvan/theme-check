<?php
/**
 * Template used for single topic post type
 *
 * @package Talemy
 * @subpackage Templates
 */

get_header();

talemy_set_ld_single_settings();

do_action( 'talemy_content_start' );

get_template_part( 'templates/learndash/single/topic' );

do_action( 'talemy_content_end' );

get_footer(); ?>
