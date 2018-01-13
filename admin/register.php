<?php include_once 'partials/header.php'; ?>

<?php

//get the user input
if(isset($_POST['register'])){
   $username =  trim($_POST['username']);
   $email =  trim($_POST['email']);
   $password =  trim($_POST['password']);
   $errors = [];
   $msgs = [];
   //Validate
   if(strlen($username) < 6){
       $errors[] = 'Username cannot be less than 6 characters!';
   }
   if(strlen($password) < 6){
       $errors[] = 'Password cannot be less than 6 characters!';
   }
   if(filter_var($email,FILTER_VALIDATE_EMAIL)){
       $errors[] = 'Invalid Email format!';
   }
//email
//if nor errors , DB upload
//messages the user
   
   
   
}







?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 mx-auto mt-4 mb-5">
            <!--login form-->
            <form action="register.php" method="post">
                
                <?php if(!empty($errors)) {?>
                <div class="alert alert-danger">
                    <?php foreach($errors as $error){?>
                    <p><?php echo $error?></p>
                    <?php }?>
                </div>
                <?php }?>
                <?php if(!empty($msgs)) {?>
                <div class="alert alert-danger">
                    <?php foreach($msgs as $msg){?>
                    <p><?php echo $msg?></p>
                    <?php }?>
                </div>
                <?php }?>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input name="username" id="username" type="text" class="form-control" required="1">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input name="email" id="email" type="text" class="form-control" required="1">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input name="password" id="password" type="password" class="form-control" required="1">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" name="register">Register</button>
                    <a href="index.php" class="btn btn-info">Login</a>
                </div>
            </form>
        </div>    



    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php include_once 'partials/footer.php'; ?>  
