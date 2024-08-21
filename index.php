<?php require "includes/header.php"; ?> 
<?php require "config/config.php"; ?> 
<?php


  $rows =$conn-> query("SELECT * FROM products WHERE status =1");
  $rows->execute();
  
  $allRows = $rows->fetchALL(PDO::FETCH_OBJ);

?> 
<div class="row mt-5">
    <?php foreach($allRows as $poduct) :?>
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card" >
                    <img height="213px" class="card-img-top" src="images/<?php echo $poduct->image; ?>">
                    <div class="card-body" >
                        <h5 class="d-inline"><b><?php echo $poduct->name; ?></b> </h5>
                        <h5 class="d-inline"><div class="text-muted d-inline">($<?php echo $poduct->price; ?>/item)</div></h5>
                        <p><?php echo  substr($poduct->description, 0, 100); ?> </p>
                         <a href="<?php echo APPURL; ?>/shopping/single.php?id=<?php echo $poduct->id; ?>" class="btn btn-primary w-100 rounded my-2"> More <i class="fas fa-arrow-right"></i> </a>      
     
                    </div>
                </div>
            </div>
            <br>
            <?php endforeach; ?>


         <?php require "includes/footer.php"; ?>