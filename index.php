<?php 
include_once 'partials/header.php';
?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <?php include_once 'partials/sidebar.php';?>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

        <?php include_once 'partials/carousel.php';?>

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt="pro_image"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item One</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-success">Add to Cart</a>
                </div>
              </div>
            </div>    

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  <?php include_once 'partials/footer.php';?>  