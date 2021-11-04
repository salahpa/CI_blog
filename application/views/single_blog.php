<div class="panel panel-default">
	<div class="panel-heading"><h1 class="display-4 font-italic"><?php echo $single_blog[0]->blog_title;?></h1></div>
	<div class="panel-body text-justify">
		<p class="lead my-3">Last Updated on : <?php echo (isset($single_blog[0]->updated_date) ? $single_blog[0]->updated_date : $single_blog[0]->created_date);?></p>
		<hr>
		<p class="lead my-3"><?php echo $single_blog[0]->blog_desc;?></p>
	</div>
</div>

<hr>

<?php $this->load->view('comments');?>
