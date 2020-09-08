<div>
    <?php
    use yii\grid\GridView;
    
    echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'name_brand',
                'name_auto',
                'engine',
                'drive',
                ['class' => 'yii\grid\ActionColumn'],
            ],
            ]);
    /*
        if($autos!==false){
            foreach ($autos as $key => $value)
            { ?>
            <div class="ajax_auto"> 
            <p><b>Марка:</b> <?= $value['name_brand']?> - <?= $value['alias_brand']?> </p>
            <p><b>Модель:</b> <?= $value['name_auto']?> - <?= $value['alias_auto']?> </p>
            <p><b>Привод:</b> <?= $value['name_drive']?> - <?= $value['alias_drive']?> </p>
            <p><b>Тип двигателя:</b> <?= $value['name_engine']?> - <?= $value['alias_engine']?> </p>
            <hr>
            </div>      
     */?>
</div>