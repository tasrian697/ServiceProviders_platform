<?php 

include 'connect.php';

if (isset($_POST['update'])) {

    $firstname = $_POST['firstname'];

    $user_id = $_POST['lastname'];

    $lastname = $_POST['email'];

    $email = $_POST['contactNo'];

    $password = $_POST['date'];

    $gender = $_POST['time']; 

    $sql = "UPDATE `users` SET `firstName`, `lastName`, `emailAddress`, `contactNo`, `date`, `time`"; 

    $result = $conn->query($sql); 

    if ($result == TRUE) {

        echo '<div class="alert alert-success" role="alert">';
        echo 'Record updated successfully.';
        echo '</div>';
        echo "<script>console.log('Record updated successfully.');</script>";
        header( "refresh:2; url=./view.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $first_name = $row['firstname'];

            $lastname = $row['lastname'];

            $email = $row['email'];

            $password  = $row['contactNo'];

            $gender = $row['date'];

            $id = $row['time'];

        } 

    ?>
     <html>
    <head>
        <title>User Update Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>

    <div class="container">
        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            <div class="form-group">
                <label for="firstname">First name:</label>
                <input type="text" class="form-control" name="firstname" value="<?php echo $first_name; ?>">
            </div>

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <div class="form-group">
                <label for="lastname">Last name:</label>
                <input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
            </div>

            <div class="form-group">
                <label for="contactNo">contactNo:</label>
                <input type="contactNo" class="form-control" name="contactNo" value="<?php echo $contactNo; ?>">
            </div>

            <div class="form-group">
                <label for="date">date:</label>
                <input type="date" class="form-control" name="date" value="<?php echo $date; ?>">
            </div>

            <div class="form-group">
                <label for="time">contactNo:</label>
                <input type="time" class="form-control" name="time" value="<?php echo $time; ?>">
            </div>

            <input type="submit" class="btn btn-primary" value="Update" name="update">

          </fieldset>

        </form> 
    </div>

    </body>
    </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?>