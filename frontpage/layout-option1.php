<?php
/**
* Frontpage Option 1
*
* Slider | Widget Area
* Content 
*
**/

get_header(); // Loads the header.php template.
?>
</div>
<div class="row-fluid expand">
    
    <div class="span8">
        <?php UBC_Collab_Spotlight::show(); ?>
    </div>
        
</div>
<div class="row-fluid expand">

	<div id="content" class="hfeed span12">
		<?php //UBC_Collab_Frontpage::content(); ?>                        
	</div><!-- .content .hfeed -->

<?php get_footer(); // Loads the footer.php template. ?>