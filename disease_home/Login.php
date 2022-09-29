<?php
include('config.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $myemail = $_POST['email'];
    $mypass = $_POST['pass'];
    $password = md5($mypass);

    //replaced id with * 
    $sql = ("SELECT * FROM disease_prediction.user WHERE u_email='$myemail' AND u_pass='$password' ");

    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    $count = mysql_num_rows($result);

    if ($count == 1) {
        $_SESSION['login_user'] = $myemail;
        header("location:http://localhost:8080/");
    } else {
        echo '<script>alert("Enter Valid Credentials!")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="https://kit.fontawesome.com/098591914d.js" crossorigin="anonymous"></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./login.css">
    <title>Log In</title>
</head>

<body>
    <main>
        <section class="glass">
            <!-- <div class="dashboard">
                <div class="user">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="1000">
                                <img src="./images/Doctor.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="./images/Doctor.jpg" class="d-block " alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/Doctor.jpg" class="d-block " alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div> -->
            <!-- </div> -->
            <div class="surguries">
                <div class="status">
                    <h2>Hello Again!</h2>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <h4>Login Here</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">
                                <h5><b>Email Address</b></h5>
                            </label>
                            <div class="icon-fix">
                                <img src="./images/envelope-solid.svg" alt="" srcset="">
                                <input type="email" name="email" class="form-control my-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">
                                <h5><b>Password</b></h5>
                            </label>
                            <div class="icon-fix ">
                                <img src="./images/lock-solid.svg" alt="" srcset="">
                                <input type="password" name="pass" class="form-control my-2" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                        <div class="button-center text-center">
                            <button type="submit" class="btn  my-3 mx-4">Log In</button>

                            <!-- Forgot Pass -->

                            <!-- <a href="./forgotpass.php" class="btn " role="button" data-bs-toggle="button">Forgot Password</a> -->
                            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Forgot Password
                            </button>
                        </div>
                    </form>
                    <hr>
                    <h4>Not Registered? <a href="./signin.php">Sign in</a></h4>

                </div>
            </div>
        </section>

        <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- form -->
                        <form action="forgotpass.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="pass" value="" class="form-control" id="exampleInputPassword1">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn ">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <div class="circle1"></div>
    <div class="circle2"></div>
</body>

</html>