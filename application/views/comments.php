<div class="panel panel-default">
	<div class="panel-heading"><h5 class="display-5 font-italic">Comments</h5></div>
		<form action="<?php echo base_url();?>add_comment" method="post">
			<div class="panel-body text-justify">
			<?php echo $comments ?>				
				<hr>
				<small><b>You can select above coments and reply for that comment</b></small>
					<div class="form-group">
						<input type="hidden" name="blog_id" id="blog_id" value="<?php echo $single_blog[0]->id;?>">
						<label>Name</label>
						<input type="text" class="form-control" name="username" id="username"><br>
						<label>Comment</label>
						<textarea name="comment" id="comment" class="form-control"></textarea>
						<button type="submit" name="btn_comment" id="btn_comment" class="btn btn-warning btn-md">Comment</button>
					</div>
			</div>
		</form>
</div>
