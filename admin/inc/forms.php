<?php
include "fonctions.php";
$f=new fonctions();
if($_POST["form"]=='addCar')
{
    if (isset($_POST["titre"])and isset($_POST["slogan"])and isset($_POST["ord"]))
    {
        $target = "../../img/slides/";
        $target = $target . basename( $_FILES['img']['name']);
        $Filename=basename( $_FILES['img']['name']);
        if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
        {
            $f->add_car_item($_POST["titre"],$_POST["slogan"],$_POST["ord"],$Filename);
        }
        header("location:../carousel.php");
    }
}
else if($_POST["form"]=='delCar')
{
    if (isset($_POST["id"]))
    {
        $f->del_car_item($_POST["id"]);
        header("location:../carousel.php");
    }
}
else if($_POST["form"]=='editCar') {

    if (isset($_FILES["img"])) {
        echo "salem";
        $target = "../../img/slides/";
        $target = $target . basename($_FILES['img']['name']);
        $Filename = basename($_FILES['img']['name']);
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
            $f->edit_car_item($_POST["id"],$_POST["titre"], $_POST["slogan"],$_POST["ord"], $Filename);
        }
        else
        {
            $f->edit_car_item($_POST["id"],$_POST["titre"], $_POST["slogan"],$_POST["ord"]);
        }
        header("location:../carousel.php");

    }
}