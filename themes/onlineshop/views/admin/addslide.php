 <?php
/* @var $this AdminController */

$this->breadcrumbs=array(
	'Admin'=>array('/admin'),
	'Slider',
);

?>
 <div class="right_content">            
        
   <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'login-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
),
'htmlOptions'=>array(
                          'class'=>'niceform',
                        )
));  ?>
  <div id="fieldset_0" class="panel">												
	<div class="panel-heading">
	<i class="icon-cogs"></i>
	Settings
	</div>
	<div class="form-group">	
	<label class="control-label col-lg-3 " for="HOMESLIDER_WIDTH">
		Max width
	</label>
	<div class="col-lg-9 ">					
		<div class="input-group">
		<input type="text" class="" value="" id="HOMESLIDER_WIDTH" name="HOMESLIDER_WIDTH">
		<span class="input-group-addon">
		px</span>					
	</div>
	</div>
	</div>
	<div class="form-group">
			<label class="control-label col-lg-3 " for="HOMESLIDER_SPEED">
				Speed
		</label>
	<div class="col-lg-9 ">
	<div class="input-group">
	<input type="text" class="" value="" id="HOMESLIDER_SPEED" name="HOMESLIDER_SPEED">
	<span class="input-group-addon">
	 ms
	</span>
	</div>
</div>
</div>
<div class="form-group">
	<label class="control-label col-lg-3 " for="HOMESLIDER_PAUSE">
	Pause
   </label>
	<div class="col-lg-9 ">
	<div class="input-group">
	<input type="text" class="" value="3000" id="HOMESLIDER_PAUSE" name="HOMESLIDER_PAUSE">
	<span class="input-group-addon">
	  ms
	</span>
	</div>
	</div>
	</div>
	<div class="form-group">										
	<label class="control-label col-lg-3 " for="HOMESLIDER_LOOP">
	Auto play
	</label>
	<div class="col-lg-9 ">
	<span class="switch prestashop-switch fixed-width-lg">
	<input type="radio" checked="checked" value="1" id="HOMESLIDER_LOOP_on" name="HOMESLIDER_LOOP">
		<label for="HOMESLIDER_LOOP_on">
		Yes
		</label>
		<input type="radio" value="0" id="HOMESLIDER_LOOP_off" name="HOMESLIDER_LOOP">
		<label for="HOMESLIDER_LOOP_off">
		No
		</label>
	<a class="slide-button btn"></a>
	</span>																	
</div>
</div>			
	<div class="panel-footer">
	<button class="btn btn-default pull-right" name="submitSlider" id="module_form_submit_btn" value="1" type="submit">
	<i class="process-icon-save"></i> Save
	</button>
	</div>			
	</div>
<?php $this->endWidget(); ?>
</div>