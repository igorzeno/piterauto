<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DriveSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Drives';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drive-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Drive', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'drive',
            'alias_drive',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
