<?php

namespace dro\notification\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use dro\notification\models\Notification;

/**
 * NotificationSearch represents the model behind the search form about `dro\notification\models\Notification`.
 */
class NotificationSearch extends Notification
{
    public function attributes()
    {
        return parent::attributes();

        // add related fields to searchable attributes
        // return array_merge(parent::attributes(), ['author.name']);
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'message_id', 'receiver_id', 'is_read', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            // usefull when filtering on related columns
            //[['author.name'], 'safe'],
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
        $query = Notification::find();
        /*
        $query = Notification::find()->joinWith(['company']);
            ->where(['{{%company}}.category' => Company::CATEGORY_LOGISTICS]);
        */

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->setSort([
            'attributes' => [
                /*
                'office_phone',
                'group.name' => [
                    'asc'   => ['company.name' => SORT_ASC],
                    'desc'  => ['company.name' => SORT_DESC],
                ],
                'company.name' => [
                    'asc'  => ['CONVERT({{%company}}.full_name USING gbk)' => SORT_ASC],
                    'desc' => ['CONVERT({{%company}}.full_name USING gbk)' => SORT_DESC],
                ],
                */
            ],
            /* Warning: defaultOrder 内指定的列必须在上面的 attributes 内声明过，否则排序无效
            'defaultOrder' => [
                'group.name' => SORT_DESC,
            ],
            */
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
            'message_id' => $this->message_id,
            'receiver_id' => $this->receiver_id,
            'is_read' => $this->is_read,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
        ]);
            //->andFilterWhere(['LIKE', 'user_group.name', $this->getAttribute('group.name')])
        return $dataProvider;
    }
}
