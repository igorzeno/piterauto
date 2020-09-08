<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use common\models\Auto;
use common\models\Brand;
use common\models\Engine;
use common\models\Drive;


class CatalogController extends Controller
{
    public function actionIndex()
    {
        
        $auto = new Auto();
        $brand = new Brand();
        $engine = new Engine();
        $drive = new Drive();
        

if (isset($_GET['brand']) || isset($_GET['auto']) || isset($_GET['engine']) || isset($_GET['drive']) ) {
           // var_dump($_GET['brand']); 
            $id_brand = $_GET['brand'];
        
           // var_dump($_GET['auto']); 
            $id_auto = $_GET['auto'];
        
           // var_dump($_GET['engine']); 
            $id_engine = $_GET['engine'];
        
            //var_dump($_GET['drive']); 
            $id_drive = $_GET['drive'];



            $allprov = Auto::search([$id_brand,$id_auto,$id_engine,$id_drive]);
            
            list($autos, $dataProvider) = $allprov;
            
            //$countQuery = clone  $query;
            // подключаем класс Pagination, выводим по 5 пунктов на страницу
            //$pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 5]);
            // приводим параметры в ссылке к ЧПУ
           // $pages->pageSizeParam = false;
//            $autos =  $query->offset($pages->offset)
//                ->limit($pages->limit)
//                ->all();
//        
           // print_r(Yii::$app->request->get());
           
        }
        else {
            $autos=false;
        }   
        if(!empty($_GET['ajax'])){
            $this->layout = 'empty';
            $html = $this->render('empty', [
                'autos' => $autos,
                'dataProvider' => $dataProvider
            ]);
            //header('Content-Type: text/json');
            $h1='AJAX';
            return json_encode(array('autos' => $html, 'h1'=>$h1  ));
        }
        return $this->render('searchauto', [
            'autos' => $autos,
            'pages' => $pages,
            'auto' => $auto,
            'brand' => $brand,
            'engine' => $engine,
            'drive' => $drive,
            'dataProvider' => $dataProvider,
        ]);  
        
    }
}
