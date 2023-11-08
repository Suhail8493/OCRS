<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crime Portal</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css"> -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {

            background-size: cover;
            background-image: url(Images/new-crime-scene.jpg);
            background-position: center;
            /* background-repeat: no-repeat; */
        }

        body,
        html {
            width: 100%;
            height: 100%;
            font-family: 'Poppins', 'Gill Sans', 'Gill Sans MT';
            color: white;
        }

        .navbar-default {
            color: white;
            border: 2px solid grey;
        }

        h1 {
            font-weight: 700;
            font-size: 5em;
            color: powderblue;
        }

        .content {
            padding-top: 15%;
            text-align: center;
            /* text-shadow: 0px 4px 3px rgba(0, 0, 0, 0.4),
                0px 8px 13px rgba(0, 0, 0, 0.1),
                0px 18px 23px rgba(0, 0, 0, 0.1); */
        }

        hr {
            width: 100%;
            border-top: 1px solid #f8f8f8;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        }

        header {
            background-color: #138496;
            width: 100vw;
            height: 60px;
            border: 1px solid black;

        }

        header ul {
            display: flex;
            justify-content: space-around;
            flex-direction: row;
        }

        header li {
            list-style-type: none;
            /* display: inline; */
            font-size: 25px;
            padding: 10px;

        }

        a {
            color: white;
            margin: 5px 0px;

        }

        a:hover {
            text-decoration: none;
            color: white;
        }

        .login-buttons {
            display: flex;
            margin-top: 10%;
            flex-direction: row;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#"
                        class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Home</a>
                </li>
                <!-- <li><a href="official_login.php">Official Login</a></li> -->
                <li><a href="policelogin.php">Police Login</a></li>
                <li><a href="inchargelogin.php">Incharge Login</a></li>
                <li><a href="headlogin.php">Head Login</a></li>

            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content">
                    <h1>Have a Complaint?</h1>
                    <!-- <h3>Register Below &dArr;</h3> -->
                    <!-- <i class="fa fa-hand-o-down" aria-hidden="true"></i></h3> -->
                    <hr>
                    <div class="login-buttons">
                        <div>
                            <h3>New User!</h3>
                            <a href="registration.php" class="btn btn-info btn-lg" style="background-color:#138496"
                                role="button" aria-pressed="true">Sign
                                Up</a>
                        </div>
                        <div>
                            <h3>Already Registered?</h3>
                            <a href="userlogin.php" class="btn btn-info btn-lg" style="background-color:#138496" role="
                                button" aria-pressed="true">
                                Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="position: relative;
   left: 0;
   top: 37.6px;
   width: 100vw;
   height: 60px;
  background-color:#138496;
   color: white;
   text-align: center;">
        <h3 style="padding-top:20px">&copy <b>Crime Portal 2023(Kashmir)</b></h3>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>