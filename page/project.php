<?php

require_once './php/model/Project.php';
require_once './php/controller/GetProject.php';
require_once './php/view/ViewProject.php';

$project = new Project();
$getProject = new GetProject($project);
$viewProject = new ViewProject($project, $getProject);

$getProject->project($item);

?>

<script>
	$(function() {
		$(".rslides").responsiveSlides({
		auto: false,
		pager: false,
		nav: true,
		speed: 500,
		prevText: "<i class='arrow fa fa-long-arrow-left fa-2x'></i>",
      	nextText: "<i class='arrow fa fa-long-arrow-right fa-2x'></i>",
		});
	});
</script>

<h1 class="text-center"><?= $viewProject->getName(); ?></h1>
<div class="row text-center"><a href="http://<?= $viewProject->getURL(); ?>"><?= $viewProject->getURL(); ?></a></div>
<hr>

<?php include('./page/project/'.$item.'.php'); ?>

<div class="row">
	<div class="container">
		<div class="pull-left">
			<?php
				if ($viewProject->getPrevName() != "") {
					echo '<a href="'.$viewProject->getPrevURL().'"><i class="arrow fa fa-long-arrow-left"></i>'.$viewProject->getPrevName().'</a>';
				}
			?>
		</div>
		<div class="pull-right">
			<?php
				if ($viewProject->getNextName() != "") {
					echo '<a href="'.$viewProject->getNextURL().'">'.$viewProject->getNextName().'<i class="arrow fa fa-long-arrow-right"></i></a>';
				}
			?>
		</div>
	</div>
</div>