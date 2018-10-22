<?php
include_once 'Includes/dbh.inc.php';
?>
<div class="col-md-3">
    <p class="lead">Boutique</p>
    <div class="list-group">

        <?php
        $sql = "SELECT * FROM categories;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows( $result);

        if ( $resultCheck > 0){

            while ($row = mysqli_fetch_assoc($result)){

                echo "<a href='' class='list-group-item'>{$row['category_title']}</a>";

            }

        }

        ?>
    </div>
</div>