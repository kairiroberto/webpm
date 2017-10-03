<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Oficial */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Oficial',
]) . $model->idoficial;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Oficials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idoficial, 'url' => ['view', 'id' => $model->idoficial]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="oficial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $criar = false; ?>
    
    <?= $this->render('_form', [
        'model' => $model,
        'listPolicial' => $listPolicial,
        'listPosto' => $listPosto,
        'criar' => $criar,
    ]) ?>

</div>
