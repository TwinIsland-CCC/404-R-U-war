<?php

/**   
* Team: 404NotFound   
* Coding by Que MingKai 2012411   
*          2023/2/12   
* Russian-Ukraine War country-num table's CRUD class 
*/

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\CountryNum $model */

$this->title = $model->cid;
$this->params['breadcrumbs'][] = ['label' => 'Country Nums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="country-num-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'cid' => $model->cid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'cid' => $model->cid], [
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
            'country_name',
            'cid',
            'num',
        ],
    ]) ?>

</div>
