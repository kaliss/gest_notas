<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Matriculas;

/**
 * MatriculasSearch represents the model behind the search form about `app\models\Matriculas`.
 */
class MatriculasSearch extends Matriculas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_matricula', 'id_facultad', 'curso', 'semestre'], 'integer'],
            [['cod_matricula', 'fecha_matricula'], 'safe'],
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
        $query = Matriculas::find();

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
            'id_matricula' => $this->id_matricula,
            'id_facultad' => $this->id_facultad,
            'curso' => $this->curso,
            'semestre' => $this->semestre,
            'fecha_matricula' => $this->fecha_matricula,
        ]);

        $query->andFilterWhere(['like', 'cod_matricula', $this->cod_matricula]);

        return $dataProvider;
    }
}