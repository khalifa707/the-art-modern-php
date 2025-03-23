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
<header><h1>Automatic Image List</h1></header>
<main>
    <pre>
        <?php
        $images = [];  // Initialize the $images array
        $handle = opendir(__DIR__."/images");

        // Read all files in the directory and add image files to the $images array
        while (($currentFile = readdir($handle)) !== false) {
            // Skip '.' and '..'
            if ($currentFile != "." && $currentFile != "..") {
                // Check if the file is an image (you can adjust the condition as needed)
                if (in_array(strtolower(pathinfo($currentFile, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif'])) {
                    $images[] = $currentFile;  // Add the image to the $images array
                }
            }
        }
        closedir($handle);

        // Display the image names for debugging
        var_dump($images);
        ?>
    </pre>

    <?php foreach ($images as $image): ?>
        <img src="images/<?php echo rawurldecode($image); ?>" alt="Image">
    <?php endforeach; ?>
</main>


</body>
</html>