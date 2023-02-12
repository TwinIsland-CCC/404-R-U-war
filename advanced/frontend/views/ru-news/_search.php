<?php

/**   
* Team: 404NotFound   
* Coding by Que MingKai 2012411   
*          2023/2/5   
* Russian-Ukraine War news table CRUD class   
*/

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RuNewsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ru-news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'url') ?>

    <?= $form->field($model, 'author') ?>

    <?= $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'img_path') ?>

    <?php // echo $form->field($model, 'comment_num') ?>

    <?php // echo $form->field($model, 'score') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
