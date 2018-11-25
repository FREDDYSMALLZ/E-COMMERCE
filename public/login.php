<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
    <div class="container">

      <header>
            <h1 class="text-center">Login</h1>
            <h2 class="text-center bg-warning"><?php display_message(); ?></h2>
        <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post" enctype="multipart/form-data">
                    
                    <?php
                    if(isset($_POST['submit'])){

                        $username = escape_string($_POST['username']);
                        $password = escape_string($_POST['password']);

                        $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password }' ");
                        confirm($query);

                        if(mysqli_num_rows($query) == 0) {

                            set_message("Invalid Username or Password Combination Entered");
                            redirect("login.php");


                        } else {

                            $_SESSION['username'] = $username;
                            redirect("admin/index.php");

                        }
                    }

                    ?>

                <div class="form-group"><label for="">
                    username<input type="text" name="username" class="form-control"></label>
                </div>
                 <div class="form-group"><label for="password">
                    Password<input type="password" name="password" class="form-control"></label>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" >
                </div>
                <p style="font-size:18px; color:#161707">
                    New Customer ? <a href="registration.php" style="color: #1670db;">Sign up</a>
                </p>

            </form>
        </div>  


    </header>


        </div>

   <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>