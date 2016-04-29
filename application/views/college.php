<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->        
    
    <title>New College | School Management System</title>
    
    <link href="<?php echo base_url('css/stylesheets.css'); ?>" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="<?php echo base_url('css/ie.css');?>" rel="stylesheet" type="text/css" />
    <![endif]-->       
    <link rel="icon" type="image/ico" href="<?php echo base_url('favicon.ico');?>"/>
      
    
</head>
<body>
    
   
    <div class="content">
                <div class="row-fluid">
            <form action="<?php echo  site_url('admin/newCollege') ?>" method="post">
            <div class="span12">                

                <div class="widget">
                    <div class="head">
                        <div class="icon"><i class="icos-pencil2"></i></div>
                        <h2>College Details</h2>
                    </div>                        
                    <div class="block-fluid">

                        
                         <div class="row-form">
                         <div class="span1">Name</div>
                            <div class="span3"><input type="text" name="name"placeholder="College Name"></div>
                       
                            <div class="span1">Owner</div>
                            <div class="span3"><input type="text" name="owner" placeholder="Owner Name"></div>
                         	
                        </div>
                         
                        
                        
                            
                       
                        
                        

                        <div class="toolbar bottom TAL">
                           <div class="span2"> <input class="btn btn-large btn-block btn-primary" type="submit" value="Submit"></div>
                        </div>

                    </div>
                </div>
                
            </div>
            
             </form>
                </div>
                
            </div>            
            
        
                   
                        
             
                    
        
    
    
</body>
</html>
