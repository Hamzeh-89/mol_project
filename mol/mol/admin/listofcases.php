<?php

    include('includes/connection.php');

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
                            <strong>List Of Pending Cases</strong> 
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>ID</th>
                           
                            
                            <th>Type</th>
                            <th>Description</th>
                            <th>Related to</th>
                            <th>Employee Note</th>
                            <th>Status</th>
                            <th>Priority</th>
                            <th>Edit</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php
                        $query ="SELECT * FROM cases WHERE `case_status`='Pending'";
                        $result=mysqli_query($conn,$query);
                        if($result){
                        while($row   =mysqli_fetch_assoc($result))
                        {
                        echo "<tr>";
                        echo "<td>{$row['case_id']}</td>";
                        echo "<td>{$row['case_type']}</td>";
                        echo "<td>{$row['case_desc']}</td>";
                        echo "<td>{$row['directory_name']}</td>";
                        echo "<td>{$row['case_emp_note']}</td>";
                        echo "<td>{$row['case_status']}</td>";
                        echo "<td>{$row['case_proirity']}</td>";
                        echo "<td><a href='edit_cases.php?id={$row['case_id']}' class='btn btn-primary  btn-sm'>Edit</a></td>";
                        echo "</tr>";
                        }
                            }



                        ?>
                    
                      
                    
                    
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
</div>
<?php include('includes/admin_footer.php');?>

