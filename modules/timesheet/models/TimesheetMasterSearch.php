<?php

namespace app\modules\timesheet\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\timesheet\models\TimesheetMaster;

/**
 * TimesheetMasterSearch represents the model behind the search form of `app\modules\timesheet\models\TimesheetMaster`.
 */
class TimesheetMasterSearch extends TimesheetMaster
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['emp_name','project_name', 'description', 'duration'], 'safe'],
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
        $query = TimesheetMaster::find();

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
          'emp_name' => $this->emp_name,
        ]);

        $query->andFilterWhere(['like', 'project_name', $this->project_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'duration', $this->duration]);

        return $dataProvider;
    }
}
