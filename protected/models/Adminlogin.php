<?php
class Adminlogin extends CActiveRecord
{
	public $username;
	public $password;
	public $rememberMe;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public static function model($className=__CLASS__)
   	 {
        	return parent::model($className);
   	 }
   	public function tableName()
   	 {
        	return 'client';
   	}
	public function rules()
	{
		return array(
			// username and password are required
			array('email, password', 'required'),
			// rememberMe needs to be a boolean
			//array('rememberMe', 'boolean'),
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			array('password', 'authenticate'),
		);
	}
	public function attributeLabels()
	{
		return array(
			'email'=>'Email Address',
			'password'=>'Password',
			'rememberMe'=>'Remember me next time',
		);
	}
	public function authenticate($attribute,$params)
	{
		//echo 'authenticate';
//exit;
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			if(!$this->_identity->authenticate())
				$this->addError('password','Incorrect username or password.');
		}
	}
	public function login()
	{
		echo 'err';
exit;
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}
?>
