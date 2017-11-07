<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter32716655 = new Ya.Metrika({
                    id:32716655,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/32716655" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template
 */
?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <?php /* RSS и всякое */ ?>
            <link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
            <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
            <link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


            <link rel="shortcut icon" href="/wp-content/uploads/2015/06/favicon.ico" type="image/x-icon">
            <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap-theme.min.css">

            <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>

            <script src="<?php echo get_template_directory_uri();?>/js/scripts.min.js"></script>

            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/font-awesome/css/font-awesome.css">



            <meta name="google-site-verification" content="Xm9CTr2JEZEZ9TYPdFRMUGNDn-F8pP2VamRv7uaMal8" />
            <meta name='yandex-verification' content='4918a4abfdfa87dd' />

            <!--[if lt IE 9]>
	 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	 <![endif]-->
            <title>
                <?php typical_title();  ?>
            </title>
            <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <div class="wrapper">

            <header>
                <div class="alpha">
                    <img src="/wp-content/uploads/2015/06/009_ribbon.png" alt="" title="Альфа версія сайту">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-3 col-md-2 hidden-xs logo">
                            <img src="/wp-content/uploads/2015/06/logo.png" alt="" id="logo">
                        </div>

                        <div class="col-lg-10  col-sm-9 col-md-10 slogan">
                            <h1><?php bloginfo(‘name’); ?></h1>
                            <p>
                                <?php bloginfo('description'); ?>
                            </p>
                        </div>
                    </div>

                </div>


                <div class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                                <span class="sr-only">Відкрити навігацію</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse pull-right" id="responsive-menu">
                            <ul class="nav navbar-nav">
                                <li><a href="/home">Головна</a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Секції<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/field-hockey">Хокей на траві</a>
                                        </li>
                                        <li><a href="/gymnastics">Художня гімнастика</a>
                                        </li>
                                        <li><a href="/athletics">Легка атлетика</a>
                                        </li>
                                        <li><a href="/tennis">Настільний теніс</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="/news">Новини</a>
                                </li>
                                <li><a href="/collective">Колектив</a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Медіа<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/photos">Фото</a>
                                        </li>
                                        <li><a href="/videos">Відео</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="/achievements">Досягнення</a>
                                </li>
                                <li><a href="/contacts">Контакти</a>
                                </li>
                            </ul>




                        </div>

                    </div>
                </div>

                <div class="header-line"></div>
            </header>