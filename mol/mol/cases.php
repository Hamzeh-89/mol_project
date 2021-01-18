<?php
// we will make CRUD(Create,Read,Update,Delete)/*die->Mean stop execution the code Or Exit */
// lets start with Create 
 //open connection 
 include('includes/connection.php');

if(isset($_POST['submit'])){
    $case_date      =  date("Y-m-d");
    $case_time      = date("H:i:s A");
    $case_type      = $_POST['case_type'];
    $case_desc      = $_POST['case_desc'];
    $case_status    = 'Pending';
    $c_id             =$_SESSION['c_id'] ;
   
    
    // query 
    $query = "insert into cases(case_date,case_time,case_type,case_desc,case_status,c_id)
              values('$case_date','$case_time',$case_type','$case_desc','$case_status',$c_id)";
    mysqli_query($conn,$query);
}


 ?> 

 

 <?php include('includes/user_header.php');?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Create Cases</strong> 
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <strong><h3 class="text-center title-2">Create Case</h3></strong>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Case Date</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                <input id="date"   name="case_date" class="form-control" disabled="" value="<?php echo date('Y-m-d'); ?>">

                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Case Time</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                <input id="time"   name="case_time"  class="form-control" disabled="" value="<?php echo date('H:i:s A'); ?>">
                                    </div>
                                </div>

                              


                                  <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Case Type</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="case_type" id="select" class="form-control" required="">
                                            <option disabled="">Please select</option>
                                            <option value="Complaint">Complaint</option>
                                            <option value="Notify">Notify</option>
                                            <option value="Inquiry">Inquiry</option>
                                            <option value="Suggetion">Suggetion</option>
                                            <option value="Thanks">Thanks</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Case Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                           <textarea type="textarea"name="case_desc"  rows="9" class="form-control" required=""></textarea>
                                    </div>
                                </div>

                                
                                <center>
                                <div class="card-footer">
                            <button name="submit"    type="submit" class="btn btn-primary  btn-lg">
                                <i class="fa fa-dot-circle-o"></i> Save
                            </button>
                            <button type="reset" class="btn btn-danger btn-lg">
                                <i class="fa fa-ban"></i> Cancel
                            </button>
                        </div>
                        </center>

                            </form>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/user_footer.php');?>

