<?php
/**
 * Created by PhpStorm.
 * User: hrupin
 * Date: 06.08.17
 * Time: 23:56
 */

namespace hrupin\blog\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use hrupin\blog\models\BlogCategory;

/**
 * CategorySearch represents the model behind the search form about `hrupin\blog\models\BlogCategory`.
 */
class BlogCategorySearch extends BlogCategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_category', 'id_seo', 'id_parent', 'sort', 'dateCreated', 'dateUpdated'], 'integer'],
            [['lang', 'title', 'description', 'img'], 'safe'],
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
        $query = BlogCategory::find();

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
            'id_category' => $this->id_category,
            'id_seo' => $this->id_seo,
            'id_parent' => $this->id_parent,
            'sort' => $this->sort,
            'dateCreated' => $this->dateCreated,
            'dateUpdated' => $this->dateUpdated,
        ]);

        $query->andFilterWhere(['like', 'lang', $this->lang])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'img', $this->img]);

        return $dataProvider;
    }
}