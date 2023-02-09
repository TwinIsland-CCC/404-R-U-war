<?php
/**
 *  Team: 404NotFound
 *  Coding by Luo XinKe 2013622
 *            2023/2/8
 *  Russia-Ukraine war weapons display
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\WeaponKind $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="weapon-kind-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kind_id')->textInput() ?>

    <?= $form->field($model, 'kindname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'E_kindname')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
