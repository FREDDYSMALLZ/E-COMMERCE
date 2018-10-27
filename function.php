<?php
//Redirection purposes
function redirect($location){
    header("Location: $location");
}
//mysqli_query
function query($sql){
    global $db;
    return mysqli_query($db, $sql);
}

//Confirm the result from the database
function confirm($resultCheck){
    global $db;

    if (!$resultCheck > 0){
        die("The Query used failed". mysqli_error($db));
    }
}
//Prevent sql injection to the database
function escape_string($string){
    global $db;
    return mysqli_real_escape_string($db, $string);

}
//Fetch the result from the database
function fetch_array($result){
    return mysqli_fetch_assoc($result);
}
