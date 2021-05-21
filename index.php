<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kiem tra email</title>
</head>
<body>
<form method="get">
    <input type="text" name="input">
    <button>Check</button>
</form>
</body>
</html>
<?php
$email = $_GET['input'];
function checkEmailRegularExpression($email)
{
    $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($pattern, $email)) {
        echo "Email hop le";
    }
    echo "Email khong hop le";
}
checkEmailRegularExpression($email);
?>