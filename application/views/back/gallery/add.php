<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">Forms/</span> Gallery Add
              </h4>

              <div class="card mb-4">
                <h5 class="card-header">Gallery</h5>
                <form class="card-body" action="<?php echo base_url();?>gallery/add" method="post" enctype="multipart/form-data">
                  <hr class="my-4 mx-n4" />
                  <div class="row g-3 ">
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-first-name">Gallery Name</label>
                      <input type="text" id="multicol-first-name" class="form-control" placeholder="Gallery name" name="gallery_name" />
                    </div>
                
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-birthdate">Gallery Thumnail</label>
                      <input
                        type="file"
                        id="multicol-birthdate"
                        class="form-control dob-picker"
                        name="gallery_thumnail"
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