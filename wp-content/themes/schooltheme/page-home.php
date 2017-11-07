<?php /* Template Name: Home */ get_header(); // подключаем header.php ?>
<section class="home-page">
    <div class="contact-form-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-11">
                    <div class="contact-form">
                        <?php echo do_shortcode( ' [contact-form-7 id="469" title="Запис в секцію"] '); ?>   
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 close-btn"><i class="fa fa-times fa-3x" title="Закрити"></i></div>
            </div>
        </div>
    </div>
    <div id="carousel" class="carousel" data-interval="5000">
        <!--Індикатори-->
        <ol class="carousel-indicators">
            <li class="active" data-target="#carousel" data-slide-to="0"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
        </ol>
        <!--Слайди-->
        <div class="carousel-inner">
            <div class="item active">
                <img src="/wp-content/uploads/2016/03/740x340_Ross_Wilson_table_tennis.jpg" alt="">
                <div class="carousel-caption">
                    <h3>Настільний теніс</h3>
                </div>
            </div>
            <div class="item">
                <img src="/wp-content/uploads/2015/06/Men_100_m_French_Athletics_Championships_2013_t153313.jpg" alt="">
                <div class="carousel-caption">
                    <h3>Легка атлетика</h3>
                </div>
            </div>
            <div class="item">
                <img src="/wp-content/uploads/2015/06/maxresdefault.jpg" alt="">
                <div class="carousel-caption">
                    <h3>Художня гімнастика</h3>
                </div>
            </div>
            <div class="item">
                <img src="/wp-content/uploads/2015/06/091711fh_usamvausa_00161.jpg" alt="">
                <div class="carousel-caption">
                    <h3>Хокей на траві</h3>
                </div>
            </div>
        </div>
        <!--Стрєлки-->
        <a href="#carousel" class="left carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#carousel" class="right carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <div class="container">
        <div class="calendar col-lg-3 col-sm-3 col-xs-3 col-md-3">
            <h3><i class="fa fa-calendar"></i>Календар новин</h3>
            <?php dynamic_sidebar( 'calendar-sidebar'); ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 block-news">
                <div class="info news">
                    <a href="/news"><h3><i class="fa fa-newspaper-o"></i>Новини</h3></a>
                    <div class="news-contant">
                        <?php dynamic_sidebar( 'home-sidebar' ); ?>
                    </div>
                </div>
            </div>
            <a href="videos">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 block-video">
                    <div class="info video">
                        <h3><i class="fa fa-film"></i>Відео</h3>
                        <div class="video-contant">
                            <img src="/wp-content/uploads/2015/06/video-block2.png" alt="">
                        </div>
                    </div>
                </div>
            </a>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 block-registration">
                <div class="info registration">
                    <h3><i class="fa fa-user"></i>Реєстрація</h3>
                    <div class="registration-contant">
                        <form action="/wp-login.php?action=register">
                            <button type="submit" class="reg-btn">Зареєструватись</button>
                        </form>
                    </div>
                </div>
            </div>
            <a href="photos">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 block-photos">
                    <div class="info photos">
                        <h3><i class="fa fa-image"></i>Фото</h3>
                        <div class="photos-contant">
                            <img src="/wp-content/uploads/2015/06/photos-block.png" alt="">
                        </div>
                    </div>
                </div>
            </a>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 block-mail">
                <div class="info mail">
                    <h3><i class="fa fa-user-plus"></i>Запис в секцію</h3>
                    <div class="mail-contant">
                        <div class="write-btn">Записатись</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sports">
        <div class="container">
            <h3>Види спорту</h3>
            <div class="row">
                <a href="/gymnastics">
                    <div class="col-lg-offset-2 col-md-offset-2 col-lg-2 col-sm-3 col-xs-4 col-md-2 stype">
                        <img src="/wp-content/uploads/2015/06/artistic5.png" alt="">
                        <h5>Художня гімнастика</h5>
                    </div>
                </a>
                <a href="/tennis">
                    <div class="col-lg-2 col-sm-3 col-xs-4 col-md-2 stype">
                        <img src="/wp-content/uploads/2016/03/tenis.png" alt="">
                        <h5>Настільний теніс</h5>
                    </div>
                </a>
                <a href="/field%20hockey">
                    <div class="col-lg-2 col-sm-3 col-xs-4 col-md-2 stype">
                        <img src="/wp-content/uploads/2015/06/ice54.png" alt="">
                        <h5>Хокей на траві</h5>
                    </div>
                </a>
                <a href="/athletics">
                    <div class="col-lg-2 col-sm-3 col-xs-4 col-md-2 stype">
                        <img src="/wp-content/uploads/2015/06/sprint.png" alt="">
                        <h5>Легка атлетика</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); // подключаем footer.php ?>