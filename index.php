<?php
/*
Plugin Name: Grading System Daxxip
Plugin URI: http://wordpress.org/extend/plugins/garatder/
Description: A Simple grading system for post to allow user to Vote Grade for post gared are A,B,C,D,E,F
Author: Hasanul Banna
Version: 1.0
Author URI: http://daxxip.com/
*/



function dxgrade_style() { ?>
	 <link rel="stylesheet" href="<?php echo plugins_url();?>/dx-grade/grade-style.css" type="text/css" media="screen" />
     
    
<?php 

}
add_action('wp_head', 'dxgrade_style');

//to DISPLAY FORM
function dx_grade_form() { 
		global $user_ID, $post;
		global $wpdb;
?>
<?php   if (isset($_POST['submit_rate'])) {
				
				
				$rate = $_POST['rate'] ;
				$current_grade = get_post_meta($post->ID, 'total_rate', true);
				$grade_user = get_post_meta($post->ID, 'grade_user', true);
				update_post_meta($post->ID, 'total_rate', ($rate+$current_grade));
				update_post_meta($post->ID, 'grade_user', ($grade_user+1));
					
   }

?>
	<div class="dx_grade_main">
   	<h1>Select Your Grade for this post</h1>
    
    	<div class="dx_grade_content">
        <form method="post" action="" id="rate">
            <dl class="daxxip_form">
    
           
          
                <dd id="rate-element">
                    <label for="rate-6"><input type="radio" value="6" id="rate" name="rate">A</label>
                    <label for="rate-5"><input type="radio" value="5" id="rate" name="rate">B</label>
                    <label for="rate-4"><input type="radio" value="4" id="rate" name="rate">C</label>
                    <label for="rate-3"><input type="radio" value="3" id="rate" name="rate">D</label>
                    <label for="rate-2"><input type="radio" value="2" id="rate" name="rate">E</label>
                    <label for="rate-1"><input type="radio" value="1" id="rate" name="rate">F</label>
                </dd>
                <dd class="submit" id="submit_rate-element">
                <input type="submit" value="Submit" id="submit_rate" name="submit_rate">
                	
                 
                    <div class="result"></div>
             	</dd>
             </dl>
         </form>
        </div>
        
    	<?php 
			$current_grade = 1;
			$grade_user = 1;
			$grade_avg = 0;
			$current_grade = get_post_meta($post->ID, 'total_rate', true);
			
			$grade_user = get_post_meta($post->ID, 'grade_user', true);
			
			if ($current_grade=='' || $grade_user=='' ) {
			$nograde = true;
			
			} else {
				
				$grade_avg = round(($current_grade / $grade_user));
				
			}
		
		if($grade_avg==6){
			$grade = 'A';
		}
		else if($grade_avg==5){
			$grade = 'B';
		}
		else if($grade_avg==4){
			$grade = 'C';
		}
		else if($grade_avg==3){
			$grade = 'D';
		}
		else if($grade_avg==2){
			$grade = 'E';
		}
		
		else if($grade_avg==1){
			$grade = 'F';
		}
				
			
		?>
        
    	<h1>Current Grade: 
		<?php if(@$nograde !== true) { ?>
		<?php echo $grade;  
        } else { ?>
        No Grade added
        <?php } ?>
        
        </h1>
   </div>
   
<?php }

function dx_grade() { 
	global $user_ID, $post;
	global $wpdb;
			$current_grade = 1;
			$grade_user = 1;
			$current_grade = get_post_meta($post->ID, 'total_rate', true);
			$grade_user = get_post_meta($post->ID, 'grade_user', true);
			if ($current_grade=='' || $grade_user=='' ) {
			echo "#";
			} else {
				
				$grade_avg = round(($current_grade / $grade_user));
				
			}
		
		if($grade_avg==6){
			$grade = 'A';
		}
		else if($grade_avg==5){
			$grade = 'B';
		}
		else if($grade_avg==4){
			$grade = 'C';
		}
		else if($grade_avg==3){
			$grade = 'D';
		}
		else if($grade_avg==2){
			$grade = 'E';
		}
		
		else if($grade_avg==1){
			$grade = 'F';
		}
				
			
   return ($grade);
}
?>