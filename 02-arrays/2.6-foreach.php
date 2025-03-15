<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="strings.css">
    <title>Functions</title>
</head>
<body>

<pre><?php
    $categories = [
        'Programming',
        'Business',
        'Art & Drawing',
        'Self improvement',
        'History',
    ];

    foreach($categories as $category) {
        var_dump($category);
        if($category == 'Programming') {
            echo 'Programming';
        }
    }

    ?></pre>
<ul>
    <?php foreach ($categories AS $category): ?>
        <li><?php echo $category; ?></li>
    <?php endforeach; ?>
</ul>
<br />
<br />
<br />

</body>
</html>