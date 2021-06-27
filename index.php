<?php

function setActive($key)
{
    return $key == 0 ? 'active' : '';
}

function getTabName($key)
{
    return $key + 1;
}

?>

<?php include 'header.php'; ?>
	<div class="main">
		<div class="tab-content">

			<?php include('web.php') ?>
			<?php include('apps.php') ?>
			<?php include('branding.php') ?>
			<?php include('banner.php') ?>
			<?php include('instagram.php') ?>
			<?php include('facebook.php') ?>
			<?php include('animation.php') ?>
			<?php include('screen.php') ?>

		</div>
	</div>



	<?php include 'footer.php'; ?>