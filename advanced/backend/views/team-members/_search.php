<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\TeamMembersSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="team-members-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'm_name') ?>

    <?= $form->field($model, 'Student_id') ?>

    <?= $form->field($model, 'Login') ?>

    <?= $form->field($model, 'pass_word') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
