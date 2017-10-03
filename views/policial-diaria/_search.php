<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PolicialDiariaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="policial-diaria-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idpolicial_diaria') ?>

    <?= $form->field($model, 'idpolicial') ?>

    <?= $form->field($model, 'iddiaria') ?>

    <?= $form->field($model, 'executada') ?>

    <?= $form->field($model, 'justificada') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
