<?php
/**
 *  Team: 404NotFound
 *  Coding by Luo XinKe 2013622
 *            2023/2/8
 *  Russia-Ukraine war weapons display
 */
use frontend\models\WeaponKind;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\WeaponKindSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Weapon Kinds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weapon-kind-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Weapon Kind', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kind_id',
            'kindname',
            'E_kindname',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, WeaponKind $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kind_id' => $model->kind_id]);
                 }
            ],
        ],
    ]); ?>


</div>
