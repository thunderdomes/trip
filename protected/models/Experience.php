<?php

/**
 * This is the model class for table "experience".
 *
 * The followings are the available columns in table 'experience':
 * @property integer $id
 * @property integer $user_id
 * @property string $create_date
 * @property string $last_edit
 * @property string $experience_title
 * @property string $description
 * @property string $itinerary
 * @property integer $categories_1
 * @property integer $categories_2
 * @property integer $categories_3
 * @property string $address_city
 * @property string $special_instructions
 * @property integer $duration
 * @property integer $duration_type
 * @property integer $price
 * @property integer $pricing_model
 * @property integer $number_of_people_1
 * @property integer $number_of_people_2
 * @property integer $time_zone
 */
class Experience extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Experience the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'experience';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, experience_title, description, address_city', 'required'),
			array('user_id, categories_1, categories_2, categories_3, duration, duration_type, price, pricing_model, number_of_people_1, number_of_people_2, time_zone', 'numerical', 'integerOnly'=>true),
			array('experience_title', 'length', 'max'=>30),
			array('address_city', 'length', 'max'=>200),
			array('create_date, last_edit, itinerary, special_instructions', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, create_date, last_edit, experience_title, description, itinerary, categories_1, categories_2, categories_3, address_city, special_instructions, duration, duration_type, pricing_model, number_of_people_1, number_of_people_2, time_zone', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			 'author'=>array(self::BELONGS_TO,'User','user_id','joinType'=>'inner join'),
			 'comments'=>array(self::HAS_MANY,'Comment','experience_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'create_date' => 'Create Date',
			'last_edit' => 'Last Edit',
			'experience_title' => 'Experience Title',
			'description' => 'Description',
			'itinerary' => 'Itinerary',
			'categories_1' => 'Categories',
			'categories_2' => 'Categories 2',
			'categories_3' => 'Categories 3',
			'address_city' => 'Address, City',
			'special_instructions' => 'Special Instructions',
			'duration' => 'Duration',
			'duration_type' => 'Duration Type',
			'price' => 'Price',
			'pricing_model' => 'Pricing Model',
			'number_of_people_1' => 'Number Of People',
			'number_of_people_2' => 'Number Of People',
			'time_zone' => 'Time Zone',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('last_edit',$this->last_edit,true);
		$criteria->compare('experience_title',$this->experience_title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('itinerary',$this->itinerary,true);
		$criteria->compare('categories_1',$this->categories_1);
		$criteria->compare('categories_2',$this->categories_2);
		$criteria->compare('categories_3',$this->categories_3);
		$criteria->compare('address_city',$this->address_city,true);
		$criteria->compare('special_instructions',$this->special_instructions,true);
		$criteria->compare('duration',$this->duration);
		$criteria->compare('duration_type',$this->duration_type);
		$criteria->compare('pricing_model',$this->pricing_model);
		$criteria->compare('number_of_people_1',$this->number_of_people_1);
		$criteria->compare('number_of_people_2',$this->number_of_people_2);
		$criteria->compare('time_zone',$this->time_zone);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public static function getDurationType(){
		return array(
			'0'=>'Hours',
			'1'=>'Days'
		);
	}
	
	public function beforeSave() {
		if($this->isNewRecord){
			$this->create_date = new CDbExpression('now()');
			$this->last_edit = new CDbExpression('now()');
		}
		else{
			$this->last_edit = new CDbExpression('now()');
		}
		return parent::beforeSave();
	}
}