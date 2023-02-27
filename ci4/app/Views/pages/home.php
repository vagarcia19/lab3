<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
    
    <title>Vieron's Personal Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <header>
      <a href="#" class="logo">vieron</a>
      <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="vagarcia_guests.php">My Guests</a></1i>
        <li><a href="reg2.php">Register</a></1i>
      </ul>
    </header>


<section>
    <img src="stars.png" id="stars" width="120%" height="120%">
    <img src="moon.png" id="moon">
    <img src="mountains_behind.png" id="mountains_behind"width="100%" height="100%">
    <h2 id="text">welcome</h2>
    <a href="Click.php" id="btn">About me</a>
    <img src="bundok.png" id="bundok"width="100%" height="100%">
</section>



<div class="footer-clean">
  <footer>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-sm-4 col-md-3 item">
                  <h3>Resources</h3>
                  <ul>
                      <li><a href="https://www.w3schools.com/">W3Schools</a></li>
                      <li><a href="https://getbootstrap.com/">Bootstrap</a></li>
                      <li><a href="https://fontawesome.com/">FontAwesome</a></li>
                  </ul>
              </div>
              <div class="col-sm-4 col-md-3 item">
                  <h3> --------------- </h3>
                  <ul>
                      <li><a href="#">Stack Overflow</a></li>
                      <li><a href="#">Coolors</a></li>
                      <li><a href="#">Pinterest</a></li>
                  </ul>
              </div>
              <div class="col-sm-4 col-md-3 item">
                  <h3>  ---------------  </h3>
                  <ul>
                      <li><a href="#">LinkedIn</a></li>
                  </ul>
              </div>
              <div class="col-lg-3 item social"><a href="https://www.facebook.com/dakto.box"><i class="icon ion-social-facebook"></i></a><a href="https://twitter.com/"><i class="icon ion-social-twitter"></i></a><a href="https://www.snapchat.com/"><i class="icon ion-social-snapchat"></i></a><a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a>
                  <p class="copyright">Vieron © 2023</p>
              </div>
          </div>
      </div>
  </footer>
</div>
<script>
    let moon = document.getElementById('stars')
    let moon = document.getElementById('moon')
    let moon = document.getElementById('mountains_behind')
    let moon = document.getElementById('text')
    let moon = document.getElementById('btn')
    let moon = document.getElementById('bundok')

    window.addEventListener('scroll', Function(){
        let value = window.scrollY
        stars.style.;Left = value + 'px';
   }) 
  </script>
    
</body>
</html>