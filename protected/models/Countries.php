<?php

/**
 * This is the model class for table "countries".
 *
 * The followings are the available columns in table 'countries':
 * @property string $id
 * @property integer $world_region_id
 * @property string $name_en
 * @property string $permalink
 * @property string $name
 * @property string $code
 * @property string $currency_code
 * @property string $currency_name
 * @property integer $locations_count
 * @property double $longitude
 * @property double $latitude
 * @property string $polygon
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property WorldRegions $worldRegion
 * @property Locations[] $locations
 * @property States[] $states
 */
class Countries extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Countries the static model class
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
		return 'countries';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('world_region_id, name_en, permalink', 'required'),
			array('world_region_id, locations_count', 'numerical', 'integerOnly'=>true),
			array('longitude, latitude', 'numerical'),
			array('name_en, permalink, name, currency_code, currency_name', 'length', 'max'=>255),
			array('code', 'length', 'max'=>2),
			array('polygon, created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, world_region_id, name_en, permalink, name, code, currency_code, currency_name, locations_count, longitude, latitude, polygon, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'worldRegion' => array(self::BELONGS_TO, 'WorldRegions', 'world_region_id'),
			'locations' => array(self::HAS_MANY, 'Locations', 'country_id'),
			'states' => array(self::HAS_MANY, 'States', 'country_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'world_region_id' => 'World Region',
			'name_en' => 'Name En',
			'permalink' => 'Permalink',
			'name' => 'Name',
			'code' => 'Code',
			'currency_code' => 'Currency Code',
			'currency_name' => 'Currency Name',
			'locations_count' => 'Locations Count',
			'longitude' => 'Longitude',
			'latitude' => 'Latitude',
			'polygon' => 'Polygon',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('world_region_id',$this->world_region_id);
		$criteria->compare('name_en',$this->name_en,true);
		$criteria->compare('permalink',$this->permalink,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('currency_code',$this->currency_code,true);
		$criteria->compare('currency_name',$this->currency_name,true);
		$criteria->compare('locations_count',$this->locations_count);
		$criteria->compare('longitude',$this->longitude);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('polygon',$this->polygon,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}