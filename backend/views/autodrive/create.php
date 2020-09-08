<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AutoDrive */

$this->title = 'Create Auto Drive';
$this->params['breadcrumbs'][] = ['label' => 'Auto Drives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auto-drive-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
