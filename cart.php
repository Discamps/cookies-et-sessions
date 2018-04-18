<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">

<div class="row">
	<?php 
		if(isset($_SESSION['products'])) :
			foreach ($_SESSION['products'] as $name => $product):
	?>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<figure class="thumbnail text-center">
					<img src="assets/img/product-<?= $product ?>.jpg" alt="cookies choclate chips" class="img-responsive">
					<figcaption class="caption">
						<h3><?= $name ?></h3>
					</figcaption>
				</figure>
			</div>
			<?php endforeach; ?>
</div>
		<?php endif; ?>

</section>
<?php require 'inc/foot.php'; ?>
