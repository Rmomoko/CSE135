<?php
  //include('/home/action/workspace/protected/constants.php');
  include('../../protected/constants.php');

  session_name ("b_y6fcPbVeYEmN^NNfW+A*myn8SsXxAuw9!3?LawN8Np^5tDdXe3EzVMFC9k=dwuHTuLeE5CG5@?-KfZLhzF+L+wqqGB*#6LQsFF=uATu_N9P@!JpzFegDE2ZQtndRrT");
  session_start();

  // Token generator
  $newToken = generateFormToken('signin');
  $fgToken = generateFormToken('forgotpw');
  $signupToken = generateFormToken('signup');

  function generateFormToken($form){
    // generate a token from an unique value
    $token = md5(uniqid(microtime(), true));  
    // Write the generated token to the session variable to check it against the hidden field when the form is sent
    $_SESSION[$form.'_token'] = $token; 
    return $token;
  }

  static $level = -1;
  static $userIdHash = null;
  /* FOR VALIDATION! DO NOT DELETE!! 
  $level = 3;
  $_SESSION['user'] = "testing123";
  $_SESSION['logged'] = TRUE;
  */
  ///*
  if( isset($_SESSION["admin"]) && isset($_SESSION["logged"]) && $_SESSION["logged"] ){
    $level = $_SESSION["admin"];
    $userIdHash = $_SESSION["idhash"];
  }
  //*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Team Nine</title>

    <!-- Bootstrap core CSS -->
    <link href="/team/bootstrap/css/style.min.css" rel="stylesheet">

  </head>

  <body>
  <!-- Needed for logging scripts -->
  <script>
    var TeamNineLoggedUser = null;
    var TeamNineLoggedUserId = null;
  </script>
    <?php // NAVBAR
      include("$_SERVER[DOCUMENT_ROOT]/jrrrs/navbar.php"); 
    ?>
    <?php 
        include("$_SERVER[DOCUMENT_ROOT]/jrrrs/modals.php")
    ?>
    
    <div class="container container-padded tab-content">
      <div id="response-container"></div>
      
      <?php 
        // Pulls personal dashboard + user management data
        if($level != -1) {
          include('../../protected/pull.php');
          $Myself = getProfile();
          $Projects_list = getProjects();
          
          // ERROR DETAIL function library
          include("$_SERVER[DOCUMENT_ROOT]/jrrrs/errordetailv2.php"); 
          
          // Jumbotron, DASHBOARD, DEVDEV+
          include("$_SERVER[DOCUMENT_ROOT]/jrrrs/rengine9.php");

          // Jumbotron, USER MANAGEMENT, DEV+
          include("$_SERVER[DOCUMENT_ROOT]/jrrrs/rengine9pro.php");
        }

      ?>
      
      <div id="home" class="tab-pane active jumbotron">

        <!-- Marketing picture -->
        <!--div class="marketing"></div-->
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="/team/carousel/9v4.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              
              <h1 class="text-left">REngine <span style="color:lightseagreen">9</span></h1>
              <p class="text-left" style="color:grey">Unparalleled error tracking</p>
              <?php if ($level < USER) {
                echo '<p class="text-left"><a class="btn btn-lg btn-default" href="#" role="button"  data-toggle="modal" data-target="#modal-signup">Sign up today</a></p>';
                }
              ?>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/team/carousel/nobugs.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="text-left">Error Tracking? Easy!</h1>
              <p class="text-left">Manage, resolve, comment, and rate your errors. We won't let Javascript make a fool of you.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/team/carousel/vault.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption" data-dynamite-selected="true">
              <h1 class="text-left">We take security seriously!</h1>
              <p class="text-left">Be rest assured that all your work is stored securely with high level encryption.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/team/carousel/projects.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption" data-dynamite-selected="true">
              <h1 class="text-left">We've got projects.</h1>
              <p class="text-left">Use our system to create, organize, and coordinate projects and groups the way you want to.</p>
            </div>
          </div>
        </div>
      </div>
      <!--a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a-->
    </div>
        
        <div>
          <h2>Meet the <b>NEW</b> generation of error tracking</h2>
          <p style="font-size:18px">Here at <i>Team Nine</i> we understand the need for speed, accuracy and precision. Our company started with a single goal in mind, providing the best possible solution to our clients. In July 2013, we at <i>Team Nine</i> brought you 39 <i>UCSD&copy;</i> awards winning <strong>REngine <span style="color:red">8</span></strong>. This year we are proud to present the next iteration of unchallenged <b>Performance + Efficiency</b>. Introducing the all new 2014 <i>Team Nine</i> <strong>REngine <span style="color:lightseagreen">9</span></strong>. The new generation of error tracking.</p>
          <div style="text-align:right">
            <span style="font-size:18px">Sign up now, </span> 
            <button type="button" class="btn btn-default btn-lg signin-btn" style="background-color:black; color:white">
              Experience <strong>REngine <span style="color:lightseagreen">9</span></strong>
            </button>
          </div>
        </div>

        <div class="row" style="margin-top: 10px">
          <div class="col-md-6"><h3><b>STATE OF THE ART</b> error handling</h3>
            <p style="font-size:18px">With our completely revamped proprietary <strong>JRRRS <span style="color:orange">UI</span></strong>, we are redefining the future of error handling. Experience the future, experience endless choices, infinite customization. Live on <strong>JRRRS <span style="color:brown">UX</span></strong>.</p>
          </div>
          <div class="col-md-6"><h3><b>UNPRECENDENTED</b> performance</h3>
            <p style="font-size:18px">Servers around the globe awake just for you. You matter. Our handcrafted AI built for maximum performance to give you unparallelled access wherever you are, whenever you want.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6"><h3>Go <strong>REngine <span style="color:lightseagreen">9 </span> PRO</strong></h3>
            <p style="font-size:18px">Managing a website solo can be taxing. Invite fellow developers and designers with the professional version of <strong>REngine <span style="color:lightseagreen">9</span></strong>. Unobstructed access, VVIP service. "You have control" -Rolando <i>CEO Team Nine Inc.</i></p>
            <div style="text-align:center">
              <button type="button" class="btn btn-default btn-lg" style="background-color:black; color:white">
                Get <strong>REngine <span style="color:lightseagreen">9 </span>PRO</strong>
              </button>
            </div>
          </div>
          <div class="col-md-6"><h3>Defining <b>OMNIPRESENCE</b></h3>
            <p style="font-size:18px">When we look for errors, we look everywhere, and we mean Every. Single. Where. Guaranteed by our industry defining professionals at <i>Team Nine</i>.</p>
          </div>
        </div>

      </div> <!-- END HOME -->

      <div id="about" class="tab-pane jumbotron">
        <!--div id="curly" style="display:none;cursor:pointer;" onclick="$(this).hide();$('#team-container').show();"><img style="width:100%;height:auto;" src="/team/images/curly.gif" alt="Strike 3 Curly.."></div-->
        <div id="team-container">
          <h2>Meet Team Nine</h2>
          <span style="text-align:left; margin:0">Click to know more.</span>
          <section class="members"> 
          <div class="members" id="div-jessica"><header class="members"><h3>Jessica</h3></header><article class="members"><img  src="/team/images/jessica.jpg" data-click=".jessica-data" class="img-circle members" alt="Jessica"></article></div>
          <div class="members" id="div-rick"><header class="members"><h3>Rick</h3></header><article class="members"><img  src="/team/images/rick.gif" data-click=".rick-data" class="img-circle members" alt="Rick"></article></div>
          <div class="members" id="div-rolando"><header class="members"><h3>Rolando</h3></header><article class="members"><img  src="/team/images/ceo.gif" data-click=".rolando-data" class="img-circle members" alt="Rolando"></article></div>
          <div class="members" id="div-rosheni"><header class="members"><h3>Rosheni</h3></header><article class="members"><img src="/team/images/rosha.jpg" data-click=".rosheni-data" class="img-circle members" alt="Rosheni"></article></div>
          <div class="members" id="div-steve"><header class="members"><h3>Steve</h3></header><article class="members"><img  src="/team/images/steve.jpg" data-click=".steve-data" class="img-circle members" alt="Steve"></article></div></section>

          <div class="row data jessica-data" >
            <div class="col-lg-4">
              <h4><b>Biography</b></h4>
              <p class="text-danger"></p>
              Miss Jessica grew up in the swamps of Louisiana, where she was much admired for the wide webbing of her feet. She suffered a gunshot injury during hunting seasons to her left wing, and was thus prevented from partaking in her species annual migratory flight. She spent that winter in hiding, passing the time writing this memoir. 
            </div>
            <div class="col-lg-4">
              <h4><b>Favorite Quote</b></h4>
              "Meep." - Anonymous
            </div>
            <div class="col-lg-4">
              <h4><b>Contact</b></h4>
              <a href="mailto:jtv009@ucsd.edu">jtv009@ucsd.edu</a>
            </div>
          </div>     

          <div class="row data rick-data">
            <div class="col-lg-4">
              <h4><b>Biography</b></h4>
              <p class="text-danger"></p>
              At the beginning of the Second World War, Richard joined the Royal Canadian Artillery. He was commissioned a lieutenant in the 13th Field Artillery Regiment of the 3rd Canadian Infantry Division. Richard went to England in 1940 for training. His first combat was the invasion of Normandy at Juno Beach on D-Day. Shooting two snipers, Richard led his men to higher ground through a field of anti-tank mines, where they took defensive positions for the night. Crossing between command posts at 11:30 that night, Richard was hit by six rounds fired from a Bren gun by a nervous Canadian sentry: four in his leg, one in the chest, and one through his right middle finger. The bullet to his chest was stopped by a silver cigarette case given to him by his brother. His right middle finger had to be amputated, something he would conceal during his career as an actor.
            </div>
            <div class="col-lg-4">
              <h4><b>Favorite Quotes</b></h4>
              <!--1. <a class="ignoreme" style="cursor:pointer;" onclick="$('#team-container').hide();$('#curly').toggle(300);">"Strike 3 Curly"</a>
              <br><br-->1. "I am God's vessel. But my greatest pain in life is that I will never be able to see myself perform live."<br><em>- Kanye West</em>

            </div>
            <div class="col-lg-4">
              <h4><b>Contact</b></h4>
              <a href="mailto:richard.allan.b@gmail.com">richard.allan.b@gmail.com</a>
            </div>
          </div>

          <div class="row data rolando-data">
            <div class="col-lg-4">
              <h4><b>Biography</b></h4>
              <p class="text-danger"></p>
              Chief Executive Officer at Team Nine Inc. that's why he's in the middle.
            </div>
            <div class="col-lg-4">
              <h4><b>Favorite Quote</b></h4>
              "If that makes any sense to you, you have a big problem." - C. Durance
            </div>
            <div class="col-lg-4">
              <h4><b>Contact</b></h4>
              <a href="mailto:rcheungw@ucsd.ed">rcheungw@ucsd.edu</a>
            </div>
          </div>

          <div class="row data rosheni-data">
            <div class="col-lg-4">
              <h4><b>Biography</b></h4>
              <p class="text-danger"></p>
              Once upon a time, in a far far away land, where buildings were made out of glass, streets out of iced pineapple, cars out of strawberries, the sky out of cotton candy, and air out of oxygen and the fragrance of melon, Rosha was born. She grew up to love macarons, coding, fruits, sports cars, giving pep talks, UCSD, extreme-sports, and tall buildings. She then became a CEO of her own company which produced software for people to learn how to create the most amazing websites using fruits, Olympic althete in swimming, running, skiing by eating fruits, architect of the most awesome buildings in which the worlds' best web site software was developed from fruits, and then created a school that taught how to create the greatest websites, (the school was made of fruit, too). She really loved fruits, watermelon, strawberries, lalalaberries, cutiepatootieoranges, etc. She hopes you enjoyed her biography which is a little biography because she still has more amazing things to do, and more fruits to discover. 
            </div>
            <div class="col-lg-4">
              <h4><b>Favorite Quote</b></h4>
              "There are little pieces of dreams that we dream looking at the stars and then suddenly all those dreams become an even bigger dream and then the collection of all these big dreams becomes a gigantic dream, and then like the big bang, all of the pieces of this huge dream disperse into the world like oxygen and hydrogen, and suddenly, you see little pieces of your dreams in your world, in your life. And that is reality. The big bang is your hard work. And if you're going to be a dreamer, be the best one. That is all." - Anonymous
            </div>
            <div class="col-lg-4">
              <h4><b>Contact</b></h4>
              <a href="mailto:rsmalik">rsmalik@ucsd.edu</a>
            </div>
          </div>

          <div class="row data steve-data">
            <div class="col-lg-4">
              <h4><b>Biography</b></h4>
              <p class="text-danger"></p>
              Steve was an actor, action choreographer, comedian, director, producer, martial artist, screenwriter, entrepreneur, singer, and stunt performer. In his movies, he was known for his acrobatic fighting style, comic timing, use of improvised weapons, and innovative stunts. He was one of the few actors to have performed all of his film stunts. And now he goes to UCSD.
            </div>
            <div class="col-lg-4">
              <h4><b>Favorite Quote</b></h4>
              "Everybody can be a superman, but nobody can be Steve Dai." - Steve Dai
            </div>
            <div class="col-lg-4">
              <h4><b>Contact</b></h4>
              <a href="mailto:l1dai@ucsd.edu">l1dai@ucsd.edu</a>
            </div>
          </div>

        </div></div>

      <div id="documentation" class="tab-pane jumbotron">
        <h2>Documentation</h2><br>
        <p class="lead">Homework 3</p>
        <!--button type="button" onclick="alert('Press OK and check the developer Console. That error was logged into our database'); abcdefg();" class="btn btn-danger">Trigger a JS Error</button-->
        <div class="well well-lg" style="margin-top:40px;">
          <h3>Input Security:</h3>

          <h4>Javascript</h4>
          <ol>
            <li>All user input validated in Javascript using known Regex.</li>
            <li>When applicable we communicate with PHP using AJAX to validate input (when determining if the entry is unique).</li>
            <li>Accompanied by CSS to give visual representation of valid (green & glowing) vs. non-valid (red glow) input.</li>
          </ol>
          
          <h4>PHP</h4>
          <ol>
            <li>Instituted layered abstraction when servicing requests.</li>
            <li value="1" style="list-style:none"><ul><li>All PHP actions divided into 3 parts. Displays, Actors, and Database Interface.</li></ul></li>
            <li value="1" style="list-style:none"><ul><li>Security instituted at all levels.</li></ul></li>
            <li>All user input validated in PHP using a known Regex.</li>
            <li value="2" style="list-style:none"><ul><li>This validation is ran at all levels of abstraction for redundancy.</li></ul></li>
            <li>All actors check against site generated tokens.</li>
            <li>All fields validated and checked against expected input per request by actors.</li>
            <li>When applicable fields checked against database for uniqueness.</li>
            <li>Secure hashing used for practically all actions & database access.</li></ol>
          
          <h4>MySQL</h4>
          <ol>
            <li>Foreign Key and Database Integrity instituted at database level.</li>
            <li>All queries that alter data guarantee valid input through foreign key use, and intermediate queries checking the validity of input.</li>
            <li>All database modification done through unique ID Hashing.</li>
            <li>Guaranteed fail-safes against false-positives.</li>
          </ol>
          <br>
          <h3>Features:</h3>
          <h4>User Accounts</h4>
          <ol>
            <li>Basic user Sign Up.</li>
            <li value="1" style="list-style:none"><ul><li>User accounts validated & activated through E-Mail. CHECK YOUR SPAM FOLDER!</li></ul></li>
            <li>Project user Sign Up.</li>
            <li value="2" style="list-style:none"><ul><li>Refered to a project you are capable of signing up with a valid Referral ID and Project ID. When this is done the activation is waived and you are automatically added to the project you were referred to.</li></ul></li>
            <li>Account recovery through E-Mail.</li>
            <li value="3" style="list-style:none"><ul><li>This is done through secure hash handshakes.</li></ul></li>
            <li>Basic user Login.</li></ol>
          <h4>Projects</h4>
          <ol>
            <li>Creating Projects</li>
            <li value="1" style="list-style:none"><ul><li>You can create and name a project. You can share errors with other users within that project.</li></ul></li>
            <li>Add users to your Projects</li>
            <li value="2" style="list-style:none"><ul><li>You can add users to your project if their account exists, or you can refer them using their email address.</li></ul></li>
            <li>Leaving a Project</li>
            <li value="3" style="list-style:none"><ul><li>Suppose you're tired of the people in your project. Then just leave!</li></ul></li>
            <li>Remove users from your Project</li>
            <li value="3" style="list-style:none"><ul><li>If you made the project, you are capable of removing any account (other than your own).</li></ul></li>
            <li>Disband a Project</li>
            <li value="5" style="list-style:none"><ul><li>Disband a project and remove all users from the project.</li></ul></li></ol>
           <h4>Errors</h4>
          <ol>
            <li>All Javascript errors are caught and submitted to our database.</li>
            <li value="1" style="list-style:none"><ul><li>These errors include items such as source file, line number, error type, and severity.</li></ul></li>
            <li>When logged in, these errors belong to your account and are no longer anonymous.</li>
            <li value="2" style="list-style:none"><ul><li>These errors can be shared with all projects they may belong to at the current moment.</li></ul></li>
            <li>Considerations made for logging other types of errors such as privileged MySQL or PHP error collection when dealing with fraudulent requests/attempts.</li></ol>
            
        </div>
        <p class="lead">Homework 1: Compression Summary</p>
        <b>Web Page Compressed:</b> Yes<br>
        <b>Compression Type:</b> gzip<br>
        <b>Size, Markup (bytes):</b> 2,312<br>
        <b>Size, Compressed (bytes):</b> 971<br>
        <b>Compression:</b> 58.0%<br>
        <div class="well well-lg" style="margin-top:40px;">
          <h3>Security Precautions:</h3>

          <h4>MySQL</h4>
          <ol>
            <li>Root renamed to something else. Password applied.</li>
            <li>Connections only allowed from localhost for root.</li>
            <li>Created single user account that only has control over a single database.</li>
            <li value="3" style="list-style:none"><ul><li>Has remote access allowed, but only during development & testing. This will be changed to localhost only after the project is complete. MySQL will then be permanently binded to localhost allowing no outside connections.</li></ul></li>
            <li>Turned off file control from MySQL.</li></ol>

          <h4>Database Security</h4>
          <ol>
            <li>We are using prepared statements (fighting SQL Injection)</li>
            <li value="1" style="list-style:none"><ul><li>There’s currently no new entry generation from our site, but we will be sanitizing of all user input to avoid XSS (or cross site scripting).</li></ul></li>
            <li>All password entries are stored as Blowfish encrypted hashes. The password is never physically passed outside of the php session. We rely entirely on hashes and the comparison of the user’s entered password.</li>
            <li>Our user entries have admin rights associated with them (currently the only accounts available are admins)</li>
            <li>The MySQL connection credentials are stored outside document root and are defined  in PHP - no physical exposure of MySQL credentials.</li>
            <li>MySQL connections are treated as objects, and the code for it is outside document root. So the MySQL connection routines are not accessible by users.</li>
            <li>The encryption is also done outside of document root so the salt used is not exposed.</li>
            <li>Connections closed immediately after use.</li></ol>

          <h4>SSH</h4>
          <ol>
            <li>Root is not allowed remote login & password was changed.</li>
            <li>Accounts created for each group member, “user” account was subsequently deleted.</li>
            <li>SSH Jailing for failing 10 login attempts (30 minute IP ban)</li></ol>

          <h4>Apache</h4>
          <ol>
            <li>Access denied on everything outside of our viewable documents.</li>
            <li>Hid verbose Apache headers</li>
            <li>Used pretty url’s to hide php extensions</li>
            <li>Using logging and Awstats to display on admin page</li>
            <li>Put authentication requirements on extremely sensitive php scripts (such as deploy, awstats, phpinfo). The login credentials are the same that are used for accessing the team page.</li>
            <!--li value="5" style="list-style:none"><ul><li>The best solution would be using SSL. We created an SSL cert and enabled the SSL Engine, but our site isn’t “third party verified,” in which case we had to drop the SSL cert.</li></ul></li-->
            <li>Using SSL with High Grade 128 AES Encrypted Key (*not third party trusted)</li>
          </ol>

          <h4>PHP</h4>
          <ol>
            <li>Hid PHP information in header</li>
            <li>Turned on error logging</li>
            <li>Session encryption using SHA512</li>
            <li>Session encryption randomness using /dev/urandom</li>
            <li>Using randomly generated session ID</li>
            <li>Using session tokens generated from Server tick count as validation during login attempts</li>
          </ol>

          <h4>Logging</h4>
          <ol>
            <li>Used AWStats for a log analysis report</li>
            <li>Access to report denied without proper login information</li>
            <li>Report run every nine minutes</li>
          </ol></div>
      </div>
        
      <?php include("$_SERVER[DOCUMENT_ROOT]/jrrrs/footer.html"); ?>
      
    </div> <!-- /container -->

    <!-- Scripts -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="/team/bootstrap/js/bootstrap.min.js"></script>
    <script src="//code.highcharts.com/highcharts.js"></script>
    <script src="//code.highcharts.com/modules/exporting.js"></script>
    <script src="/team/js/scripts.min.js"></script>
    <?php include("$_SERVER[DOCUMENT_ROOT]/jrrrs/javascripts.php"); ?> 
    <script>
           
      /* Doesn't work. Fix.
      $('#login').submit(function(event) {
        logIn();
        event.preventDefault(); // This stops the form from refreshing the page VERY IMPORTANT
      });
        
        function logIn() {
        // Fill our request with data from our form
        var formData = {
          'user' 			: $('input[name=user]').val(),
          'password' 	: $('input[name=password]').val(),
        };
        
        // Create our ajax request
        var request = $.ajax({
          url: "/team/php/login.php",
          type: "POST", // Simple HTTP protocol
          data: formData, // Filling in our POSTDATA
          dataType: "html"
        });

        //If we're done & successful we print out any messages the php code echos out
        request.done(function( msg ) {
          $( "#response-container" ).html( msg ); 
        });

        //If there's some sort of drastic problem, throw an error.
        request.fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
      }*/
      
    // Tabbing script
    $(document).ready(function () {

      // cache the id
      var navbox = $('#the-navbar');

      // activate tab on click
      navbox.on('click', 'a', function (e) {
        var $this = $(this);
        
        // prevent the Default behavior
        e.preventDefault();
        // send the hash to the address bar
        window.location.hash = $this.attr('href');
        // activate the clicked tab

        $this.tab('show');
      });

      // will show tab based on hash
      function refreshHash() {
        navbox.find('a[href="'+window.location.hash+'"]').tab('show');
      }

      // show tab if hash changes in address bar
      $(window).bind('hashchange', refreshHash);

      // read has from address bar and show it
      if(window.location.hash) {
        // show tab on load
        refreshHash();
      }
    
    });
    </script>



  </body>
</html>

