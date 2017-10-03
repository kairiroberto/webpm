<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\BoPessoa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bo-pessoa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php if ($novo) { ?>

        <?php
        echo
        $form->field($model, 'idbo')->widget(Select2::classname(), [
            'data' => $listBo,
            'language' => 'pt-BR',
            'options' => ['placeholder' => 'Selecione uma ocorrência ...'],
            'pluginOptions' => [
                'allowClear' => false
            ],
        ]);
        ?>

    <?php } else { ?>

        <?= $form->field($model, 'idbo')->textInput(['maxlength' => true, 'readonly' => true]) ?>

    <?php } ?>

    <?php
    echo
    $form->field($model, 'idpessoa')->widget(Select2::classname(), [
        'data' => $listPessoa,
        'language' => 'pt-BR',
        'options' => ['placeholder' => 'Selecione uma pessoa ...'],
        'pluginOptions' => [
            'allowClear' => false
        ],
    ]);
    ?>

    <?php
    echo
    $form->field($model, 'idpessoa_tipo')->widget(Select2::classname(), [
        'data' => $listPessoaTipo,
        'language' => 'pt-BR',
        'options' => ['placeholder' => 'Selecione um tipo de parte ...'],
        'pluginOptions' => [
            'allowClear' => false
        ],
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
