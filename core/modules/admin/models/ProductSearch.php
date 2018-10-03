<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ProductSearch represents the model behind the search form of `app\modules\admin\models\Product`.
 */
class ProductSearch extends Product {
	/**
	 * {@inheritdoc}
	 */
	public function rules(){
		return [
			[['id', 'status', 'hit', 'sale', 'new', 'viewCount'], 'integer'],
			[['title', 'slug', 'content', 'description', 'keywords', 'updated_at', 'created_at'], 'safe'],
			[['price', 'salePrice'], 'number'],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function scenarios(){
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
	public function search($params){
		$query = Product::find();

		// add conditions that should always apply here

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		$this->load($params);

		if ( ! $this->validate()){
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		// grid filtering conditions
		$query->andFilterWhere([
			'id'         => $this->id,
			'price'      => $this->price,
			'salePrice'  => $this->salePrice,
			'status'     => $this->status,
			'hit'        => $this->hit,
			'sale'       => $this->sale,
			'new'        => $this->new,
			'viewCount'  => $this->viewCount,
			'updated_at' => $this->updated_at,
			'created_at' => $this->created_at,
		]);

		$query->andFilterWhere(['like', 'title', $this->title])
		      ->andFilterWhere(['like', 'slug', $this->slug])
		      ->andFilterWhere(['like', 'content', $this->content])
		      ->andFilterWhere(['like', 'description', $this->description])
		      ->andFilterWhere(['like', 'keywords', $this->keywords]);

		return $dataProvider;
	}
}
