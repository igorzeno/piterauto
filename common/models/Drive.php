<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "drive".
 *
 * @property int $id
 * @property string|null $drive
 * @property string|null $alias_drive
 *
 * @property AutoDrive[] $autoDrives
 */
class Drive extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'drive';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['drive', 'alias_drive'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'drive' => 'Drive',
            'alias_drive' => 'Alias Drive',
        ];
    }

    /**
     * Gets query for [[AutoDrives]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutoDrives()
    {
        return $this->hasMany(AutoDrive::className(), ['drive_id' => 'id']);
    }
}
