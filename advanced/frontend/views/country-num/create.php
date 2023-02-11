<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CountryNum $model */

$this->title = 'Create Country Num';
$this->params['breadcrumbs'][] = ['label' => 'Country Nums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-num-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
