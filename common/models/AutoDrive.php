<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "auto_drive".
 *
 * @property int $id
 * @property int|null $auto_id
 * @property int|null $drive_id
 *
 * @property Auto $auto
 * @property Drive $drive
 */
class AutoDrive extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'auto_drive';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['auto_id', 'drive_id'], 'integer'],
            [['auto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Auto::className(), 'targetAttribute' => ['auto_id' => 'id']],
            [['drive_id'], 'exist', 'skipOnError' => true, 'targetClass' => Drive::className(), 'targetAttribute' => ['drive_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'auto_id' => 'Auto ID',
            'drive_id' => 'Drive ID',
        ];
    }

    /**
     * Gets query for [[Auto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuto()
    {
        return $this->hasOne(Auto::className(), ['id' => 'auto_id']);
    }

    /**
     * Gets query for [[Drive]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrive()
    {
        return $this->hasOne(Drive::className(), ['id' => 'drive_id']);
    }
}
