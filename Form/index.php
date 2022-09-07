<?php
include "../assets/connection/connect.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/homeStyle.css">
  <title>vcs</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a href="#" class="navbar-brand"><img src="../assets/images/camara.png" alt="" height="130" width="180"> Camara Eduacation Ethiopia</a>

      <form action="/directorates" method="post" class="form-inline" role="search">
        <label for="mod-search-searchword94" class="element-invisible">Search ...</label> <input name="searchword" id="mod-search-searchword94" maxlength="100" class="inputbox search-query input-medium" type="search" placeholder="Search ...">		<input type="hidden" name="task" value="search">
        <input type="hidden" name="option" value="com_search">
        <input type="hidden" name="Itemid" value="294">
      </form>
    </div>
  </nav>
  
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="image.jpg" class="d-block w-100" alt="..." width="600" height="400">
        <div class="carousel-caption d-none d-md-block">
          <h5>Please note that to volunteer in Camara Education Ethiopia: </h5>
            <b>
              <ul style="list-style-type:square;">
                <li>Must be at least 17 years of age</li>
                <li>Must be high school graduates</li>
                <li>Be able to work as a team with others</li>
                <li>Must have Good communication skills</li>
              </ul>
              
             We thank you for your interest to volunteer in our organization.</p>
            </b>
            
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="abc.jpg" class="d-block w-100" alt="..." width="600" height="400">
        <div class="carousel-caption d-none d-md-block">
          <h5>Dear Applicant,</h5>
          <b>
            Our organization encourages the participation of volunteers who supports our mission. If you agree
            with our mission and are willing to be trained in our procedure, we encourage you to complete this
            application.
            </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="jkl.jpg" class="d-block w-100" alt="..." width="600" height="400">
        <div class="carousel-caption d-none d-md-block">
          <h5>N.B</h5>
          <p>
             The information on this form will be kept confidential.
            
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> 
  <br> 
  <div class="d-grid gap-2 col-6 mx-auto">
  <a href="../AdminPage/login.php" target="_blank"><button class="btn btn-secondary" type="button">Login</button></a>
</div>
  <br>
  
    <footer class="footer mt-auto py-3 bg-light">
      <div class="container">
        <span class="text-muted">copyright 2022 &copy;	Camara Eduacation Ethiopia</span>
      </div>
    </footer>
  <script src="https://cdn.jsdeli>>vr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>