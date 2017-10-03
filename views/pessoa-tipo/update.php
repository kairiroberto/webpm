<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PessoaTipo */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Pessoa Tipo',
]) . $model->idpessoa_tipo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pessoa Tipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpessoa_tipo, 'url' => ['view', 'id' => $model->idpessoa_tipo]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pessoa-tipo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
