<?php /** * File not found (404.php) */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
    <?php /* RSS и всякое */ ?>
    <link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


    <link rel="shortcut icon" href="/wp-content/uploads/2015/06/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap-theme.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/font-awesome/css/font-awesome.css">
    <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body class="error-page">
    <div class="container">

                <i class="fa fa-exclamation-triangle fa-3x"></i>
                <h1>Error 404
                <br/>File not found</h1>
                <p>Дитячо-юнацька спортивна школа №1 <br/>м. Вінниця</p>

    </div>
</body>

</html>