<?php
include "config.php";
class fonctions
{
    function getLocationInfoByIp($ip_address = ''){
        if (empty($ip_address)) {
            $client  = @$_SERVER['HTTP_CLIENT_IP'];
            $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
            $server  = @$_SERVER['SERVER_ADDR'];
            $remote  = @$_SERVER['REMOTE_ADDR'];
            if(!empty($client) && filter_var($client, FILTER_VALIDATE_IP)){
                $ip = $client;
            }elseif(!empty($forward) && filter_var($forward, FILTER_VALIDATE_IP)){
                $ip = $forward;
            }elseif(!empty($server) && filter_var($server, FILTER_VALIDATE_IP)){
                $ip = $server;
            }else{
                $ip = $remote;
            }
        } else {
            $ip = $ip_address;
        }

        $ip_data = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=".$ip));
        $result  = ['country'=>'', 'city'=>''];

        if($ip_data && $ip_data['geoplugin_countryCode'] != null){
            $result['country'] = $ip_data['geoplugin_countryCode'];
            $result['city'] = $ip_data['geoplugin_city'];
        }
        return $result;
    }
    function add_car_item($titre,$slogan,$ord,$img)
    {
        $sql="insert into dalice.carousel (titre,slogan,num,image)
                                        values(:tit,:slg,:ord,:img)";

        $db=config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $req->bindValue(':tit',$titre);
            $req->bindValue(':slg',$slogan);
            $req->bindValue(':img',$img);
            $req->bindValue(':ord',$ord);
            $req->execute();
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }
    }
    function get_car_item()
    {
        $sql="select * from dalice.carousel order by num ASC";
        $db=config::getConnexion();
        try
        {
            return $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }

    }

    function get_about_item($lang=null)
    {
        $sql="select * from dalice.aboutus " ;
        if ($lang!=null){
            $sql="select * from dalice.aboutus WHERE lang='$lang'" ;
        }

        $db=config::getConnexion();
        try
        {
            return $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }

    }

    function del_car_item($id )
    {
        $sql="delete from dalice.carousel where id='$id'";
        $db=config::getConnexion();
        try
        {
//            $req=$db->prepare($sql);
//            $req->bindValue(':id',$id);
//            $req->execute();
            $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }
    }
    function edit_car_item($id,$titre=null,$slogan=null,$ord=null,$img=null)
    {
        $sql="update dalice.carousel set titre='$titre', num='$ord',slogan='$slogan',image='$img' where id='$id'";

        if($img=="")
        {
            $sql="update dalice.carousel set titre='$titre', slogan='$slogan', num='$ord' where id='$id'";
        }

        echo $sql;
        $db=config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }
    }
    function edit_About_item($lang,$intro=null,$p=null,$vals=null,$conc=null,$img=null)
    {
        $sql="update dalice.aboutus set intro= :intro, p= :p,vals= :vals,conc= :conc,img= :img where lang='$lang'";

        if($img=="")
        {
            $sql="update dalice.aboutus set intro= :intro, p= :p,vals= :vals,conc= :conc  where lang='$lang'";
        }

        echo $sql;
        $db=config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $req->bindValue(':intro',$intro);
            $req->bindValue(':p',$p);
            $req->bindValue(':vals',$vals);
            $req->bindValue(':conc',$conc);
             if ($img!="")
             {
                 $req->bindValue(':img',$img);
             }
            $req->execute();
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }
    }
    function get_Mis_Vis_item($lang=null)
    {
        $sql="select * from dalice.mis_vis " ;
        if ($lang!=null){
            $sql="select * from dalice.mis_vis WHERE lang='$lang'" ;
        }

        $db=config::getConnexion();
        try
        {
            return $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }

    }


    function edit_MisVis_item($lang,$mis=null,$vis=null,$img_mis=null,$img_vis=null)
    {
        $sql="update dalice.mis_vis set mis= :mis, vis= :vis ,img_mis=:img_mis,img_vis=:img_vis where lang='$lang'";
        echo "1".$img_mis;
        echo"2".$img_vis;
        if(($img_mis=="") and ($img_vis!=""))
        {
            $sql="update dalice.mis_vis set mis= :mis, vis= :vis ,img_vis= :img_vis where lang='$lang'";
        }
        else if (($img_vis=="") and ($img_mis!="") )
        {
            $sql="update dalice.mis_vis set mis= :mis, vis= :vis ,img_mis= :img_mis where lang='$lang'";
        }
        else if (($img_mis=='') and ($img_vis==''))
        {
            $sql="update dalice.mis_vis set mis= :mis, vis= :vis  where lang='$lang'";
        }

        echo $sql;
        $db=config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $req->bindValue(':mis',$mis);
            $req->bindValue(':vis',$vis);


            if (($img_mis!="") and ($img_vis==""))
            {
                echo '1';
                $req->bindValue(':img_mis',$img_mis);
            }
            else if (($img_mis=="") and ($img_vis!=""))
            {
                echo '2';
                $req->bindValue(':img_vis',$img_vis);
            }
            else if (($img_mis!="") and ($img_vis!=""))
            {
                echo '3';
            $req->bindValue(':img_mis', $img_mis);
            $req->bindValue(':img_vis', $img_vis);
        }


            $req->execute();
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }
    }

    function get_act_item($lang=null)
    {
        $sql="select * from dalice.act1 " ;
        if ($lang!=null){
            $sql="select * from dalice.act1 WHERE lang='$lang'" ;
        }

        $db=config::getConnexion();
        try
        {
            return $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }

    }


    function edit_act_item($lang,$titre=null,$val=null,$titre2=null,$val2=null,$titre3=null,$val3=null)
    {
        $sql="update dalice.act1 set titre= :titre, val= :val,titre2= :titre2,val2= :val2,titre3= :titre3 ,val3 = :val3 where lang='$lang'";

        echo $sql;
        $db=config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $req->bindValue(':titre',$titre);
            $req->bindValue(':val',$val);
            $req->bindValue(':titre2',$titre2);
            $req->bindValue(':val2',$val2);
            $req->bindValue(':titre3',$titre3);
            $req->bindValue(':val3',$val3);


            $req->execute();
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }
    }


    function get_Cor_item()
    {
        $sql="select * from dalice.cordonnee " ;

        $db=config::getConnexion();
        try
        {
            return $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }

    }


    function edit_Cor_item($id,$tel=null,$email=null,$adresse=null,$insta=null,$twitter=null,$linkedin=null,$fb=null)
    {
        $sql="update dalice.cordonnee set tel= :tel, email= :email,adresse= :adresse,insta= :insta ,twitter= :twitter ,linkedin = :linkedin ,fb =:fb where id='$id'";

        echo $sql;
        $db=config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $req->bindValue(':tel',$tel);
            $req->bindValue(':email',$email);
            $req->bindValue(':adresse',$adresse);
            $req->bindValue(':insta',$insta);
            $req->bindValue(':twitter',$twitter);
            $req->bindValue(':linkedin',$linkedin);

            $req->bindValue(':fb',$fb);


            $req->execute();
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }
    }

}
