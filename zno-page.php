<?php

/**
 * Template Name: ZNO page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */

get_header();
get_template_part('/template-parts/home/hero');
get_template_part('/template-parts/home/you-get');
get_template_part('/template-parts/home/courses');
get_template_part('/template-parts/home/director');
get_template_part('/template-parts/home/free');
get_footer();
