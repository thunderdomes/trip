<?php

/**
 * This is the model class for table "tripify_posts".
 *
 * The followings are the available columns in table 'tripify_posts':
 * @property string $ID
 * @property string $post_author
 * @property string $post_date
 * @property string $terms_id
 * @property string $post_content
 * @property string $post_title
 * @property string $post_excerpt
 * @property string $post_status
 * @property string $post_modified
 * @property string $guid
 * @property string $post_type
 * @property string $url
 * @property string $post_mime_type
 * @property string $content_1
 * @property string $content_2
 * @property string $content_3
 * @property string $total_day
 * @property string $total_night
 * @property string $tripidy_post_image
 * @property string $id_location
 * @property integer $duration
 * @property string $price
 * @property integer $id_pricing
 */
class Posts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Posts the static model class
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
		return 'tripify_posts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('terms_id, post_content, post_title, post_excerpt, url, total_night, tripidy_post_image, id_location, duration, price, id_pricing', 'required'),
			array('duration, id_pricing', 'numerical', 'integerOnly'=>true),
			array('post_author, terms_id, post_status, post_type, id_location', 'length', 'max'=>20),
			array('guid', 'length', 'max'=>255),
			array('post_mime_type', 'length', 'max'=>100),
			array('total_day, total_night, price', 'length', 'max'=>11),
			array('post_date, post_modified, content_1, content_2, content_3', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, post_author, post_date, terms_id, post_content, post_title, post_excerpt, post_status, post_modified, guid, post_type, url, post_mime_type, content_1, content_2, content_3, total_day, total_night, tripidy_post_image, id_location, duration, price, id_pricing', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'post_author' => 'Post Author',
			'post_date' => 'Post Date',
			'terms_id' => 'Terms',
			'post_content' => 'Post Content',
			'post_title' => 'Post Title',
			'post_excerpt' => 'Post Excerpt',
			'post_status' => 'Post Status',
			'post_modified' => 'Post Modified',
			'guid' => 'Guid',
			'post_type' => 'Post Type',
			'url' => 'Url',
			'post_mime_type' => 'Post Mime Type',
			'content_1' => 'Content 1',
			'content_2' => 'Content 2',
			'content_3' => 'Content 3',
			'total_day' => 'Total Day',
			'total_night' => 'Total Night',
			'tripidy_post_image' => 'Tripidy Post Image',
			'id_location' => 'Id Location',
			'duration' => 'Duration',
			'price' => 'Price',
			'id_pricing' => 'Id Pricing',
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

		$criteria->compare('ID',$this->ID,true);
		$criteria->compare('post_author',$this->post_author,true);
		$criteria->compare('post_date',$this->post_date,true);
		$criteria->compare('terms_id',$this->terms_id,true);
		$criteria->compare('post_content',$this->post_content,true);
		$criteria->compare('post_title',$this->post_title,true);
		$criteria->compare('post_excerpt',$this->post_excerpt,true);
		$criteria->compare('post_status',$this->post_status,true);
		$criteria->compare('post_modified',$this->post_modified,true);
		$criteria->compare('guid',$this->guid,true);
		$criteria->compare('post_type',$this->post_type,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('post_mime_type',$this->post_mime_type,true);
		$criteria->compare('content_1',$this->content_1,true);
		$criteria->compare('content_2',$this->content_2,true);
		$criteria->compare('content_3',$this->content_3,true);
		$criteria->compare('total_day',$this->total_day,true);
		$criteria->compare('total_night',$this->total_night,true);
		$criteria->compare('tripidy_post_image',$this->tripidy_post_image,true);
		$criteria->compare('id_location',$this->id_location,true);
		$criteria->compare('duration',$this->duration);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('id_pricing',$this->id_pricing);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}