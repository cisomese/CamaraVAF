<?php 
session_start();
include "../assets/connection/connect.php";
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/formStyle.css" />
    <title>Volunteer Application Form</title>
  </head>

  <body>
    <div class="container">
      <form data-multi-step class="form" action="#" method="post">
        <div data-step class="card" id="personal-info">
          <div class="h3-headers">
            <h3>Personal information</h3>
          </div>
          <div class="personal-info-inp">
            <input
              class="inp1"
              name="fullName"
              type="text"
              placeholder="Full name"
              required
            />
            <input
              class="inp1"
              name="city"
              type="text"
              placeholder="City"
              required
            />
            <input
              class="inp1"
              name="subCity"
              type="text"
              placeholder="Subcity"
            />
            <input
              class="inp1"
              name="woreda"
              type="text"
              placeholder="Woreda"
            />
            <input
              class="inp1"
              name="phone"
              type="text"
              placeholder="Phone"
              required
            />
            <input
              class="inp1"
              name="email"
              type="text"
              placeholder="Email"
              required
            />
            <input
              class="inp1"
              type="text"
              name="educatonalInstitution"
              placeholder="Educatonal Institution"
              required
            />
            <input
              class="inp1"
              name="department"
              type="text"
              placeholder="Department"
              required
            />
            <input
              class="inp1"
              name="level_year"
              type="text"
              placeholder="Level & Year"
              required
            />
            <br />
            <br />
          </div>
          <div class="gender-age">
            <label for="gender">Gender</label>

            <select name="gender" id="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>

            <label for="age">&emsp;Age</label>

            <select name="age" id="age">
              <option value="17-20">17-20</option>
              <option value="21-30">21-30</option>
              <option value="31+">31+</option>
            </select>
          </div>
          <div class="btn-box">
            <button type="button" data-next id="Next1">Next</button>
          </div>
        </div>

        <div data-step class="card" id="emergency-cont">
          <div class="h3-headers">
            <h3>Emergency Contact</h3>
          </div>
          <div class="emergency-cont-inp">
            <input
              class="inp1"
              name="emer_Fname"
              type="text"
              placeholder="Full Name"
              required
            />
            <input
              class="inp1"
              name="emer_Rship"
              type="text"
              placeholder="Relationship"
              required
            />
            <input
              class="inp1"
              name="emer_city"
              type="text"
              placeholder="City"
              required
            />
            <input
              class="inp1"
              name="emer_subcity"
              type="text"
              placeholder="Subcity"
            />
            <input
              class="inp1"
              name="emer_Woreda"
              type="text"
              placeholder="Woreda"
            />
            <input
              class="inp1"
              name="emer_phone"
              type="text"
              placeholder="phone no"
              required
            />
            <input
              class="inp1"
              name="emer_email"
              type="city"
              placeholder="Email"
            />
          </div>
          <div class="btn-box">
            <button type="button" data-back id="Back1">Back</button>
            <button type="button" data-next id="Next2">Next</button>
          </div>
        </div>

        <div data-step class="card" id="refernce-person">
          <div class="h3-headers">
            <h3>Reference Person</h3>
          </div>
          <div class="h4-text">
            <h4>
              Please list reference, past or present employer, teacher,
              volunteer supervisor... <br />
              We CANNOT accept family members or personal friends as references.
            </h4>
          </div>
          <div class="refernce-person-inp">
            <input
              class="inp1"
              name="ref_fullName"
              type="text"
              placeholder="full name"
              required
            />
            <input
              class="inp1"
              name="ref_relation"
              type="text"
              placeholder="relationship"
              required
            />
            <input
              class="inp1"
              name="ref_phone"
              type="text"
              placeholder="phone no"
              required
            />
            <br />
            <br />
          </div>
          <div class="specific-skill">
            <div class="h3-headers">
              <h3>Specific Skills</h3>
            </div>
            <div class="skills-check">
              <label for="select1">Hardware and Maintenance</label>

              <select name="hw_maintain" id="select1">
                <option value="No">No</option>
                <option value="Good">Good</option>
                <option value="Very Good">Very Good</option>
                <option value="Excellent">Excellent</option>
              </select>

              <label for="select2">Ubuntu Operating Systems</label>

              <select name="ubuntu_os" id="select2">
                <option value="No">No</option>
                <option value="Good">Good</option>
                <option value="Very Good">Very Good</option>
                <option value="Excellent">Excellent</option>
              </select>

              <label for="select3">Networking</label>

              <select name="networking" id="select3">
                <option value="No">No</option>
                <option value="Good">Good</option>
                <option value="Very Good">Very Good</option>
                <option value="Excellent">Excellent</option>
              </select>

              <label for="select4">Lab set up / Vetting</label>

              <select name="labSetup" id="select4">
                <option value="No">No</option>
                <option value="Good">Good</option>
                <option value="Very Good">Very Good</option>
                <option value="Excellent">Excellent</option>
              </select>

              <label for="select5">Database</label>

              <select name="database" id="select5">
                <option value="No">No</option>
                <option value="Good">Good</option>
                <option value="Very Good">Very Good</option>
                <option value="Excellent">Excellent</option>
              </select>
            </div>
          </div>
          <div class="btn-box">
            <button type="button" data-back id="Back2">Back</button>
            <button type="button" data-next id="Next3">Next</button>
          </div>
        </div>

        <div data-step class="card" class="reasons-fr-vol">
          <div class="h3-headers">
            <h3>Reasons For Volunteering</h3>
          </div>
          <div class="reasons_for_vol">
            <label for="for-ac-cr">For academic credit:</label>
            <input
              type="checkbox"
              name="reason"
              id="for-ac-cr"
              value="For academic credit"
            />
            <label for="learn-new-sk">To learn new skills:</label>
            <input
              type="checkbox"
              name="reason"
              id="learn-new-sk"
              value="To learn new skills"
            />
            <label for="for-so-int">For social interaction:</label>
            <input
              type="checkbox"
              name="reason"
              id="for-so-intr"
              value="For social interaction"
            />
            <br />
            <br />
            <label for="to-gain-emp-sk">To gain employment skills:</label>
            <input
              type="checkbox"
              name="reason"
              id="to-gain-emp-sk"
              value="To gain employment skills"
            />
            <label for="share-sk">To share my skills:</label>
            <input
              type="checkbox"
              name="reason"
              id="share-sk"
              value="To share my skills"
            />
            <label for="to-stay-act">To stay active:</label>
            <input
              type="checkbox"
              name="reason"
              id="to-stay-act"
              value="To say active"
            />
            <br />
            <br />
          </div>
          <div class="if-other">
            <input
              id="oth"
              class="inp1 inp1new"
              name="otherReason"
              type="text"
              placeholder="If other, Please Explain..."
            />
          </div>
          <div class="more-info">
            <div class="h3-headers">
              <h3 style="margin-bottom: -25px" ;>More Information</h3>
            </div>
            <div class="lbls">
              <label>Do You Have Physical Limitations?</label>
              <label for="phy-lim"> No</label>
              <input type="checkbox" name="physical_lim" id="phy-lim" value="no" />
              <input
                class="inp1 inp1new"
                name="physical_lim_exp"
                type="text"
                placeholder="If yes (Please Explain)..."
              />
            </div>
            <label
              >Have you ever been volunteer to any othe organization?</label
            >
            <label for="any-other-org"> No</label>
            <input type="checkbox" name="other_org" id="any-other-org" />
            <input
              class="inp1 inp1new"
              name="other_org_spec"
              type="text"
              placeholder="If yes (Please Specify)..."
            />
          </div>
          <div class="btn-box">
            <button type="button" data-back id="Back3">Back</button>
          </div>
          <div class="file-upload">
            <span>Upload Your Photo:</span>
            <div class="file-input">
              <input
                type="file"
                name="person_img"
                class="form-control"
                id="inputGroupFile02"
              />
            </div>
          </div>
          <div class="btn-box">
            <button type="submit" name="register">Submit</button>
          </div>
        </div>
      </form>

      <?php 
      if(isset($_POST['register'])){

            $fullName = $_POST['fullName'];
            $city = $_POST['city'];
            $subCity = $_POST['subCity'];
            $woreda = $_POST['woreda'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $educationalInstitution = $_POST['educatonalInstitution'];
            $department = $_POST['department'];
            $level_year = $_POST['level_year'];
            $gender = $_POST['gender'];
            $Age = $_POST['age'];

            //second form

            $emerFname = $_POST['emer_Fname'];
            $emerRship = $_POST['emer_Rship'];
            $emerCity = $_POST['emer_city'];
            $emerSubcity = $_POST['emer_subcity'];
            $emerWoreda = $_POST['emer_Woreda'];
            $emerPhone = $_POST['emer_phone'];
            $emerEmail = $_POST['emer_email'];

            //third form

            $ref_Fname = $_POST['ref_fullName'];
            $ref_Rship = $_POST['ref_relation'];
            $ref_phone = $_POST['ref_phone'];


            $hw_maintenance = $_POST['hw_maintain'];
            $ubuntuOs = $_POST['ubuntu_os'];
            $nwking = $_POST['networking'];
            $lab_setup = $_POST['labSetup'];
            $database = $_POST['database'];

            //forth form

            $reason_for_vol = $_POST['reason'];
            $other_reason = $_POST['otherReason'];
            $phy_limit = $_POST['physical_lim'];
            $phy_limit_explain = $_POST['physical_lim_exp'];
            $any_org = $_POST['other_org'];
            $specify_org = $_POST['other_org_spec'];
            $image = $_POST['person_img'];
        try{
            
            $sql = "INSERT INTO `form`(`fullName`, `city`, `subCity`, `woreda`, `phone`, `email`, `educationalInstitution`, `department`, `level_year`, `gender`, `age`, `emer-Fname`, `r_ship`, `emer-City`, `emer-Subcity`, `emer-Woreda`, `emerPhone`, `emer-Email`, `ref-FName`, `ref-R_ship`, `ref-phone`, `Hardware-maintenance`, `ubuntu-OS`, `Networking`, `lab-set`, `Database`, `reasons-for volunteering`, `another reasons`, `physical-lim`, `physical-lim explanation`, `any-other-org`, `spec-org`, `img_url`) VALUES ('$fullName ','$city ','$subCity','$woreda ','$phone ','$email','$educationalInstitution','$department','$level_year','$gender','$Age','$emerFname','$emerRship ','$emerCity ','$emerSubcity','$emerWoreda','$emerPhone','$emerEmail','$ref_Fname','$ref_Rship','$ref_phone','$hw_maintenance','$ubuntuOs','$nwking','$lab_setup','$database','$reason_for_vol','$other_reason','$phy_limit','$phy_limit_explain','$any_org','$specify_org','$image')";
            $conn->exec($sql);
            echo "New record created successfully";
        }
        catch(PDOException $e){
          echo "Erro:".$e->getMessage();
        }
      }
       ?>
    

      <div class="step-row">
        <div id="progress"></div>
        <div class="step-col"><small>Step 1</small></div>
        <div class="step-col"><small>Step 2</small></div>
        <div class="step-col"><small>Step 3</small></div>
        <div class="step-col"><small>Step 4</small></div>
      </div>
    </div>
    <script type="text/javascript" src="../assets/js/form.js"></script>
  </body>
</html>
