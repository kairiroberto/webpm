<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PessoaTipo */

$this->title = Yii::t('app', 'Create Pessoa Tipo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pessoa Tipos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoa-tipo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
