<?php

/**
 *  Team: 404NotFound
 *  Coding by Que MingKai 2012411
 *            2023/2/2
 *  rumaptest's view files
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\RUMapTest $model */

$this->title = $model->m_id;
$this->params['breadcrumbs'][] = ['label' => 'Ru Map Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rumap-test-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'm_id' => $model->m_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'm_id' => $model->m_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'm_id',
            'm_name',
            'time',
        ],
    ]) ?>

</div>
