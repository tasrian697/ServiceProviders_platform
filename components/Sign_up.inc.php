<?php 
include 'connect.php';

  if (isset($_POST['submit'])) {

    $Your_name = $_POST['Your Name'];

    $Your_Email = $_POST['Your Email'];

    $Contact = $_POST['Contact No.']; 

    $date_of_birth = $_POST['Date of Birth'];

    $Gender = $_POST['Gender'];

    $sql = "INSERT INTO appoinment_mh (`firstName`, `emailAddress`, `contactNo` `date`, `time`) 
    VALUES ('$Your_Name', '$Your_Email', '$email', '$Contact', '$date', '$time')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo '<div class="alert alert-success" role="alert">New record created successfully!</div>';
      echo "<script>console.log('New record created successfully!');</script>";
      header( "refresh:2; url=./view.php" ); 

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close();

  }
?>
<section class="gradient">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,154.7C384,128,480,96,576,117.3C672,139,768,213,864,208C960,203,1056,117,1152,101.3C1248,85,1344,139,1392,165.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>
    <section class="vh-30">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                
                                <form action="" method="POST">

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1cg">Your Name</label>
                                        <input type="text" id="form3Example1cg" name="Your Name" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                        <input type="email" id="form3Example3cg" name="Email" class="form-control form-control-lg" />

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg">Contact No.</label>
                                        <input type="tel" id="form3Example4cg" name="Contact No." class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4">

                                        <label for="dob">Date of Birth:</label>
                                        <input type="date" id="dob" name="Date of Birth" required>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label for="gender">Gender:</label>
                                        <select id="gender" name="Gender" required>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>

                                    <!-- <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                        <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                                    </div> -->


                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="Common_login_page.php" class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>