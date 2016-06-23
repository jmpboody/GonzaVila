<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Distribuidora Gonzavila</title>

    <!-- Bootstrap -->
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,700,400italic,300,300italic,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/mystyles.css" rel="stylesheet">

    
  </head>
  <body id="register">

     <section class="container">
     
          <div class="content row">
             <?php include "_/components/php/header.php"; ?>
             
            <section class="main col col-lg-8">
              <?php include "_/components/php/articulo-registrationform.php"; ?>
              
            </section><!--main-->

            <section class="sidebar col col-lg-4">
              <?php include "_/components/php/section-register.php"; ?>
              <?php include "_/components/php/section-lastyear.php"; ?>
              <?php include "_/components/php/section-aboutartists.php"; ?>
              <?php include "_/components/php/section-acordion.php"; ?>
            </section><!--sidebar-->
            
          </div><!--content-->
            <?php include "_/components/php/footer.php"; ?>
    </section><!--container-->

    
    
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>