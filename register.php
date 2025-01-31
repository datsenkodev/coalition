<?include('header.php');?>

        <!-- header page end -->    
 \        <!-- content -->
        <div class="content">
            <div class="center">
                <!--  -->
                <div id="login" class="login_bl" >
                    <div id="login-tabs" class="login_tabs">
                      <h3 id="reg" class="signup-tab"><a class="active"  href="#signup-content"> <?=$this->lang->line('register')?></a></h3>
                      <h3 id="entry" class="login-tab"><a href="/login"  > <?=$this->lang->line('login')?></a></h3>
                      <div class="clear"></div>
                    </div><!--.tabs-->

                    <div class="tabs-content">
                      <!--  -->
                      <div   class="tabs-content_bl active" style="">
                        <form id="form-user_reg" class="signup-form" action="javascript:" OnSubmit="ajax_post('register',this,'#res-user_reg');" method="post" onsubmit="send('user_reg')">
                          
                          <input required="" type="text" class="input" id="user_name" name="name" autocomplete="off" placeholder="Login">
                          <input required="" type="email" class="input" id="user_email" name="email" autocomplete="off" placeholder="E-mail">                         
                          <input required="" type="password" class="input" id="user_pass" name="password" autocomplete="off" placeholder="Password">
                          <input required="" type="password" class="input" id="" name="password2" autocomplete="off" placeholder="Repeat password">
                          <select  class="input" name="user_type_id">
							  <?foreach ($user_types as $row):?>
								<option value="<?=$row['id']?>"><?=$row['name']?></option>
							  <?endforeach;?>						  
						  </select> 
						  <input type="hidden" id="timezone" name="timezone">
						  <div style="margin: auto; width: 157px;" class="g-recaptcha" data-size="compact" data-sitekey="6LeQbxQUAAAAAHGEM0L5me_WSSBOLVVQa0vJUWMR"></div>
						 <?SocialAuth('google,facebook');?>

						 <input type="submit" class="button-blue" value="<?=$this->lang->line('register')?>">
                      	 <script>
						 
						  var today = new Date();
						  var jan = new Date(today.getFullYear(), 0, 1);
						  var jul = new Date(today.getFullYear(), 6, 1);
						  var dst = today.getTimezoneOffset() < Math.max(jan.getTimezoneOffset(), jul.getTimezoneOffset());
						  var timezone = -(today.getTimezoneOffset()/60);
						 $('#timezone').val(timezone);
						 
						 </script>
					  </form>
						
                        <div id="res-user_reg" class="status_ok" ></div>
                        <div class="help-text">
                          <p>
						  <?=$this->lang->line('confirm_register')?>
                          <a href="#"><?=$this->lang->line('law_rules')?></a></p>
                        </div>
                        
                      </div>
                      <!--  -->
                     
                    </div>
                </div> 
                     
                <!--  -->
                <div class="clear"></div>
            </div>
        </div>
<?include('footer.php');?>      