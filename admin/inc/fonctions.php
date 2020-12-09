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
}
