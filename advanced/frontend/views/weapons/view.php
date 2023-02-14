<?php
/**
 *  Team: 404NotFound
 *  Coding by Luo XinKe 2013622
 *            2023/2/8
 *  Russia-Ukraine war weapons display
 */
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Weapons $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Weapons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="weapons-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'name' => $model->name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'name' => $model->name], [
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
            'name',
            'country',
            'content',
            'kind',
        ],
    ]) ?>

</div>
