<?php include('includes/cause-header.php'); ?>
<div class="row">
	<div class="col-sm-4">
		<img src="<?=$home?>images/cause-page-band.jpg" class="img-responsive center-block cause-img" />
	</div>
	<div class="col-sm-8 cause-info">
		<h3>Sayreville Marching Band</h3>
		<p>This talented, commited group of teens works so hard at supporting their school, honing their craft, and representing their town. Both of my sons are members of the band, and fundraising is key to their activities. I’m thrilled to donate my time and talents to help the cause, whether its creating flyers, apparel or graphics for their show theme.</p>
		<p>To learn more about the Sayreville Marching Band, visit <a href="http://www.swmhsbpa.webs.com" target="_blank">www.swmhsbpa.webs.com</a></p>
		
		<?php
		$causeActive['band'] = true;
		include('includes/causes.php');
		?>
	</div>
</div>