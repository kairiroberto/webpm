<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Unidade */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Unidade',
]) . $model->idunidade;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Unidades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idunidade, 'url' => ['view', 'id' => $model->idunidade]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="unidade-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
