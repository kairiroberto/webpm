<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Praca */

$this->title = Yii::t('app', 'Create Praca');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pracas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="praca-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $criar = true; ?>
    
    <?= $this->render('_form', [
        'model' => $model,
        'listPolicial' => $listPolicial,
        'listGraduacao' => $listGraduacao,
        'criar' => $criar,
    ]) ?>

</div>
