<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>

<?php

if (!isset($_SERVER['HTTP_REFERER'])) {
  header("location: cart.php");
  exit;
}


if (!isset($_SESSION['username'])) {
  header("location: " . APPURL . "");
}
?>

<!-- Heading -->
<h2 class="my-5 h2 text-center">Checkout</h2>

<!--Grid row-->
<div class="row d-flex justify-content-center align-items-center h-100 mt-5 mt-5">

  <!--Grid column-->
  <div class="col-md-12 mb-4">

    <!--Card-->
    <div class="card">

      <!--Card content-->
      <form class="card-body" method="POST" action="charge.php">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-2">

            <!--firstName-->
            <div class="md-form">
              <label for="firstName" class="">First name</label>

              <input type="text" name="fname" id="firstName" class="form-control">
            </div>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-2">

            <!--lastName-->
            <div class="md-form">
              <label for="lastName" class="">Last name</label>

              <input type="text" name="lname" id="lastName" class="form-control">
            </div>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Username-->
        <div class="md-form mb-5">
          <label for="email" class="">Username</label>

          <input type="text" name="username" class="form-control" placeholder="Username"
            aria-describedby="basic-addon1">
        </div>

        <!--email-->
        <div class="md-form mb-5">
          <label for="email" class="">Email</label>

          <input type="text" name="email" id="email" class="form-control" placeholder="youremail@example.com">
        </div>

        <!--Grid row-->
        <hr class="mb-4">
        <script 
           src="https://checkout.stripe.com/checkout.js" 
           class="stripe-button"
           data-key="pk_test_51Q0Q6p2Mu3rz4WCw32Vk6K6fuMiEqd7lTWNfLGfDPAAKcCmppQtNywyKdH3jnWvJXjru85uBdh7woIdDKcnUKpJj006YpKWhil"
           data-currency="usd"
           data-label="Pay now">
        </script>

      </form>

    </div>

  </div>
</div>
<?php require "../includes/footer.php"; ?>