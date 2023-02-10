<?php

use kartik\daterange\DateRangePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\Models\TimeInfoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="time-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="form-group">
        <p></p>
        <p>Date you want to search</p>
     <input type="date" name="TimeInfoSearch[date]" value="<?=$model->date??"2022/02/24"?>">
    </div>
    <?php
    //echo $form->field($model, 'date');
    ?>
    <div class="form-group">
    <?= $form->field($model, 'event')->label('content')  ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
