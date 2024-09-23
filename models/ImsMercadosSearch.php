<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ImsMercados;

/**
 * ImsMercadosSearch represents the model behind the search form of `app\models\ImsMercados`.
 */
class ImsMercadosSearch extends ImsMercados
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CODIGOIMS', 'CANTIDAD', 'DESCUENTO', 'UNIDADES'], 'integer'],
            [['MERCADO', 'PRESENTACION', 'PRODUCTOS', 'LINEA', 'JEFEDEPRODUCTO', 'F10', 'F11', 'F12', 'F13', 'F14', 'F15', 'F16'], 'safe'],
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
        $query = ImsMercados::find();

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
            'CODIGOIMS' => $this->CODIGOIMS,
            'CANTIDAD' => $this->CANTIDAD,
            'DESCUENTO' => $this->DESCUENTO,
            'UNIDADES' => $this->UNIDADES,
        ]);

        $query->andFilterWhere(['like', 'MERCADO', $this->MERCADO])
            ->andFilterWhere(['like', 'PRESENTACION', $this->PRESENTACION])
            ->andFilterWhere(['like', 'PRODUCTOS', $this->PRODUCTOS])
            ->andFilterWhere(['like', 'LINEA', $this->LINEA])
            ->andFilterWhere(['like', 'JEFEDEPRODUCTO', $this->JEFEDEPRODUCTO])
            ->andFilterWhere(['like', 'F10', $this->F10])
            ->andFilterWhere(['like', 'F11', $this->F11])
            ->andFilterWhere(['like', 'F12', $this->F12])
            ->andFilterWhere(['like', 'F13', $this->F13])
            ->andFilterWhere(['like', 'F14', $this->F14])
            ->andFilterWhere(['like', 'F15', $this->F15])
            ->andFilterWhere(['like', 'F16', $this->F16]);

        return $dataProvider;
    }
}
