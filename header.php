<header class="header">
	<a href="index.php" class="logo"><i class="fa fa-puzzle-piece" aria-hidden="true"></i>JHOS API</a>
	<a href="index.php" class="nav <?php echo ($currentPage == 'apps'?'-active':'');?>">Apps</a>
	<a href="queries.php" class="nav <?php echo ($currentPage == 'queries'?'-active':'');?>">Queries</a>

	<a href="http://jhos.api/service.php?token=e90dab3ba52d42dbd133c416c5293f0ad&action=list_patient&qid=1" class="btn" target="_blank">API TEST</a>

	<?php if($currentPage == 'apps'){?>
	<a href="app-form.php" class="btn">New App</a>
	<?php }else if($currentPage == 'queries'){?>
	<a href="queries-form.php?type=report" class="btn">New Report</a>
	<a href="queries-form.php?type=service" class="btn">New Service</a>
	<?php }?>
</header>