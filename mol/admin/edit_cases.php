<?php
// we will make CRUD(Create,Read,Update,Delete)/*die->Mean stop execution the code Or Exit */
// lets start with Create 
 //open connection 
 include('includes/connection.php');

if(isset($_POST['submit'])){
    $case_date      = $_POST['case_date'];
    $case_time      = $_POST['case_time'];
    $case_entry     = $_POST['case_entry'];
    $case_type      = $_POST['case_type'];
    $case_desc      = $_POST['case_desc'];
    $directory_name = $_POST['directory_name'];
    $case_emp_note = $_POST['case_emp_note'];
    $case_status = $_POST['case_status'];
    $case_proirity = $_POST['case_proirity'];
    

     // query 
    $query = "update cases set case_date      ='$case_date',
                               case_time      = '$case_time',
                               case_entry     = '$case_entry',
                               case_type      = '$case_type',
                               case_desc      = '$case_desc',
                               directory_name = '$directory_name',
                               case_emp_note  = '$case_emp_note',
                               case_status    = '$case_status',
                               case_proirity  = '$case_proirity'
              where case_id  = {$_GET['id']}";
//echo $query;die;
    mysqli_query($conn,$query);


    // redirect
    header("location:manage_cases.php");
}


 ?> 

 

 <?php include('includes/admin_header.php');?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit Cases</strong> 
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <h3 class="text-center title-2">Edit Cases</h3>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Case Date</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                <input id="date"   name="case_date" class="form-control" value="<?php echo date('Y-m-d'); ?>">

                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Case Time</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                <input id="time"   name="case_time"  class="form-control"value="<?php echo date('H:i:s A'); ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Case Entry</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="case_entry" id="select" class="form-control">
                                            <option disabled="">Please select</option>
                                            <option value="Telephone">Telephone</option>
                                            <option value="Website">Website</option>
                                            <option value="COMبخدمتـ">COMبخدمتـ</option>
                                            <option value="Whatsup">Whatsup</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Twitter">Twitter</option>

                                        </select>
                                    </div>
                                </div>


                                  <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Case Type</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="case_type" id="select" class="form-control">
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
                           <textarea type="textarea"name="case_desc"  rows="9" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Case Related To</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="directory_name" id="select" class="form-control">
                <option disabled="">Please select</option>
        <option value="Expatriate Labor Directorate">Expatriate Labor Directorate</option>
        <option value="Central Inspection Directorate">Central Inspection Directorate</option>
        <option value="Central Employment Directorate">Central Employment Directorate</option>
        <option value="Directorate of Domestic Workers">Directorate of Domestic Workers</option>
        <option value="Directorate of Human Trafficking">Directorate of Human Trafficking</option>
        <option value="Legal Affairs Directorate">Legal Affairs Directorate</option>
        <option value="Labor Relations Directorate">Labor Relations Directorate</option>

                                   </select>
                                    </div>
                                </div> 
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Case Employee Note</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                    <textarea  type="textarea" name="case_emp_note"  rows="9" class="form-control"></textarea>
                                    </div>
                                </div>

                                 <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Case Status</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="case_status" id="select" class="form-control">
                                            <option disabled="">Please select</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Underprocessing">Underprocessing</option>
                                            <option value="Closed">Closed</option>
                                            <option value="Complete">Complete</option>
                                            <option value="Cancelled">Cancelled</option>
                                      
                                        </select>
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Csae Priority</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select  type="select"name="case_proirity" id="select" class="form-control">
                                            <option disabled="">Please select</option>
                                            <option value="High Risk">High Risk</option>
                                            <option value="Medium Risk">Medium Risk</option>
                                            <option value="Low risk">Low risk</option>

                                        </select>
                                    </div>
                                </div> 

                                 <div class="card-footer">
                            <button name="submit"    type="submit" class="btn btn-primary  btn-lg">
                                <i class="fa fa-dot-circle-o"></i> Update
                            </button>
                            <button type="reset" name="reset" onclick="window.location='manage_cases.php';return false;" class="btn btn-danger btn-lg">
                                <i class="fa fa-ban"></i> Cancel
                                </button>

                        </div>

                            </form>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>

    </  div>
</div>
<?php include('includes/admin_footer.php');?>

