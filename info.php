<?php
    session_start();
    
    $first = isset($_POST['first']) ? $_POST['first'] : "Protap";
    $last = isset($_POST['last']) ? $_POST['last'] : "Ghosh";
    $email = isset($_POST['email']) ? $_POST['email'] : "info.protap@gmail.com";

    if(!isset($_SESSION['success'])) {
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <style>
        .logout {
            /* display: block; */
            margin: auto;
            margin-top: 100px;
            width: 450px;
            padding:30px;
            text-align: center;
            border: 1px solid green;
            box-shadow: 5px 10px 30px 8px #10ac84;
            border-radius: 10px;
        }

        a {
            transition: 0.5s;
            padding: 8px 15px;
            text-decoration: none;
            border: 3px solid #82ccdd;
            background-color: #dff9fb;
        }

        a:hover {
            border: 3px solid #079992;
            background-color: #83fcdd;
        }
        
    </style>
</head>
<body>
    <div class="logout">
        <h1>Welcome to Log In</h1>
        <b>First Name:</b> <?php echo $first; ?> <br />
        <b>Last Name:</b> <?php echo $last; ?> <br />
        <b>Email Address:</b> <?php echo $email; ?> <br /> <br /> <br />

        <a href="logout.php">Log Out</a>
    </div>
</body>
</html>

