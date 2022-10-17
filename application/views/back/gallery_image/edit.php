<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Forms/</span> galleryimage Edit
    </h4>

    <div class="card mb-4">
        <h5 class="card-header">Gallery Image</h5>
        <form class="card-body" action="<?php echo base_url();?>galleryimage/edit/<?php echo $galleryimage[0]->id;?>" method="post" enctype="multipart/form-data">
            <hr class="my-4 mx-n4" />
            <div class="row g-3 ">
              

                    <div class="col-md-6">
                        <label class="form-label" for="multicol-birthdate">Gallery Image</label>
                        <input type="file" id="multicol-birthdate" class="form-control dob-picker" name="g_image"  value="<?php echo $galleryimage[0]->g_image?>" />
                        <img src="<?php echo base_url()?>upload_images/<?php echo $galleryimage[0]->g_image?>" alt="" width="50">
                    </div>
                 
                <div class="col-md-6">
                    <label class="form-label" for="text">status:</label>
                    <select class="form-control form-select" name="status" >
                    <option value="<?php echo $galleryimage[0]->status;?>">
                    <?php 
                    
                    if ($galleryimage[0]->status==1)
                    { 
                      echo "Active";

                    }
                    else
                    
                    { 
                      echo "Inactive";
                    }
                    ?>
                    </option>    
                    <option value="1">Enable </option>
                        <option value="0">Disable </option>
                    </select>
                </div>
            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
        </form>
    </div>