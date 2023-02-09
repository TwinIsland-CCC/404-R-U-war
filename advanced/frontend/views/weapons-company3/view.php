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
/** @var frontend\models\WeaponsCompany3 $model */

$this->title = $model->E_name;
$this->params['breadcrumbs'][] = ['label' => 'Weapons Company3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="weapons-company3-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'E_name' => $model->E_name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'E_name' => $model->E_name], [
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
            'E_name',
            'url:url',
            'C_name',
        ],
    ]) ?>

</div>
