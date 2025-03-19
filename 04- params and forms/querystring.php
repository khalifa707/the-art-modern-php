<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="strings.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Query String</title>
</head>
<body>

<a href="querystring.php?<?php echo http_build_query(['book => Harry Potter']);?>">Harry potter</a>
<a href="querystring.php?<?php echo http_build_query(['book => Beauty & the beast']);?>">Beauty & the beast</a>


</body>
</html>