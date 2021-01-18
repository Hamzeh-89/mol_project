<?php
// we will make CRUD
// lets start with Create 
 //open connection 


include('includes/connection.php');

if(isset($_POST['submit'])){
    $admin_email    = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];
    $admin_fullname = $_POST['admin_fullname'];
    $admin_dept     = $_POST['admin_dept'];
    $admin_id       = $_SESSION['admin_id'] ;

    
    // query 
    $query = "update admin set admin_email = '$admin_email',
    admin_password = '$admin_password',
    admin_fullname = '$admin_fullname',
    admin_dept     = '$admin_dept',
    admin_id       = '$admin_id' 
    where admin_id = {$_GET['id']}";
             // echo $query;die;
    mysqli_query($conn,$query);

    // redirect
    header("location:manage_admin.php");
}

// fetch Old Data
$query  = "select * from admin where admin_id = {$_GET['id']}";
$result = mysqli_query($conn, $query);
$row    = mysqli_fetch_assoc($result);


?>

<!-- MAIN CONTENT-->
<?php include('includes/admin_header.php'); ?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Edit Admin</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Edit Admin</h3>
                            </div>
                            <hr>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Email</label>
                                    <input name="admin_email" type="text" class="form-control" value="<?php echo $row['admin_email'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Password</label>
                                    <input name="admin_password" type="password" class="form-control" value="<?php echo $row['admin_password'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Full Name</label>
                                    <input name="admin_fullname" type="text" class="form-control" value="<?php echo $row['admin_fullname'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Department</label>
                                    <select name="admin_dept" id="select" class="form-control" required="">
                                        <option disabled selecte selected hidden>-- Please select one --</option>
                                        <option value="Expatriate Labor Directorate">Information Technology And Electronic Transformation Directorate</option>
                                        <option value="Expatriate Labor Directorate">Expatriate Labor Directorate</option>
                                        <option value="Central Inspection Directorate">Central Inspection Directorate</option>
                                        <option value="Central Employment Directorate">Central Employment Directorate</option>
                                        <option value="Directorate of Domestic Workers">Directorate of Domestic Workers</option>
                                        <option value="Directorate of Human Trafficking">Directorate of Human Trafficking</option>
                                        <option value="Legal Affairs Directorate">Legal Affairs Directorate</option>
                                        <option value="Labor Relations Directorate">Labor Relations Directorate</option>
                                    </select>
                                </div>
                                
                                
                                <div>
                                   <button type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                    
                                    <span id="payment-button-amount">Update</span>
                                    
                                </button>
                                <button  type="reset" name="reset" onclick="window.location='manage_admin.php';return false;" class="btn btn-danger btn-lg col-lg-12">
                                 
                                    <span id="payment-button-amount">Cancel</span>

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

<?php include('includes/admin_footer.php'); ?>