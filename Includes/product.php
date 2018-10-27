
<?php include_once('server.php') ?>
<?php include_once('db.php') ?>

<?php
$sql = "SELECT * FROM products;";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows( $result);
if ( $resultCheck > 0){
    while ($row = mysqli_fetch_assoc($result)){
$product = <<<DELIMETER
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">{$row['product_price']}</h4>
                            <h4><a href="product.html">First Product</a>
                            </h4>
                            <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                        </div>
                        

                    </div>
                </div>

DELIMETER;
echo $product;
  }
  }
