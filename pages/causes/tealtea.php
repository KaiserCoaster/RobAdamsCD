<?php include('includes/cause-header.php'); ?>
<div class="row">
	<div class="col-sm-4">
		<img src="<?=$home?>images/cause-teal.jpg" class="img-responsive center-block cause-img" />
	</div>
	<div class="col-sm-8 cause-info">
		<h3>Teal Tea Foundation</h3>
		<p>Over the past several years, I’ve worked with a tireless group of wonderful folks who raise money to find a cure for ovarian cancer and raise awareness. Whether it’s flyers, postcards, bookmarks, brochures or the organization’s logo, I couldn’t be happier to support such a worthy cause.</p>
		<p>To learn more about the Teal Tea Foundation, visit <a href="http://www.tealtea.org" target="_blank">www.tealtea.org</a></p>
		<p>When I started working with Teal Tea I never dreamed they would be supporting me during my own battle with cancer. In late March 2013, I started treatment for what I thought was simple lower back pain. By the first week of June, I was wheeled into Sloan Kettering in NY for four months of intensive chemotherapy. As my oldest son Robbie said, I'm the "luckiest unlucky guy" he knows.</p>
		<p>Through many prayers, positive thinking, unmatched professionalism by my caregivers, a bit of Irish luck and the generosity of coworkers and volunteers, I have made a full recovery. My experience has given me a new perspective as I continue to support the Teal Tea.</p>
		
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-4">
				<a href="#" class="thumbnail" data-toggle="modal" data-target="#myModal">
					<img data-src="holder.js/300x300" src="<?=$home?>images/cause-page-teal-thumb.jpg" alt="...">
					<div class="caption">
						Photo of my team at work. I kept this in my hospital room as inspiration to return.
					</div>
				</a>
			</div>
		</div>
		
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">&nbsp;</h4>
					</div>
					<div class="modal-body">
						<img src="<?=$home?>images/cause-page-teal.jpg" class="img-responsive center-block" />
					</div>
				</div>
			</div>
		</div>
		
		<?php
		$causeActive['tea'] = true;
		include('includes/causes.php');
		?>
	</div>
</div>