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
/** @var frontend\models\WeaponsCompany3 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="weapons-company3-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'E_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'C_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
