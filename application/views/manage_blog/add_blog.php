
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link btn btn-md" href="manage_blog">
                All Blog 
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
						<form action="<?php echo base_url();?>save_blog" method="post" name="blog_form" id="blog_form">
								<label>Blog Title</label>
								<div class="form-group">
										<div class="form-line">
												<input type="text" tabindex="1" class="form-control alphanumeric" maxlength="50" placeholder="Enter Blog Title" name="blog_title" id="blog_title" />
										</div>
								</div>
								<label>Blog Description</label>
								<div class="form-group">
										<div class="form-line">
												<textarea tabindex="2" class="form-control alphanumeric" rows="3" placeholder="Enter Blog Description" name="blog_desc" id="blog_desc"></textarea>
										</div>
								</div>
								<button type="submit" name="blog_button" id="blog_button" class="btn btn-info btn-md" href="">Save Blog</button>
            </form>
          </div>
        </div>
      </div>
