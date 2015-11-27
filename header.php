<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type');?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php include('includes/seo.php');?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name');?> RSS Feed" href="<?php bloginfo('rss2_url');?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name');?> Atom Feed" href="<?php bloginfo('atom_url');?>" />
<link rel="shortcut icon" href="<?php echo stripslashes(get_option('strive_favicon')); ?>" type="image/x-icon" />
<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
<link href="//cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
<link href='http://www.youziku.com/webfont/CSS/7218a279545dd1c19691efefe5438d0e' rel='stylesheet' type='text/css'/>
<!--[if lte IE 7]><script>window.location.href='http://7xkipo.com1.z0.glb.clouddn.com/upgrade-your-browser.html?referrer='+location.href;</script><![endif]-->
<?php my_scripts_method; wp_head()?>
<?php flush()?>
<style>
	#post_container .fixed-hight .thumbnail{height:<?php echo stripslashes(get_option('strive_timthigh')); ?>px; overflow: hidden;}
	.related,.related_box{height: <?php echo stripslashes(get_option('strive_relatedhigh'))+'90'; ?>px;}
	.related_box .r_pic,.related_box .r_pic img {height: <?php echo stripslashes(get_option('strive_relatedhigh')); ?>px;}	
</style>
<!-- 百度统计开始 -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?4da2697ab4e29bf55eeaad87ba5ecbc5";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<!-- 百度统计结束 -->
</head>
<body  class="custom-background">
<?php if ( is_home() || is_search() || is_category() || is_month() || is_author() || is_archive() ) { ?>
<?php include('includes/loading.php'); ?>
<?php } ?>
<!-- 导航进度条开始 -->
<div id="navOne">
<div id="loadbar" style="display: none; width: 0px; "></div>
<div id="afterrun"><script type="text/javascript">$("#loadbar").show();$("#loadbar").animate({width:"10%"});</script></div>
	<div id="navOne-center" class="container">
		<div id="navfenlei">
			<li class="fenleicat">NO16STREET</li>
			<?php if(function_exists('wp_nav_menu')) {
                            wp_nav_menu(array(
                            'theme_location'=>'toolbar',
                            'menu_id'=>'toolbar',
                            'container'=>'ul')
                            );}
                            ?>
		</div>
		<div id="search">
			<form method="get" id="searchform" action="<?php bloginfo('url');?>">
				<input type="text" value="请输入搜索内容" name="s" id="s" onfocus="this.value = this.value == this.defaultValue ? '' : this.value" onblur="this.value = this.value == '' ? this.defaultValue : this.value">
				<input type="submit" id="searchsubmit" value="搜索" title="WordPress Search" style="left: 216.80910495993308px; z-index: -100; ">
			</form>
		</div>
		<div id="picbutton">
		</div>
		<div class="clear"></div>
	</div>
</div>
<!-- 导航进度条结束 -->
		<div id="headwrapper">
        <?php if (get_option('strive_toolbar') == 'Display') { ?>			
        	<div class="mainbar row">
                <div class="container">
                        <div id="topbar">
                            <?php if(function_exists('wp_nav_menu')) {
                            wp_nav_menu(array(
                            'theme_location'=>'toolbar',
                            'menu_id'=>'toolbar',
                            'container'=>'ul')
                            );}
                            ?>
                        </div>
                        <div id="rss">
                            <ul>
                                <li><a href="<?php bloginfo('rss2_url')?>" target="_blank" class="icon1" title="欢迎订阅<?php bloginfo('name');?>"></a></li>
                                <?php if (get_option('strive_sbaidu') == 'Display') { ?>
                                <li><a href="<?php echo stripslashes(get_option('strive_sbaidumap')); ?>" target="_blank" class="icon5" title="百度站点地图"></a></li><?php } else { } ?>
                                 <?php if(get_option('strive_tqq') == 'Display') { ?>
                                <li><a href="<?php echo stripslashes(get_option('strive_tqqurl')); ?>" target="_blank" class="icon2" title="我的腾讯微博" rel="nofollow"></a></li><?php } else { } ?>
                                <?php if(get_option('strive_weibo') == 'Display') { ?>
                                <li><a href="<?php echo stripslashes(get_option('strive_weibourl')); ?>" target="_blank" class="icon3" title="我的新浪微博" rel="nofollow"></a></li><?php } else { } ?>
                                <?php if(get_option('strive_site') == 'Display') { ?>
                                <li><a href="<?php echo stripslashes(get_option('strive_sitemap')); ?>" target="_blank" class="icon6" title="站点地图"></a></li><?php } else { } ?>
                                <li><a href="http://mail.qq.com/cgi-bin/feed?u=<?php bloginfo('rss2_url');?>" target="_blank" class="icon4" title="用QQ邮箱阅读空间订阅本站" rel="nofollow"></a></li>
                            </ul>
                        </div>
                 </div>  
             </div>
             <div class="clear"></div>
         <?php }else{?>              
			<!-- <div class="row"></div> -->
		<?php }?>
				<div class="container head">
                <div id="musictitle">
    <div id="musicload"></div>
    <div class="musiclist"></div>
    </div>
            <span class="titleone">
			    <h1>
                    <a href="<?php bloginfo('url');?>/" title="<?php bloginfo('name');?>"><span style="left:0;position:absolute;">小众</span><span style="right:0;position:absolute;">网站</span></a>
                </h1>
                <div id="yuan">
    							<div class="circle"></div>
    							<div class="circle1"></div>
    							<div id="music">
    								<a class="mprev" href="#1">◀‖</a>
    								<a class="mnext" href="#1">‖▶</a>
    								<a class="mplay" href="#1">▶</a>
    								<a class="mpause" href="#1">■</a>
    							</div>
    						</div>
                <div id="titleinfo">
                    <span>精品小众网站推荐分享平台</span>
                </div>
			</span>
                 	<?php if (get_option('strive_logoadc') == 'Display') { ?>
                 	<div class="banner push-right">
                 	<?php echo stripslashes(get_option('strive_logoadccode')); ?>
					</div>
                	<?php } ?>
                </div>
				<div class="clear"></div>
		</div>
		</div>
		<div id="afterrun"><script type="text/javascript">$("#loadbar").animate({width:"25%"});</script></div>
		<?php if(get_option('strive_adphone') == true){?><div class="adphone container"><div class="row"><?php echo stripslashes(get_option('strive_adphone')); ?></div></div><?php }?>
