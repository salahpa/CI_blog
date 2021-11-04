<div class="panel panel-default">
	<div class="panel-heading"><h5 class="display-5 font-italic">Comments</h5></div>
		<form action="<?php echo base_url();?>add_comment" method="post">
			<div class="panel-body text-justify">
				<?php 			
					foreach($comments as $cmt){
						?>
						<div class="well well-sm">
							<h5><?php echo $cmt->username;?></h5>
							<div class="top-border usercomment">
								<input type="radio" name="parent_id" id="parent_id<?php echo $cmt->id;?>" value="<?php echo $cmt->id;?>">
								<?php echo $cmt->comment;?>
							</div>
						</div>
						<?php
					}
				?>
				
					
				
				<hr>
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
<style>
	.well.well-sm {
		background: #eee;
		padding: 10px;
		margin-bottom: 10px;
	}
	.top-border{
		border-top: 1px solid #fff;
	}
	.usercomment{
		padding-top: 10px;;
	}
</style>
