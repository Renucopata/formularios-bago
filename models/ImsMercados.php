<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "IMSMERCADOS".
 *
 * @property int|null $CODIGOIMS
 * @property string|null $MERCADO
 * @property string|null $PRESENTACION
 * @property string|null $PRODUCTOS
 * @property int|null $CANTIDAD
 * @property int|null $DESCUENTO
 * @property string|null $LINEA
 * @property string|null $JEFEDEPRODUCTO
 * @property int|null $UNIDADES
 * @property string|null $F10
 * @property string|null $F11
 * @property string|null $F12
 * @property string|null $F13
 * @property string|null $F14
 * @property string|null $F15
 * @property string|null $F16
 */
class ImsMercados extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'IMSMERCADOS';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CODIGOIMS', 'CANTIDAD', 'DESCUENTO', 'UNIDADES'], 'integer'],
            [['MERCADO', 'LINEA', 'JEFEDEPRODUCTO', 'F10', 'F11', 'F12', 'F13', 'F14', 'F15', 'F16'], 'string', 'max' => 50],
            [['PRESENTACION', 'PRODUCTOS'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function primaryKey()
{
    return ['CODIGOIMS']; // Or an array of columns if a composite key
}

    public function attributeLabels()
    {
        return [
            'CODIGOIMS' => Yii::t('app', 'Codigoims'),
            'MERCADO' => Yii::t('app', 'Mercado'),
            'PRESENTACION' => Yii::t('app', 'Presentacion'),
            'PRODUCTOS' => Yii::t('app', 'Productos'),
            'CANTIDAD' => Yii::t('app', 'Cantidad'),
            'DESCUENTO' => Yii::t('app', 'Descuento'),
            'LINEA' => Yii::t('app', 'Linea'),
            'JEFEDEPRODUCTO' => Yii::t('app', 'Jefedeproducto'),
            'UNIDADES' => Yii::t('app', 'Unidades'),
            'F10' => Yii::t('app', 'F10'),
            'F11' => Yii::t('app', 'F11'),
            'F12' => Yii::t('app', 'F12'),
            'F13' => Yii::t('app', 'F13'),
            'F14' => Yii::t('app', 'F14'),
            'F15' => Yii::t('app', 'F15'),
            'F16' => Yii::t('app', 'F16'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return ImsMercadosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ImsMercadosQuery(get_called_class());
    }
}
