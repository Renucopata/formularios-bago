<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuarios;

/**
 * UsuariosSearch represents the model behind the search form of `app\models\Usuarios`.
 */
class UsuariosSearch extends Usuarios
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_USUARIO', 'ID_DEPTO', 'ID_CARGO', 'ID_PUNTOVENTA', 'EMISION'], 'integer'],
            [['NOMBRES', 'APELLIDOS', 'EMAIL', 'USERNAME', 'PASSWORD', 'SESSION1', 'CODVISIT', 'ESTADO', 'CREATE_AT', 'CREATE_BY', 'UPDATE_AT', 'UPDATE_BY', 'LAST_LOGIN', 'CODALM', 'AUTHKEY', 'ACCESS_TOKEN'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Usuarios::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID_USUARIO' => $this->ID_USUARIO,
            'ID_DEPTO' => $this->ID_DEPTO,
            'ID_CARGO' => $this->ID_CARGO,
            'ID_PUNTOVENTA' => $this->ID_PUNTOVENTA,
            'EMISION' => $this->EMISION,
        ]);

        $query->andFilterWhere(['like', 'NOMBRES', $this->NOMBRES])
            ->andFilterWhere(['like', 'APELLIDOS', $this->APELLIDOS])
            ->andFilterWhere(['like', 'EMAIL', $this->EMAIL])
            ->andFilterWhere(['like', 'USERNAME', $this->USERNAME])
            ->andFilterWhere(['like', 'PASSWORD', $this->PASSWORD])
            ->andFilterWhere(['like', 'SESSION1', $this->SESSION1])
            ->andFilterWhere(['like', 'CODVISIT', $this->CODVISIT])
            ->andFilterWhere(['like', 'ESTADO', $this->ESTADO])
            ->andFilterWhere(['like', 'CREATE_AT', $this->CREATE_AT])
            ->andFilterWhere(['like', 'CREATE_BY', $this->CREATE_BY])
            ->andFilterWhere(['like', 'UPDATE_AT', $this->UPDATE_AT])
            ->andFilterWhere(['like', 'UPDATE_BY', $this->UPDATE_BY])
            ->andFilterWhere(['like', 'LAST_LOGIN', $this->LAST_LOGIN])
            ->andFilterWhere(['like', 'CODALM', $this->CODALM])
            ->andFilterWhere(['like', 'AUTHKEY', $this->AUTHKEY])
            ->andFilterWhere(['like', 'ACCESS_TOKEN', $this->ACCESS_TOKEN]);

        return $dataProvider;
    }
}
