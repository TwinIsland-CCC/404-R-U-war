<?php
/**
 *  Team: 404NotFound
 *  Coding by Luo XinKe 2013622
 *            2023/2/10
 *  Russia-Ukraine backend
 */
use backend\models\TeamMembers;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\TeamMembersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Team Members';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-members-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Team Members', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'm_name',
            'Student_id',
            'Login',
            'pass_word',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TeamMembers $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Student_id' => $model->Student_id]);
                 }
            ],
        ],
    ]); ?>


</div>
