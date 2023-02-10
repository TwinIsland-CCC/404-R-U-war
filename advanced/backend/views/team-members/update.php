<?php
/**
 *  Team: 404NotFound
 *  Coding by Luo XinKe 2013622
 *            2023/2/10
 *  Russia-Ukraine backend
 */
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TeamMembers $model */

$this->title = 'Update Team Members: ' . $model->Student_id;
$this->params['breadcrumbs'][] = ['label' => 'Team Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Student_id, 'url' => ['view', 'Student_id' => $model->Student_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="team-members-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
