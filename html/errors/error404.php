<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
 
    <title>404!?</title>

    <!-- Bootstrap core CSS -->
    <link href="/team/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
      .mainj{
        z-index:70;
        box-shadow: 0 0 20px rgba(0,0,0,0.3);
        position: relative;
      }
      
      .errorf{
        padding-bottom: 20px;
      }
      
    </style>
  
  </head>

  <body>
    
    <script>
    </script>
    
    <div class="container">
      <div class="masthead" style="margin-top:20px;">
     
        <!-- Header-->
        <h3 class="text-muted errorf" style="display:table-cell;width:100%;">Team Nine</h3>
        <h6 style="display:table-cell;min-width:300px;text-align:right;">
          <?php
            if(isset($_SESSION['logged'])){
              print ('Welcome ' . '<a href="./php/logout.php">' . $_SESSION["user"] . '</a>');            
            }else{
              print ('<a href="/">Sign in</a>');
            }
          ?>
        </h6>
      </div> <!-- /masthead -->

      <!-- Jumbotron -->
      <div id="landing" class="jumbotron mainj">
        <h1>
          Four Hundred and Four
        </h1>
        <p class="lead">
          You've reached this page as an error. I suggest to go 
          <a href="javascript:history.back()">back</a> 
          <!--
          <a href="../">back</a> 
          -->
          and reroute the path you've taken while discovering this <b>amazing * 9</b> webpage.
        </p>       
      </div>
         
      <!-- Site footer -->
      <div class="footer">
        <p>&copy; Team Nine 2014</p>
      </div>

    </div> <!-- /container -->
  </body>
</html>