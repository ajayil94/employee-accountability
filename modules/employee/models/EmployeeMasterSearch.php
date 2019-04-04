<?php

namespace app\modules\employee\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\employee\models\EmployeeMaster;

/**
 * EmployeeMasterSearch represents the model behind the search form of `app\modules\employee\models\EmployeeMaster`.
 */
class EmployeeMasterSearch extends EmployeeMaster {

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['id', 'age'], 'integer'],
            [['first_name', 'middle_name', 'last_name', 'gender', 'designation','contact','education','email'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios() {
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
    public function search($params) {
        $query = EmployeeMaster::find();

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
            'id' => $this->id,
            'age' => $this->age,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
                ->andFilterWhere(['like', 'middle_name', $this->middle_name])
                ->andFilterWhere(['like', 'last_name', $this->last_name])
                ->andFilterWhere(['like', 'gender', $this->gender])
                ->andFilterWhere(['like', 'designation', $this->designation])
                ->andFilterWhere(['like', 'contact', $this->contact]);
//                ->andFilterWhere(['like', 'email', $this->email])
//                ->andFilterWhere(['like', 'education', $this->education]);

        return $dataProvider;
    }

}
