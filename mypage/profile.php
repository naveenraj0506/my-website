<?php
    include('st.php');
  include('nav.php');
  
?>

    <div id="profile"
      style="
        background-color: turquoise;
        margin-bottom: 20px;
        padding-bottom: 20px;
      "
    >
      <div class="container">
        <h1 class="profile-heading">Profile</h1>
        <hr />
        <div class="row">
          <div class="col-sm">
            <p style="text-align: center; font-size: 25px;"><u>About me </u></p>
            <p class="profile-details wow animated fadeInLeft">
              Hello! I'm NaveenRaj, a software engineer who enjoys building
              things that live on the internet. I develop websites and web apps
              with efficient and modern backends. I am looking to take on more
              work and to increase my skills as a Web Developer.
            </p>
          </div>
          <div class="col-sm">
            <div class="container">
              <img
                class="img-fluid profile-pic wow animated fadeInDown"
                src="img/profile-pic.jpg"
                height="350px"
                width="350px"
                alt="profile-picture"
              />
            </div>
          </div>
          <div class="col-sm">
            <p style="text-align: center; font-size: 25px;"><u>Details </u></p>
            <p class="profile-details animated fadeInRight" style="margin-top: 20px;">
              <u> Name: </u> <br />
              Naveenraj R <br />
              <u>Age:</u> <br />
              19 <br />
              <u>Location:</u> <br />
              Chennai, Tamilnadu, <br />India <br />
            </p>
          </div>
        </div>

        <!-- <p class="profile-details" style="margin-top: 20px; font-weight: bold;">
          Here are a few technologies I've been working with recently:
        </p>

        <div class="row profile-details animated fadeInLeft">
          <div class="col-md-6">
            <i style="font-size: 24px;" class="fa">&#xf0fb;</i> Javascript(ES6+)
            <br />
            <i style="font-size: 24px;" class="fa">&#xf0fb;</i> React <br />
            <i style="font-size: 24px;" class="fa">&#xf0fb;</i> Bootstrap<br />
            <i style="font-size: 24px;" class="fa">&#xf0fb;</i> Django<br />
            <i style="font-size: 24px;" class="fa">&#xf0fb;</i> HTML , CSS &
            SASS<br />
            <i style="font-size: 24px;" class="fa">&#xf0fb;</i> Gatsby<br />
          </div>

          <div class="col-md-6 wow slideInLeft">
            <i style="font-size: 24px;" class="fa">&#xf0fb;</i> JQuery<br />
            <i style="font-size: 24px;" class="fa">&#xf0fb;</i> Python <br />
            <i style="font-size: 24px;" class="fa">&#xf0fb;</i> PHP <br />
            <i style="font-size: 24px;" class="fa">&#xf0fb;</i> React Native<br />
            <i style="font-size: 24px;" class="fa">&#xf0fb;</i> Flutter<br />
            <i style="font-size: 24px;" class="fa">&#xf0fb;</i> SQLite<br />
          </div>
        </div> -->

        <hr />

        <p class="profile-details" style="text-align: center;">
          <b> <u> Languages</u> </b>
        </p>

        <div class="row profile-details">
          <div class="col-md">
            <i style="font-size: 24px;" class="fa">&#xf0fb;</i> தமிழ்(Mother
            tongue)<br />
          </div>

          <div class="col-md">
            <i style="font-size: 24px;" class="fa">&#xf0fb;</i> English<br />
          </div>

          <div class="col-md">
            <i style="font-size: 24px;" class="fa">&#xf0fb;</i> French(Un petit peu)
          </div>
        </div>
      </div>
    </div>

    
    <?php
    include('footer.php');
    include('scripts.php');
?>