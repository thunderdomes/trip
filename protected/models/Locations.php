<?php

/**
 * This is the model class for table "locations".
 *
 * The followings are the available columns in table 'locations':
 * @property string $id
 * @property string $country_id
 * @property string $state_id
 * @property string $code
 * @property string $name_en
 * @property string $permalink
 * @property string $name
 * @property string $permalink_aliases
 * @property string $aliases
 * @property double $latitude
 * @property double $longitude
 * @property integer $priority
 * @property integer $active
 * @property integer $status_of_backup
 * @property integer $status
 * @property string $updated_at
 * @property string $created_at
 *
 * The followings are the available model relations:
 * @property Countries $country
 * @property States $state
 */
class Locations extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Locations the static model class
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
		return 'locations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('country_id, code, name_en, permalink, name, updated_at, created_at', 'required'),
			array('priority, active, status_of_backup, status', 'numerical', 'integerOnly'=>true),
			array('latitude, longitude', 'numerical'),
			array('country_id, state_id, code', 'length', 'max'=>10),
			array('name_en, permalink, name, permalink_aliases, aliases', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, country_id, state_id, code, name_en, permalink, name, permalink_aliases, aliases, latitude, longitude, priority, active, status_of_backup, status, updated_at, created_at', 'safe', 'on'=>'search'),
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
			'country' => array(self::BELONGS_TO, 'Countries', 'country_id'),
			'state' => array(self::BELONGS_TO, 'States', 'state_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'country_id' => 'Country',
			'state_id' => 'State',
			'code' => 'Code',
			'name_en' => 'Name En',
			'permalink' => 'Permalink',
			'name' => 'Name',
			'permalink_aliases' => 'Permalink Aliases',
			'aliases' => 'Aliases',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
			'priority' => 'Priority',
			'active' => 'Active',
			'status_of_backup' => 'Status Of Backup',
			'status' => 'Status',
			'updated_at' => 'Updated At',
			'created_at' => 'Created At',
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
		$criteria->compare('country_id',$this->country_id,true);
		$criteria->compare('state_id',$this->state_id,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name_en',$this->name_en,true);
		$criteria->compare('permalink',$this->permalink,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('permalink_aliases',$this->permalink_aliases,true);
		$criteria->compare('aliases',$this->aliases,true);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('longitude',$this->longitude);
		$criteria->compare('priority',$this->priority);
		$criteria->compare('active',$this->active);
		$criteria->compare('status_of_backup',$this->status_of_backup);
		$criteria->compare('status',$this->status);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('created_at',$this->created_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public static function getLocation($q=null,$limit=null){
		$rets = array();
		$locations = Yii::app()->db->createCommand("SELECT l.id as id , CONCAT(l.name ,' , ' , c.name) 
			FROM locations l
			INNER JOIN countries c ON c.id = l.country_id
			WHERE CONCAT(l.name ,' , ' , c.name) LIKE :q
			LIMIT 10")->queryAll(false,array("q"=>"%$q%"));

		foreach($locations as $location){
			$rets[] = array('id'=>$location[0],'label'=>$location[1]);
		}
		return $rets;
	}
}