<?php

/**
 *  Team: 404NotFound
 *  Coding by Que MingKai 2012411
 *            2023/2/5
 *  Russian-Ukraine War news table CRUD class
 */

use frontend\models\RuNews;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RuNewsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ru News';
$this->params['breadcrumbs'][] = $this->title;
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/icon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/icon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/icon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/icon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="assets/img/icon/apple-touch-icon-57x57.png">

    <title>Ello by Distinctive Themes</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/cubeportfolio.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">
    <link href="assets/css/pe-icons.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <script src="assets/js/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            'use strict';
            jQuery('#headerwrap').backstretch([
                "assets/img/bg/bg3.jpg"
            ], {
                duration: 8000,
                fade: 800
            });
        });
    </script>
</head>

<body>

    <div class="preloader">
        <div class="preloader-img">
            <img src="assets/img/loading-spin.svg" width="100" alt="Loading icon" />
        </div>
    </div>

    <div id="searchwrapper" class="sb-slide">
        <div class="container">
            <div id="search">
                <button type="button" class="close">×</button>
                <form>
                    <input type="search" value="" placeholder="type keyword(s) here" />
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>

    <div id="main-navigation" class="navbar navbar-inverse navbar-fixed-top smoothtransition fadeInDown sb-slide" data-wow-delay="1s" role="navigation">
        <div class="container smoothtransition">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h2><a class="navbar-brand" href="index.php">ELLO</a></h2>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home <span class="pe-7s-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="index.php">Home Agency</a></li>
                            <li><a href="index-blog.html">Home Blog</a></li>
                            <li><a href="index-resume.html">Home Resume</a></li>
                            <li><a href="index-portfolio.html">Home Video</a></li>
                            <li><a href="index-shop.html">Home Shop</a></li>
                            <li><a href="index-app.html">Home App Landing</a></li>
                            <li><a href="index-singlepage.html">Home Single Page</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog <span class="pe-7s-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="category-grid.html">Category Grid</a></li>
                            <li><a href="index.php?r=ru-news">Category Traditional</a></li>
                            <li><a href="single-post.html">Single Post</a></li>
                            <li><a href="single-post-fullwidth.html">Single Post Fullwidth</a></li>
                            <li><a href="single-post-sidebar.html">Single Post Sidebar</a></li>
                            <li><a href="single-post-gallery.html">Single Post Gallery</a></li>
                            <li><a href="single-post-lightbox-gallery.html">Single Post Lightbox Gallery</a></li>
                            <li><a href="single-post-video.html">Single Post Video</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Portfolio <span class="pe-7s-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="portfolio-grid.html">Portfolio Grid</a></li>
                            <li><a href="single-portfolio.html">Single Portfolio</a></li>
                            <li><a href="single-portfolio-video.html">Single Portfolio Video</a></li>
                            <li><a href="single-portfolio-large.html">Single Portfolio Fullscreen</a></li>
                            <li><a href="single-portfolio-video-large.html">Single Portfolio Fullscreen Video</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shop <span class="pe-7s-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="index-shop.html">Shop</a></li>
                            <li><a href="single-product.html">Single Product</a></li>
                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages <span class="pe-7s-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="404.html">404</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </li>

                    <li><a id="searchtrigger" href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <header id="headerwrap" class="quarterscreen">
        <div class="align-bottom wow fadeInUp">
            <div class="row">
                <div class="container">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="post-heading text-center mb">
                            <h1>Russian-Ukraine War News Posts</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="white section-wrapper">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 wow fadeInLeft" data-wow-delay="0.5s">
                        <div class="row">
                            <?php
                                $model = RuNews::findBySql('select * from ru_news')->all();
                                foreach($model as $item){
                                    echo (
                                        '<div class="col-md-12 masonry-blog-item wow fadeInUp">');
                                    echo (
                                            '<figure class="hover-item">');
                                    echo (sprintf(
                                                '<img src="assets/img/news/%s/%s-9.jpg" class="img-responsive" alt="image">', $item->img_path, $item->img_path));
                                    echo (sprintf(
                                                '<figcaption>
                                                    <h2>%s</h2>
                                                    <p class="icon-links">
                                                        <a href="https://www.nytimes.com/%s"><span class="fa fa-link"></span></a>
                                                    </p>
                                                </figcaption>
                                            </figure>', $item->title, $item->url));
                                    echo (sprintf(
                                            '<div class="item-excerpt arrow-top col-xs-12">
                                                <h2><a class="colour-hover" "https://www.nytimes.com/%s">%s</a></h2>
                                                <p>%s</p>
                                                <div class="item-metas smoothtransition">
                                                    <div>
                                                        <strong class="colour-hover"><i class="fa fa-clock-o"></i> Posted 02/01/15 </strong>
                                                        <strong class="colour-hover"><i class="fa fa-comment"></i> 4</strong>
                                                        <strong class="pull-right colour-hover"><a href="https://www.nytimes.com/%s" data-toggle="tooltip" data-placement="left" title="View Article"><i class="fa fa-link"></i></a></strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>', $item->url, $item->title, $item->description, $item->url));
                                }
                            ?>
                            <div class="col-md-12 masonry-blog-item wow fadeInUp">
                                <figure class="hover-item">
                                    <img src="assets/img/portfolio/portfolio1.jpg" class="img-responsive" alt="image">
                                    <figcaption>
                                        <h2>Tall Tales</h2>
                                        <p class="icon-links">
                                            <a href="single-post.html"><span class="fa fa-link"></span></a>
                                        </p>
                                    </figcaption>
                                </figure>
                                <div class="item-excerpt arrow-top col-xs-12">
                                    <h2><a class="colour-hover" href="single-post.html">Tall Tales</a></h2>
                                    <p>Mr be cottage so related minuter is. Delicate say and blessing ladyship exertion few margaret. Delight herself welcome against smiling its for. Suspected discovery by he affection household of principle perfectly he. Mr be cottage so related minuter is. Delicate say and blessing ladyship exertion few margaret. Delight herself welcome against smiling its for. Suspected discovery by he affection household of principle perfectly he.</p>
                                    <div class="item-metas smoothtransition">
                                        <div>
                                            <strong class="colour-hover"><i class="fa fa-clock-o"></i> Posted 02/01/15 </strong>
                                            <strong class="colour-hover"><i class="fa fa-comment"></i> 4</strong>
                                            <strong class="pull-right colour-hover"><a href="single-post.html" data-toggle="tooltip" data-placement="left" title="View Article"><i class="fa fa-link"></i></a></strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt wow fadeInUp">
                                <a href="category-traditional.html" class="btn btn-theme pull-left">Previous Posts</a>
                                <a href="category-traditional.html" class="btn btn-theme pull-right">Next Posts</a>
                            </div>
                        </div>
                    </div>
                    <div id="main-sidebar" class="col-md-3 col-md-offset-1 divider-wrapper wow fadeInRight" data-wow-delay="0.5s">
                        <div>
                            <div class="widget carousel-widget">
                                <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                                <div class="row">
                                    <ul class="direction-aware owl-carousel-paged wow fadeInUp list-unstyled" data-items="1" data-items-tablet="[768,1]" data-items-mobile="[479,1]">
                                        <?php
                                            $model = RuNews::findBySql('select * from ru_news')->all();
                                            $i = 0;
                                            foreach($model as $item){
                                                echo (
                                                    '<li class="portfolio-item">');
                                                echo (sprintf(
                                                        '<a href="https://www.nytimes.com/%s" title="View Post">', $item->url));
                                                echo (sprintf(
                                                            '<img src="assets/img/news/%s/%s-9.jpg" class="img-responsive" alt="">', $item->img_path, $item->img_path));
                                                echo (  '</a>');
                                                echo (sprintf(
                                                            '<div class="item-caption">
                                                            <h4>%s</h4>
                                                            </div>', $item->title));
                                                if(++$i >= 5) break;
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget">
                                <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                                <div>
                                    <?php   
                                        $model = RuNews::findBySql('select * from ru_news')->all();
                                        $i = 0;
                                        foreach($model as $item){
                                            echo (
                                                '<div class="media">
                                                    <div class="pull-left">');
                                            echo (sprintf(
                                                        '<img src="assets/img/news/%s/%s-1.jpg" class="widget-img" alt="">', $item->img_path, $item->img_path));
                                            echo (sprintf(
                                                        '</div>
                                                        <div class="media-body">
                                                        <span class="media-heading"><a class="coloured" href="https://www.nytimes.com/%s">%s</a></span>', $item->url, $item->title));
                                            echo (sprintf(
                                                        '<div class="muted">
                                                            <ul class="list-inline post-meta-list">
                                                                <li><i class="pe-7s-clock"></i> <a href="https://www.nytimes.com/%s" title="">10/12/2014</a></li>
                                                                <li><i class="pe-7s-user"></i> <a href="https://www.nytimes.com/%s" title="">%s</a></li>
                                                            </div></div></div>', $item->url, $item->url, $item->author));
                                            if(++$i >= 4) break;
                                        }
                                    ?>
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="widget-img" src="assets/img/widget/widget1.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <span class="media-heading"><a class="coloured" href="#">Blog Post A</a></span>
                                            <div class="muted">
                                                <ul class="list-inline post-meta-list">
                                                    <li><i class="pe-7s-clock"></i> <a href="#" title="">10/12/2014</a></li>
                                                    <li><i class="pe-7s-user"></i> <a href="#" title="">Richard Blake</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="social-profiles-fw" class="section-wrapper">
        <div class="row nopadding">
            <div class="social-profile smoothtransition col-xs-3 centered twitter-bg">
                <a href="#" class="wow fadeInUp"><i class="fa fa-twitter"></i></a>
            </div>
            <div class="social-profile smoothtransition col-xs-3 centered facebook-bg">
                <a href="#" class="wow fadeInUp"><i class="fa fa-facebook"></i></a>
            </div>
            <div class="social-profile smoothtransition col-xs-3 centered gplus-bg">
                <a href="#" class="wow fadeInUp"><i class="fa fa-google-plus"></i></a>
            </div>
            <div class="social-profile smoothtransition col-xs-3 centered dribbble-bg">
                <a href="#" class="wow fadeInUp"><i class="fa fa-dribbble"></i></a>
            </div>
        </div>
    </section>

    <footer id="footerwrap">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="widget about-us-widget">
                            <h4 class="widget-title"><strong>Global</strong> Coverage</h4>
                            <p>Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin.</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title"><strong>Recent</strong> Tweets</h4>
                            <script type="text/javascript">
                                jQuery(function($) {
                                    $('.twitter-feed').twittie({
                                        username: 'DistinctThemes',
                                        apiPath: 'twitter/tweet.php',
                                        dateFormat: '%b. %d, %Y',
                                        template: '<div class="row"><div class="col-xs-3 nopaddingright">{{avatar}}</div><div class="col-xs-9"><p>{{tweet}}</p></div></div>',
                                        count: 10
                                    }, function() {
                                        setInterval(function() {
                                            var item = $('.twitter-feed ul').find('li:first');
                                            item.animate({
                                                marginLeft: '0px',
                                                'opacity': '0'
                                            }, 500, function() {
                                                $(this).detach().appendTo('.twitter-feed ul').removeAttr('style');
                                            });
                                        }, 8000);
                                        jQuery('.twitter-feed li img').attr('src', function(i, src) {
                                            return src.replace('_normal', '');
                                        });
                                    });
                                });
                            </script>
                            <div class="twitter-feed"></div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                            <div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="widget-img" src="assets/img/widget/widget1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <span class="media-heading"><a href="#">Blog Post A</a></span>
                                        <small class="muted">Posted 14 April 2019</small>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <span class="media-heading"><a href="#">Blog Post B</a></span>
                                        <small class="muted">Posted 14 April 2019</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                            <div class="tagcloud">
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Local</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Business</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Media</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Photogtraphy</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Aid</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Fashion</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">News</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Cars</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Global Affairs</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Music</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Downloads</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">MP3</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="lowerfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright 2019 | Designed By Distinctive Themes</p> - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>

                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/cubeportfolio.js"></script>
    <script src="assets/js/init.js"></script>
</body>



<div class="ru-news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ru News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title:ntext',
            'url:ntext',
            'author:ntext',
            'date:ntext',
            //'description:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RuNews $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
