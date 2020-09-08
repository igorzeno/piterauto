<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "engine".
 *
 * @property int $id
 * @property string|null $engine
 * @property string|null $alias_engine
 *
 * @property AutoEngine[] $autoEngines
 */
class Engine extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'engine';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['engine', 'alias_engine'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'engine' => 'Engine',
            'alias_engine' => 'Alias Engine',
        ];
    }

    /**
     * Gets query for [[AutoEngines]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutoEngines()
    {
        return $this->hasMany(AutoEngine::className(), ['engine_id' => 'id']);
    }
}
