
<?php require "../includes/header.php" ?>
<?php require "../config/config.php" ?>

<?php
$products = $conn->query("SELECT * FROM cart WHERE user_id='$_SESSION[user_id]'");
$products ->execute();

$allproducts = $products->fetchALL(PDO::FETCH_OBJ);



// if (isset($_GET['id'])) {
//   $id = $_GET['id'];
//   //checking for product in cart
//   if (isset($_SESSION['user_id'])) {
//     $select = $conn->query("SELECT * FROM cart WHERE pro_id ='$id' AND user_id='$_SESSION[user_id]'");
//     $select->execute();
//   }
//   //getting data for every product
//   $row = $conn->query("SELECT * FROM Cart WHERE status=1 AND id='$id'");
//   $row->execute();



// }


?>
<div class="container">
  <div class="row d-flex justify-content-center align-items-center h-100 mt-5 mt-5">
    <div class="col-12">
      <div class="card card-registration card-registration-2" style="border-radius: 15px;">
        <div class="card-body p-0">
          <div class="row g-0">
            <div class="col-lg-8">
              <div class="p-5">
                <div class="d-flex justify-content-between align-items-center mb-5">
                  <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                </div>


                <table class="table" height="190">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Image</th>
                      <th scope="col">Name</th>
                      <th scope="col">Price</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Total Price</th>
                      <th scope="col"><a href="#" class="btn btn-danger text-white">Clear</a></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($allproducts as $product): ?>
                    <th class="mb-4">
                      <th scope="row" ><?php echo $product->pro_name ?></th>

                  </tbody>
                </table>
                <a href="#" class="btn btn-success text-white"><i class="fas fa-arrow-left"></i> Continue Shopping</a>
              </div>
            </div>
            <div class="col-lg-4 bg-grey">
              <div class="p-5">
                <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                <hr class="my-4">



                <div class="d-flex justify-content-between mb-5">
                  <h5 class="text-uppercase">Total price</h5>
                  <h5 class="full_price"></h5>
                </div>
                <button type="button" class="btn btn-dark btn-block btn-lg"
                  data-mdb-ripple-color="dark">Checkout</button>
                  <?php endforeach ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>










<?php require "../includes/footer.php" ?>
<script>
  $(document).ready(function () {


    $(".pro_amount").mouseup(function () {

      var $el = $(this).closest('tr');



      var pro_amount = $el.find(".pro_amount").val();
      var pro_price = $el.find(".pro_price").html();

      pro_price = Number(pro_price.split('$').join('').trim());


      var total = pro_amount * pro_price;
      $el.find(".total_price").html("");

      $el.find(".total_price").append(total + '$');

      //   $(".btn-update").on('click', function(e) {

      //       var id = $(this).val();


      //       $.ajax({
      //         type: "POST",
      //         url: "update-item.php",
      //         data: {
      //           update: "update",
      //           id: id,
      //           product_amount: pro_amount
      //         },

      //         success: function() {
      //          // alert("done");
      //           reload();
      //         }
      //       })
      //     });


      fetch();
    });

    fetch();

    function fetch() {

      setInterval(function () {
        var sum = 0.0;
        $('.total_price').each(function () {
          sum += parseFloat($(this).text());
        });

        full_price = Number(total.split('$').join('').trim());


        $(".full_price").html(sum + "$");
      }, 4000);
    }

    // function reload() {


    // $("body").load("cart.php")

    // }
  });
</script>