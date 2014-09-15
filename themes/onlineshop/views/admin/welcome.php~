<?php
/* @var $this AdminController */

$this->breadcrumbs=array(
	'Admin'=>array('/admin'),
	'Welcome',
);
?>
<script type="text/javascript">
function updatedisplaycat(id,path,active)
{
	$.ajax({
            type: "POST",
            url: path,
            data: {id:id,status:active},
            success: function (dataCheck) 
		{
			location.reload();
                }
        });
        return false;
}

function delcategory(id,path)
{
	$.ajax({
            type: "POST",
            url: path,
            data: {id:id},
            success: function (dataCheck) 
		{
			location.reload();
                }
        });
        return false;
}
</script>
   <div class="right_content">            
        
    <h2>Products Category</h2> 
  <?php if(Yii::app()->user->hasFlash('Success')):?>
    <div class="valid_box">
        <?php echo Yii::app()->user->getFlash('Success'); ?>
    </div>
<?php endif; ?>
                 
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded">Add Category</th>
            <th scope="col" class="rounded"></th>
            <th scope="col" class="rounded"></th>
            <th scope="col" class="rounded"></th>
            <th scope="col" class="rounded"></th>
            <th scope="col" class="rounded"></th>
            <th scope="col" class="rounded-q4"></th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="6" class="rounded-foot-left"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
	 <?php foreach($models as $model){
	$imageedit = '<img src="'.Yii::app()->request->baseUrl.'/images/user_edit.png">';
	$trash = '<img src="'.Yii::app()->request->baseUrl.'/images/trash.png">';
	if($model->active == 1)
	{
		$imgstatus = '<img src="/onlineshop/images/valid.png" width="25" height="25">';		
	}
	else
	{
		$imgstatus = '<img src="/onlineshop/images/user_logout.png" width="25" height="25">';
	}
	?>
    	<tr>
            <td><?php echo $model->cat_id;?><input type="checkbox" name="cat_id" value="<?php echo $model->cat_id;?>"/></td>
            <td><?php echo $model->catname;?></td>
            <td><?php echo $model->description;?></td>
            <td><?php echo CHtml::link($imgstatus,'#',array("onclick"=>"updatedisplaycat($model->cat_id,'catdisplay',$model->active)")); ?></td>
            <td><?php echo $model->date;?></td>
 	   <td><?php echo CHtml::link($imageedit,array("index.php/admin/editcategory?id=$model->cat_id")); ?></td>
	    <td><?php echo CHtml::link($trash,'#',array("onclick"=>"delcategory($model->cat_id,'delcategory')")); ?></td>
        </tr>
        <?php } ?>   
    </tbody>
</table>

	 <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/admin/managecat" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_blue"><span class="bt_blue_lft"></span><strong>View all items from category</strong><span class="bt_blue_r"></span></a>
     <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a> 
     
     
        <div class="pagination">
	<?php $this->widget('CLinkPager', array(
    'pages' => $pages,
)) ?>
        </div> 
     
     <h2>Warning Box examples</h2>
      
     <div class="warning_box">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
     </div>
     <div class="valid_box">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
     </div>
     <div class="error_box">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
     </div>  
           
     <h2>Nice Form example</h2>
     
         <div class="form">
         <form action="" method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="email">Email Address:</label></dt>
                        <dd><input type="text" name="" id="" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Password:</label></dt>
                        <dd><input type="text" name="" id="" size="54" /></dd>
                    </dl>
                    
                    
                    <dl>
                        <dt><label for="gender">Select categories:</label></dt>
                        <dd>
                            <select size="1" name="gender" id="">
                                <option value="">Select option 1</option>
                                <option value="">Select option 2</option>
                                <option value="">Select option 3</option>
                                <option value="">Select option 4</option>
                                <option value="">Select option 5</option>
                            </select>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="interests">Select tags:</label></dt>
                        <dd>
                            <input type="checkbox" name="interests[]" id="" value="" /><label class="check_label">Web design</label>
                            <input type="checkbox" name="interests[]" id="" value="" /><label class="check_label">Business</label>
                            <input type="checkbox" name="interests[]" id="" value="" /><label class="check_label">Simple</label>
                            <input type="checkbox" name="interests[]" id="" value="" /><label class="check_label">Clean</label>
                        </dd>
                    </dl>
                    
                    <dl>
                        <dt><label for="color">Select type</label></dt>
                        <dd>
                            <input type="radio" name="type" id="" value="" /><label class="check_label">Basic</label>
                            <input type="radio" name="type" id="" value="" /><label class="check_label">Medium</label>
                            <input type="radio" name="type" id="" value="" /><label class="check_label">Premium</label>
                        </dd>
                    </dl>
                    
                    
                    
                    <dl>
                        <dt><label for="upload">Upload a File:</label></dt>
                        <dd><input type="file" name="upload" id="upload" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label for="comments">Message:</label></dt>
                        <dd><textarea name="comments" id="comments" rows="5" cols="36"></textarea></dd>
                    </dl>
                    
                    <dl>
                        <dt><label></label></dt>
                        <dd>
                            <input type="checkbox" name="interests[]" id="" value="" /><label class="check_label">I agree to the <a href="#">terms &amp; conditions</a></label>
                        </dd>
                    </dl>
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
