<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BoPessoaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bo-pessoa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idbo_pessoa') ?>

    <?= $form->field($model, 'idbo') ?>

    <?= $form->field($model, 'idpessoa') ?>

    <?= $form->field($model, 'idpessoa_tipo') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
