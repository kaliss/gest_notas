<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Parentezco;

/**
 * ParentezcoSearch represents the model behind the search form about `app\models\Parentezco`.
 */
class ParentezcoSearch extends Parentezco
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_parentezco'], 'integer'],
            [['nombre_parentezco'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Parentezco::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_parentezco' => $this->id_parentezco,
        ]);

        $query->andFilterWhere(['like', 'nombre_parentezco', $this->nombre_parentezco]);

        return $dataProvider;
    }
}
