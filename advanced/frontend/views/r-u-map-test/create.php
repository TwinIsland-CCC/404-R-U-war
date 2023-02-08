<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RUMapTest $model */

$this->title = 'Create Ru Map Test';
$this->params['breadcrumbs'][] = ['label' => 'Ru Map Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rumap-test-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
