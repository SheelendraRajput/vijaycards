<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">Forms/</span>User Add
              </h4>

              <div class="card mb-4">
                <h5 class="card-header">User</h5>
                <form class="card-body" action="<?php echo base_url();?>user/add" method="post" enctype="multipart/form-data">
                  <hr class="my-4 mx-n4" />
                  <div class="row g-3 ">
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-user-name">User Name</label>
                      <input type="text" id="multicol-user-name" class="form-control"   name="user_name" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-first-name">First Name</label>
                      <input type="text" id="multicol-first-name" class="form-control"   name="first_name" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-last-name">Last Name</label>
                      <input type="text" id="multicol-last-name" class="form-control"   name="last_name" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-email-address"> Email Address</label>
                      <input type="email" id="multicol-email-address" class="form-control"   name="email" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-Phone-number">Phone</label>
                      <input type="text" id="multicol-Phone-number" class="form-control"  name="phone" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-Email-name">Verify Email</label>
                      <input type="email" id="multicol-email-name" class="form-control"   name="id_verified" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-slug-text">Slug</label>
                      <input type="text" id="multicol-slug-text" class="form-control"   name="slug" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-first-name">Social Link</label>
                      <input type="text" id="multicol-first-name" class="form-control"   name="site_link" />
                    </div>
                    
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-first-name">Venue Location</label>
                      <textarea class="form-control" name="venue_location" id=""  rows="1" placeholder="Venue Location"></textarea>
                    </div>
                    
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-birthdate">SELECT THEME</label>
                      <input
                        type="file"
                        id="multicol-birthdate"
                        class="form-control dob-picker"
                        name="theme_selection"
                      />
                    </div>
                   
                    <div class="col-md-6">
                      <label class="form-label" for="text">status:</label>
                      <select class="form-control form-select" name="status">
                        <option value="1">Active </option>
                        <option value="0">InActive </option>
                      </select>
                    </div>
                  </div>
                  <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                  </div>
                </form>
              </div>