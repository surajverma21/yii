
<div class="login_form">
         
         <h3>Admin Panel Login</h3>
         
         <a href="#" class="forgot_pass">Forgot password</a> 
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
                <fieldset>
                    <dl>
                        <dt><?php echo $form->label($model,'email'); ?></dt>
                        <dd><?php echo $form->textField($model,'email') ?><?php echo $form->error($model,'email'); ?></dd>
                    </dl>
                    <dl>
                        <dt><?php echo $form->label($model,'password'); ?></dt>
                        <dd><?php echo $form->textField($model,'password') ?><?php echo $form->error($model,'password'); ?></dd>
                    </dl>
                    
                    <dl>
                        <dt><label></label></dt>
                        <dd>
                   <?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
                        </dd>
                    </dl>
                    
                     <dl class="submit">
                    <?php echo CHtml::submitButton('Enter'); ?>
                     </dl>
                    
                </fieldset>
                
         <?php $this->endWidget(); ?>
         </div>  
          
