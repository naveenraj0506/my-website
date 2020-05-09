<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes">
    <title>NaveenRaj</title>
    <?php
  include('st.php');

?>
    
  </head>
  <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }
    
    li {
      float: left;
    }
    
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    li a:hover:not(.active) {
      background-color: #111;
    }
    
    
    </style>
  <body>
    <!-- navbar starts -->
    <?php
  include('nav.php');

?>
    <!-- navbar ends -->

    <!-- main section starts -->

    <section class="container heromargin" id="home">
      <div class="row">
        <div class="col-md-6">
          <p class="main-name">Hi, my name is</p>
          <h1 class="name animated fadeInLeft">NaveenRaj.</h1>
          <h1 class="profs animated fadeInLeft">Web/App Developer.</h1>
          <br />
          <p class="profs1 animated fadeInLeft">
            I'm a computer science student , studying at <br />
            St.Joseph's Institute of Technology. I love building websites and
            applications.
          </p>

          <a href="https://www.instagram.com/naveenraj0506/">
            <button class="button1">Say Hello!</button>
          </a>
        </div>
        <div class="col-md-6">
          <img class="img-fluid animated fadeInRight" src="img/pic3.png" alt="programmer" />
        </div>
      </div>
    </section>

    <!-- quote starts -->

    <div class="quotes">
      <div class="container">
        <p>Never underestimate the power of zero's and ones.</p>
      </div>
    </div>

    <!-- quote ends -->

    <!-- profile starts -->
  
    <!-- profile ends  -->

    <!-- About section starts -->
    

      <!-- About section ends -->
    </div>

    <!-- main section ends -->
<!-- Footer -->

<?php
    include('footer.php');
  
?>
  <!-- Footer -->

  <script src="js/wow.min.js"></script>
  <script>
  new WOW().init();
  </script>

  </body>
 
<?php
    include('scripts.php');
  
?>
</html>
