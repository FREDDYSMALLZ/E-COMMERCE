<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Page - E-commerce</title>

    <!-- Bootstrap Core CSS -->
    <link href="Includes/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="Includes/css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include("Includes/Front/Top_NavBar.php");?>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

      <header>
            <h1 class="text-center">La-Boutique Login form</h1>
        <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post" enctype="multipart/form-data">
                <div class="form-group"><label for="">
                    Username<input type="text" name="username" class="form-control"></label>
                </div>
                 <div class="form-group"><label for="password">
                    Password<input type="text" name="password" class="form-control"></label>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" >

                    <p style="font-size:18px; color:#020607">
                        New Customer? <a href="register.php" style="color: #3c5adb;">Sign Up</a>
                    </p>
                </div>
            </form>
        </div>  


    </header>


        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <?php include("Includes/Back/Footer.php");?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="Includes/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="Includes/js/bootstrap.min.js"></script>

</body>

</html>
