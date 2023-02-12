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
/** @var frontend\models\RuNews $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ru-news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'url')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'author')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_path')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'comment_num')->textInput() ?>

    <?= $form->field($model, 'score')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
