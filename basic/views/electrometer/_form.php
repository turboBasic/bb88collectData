<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Electrometer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="electrometer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'datetime')->textInput(['value' => date('Y-m-d H:i:s')] ) ?>

    <?= $form->field($model, 'kwh')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
