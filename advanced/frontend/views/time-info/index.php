<?php

/**
 *  Team: 404NotFound
 *  Coding by Wang Yiru 1911573
 *            2023/2/8
 *  Russian-Ukraine War news table CRUD class
 */

use app\models\TimeInfo;
use frontend\assets\AppAsset;
use frontend\models\RuNews;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RuNewsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
AppAsset::register($this);
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
                <h2><a class="navbar-brand" href="index.php">Russian-Ukrainian War</a></h2>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a class="page-scroll" href="index.php?r=ru-news">News</a></li>
                    <li><a class="page-scroll" href="#footerwrap">Footer</a></li>
                    <li><a href="coming-soon.html">Coming Soon</a></li>
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
                            <h1>Russian-Ukraine Timeline</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="white section-wrapper">

        <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['label'=>'date',  'attribute' => 'date',  'contentOptions' => ['style' => 'width:200px; white-space: normal;'],],
                ['label'=>'content',  'attribute' => 'event', 'value' => function ($model, $key, $index, $column) {
                    return Html::a($model->event,
                        $model->url);
                },
                    'format' => 'raw',
                ],
            ],
        ]); ?>
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
                            <h4 class="widget-title"><strong>Brief</strong> Introduction</h4>
                            <p>The site presents different data including battle line graphs, loss data charts, timeline and major events, New York Times news handling and weapons display modules used, and a suggestion and feedback module at the end. </p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title"><strong>Team</strong> Members</h4>
                            <div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img src="assets/img/team/h1-s.jpg" class="widget-img" alt="image">
                                    </div>
                                    <div class="media-body">
                                        <span class="media-heading"><a href="#">卻铭恺</a></span>
                                        <small class="muted">——穿过乌云。</small>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img src="assets/img/team/h2-s.jpg" class="widget-img" alt="image">
                                    </div>
                                    <div class="media-body">
                                        <span class="media-heading"><a href="#">王一如</a></span>
                                        <small class="muted">——carpe diem.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title"><strong>Team</strong> Members</h4>
                            <div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img src="assets/img/team/h3-s.jpg" class="widget-img" alt="image">
                                    </div>
                                    <div class="media-body">
                                        <span class="media-heading"><a href="#">苏雨佳</a></span>
                                        <small class="muted">——我与我周旋久，宁做我。</small>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img src="assets/img/team/h4-s.jpg" class="widget-img" alt="image">
                                    </div>
                                    <div class="media-body">
                                        <span class="media-heading"><a href="#">罗昕珂</a></span>
                                        <small class="muted">——认真工作，早点睡觉。</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title"><strong>Latest</strong> Topics</h4>
                            <div class="tagcloud">
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Russian</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Ukraine</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">War</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Time</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Feast</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Battle</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Rival</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Profit</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Key</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">U.S</a>
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
                        <p>Copyright 2023 | Designed By Distinctive Themes and Team 404NotFound.</p>
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


