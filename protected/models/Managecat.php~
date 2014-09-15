<?php
class Managecat extends CActiveRecord
{
	public $catname,$active,$description,$metatitle,$metadescription,$metatags;
	
	public static function model($className=__CLASS__)
   	 {
        	return parent::model($className);
   	 }
   	public function tableName()
   	 {
        	return 'categories';
   	}
	public function rules()
	{
		return array(
			array('catname','required'),
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

	public function getcategories()
	{	
		$table = $this->tableName();
		$sql = "SELECT * FROM $table";
		$command = Yii::app()->db->createCommand($sql);	
		return $command->queryall();
	}
	public function displaycat($id,$active)
	{
		$table = $this->tableName();
		if($active==1)
		{
			$command = Yii::app()->db->createCommand();
			$command->update($table, array(
				    'active'=>0,
				), 'cat_id=:cat_id', array(':cat_id'=>$id));
			return 1;
		}
		else
		{
			$command = Yii::app()->db->createCommand();
			$command->update($table, array(
				    'active'=>1,
				), 'cat_id=:cat_id', array(':cat_id'=>$id));
			return 1;
		}
	}

	public function delcat($id)
	{
		$table = $this->tableName();
		$command = Yii::app()->db->createCommand();
		$command->delete($table, 'cat_id=:cat_id', array(':cat_id'=>$id));
		return 1;
	}
}
?>
