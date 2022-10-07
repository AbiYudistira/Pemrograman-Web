<?php
$cookie_author = "user";
$cookie_name = "Abi Yudistira";

setcookie($cookie_author, $cookie_name, time() + 3600,"/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie 2</title>
</head>
<body>
    <?php
    if (isset($_COOKIE[$cookie_author])) {
        echo "Cookie dengan nama " . $cookie_author. " tersedia." . "<br>";
        echo "Dengan name : " . $_COOKIE[$cookie_author];
    } else {
        echo "Cookie belum dibuat / telah dihapus";
    }

    ?>
    
</body>
</html>