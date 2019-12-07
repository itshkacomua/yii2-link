<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model itshkacomua\link\models\Link */

$this->title = Yii::t('app', 'Update Link: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Links'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="link-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
