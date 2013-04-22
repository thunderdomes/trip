<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class CariForm extends CFormModel
{
	public $location;
	public $activity;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// verifyCode needs to be entered correctly
			array('location,activity', 'safe'),
		);
	}
	
	public function search(){
		$criteria = new CDbCriteria();
		$criteria->with = array('author');
/*		$criteria->compare('id_location', $this->location, false);
		$criteria->select = "t.*,CONCAT(l.name,',',c.name) as location_detail";
		$criteria->join = "join locations l on l.id = t.id_location join countries c ON c.id = l.country_id";
		if($this->activity){
			$criteria->addCondition('FIND_IN_SET('.$this->activity.',terms_id)');
		}*/
		return new CActiveDataProvider('Experience',array(
			 'criteria'=>$criteria,
			 'pagination'=>array(
				  'pageSize'=>9
			 )
		));
	}
}