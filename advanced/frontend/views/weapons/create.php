<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Weapons $model */

$this->title = 'Create Weapons';
$this->params['breadcrumbs'][] = ['label' => 'Weapons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weapons-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
