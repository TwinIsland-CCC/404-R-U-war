<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RUMapTest $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rumap-test-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'm_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
