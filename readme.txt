=== Plugin Name ===
Contributors: Hasanul Banna
Donate link: http://daxxip.com/
Tags: Grading, Grade system, Points
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A grading system plugin for wordpresss, its allow users to Grade post or page from a range of A,B,C,D,F

== Description ==

A grading system plugin for wordpresss, its allow users to Grade post or page from a range of A,B,C,D,F

<strong>Template Tag For Grading Form</strong>
<code><?php if (function_exists('dx_grade_form')){ dx_grade_form(); }?></code>

<strong>Template Tag To Display Grade of Post</strong>
<code><?php if (function_exists('dx_grade')){ dx_grade(); }?></code>

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `<?php dx_grade_form(); ?>` in your templates to show the grading form
4. Place ` <?php echo dx_grade(); ?>` in your templates to show the Grade

<strong>Template Tag For Grading Form</strong>
<code><?php if (function_exists('dx_grade_form')){ dx_grade_form(); }?></code>

<strong>Template Tag To Display Grade of Post</strong>
<code><?php if (function_exists('dx_grade')){ dx_grade(); }?></code>


== Screenshots ==

1. Grading Form
2. Grad Display