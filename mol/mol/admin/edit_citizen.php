<?php
// we will make CRUD(Create,Read,Update,Delete)/*die->Mean stop execution the code Or Exit */
// lets start with Create 
 //open connection 
 include('includes/connection.php');

if(isset($_POST['submit'])){
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
    $query = "update citizen set n_id='$n_id',
                         citizen_password  = '$citizen_password',
                               first_name  = '$first_name',
                               second_name = '$second_name',
                               middle_name = '$middle_name',
                               last_name   = '$last_name',
                               gender      = '$gender',
                               Nationality = '$Nationality',
                               city        = '$city',
                               address     = '$address',
                               mobile      = '$mobile'
              where c_id = {$_GET['id']}";
//echo $query;die;
    mysqli_query($conn,$query);


    // redirect
    header("location:manage_citizen.php");
}


// fetch Old Data
$query  = "select * from citizen where c_id  = {$_GET['id']}";
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
                        <div class="card-header">
                            <strong>Edit Citizen</strong> 
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-title">
                                            <h3 class="text-center title-2">Edit Citizen</h3>
                                        </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">National/Personal ID</label>
                                    </div>
                                    <div class="col-12 col-md-9">
 <input type="number"  name="n_id" placeholder="Enter 10 digit" pattern="[0-9]{10}" class="form-control" onkeydown="javascript: return event.keyCode == 69 ? false : true" required="" disabled="" value="<?php echo $row['n_id'] ?>"  >
                                        
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Citizen Password</label>
                                    </div>
                                    <div class="col-12 col-md-9">
            <input type="password"  name="citizen_password" class="form-control" value="<?php echo $row['citizen_password'] ?>" required="">
                                        
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">First Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                <input type="text"  name="first_name"  class="form-control" value="<?php echo $row['first_name'] ?>" required="">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Seconed Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                <input type="text"  name="second_name" class="form-control" value="<?php echo $row['second_name'] ?>" required="">
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Middle Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                <input type="text"  name="middle_name" class="form-control" value="<?php echo $row['middle_name'] ?>" required="">
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">last Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                <input type="text"  name="last_name" class="form-control" value="<?php echo $row['last_name'] ?>" required="">
                                        
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
                <input type="radio"  name="gender"  class="form-check-input" value="Male" <?php if($row['gender'] == 'Male'){echo "checked";} ?>>Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio2" class="form-check-label ">
                <input type="radio"  name="gender"   class="form-check-input" value="Female" <?php if($row['gender'] == 'Female'){echo "checked";} ?>>Female
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
                                     <option disabled="">-- select one --</option>
                                     <option value="jordanian" <?php if($row['Nationality'] == 'jordanian'){echo "selected";} ?>>Jordanian</option>        
                                     <option value="afghan" <?php if($row['Nationality'] == 'afghan'){echo "selected";} ?>>Afghan</option>
                                     <option value="albanian" <?php if($row['Nationality'] == 'albanian'){echo "selected";} ?>>Albanian</option>
                                     <option value="algerian" <?php if($row['Nationality'] == 'algerian'){echo "selected";} ?>>Algerian</option>
                                     <option value="american" <?php if($row['Nationality'] == 'american'){echo "selected";} ?>>American</option>
                                     <option value="andorran" <?php if($row['Nationality'] == 'andorran'){echo "selected";} ?>>Andorran</option>
                                     <option value="angolan" <?php if($row['Nationality'] == 'angolan'){echo "selected";} ?>>Angolan</option>
                                     <option value="antiguans" <?php if($row['Nationality'] == 'antiguans'){echo "selected";} ?>>Antiguans</option>
                                     <option value="argentinean" <?php if($row['Nationality'] == 'argentinean'){echo "selected";} ?>>Argentinean</option>
                                     <option value="armenian" <?php if($row['Nationality'] == 'armenian'){echo "selected";} ?>>Armenian</option>
                                     <option value="australian" <?php if($row['Nationality'] == 'australian'){echo "selected";} ?>>Australian</option>
                                     <option value="austrian" <?php if($row['Nationality'] == 'austrian'){echo "selected";} ?>>Austrian</option>
                                     <option value="azerbaijani" <?php if($row['Nationality'] == 'azerbaijani'){echo "selected";} ?>>Azerbaijani</option>
                                     <option value="bahamian" <?php if($row['Nationality'] == 'bahamian'){echo "selected";} ?>>Bahamian</option>
                                     <option value="bahraini" <?php if($row['Nationality'] == 'bahraini'){echo "selected";} ?>>Bahraini</option>
                                     <option value="bangladeshi" <?php if($row['Nationality'] == 'bangladeshi'){echo "selected";} ?>>Bangladeshi</option>
                                     <option value="barbadian" <?php if($row['Nationality'] == 'barbadian'){echo "selected";} ?>>Barbadian</option>
                                     <option value="barbudans" <?php if($row['Nationality'] == 'barbudans'){echo "selected";} ?>>Barbudans</option>
                                     <option value="batswana" <?php if($row['Nationality'] == 'batswana'){echo "selected";} ?>>Batswana</option>
                                     <option value="belarusian" <?php if($row['Nationality'] == 'belarusian'){echo "selected";} ?>>Belarusian</option>
                                     <option value="belgian" <?php if($row['Nationality'] == 'belgian'){echo "selected";} ?>>Belgian</option>
                                     <option value="belizean" <?php if($row['Nationality'] == 'belizean'){echo "selected";} ?>>Belizean</option>
                                     <option value="beninese" <?php if($row['Nationality'] == 'beninese'){echo "selected";} ?>>Beninese</option>
                                     <option value="bhutanese" <?php if($row['Nationality'] == 'bhutanese'){echo "selected";} ?>>Bhutanese</option>
                                     <option value="bolivian" <?php if($row['Nationality'] == 'bolivian'){echo "selected";} ?>>Bolivian</option>
                                     <option value="bosnian" <?php if($row['Nationality'] == 'bosnian'){echo "selected";} ?>>Bosnian</option>
                                     <option value="brazilian" <?php if($row['Nationality'] == 'brazilian'){echo "selected";} ?>>Brazilian</option>
                                     <option value="british" <?php if($row['Nationality'] == 'british'){echo "selected";} ?>>British</option>
                                     <option value="bruneian" <?php if($row['Nationality'] == 'bruneian'){echo "selected";} ?>>Bruneian</option>
                                     <option value="bulgarian" <?php if($row['Nationality'] == 'bulgarian'){echo "selected";} ?>>Bulgarian</option>
                                     <option value="burkinabe" <?php if($row['Nationality'] == 'burkinabe'){echo "selected";} ?>>Burkinabe</option>
                                     <option value="burmese" <?php if($row['Nationality'] == 'burmese'){echo "selected";} ?>>Burmese</option>
                                     <option value="burundian" <?php if($row['Nationality'] == 'burundian'){echo "selected";} ?>>Burundian</option>
                                     <option value="cambodian" <?php if($row['Nationality'] == 'cambodian'){echo "selected";} ?>>Cambodian</option>
                                     <option value="cameroonian" <?php if($row['Nationality'] == 'cameroonian'){echo "selected";} ?>>Cameroonian</option>
                                     <option value="canadian" <?php if($row['Nationality'] == 'canadian'){echo "selected";} ?>>Canadian</option>
                                     <option value="cape verdean" <?php if($row['Nationality'] == 'cape verdean'){echo "selected";} ?>>Cape Verdean</option>
                                <option value="central african" <?php if($row['Nationality'] == 'central african'){echo "selected";} ?>>Central African</option>
                                     <option value="chadian" <?php if($row['Nationality'] == 'chadian'){echo "selected";} ?>>Chadian</option>
                                     <option value="chilean" <?php if($row['Nationality'] == 'chilean'){echo "selected";} ?>>Chilean</option>
                                     <option value="chinese" <?php if($row['Nationality'] == 'chinese'){echo "selected";} ?>>Chinese</option>
                                     <option value="colombian" <?php if($row['Nationality'] == 'colombian'){echo "selected";} ?>>Colombian</option>
                                     <option value="comoran" <?php if($row['Nationality'] == 'comoran'){echo "selected";} ?>>Comoran</option>
                                     <option value="congolese" <?php if($row['Nationality'] == 'congolese'){echo "selected";} ?>>Congolese</option>
                                     <option value="costa rican" <?php if($row['Nationality'] == 'costa rican'){echo "selected";} ?>>Costa Rican</option>
                                     <option value="croatian" <?php if($row['Nationality'] == 'croatian'){echo "selected";} ?>>Croatian</option>
                                     <option value="cuban" <?php if($row['Nationality'] == 'cuban'){echo "selected";} ?>>Cuban</option>
                                     <option value="cypriot" <?php if($row['Nationality'] == 'cypriot'){echo "selected";} ?>>Cypriot</option>
                                     <option value="czech" <?php if($row['Nationality'] == 'czech'){echo "selected";} ?>>Czech</option>
                                     <option value="danish" <?php if($row['Nationality'] == 'danish'){echo "selected";} ?>>Danish</option>
                                     <option value="djibouti" <?php if($row['Nationality'] == 'djibouti'){echo "selected";} ?>>Djibouti</option>
                                     <option value="dominican" <?php if($row['Nationality'] == 'dominican'){echo "selected";} ?>>Dominican</option>
                                     <option value="dutch" <?php if($row['Nationality'] == 'dutch'){echo "selected";} ?>>Dutch</option>
                                     <option value="east timorese" <?php if($row['Nationality'] == 'east timorese'){echo "selected";} ?>>East Timorese</option>
                                     <option value="ecuadorean" <?php if($row['Nationality'] == 'ecuadorean'){echo "selected";} ?>>Ecuadorean</option>
                                     <option value="egyptian" <?php if($row['Nationality'] == 'egyptian'){echo "selected";} ?>>Egyptian</option>
                                     <option value="emirian" <?php if($row['Nationality'] == 'emirian'){echo "selected";} ?>>Emirian</option>
                  <option value="equatorial guinean" <?php if($row['Nationality'] == 'equatorial guinean'){echo "selected";} ?>>Equatorial Guinean</option>
                                     <option value="eritrean" <?php if($row['Nationality'] == 'eritrean'){echo "selected";} ?>>Eritrean</option>
                                     <option value="estonian" <?php if($row['Nationality'] == 'estonian'){echo "selected";} ?>>Estonian</option>
                                     <option value="ethiopian" <?php if($row['Nationality'] == 'ethiopian'){echo "selected";} ?>>Ethiopian</option>
                                     <option value="fijian" <?php if($row['Nationality'] == 'fijian'){echo "selected";} ?>>Fijian</option>
                                     <option value="filipino" <?php if($row['Nationality'] == 'filipino'){echo "selected";} ?>>Filipino</option>
                                     <option value="finnish" <?php if($row['Nationality'] == 'finnish'){echo "selected";} ?>>Finnish</option>
                                     <option value="french" <?php if($row['Nationality'] == 'french'){echo "selected";} ?>>French</option>
                                     <option value="gabonese" <?php if($row['Nationality'] == 'gabonese'){echo "selected";} ?>>Gabonese</option>
                                     <option value="gambian" <?php if($row['Nationality'] == 'gambian'){echo "selected";} ?>>Gambian</option>
                                     <option value="georgian" <?php if($row['Nationality'] == 'georgian'){echo "selected";} ?>>Georgian</option>
                                     <option value="german" <?php if($row['Nationality'] == 'german'){echo "selected";} ?>>German</option>
                                     <option value="ghanaian" <?php if($row['Nationality'] == 'ghanaian'){echo "selected";} ?>>Ghanaian</option>
                                     <option value="greek" <?php if($row['Nationality'] == 'greek'){echo "selected";} ?>>Greek</option>
                                     <option value="grenadian" <?php if($row['Nationality'] == 'grenadian'){echo "selected";} ?>>Grenadian</option>
                                     <option value="guatemalan" <?php if($row['Nationality'] == 'guatemalan'){echo "selected";} ?>>Guatemalan</option>
                            <option value="guinea-bissauan" <?php if($row['Nationality'] == 'guinea-bissauan'){echo "selected";} ?>>Guinea-Bissauan</option>
                                     <option value="guinean" <?php if($row['Nationality'] == 'guinean'){echo "selected";} ?>>Guinean</option>
                                     <option value="guyanese" <?php if($row['Nationality'] == 'guyanese'){echo "selected";} ?>>Guyanese</option>
                                     <option value="haitian" <?php if($row['Nationality'] == 'haitian'){echo "selected";} ?>>Haitian</option>
                                     <option value="herzegovinian" <?php if($row['Nationality'] == 'herzegovinian'){echo "selected";} ?>>Herzegovinian</option>
                                     <option value="honduran" <?php if($row['Nationality'] == 'honduran'){echo "selected";} ?>>Honduran</option>
                                     <option value="hungarian" <?php if($row['Nationality'] == 'hungarian'){echo "selected";} ?>>Hungarian</option>
                                     <option value="icelander" <?php if($row['Nationality'] == 'icelander'){echo "selected";} ?>>Icelander</option>
                                     <option value="indian" <?php if($row['Nationality'] == 'indian'){echo "selected";} ?>>Indian</option>
                                     <option value="indonesian" <?php if($row['Nationality'] == 'indonesian'){echo "selected";} ?>>Indonesian</option>
                                     <option value="iranian" <?php if($row['Nationality'] == 'iranian'){echo "selected";} ?>>Iranian</option>
                                     <option value="iraqi" <?php if($row['Nationality'] == 'iraqi'){echo "selected";} ?>>Iraqi</option>
                                     <option value="irish" <?php if($row['Nationality'] == 'irish'){echo "selected";} ?>>Irish</option>
                                     <option value="israeli" <?php if($row['Nationality'] == 'israeli'){echo "selected";} ?>>Israeli</option>
                                     <option value="italian" <?php if($row['Nationality'] == 'italian'){echo "selected";} ?>>Italian</option>
                                     <option value="ivorian" <?php if($row['Nationality'] == 'ivorian'){echo "selected";} ?>>Ivorian</option>
                                     <option value="jamaican" <?php if($row['Nationality'] == 'jamaican'){echo "selected";} ?>>Jamaican</option>
                                     <option value="japanese" <?php if($row['Nationality'] == 'japanese'){echo "selected";} ?>>Japanese</option>
                                     <option value="kazakhstani" <?php if($row['Nationality'] == 'kazakhstani'){echo "selected";} ?>>Kazakhstani</option>
                                     <option value="kenyan" <?php if($row['Nationality'] == 'kenyan'){echo "selected";} ?> >Kenyan</option>
                <option value="kittian and nevisian" <?php if($row['Nationality'] == 'kittian and nevisian'){echo "selected";} ?>>Kittian and Nevisian</option>
                                     <option value="kuwaiti" <?php if($row['Nationality'] == 'kuwaiti'){echo "selected";} ?>>Kuwaiti</option>
                                     <option value="kyrgyz" <?php if($row['Nationality'] == 'kyrgyz'){echo "selected";} ?>>Kyrgyz</option>
                                     <option value="laotian" <?php if($row['Nationality'] == 'laotian'){echo "selected";} ?>>Laotian</option>
                                     <option value="latvian" <?php if($row['Nationality'] == 'latvian'){echo "selected";} ?>>Latvian</option>
                                     <option value="lebanese" <?php if($row['Nationality'] == 'lebanese'){echo "selected";} ?>>Lebanese</option>
                                     <option value="liberian" <?php if($row['Nationality'] == 'liberian'){echo "selected";} ?>>Liberian</option>
                                     <option value="libyan" <?php if($row['Nationality'] == 'libyan'){echo "selected";} ?>>Libyan</option>
                    <option value="liechtensteiner" <?php if($row['Nationality'] == 'liechtensteiner'){echo "selected";} ?>>Liechtensteiner</option>
                                     <option value="lithuanian" <?php if($row['Nationality'] == 'lithuanian'){echo "selected";} ?>>Lithuanian</option>
                                     <option value="luxembourger" <?php if($row['Nationality'] == 'luxembourger'){echo "selected";} ?>>Luxembourger</option>
                                     <option value="macedonian" <?php if($row['Nationality'] == 'macedonian'){echo "selected";} ?>>Macedonian</option>
                                     <option value="malagasy" <?php if($row['Nationality'] == 'malagasy'){echo "selected";} ?>>Malagasy</option>
                                     <option value="malawian" <?php if($row['Nationality'] == 'malawian'){echo "selected";} ?>>Malawian</option>
                                     <option value="malaysian" <?php if($row['Nationality'] == 'malaysian'){echo "selected";} ?>>Malaysian</option>
                                     <option value="maldivan" <?php if($row['Nationality'] == 'maldivan'){echo "selected";} ?>>Maldivan</option>
                                     <option value="malian" <?php if($row['Nationality'] == 'malian'){echo "selected";} ?>>Malian</option>
                                     <option value="maltese" <?php if($row['Nationality'] == 'maltese'){echo "selected";} ?>>Maltese</option>
                                     <option value="marshallese" <?php if($row['Nationality'] == 'marshallese'){echo "selected";} ?>>Marshallese</option>
                                     <option value="mauritanian" <?php if($row['Nationality'] == 'mauritanian'){echo "selected";} ?>>Mauritanian</option>
                                     <option value="mauritian" <?php if($row['Nationality'] == 'mauritian'){echo "selected";} ?>>Mauritian</option>
                                     <option value="mexican" <?php if($row['Nationality'] == 'mexican'){echo "selected";} ?>>Mexican</option>
                                     <option value="micronesian" <?php if($row['Nationality'] == 'micronesian'){echo "selected";} ?>>Micronesian</option>
                                     <option value="moldovan" <?php if($row['Nationality'] == 'moldovan'){echo "selected";} ?>>Moldovan</option>
                                     <option value="monacan" <?php if($row['Nationality'] == 'monacan'){echo "selected";} ?>>Monacan</option>
                                     <option value="mongolian" <?php if($row['Nationality'] == 'mongolian'){echo "selected";} ?>>Mongolian</option>
                                     <option value="moroccan" <?php if($row['Nationality'] == 'moroccan'){echo "selected";} ?>>Moroccan</option>
                                     <option value="mosotho" <?php if($row['Nationality'] == 'mosotho'){echo "selected";} ?>>Mosotho</option>
                                     <option value="motswana" <?php if($row['Nationality'] == 'motswana'){echo "selected";} ?>>Motswana</option>
                                     <option value="mozambican" <?php if($row['Nationality'] == 'mozambican'){echo "selected";} ?>>Mozambican</option>
                                     <option value="namibian" <?php if($row['Nationality'] == 'namibian'){echo "selected";} ?>>Namibian</option>
                                     <option value="nauruan" <?php if($row['Nationality'] == 'nauruan'){echo "selected";} ?>>Nauruan</option>
                                     <option value="nepalese" <?php if($row['Nationality'] == 'nepalese'){echo "selected";} ?>>Nepalese</option>
                                     <option value="new zealander"<?php if($row['Nationality'] == 'new zealander'){echo "selected";} ?>>New Zealander</option>
                                     <option value="ni-vanuatu" <?php if($row['Nationality'] == 'ni-vanuatu'){echo "selected";} ?>>Ni-Vanuatu</option>
                                     <option value="nicaraguan" <?php if($row['Nationality'] == 'nicaraguan'){echo "selected";} ?>>Nicaraguan</option>
                                     <option value="nigerien" <?php if($row['Nationality'] == 'nigerien'){echo "selected";} ?>>Nigerien</option>
                                     <option value="north korean" <?php if($row['Nationality'] == 'north korean'){echo "selected";} ?>>North Korean</option>
                            <option value="northern irish" <?php if($row['Nationality'] == 'northern irish'){echo "selected";} ?>>Northern Irish</option>
                                     <option value="norwegian" <?php if($row['Nationality'] == 'norwegian'){echo "selected";} ?>>Norwegian</option>
                                     <option value="omani" <?php if($row['Nationality'] == 'omani'){echo "selected";} ?>>Omani</option>
                                     <option value="pakistani" <?php if($row['Nationality'] == 'pakistani'){echo "selected";} ?>>Pakistani</option>
                                     <option value="palauan" <?php if($row['Nationality'] == 'palauan'){echo "selected";} ?>>Palauan</option>
                                     <option value="panamanian" <?php if($row['Nationality'] == 'panamanian'){echo "selected";} ?>>Panamanian</option>
                    <option value="papua new guinean" <?php if($row['Nationality'] == 'papua new guinean'){echo "selected";} ?>>Papua New Guinean</option>
                                     <option value="paraguayan" <?php if($row['Nationality'] == 'paraguayan'){echo "selected";} ?>>Paraguayan</option>
                                     <option value="peruvian" <?php if($row['Nationality'] == 'peruvian'){echo "selected";} ?>>Peruvian</option>
                                     <option value="polish" <?php if($row['Nationality'] == 'polish'){echo "selected";} ?>>Polish</option>
                                     <option value="portuguese" <?php if($row['Nationality'] == 'portuguese'){echo "selected";} ?>>Portuguese</option>
                                     <option value="qatari" <?php if($row['Nationality'] == 'qatari'){echo "selected";} ?>>Qatari</option>
                                     <option value="romanian" <?php if($row['Nationality'] == 'romanian'){echo "selected";} ?>>Romanian</option>
                                     <option value="russian" <?php if($row['Nationality'] == 'russian'){echo "selected";} ?>>Russian</option>
                                     <option value="rwandan" <?php if($row['Nationality'] == 'rwandan'){echo "selected";} ?>>Rwandan</option>
                                     <option value="saint lucian" <?php if($row['Nationality'] == 'saint lucian'){echo "selected";} ?>>Saint Lucian</option>
                                     <option value="salvadoran" <?php if($row['Nationality'] == 'salvadoran'){echo "selected";} ?>>Salvadoran</option>
                                     <option value="samoan" <?php if($row['Nationality'] == 'samoan'){echo "selected";} ?>>Samoan</option>
                                     <option value="san marinese" <?php if($row['Nationality'] == 'san marinese'){echo "selected";} ?>>San Marinese</option>
                                     <option value="sao tomean" <?php if($row['Nationality'] == 'sao tomean'){echo "selected";} ?>>Sao Tomean</option>
                                     <option value="saudi" <?php if($row['Nationality'] == 'saudi'){echo "selected";} ?>>Saudi</option>
                                     <option value="scottish" <?php if($row['Nationality'] == 'scottish'){echo "selected";} ?>>Scottish</option>
                                     <option value="senegalese" <?php if($row['Nationality'] == 'senegalese'){echo "selected";} ?>>Senegalese</option>
                                     <option value="serbian" <?php if($row['Nationality'] == 'serbian'){echo "selected";} ?>>Serbian</option>
                                     <option value="seychellois" <?php if($row['Nationality'] == 'seychellois'){echo "selected";} ?>>Seychellois</option>
                            <option value="sierra leonean" <?php if($row['Nationality'] == 'sierra leonean'){echo "selected";} ?>>Sierra Leonean</option>
                                     <option value="singaporean" <?php if($row['Nationality'] == 'singaporean'){echo "selected";} ?>>Singaporean</option>
                                     <option value="slovakian" <?php if($row['Nationality'] == 'slovakian'){echo "selected";} ?>>Slovakian</option>
                                     <option value="slovenian" <?php if($row['Nationality'] == 'slovenian'){echo "selected";} ?>>Slovenian</option>
                            <option value="solomon islander" <?php if($row['Nationality'] == 'solomon islander'){echo "selected";} ?>>Solomon Islander</option>
                                     <option value="somali" <?php if($row['Nationality'] == 'somali'){echo "selected";} ?>>Somali</option>
                                     <option value="south african" <?php if($row['Nationality'] == 'outh african'){echo "selected";} ?>>South African</option>
                                     <option value="south korean" <?php if($row['Nationality'] == 'south korean'){echo "selected";} ?>>South Korean</option>
                                     <option value="spanish" <?php if($row['Nationality'] == 'spanish'){echo "selected";} ?>>Spanish</option>
                                     <option value="sri lankan" <?php if($row['Nationality'] == 'sri lankan'){echo "selected";} ?>>Sri Lankan</option>
                                     <option value="sudanese" <?php if($row['Nationality'] == 'sudanese'){echo "selected";} ?>>Sudanese</option>
                                     <option value="surinamer" <?php if($row['Nationality'] == 'surinamer'){echo "selected";} ?>>Surinamer</option>
                                     <option value="swazi" <?php if($row['Nationality'] == 'swazi'){echo "selected";} ?>>Swazi</option>
                                     <option value="swedish" <?php if($row['Nationality'] == 'swedish'){echo "selected";} ?>>Swedish</option>
                                     <option value="swiss" <?php if($row['Nationality'] == 'swiss'){echo "selected";} ?>>Swiss</option>
                                     <option value="syrian" <?php if($row['Nationality'] == 'syrian'){echo "selected";} ?>>Syrian</option>
                                     <option value="taiwanese" <?php if($row['Nationality'] == 'taiwanese'){echo "selected";} ?>>Taiwanese</option>
                                     <option value="tajik" <?php if($row['Nationality'] == 'tajik'){echo "selected";} ?>>Tajik</option>
                                     <option value="tanzanian" <?php if($row['Nationality'] == 'tanzanian'){echo "selected";} ?>>Tanzanian</option>
                                     <option value="thai" <?php if($row['Nationality'] == 'thai'){echo "selected";} ?>>Thai</option>
                                     <option value="togolese" <?php if($row['Nationality'] == 'togolese'){echo "selected";} ?>>Togolese</option>
                                     <option value="tongan" <?php if($row['Nationality'] == 'tongan'){echo "selected";} ?>>Tongan</option>
<option value="trinidadian or tobagonian" <?php if($row['Nationality'] == 'trinidadian or tobagonian'){echo "selected";} ?>>Trinidadian or Tobagonian</option>
                                     <option value="tunisian" <?php if($row['Nationality'] == 'tunisian'){echo "selected";} ?>>Tunisian</option>
                                     <option value="turkish" <?php if($row['Nationality'] == 'turkish'){echo "selected";} ?>>Turkish</option>
                                     <option value="tuvaluan" <?php if($row['Nationality'] == 'tuvaluan'){echo "selected";} ?>>Tuvaluan</option>
                                     <option value="ugandan" <?php if($row['Nationality'] == 'ugandan'){echo "selected";} ?>>Ugandan</option>
                                     <option value="ukrainian" <?php if($row['Nationality'] == 'ukrainian'){echo "selected";} ?>>Ukrainian</option>
                                     <option value="uruguayan" <?php if($row['Nationality'] == 'uruguayan'){echo "selected";} ?>>Uruguayan</option>
                                     <option value="uzbekistani" <?php if($row['Nationality'] == 'uzbekistani'){echo "selected";} ?>>Uzbekistani</option>
                                     <option value="venezuelan" <?php if($row['Nationality'] == 'venezuelan'){echo "selected";} ?>>Venezuelan</option>
                                     <option value="vietnamese" <?php if($row['Nationality'] == 'vietnamese'){echo "selected";} ?>>Vietnamese</option>
                                     <option value="welsh" <?php if($row['Nationality'] == 'welsh'){echo "selected";} ?>>Welsh</option>
                                     <option value="yemenite" <?php if($row['Nationality'] == 'yemenite'){echo "selected";} ?>>Yemenite</option>
                                     <option value="zambian" <?php if($row['Nationality'] == 'zambian'){echo "selected";} ?>>Zambian</option>
                                     <option value="zimbabwean" <?php if($row['Nationality'] == 'zimbabwean'){echo "selected";} ?>>Zimbabwean</option>
                                 </select>
                             </div>
                         </div>



                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">City</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                <select name="city" id="select" class="form-control" value="<?php echo $row['city'] ?>" required="" >
                                        <option disabled="">Please select</option>
                                            <option value="Amman" <?php if($row['city'] == 'Amman'){echo "selected";} ?>>Amman</option>
                                            <option value="zarqa"<?php if($row['city'] == 'zarqa'){echo "selected";} ?>>zarqa</option>
                                            <option value="Irbid"<?php if($row['city'] == 'Irbid'){echo "selected";} ?>>Irbid</option>
                                            <option value="Ramtha"<?php if($row['city'] == 'Ramtha'){echo "selected";} ?>>Ramtha</option>
                                            <option value="Ajloun"<?php if($row['city'] == 'Ajloun'){echo "selected";} ?>>Ajloun</option>
                                            <option value="Jerash"<?php if($row['city'] == 'Jerash'){echo "selected";} ?>>Jerash</option>
                                            <option value="Salt"<?php if($row['city'] == 'Salt'){echo "selected";} ?>>Salt</option>
                                            <option value="Mafraq"<?php if($row['city'] == 'Mafraq'){echo "selected";} ?>>Mafraq</option>
                                            <option value="Madaba"<?php if($row['city'] == 'Madaba'){echo "selected";} ?>>Madaba</option>
                                            <option value="Karak"<?php if($row['city'] == 'Karak'){echo "selected";} ?>>Karak</option>
                                            <option value="Tafeelah"<?php if($row['city'] == 'Tafeelah'){echo "selected";} ?>>Tafeelah</option>
                                            <option value="Maan"<?php if($row['city'] == 'Maan'){echo "selected";} ?>>Maan</option>
                                            <option value="Aqaba"<?php if($row['city'] == 'Aqaba'){echo "selected";} ?>>Aqaba</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Address</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                <input type="text"  name="address" class="form-control" value="<?php echo $row['address'] ?>">
                                        
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label  class=" form-control-label">Mobile</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                <input type="text"  name="mobile" class="form-control" required="" value="<?php echo $row['mobile'] ?>">
                                        
                                    </div>
                                </div>
                                <div class="card-footer">
                            <button name="submit"    type="submit" class="btn btn-primary  btn-lg">
                                <i class="fa fa-dot-circle-o"></i> Update
                            </button>
                            <button type="reset" name="reset" onclick="window.location='manage_citizen.php';return false;" class="btn btn-danger btn-lg">
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
<?php include('includes/admin_footer.php');?>

