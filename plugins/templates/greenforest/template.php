<?php
use Sunlight\Template;
defined('_root') or exit
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160838059-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-160838059-1');
</script>
<style>
/* width */::-webkit-scrollbar {width: 7px;}
/* Track */::-webkit-scrollbar-track {background: #ddd;}
/* Handle */::-webkit-scrollbar-thumb {background: #aaa;}
/* Handle on hover */::-webkit-scrollbar-thumb:hover {background: #888;}
</style>
<em id="page-top"></em>
<!--NAVIGATION-->
<nav id="navbar-main" class="navbar navbar-dark bg-dark fixed-top p-0" style="">
	<div class="container py-2 px-0 px-md-4">
	  <a class="navbar-brand col-8 ml-3" href="<?php echo Template::siteUrl() ?>">
	  <span class="logo-main font-weight-bold"><?php echo Template::siteTitle() ?></span> <span class="logo-description"><?php echo Template::siteDescription() ?></span></a>
	  </a>
	  <button class="navbar-toggler text-primary mr-3" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>	
	  </button>
	  <div class="collapse navbar-collapse py-md-4 px-4" id="navbarsExampleDefault">
		<?php echo Template::menu(2,8) ?>	
	  </div>
  </div>
</nav>
<!--MAIN-->
<main role="main" class="pt-5">
	<section class="col-12 pt-5 portfolio-select"style="background-image: url('/upload/bg.jpg');background-size:cover;background-attachment: fixed;">
		<div class="container py-3 py-lg-5 px-0 px-md-5">
			<div class="row m-0 p-0">
				<div class="col-12 p-3 m-0">
				<?php echo Template::boxes('top') ?>
				</div>
			</div>
		</div>
		<a href="#portfolio-cat-select" class="next text-center">Continue<br><span class="btn mt-4 text-white icon-arrow-down2"></span></a>
	</section>
	<em id="portfolio-cat-select"></em>
	<section class="col-12 content bg-white" >		
		<div class="container py-lg-5 px-0 px-md-5">
			<div class="row m-0 p-0">
				<div class="col-12 p-0 m-0">
				<?php echo Template::content() ?>
				</div>
			</div>
		</div>
	</section>
	<section class="col-12 box-content" style="background-image: url('/upload/bg.jpg');background-size:cover;background-attachment: fixed;">
		<div class="container py-5 px-0 px-md-5 mt-2">
			<div class="row m-0 p-0">
				<div class="col-12 p-0 m-0">
				<?php echo Template::boxes('bottom') ?>
				</div>
			</div>
		</div>
	</section>
</main>
<!--FOOTER-->
<footer class="text-dark bg-white">
	<div class="text-center px-3 py-4 social-links">
		<a href="https://www.instagram.com/laszlobodnar.eu/" rel="nofollow" target="_blank" title="instagram" class="btn btn-primary">
		<span class="icon-instagram"></span></a>
		<a href="https://www.facebook.com/laszlobodnarphoto/" rel="nofollow" target="_blank"  title="facebook" class="btn btn-primary">
		<span class="icon-facebook"></span></a>
		<a href="https://www.linkedin.com/profile/preview?vpa=pub&locale=en_EN" rel="nofollow" target="_blank" title="linkedin" class="btn btn-primary"><span class="icon-linkedin2"></span></a>
		<a href="https://pentaxphotogallery.com/laszlobodnar" rel="nofollow" target="_blank" title="pentaxphotogallery" class="btn btn-primary">
		<span class="icon-camera"></span></a>
		<a href="https://www.behance.net/ladislavbodnr" rel="nofollow" target="_blank" title="behance" class="btn btn-primary">
		<span class="icon-behance"></span></a>	
	</div>
	<div class="text-center p-3">
		<ul class="p-1">
		<li class="p-0 col-12">&copy; 2020 - <a href="http://laszlobodnar.eu" rel="nofollow"><?php echo Template::siteTitle() ?></a> | <?php echo Template::siteDescription() ?> <br> All rights reserved. | Powered by <a href="https://sunlight-cms.org/" target="_blank" rel="nofollow">SunLight CMS</a></li>
		<!--<?php echo Template::links() ?>-->
		</ul>
		<div class="user-menu-wrap text-center p-1"><?php echo Template::userMenu() ?></div>
		<a href="#page-top"><span class="back-top btn btn-outline-primary p-2 icon-arrow-up2" style="display: none;"></span></a>
    </button> 
	</div>
	<endora>
</footer>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e4c29817067f0a9"></script>
<script>
// When the user scrolls down 50px from the top of the document, resize the header's font size
//Menu - scroll
window.onscroll = function() {
    if ( window.pageYOffset > 50 ) { 
      $('#navbar-main').addClass('scroll');
    }
    else {     
      $('#navbar-main').removeClass('scroll');
    }
	if ( window.pageYOffset > 100 ) {
        $('.back-top').fadeIn();
    } 
	else {
        $('.back-top').fadeOut();
    }
};
  //ANIMATE ANCHOR
	    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
	$('<li class="addthis_inline_share_toolbox"></li>').appendTo('.t-page .article-info');	
</script>
<script src="https://cmp.osano.com/Azyw3pRs9VlKv2U1s/93aeaadd-1fc3-4925-8592-49e41674a285/osano.js"></script>