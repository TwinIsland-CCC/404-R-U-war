<?php
/**
 *  Team: 404NotFound
 *  Coding by Luo XinKe 2013622
 *            2023/2/8
 *  Russia-Ukraine war weapons display
 */
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\WeaponsCompany3 $model */

$this->title = 'Update Weapons Company3: ' . $model->E_name;
$this->params['breadcrumbs'][] = ['label' => 'Weapons Company3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->E_name, 'url' => ['view', 'E_name' => $model->E_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="weapons-company3-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
