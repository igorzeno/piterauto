<?php

namespace common\models;
use yii\data\ActiveDataProvider;


/**
 * This is the model class for table "auto".
 *
 * @property int $id
 * @property string|null $name_auto
 * @property string|null $alias_auto
 * @property int|null $brand_id
 *
 * @property Brand $brand
 * @property AutoDrive[] $autoDrives
 * @property AutoEngine[] $autoEngines
 */
class Auto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'auto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_id'], 'integer'],
            [['name_auto', 'alias_auto'], 'string', 'max' => 32],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_auto' => 'Name Auto',
            'alias_auto' => 'Alias Auto',
            'brand_id' => 'Brand ID',
        ];
    }

    /**
     * Gets query for [[Brand]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }

    /**
     * Gets query for [[AutoDrives]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutoDrives()
    {
        return $this->hasMany(AutoDrive::className(), ['auto_id' => 'id']);
    }

    /**
     * Gets query for [[AutoEngines]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutoEngines()
    {
        return $this->hasMany(AutoEngine::className(), ['auto_id' => 'id']);
    }
    
    
    public static function search($params_search)
    {
        list( $id_brand,$id_auto, $engine, $drive) = $params_search;
//        SELECT * FROM auto 
//LEFT JOIN brand ON auto.brand_id = brand.id 
//LEFT JOIN auto_drive ON auto_drive.auto_id=auto.id 
//LEFT JOIN drive ON auto_drive.drive_id=drive.id 
//LEFT JOIN auto_engine ON auto_engine.auto_id=auto.id 
//LEFT JOIN engine ON auto_engine.engine_id=engine.id
//WHERE auto.id =6 AND brand.id = 2 AND drive.id = 2 AND engine.id = 1;
//ORDER BY auto.id, auto_name, brand_name;
        
        $where=array();
        if($id_brand) {$where['brand.alias_brand']=$id_brand;}
        if($id_auto) {$where['auto.alias_auto']=$id_auto;}
        if($engine) {$where['engine.alias_engine']=$engine;}
        if($drive) {$where['drive.alias_drive']=$drive;}
        $autos=false;
        
        if($where){
            $query = (new \yii\db\Query())
            ->select(['*'])
            ->from('auto')
            ->leftJoin('brand', 'auto.brand_id = brand.id')
            ->leftJoin('auto_drive', 'auto_drive.auto_id=auto.id')
            ->leftJoin('drive', 'auto_drive.drive_id=drive.id')
            ->leftJoin('auto_engine', 'auto_engine.auto_id=auto.id')
            ->leftJoin('engine', 'auto_engine.engine_id=engine.id')
            ->where($where)
            ->orderBy([
                'auto.id' => SORT_DESC,
                'name_auto' => SORT_DESC,
                'name_brand' => SORT_DESC
            ]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,       
            'pagination' => [
                'pageSize' => 6,
                'page'=>$_GET['page'] ? $_GET['page']-1 : 0,
                'params'=>['brand'=>$id_brand,'auto'=>$id_auto,'engine'=>$engine,'drive'=>$drive]
            ],
        ]);

        $model = $dataProvider->getModels(); 

        $autos = [];
        foreach ($model as $key => $val) {
            $autos[$key]['id_auto'] = $val['id'];            
            $autos[$key]['name_auto'] = $val['name_auto'];            
            $autos[$key]['alias_auto'] = $val['alias_auto'];            
          
            $autos[$key]['id_brand'] = $val['brand_id'];            
            $autos[$key]['name_brand'] = $val['name_brand'];            
            $autos[$key]['alias_brand'] = $val['alias_brand'];  
            
            $autos[$key]['id_drive'] = $val['drive_id'];            
            $autos[$key]['name_drive'] = $val['drive'];            
            $autos[$key]['alias_drive'] = $val['alias_drive']; 
            
            $autos[$key]['id_engine'] = $val['engine_id'];            
            $autos[$key]['name_engine'] = $val['engine'];            
            $autos[$key]['alias_engine'] = $val['alias_engine'];  
            }
        
        }
        return $allprov = [$autos, $dataProvider];
    }
}
