<?php
    // Constant
    /*
    define('CONS','Bangladesh is a South Asian country.'.'<br />'.'<br />');
    echo CONS;

    // Query String & Get
    if(isset($_GET['name'])) {
        echo $_GET['name'];
    }
    else {
        echo NULL;
    }
    

    // Short hand statement
    $token = isset($_GET['name']) ? $_GET['name'] : NULL;
    echo $token;

    // Server
    // echo "<pre>";
    // print_r($_SERVER);
    // echo $_SERVER['PHP_SELF'];


    $a = "He is a web devoloper.";
    function docs() {
        global $a;
        return $a;
    }
    echo docs()."<br />";

        
    function slate() {
        global $b;
        $b = "The project has been done.";
    }
    slate();
    echo $b."<br />";

        
    $world = "Developer";
    function tube() {
        echo $GLOBALS['world'];
    }
    tube();
    */
     
    
    session_start();

    if(isset($_SESSION['success'])) {
        header('location: info.php');
    }

    if(isset($_POST['info'])) {
        define('FIRST','Protap');
        define('LAST','Ghosh');
        define('EMAIL','info.protap@gmail.com');
        define('PASSWORD','1234');

        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($first == FIRST && $last == LAST && $email == EMAIL && $password == PASSWORD) {

            $_SESSION['success'] = '';

            header('location: info.php');
        }

        else {
            $fail = "<b>Error: </b>Info does not match , try again";
        }
    }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <style>
        body {
            background-color: #ced6e0;
        }

        h2 {
            font-size: 30px;
            text-align: center;
        }

        .soft {
            display: block;
            margin:auto;
            width: 450px;
            padding: 30px;
            text-align: center;
            border: 1px solid green;
            border-width: length;
            box-shadow: 5px 10px 30px 8px #00cec9;
            border-radius: 10px;
        }

        form input[type="text"],
            input[type="email"],
            input[type="password"] {
            height: 40px;
            width: 350px;
            border: 3px solid #82ccdd;
            border-radius: 5px;
        }

        form input[type="submit"] {
            font-size: 16px;
            height: 40px;
            width: 150px;
            cursor: pointer;
            border: 3px solid #82ccdd;
            border-radius: 5px;
        }

        form input[type="text"]:focus,
            input[type="email"]:focus,
            input[type="password"]:focus {
                outline: none;
                border: 3px solid #079992;
        }

        form input[type="submit"]:hover {
            transition: 0.5s;
            border: 3px solid #079992;
            background-color: #83fcdd;
        }

        p {
            color: #ff4757;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Log In Form</h2> <br />
    
    <div class="soft">
        <form action="" method="POST">
            <input type="text" name="first" placeholder="First Name" required> <br/><br/>
            <input type="text" name="last" placeholder="Last Name" required> <br/><br/>
            <input type="email" name="email" placeholder="Enter Your Email" required> <br/><br/>
            <input type="password" name="password" placeholder="Password" required> <br/><br/>
            <input type="submit" name="info" value="Log In">
        </form>
    </div> <br/><br/><br/>

    <?php
        if(isset($fail)) {
            echo "<P>".$fail."</P>";
        }

    ?>

    <div class="note">
        <strong>NOTE: Please use these details to login (Invalid info is not acceptable).</strong> <br/> <br/>
        <i>
            <b> Fast Name: </b> Protap <br/>
            <b> Last Name: </b> Ghosh <br/>
            <b> Email Address: </b> info.protap@gmail.com  <br/>
            <b> Password: </b> 1234
        </i>
    </div>
    
    
    
</body>
</html>









