#!/usr/bin/perl
print "Content-type: text/html \n\n";
print "<html><head><title>Hello!</title>";
print "</head><body bgcolor='yellow'>\n";
print "<h1>Hello from CGI</h1>\n";
print "</body>\n</html>";



#<!DOCTYPE html>
#<html lang="en">
#  <head>
#    <meta charset="utf-8">
 
#    <title>Into Nine</title>

#    <!-- Bootstrap core CSS -->
#    <link href="/team/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
#    <style>
#      .container{
#      max-width: 400px;
#      min-width: 200px;
#      }
      
#      html{
#       height:100%;
#       min-height:100%;
#     }
#    body{
#       min-height:100%;
#     }


#      body{
#       background: url('/team/images/wp.jpg') no-repeat center center fixed; 
#        -webkit-background-size: cover;
#        -moz-background-size: cover;
#        -o-background-size: cover;
#        background-size: cover;
#      }
#      .container{
#        background-color:rgba(255,255,255,0.85);
#        padding:30px;
#        border-radius: 10px;
#        box-shadow: 0 0 70px black;
#        display:none;
#      }
#      input {
#        margin-top: 5px; 
#        margin-bottom:5px;
#      }
#      h2{
#        margin-top:0;
#      }
#      .outer {
#          display: table;
#          position: absolute;
#          height: 100%;
#          width: 100%;
#      }

#      .middle {
#          display: table-cell;
#          vertical-align: middle;
#      }
#    </style>
  
#  </head>

#  <body>
#    <div class="outer">
#    <div class="middle">
#   <div class="container">

#      <form class="form-signin" name="login" id="signin" role="form" method="post" action="/team/php/login.php">
 #       <h2 class="form-signin-heading">Please sign in</h2>
#        <input name="user" type="text" class="form-control" placeholder="Username" required autofocus>
#        <input name="password" type="password" class="form-control" placeholder="Password" required>
#        <input type="hidden" name="token" value="<?php echo $newToken; ?>">
#        <div class="checkbox" style="margin:0;">
#          <!--label>
#            <input type="checkbox" value="remember-me"> Remember me
#          </label-->
#        </div>
#        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
#      </form>
#
#    </div> <!-- /container -->
#    </div>
#    </div>

#    <!-- Bootstrap core JavaScript
#    ================================================== -->
#    <!-- Placed at the end of the document so the pages load faster -->
#    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
#    <!--script src="/team/js/sha512.js"></script-->
 #   <script>
#      $(document).ready(function() {
#        $(".container").fadeIn(800);
#      });
#     /* $("form.form-signin").submit(function(event){
#        
  #      login(document.getElementById("signin"), $("input:password"));
 #       
#      });
#      
#      function login(form, pw){
#        var password = document.createElement("input");
# 
#        // Add the new element to our form. 
#        form.appendChild(password);
#        password.name = "password";
#        password.type = "hidden";
#        password.value = hex_sha512(pw.val());
#
#        // Make sure the plaintext password doesnt get sent. 
#        //alert (password.value);
#        // Finally submit the form. 
#        //form.submit();
#      }*/
#    </script>
#  </body>
#</html>
