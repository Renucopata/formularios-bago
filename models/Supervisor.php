<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SUPERVISOR".
 *
 * @property string $USERNAME
 * @property int $CODREG Codigo de Region
 * @property string|null $SEXO
 * @property int|null $CODSUP Codigo de Supervisor
 * @property string|null $NOMBRE
 * @property string|null $CARGO
 *
 * @property REGION $cODREG
 * @property VISITADOR[] $vISITADORs
 */
class Supervisor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SUPERVISOR';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CODREG'], 'required'],
            [['CODREG', 'CODSUP'], 'integer'],
            [['USERNAME'], 'string', 'max' => 50],
            [['SEXO'], 'string', 'max' => 1],
            [['NOMBRE'], 'string', 'max' => 200],
            [['CARGO'], 'string', 'max' => 100],
            [['USERNAME'], 'unique'],
            [['CODSUP'], 'unique'],
            [['CODREG'], 'exist', 'skipOnError' => true, 'targetClass' => REGION::class, 'targetAttribute' => ['CODREG' => 'CODREG']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'USERNAME' => Yii::t('app', 'Username'),
            'CODREG' => Yii::t('app', 'Codreg'),
            'SEXO' => Yii::t('app', 'Sexo'),
            'CODSUP' => Yii::t('app', 'Codsup'),
            'NOMBRE' => Yii::t('app', 'Nombre'),
            'CARGO' => Yii::t('app', 'Cargo'),
        ];
    }

    /**
     * Gets query for [[CODREG]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCODREG()
    {
        return $this->hasOne(REGION::class, ['CODREG' => 'CODREG']);
    }

    /**
     * Gets query for [[VISITADORs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVISITADORs()
    {
        return $this->hasMany(VISITADOR::class, ['SUPERVISOR' => 'USERNAME']);
    }
}
