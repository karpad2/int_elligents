<?php
#FIXME
$script_message='<script type="text/javascript">


</script>';
function send_password_re($user)
{
    $str=md5("finom".microtime()."ez?");
    $sql="Insert into lost_logins (user,key) values ('$user','$str')";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
}


function mailing($to,$content,$type)
{
    $subject = array("info");
    $headers = "From: webmaster@example.com" . "\r\n" . "CC: somebodyelse@example.com";

    if(is_array($to)) {

        foreach ($to as $i)
        mail($i, $subject[$type] . " - " . Websitename, $content, $headers);
    }
    else {
        mail($to, $subject[$type] . " - " . Websitename, $content, $headers);
    }



}
function push_notification()
{



}
