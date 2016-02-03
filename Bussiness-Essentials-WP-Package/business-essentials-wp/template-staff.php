<?php  
/* 
Template Name: Staff
*/  
?>

<?php get_header(); ?>

</div><!-- End of content wrapper -->

<!-- Clear Fix --><div class="clear"></div>

</div><!-- End of header wrapper -->

<!-- Start of breadcrumb wrapper -->
<div class="breadcrumb_wrapper">

<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

<!-- Clear Fix --><div class="clear"></div>

</div><!-- End of breadcrumb wrapper -->

<!-- Start of content wrapper -->
<div id="contentwrapper">

<!-- Start of content wrapper -->
<div class="content_wrapper">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<?php 
if ( has_post_thumbnail() ) {  ?>

<a href="<?php the_permalink (); ?>"><?php the_post_thumbnail('slide'); ?></a>

<?php } ?>


<?php the_content('        '); ?> 

<?php endwhile; ?> 

<?php else: ?> 
<p><?php _e( 'There are no posts to display. Try using the search.', 'essentials' ); ?></p> 

<?php endif; ?>

<div class="clear"></div>

<?php if (have_posts()) : ?>
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('post_type=staff&posts_per_page=6&paged='. $paged ); ?>
<?php while (have_posts()) : the_post(); ?>

<!-- Start of staff wrapper -->
<div class="staff_wrapper">

<!-- Start of one third -->
<div class="one_third">

<?php
$stafftitle = get_post_meta($post->ID, 'stafftitle', $single = true); 
$staffheadshot = get_post_meta($post->ID, 'staffheadshot', $single = true); 
?>

<!-- Start of employee image -->
<div class="employee_image">
<a href="<?php the_permalink (); ?>"><?php echo wp_get_attachment_image($staffheadshot, ''); ?></a>

</div><!-- End of employee image -->

<!-- Start of employee name -->
<div class="employee_name">
<a href="<?php the_permalink (); ?>"><?php the_title (); ?></a>

</div><!-- End of employee name -->

<!-- Start of employee title -->
<div class="employee_title">
<?php if ($stafftitle != ('')){ ?>
<?php echo stripslashes($stafftitle); ?>
<?php } else { } ?>

</div><!-- End of employee title -->

<!-- Start of employee social -->
<div class="employee_social">
    <?php $repeatable_fields = get_post_meta($post->ID, 'repeatable', true);
	if ($repeatable_fields != ('')){ 
	foreach ($repeatable_fields as $v) { ?>
    
<a href="<?php echo $v['repeatable_socailurl']; ?>"><?php echo wp_get_attachment_image($v['repeatable_socailimage'], ''); ?></a>
<?php } } else { }?>

</div><!-- End of employee social -->

</div><!-- End of one third -->

</div><!-- end of staff wrapper -->

<?php endwhile; ?> 

<?php else: ?> 
<p><?php _e( 'There are no posts to display. Try using the search.', 'essentials' ); ?></p> 

<?php endif; ?>

<!-- Start of pagination -->
<div class="pagination">
<?php if (function_exists("pagination")) {
    pagination($wp_query->max_num_pages);
} ?>

</div><!-- End of pagination -->

</div><!-- End of content wrapper -->

<!-- Clear Fix --><div class="clear"></div>

</div><!-- End of content wrapper -->

<?php get_footer(); ?>