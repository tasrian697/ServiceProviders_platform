<?php 
include 'connect.php';

  if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];

    $last_name = $_POST['lastname'];

    $email = $_POST['email'];

    $contactNo = $_POST['contactNo'];

    $date = $_POST['date'];

    $time = $_POST['time'];

    $sql = "INSERT INTO appoinment_mh (`firstName`, `lastName`, `emailAddress`, `contactNo`, `date`, `time`) 
    VALUES ('$firstName', '$lastName', '$email', '$contactNo', '$date', '$time')";

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
<section class="Appointment gradient">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path
            fill="#fff"
            fill-opacity="1"
            d="M0,224L48,213.3C96,203,192,181,288,154.7C384,128,480,96,576,117.3C672,139,768,213,864,208C960,203,1056,117,1152,101.3C1248,85,1344,139,1392,165.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
            ></path>
        </svg>    
<section class="vh-30">
    <div class="container mt-5">
            <div class="appointment-form">
                <div class="row">
                    <!-- Left Side with Image, Header, and Paragraph -->
                    <div class="col-md-6 position-relative">
                        <div class="fixed-text">
                            <h2>Book an Appointment</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="image-container">
                            <img src="img/Appointment_house.jpg" alt="house Image" class="img-fluid">
                        </div>
                    </div>
                    <!-- Right Side with Appointment Form -->
                    <div class="col-md-6">
                        <form>
                            <h3>Book an Appointment</h3>
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Enter your first name">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Enter your last name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email address">
                            </div>
                            <div class="form-group">
                                <label for="contactNo">Contact No</label>
                                <input type="tel" class="form-control" id="contactNo" placeholder="Enter your contact number">
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="text" class="form-control datepicker" id="date" placeholder="Select date">
                            </div>
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="text" class="form-control timepicker" id="time" placeholder="Select time">
                            </div>
                            <button type="submit" class="btn btn-primary">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
            </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>    
</section>
    </div>
</section>