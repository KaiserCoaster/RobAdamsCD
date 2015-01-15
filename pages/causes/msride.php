<?php include('includes/cause-header.php'); ?>
<div class="row">
	<div class="col-sm-4">
		<img src="<?=$home?>images/cause-page-ms.jpg" class="img-responsive center-block cause-img" />
	</div>
	<div class="col-sm-8 cause-info">
		<h3>National MS Society</h3>
		<p>Over the past several years, I’ve had the pleasure of participating in the “Coast the Coast” MS Ride. In more recent years, my brother and my two sons have joined me for the event. Not only are we supporting a good cause, we are sharing a great bonding activity that’s become a family tradition. This year meant even more to me personally - it was my first ride since battleing cancer and missing the ride last year.</p>
		<p>To learn more about the National MS Society, visit <a href="http://www.nationalmssociety.org" target="_blank">www.nationalmssociety.org</a></p>
		
		<?php
		$causeActive['ms'] = true;
		include('includes/causes.php');
		?>
	</div>
</div>