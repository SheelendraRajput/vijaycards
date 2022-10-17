<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Forms/</span> Groom Relative Edit
    </h4>

    <div class="card mb-4">
        <h5 class="card-header">Groom Relative</h5>
        <form class="card-body" action="<?php echo base_url();?>groomrelative/edit/<?php echo $groomrelative[0]->id;?>"
            method="post"   enctype="multipart/form-data">
            <hr class="my-4 mx-n4" />
            <div class="row g-3 ">
                <div class="col-md-12">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Relative Name</th>

                                <th>Relative Image</th>

                            </tr>
                        </thead>
                        <tbody>
                           
                <?php
                
                $relativename =  json_decode($groomrelative[0]->r_name) ;
                $relativeimage =  json_decode($groomrelative[0]->r_image) ;
                $i=0;
                foreach($relativename as $name){ ?>
                    <tr id="addRow">


                                <td class="col-xs-3">
                                    <input class="form-control addPrefer" type="text" placeholder="Enter Name"
                                        name="r_name[]" value="<?php echo $relativename[$i];?>" />
                                </td>
                                <td class="col-xs-5">
                                    <input class="form-control addCommon" type="file" placeholder=" " name="r_image[]"
                                     />
                                    <img src="<?php echo base_url();?>upload_images/<?php echo $relativeimage[$i];?>"
                                        alt="" width="50">
                                </td>

                                <td class="col-xs-1 text-center">
                                    <span class="addBtn">
                                        <i class="btn btn-primary">ADD</i>
                                    </span>
                                    <button  class="btn btn-danger" onClick="deleteRow(this)">' +
            'Delete</button>
                                </td>
                            </tr>
<?php  $i++;
 } ?>
                        </tbody>
                    </table>

                </div>


                <div class="col-md-6">
                    <label class="form-label" for="text">status:</label>
                    <select class="form-control form-select" name="status">
                        <option value="<?php echo $groomrelative[0]->status;?>">
                            <?php 
                    
                    if ($groomrelative[0]->status==1)
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




    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- <div class="col-md-12">

        <div class="col-md-1 pull-right">
            <button class="btn btn-primary pull-right">Save</button>
        </div>
    </div> -->



    <script>
    function formatRows(main, prefer, common) {
        return '<tr><td class="col-xs-3"><input type="text"  placeholder="Enter Name" class="form-control editable" name="r_name[]" value="<?php echo $groomrelative[0]->r_name;?>" /></td>' +
            '<td class="col-xs-3"><input type="file"   class="form-control editable" name="r_image[]" /></td>' +
            '<td class="col-xs-1 text-center"><button  class="btn btn-danger" onClick="deleteRow(this)">' +
            'Delete</button></td></tr>';
    };

    function deleteRow(trash) {
        $(trash).closest('tr').remove();
    };

    function addRow() {
        var main = $('.addMain').val();
        var preferred = $('.addPrefer').val();
        var common = $('.addCommon').val();
        $(formatRows(main, preferred, common)).insertAfter('#addRow');
        $(input).val('');
    }

    $('.addBtn').click(function() {
        addRow();
    });
    </script>
    <style>
    .remove {
        background: #f1f1f1;

        td {
            font-style: italic;
        }
    }

    .table>tbody>tr>td {
        vertical-align: middle;
    }

    .input-group {
        width: 100%;
    }


    .addBtn {
        cursor: pointer;
    }
    </style>