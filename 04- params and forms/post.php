<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="strings.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre><?php
    var_dump($_GET);
    var_dump($_POST);
    ?></pre>

<form action="forms.php" method="POST">
    <input type="text" name="username" value="<?php if (!empty($_GET['username'])) echo $_GET['username'];?>">
    <input type="password" name="password" value="<?php if (!empty($_GET['password'])) echo $_GET['password'];?>">
    <input type="submit" value="Login!" />
</form>


</body>
</html>