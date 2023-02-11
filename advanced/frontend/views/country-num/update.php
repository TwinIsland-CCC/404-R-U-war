<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CountryNum $model */

$this->title = 'Update Country Num: ' . $model->cid;
$this->params['breadcrumbs'][] = ['label' => 'Country Nums', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cid, 'url' => ['view', 'cid' => $model->cid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-num-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
