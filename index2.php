<?php 
session_start();

// $client_url = $_SESSION['client_url'];
// $cu = $_SESSION['cu'];
// $_SESSION['ip'] = $_POST['ip'];
$_SESSION['visit_reason'] = $_POST['visit_reason'];
$_SESSION['self_harm'] = $_POST['self_harm'];
$_SESSION['symptoms'] = $_POST['symptoms'];
$_SESSION['symptoms_before'] = $_POST['symptoms_before'];
$_SESSION['medical_conditions'] = $_POST['medical_conditions'];
$_SESSION['medications'] = $_POST['medications'];
$_SESSION['has_allergies'] = $_POST['has_allergies'];
$_SESSION['allergies'] = $_POST['allergies'];
$_SESSION['has_insurance'] = $_POST['has_insurance'];
$_SESSION['insurance'] = $_POST['insurance'];
$_SESSION['had_surgeries'] = $_POST['had_surgeries'];
$_SESSION['surgeries'] = $_POST['surgeries'];
$_SESSION['fam_disease'] = $_POST['fam_disease'];
$_SESSION['fam_diseases'] = $_POST['fam_diseases'];
$_SESSION['use_tobacco'] = $_POST['use_tobacco'];
$_SESSION['tobacco_usage'] = $_POST['tobacco_usage'];
$_SESSION['drink_alcohol'] = $_POST['drink_alcohol'];
$_SESSION['alcohol_usage'] = $_POST['alcohol_usage'];
$_SESSION['spiritual_beliefs'] = $_POST['spiritual_beliefs'];
$_SESSION['what_spiritual_beliefs'] = $_POST['what_spiritual_beliefs'];
$_SESSION['pt_consent'] = $_POST['pt_consent'];
//$_SESSION['formurl'] = $_SERVER['HTTP_REFERER'];
$client_url = $_POST['client_url'];

require_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google Tag Manager -->

    

    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Patient Record 2</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="./assets/image/hcm.png">
</head>
<body style="background-color:#5343ff;">
<!-- Google Tag Manager (noscript) -->



<!-- End Google Tag Manager (noscript) -->
<div style="width:91.8%;">
    <?php
    include 'header2.php';
    ?>
    </div>
    <p style="font-size:42px;text-align:center;font-family:'Oswald',Helvetica,Arial,Lucida,sans-serif;margin-top:6px;color:#e9ebff;"><b>New Patient Record: Contact Info</b></p>
<div class="container box">
   <br />
    <form method="post" id="pt_form" action="submit.php">
    <div class="tab-content" style="margin-top:16px;">
     <div class="tab-pane active" id="fins_details">
      <div class="panel panel-default">
       <div class="panel-body">
       <table class="center">
        <tr>
           <td class="left">
                    <div class="form-group">
                    <label>First Name</label>
                    <input type="hidden" style="width:400px;"  name="client_url" value="<?php echo $_SESSION['cu']; ?>">
                    <input type="hidden" name="cu" value="<?php echo $_SESSION['cu']; ?>">
                    <input type="hidden" name="ip" value="<?php echo $_SESSION['ip']; ?>"></input>
                    <input type="hidden" name="visit_reason" value="<?php echo $_SESSION['visit_reason']; ?>"></input>
                    <input type="hidden" name="self_harm" value="<?php echo $_SESSION['self_harm']; ?>"></input>
                    <input type="hidden" name="symptoms" value="<?php echo $_SESSION['symptoms']; ?>"></input>
                    <input type="hidden" name="symptoms_before" value="<?php echo $_SESSION['symptoms_before']; ?>"></input>
                    <input type="hidden" name="medical_conditions" value="<?php echo $_SESSION['medical_conditions']; ?>"></input>
                    <input type="hidden" name="medications" value="<?php echo $_SESSION['medications']; ?>"></input>
                    <input type="hidden" name="has_allergies" value="<?php echo $_SESSION['has_allergies']; ?>"></input>
                    <input type="hidden" name="allergies" value="<?php echo $_SESSION['allergies']; ?>"></input>
                    <input type="hidden" name="has_insurance" value="<?php echo $_SESSION['has_insurance']; ?>"></input>
                    <input type="hidden" name="insurance" value="<?php echo $_SESSION['insurance']; ?>"></input>
                    <input type="hidden" name="" value="<?php echo $_SESSION['']; ?>"></input>
                    <input type="hidden" name="had_surgeries" value="<?php echo $_SESSION['had_surgeries']; ?>"></input>
                    <input type="hidden" name="surgeries" value="<?php echo $_SESSION['surgeries']; ?>"></input>
                    <input type="hidden" name="fam_disease" value="<?php echo $_SESSION['fam_disease']; ?>"></input>
                    <input type="hidden" name="fam_diseases" value="<?php echo $_SESSION['fam_diseases']; ?>"></input>
                    <input type="hidden" name="use_tobacco" value="<?php echo $_SESSION['use_tobacco']; ?>"></input>
                    <input type="hidden" name="tobacco_usage" value="<?php echo $_SESSION['tobacco_usage']; ?>"></input>
                    <input type="hidden" name="drink_alcohol" value="<?php echo $_SESSION['drink_alcohol']; ?>"></input>
                    <input type="hidden" name="alcohol_usage" value="<?php echo $_SESSION['alcohol_usage']; ?>"></input>
                    <input type="hidden" name="spiritual_beliefs" value="<?php echo $_SESSION["spiritual_beliefs"]; ?>"></input>
                    <input type="hidden" name="what_spiritual_beliefs" value="<?php echo $_SESSION["what_spiritual_beliefs"]; ?>"></input>
                    <input type="hidden" name="pt_consent" value="<?php echo $_SESSION["pt_consent"]; ?>"></input>
                    <input type="text" name="fname" id="fname" class="form-control" required/>
                    <span id="error_fname" class="text-danger"></span>
                    </div>
                </td>
              <td class="right">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" name="lname" id="lname" class="form-control" required/>
                    <span id="error_lname" class="text-danger"></span>
                    </div>
                </td>
                </tr>
                <tr>
                <td class="left">
                    <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="street_address" id="street_address" class="form-control" required/>
                    <span id="error_street_address" class="text-danger"></span>
                    </div>
                </td>
                <td class="right">
                    <div class="form-group">
                    <label>City</label>
                    <input type="text" name="home_city" id="home_city" class="form-control" required/>
                    <span id="error_home_city" class="text-danger"></span>
                    </div>
                </td>
                </tr>
                <tr>
                <td class="left">
                    <div class="form-group">
                        <label>State</label>
                        <select name="home_state" id="home_state" class="form-control" required>
                            <option value="">Select One</option>
                            <option value="Alabama">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkansas">Arkansas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="District of Columbia">District of Columbia</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Kansas">Kansas</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Louisiana">Louisiana</option>
                            <option value="Maine">Maine</option>
                            <option value="Maryland">Maryland</option>
                            <option value="Massachusetts">Massachusetts</option>
                            <option value="Michigan">Michigan</option>
                            <option value="Minnesota">Minnesota</option>
                            <option value="Mississippi">Mississippi</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="Nevada">Nevada</option>
                            <option value="New Hampshire">New Hampshire</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="New Mexico">New Mexico</option>
                            <option value="New York">New York</option>
                            <option value="North Carolina">North Carolina</option>
                            <option value="North Dakota">North Dakota</option>
                            <option value="Ohio">Ohio</option>
                            <option value="Oklahoma">Oklahoma</option>
                            <option value="Oregon">Oregon</option>
                            <option value="Pennsylvania">Pennsylvania</option>
                            <option value="Rhode Island">Rhode Island</option>
                            <option value="South Carolina">South Carolina</option>
                            <option value="South Dakota">South Dakota</option>
                            <option value="Tennessee">Tennessee</option>
                            <option value="Texas">Texas</option>
                            <option value="Utah">Utah</option>
                            <option value="Vermont">Vermont</option>
                            <option value="Virginia">Virginia</option>
                            <option value="Washington">Washington</option>
                            <option value="West Virginia">West Virginia</option>
                            <option value="Wisconsin">Wisconsin</option>
                            <option value="Wyoming">Wyoming</option>
                        </select>
                        <span id="error_home_state" class="text-danger"></span>
                    </div>
                </td>
                <td class="right">
                    <div class="form-group">
                    <label>Zip Code</label>
                    <input name="home_zip" id="home_zip" type="tel" minlength="5" maxlength="5" class="form-control" required/>
                    <span id="error_home_zip" class="text-danger"></span>
                    </div>
                </td>
                </tr>
                <tr>
                <td class="left">
                    <div class="form-group">
                    <label>Phone</label>
                    <input name="pt_phone" id="pt_phone" type="tel" minlength="10" maxlength="10" class="form-control" required/>
		            <span id="error_pt_phone" class="text-danger"></span>
                    </div>
                </td>
                <td class="right">
                    <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" name="email" id="email" class="form-control" required/>
                    <span id="error_email" class="text-danger"></span>
                    </div>
                </td>
                </tr>
                <tr>
                    <td class="left">
                        <div class="form-group">
                            <label for="pt_dob">DOB</label>
                            <input type="text" name="pt_dob" id="pt_dob" class="form-control" required />
                            <span id="error_pt_dob" class="text-danger"></span>
                        </div>
                    </td>
</tr>
        </table>
        <table class="center">
        <tr>
                <td>
                <div class="form-group">
                <label> Patient Notes</label>
                <textarea name="pt_notes" id="pt_notes" class="form-control" rows="6" cols="10"></textarea>
                <span id="error_pt_notes" class="text-danger"></span>
                </div>
                </td>
                </tr>
</table>

        <div align="right">
      <input type='submit' name='save' id='btn_personal_details' style="background-color:rgb(50,50,200);color:#fff;font-size:1.5em;padding:10px;" value="Submit">
    </div>
     </div>
      </div>
       </div>
    </form>
</div>
</body>
<script type="text/javascript">  
  $('.pt_phone').keypress(function(e) {  
      var arr = [];  
      var kk = e.which;  
     
      for (i = 48; i < 58; i++)  
          arr.push(i);  
     
      if (!(arr.indexOf(kk)>=0))  
          e.preventDefault();  
  });  
</script> 
 <script src="assets/js/script.js"></script>
</html>
