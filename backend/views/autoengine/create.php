<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AutoEngine */

$this->title = 'Create Auto Engine';
$this->params['breadcrumbs'][] = ['label' => 'Auto Engines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auto-engine-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
