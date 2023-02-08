<?php

/** 
* Team: 404NotFound 
* Coding by Luo Xinke 2013622 
*           2023/2/7 
* Russian-Ukraine War Weapons manufacturing companies
*/ 

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\WeaponsCompany3Search $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="weapons-company3-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'E_name') ?>

    <?= $form->field($model, 'url') ?>

    <?= $form->field($model, 'C_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
