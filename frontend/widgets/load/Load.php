<?php

namespace frontend\widgets\load;
use yii\base\Widget;

class Load extends Widget
{
    public $autos;
    public $dataProvider;
    public function run()
    {
        $autos = $this->autos;
        $dataProvider = $this->dataProvider;
        return $this->render('index', [
                    'autos' => $autos,
                    'dataProvider' => $dataProvider,
        ]);
    }

}
