<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">List /</span>Groom List
    </h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Groom</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Groom Name</th> 
                        <th>Groom Image</th>
                        <th>STATUS</th>
                        <th class="text-center ml-60">OPTIONS</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
               
                    <?php 
                        $i=1;
                    foreach ($groom as $view){
                      ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $view->gr_name;?></td> 
                        <td><img src="<?php echo base_url();?>upload_images/<?php echo $view->gr_image;?>" alt="" width="50"> </td> 
                        <td><?php 
                        if ($view->status==1) {
                          echo "Active";
                        } 
                        else {
                          echo "Inactive";
                        }
                        
                        
                        ?></td>
                        <td class='text-center'><a href="<?php echo base_url();?>groom/edit/<?php echo $view->id;?>" class="btn btn-primary">Edit</a>
                            <button onclick="myFunction(<?php echo $view->id; ?>)" class="btn btn-danger">Delete</button>

                        </td>

                    </tr>
                    <?php 
                    $i++;
                  }
                 ?>

                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
    <script>
    function myFunction(id) {

        var url = "<?php echo base_url();?>";

        var r = confirm("Do you want to delete this?");

            if (r == true)

                window.location = url + "/groom/delete/" + id;

            else

                return false;

        }
    </script>