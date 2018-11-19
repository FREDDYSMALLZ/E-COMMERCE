<!--
Project Title: E-Commerce
Version: 1.4
Authors: Fredrick Ondieki, Michael Weaver
Date Updated: 11/11/2018
Description:
-->
<?php require_once("config.php"); ?>
<?php include("Includes/Front/Header.php") ?>
<?php
if (isset($_GET['add'])) {

    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']) . " ");
    confirm($query);

    while ($row = fetch_array($query)) {

        if ($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]) {

            $_SESSION['product_' . $_GET['add']] += 1;
            redirect("checkout.php");

        } else {

            set_message("We only have " . $row['product_quantity'] . " " . "{$row['product_title']}" . " available");
            redirect("checkout.php");

        }
    }

    if (isset($_GET['remove'])) {

        $_SESSION['product_' . $_GET['remove']]--;

        if ($_SESSION['product_' . $_GET['remove']] < 1) {

            unset($_SESSION['item_total']);
            unset($_SESSION['item_quantity']);
            redirect("checkout.php");

        } else {

            redirect("checkout.php");

        }

    }

    if (isset($_GET['delete'])) {

        $_SESSION['product_' . $_GET['delete']] = '0';
        unset($_SESSION['item_total']);
        unset($_SESSION['item_quantity']);

        redirect("checkout.php");

    }

}