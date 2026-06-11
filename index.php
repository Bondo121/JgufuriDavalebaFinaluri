<?php

require './data.php';
require './components.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bon Hotel</title>

    <link rel="stylesheet" href="style.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap"
        rel="stylesheet">
</head>

<body>

    <?php
        setHeader($headerData);
        heroSection($heroData);
        roomsSection($roomsData);
        contactSection($contactData);
        setFooter($footerData);
    ?>

</body>
</html>