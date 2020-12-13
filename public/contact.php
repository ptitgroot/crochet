<?php

$array = array("firstname" => "", "name" => "", "email" => "", "message" => "", "firstnameError" => "", "nameError" => "", "emailError" => "", "messageError" => "", "isSuccess" => false);
$emailTo = "mes.tests.projets@gmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $array["firstname"] = test_input($_POST["firstname"]);
    $array["name"] = test_input($_POST["name"]);
    $array["email"] = test_input($_POST["email"]);
    $array["message"] = test_input($_POST["message"]);
    $array["isSuccess"] = true;
    $emailText = "";

    if (empty($array["firstname"]))
    {
        $array["firstnameError"] = "Merci de remplir se champs";
        $array["isSuccess"] = false;
    }
    else
    {
        $emailText .= "Firstname: {$array['firstname']}\n";
    }

    if (empty($array["name"]))
    {
        $array["nameError"] = "Merci de remplir se champs";
        $array["isSuccess"] = false;
    }
    else
    {
        $emailText .= "Name: {$array['name']}\n";
    }

    if(!isEmail($array["email"]))
    {
        $array["emailError"] = "Ce n'est pas un email valide";
        $array["isSuccess"] = false;
    }
    else
    {
        $emailText .= "Email: {$array['email']}\n";
    }

    if (empty($array["message"]))
    {
        $array["messageError"] = "Merci de remplir se champs";
        $array["isSuccess"] = false;
    }
    else
    {
        $emailText .= "Message: {$array['message']}\n";
    }

    if($array["isSuccess"])
    {
        $headers = "From: {$array['firstname']} {$array['name']} <{$array['email']}>\r\nReply-To: {$array['email']}";
        mail($emailTo, "Un message de votre site", $emailText, $headers);
    }

    echo json_encode($array);

}

function isEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


<?php
