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
    $courses = [
        [
            'title' => 'German for Beginners',
            'desc' => 'Learn basic German vocabulary, grammar, and everyday phrases.',
            'flag' => '🇩🇪'
        ],
        [
            'title' => 'French for Beginners',
            'desc' => 'Master fundamental French skills including basic vocabulary and conversational techniques.',
            'flag' => '🇫🇷'
        ],
        [
            'title' => 'Spanish for Beginners',
            'desc' => 'Acquire essential Spanish vocabulary and gain proficiency in daily conversations.',
            'flag' => '🇪🇸'
        ]
    ];

    var_dump($courses[0]['title']);
    var_dump($courses[0]['flag']);
    ?></pre>

</body>
</html>