<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Weapons $model */

$this->title = 'Update Weapons: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Weapons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'name' => $model->name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="weapons-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
