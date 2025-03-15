<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="strings.css">
    <title>Associative Arrays</title>
</head>
<body>
<pre><?php
    $books = [
        'Harry Potter' => 'J.K. Rowling',
        'Lord of the Rings' => 'J.R.R. Tolkien',
        'The Little Prince' => 'Antoine de Saint-Exupéry',
        'Don Quixote' => 'Miguel de Cervantes',
        'Alice in Wonderland' => 'Lewis Carroll',
    ];

    var_dump($books);
    var_dump(isset($books['Harry Potter']));
    var_dump(!empty($books['Harry Potter']));
    var_dump($books['Harry Potter']);

    $key = 'Harry Potter';
    var_dump($books[$key]);
    var_dump($books['Harry' . ' ' . 'Potter']);
    ?></pre>

</body>
</html>