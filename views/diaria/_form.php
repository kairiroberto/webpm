<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\time\TimePicker;
use kartik\range\RangeInput;
use kartik\touchspin\TouchSpin;
use kartik\switchinput\SwitchInput;

/* @var $this yii\web\View */
/* @var $model app\models\Diaria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diaria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    echo 'Data inicial <br>' .
    DatePicker::widget([
        'model' => $model,
        'attribute' => 'data_ini',
        'options' => ['placeholder' => 'Início'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
        ]
    ]);
    echo '<br>';
    ?>

    <?php
    echo
    $form->field($model, 'hora_ini')->widget(TimePicker::classname(), [
        'pluginOptions' => [
            'defaultTime' => '00:00:00',
            'showSeconds' => true,
            'showMeridian' => false,
            'minuteStep' => 1,
            'secondStep' => 5,
        ]
    ]);
    echo '<br>';
    ?>

    <?php
    echo 'Data final <br>' .
    DatePicker::widget([
        'model' => $model,
        'attribute' => 'data_fin',
        'options' => ['placeholder' => 'Início'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
        ]
    ]);
    echo '<br>';
    ?>

    <?php
    echo
    $form->field($model, 'hora_fin')->widget(TimePicker::classname(), [
        'pluginOptions' => [
            'defaultTime' => '00:00:00',
            'showSeconds' => true,
            'showMeridian' => false,
            'minuteStep' => 1,
            'secondStep' => 5,
        ]
    ]);
    echo '<br>';
    ?>

    <?= $form->field($model, 'servico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'local')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'qtd_policiais')->widget(TouchSpin::classname(), [
        'options' => ['placeholder' => 'Quantidade de policiais...'],
        //'name' => 't4',
        'pluginOptions' => [
            'buttonup_class' => 'btn btn-primary',
            'buttondown_class' => 'btn btn-info',
            'buttonup_txt' => '<i class="glyphicon glyphicon-plus-sign"></i>',
            'buttondown_txt' => '<i class="glyphicon glyphicon-minus-sign"></i>'
        ]
    ]);
    ?>

    <?=
    $form->field($model, 'valor')->widget(TouchSpin::classname(), [
        'options' => ['placeholder' => 'Valor...'],
        //'name' => 't4',
        'pluginOptions' => ['prefix' => '$']
    ]);
    ?>

    <?=
    $form->field($model, 'extra')->widget(SwitchInput::classname(), [
        'pluginOptions' => [
            'onText' => 'Sim',
            'offText' => 'Não',
        ]
    ])
    ?>

    <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>