<?php
class Slider extends CActiveRecord
{
	public static function model($className=__CLASS__)
   	 {
        	return parent::model($className);
   	 }
   	public function tableName()
   	 {
        	return 'slider';
   	}
	public function rules()
	{
		return array(
			array('sl','required'),
			array('active,description,metatitle,metadescription,metatags','safe'),
		);
	}
	/* public function getActiveOptions() 
	{
                return array(
                        1=>'Male',
                        2=>'Female',
                );
        }*/
	public function attributeLabels()
	{
		return array(
			'catname'=>'Name',
			'active'=>'Displayed',
			'description'=>'Description',
			'metatitle'=>'Meta Title',
			'metadescription'=>'Meta Description',
			'metatags'=>'Meta Keywords',
		);
	}

}
?>