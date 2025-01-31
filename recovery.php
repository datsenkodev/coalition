<?include('header.php');?>

        <!-- header page end -->    
 \        <!-- content -->
        <div class="content">
            <div class="center">
                <!--  -->
                <div id="login" class="login_bl" >
                    <div id="login-tabs" class="login_tabs">
                      <h3 id="reg" class="signup-tab"><a class="" href="/register"><?=$this->lang->line('register')?></a></h3>
                      <h3 id="entry" class="login-tab"><a href="#login-content" class="active"><?=$this->lang->line('recovery_password')?></a></h3>
                      <div class="clear"></div>
                    </div><!--.tabs-->

                    <div class="tabs-content">
                      <!--  -->
                      
                      <!--  -->
                      <div id="login-content" class="tabs-content_bl active">
                        <form id="form-user_login" class="login-form" action="javascript:void(null);" method="post" OnSubmit="ajax_post('recovery',this,'#res-user_login');">
                        
                          <input required="" type="text" class="input" id="email" name="email" autocomplete="off" placeholder="E-mail">
                          
						<div style="margin: auto; width: 157px;" class="g-recaptcha" data-size="compact" data-sitekey="6LeQbxQUAAAAAHGEM0L5me_WSSBOLVVQa0vJUWMR"></div>
                          <input type="submit" class="button-blue" value="<?=$this->lang->line('recovery_password')?>">
						  	
                        </form>
                         <div id="res-user_login" class="status_ok"></div>
                         
                      </div>
                    </div>
                </div> 
                     
                <!--  -->
                <div class="clear"></div>
            </div>
        </div>
<?include('footer.php');?>      