<?php
/**
 *  Team: 404NotFound
 *  Coding by Luo XinKe 2013622
 *            2023/2/8
 *  Russia-Ukraine war weapons display
 */
use frontend\models\WeaponCountry;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\WeaponCountrySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Weapon Countries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weapon-country-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Weapon Country', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'countryid',
            'countryname',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, WeaponCountry $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'countryid' => $model->countryid]);
                 }
            ],
        ],
    ]); ?>


</div>
