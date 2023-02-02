<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RUMapTest $model */

$this->title = 'Update Ru Map Test: ' . $model->m_id;
$this->params['breadcrumbs'][] = ['label' => 'Ru Map Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->m_id, 'url' => ['view', 'm_id' => $model->m_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rumap-test-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
