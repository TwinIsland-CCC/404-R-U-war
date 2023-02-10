<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\TeamMembers $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="team-members-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'm_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Student_id')->textInput() ?>

    <?= $form->field($model, 'Login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pass_word')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
