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
            $f->edit_car_item($_POST["id"], $_POST["titre"], $_POST["slogan"], $_POST["ord"], $Filename);
        } else {
            $f->edit_car_item($_POST["id"], $_POST["titre"], $_POST["slogan"], $_POST["ord"]);
        }
        header("location:../carousel.php");

    }


}
else if ($_POST["form"] == 'editAbout') {

    if (isset($_FILES["img"])) {

        $target = "../../img/";
        $target = $target . basename($_FILES['img']['name']);
        $Filename = basename($_FILES['img']['name']);
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
            $f->edit_About_item($_POST["lang"], $_POST["intro"], $_POST["p"], $_POST["vals"], $_POST["conc"], $Filename);
        } else {
            $f->edit_About_item($_POST["lang"], $_POST["intro"], $_POST["p"], $_POST["vals"], $_POST["conc"]);
        }
        header("location:../home.php");

    }


}
else if ($_POST["form"] == 'editMisVal') {

    if (isset($_FILES["img_mis"]) OR  isset($_FILES["img_vis"])) {


        $target = "../../img/";
        $target2 = "../../img/";
        $target = $target . basename($_FILES['img_mis']['name']);
        $target2 = $target2 . basename($_FILES['img_vis']['name']);
        $Filename = basename($_FILES['img_mis']['name']);
        $Filename2 = basename($_FILES['img_vis']['name']);



echo basename($_FILES['img_mis']['name']);
echo basename($_FILES['img_vis']['name']);

        if ((basename($_FILES['img_mis']['name'])=="") and (basename($_FILES['img_vis']['name'])!=""))
        {

            move_uploaded_file($_FILES['img_vis']['tmp_name'],$target2);
            $f->edit_MisVis_item($_POST["lang"], $_POST["mis"], $_POST["vis"],"",$Filename2);
        }
        else if ((basename($_FILES['img_mis']['name'])!="") and (basename($_FILES['img_vis']['name'])==""))
        {
            move_uploaded_file($_FILES['img_mis']['tmp_name'],$target);

            $f->edit_MisVis_item($_POST["lang"], $_POST["mis"], $_POST["vis"],$Filename);
        }

       else  if (    (basename($_FILES['img_mis']['name'])!="") and (basename($_FILES['img_vis']['name'])!="")  )
        {
            move_uploaded_file($_FILES['img_vis']['tmp_name'],$target2);
            move_uploaded_file($_FILES['img_mis']['tmp_name'],$target);
            $f->edit_MisVis_item($_POST["lang"], $_POST["mis"], $_POST["vis"],$Filename ,$Filename2);
        }

        else {
            $f->edit_MisVis_item($_POST["lang"], $_POST["mis"], $_POST["vis"]);
        }
    header("location:../home.php");


    }


}


else if($_POST["form"]=='editVal')
{
    $f->edit_act_item($_POST["Lang"],$_POST["titre1"],$_POST["val"],$_POST["titre2"],$_POST["val2"],$_POST["titre3"],$_POST["val3"]);
    header("location:../home.php");
}

else if($_POST["form"]=='editCor')
{
    $f->edit_Cor_item($_POST["lang"],$_POST["tel"],$_POST["email"],$_POST["adresse"],$_POST["insta"],$_POST["twitter"],$_POST["linkedin"],$_POST["fb"]);
   header("location:../contactdet.php");
}






