<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">Forms/</span> Vertical Layouts
              </h4>

              <div class="card mb-4">
                <h5 class="card-header">Bride</h5>
                <form class="card-body" action="<?php echo base_url();?>bride/add" method="post" enctype="multipart/form-data">
                  <hr class="my-4 mx-n4" />
                  <div class="row g-3 ">
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-first-name">Bride Name</label>
                      <input type="text" id="multicol-first-name" class="form-control"   name="br_name" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-first-name">Nick Name</label>
                      <input type="text" id="multicol-first-name" class="form-control"   name="nickname" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-first-name">Bride DOB</label>
                      <input type="date" id="multicol-first-name" class="form-control"   name="age" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-first-name">Father Name</label>
                      <input type="text" id="multicol-first-name" class="form-control"   name="father_name" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-first-name">Mother Name</label>
                      <input type="text" id="multicol-first-name" class="form-control"  name="mother_name" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-first-name">Grand Father Name</label>
                      <input type="text" id="multicol-first-name" class="form-control"   name="g_f_name" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-first-name">Grand Mother Name</label>
                      <input type="text" id="multicol-first-name" class="form-control"   name="g_m_name" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-first-name">Address</label>
                      <textarea class="form-control" name="address" id=""  rows="1" placeholder="Address"></textarea>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-first-name">Education</label>
                      <input type="text" id="multicol-first-name" class="form-control"   name="education" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-first-name">Social_link</label>
                      <input type="text" id="multicol-first-name" class="form-control"  name="social_link" />
                    </div>
                    
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-birthdate">Bride Image</label>
                      <input
                      type="file"
                      id="multicol-birthdate"
                      class="form-control dob-picker"
                      name="br_image"
                      />
                    </div>
                    
                    <div class="col-md-6">
                      <label class="form-label" for="multicol-first-name">Discription</label>
                      <textarea class="form-control" name="content" id=""  rows="3" placeholder="Content"></textarea>
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