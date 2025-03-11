<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="strings.css">
    <title>If Statement</title>
</head>
<body>

<pre><?php
    $serverStatus = 'ok';
    if ($serverStatus === 'ok') {
       echo "🟢🟢🟢🟢🟢\n";
    echo '🟢 Welcome to our website! Browse and enjoy our content';
    }
    else{
        echo "🔴🔴🔴🔴🔴\n";
        echo '🔴 We\'re currently undergoing maintenance. Please check back later';
    }

    if ($serverStatus === 'Maintainable') {
        echo "🟢🟢🟢🟢🟢\n";
        echo '🟢 Welcome to our website! Browse and enjoy our content';
    }
    else{
        echo "🔴🔴🔴🔴🔴\n";
        echo '🔴 We\'re currently undergoing maintenance. Please check back later';
    }
    ?></pre>

</body>
</html>