<?php
// we will make CRUD(Create,Read,Update,Delete)/*die->Mean stop execution the code Or Exit */
// lets start with Create 
 //open connection 
include('includes/connection.php');

if(isset($_POST['submit'])){
    //echo 111;die;
    $n_id             = $_POST['n_id'];
    $citizen_password = $_POST['citizen_password'];
    $first_name       = $_POST['first_name'];
    $second_name      = $_POST['second_name'];
    $middle_name      = $_POST['middle_name'];
    $last_name        = $_POST['last_name'];
    $gender           = $_POST['gender'];
    $Nationality      = $_POST['Nationality'];
    $city             = $_POST['city'];
    $address          = $_POST['address'];
    $mobile           = $_POST['mobile'];




    // query 
    $query = "insert into citizen(n_id,citizen_password,first_name,second_name,middle_name,last_name,gender,Nationality,city,address,mobile)
    values('$n_id','citizen_password','$first_name','$second_name','$middle_name','$last_name','$gender','$Nationality','$city','$address','$mobile')
    ";
// echo $query;die;
    mysqli_query($conn,$query);
}

?> 


<!-- MAIN CONTENT-->
<?php include('includes/admin_header.php'); ?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Manage Citizen</strong> 
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                             <h3 class="text-center title-2">Create Citizen</h3>
                             <div class="row form-group">
                                <div class="col col-md-3">
                                    <label  class=" form-control-label">National/Personal ID</label>
                                </div>
                                <div class="col-12 col-md-9">
<input class="au-input au-input--full" type="number" name="national_id" placeholder="National ID" pattern="[0-9]{10}"  onkeydown="javascript: return event.keyCode === 8 ||
event.keyCode === 46 ? true : !isNaN(Number(event.key))" required="" oninvalid="this.setCustomValidity('Enter your ID.')">

                                </div>
                            </div>

                            
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Citizen Password</label>
                                    </div>
                                    <div class="col-12 col-md-9">
<input class="au-input au-input--full" type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,32}" required="" oninvalid="this.setCustomValidity('Enter your password.')" oninput="this.setCustomValidity('')">
                                        
                                    </div>
                                </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label  class=" form-control-label">First Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="first_name"  class="form-control" required="">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label  class=" form-control-label">Seconed Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="second_name" class="form-control" required="">

                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label  class=" form-control-label">Middle Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="middle_name" class="form-control" required="">

                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label  class=" form-control-label">last Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="last_name" class="form-control" required="">

                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Gender</label>
                                </div>
                                <div class="col col-md-9">
                                    <div class="form-check">
                                        <div class="radio">
                                            <label for="radio1" class="form-check-label ">
                                                <input type="radio"  name="gender" value="Male" class="form-check-input">Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="radio2" class="form-check-label ">
                                                <input type="radio"  name="gender" value="Female" class="form-check-input">Female
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Nationality</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="Nationality" id="select" class="form-control" required="">
                                     <option value="">-- select one --</option>
                                     <option value="jordanian">Jordanian</option>                                     
                                     <option value="afghan">Afghan</option>
                                     <option value="albanian">Albanian</option>
                                     <option value="algerian">Algerian</option>
                                     <option value="american">American</option>
                                     <option value="andorran">Andorran</option>
                                     <option value="angolan">Angolan</option>
                                     <option value="antiguans">Antiguans</option>
                                     <option value="argentinean">Argentinean</option>
                                     <option value="armenian">Armenian</option>
                                     <option value="australian">Australian</option>
                                     <option value="austrian">Austrian</option>
                                     <option value="azerbaijani">Azerbaijani</option>
                                     <option value="bahamian">Bahamian</option>
                                     <option value="bahraini">Bahraini</option>
                                     <option value="bangladeshi">Bangladeshi</option>
                                     <option value="barbadian">Barbadian</option>
                                     <option value="barbudans">Barbudans</option>
                                     <option value="batswana">Batswana</option>
                                     <option value="belarusian">Belarusian</option>
                                     <option value="belgian">Belgian</option>
                                     <option value="belizean">Belizean</option>
                                     <option value="beninese">Beninese</option>
                                     <option value="bhutanese">Bhutanese</option>
                                     <option value="bolivian">Bolivian</option>
                                     <option value="bosnian">Bosnian</option>
                                     <option value="brazilian">Brazilian</option>
                                     <option value="british">British</option>
                                     <option value="bruneian">Bruneian</option>
                                     <option value="bulgarian">Bulgarian</option>
                                     <option value="burkinabe">Burkinabe</option>
                                     <option value="burmese">Burmese</option>
                                     <option value="burundian">Burundian</option>
                                     <option value="cambodian">Cambodian</option>
                                     <option value="cameroonian">Cameroonian</option>
                                     <option value="canadian">Canadian</option>
                                     <option value="cape verdean">Cape Verdean</option>
                                     <option value="central african">Central African</option>
                                     <option value="chadian">Chadian</option>
                                     <option value="chilean">Chilean</option>
                                     <option value="chinese">Chinese</option>
                                     <option value="colombian">Colombian</option>
                                     <option value="comoran">Comoran</option>
                                     <option value="congolese">Congolese</option>
                                     <option value="costa rican">Costa Rican</option>
                                     <option value="croatian">Croatian</option>
                                     <option value="cuban">Cuban</option>
                                     <option value="cypriot">Cypriot</option>
                                     <option value="czech">Czech</option>
                                     <option value="danish">Danish</option>
                                     <option value="djibouti">Djibouti</option>
                                     <option value="dominican">Dominican</option>
                                     <option value="dutch">Dutch</option>
                                     <option value="east timorese">East Timorese</option>
                                     <option value="ecuadorean">Ecuadorean</option>
                                     <option value="egyptian">Egyptian</option>
                                     <option value="emirian">Emirian</option>
                                     <option value="equatorial guinean">Equatorial Guinean</option>
                                     <option value="eritrean">Eritrean</option>
                                     <option value="estonian">Estonian</option>
                                     <option value="ethiopian">Ethiopian</option>
                                     <option value="fijian">Fijian</option>
                                     <option value="filipino">Filipino</option>
                                     <option value="finnish">Finnish</option>
                                     <option value="french">French</option>
                                     <option value="gabonese">Gabonese</option>
                                     <option value="gambian">Gambian</option>
                                     <option value="georgian">Georgian</option>
                                     <option value="german">German</option>
                                     <option value="ghanaian">Ghanaian</option>
                                     <option value="greek">Greek</option>
                                     <option value="grenadian">Grenadian</option>
                                     <option value="guatemalan">Guatemalan</option>
                                     <option value="guinea-bissauan">Guinea-Bissauan</option>
                                     <option value="guinean">Guinean</option>
                                     <option value="guyanese">Guyanese</option>
                                     <option value="haitian">Haitian</option>
                                     <option value="herzegovinian">Herzegovinian</option>
                                     <option value="honduran">Honduran</option>
                                     <option value="hungarian">Hungarian</option>
                                     <option value="icelander">Icelander</option>
                                     <option value="indian">Indian</option>
                                     <option value="indonesian">Indonesian</option>
                                     <option value="iranian">Iranian</option>
                                     <option value="iraqi">Iraqi</option>
                                     <option value="irish">Irish</option>
                                     <option value="israeli">Israeli</option>
                                     <option value="italian">Italian</option>
                                     <option value="ivorian">Ivorian</option>
                                     <option value="jamaican">Jamaican</option>
                                     <option value="japanese">Japanese</option>
                                     <option value="kazakhstani">Kazakhstani</option>
                                     <option value="kenyan">Kenyan</option>
                                     <option value="kittian and nevisian">Kittian and Nevisian</option>
                                     <option value="kuwaiti">Kuwaiti</option>
                                     <option value="kyrgyz">Kyrgyz</option>
                                     <option value="laotian">Laotian</option>
                                     <option value="latvian">Latvian</option>
                                     <option value="lebanese">Lebanese</option>
                                     <option value="liberian">Liberian</option>
                                     <option value="libyan">Libyan</option>
                                     <option value="liechtensteiner">Liechtensteiner</option>
                                     <option value="lithuanian">Lithuanian</option>
                                     <option value="luxembourger">Luxembourger</option>
                                     <option value="macedonian">Macedonian</option>
                                     <option value="malagasy">Malagasy</option>
                                     <option value="malawian">Malawian</option>
                                     <option value="malaysian">Malaysian</option>
                                     <option value="maldivan">Maldivan</option>
                                     <option value="malian">Malian</option>
                                     <option value="maltese">Maltese</option>
                                     <option value="marshallese">Marshallese</option>
                                     <option value="mauritanian">Mauritanian</option>
                                     <option value="mauritian">Mauritian</option>
                                     <option value="mexican">Mexican</option>
                                     <option value="micronesian">Micronesian</option>
                                     <option value="moldovan">Moldovan</option>
                                     <option value="monacan">Monacan</option>
                                     <option value="mongolian">Mongolian</option>
                                     <option value="moroccan">Moroccan</option>
                                     <option value="mosotho">Mosotho</option>
                                     <option value="motswana">Motswana</option>
                                     <option value="mozambican">Mozambican</option>
                                     <option value="namibian">Namibian</option>
                                     <option value="nauruan">Nauruan</option>
                                     <option value="nepalese">Nepalese</option>
                                     <option value="new zealander">New Zealander</option>
                                     <option value="ni-vanuatu">Ni-Vanuatu</option>
                                     <option value="nicaraguan">Nicaraguan</option>
                                     <option value="nigerien">Nigerien</option>
                                     <option value="north korean">North Korean</option>
                                     <option value="northern irish">Northern Irish</option>
                                     <option value="norwegian">Norwegian</option>
                                     <option value="omani">Omani</option>
                                     <option value="pakistani">Pakistani</option>
                                     <option value="palauan">Palauan</option>
                                     <option value="panamanian">Panamanian</option>
                                     <option value="papua new guinean">Papua New Guinean</option>
                                     <option value="paraguayan">Paraguayan</option>
                                     <option value="peruvian">Peruvian</option>
                                     <option value="polish">Polish</option>
                                     <option value="portuguese">Portuguese</option>
                                     <option value="qatari">Qatari</option>
                                     <option value="romanian">Romanian</option>
                                     <option value="russian">Russian</option>
                                     <option value="rwandan">Rwandan</option>
                                     <option value="saint lucian">Saint Lucian</option>
                                     <option value="salvadoran">Salvadoran</option>
                                     <option value="samoan">Samoan</option>
                                     <option value="san marinese">San Marinese</option>
                                     <option value="sao tomean">Sao Tomean</option>
                                     <option value="saudi">Saudi</option>
                                     <option value="scottish">Scottish</option>
                                     <option value="senegalese">Senegalese</option>
                                     <option value="serbian">Serbian</option>
                                     <option value="seychellois">Seychellois</option>
                                     <option value="sierra leonean">Sierra Leonean</option>
                                     <option value="singaporean">Singaporean</option>
                                     <option value="slovakian">Slovakian</option>
                                     <option value="slovenian">Slovenian</option>
                                     <option value="solomon islander">Solomon Islander</option>
                                     <option value="somali">Somali</option>
                                     <option value="south african">South African</option>
                                     <option value="south korean">South Korean</option>
                                     <option value="spanish">Spanish</option>
                                     <option value="sri lankan">Sri Lankan</option>
                                     <option value="sudanese">Sudanese</option>
                                     <option value="surinamer">Surinamer</option>
                                     <option value="swazi">Swazi</option>
                                     <option value="swedish">Swedish</option>
                                     <option value="swiss">Swiss</option>
                                     <option value="syrian">Syrian</option>
                                     <option value="taiwanese">Taiwanese</option>
                                     <option value="tajik">Tajik</option>
                                     <option value="tanzanian">Tanzanian</option>
                                     <option value="thai">Thai</option>
                                     <option value="togolese">Togolese</option>
                                     <option value="tongan">Tongan</option>
                                     <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                     <option value="tunisian">Tunisian</option>
                                     <option value="turkish">Turkish</option>
                                     <option value="tuvaluan">Tuvaluan</option>
                                     <option value="ugandan">Ugandan</option>
                                     <option value="ukrainian">Ukrainian</option>
                                     <option value="uruguayan">Uruguayan</option>
                                     <option value="uzbekistani">Uzbekistani</option>
                                     <option value="venezuelan">Venezuelan</option>
                                     <option value="vietnamese">Vietnamese</option>
                                     <option value="welsh">Welsh</option>
                                     <option value="yemenite">Yemenite</option>
                                     <option value="zambian">Zambian</option>
                                     <option value="zimbabwean">Zimbabwean</option>
                                 </select>
                             </div>
                         </div>


                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">City</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="city" id="select" class="form-control">
                                        <option disabled="">Please select</option>
                                        <option value="Amman">Amman</option>
                                        <option value="zarqa">zarqa</option>
                                        <option value="Irbid">Irbid</option>
                                        <option value="Ramtha">Ramtha</option>
                                        <option value="Ajloun">Ajloun</option>
                                        <option value="Jerash">Jerash</option>
                                        <option value="Salt">Salt</option>
                                        <option value="Mafraq">Mafraq</option>
                                        <option value="Madaba">Madaba</option>
                                        <option value="Karak">Karak</option>
                                        <option value="Tafeelah">Tafeelah</option>
                                        <option value="Maan">Maan</option>
                                        <option value="Aqaba">Aqaba</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label  class=" form-control-label">Address</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="address" class="form-control">

                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label  class=" form-control-label">Mobile</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text"  name="mobile" class="form-control" required="">

                                </div>
                            </div>



                            <div class="card-footer">
                                <button name="submit"    type="submit" class="btn btn-primary  btn-lg">
                                    <i class="fa fa-dot-circle-o"></i> Save
                                </button>
                                <button type="reset" class="btn btn-danger btn-lg">
                                    <i class="fa fa-ban" ></i> Cancel
                                </button>
                            </div>
                        </form>
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
                    <th>NID</th>
                    <th>First Name</th>
                    <th>Seconed Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Nationality</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
               <?php
               $query        = "select * from citizen";
               $result       = mysqli_query($conn,$query);
               while($row    = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>{$row['c_id']}</td>";
                echo "<td>{$row['n_id']}</td>";
                echo "<td>{$row['first_name']}</td>";
                echo "<td>{$row['second_name']}</td>";
                echo "<td>{$row['middle_name']}</td>";
                echo "<td>{$row['last_name']}</td>";
                echo "<td>{$row['gender']}</td>";
                echo "<td>{$row['Nationality']}</td>";
                echo "<td>{$row['city']}</td>";
                echo "<td>{$row['address']}</td>";
                echo "<td>{$row['mobile']}</td>";
                echo "<td><a href='edit_citizen.php?id={$row['c_id']}'>Edit</a></td>";
                echo "<td><a href='delete_citizen.php?id={$row['c_id']}'>Delete</a></td>";
                echo "</tr>";
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

