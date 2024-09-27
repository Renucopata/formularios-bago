<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "IMSPRODUCTO".
 *
 * @property string|null $CODPRODUCTO
 * @property string|null $CT
 * @property string|null $PRODUCTO
 * @property string|null $CIUDAD
 * @property string|null $PRESENTACION
 * @property int|null $CODIMS
 * @property string|null $LAB
 * @property float|null $UTRIM20
 * @property float|null $UTRIM19
 * @property float|null $UTRIM18
 * @property float|null $UTRIM17
 * @property float|null $UTRIM16
 * @property float|null $UTRIM15
 * @property float|null $UTRIM14
 * @property float|null $UTRIM13
 * @property float|null $UTRIM12
 * @property float|null $UTRIM11
 * @property float|null $UTRIM10
 * @property float|null $UTRIM09
 * @property float|null $UTRIM08
 * @property float|null $UTRIM07
 * @property float|null $UTRIM06
 * @property float|null $UTRIM05
 * @property float|null $UTRIM04
 * @property float|null $UTRIM03
 * @property float|null $UTRIM02
 * @property float|null $UTRIM01
 * @property float|null $VTRIM20
 * @property float|null $VTRIM19
 * @property float|null $VTRIM18
 * @property float|null $VTRIM17
 * @property float|null $VTRIM16
 * @property float|null $VTRIM15
 * @property float|null $VTRIM14
 * @property float|null $VTRIM13
 * @property float|null $VTRIM12
 * @property float|null $VTRIM11
 * @property float|null $VTRIM10
 * @property float|null $VTRIM09
 * @property float|null $VTRIM08
 * @property float|null $VTRIM07
 * @property float|null $VTRIM06
 * @property float|null $VTRIM05
 * @property float|null $VTRIM04
 * @property float|null $VTRIM03
 * @property float|null $VTRIM02
 * @property float|null $VTRIM01
 * @property float|null $UMES24
 * @property float|null $UMES23
 * @property float|null $UMES22
 * @property float|null $UMES21
 * @property float|null $UMES20
 * @property float|null $UMES19
 * @property float|null $UMES18
 * @property float|null $UMES17
 * @property float|null $UMES16
 * @property float|null $UMES15
 * @property float|null $UMES14
 * @property float|null $UMES13
 * @property float|null $UMES12
 * @property float|null $UMES11
 * @property float|null $UMES10
 * @property float|null $UMES09
 * @property float|null $UMES08
 * @property float|null $UMES07
 * @property float|null $UMES06
 * @property float|null $UMES05
 * @property float|null $UMES04
 * @property float|null $UMES03
 * @property float|null $UMES02
 * @property float|null $UMES01
 * @property float|null $VMES24
 * @property float|null $VMES23
 * @property float|null $VMES22
 * @property float|null $VMES21
 * @property float|null $VMES20
 * @property float|null $VMES19
 * @property float|null $VMES18
 * @property float|null $VMES17
 * @property float|null $VMES16
 * @property float|null $VMES15
 * @property float|null $VMES14
 * @property float|null $VMES13
 * @property float|null $VMES12
 * @property float|null $VMES11
 * @property float|null $VMES10
 * @property float|null $VMES09
 * @property float|null $VMES08
 * @property float|null $VMES07
 * @property float|null $VMES06
 * @property float|null $VMES05
 * @property float|null $VMES04
 * @property float|null $VMES03
 * @property float|null $VMES02
 * @property float|null $VMES01
 * @property int|null $FLAG
 * @property string|null $LANZAMIENTO
 */
class ImsProducto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'IMSPRODUCTO';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CODIMS', 'FLAG'], 'integer'],
            [['UTRIM20', 'UTRIM19', 'UTRIM18', 'UTRIM17', 'UTRIM16', 'UTRIM15', 'UTRIM14', 'UTRIM13', 'UTRIM12', 'UTRIM11', 'UTRIM10', 'UTRIM09', 'UTRIM08', 'UTRIM07', 'UTRIM06', 'UTRIM05', 'UTRIM04', 'UTRIM03', 'UTRIM02', 'UTRIM01', 'VTRIM20', 'VTRIM19', 'VTRIM18', 'VTRIM17', 'VTRIM16', 'VTRIM15', 'VTRIM14', 'VTRIM13', 'VTRIM12', 'VTRIM11', 'VTRIM10', 'VTRIM09', 'VTRIM08', 'VTRIM07', 'VTRIM06', 'VTRIM05', 'VTRIM04', 'VTRIM03', 'VTRIM02', 'VTRIM01', 'UMES24', 'UMES23', 'UMES22', 'UMES21', 'UMES20', 'UMES19', 'UMES18', 'UMES17', 'UMES16', 'UMES15', 'UMES14', 'UMES13', 'UMES12', 'UMES11', 'UMES10', 'UMES09', 'UMES08', 'UMES07', 'UMES06', 'UMES05', 'UMES04', 'UMES03', 'UMES02', 'UMES01', 'VMES24', 'VMES23', 'VMES22', 'VMES21', 'VMES20', 'VMES19', 'VMES18', 'VMES17', 'VMES16', 'VMES15', 'VMES14', 'VMES13', 'VMES12', 'VMES11', 'VMES10', 'VMES09', 'VMES08', 'VMES07', 'VMES06', 'VMES05', 'VMES04', 'VMES03', 'VMES02', 'VMES01'], 'number'],
            [['CODPRODUCTO'], 'string', 'max' => 20],
            [['CT'], 'string', 'max' => 50],
            [['PRODUCTO', 'PRESENTACION'], 'string', 'max' => 80],
            [['CIUDAD'], 'string', 'max' => 30],
            [['LAB'], 'string', 'max' => 255],
            [['LANZAMIENTO'], 'string', 'max' => 7],
        ];
    }

    /**
     * {@inheritdoc}
     * 
     */

     public static function primaryKey()
     {
         return ['CODIMS']; // Or an array of columns if a composite key
     }
     
    public function attributeLabels()
    {
        return [
            'CODPRODUCTO' => Yii::t('app', 'Codproducto'),
            'CT' => Yii::t('app', 'Ct'),
            'PRODUCTO' => Yii::t('app', 'Producto'),
            'CIUDAD' => Yii::t('app', 'Ciudad'),
            'PRESENTACION' => Yii::t('app', 'Presentacion'),
            'CODIMS' => Yii::t('app', 'Codims'),
            'LAB' => Yii::t('app', 'Lab'),
            'UTRIM20' => Yii::t('app', 'Utrim20'),
            'UTRIM19' => Yii::t('app', 'Utrim19'),
            'UTRIM18' => Yii::t('app', 'Utrim18'),
            'UTRIM17' => Yii::t('app', 'Utrim17'),
            'UTRIM16' => Yii::t('app', 'Utrim16'),
            'UTRIM15' => Yii::t('app', 'Utrim15'),
            'UTRIM14' => Yii::t('app', 'Utrim14'),
            'UTRIM13' => Yii::t('app', 'Utrim13'),
            'UTRIM12' => Yii::t('app', 'Utrim12'),
            'UTRIM11' => Yii::t('app', 'Utrim11'),
            'UTRIM10' => Yii::t('app', 'Utrim10'),
            'UTRIM09' => Yii::t('app', 'Utrim09'),
            'UTRIM08' => Yii::t('app', 'Utrim08'),
            'UTRIM07' => Yii::t('app', 'Utrim07'),
            'UTRIM06' => Yii::t('app', 'Utrim06'),
            'UTRIM05' => Yii::t('app', 'Utrim05'),
            'UTRIM04' => Yii::t('app', 'Utrim04'),
            'UTRIM03' => Yii::t('app', 'Utrim03'),
            'UTRIM02' => Yii::t('app', 'Utrim02'),
            'UTRIM01' => Yii::t('app', 'Utrim01'),
            'VTRIM20' => Yii::t('app', 'Vtrim20'),
            'VTRIM19' => Yii::t('app', 'Vtrim19'),
            'VTRIM18' => Yii::t('app', 'Vtrim18'),
            'VTRIM17' => Yii::t('app', 'Vtrim17'),
            'VTRIM16' => Yii::t('app', 'Vtrim16'),
            'VTRIM15' => Yii::t('app', 'Vtrim15'),
            'VTRIM14' => Yii::t('app', 'Vtrim14'),
            'VTRIM13' => Yii::t('app', 'Vtrim13'),
            'VTRIM12' => Yii::t('app', 'Vtrim12'),
            'VTRIM11' => Yii::t('app', 'Vtrim11'),
            'VTRIM10' => Yii::t('app', 'Vtrim10'),
            'VTRIM09' => Yii::t('app', 'Vtrim09'),
            'VTRIM08' => Yii::t('app', 'Vtrim08'),
            'VTRIM07' => Yii::t('app', 'Vtrim07'),
            'VTRIM06' => Yii::t('app', 'Vtrim06'),
            'VTRIM05' => Yii::t('app', 'Vtrim05'),
            'VTRIM04' => Yii::t('app', 'Vtrim04'),
            'VTRIM03' => Yii::t('app', 'Vtrim03'),
            'VTRIM02' => Yii::t('app', 'Vtrim02'),
            'VTRIM01' => Yii::t('app', 'Vtrim01'),
            'UMES24' => Yii::t('app', 'Umes24'),
            'UMES23' => Yii::t('app', 'Umes23'),
            'UMES22' => Yii::t('app', 'Umes22'),
            'UMES21' => Yii::t('app', 'Umes21'),
            'UMES20' => Yii::t('app', 'Umes20'),
            'UMES19' => Yii::t('app', 'Umes19'),
            'UMES18' => Yii::t('app', 'Umes18'),
            'UMES17' => Yii::t('app', 'Umes17'),
            'UMES16' => Yii::t('app', 'Umes16'),
            'UMES15' => Yii::t('app', 'Umes15'),
            'UMES14' => Yii::t('app', 'Umes14'),
            'UMES13' => Yii::t('app', 'Umes13'),
            'UMES12' => Yii::t('app', 'Umes12'),
            'UMES11' => Yii::t('app', 'Umes11'),
            'UMES10' => Yii::t('app', 'Umes10'),
            'UMES09' => Yii::t('app', 'Umes09'),
            'UMES08' => Yii::t('app', 'Umes08'),
            'UMES07' => Yii::t('app', 'Umes07'),
            'UMES06' => Yii::t('app', 'Umes06'),
            'UMES05' => Yii::t('app', 'Umes05'),
            'UMES04' => Yii::t('app', 'Umes04'),
            'UMES03' => Yii::t('app', 'Umes03'),
            'UMES02' => Yii::t('app', 'Umes02'),
            'UMES01' => Yii::t('app', 'Umes01'),
            'VMES24' => Yii::t('app', 'Vmes24'),
            'VMES23' => Yii::t('app', 'Vmes23'),
            'VMES22' => Yii::t('app', 'Vmes22'),
            'VMES21' => Yii::t('app', 'Vmes21'),
            'VMES20' => Yii::t('app', 'Vmes20'),
            'VMES19' => Yii::t('app', 'Vmes19'),
            'VMES18' => Yii::t('app', 'Vmes18'),
            'VMES17' => Yii::t('app', 'Vmes17'),
            'VMES16' => Yii::t('app', 'Vmes16'),
            'VMES15' => Yii::t('app', 'Vmes15'),
            'VMES14' => Yii::t('app', 'Vmes14'),
            'VMES13' => Yii::t('app', 'Vmes13'),
            'VMES12' => Yii::t('app', 'Vmes12'),
            'VMES11' => Yii::t('app', 'Vmes11'),
            'VMES10' => Yii::t('app', 'Vmes10'),
            'VMES09' => Yii::t('app', 'Vmes09'),
            'VMES08' => Yii::t('app', 'Vmes08'),
            'VMES07' => Yii::t('app', 'Vmes07'),
            'VMES06' => Yii::t('app', 'Vmes06'),
            'VMES05' => Yii::t('app', 'Vmes05'),
            'VMES04' => Yii::t('app', 'Vmes04'),
            'VMES03' => Yii::t('app', 'Vmes03'),
            'VMES02' => Yii::t('app', 'Vmes02'),
            'VMES01' => Yii::t('app', 'Vmes01'),
            'FLAG' => Yii::t('app', 'Flag'),
            'LANZAMIENTO' => Yii::t('app', 'Lanzamiento'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return ImsProductoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ImsProductoQuery(get_called_class());
    }
}
