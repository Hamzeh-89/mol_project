<?php
// we will make CRUD(Create,Read,Update,Delete)/*die->Mean stop execution the code Or Exit */
// lets start with Create 
 //open connection 
 include('includes/connection.php');

if(isset($_POST['submit'])){
    $case_date      = $_POST['case_date'];
    $case_time      = $_POST['case_time'];
    $case_type      = $_POST['case_type'];
    $case_desc      = $_POST['case_desc'];
    $case_status    = $_POST['case_status'];
    $case_proirity  = $_POST['case_proirity'];
    
    // query 
    $query = "insert into cases(case_date,case_time,case_type,case_desc,case_status,case_proirity)
              values('$case_date','$case_time',$case_type','$case_desc','$case_status','$case_proirity')";
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
                            <strong>ThankFull</strong> 
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
                                   

                                   <div class="card-footer">
<a class="btn btn-primary btn-lg" href="finsh.php" role="button" name="submit" type="submit"><i class="fa fa-dot-circle-o"></i> Save</a>
                            
<a class="btn btn-primary btn-lg" href="login.php" role="button" name="submit"><i class="fa fa-dot-circle-o"></i> Save</a>
                            <button type="reset" class="btn btn-danger btn-lg">
                                <i class="fa fa-ban"></i> Cancel
                            </button>
                        </div>

                            </form>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/user_footer.php');?>

