<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./dark.css" media="(prefers-color-scheme:dark)">
  <link rel="stylesheet" href="./light.css" media="(prefers-color-scheme:light)">
  <script src="https://kit.fontawesome.com/098591914d.js" crossorigin="anonymous"></script>
  <script src="./index.js"></script>
  <script src="./main.js"></script>
  <title>Home:Multiple Disease Prediction</title>
  <!-- <script type="module" src="https://unpkg.com/dark-mode-toggle"></script> -->
</head>

<body>
  <nav class="navbar navbar-expand-xl navbar-light ">
    <div class="container-fluid">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-3 my-3 ms-auto">
          <!-- for moving buttons to right- ms-auto -->
          <div class="container-btn w-100 ">
            <div class="float-end">
            
            <!-- <dark-mode-toggle id="dark-mode-toggle-1" apperance="toggle" dark="dark" light="light">
            </dark-mode-toggle> -->


            <!-- Login/Register -->
            <a class="btn  mx-2" href="Login.php" role="button">Login</a>
            <a class="btn  mx-2" href="signin.php" role="button">Register</a>    
          </div>
          </div>
        </ul>
      </div>
      <input type="checkbox" onclick="ubahMode()" class="darktoggle">
    </div>
  </nav>
  <h1>Multiple Disease Detection</h1>
  <div class="card-container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
          <div class="card mx-3 my-3 w-80%">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./images/Diabetes.avif" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">Diabetes</h4>
                  <p class="card-text d-flex justify-content-start">Diabetes is a chronic (long-lasting) health
                    condition that affects how your body turns food into energy.<br>
                    <!-- <p>body breaks down most of the food you eat into sugar (glucose) and releases it into your bloodstream. When your blood sugar goes up, it signals your pancreas to release insulin. Insulin acts like a key to let the blood sugar into your body’s cells for use as energy.</p> -->
                  With diabetes, your body doesn’t make enough insulin or can’t use it as well as it should. When
                    there isn’t enough insulin or cells stop responding to insulin, too much blood sugar stays in your
                    bloodstream. Over time, that can cause serious health problems, such as heart disease, vision loss,
                    and kidney disease.</p>
                  <a class="btn "
                    href="https://www.cdc.gov/diabetes/basics/diabetes.html#:~:text=With%20diabetes%2C%20your%20body%20doesn,vision%20loss%2C%20and%20kidney%20disease."
                    role="button">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <div class="card mx-3 my-3 w-80%">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./images/heart.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title ">Heart Diseases</h4>
                  <p class="card-text d-flex justify-content-start">Cardiovascular disease (CVD) is a class of diseases
                    that involve the heart or blood vessels. CVD includes coronary artery diseases (CAD) such as angina
                    and myocardial infarction (commonly known as a heart attack).Other CVDs include stroke, heart
                    failure, hypertensive heart disease, rheumatic heart disease, cardiomyopathy, abnormal heart
                    rhythms, congenital heart disease, valvular heart disease, carditis, aortic aneurysms, peripheral
                    artery disease, thromboembolic disease, and venous thrombosis.</p>
                  <!-- <p>underlying mechanisms vary depending on the disease.Coronary artery disease, stroke, and peripheral artery disease involve atherosclerosis.This may be caused by high blood pressure, smoking, diabetes mellitus, lack of exercise, obesity, high blood cholesterol, poor diet, excessive alcohol consumption,and poor sleep, among other things. </p> -->
                  <a class="btn " href="https://www.cdc.gov/cancer/breast/basic_info/index.htm"
                    role="button">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <div class="card mx-3 my-3 ">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./images/Parkinson.webp" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">Parkinson's Disease</h4>
                  <p class="card-text d-flex justify-content-start">Parkinson’s disease is a brain disorder that causes
                    unintended or uncontrollable movements, such as shaking, stiffness, and difficulty with balance and
                    coordination.<br>
                  Symptoms usually begin gradually and worsen over time. As the disease progresses, people may have
                    difficulty walking and talking. They may also have mental and behavioral changes, sleep problems,
                    depression, memory difficulties, and fatigue.
                    Older woman and her caregiver</p>
                  <a class="btn "
                    href="https://www.nia.nih.gov/health/parkinsons-disease#:~:text=Parkinson's%20disease%20is%20a%20brain,have%20difficulty%20walking%20and%20talking."
                    role="button">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <div class="card mx-3 my-3 w-80%">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./images/breast-cancer.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">Breast Cancer</h4>
                  <p class="card-text d-flex justify-content-start">Breast cancer is a disease in which cells in the
                    breast grow out of control. There are different kinds of breast cancer. The kind of breast cancer
                    depends on which cells in the breast turn into cancer.<br>
                  cancer can begin in different parts of the breast. A breast is made up of three main parts:
                    lobules, ducts, and connective tissue. The lobules are the glands that produce milk. The ducts are
                    tubes that carry milk to the nipple. The connective tissue (which consists of fibrous and fatty
                    tissue) surrounds and holds everything together. Most breast cancers begin in the ducts or lobules.
                  </p>
                  <a class="btn "
                    href="https://www.cdc.gov/cancer/breast/basic_info/what-is-breast-cancer.htm" role="button">Learn
                    More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Team</h2>
      </div>

      <div class="row gy-4">

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <img src="./images/ChinmayPro2.jpg" class="img-fluid" alt="">
            <h4>Chinmay Halsikar</h4>
            <span>Frontend Development</span>
            <div class="social">
              <a href="https://github.com/Chinmay787"><img src="./images/github.svg"></a>
              <a href="https://www.instagram.com/_chin.may_2105/"><img src="./images/instagram.svg"></a>
              <a href="https://www.linkedin.com/in/chinmay-halsikar/"><img src="./images/linkedin-in.svg"></a>
              <a href="#"><img src="./images/twitter.svg"></a>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <img src="./images/Bhushan.jpg" class="img-fluid" alt="">
            <h4>Bhushan Deshmukh</h4>
            <span>ML Development & Cloud</span>
            <div class="social">
              <a href="https://github.com/8421296860?tab=overview&from=2022-08-01&to=2022-08-31"><img src="./images/github.svg"></a>
              <a href="https://www.instagram.com/bhushanreads/"><img src="./images/instagram.svg"></a>
              <a href="https://www.linkedin.com/in/bhushan-deshmukh-b89b3920a/"><img src="./images/linkedin-in.svg"></a>
              <a href="https://twitter.com/DeshmukhsVoice"><img src="./images/twitter.svg"></a>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <img src="./images/shubham.jpg" class="img-fluid" alt="">
            <h4>Shubham Sakhare</h4>
            <span>Backend Development</span>
            <div class="social">
              <a href="https://github.com/shubhamcancode"><img src="./images/github.svg"></a>
              <a href="https://www.instagram.com/llost_soul/"><img src="./images/instagram.svg"></a>
              <a href="https://www.linkedin.com/in/shubhamsakhare10/"><img src="./images/linkedin-in.svg"></a>
              <a href="https://twitter.com/shubham001101"><img src="./images/twitter.svg"></a>
            </div>
          </div>
        </div><!-- End Team Member -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
          <div class="member">
            <img src="./images/Pranoj.jpg" class="img-fluid" alt="">
            <h4>Pranoj Gonjari</h4>
            <span>Web Testing</span>
            <div class="social">
              <a href="https://github.com/pranojgonjari"><img src="./images/github.svg"></a>
              <a href="#"><img src="./images/instagram.svg"></a>
              <a href="https://www.linkedin.com/in/pranoj-gonjari-4b13a01ba"><img src="./images/linkedin-in.svg"></a>
              <a href="https://twitter.com/Pranoj101"><img src="./images/twitter.svg"></a>
            </div>
          </div>
        </div><!-- End Team Member -->
      </div>
    </div>
  </section><!-- End Our Team Section -->

  <!-- form section -->
  <div class="container-form">
    <div class="content">
      <div class="left-side">
        <div class="address-details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">SVERI's College Of Engineering</div>
          <div class="text-two">Pandharpur</div>
        </div>
        <div class="phone-details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 84212 96860</div>
          <div class="text-two">+91 95117 21580</div>
          <div class="text-two">+91 75593 50237</div>
        </div>
        <div class="email-details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">bhushanreads@gmail.com</div>
          <div class="text-two">shubhamsakhare1662@gmail.com</div>
          <div class="text-two">chinmayhalsikar@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">
          Feel free to contact us.
        </div>
        <!-- <span style="color:teal;">Do you have some querries.</span> -->
        <!-- Footer Form -->
        <form action="https://formspree.io/f/mgedrrrq" method="POST">
          <div class="input-box">
            <input type="text" name="name" placeholder="Enter Your Name">
          </div>
          <div class="input-box">
            <input type="email" name="email" placeholder="Enter Your Email ">
          </div>
          <div class="input-box message-box">
            <textarea name="message" placeholder="Enter Message Here"></textarea>
          </div>
          <div class="button">
          <button type="submit" class="btn " value="">Send Now</button>
            <!-- <input type="submit" value="send now"> -->
            <!-- <button type="button"><input type="submit" value="send now"></button> -->
          </div>
        </form>

      </div>
    </div>
  </div>
  <!-- footer section -->
  <div class="container-footer ">
    &copy; 2022.All Rights Reserved
  </div>
  <script>
    function ubahMode() {
      const ubah = document.body;
      ubah.classList.toggle("dark");
    }
  </script>
</body>

</html>