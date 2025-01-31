<?include('header.php');?>

        <!-- content -->
        <div class="content">
            <div class="center">
                 <?include('left_side.php');?>
                 
                
                <div class="cont_bl_right">
                    <div class="bl_cont">

                        <div class="delivery_bl ">
                

                   
                      
                      <!--  -->
                      
                        <form   class="login-form" action="javascript:void(null);" method="post" OnSubmit="ajax_post('save_password',this,'#res-change_pass');">
                          <h2><?=l('Сменить пароль');?></h2>
                          <input required="" type="password" class="input"  name="old_password" autocomplete="off" placeholder="<?=l('Старый пароль');?>">
                          <input required="" type="password" class="input" name="password" autocomplete="off" placeholder="<?=l('Новый пароль');?>">
                          <input required="" type="password" class="input" name="password2" autocomplete="off" placeholder="<?=l('Повторите пароль');?>">
                                     
					 
						 <input type="submit" class="button-blue" value="<?=l('Сменить');?>">
						  	
                        </form>
                         <div id="res-change_pass" class="status_ok"></div>
                       
						<form   class="login-form" action="javascript:void(null);" method="post" OnSubmit="ajax_post('save_profile',this,'#res-save_profile');">
                          <h2><?=l('Редактирование профиля');?></h2>
						 
						<?foreach ($user->generate_public_form_rows('input') as $k=>$form_row):?>
							<div class="form-group">
							<label for="form_<?=$k?>"><?=$form_row['title']?></label>
							<?=$form_row['form']?>
							</div>
						<?endforeach;?>				
						<script> 
						//$("#timezone ."+getTimeZoneData).attr("selected", "selected");
						
						</script>
					 
						 <input type="submit" class="button-blue" value="<?=l('Сохранить');?>">
						  	
                        </form>
                         <div id="res-save_profile" class="status_ok"></div>
                    
                </div> 

                        


                       
                        
                    </div>

                    
                </div>
                <div class="clear"></div>
            </div>
		
                           
        </div>

<?include('footer.php');?>