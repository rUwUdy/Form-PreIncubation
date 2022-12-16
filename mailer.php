<?php
$to="RECIEVER EMAIL";
$nom_candidat =  $_POST['contactName'];
$mail_client = $_POST['contactEmail'];
$num= $_POST['contactP'];
$nom_stup= $_POST['contactRP'];
$arr="";
if (isset($_POST['chAutre'])){
    $arr = $arr." ".$_POST['autre_nom'];
}
if(isset($_POST['IT'])){
    $arr = $arr." ".$_POST['IT']."/";
};
if(isset($_POST['agri'])){
    $arr = $arr." ".$_POST['agri']."/";
};
if(isset($_POST['health'])){
    $arr = $arr." ".$_POST['health']."/";
};
if(isset($_POST['Ecom'])){
    $arr = $arr." ".$_POST['Ecom']."/";
};
if(isset($_POST['fint'])){
    $arr = $arr." ".$_POST['fint']."/";
};
if(isset($_POST['auto'])){
    $arr = $arr." ".$_POST['auto']."/";
};
if(isset($_POST['indus'])){
    $arr = $arr." ".$_POST['indus']."/";
};

$message = "TitlePLaceHodler\n"."Nom: ".$nom_candidat."\n"."Numero: ".$num."\n"."E-mail: ".$mail_client."\n"."Startup: ".$nom_stup."\n"."Secteur: ".substr($arr, 0, -1)."\n"."Description :".$_POST['desc'];
$headers = "From: ".$mail_client."\r\n";
if (mail($to, $mail_client, $message, $headers)) {
    readfile('success.html');
} else {
    readfile('fail.html');
}
?>
