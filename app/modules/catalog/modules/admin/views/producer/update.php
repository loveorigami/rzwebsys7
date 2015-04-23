<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\modules\catalog\models\Producer $model
*/

$this->title = \Yii::t($this->context->tFile, 'Update Producer').': ' . $model->getItemLabel();
$this->params['breadcrumbs'][] = ['label' => \Yii::t($this->context->tFile, 'Producers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = \Yii::t('core', 'Update');
?>
<div class="producer-update">

    <h1><?=Html::encode($this->title) ?></h1>

    <?=$this->render('_form', [
    'model' => $model,
    ]) ?>

</div>

