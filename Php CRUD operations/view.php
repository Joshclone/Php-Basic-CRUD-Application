<?php
include "config.php";

//write the query to get data from users table
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h2>Users</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    //output data of each row

                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete </a>
                            </td>


                        </tr>


                <?php         }
                }

                ?>
            </tbody>





        </table>




    </div>

</body>

</html>