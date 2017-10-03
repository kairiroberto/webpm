<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Posto */

$this->title = Yii::t('app', 'Create Posto');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Postos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
