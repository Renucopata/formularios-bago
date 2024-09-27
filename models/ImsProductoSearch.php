<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ImsProducto;

/**
 * ImsProductoSearch represents the model behind the search form of `app\models\ImsProducto`.
 */
class ImsProductoSearch extends ImsProducto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CODPRODUCTO', 'CT', 'PRODUCTO', 'CIUDAD', 'PRESENTACION', 'LAB', 'LANZAMIENTO'], 'safe'],
            [['CODIMS', 'FLAG'], 'integer'],
            [['UTRIM20', 'UTRIM19', 'UTRIM18', 'UTRIM17', 'UTRIM16', 'UTRIM15', 'UTRIM14', 'UTRIM13', 'UTRIM12', 'UTRIM11', 'UTRIM10', 'UTRIM09', 'UTRIM08', 'UTRIM07', 'UTRIM06', 'UTRIM05', 'UTRIM04', 'UTRIM03', 'UTRIM02', 'UTRIM01', 'VTRIM20', 'VTRIM19', 'VTRIM18', 'VTRIM17', 'VTRIM16', 'VTRIM15', 'VTRIM14', 'VTRIM13', 'VTRIM12', 'VTRIM11', 'VTRIM10', 'VTRIM09', 'VTRIM08', 'VTRIM07', 'VTRIM06', 'VTRIM05', 'VTRIM04', 'VTRIM03', 'VTRIM02', 'VTRIM01', 'UMES24', 'UMES23', 'UMES22', 'UMES21', 'UMES20', 'UMES19', 'UMES18', 'UMES17', 'UMES16', 'UMES15', 'UMES14', 'UMES13', 'UMES12', 'UMES11', 'UMES10', 'UMES09', 'UMES08', 'UMES07', 'UMES06', 'UMES05', 'UMES04', 'UMES03', 'UMES02', 'UMES01', 'VMES24', 'VMES23', 'VMES22', 'VMES21', 'VMES20', 'VMES19', 'VMES18', 'VMES17', 'VMES16', 'VMES15', 'VMES14', 'VMES13', 'VMES12', 'VMES11', 'VMES10', 'VMES09', 'VMES08', 'VMES07', 'VMES06', 'VMES05', 'VMES04', 'VMES03', 'VMES02', 'VMES01'], 'number'],
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
        $query = ImsProducto::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 50,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'CODIMS' => $this->CODIMS,
            'UTRIM20' => $this->UTRIM20,
            'UTRIM19' => $this->UTRIM19,
            'UTRIM18' => $this->UTRIM18,
            'UTRIM17' => $this->UTRIM17,
            'UTRIM16' => $this->UTRIM16,
            'UTRIM15' => $this->UTRIM15,
            'UTRIM14' => $this->UTRIM14,
            'UTRIM13' => $this->UTRIM13,
            'UTRIM12' => $this->UTRIM12,
            'UTRIM11' => $this->UTRIM11,
            'UTRIM10' => $this->UTRIM10,
            'UTRIM09' => $this->UTRIM09,
            'UTRIM08' => $this->UTRIM08,
            'UTRIM07' => $this->UTRIM07,
            'UTRIM06' => $this->UTRIM06,
            'UTRIM05' => $this->UTRIM05,
            'UTRIM04' => $this->UTRIM04,
            'UTRIM03' => $this->UTRIM03,
            'UTRIM02' => $this->UTRIM02,
            'UTRIM01' => $this->UTRIM01,
            'VTRIM20' => $this->VTRIM20,
            'VTRIM19' => $this->VTRIM19,
            'VTRIM18' => $this->VTRIM18,
            'VTRIM17' => $this->VTRIM17,
            'VTRIM16' => $this->VTRIM16,
            'VTRIM15' => $this->VTRIM15,
            'VTRIM14' => $this->VTRIM14,
            'VTRIM13' => $this->VTRIM13,
            'VTRIM12' => $this->VTRIM12,
            'VTRIM11' => $this->VTRIM11,
            'VTRIM10' => $this->VTRIM10,
            'VTRIM09' => $this->VTRIM09,
            'VTRIM08' => $this->VTRIM08,
            'VTRIM07' => $this->VTRIM07,
            'VTRIM06' => $this->VTRIM06,
            'VTRIM05' => $this->VTRIM05,
            'VTRIM04' => $this->VTRIM04,
            'VTRIM03' => $this->VTRIM03,
            'VTRIM02' => $this->VTRIM02,
            'VTRIM01' => $this->VTRIM01,
            'UMES24' => $this->UMES24,
            'UMES23' => $this->UMES23,
            'UMES22' => $this->UMES22,
            'UMES21' => $this->UMES21,
            'UMES20' => $this->UMES20,
            'UMES19' => $this->UMES19,
            'UMES18' => $this->UMES18,
            'UMES17' => $this->UMES17,
            'UMES16' => $this->UMES16,
            'UMES15' => $this->UMES15,
            'UMES14' => $this->UMES14,
            'UMES13' => $this->UMES13,
            'UMES12' => $this->UMES12,
            'UMES11' => $this->UMES11,
            'UMES10' => $this->UMES10,
            'UMES09' => $this->UMES09,
            'UMES08' => $this->UMES08,
            'UMES07' => $this->UMES07,
            'UMES06' => $this->UMES06,
            'UMES05' => $this->UMES05,
            'UMES04' => $this->UMES04,
            'UMES03' => $this->UMES03,
            'UMES02' => $this->UMES02,
            'UMES01' => $this->UMES01,
            'VMES24' => $this->VMES24,
            'VMES23' => $this->VMES23,
            'VMES22' => $this->VMES22,
            'VMES21' => $this->VMES21,
            'VMES20' => $this->VMES20,
            'VMES19' => $this->VMES19,
            'VMES18' => $this->VMES18,
            'VMES17' => $this->VMES17,
            'VMES16' => $this->VMES16,
            'VMES15' => $this->VMES15,
            'VMES14' => $this->VMES14,
            'VMES13' => $this->VMES13,
            'VMES12' => $this->VMES12,
            'VMES11' => $this->VMES11,
            'VMES10' => $this->VMES10,
            'VMES09' => $this->VMES09,
            'VMES08' => $this->VMES08,
            'VMES07' => $this->VMES07,
            'VMES06' => $this->VMES06,
            'VMES05' => $this->VMES05,
            'VMES04' => $this->VMES04,
            'VMES03' => $this->VMES03,
            'VMES02' => $this->VMES02,
            'VMES01' => $this->VMES01,
            'FLAG' => $this->FLAG,
        ]);

        $query->andFilterWhere(['like', 'CODPRODUCTO', $this->CODPRODUCTO])
            ->andFilterWhere(['like', 'CT', $this->CT])
            ->andFilterWhere(['like', 'PRODUCTO', $this->PRODUCTO])
            ->andFilterWhere(['like', 'CIUDAD', $this->CIUDAD])
            ->andFilterWhere(['like', 'PRESENTACION', $this->PRESENTACION])
            ->andFilterWhere(['like', 'LAB', $this->LAB])
            ->andFilterWhere(['like', 'LANZAMIENTO', $this->LANZAMIENTO]);

        return $dataProvider;
    }
}
