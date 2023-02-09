<?php
/**
 *  Team: 404NotFound
 *  Coding by Luo XinKe 2013622
 *            2023/2/8
 *  Russia-Ukraine war weapons display
 */
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\WeaponCountry $model */

$this->title = 'Update Weapon Country: ' . $model->countryid;
$this->params['breadcrumbs'][] = ['label' => 'Weapon Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->countryid, 'url' => ['view', 'countryid' => $model->countryid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="weapon-country-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
