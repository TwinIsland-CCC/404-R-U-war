<?php

use frontend\models\CountryNum;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\CountryNumSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Country Nums';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-num-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Country Num', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'country_name',
            'cid',
            'num',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CountryNum $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'cid' => $model->cid]);
                 }
            ],
        ],
    ]); ?>


</div>
