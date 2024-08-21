<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "REGION".
 *
 * @property int $CODREG
 * @property string|null $REGION
 *
 * @property SUPERVISOR[] $sUPERVISORs
 */
class Region extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'REGION';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CODREG'], 'required'],
            [['CODREG'], 'integer'],
            [['REGION'], 'string', 'max' => 100],
            [['CODREG'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CODREG' => Yii::t('app', 'Codreg'),
            'REGION' => Yii::t('app', 'Region'),
        ];
    }

    /**
     * Gets query for [[SUPERVISORs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSUPERVISORs()
    {
        return $this->hasMany(SUPERVISOR::class, ['CODREG' => 'CODREG']);
    }
}
