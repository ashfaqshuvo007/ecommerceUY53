<?php include_once 'partials/header.php'; ?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 mx-auto mt-4 mb-5">
            <!--login form-->
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input name="username" id="username" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input name="password" id="password" type="password" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Login</button>
                    <a href="register.php" class="btn btn-info">Register</a>
                </div>
            </form>
        </div>    



    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php include_once 'partials/footer.php'; ?>  
