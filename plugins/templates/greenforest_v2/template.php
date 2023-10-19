<?php

use Sunlight\Router;
use Sunlight\Template;
defined('SL_ROOT') or exit
?>
<em id="page-top"></em>

<!--NAVIGATION-->
<nav id="navbar-main" class="navbar navbar-dark sticky-top">
	<div class="container">
	  <a class="navbar-brand" href="<?php echo Template::sitePath() ?>">
	  <span class="site-title"><?php echo Template::siteTitle() ?></span><span class="site-description"><?php echo Template::siteDescription() ?></span></a>
	  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	  <div class="navbar-collapse collapse" id="navbarMain">
			<!--?php echo Template::treeMenu(['children_only' => false]) ?-->
			<?php echo Template::menu(1,9) ?>	
	  </div>
  </div>
</nav>
<!--MAIN-->
<main role="main" class="content-main">
	<section id="boxes-top" class="col-12">
		<div class="container py-3">
			<div class="row m-0 p-0">
				<div class="col-12 p-3 m-0">
				<?php echo Template::boxes('top') ?>
				</div>
			</div>
		</div>
	</section>
	<section id="content" class="col-12" >
		<div class="container py-lg-5 px-0 px-md-5">
			<div class="row m-0 p-0">
				<div class="col-12 p-0 m-0">
				<?php echo Template::content() ?>
				</div>
			</div>
		</div>
	</section>
	<section id="boxes-bottom" class="col-12">
		<div class="container py-3">
			<div class="row m-0 p-0">
				<div class="col-12">
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
		<nav class="navbar" id="navbarUser">
			<div class="container-fluid">
					<?php echo Template::userMenu() ?>
			</div>
	</nav>





		<a href="#page-top" class="back-top sticky-bottom" style="display: block;"><i class="bi bi-arrow-up-circle"></i></a>
    </button>
	</div>
	<?= Template::getCurrent()->getConfig()['endora'] ? '<endora>': '' ?>
</footer>