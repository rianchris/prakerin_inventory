<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE-edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <link rel="shortcut icon" href="<?=base_url()?>assets/images/logo.png" type="image/x-icon">

   <title>Login</title>

   <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

   <link href="<?=base_url()?>assets/css/metisMenu.min.css" rel="stylesheet">

   <link href="<?=base_url()?>assets/css/sb-admin-2.css" rel="stylesheet">

   <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 </head>

 <body style="background-color: rgb(244, 240, 230)">

   <div class="container">
     <div class="row">
       <div class="col-md-4 col-md-offset-4">
         <div class="login-panel panel panel-default">
           <div class="panel-heading">
             <h3 class="panel-title">Please Sign In</h3>
           </div>
           <div class="panel-body">
             <!-- <small id="login-empty-input" class="error">
               email or password cannot be empty <br>&nbsp;</small> -->
               <?php if($alert): ?>
                 <small id="login-invalid-input" class="error"> invalid email or password <br> &nbsp;</small>
               <?php endif; ?>

               <form role="form" method="post" onsubmit="return checkEmptyInput();" action="<?=base_url()?>authentication/login/">
                 <fieldset>
                   <div class="form-group">
                     <input class="form-control" id="name" placeholder="E-mail" name="email" type="email" autofocus required>
                   </div>
                   <div class="form-group">
                     <input class="form-control" id="password" placeholder="Passowrd" name="password" type="password" required>
                   </div>
                   <div class="form-group">
                     <small><a href="#" onclick="alert('Please Contact the administrator to reset your password !')">Forgot Password?</a></small>
                   </div>
                   <input id="login-submit" type="submit" value="Login" class="btn btn-lg btn-success btn-block">
                 </fieldset>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>

    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>

    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

    <script src="<?=base_url()?>assets/js/metisMenu.min.js"></script>

    <script src="<?=base_url()?>assets/js/sb-admin-2.js"></script>

    <!-- <script>
      window.onload = hideLoginErrors();
      function hideLoginErrors() {
        $("#login-empty-input").hide();
      }

      function checkEmptyInput() {
        hideLoginErrors();
        $("#login-invalid-input").hide();
        if( $("#email").val() == '' || $("#passowrd").val() == '' ){
          $("#login-empty-input").show();
          return false;
        }
      } -->
    </script>

  </body>
  </html>
