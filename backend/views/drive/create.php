<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Drive */

$this->title = 'Create Drive';
$this->params['breadcrumbs'][] = ['label' => 'Drives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drive-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
