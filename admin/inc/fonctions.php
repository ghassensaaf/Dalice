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
    function get_about_item($lang=null,$aff=1)
    {
        $sql="select * from dalice.aboutus where affi='$aff' order by lang" ;
        if ($lang!=null){
            $sql="select * from dalice.aboutus WHERE lang='$lang' and affi='$aff' order by lang" ;
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

    function get_Mis_Vis_item($lang=null,$aff=1)
    {
        $sql="select * from dalice.mis_vis where aff='$aff' order by lang" ;
        if ($lang!=null){
            $sql="select * from dalice.mis_vis WHERE lang='$lang' and aff='$aff' order by lang" ;
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
    function get_Cor_item($aff=1)
    {
        $sql="select * from dalice.cordonnee where affi='$aff' order by id" ;

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
    function get_act_item($lang=null,$aff=1)
    {
        $sql="select * from dalice.act1 where affi='$aff' order by lang " ;
        if ($lang!=null){
            $sql="select * from dalice.act1 WHERE lang='$lang' and affi='$aff' order by lang" ;
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

    function edit_About_item($lang,$intro=null,$p=null,$vals=null,$conc=null,$img=null)
    {
        $sql="update dalice.aboutus set intro= :intro, p= :p,vals= :vals,conc= :conc,img= :img where lang='$lang' and affi=1";
        $sql1="update dalice.aboutus t, (select distinct conc, intro, p, vals, img,lang,affi
               FROM dalice.aboutus
               where lang='$lang' and affi=1) t1
               set t.conc = t1.conc,t.intro=t1.intro,t.p=t1.p,t.vals=t1.vals,t.img=t1.img
               where t.lang = '$lang'
               and t.affi=0";
        if($img=="")
        {
            $sql="update dalice.aboutus set intro= :intro, p= :p,vals= :vals,conc= :conc  where lang='$lang' and affi=1";
        }

        echo $sql1;
        $db=config::getConnexion();
        try
        {
            $db->query($sql1);
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

    function edit_MisVis_item($lang,$mis=null,$vis=null,$img_mis=null,$img_vis=null)
    {
        $sql="update dalice.mis_vis set mis= :mis, vis= :vis,img_mis= :img_mis,img_vis= :img_vis where lang='$lang' and aff=1";
        $sql1="update dalice.mis_vis t, (select distinct mis, vis, img_mis, img_vis,lang,aff
               FROM dalice.mis_vis
               where lang='$lang' and aff=1) t1
               set t.mis = t1.mis,t.vis=t1.vis,t.img_mis=t1.img_mis,t.img_vis=t1.img_vis
               where t.lang = '$lang'
               and t.aff=0";

        if(($img_mis=="") and ($img_vis!=""))
        {
            $sql="update dalice.mis_vis set mis= :mis, vis= :vis ,img_vis= :img_vis where lang='$lang' and aff=1";
        }
        else if (($img_vis=="") and ($img_mis!="") )
        {
            $sql="update dalice.mis_vis set mis= :mis, vis= :vis ,img_mis= :img_mis where lang='$lang' and aff=1";
        }
        else if (($img_mis=='') and ($img_vis==''))
        {
            $sql="update dalice.mis_vis set mis= :mis, vis= :vis  where lang='$lang' and aff=1";
        }

        echo $sql;
        $db=config::getConnexion();
        try
        {
            $db->query($sql1);
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




    function edit_act_item($lang,$titre=null,$val=null,$titre2=null,$val2=null,$titre3=null,$val3=null)
    {


        $sql="update dalice.act1 set titre= :titre, val= :val,titre2= :titre2,val2= :val2,titre3= :titre3,val3= :val3 where lang='$lang' and affi=1";
        $sql1="update dalice.act1 t, (select distinct titre, val, titre2, val2,titre3,val3,lang,affi
               FROM dalice.act1
               where lang='$lang' and affi=1) t1
               set t.titre = t1.titre,t.val=t1.val,t.titre2=t1.titre2,t.val2=t1.val2,t.titre3=t1.titre3,t.val3=t1.val3
               where t.lang = '$lang'
               and t.affi=0";

        $db=config::getConnexion();
        try
        { $db->query($sql1);
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





    function edit_Cor_item($id,$tel=null,$email=null,$adresse=null,$insta=null,$twitter=null,$linkedin=null,$fb=null)
    {

        $sql="update dalice.cordonnee set tel= :tel, email= :email,adresse= :adresse,insta= :insta,twitter= :twitter,linkedin= :linkedin,fb =:fb where id='$id' and affi=1";
        $sql1="update dalice.cordonnee t, (select distinct tel, email, adresse, insta,twitter,linkedin,fb,id,affi
               FROM dalice.cordonnee
               where id='$id' and affi=1) t1
               set t.tel = t1.tel,t.email=t1.email,t.adresse=t1.adresse,t.insta=t1.insta,t.twitter=t1.twitter,t.linkedin=t1.linkedin,t.fb=t1.fb
               where t.id != '$id'
               and t.affi=0";
        echo $sql1;
        $db=config::getConnexion();
        try
        {
            $db->query($sql1);
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
    function rest_About_item($lang)
    {
        $sql="update dalice.aboutus
                set affi =
                    case 
                        when affi= 1 then 0
                        else 1 
                    end 
                where lang = '$lang'";
        echo $sql;
        $db=config::getConnexion();
        try {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }

    }
    function rest_MisVis_item($lang)
    {
        $sql="update dalice.mis_vis
                set aff =
                    case 
                        when aff= 1 then 0
                        else 1 
                    end 
                where lang = '$lang'";
        echo $sql;
        $db=config::getConnexion();
        try {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }

    }
    function rest_act_item($lang)
    {
        $sql="update dalice.act1
                set affi =
                    case 
                        when affi= 1 then 0
                        else 1 
                    end 
                where lang = '$lang'";
        echo $sql;
        $db=config::getConnexion();
        try {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }

    }
    function rest_Cord_item($id)
    {
        $sql="update dalice.cordonnee
                set affi =
                    case 
                        when affi= 1 then 0                       
                         else 1
                    end 
                where id =1";

         $sql1="update dalice.cordonnee
                set affi =
                    case 
                        when affi= 1 then 0                       
                         else 1
                    end 
                where id =3";
        echo $sql;

        $db=config::getConnexion();
        try {

            $db->query($sql);
            $db->query($sql1);
        }
        catch (Exception $e)
        {
            echo "error :".$e->getMessage();
        }

    }

}
