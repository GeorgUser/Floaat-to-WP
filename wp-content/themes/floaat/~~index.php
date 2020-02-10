<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <title>floaat</title>-->
<!--    <meta name="description" content="">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, initial-scale=1, maximum-scale=1">-->
<!--    <meta property="og:image" content="path/to/image.jpg">-->
<!--    <link rel="icon" href="<?php echo $template_url?>/dist/images/mini-icon.png">-->
<!--    <link rel="apple-touch-icon" sizes="180x180" href="#">-->
<!--    <meta name="theme-color" content="#2A0227">-->
<!--    <link href="https://fonts.googleapis.com/css?family=Archivo:400,700&display=swap"-->
<!--          rel="stylesheet">-->
<!--    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap"-->
<!--          rel="stylesheet">-->
<!--</head>-->









<?php
if(is_front_page()) {
    get_template_part('template-parts/layouts/hero-section');
} else {
    get_template_part('template-parts/simple-header');
}
?>






<?php get_footer() ?>




<!--</body>-->
<!--</html>-->
