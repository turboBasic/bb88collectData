<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <?php if (Yii::$app->session->hasFlash('electricityFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for submitting the data.
        </div>

    <?php else: ?>

    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'electricity-form']); ?>

            <?= $form->field($model, 'electricityMeter')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'date')->widget(\yii\jui\Datepicker::class, [
                    'dateFormat' => 'yyyy-MM-dd',
                    'options' => ['class' => 'form-control']
            ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'electricity-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>

    <?php endif; ?>

</div>

<!--
DatePicker::widget([
'model' => $model,
'attribute' => 'from_date',
'language' => 'ru',
'clientOptions' => [
'dateFormat' => 'yy-mm-dd',
],
]) -->