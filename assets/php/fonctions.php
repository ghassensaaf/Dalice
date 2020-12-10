<?php
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
}
