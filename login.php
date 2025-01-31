<?include('header.php');?>

        <!-- header page end -->    
 \        <!-- content -->
        <div class="content">
            <div class="center">
                <!--  -->
                <div id="login" class="login_bl" >
                    <div id="login-tabs" class="login_tabs">
                      <h3 id="reg" class="signup-tab"><a class="" href="/register"><?=$this->lang->line('register')?></a></h3>
                      <h3 id="entry" class="login-tab"><a href="#login-content" class="active"><?=$this->lang->line('login')?></a></h3>
                      <div class="clear"></div>
                    </div><!--.tabs-->

                    <div class="tabs-content">
                      <!--  -->
                      
                      <!--  -->
                      <div id="login-content" class="tabs-content_bl active">
                        <form id="form-user_login" class="login-form" action="javascript:void(null);" method="post" OnSubmit="ajax_post('login',this,'#res-user_login');">
                          <input type="hidden" name="event" value="login">
                          <input required="" type="text" class="input" id="user_name" name="email" autocomplete="off" placeholder="E-mail">
                          <input required="" type="password" class="input" id="user_pass" name="password" autocomplete="off" placeholder="Password">
                                  <input type="checkbox" class="checkbox" value="1" name="remember" id="remember_me">
                          <label for="remember_me"><?=$this->lang->line('remember_me')?></label>  
						<div style="margin: auto; width: 157px;" class="g-recaptcha" data-size="compact" data-sitekey="6LeQbxQUAAAAAHGEM0L5me_WSSBOLVVQa0vJUWMR"></div>
                         <?SocialAuth('google,facebook');?>
						 <input type="submit" class="button-blue" value="<?=$this->lang->line('login')?>">
						  	
                        </form>
                         <div id="res-user_login" class="status_ok"></div>
                        <div class="help-text">
                          <p><a href="/recovery"><?=$this->lang->line('fargot_password')?></a></p>
                        </div>
                      </div>
                    </div>
                </div> 
                     
                <!--  -->
                <div class="clear"></div>
            </div>
        </div>
<?include('footer.php');?>      