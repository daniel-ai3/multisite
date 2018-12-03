<?php

$url = "https://nms.itb.ac.id/icinga/cgi-bin/status.cgi?host=all&style=hostservicedetail&jsonoutput";
$curl = curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$data = curl_exec($curl);
curl_close($curl);
$data = json_decode($data);
$datana = $data->status;
$ret = array();
foreach ($datana->host_status as $r){
    $host = array("arsip.itb.ac.id"=>"SI Kearsipan","blogs.itb.ac.id" => "ITB Blogosphere","kuliah.itb.ac.id" =>"Kuliah ITB Online","ftp.itb.ac.id"=>"FTP ITB","akademik.itb.ac.id" =>"SIX");
    if(array_key_exists($r->host,$host))
        $ret[$host[$r->host]] = $r->status;
}

//echo json_encode($ret);
$html = "<ul>";
foreach ($ret as $r=>$k){
    $html .= "<li> $r : <span>$k</span>";
}
$html .="</ul>";
echo $html
?>