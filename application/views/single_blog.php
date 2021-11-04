<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
	<div class="col-md-12 px-0">
		<h1 class="display-4 font-italic"><?php echo $single_blog[0]->blog_title;?></h1>
		<p class="lead my-3">Last Updated on : <?php echo (isset($single_blog[0]->updated_date) ? $single_blog[0]->updated_date : $single_blog[0]->created_date);?></p>
		<p class="lead my-3"><?php echo $single_blog[0]->blog_desc;?></p>
	</div>
</div>
