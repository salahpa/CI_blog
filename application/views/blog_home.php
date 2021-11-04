<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
<div class="col-md-12 px-0">
	<h1 class="display-4 font-italic"><?php echo $blog_list[0]->blog_title;?></h1>
	<p class="lead my-3">Last Updated on : <?php echo date('d-m-Y H:i A',strtotime(isset($blog_list[0]->updated_date) ? $blog_list[0]->updated_date : $blog_list[0]->created_date));?></p>
	<p class="lead my-3"><?php echo substr($blog_list[0]->blog_desc,0,200);?></p>
	<p class="lead mb-0"><a href="single_blog/<?php echo $blog_list[0]->id;?>" class="text-white font-weight-bold">Continue reading...</a></p>
</div>
</div>

<div class="row mb-2">
<?php if(!empty($blog_list[0])){
foreach($blog_list as $bgl){
	?>
	<div class="col-md-6">
	<div class="card flex-md-row mb-4 box-shadow h-md-250">
		<div class="card-body d-flex flex-column align-items-start">
		<!-- <strong class="d-inline-block mb-2 text-primary">World</strong> -->
		<h3 class="mb-0">
			<a class="text-dark" href="#"><?php echo $bgl->blog_title;?></a>
		</h3>
		<div class="mb-1 text-muted"><?php echo date('d-m-Y',strtotime($bgl->created_date));?></div>
		<p class="card-text mb-auto"><?php echo substr($bgl->blog_desc,0,100);?></p>
		<a href="single_blog/<?php echo $bgl->id;?>">Continue reading</a>
		</div>
	</div>
	</div>
	<?php
}
}?>

</div>
