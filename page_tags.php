<?php
/*
Template Name: 标签页
*/
?>
<?php  $soz=$_POST["soz"]; if ($soz != "ajax") { get_header();  } ?>
<div id="content0">
<div class="container" id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php if (get_option('strive_breadcrumb') == 'Display') { ?>
                <div class="subsidiary box">
                    <div class="bulletin fourfifth">
                        <span class="sixth">当前位置：</span><?php loo_breadcrumbs(); ?>
                     </div>
                </div>
            <?php } ?>
	<?php get_sidebar(); ?>
    <div class="mainleft">
		<div class="article_container row  box">
			<h1 class="page_title"><?php the_title(); ?></h1>
        	<div class="context">
            	<div class="tagcloud"><?php wp_tag_cloud('smallest=13&largest=13&unit=px&number=0&orderby=count&order=DESC');?></div>
            </div>
		</div>
	<?php endwhile;endif; ?>
  	</div>
</div>
</div>
<?php  $soz=$_POST["soz"]; if ($soz != "ajax") { get_footer();  } ?>