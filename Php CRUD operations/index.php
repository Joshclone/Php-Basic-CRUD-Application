<?php
include "config.php";

//process the form
if (isset($_POST['submit'])) {
    //get variables from the form
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];



    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`)
VALUES ('$first_name', '$last_name', '$email','$password','$gender')";

    //execute the query
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "New record created successfully.";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="jumbotron" style="width: 500px;">
    <h2>Signup Form</h2>

    <form action="" method="POST">
        <fieldset>
            <legend>
                <h2>Personal information:</h2>
            </legend>
            First name:<br>
            <input type="text" name="firstname">
            <br>
            Last name:<br>
            <input type="text" name="lastname">
            <br>
            Email:<br>
            <input type="text" name="email">
            <br>
            Password:<br>
            <input type="password" name="password">
            <br>
            Gender:<br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <br><br>
            <input type="submit" name="submit" value="submit">


        </fieldset>





    </form>


</body>

</html>