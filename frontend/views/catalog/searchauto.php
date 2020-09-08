<?php

use common\models\Auto;
use common\models\Brand;
use common\models\Engine;
use common\models\Drive;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\grid\GridView;

if($autos != false){
    $this->title = 'Продажа новых автомобилей '
        .(ucwords(strtolower($_GET['brand'] )) ?: ""). ' ' 
        .(strtoupper($_GET['auto'] ) ?: ""). 
        ' в Санкт-Петербурге';
}
else {
    $this->title = 'Продажа новых автомобилей в Санкт-Петербурге';
}

$script = <<< JS
$('.btn.btn-success').on('click', function(){

        $('.ajax_auto').remove();
        if( $('#engine-engine').val() || $('#drive-drive').val()){

            var brand = $('#brand-name_brand').val();
            var auto = $('#auto-name_auto').val();
            var en = $('#engine-engine').val(); 
            var dr = $('#drive-drive').val();
        var str = "/catalog"+ (brand ? ("/" + brand + (auto ? ("/" + auto):"")):"") + "?engine=" + en + "&drive=" + dr
            let stateObj = {
                foo: str,
            }
            history.pushState(stateObj, "page 2", str);
        
            var auto = $('#auto-name_auto').val();
            var brand = $('#brand-name_brand').val();
            var engine = $('#engine-engine').val();
            var drive = $('#drive-drive').val();

            $.ajax({
                type: "GET",
                data: {brand:brand,auto:auto,engine:engine,drive:drive,ajax:1},
                cache: false,
                url: "/catalog/",
                contentType: "application/json",
                    }).done(function(data) {

            var el = JSON.parse(data);
  
                //$( el['autos'] ).insertBefore( ".load-list" );
                $(".load-list").html(el['autos']);
                //$("h1").html(el['h1']);

                }).fail(function() {
                    alert('NO');
                });
        
                return false;
            }else{
        
            if ($('#brand-name_brand').val() == ""  && $('#auto-name_auto').val() ) {
                    alert("Необходимо указать марку");
                    return false;
                }
            if( $('#brand-name_brand').val() && $('#auto-name_auto').val() == ""){
                    var url='/catalog/'+ $('#brand-name_brand').val();
                }
            if( $('#brand-name_brand').val() && $('#auto-name_auto').val()){
                    var url='/catalog/'+ $('#brand-name_brand').val()+'/'+ $('#auto-name_auto').val();
                }
                location.href=url;
            }
        return false;
    });
JS;
$this->registerJs($script);
?>
<div><h1><?=$this->title?></h1>
    <hr>
</div> 
<div>
    <?php $form = ActiveForm::begin(['method' => 'get', 'action'=>['']]); ?>
    
    <?php $params = ['prompt' => ' - ', 'options' => [$_GET['brand'] => ['Selected'=>'selected']]];
        echo $form->field($brand, 'name_brand')->textInput() 
            ->dropDownList(
            \yii\helpers\ArrayHelper::map(Brand::find()->all(), 'alias_brand', 'name_brand'), $params
        ); ?>
    
    <?php $params = ['prompt' => ' - ', 'options' => [$_GET['auto'] => ['Selected'=>'selected']]];
        echo $form->field($auto, 'name_auto')->textInput()  
        ->dropDownList(
            \yii\helpers\ArrayHelper::map(Auto::find()->all(), 'alias_auto', 'name_auto'), $params
        ); ?>

    <?php $params = ['prompt' => ' - ', 'options' => [$_GET['Engine']['engine'] => ['Selected'=>'selected']]];
        echo $form->field($engine, 'engine')->textInput() 
            ->dropDownList(
            \yii\helpers\ArrayHelper::map(Engine::find()->all(), 'alias_engine', 'engine'), $params
        ); ?>
        
    <?php $params = ['prompt' => ' - ', 'options' => [$_GET['Drive']['drive'] => ['Selected'=>'selected']]]; 
        echo $form->field($drive, 'drive')->textInput() 
            ->dropDownList(
            \yii\helpers\ArrayHelper::map(Drive::find()->all(), 'alias_drive', 'drive'), $params
        ); ?>
    
        <div>
            <?php 
                Pjax::begin();
            ?>
            <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
            <?php 
                Pjax::end();
            ?>
            <br><br>
        </div>
            
    <?php ActiveForm::end(); ?>
</div>
<div>
    <div class="load-list">
    <?php
    if(!empty($dataProvider)){
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
    }
    ?>    
    </div> 
</div>

    