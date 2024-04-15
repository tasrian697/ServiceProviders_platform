<?php 

include 'connect.php';

$sql = "SELECT firstname as fname, lastname, email, contacttNo, date, time";

$result = $conn->query($sql);
// {   id:[1,2,3],
    // name:["a","b","c"]
// .....
// }

?>

<!DOCTYPE html>


<head>

    <title>View Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Users</h2>

<table class="table">

    <thead>

    <tr>

        <th>First Name</th>

        <th>Last Name</th>

        <th>Email</th>

        <th>contactNo</th>

        <th>date</th>

        <th>time</th>
    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>

                    <tr>

                    <td><?php echo $row['fname']; ?></td>

                    <td><?php echo $row['lastname']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['contactNo']; ?></td>

                    <td><?php echo $row['date']; ?></td>

                    <td><?php echo $row['time']; ?></td>

                    <td>
                        <a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>

                    </tr>                       

        <?php   }
            }
            $conn->close(); 
        ?>              

    </tbody>

</table>
<a style="color:black;" class="btn btn-warning" href="form.php"><b>Create User</b></a>
    </div> 

</body>
