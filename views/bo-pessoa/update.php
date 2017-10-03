<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BoPessoa */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
            'modelClass' => 'Bo Pessoa',
        ]) . $model->idbo_pessoa;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bo Pessoas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idbo_pessoa, 'url' => ['view', 'id' => $model->idbo_pessoa]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="bo-pessoa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render('_form', [
        'model' => $model,
        'listPessoa' => $listPessoa,
        'listPessoaTipo' => $listPessoaTipo,
        'listBo' => $listBo,
        'novo' => false,
    ])
    ?>

</div>
