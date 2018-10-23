<?php include_once('server.php') ?>
<?php include_once('db.php') ?>
<div class="col-md-3">
    <p class="lead">Boutique</p>
    <div class="list-group">

        <?php
        $sql = "SELECT * FROM users;";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows( $result);
        if ( $resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo "<a href='' class='list-group-item'>{$row['FirstName']}</a>";

            }
        }
        ?>
    </div>
</div>