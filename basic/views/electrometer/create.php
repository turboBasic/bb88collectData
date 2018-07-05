<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Electrometer */

$this->title = 'Create Electrometer';
$this->params['breadcrumbs'][] = ['label' => 'Electrometers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="electrometer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
