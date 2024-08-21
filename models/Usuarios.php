<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "USUARIOS".
 *
 * @property int $ID_USUARIO
 * @property string|null $NOMBRES
 * @property string|null $APELLIDOS
 * @property string|null $EMAIL
 * @property string|null $USERNAME
 * @property string|null $PASSWORD
 * @property string|null $SESSION1
 * @property int|null $ID_DEPTO
 * @property string|null $CODVISIT
 * @property string|null $ESTADO
 * @property string|null $CREATE_AT
 * @property string|null $CREATE_BY
 * @property string|null $UPDATE_AT
 * @property string|null $UPDATE_BY
 * @property string|null $LAST_LOGIN
 * @property int|null $ID_CARGO
 * @property string|null $CODALM
 * @property string|null $AUTHKEY
 * @property int|null $ID_PUNTOVENTA
 * @property int|null $EMISION
 * @property string|null $ACCESS_TOKEN
 */
//class Usuarios extends \yii\db\ActiveRecord
class Usuarios extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface //AQUIuser
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'USUARIOS';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_USUARIO'], 'required'],
            [['ID_USUARIO', 'ID_DEPTO', 'ID_CARGO', 'ID_PUNTOVENTA', 'EMISION'], 'integer'],
            [['NOMBRES'], 'string', 'max' => 25],
            [['APELLIDOS'], 'string', 'max' => 35],
            [['EMAIL'], 'string', 'max' => 50],
            [['USERNAME', 'PASSWORD', 'CREATE_BY', 'UPDATE_BY', 'AUTHKEY'], 'string', 'max' => 64],
            [['SESSION1'], 'string', 'max' => 255],
            [['CODVISIT', 'CODALM'], 'string', 'max' => 2],
            [['ESTADO'], 'string', 'max' => 1],
            [['CREATE_AT', 'UPDATE_AT', 'LAST_LOGIN'], 'string', 'max' => 7],
            [['ACCESS_TOKEN'], 'string', 'max' => 100],
            [['ID_USUARIO', 'ID_USUARIO'], 'unique', 'targetAttribute' => ['ID_USUARIO', 'ID_USUARIO']],
            [['ID_USUARIO'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_USUARIO' => Yii::t('app', 'Id Usuario'),
            'NOMBRES' => Yii::t('app', 'Nombres'),
            'APELLIDOS' => Yii::t('app', 'Apellidos'),
            'EMAIL' => Yii::t('app', 'Email'),
            'USERNAME' => Yii::t('app', 'Username'),
            'PASSWORD' => Yii::t('app', 'Password'),
            'SESSION1' => Yii::t('app', 'Session1'),
            'ID_DEPTO' => Yii::t('app', 'Id Depto'),
            'CODVISIT' => Yii::t('app', 'Codvisit'),
            'ESTADO' => Yii::t('app', 'Estado'),
            'CREATE_AT' => Yii::t('app', 'Create At'),
            'CREATE_BY' => Yii::t('app', 'Create By'),
            'UPDATE_AT' => Yii::t('app', 'Update At'),
            'UPDATE_BY' => Yii::t('app', 'Update By'),
            'LAST_LOGIN' => Yii::t('app', 'Last Login'),
            'ID_CARGO' => Yii::t('app', 'Id Cargo'),
            'CODALM' => Yii::t('app', 'Codalm'),
            'AUTHKEY' => Yii::t('app', 'Authkey'),
            'ID_PUNTOVENTA' => Yii::t('app', 'Id Puntoventa'),
            'EMISION' => Yii::t('app', 'Emision'),
            'ACCESS_TOKEN' => Yii::t('app', 'Access Token'),
        ];
    }

//////////DESDE AQUIuser ACCESO: 
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }
        
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        //return $this->id;
        return $this->ID_USUARIO;
    }

    public function getAuthKey()
    {
        return $this->AUTHKEY;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public static function findByUsername($username)
    {
        //Aqui Acceso
        return self::findOne(['USERNAME'=>$username]);
    }   

    public function validatePassword($password)
    {
        //Aqui Acceso
        //return $this->PASSWORD === $password;
        return $this->hashPassword($password,$this->SESSION1)===$this->PASSWORD;
    }    
    ////////////////////////
    public function hashPassword($password,$salt)
    {
        /*return crypt($password, $this->generateSalt());*/
        return md5($salt.$password);
    }

    public function generateSalt()
    {
        return uniqid('',true);
    }








}
