<?php
/** 
* Team: 404NotFound 
* Coding by Luo Xinke 2013622 
*           2023/2/7 
* Russian-Ukraine War Weapons manufacturing companies
*/ 


use frontend\models\WeaponsCompany3;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\WeaponsCompany3Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Weapons Company3s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weapons-company3-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Weapons Company3', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'E_name',
            'url:url',
            'C_name',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, WeaponsCompany3 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'E_name' => $model->E_name]);
                 }
            ],
        ],
    ]); ?>


</div>
