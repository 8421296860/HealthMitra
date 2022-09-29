<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/098591914d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./login.css">
    <title>Sign Up</title>
</head>

<body>
    <main>
        <section class="glass">
            <!-- <div class="dashboard">
                <div class="links">
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
                    </div>
                </div>
            </div> -->
            <div class="surguries">
                <div class="status">
                    <h2>New Here!</h2>

                        <!-- Registeration Form -->
                    <form action="insert.php" method="POST" id="form" enctype="multipart/form-data">
                        <h4>Sign Up Now</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">
                                <h5><b>Name</b></h5>
                            </label>
                            <div class="icon-fix">
                            <img src="./images/clipboard-solid.svg" alt="" srcset="">
                            <input type="text" name="name" class="form-control my-2" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter full name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">
                                <h5><b>Email Address</b></h5>
                            </label>
                            <div class="icon-fix">
                            <img src="./images/envelope-solid.svg" alt="" srcset="">
                            <input type="email" name="email"  class="form-control my-2" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">
                                <h5><b>Password</b></h5>
                            </label>
                            <div class="icon-fix ">
                            <img src="./images/lock-solid.svg" alt="" srcset="">
                            <input type="password" name="pass" class="form-control my-2" id="exampleInputPassword1"
                                placeholder="Password">
                            </div>
                        </div>
                        <div class="button-center text-center">
                            <button type="submit" class="btn my-3">Sign Up</button>
                        </div>
                    </form> 
                    <hr>
                    <h4>Already have an account? <a href="./Login.php">Log In</a></h4>
                </div>
            </div>
        </section>
    </main>
    <div class="circle1"></div>
    <div class="circle2"></div>
</body>

</html>