<?php
  $page = 'Customers';
?>
<!doctype html>
<html lang="en">
 <?php
 include 'component/head.php';
 ?>
  <body>
 <?php
 include 'component/nav.php';
 ?>   

<div class="container-fluid">
  <div class="row">
    <?php
      include 'component/sidebar.php';
      ?>  

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Customers</h1>        
      </div>
      <a href="products-form.php" class="btn btn-success text-white mb-3 float-right"><i class="fas fa-plus-square"></i> New Product</a>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Customer Code</th>
              <th>Customer Name</th>             
              <th>Area Code</th>
              <th>Customer Phone</th>
              <th>Customer Balance</th>
            </tr>
          </thead>
          <tbody>
          <?php
            include 'functions/products.php';
            $customers = getAllCustomers(); //call getAllProducts function
            //loop all products and display
            foreach($customers as $customers){           
          ?>
            <tr>
              <td>1</td>
              <td><?=$customers['cus_code']?></td>
              <td><?=$customers['CustomerName']?></td>
              <td><?=$customers['cus_areacode']?></td>
              <td><?=$customers['cus_phone']?></td>
              <td><?=$customers['cus_balance']?></td>
              <td >
                <div class="btn-group btn-group-toggle" data-toggle="buttons">                  
                  <label class="btn btn-primary btn-sm">
                    <a href="" class="text-white"><i class="fas fa-pen"></i></a>
                  </label>
                  <label class="btn btn-danger btn-sm">
                    <a href="products/delete.php?id=<?=$orders['inv_number']?>" class="text-white"><i class="fas fa-trash"></i></a>
                  </label>
                </div>
              </td>
            </tr>
          <?php  } ?>      
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="js/dashboard.js"></script>
  </body>
</html>