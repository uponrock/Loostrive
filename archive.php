<?php  $soz=$_POST["soz"]; if ($soz != "ajax") { get_header();  } ?>
<div id="content0">
<div class="container" id="content">
			<?php if (get_option('strive_breadcrumb') == 'Display') { ?>
                <div class="subsidiary box">
                    <div class="bulletin fourfifth">
                        <span class="sixth">当前位置：</span><?php loo_breadcrumbs(); ?>
                     </div>
                </div>
            <?php }  ?>
	<?php get_sidebar();?>
    <div class="mainleft">
        <ul id="post_container" class="masonry clearfix">
			<?php include('includes/list_post.php'); ?>
    	</ul>
		<div class="clear"></div>
			<div class="navigation container"><?php pagination(5);?></div>
		</div>
	</div>

<div class="clear"></div>
</div>
<?php  $soz=$_POST["soz"]; if ($soz != "ajax") { get_footer();  } ?>