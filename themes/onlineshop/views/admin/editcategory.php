
<?php
/* @var $this AdminController */

$this->breadcrumbs=array(
	'Admin'=>array('/admin'),
	'Managecat',
);
if(isset($editmodel))
{
    $categoryname = $editmodel[0]['catname'];
    $categoryactive = $editmodel[0]['active'];
    $categorydescription = $editmodel[0]['description'];
    $categorymeta = $editmodel[0]['metatitle'];
    $categorymetadesc = $editmodel[0]['metadescription'];
    $categorymetatags = $editmodel[0]['metatags'];
    $cat_id =  $editmodel[0]['cat_id'];
}
?>
   <div class="right_content">            
        
    <h2>Products Edit Category</h2> 
                    
     <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'cat-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
),
));  ?>             
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
            <th scope="col" class="rounded">Add Category</th>
            <th scope="col" class="rounded" colspan="9"></th>
            <th scope="col" class="rounded"></th>
            <th scope="col" class="rounded"></th>
            <th scope="col" class="rounded"></th>
            <th scope="col" class="rounded"></th>
            <th scope="col" class="rounded-q4"></th>
        </tr>
    </thead>
      
    <tbody><?php echo $form->errorSummary($model); ?>
    	<tr>
            <td colspan="14"><?php echo $form->label($model,'catname'); ?></td>
            <td><?php echo $form->textField($model,'catname') ?><?php echo $form->error($model,'catname'); ?></td>
        </tr>
        
    	<tr>
            <td colspan="14"><?php echo $form->label($model,'active'); ?></td>
            <td>
		<?php //echo $form->radioButton($model,'active',$model->getActiveOptions(),$htmlOptions=array ('uncheckValue'=>null)); ?>
		<?php echo $form->radioButton($model,'active',$htmlOptions=array ('value'=>1,'uncheckValue'=>null)); ?>
		<?php echo $form->radioButton($model,'active',$htmlOptions=array ('value'=>0,'uncheckValue'=>null)); ?>
		<?php echo $form->error($model,'active'); ?>
	   </td>
        </tr>
        
    	<tr>
            <td colspan="14"><?php echo $form->label($model,'description'); ?></td>
            <td><?php echo $form->textArea($model,'description',$htmlOptions=array ( )); ?></td>
        </tr>
        
    	<tr>
            <td colspan="14"><?php echo $form->label($model,'metatitle'); ?></td>
            <td><?php echo $form->textField($model,'metatitle') ?></td>
        </tr>
    	<tr>
            <td colspan="14"><?php echo $form->label($model,'metadescription'); ?></td>
            <td><?php echo $form->textField($model,'metadescription') ?></td>
        </tr>
        
    	<tr>
             <td colspan="14"><?php echo $form->label($model,'metatags'); ?></td>
            <td><?php echo $form->textField($model,'metatags') ?></td>
        </tr> 
	<tr>
        	<td colspan="14" class="rounded-foot-left"><a class="menuitem_red" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/admin/welcome">Cancel</a></td>
        	<td class="rounded-foot-right"><!--<a href="<?php //echo Yii::app()->request->baseUrl; ?>/index.php/admin/addcategory" class="bt_green"><span class="bt_green_lft"></span><strong>Save</strong><span class="bt_green_r"></span></a>--><?php echo CHtml::submitButton('Save'); ?></td>

        </tr>
          
    </tbody>
</table>
  <?php $this->endWidget(); ?>
     </div><!-- end of right content-->
