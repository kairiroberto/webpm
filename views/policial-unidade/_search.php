<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PolicialUnidadeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="policial-unidade-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idpolicial_unidade') ?>

    <?= $form->field($model, 'idpolicial') ?>

    <?= $form->field($model, 'idunidade') ?>

    <?= $form->field($model, 'inicio') ?>

    <?= $form->field($model, 'fim') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
