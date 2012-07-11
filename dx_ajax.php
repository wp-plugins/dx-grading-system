<?php
	include '../../../wp-load.php';
	$rate = $_POST['rate']; 
	
	global $user_ID, $post;
	global $wpdb;
	
	
	$current_grade = get_post_meta($post->ID, 'total_rate', true);
	$grade_user = get_post_meta($post->ID, 'grade_user', true);
	update_post_meta($post->ID, 'total_rate', ($rate+$current_grade));
	update_post_meta($post->ID, 'grade_user', ($grade_user+1));
	echo "Your Grade Added";				
 ?>