<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $pages = ["Ex_Files_Learning_PHP/Exercise Files/01_07_challenge/start.php"];
    foreach ($pages as $page) {
        echo "<a href='/$page'>$page</a> <br>";
    }
        ?>
</body>
</html>