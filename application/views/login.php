<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->        
    
    <title>College Management System</title>
    
    <link href="<?php echo base_url('css/stylesheets.css');?>" rel="stylesheet" type="text/css" />      
    <!--[if lt IE 10]>
        <link href="<?php echo base_url('css/ie.css');?>" rel="stylesheet" type="text/css" />
    <![endif]-->        
    <link rel="icon" type="image/ico" href="<?php echo base_url('favicon.ico');?>"/>
    
</head>
<body>

    <div class="header">
        <a href="index.html" class="logo centralize"></a>
    </div>    
    
    <div class="login" id="login">
        <div class="wrap">
            <h1>Welcom. Please Log In</h1>
            <form action="<?php echo site_url('admin/Authentication')?>" method="post" id="validate">
            <div class="row-fluid">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input type="text" name="login" placeholder="Login" class="validate[required]"/>
                </div>                                                 
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-exclamation-sign"></i></span>
                    <input type="text" name="password" placeholder="Password" class="validate[required]"/>
                </div>          
                <div class="dr"><span></span></div>                                
            </div>                
            <div class="row-fluid">
                <div class="span8 remember">                    
                    <input type="checkbox" name="rem"/> Remember me                    
                </div>
                <div class="span4    TAR">
                    <input type="submit" class="btn btn-block btn-primary" value="Log In"/>
                </div>
            </div>
            </form>
            <div class="dr"><span></span></div>
            <div class="row-fluid">
                <div class="span8">                    
                    <button class="btn btn-block" onClick="loginBlock('#forgot');">Forgot your password?</button>
                </div>
                <div class="span4">
                    <button class="btn btn-warning btn-block" onClick="loginBlock('#sign');">Registration</button>
                </div>
            </div>            
        </div>
    </div>
    
    <div class="login" id="sign">
        <div class="wrap">
            <h1>Registration</h1>
               <form action="<?php echo site_url('admin/Registration')?>" method="post" id="validate" onsubmit="return valid();">
         
            <div class="row-fluid">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input type="text" name="name" placeholder="Name"/>
                </div>
                <div class="input-prepend" id="error">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input type="text" name="email"  placeholder="E-mail"/>
                </div>                
                <div class="dr"><span></span></div>                
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-exclamation-sign"></i></span>
                    <input type="text" name="password" placeholder="Password"/>
                </div>                         
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-question-sign"></i></span>
                    <input type="text" name="re-password" placeholder="Re-Password"/>
                </div>                                
                <div class="dr"><span></span></div>                                
            </div>
            <div class="row-fluid">
                <div class="span8 remember">
                    <input type="checkbox"/> I agree with terms...
                </div>
                <div class="span4 TAR">
                    <button class="btn btn-block btn-primary">Registration</button>
                </div>
            </div>
            <div class="dr"><span></span></div>
            <div class="row-fluid">
                <div class="span4">                    
                    <button class="btn btn-block" onClick="loginBlock('#login');">Back</button>
                </div>                
            </div>      
            </form>       
        </div>
           
               
    </div>    
    
    <div class="login" id="forgot">
        <div class="wrap">
            <h1>Forgot your password?</h1>
            <div class="row-fluid">
                <p>Please enter your email address to recover your password</p>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input type="text" name="email"  placeholder="E-mail"/>
                </div>                                                           
                <div class="dr"><span></span></div>                               
            </div>                   
            <div class="row-fluid">
                <div class="span4">                    
                    <button class="btn btn-block" onClick="loginBlock('#login');">Back</button>
                </div>                                
                <div class="span4"></div>
                <div class="span4 TAR">
                    <button class="btn btn-block btn-primary">Recover</button>
                     <button class="btn btn-block" >Back</button>
                </div>
            </div>                                  
        </div>
    </div>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript">
    $( document ).ready(function() {
        $("#email").focusout(function(){

        	 $(document).ajaxStart(function(){
        	        $(this).html("<img src='../../img/loaders/2d_2.gif' ");
        	    });
        $.ajax({
        type: "POST",
        url: "<?php echo site_url('admin/verification');?>",
        success: function(output) {
          //  alert(output);
           $(".last").remove();
            $("#error").append("<div class='last'style='font-size:14px;color:green;'>hello</div>");
        }
    });
}); 
});
    </script>
</body>
</html>
