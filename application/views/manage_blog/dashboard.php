
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <!-- <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form> -->
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link btn btn-md" href="add_blog">
                Add Blog 
				<!-- <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p> -->
                </a>
                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div> -->
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">                
				<?php
					$error = $this->session->flashdata('error');
					if($error)
					{
				?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<?php echo $this->session->flashdata('error'); ?>                    
				</div>
				<?php } ?>
				<?php  
					$success = $this->session->flashdata('success');
					if($success)
					{
				?>
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php } ?>
              </div>
              <div class="card-body">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Title</th>
                      <th>Date</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
						<?php if(!empty($blog_list[0])){
							foreach($blog_list as $bgl){
								?>
								<tr>
									<td><?php echo $bgl->blog_title;?></td>
									<td><?php echo $bgl->created_date;?></td>
									<td>
										<form action="<?php echo base_url();?>delete_blog" method="post" name="blog_form" id="blog_form">
										<a class="btn btn-warning btn-xs" href="edit_blog/<?php echo $bgl->id;?>"><i class="fa fa-pencil"></i></a>
										<input type="hidden" name="blog_id" id="blog_id" value="<?php echo $bgl->id;?>">
											<button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>
										</form>
									</td>
								</tr>
								<?php
							}
							}?>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
