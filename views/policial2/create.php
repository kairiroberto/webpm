<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Policial2 */

$this->title = Yii::t('app', 'Create Policial2');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policial2s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policial2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
