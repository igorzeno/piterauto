<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Drive */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="drive-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'drive')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alias_drive')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
