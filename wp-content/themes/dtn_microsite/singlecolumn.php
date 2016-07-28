<?php
/*
Template Name: Single Column
*/
?>
<?php 
get_header();
the_post();
?>

<script>
	$(document).ready(function(){
		$('tbody tr:odd').each(function(){
			$(this).addClass('odd');
		})
	})
</script>
<style>
ol li{margin-bottom:10px}
</style>
<?php get_header();?>
    <!-- Content Wrapper -->
<div id="singleColumn">
    <div id="contentWrapper">
        <div id="homeBanner">
        	<div class="introContent">
			<?php				
			  $frontpage_id = get_page_by_path("home");
			  $homeBannerText = get_post_meta($post->ID, "Challenge Banner Text", true);
			  $allContest = get_post_meta($post->ID,'allcontestsURL', true);
			  if($homeBannerText != null) :
				echo apply_filters('the_content', $homeBannerText);
			  endif;?>
			</div>
        </div>
        <div class="main homeMain">
            <div id="contentArea" class="post">
               <!---
			   <div class="featuredBox registerBox">
				<div class="content">
					<?php
						echo get_post_meta($frontpage_id->ID, "Box1 Text", true);
					?>
					
				</div>
				<a class="button" target="_blank" href="<?php echo get_post_meta($frontpage_id->ID, "Box1 URL", true);?>"><span>Register Now</span></a>
			   </div>
			   
			   <div class="featuredBox learnBox">
				<div class="content">
					<?php
						echo get_post_meta($frontpage_id->ID, "Box2 Text", true);
					?>
				</div>
				<a class="button" target="_blank" href="<?php echo get_post_meta($frontpage_id->ID, "Box2 URL", true);?>"><span>Learn More About NTL</span></a>	
			   </div>
			   
			   <div class="featuredBox harvardBox">
				<div class="content">
					<?php
						echo get_post_meta($frontpage_id->ID, "Box3 Text", true);
					?>
				</div>
				<a class="button" target="_blank" href="<?php echo get_post_meta($frontpage_id->ID, "Box3 URL", true);?>"><span>Learn More About Harvard-NTL</span></a>	
			   </div>
			   -->
			   <div class="clear"></div>
			   <?php echo wpautop(apply_filters('the_content', $post->post_content)) ;?>
            </div>
            <!-- contentArea -->
            <div class="clear"></div>
        </div>
        <!-- main -->
			
    </div>
</div>
<?php get_footer(); ?>