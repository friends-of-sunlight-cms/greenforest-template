<?php

use Sunlight\Router;
use Sunlight\Template;
defined('SL_ROOT') or exit
?>
<em id="page-top"></em>
<!--NAVIGATION-->
<nav id="navbar-main" class="navbar navbar-expand-lg">
	<div class="container">
	  <a class="navbar-brand col-8 ml-3" href="<?php echo Template::siteUrl() ?>">
	  <span class="logo-main font-weight-bold"><?php echo Template::siteTitle() ?></span> <span class="logo-description"><?php echo Template::siteDescription() ?></span></a>
	  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	  <div class="collapse navbar-collapse" id="navbarMain">
		<?php echo Template::treeMenu(['children_only' => false]) ?>
	  </div>
  </div>
</nav>
<!--MAIN-->
<main role="main" class="pt-5">
	<section class="col-12 pt-5 portfolio-select"style="background-image: url('<?= Router::path('upload/bg.jpg') ?>');background-size:cover;background-attachment: fixed;">
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
	<section class="col-12 box-content" style="background-image: url('<?= Router::path('upload/bg.jpg') ?>');background-size:cover;background-attachment: fixed;">
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
<footer id="footer-main" class="">
	<div class="copyrights p-0 col-12">&copy; <?php echo date("Y"); ?> - <a href="<?php echo Template::siteUrl() ?>" rel="nofollow"><?php echo Template::siteTitle() ?></a> | <?php echo Template::siteDescription() ?> <br> All rights reserved. | Powered by <a href="https://sunlight-cms.org/" target="_blank" rel="nofollow">SunLight CMS</a></li>
		<?php echo Template::links() ?>
		<div class="user-menu-wrap text-center p-1"><?php echo Template::userMenu() ?></div>
		<a href="#page-top" class="back-top fixed-bottom" style="display: block;"><i class="bi bi-arrow-up-circle"></i></a>
    </button>
	</div>
	<endora>
</footer>