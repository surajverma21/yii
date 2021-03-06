<?php

class AdminController extends Controller
{
	public $layout='//layouts/admin';
	 public function accessRules()
        {
                return array(
                        array('allow',  // allow only authenticated user to perform 'index' and 'view' actions
                                'actions'=>array(''),
                                'users'=>array('@'),
                        ),
                        array('allow', // allow admin user to perform 'admin' and 'delete' actions
                                'actions'=>array('index','welcome','managecat','addcategory'),
                                'users'=>array('admin'),
                        ),
                        array('deny',  // deny all users
                                'users'=>array('*'),
                        ),
                );
        }

	public function actionIndex()
	{
		$model = new Adminlogin;
		$this->layout = 'adminlogin';
		if(isset($_POST['Adminlogin']))
		{	
			$model->attributes=$_POST['Adminlogin'];
			//print_r($model->attributes);exit;
			if($model->validate() && $model->login())
			{	
				//echo 'success';exit;
				$this->redirect(Yii::app()->user->returnUrl);
			}
			
		}
		$this->render('login',array('model'=> $model));
	}
	public function actionWelcome()
	{
	    $criteria=new CDbCriteria();
	    $count=Managecat::model()->count($criteria);
	    $pages=new CPagination($count);

	    // results per page
	    $pages->pageSize=10;
	    $pages->applyLimit($criteria);
	    $models=Managecat::model()->findAll($criteria);

	    $this->render('welcome', array(
	    'models' => $models,
		 'pages' => $pages
	    ));
	}
	public function actionManagecat()
	{
		$model = new Managecat;
		if(isset($_POST['Managecat']))
		{
			$model->attributes=$_POST['Managecat'];
			if ($model->validate())
			{
				if($model->save())
				{
					Yii::app()->user->setFlash('Success','Creation Successfull.');
					$this->redirect(array('index.php/admin/welcome'));
				}
			}
		}
		$this->render('managecat',array('model'=>$model));
	}
	public function actionDelcategory()
	{
		$id = Yii::app()->request->getParam('id');
		$model = new Managecat;
		$model->delcat($id);
		return 1;
	}
	public function actionEditcategory()
	{
		$id = Yii::app()->request->getParam('id');
		if(isset($id))
		{
		    $criteria=new CDbCriteria();
		    $criteria->condition = 'cat_id=:cat_id';
		    $criteria->params = array(':cat_id'=>$id);
		    $models=Managecat::model()->findall($criteria);

		    $this->render('editcategory', array(
		    'model' => $models
		    ));
		}
	}	
	public function actionCatdisplay()
	{
		$id = Yii::app()->request->getParam('id');
		$active = Yii::app()->request->getParam('status');
		$model = new Managecat;
		$model->displaycat($id,$active);
		return 'success';
	}

	public function actionAddslide()
	{
		 //$model = new Admin
		 $this->render('addslide');
	}

	
}
