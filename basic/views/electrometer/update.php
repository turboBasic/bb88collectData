<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Electrometer */

$this->title = 'Update Electrometer: ' . $model->datetime;
// $this->params['breadcrumbs'][] = ['label' => 'Electrometers', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->datetime, 'url' => ['view', 'id' => $model->datetime]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="electrometer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
