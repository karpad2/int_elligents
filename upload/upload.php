<?php
require "../config.php";
if(empty($_SESSION["user_id"])) die("You don't login in");
if(isset($_GET["save"])) {

    if (!empty($_FILES['image']['name'])) {
        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_ext = explode('.', $_FILES['image']['name']);


        $newfilename = $_SESSION["user_id"] .$_POST["p_name"]. '.' . $file_ext[1];

        $img_route = "";
        $expensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext[1], $expensions) === false) {
            $errors[] = "This extension not allowed, please choose a JPEG or PNG file.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'File size must be excately or less 2 MB';
        }

        if (empty($errors) == true) {
            $img_route = "../images/" . $newfilename;
            move_uploaded_file($file_tmp, $img_route);
            header("Location:../index.php?fileup=ok");
        } else {
            header("Location:../index.php?err=".print_r($errors));
        }
    }

//    foreach ($_POST as $key => $value) $_POST[$key] = sql_str($value, $conn);
}
?>