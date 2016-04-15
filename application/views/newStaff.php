<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->        
    
    <title>New Staff</title>
    
    <link href="<?php echo base_url('css/stylesheets.css'); ?>" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="<?php echo base_url('css/ie.css');?>" rel="stylesheet" type="text/css" />
    <![endif]-->       
    <link rel="icon" type="image/ico" href="<?php echo base_url('favicon.ico');?>"/>
      
    
</head>
<body>
    
   <form action="<?php echo site_url('admin/addnewstaff');?>" method="post" enctype="multipart/form-data">
    <div class="content">
                <div class="row-fluid">
            
            <div class="span12">                

                <div class="widget">
                    <div class="head">
                        <div class="icon"><i class="icos-pencil2"></i></div>
                        <h2>Details</h2>
                    </div>                        
                    <div class="block-fluid">

                        <div class="row-form">
                           
                            <div class="span1">Name</div>
                            <div class="span3"><input type="text" placeholder="Enter staff name" name="name"></div>
                      		 <div class="span1">Designation</div>
                            <div class="span3"><input type="text" placeholder="Enter staff designation" name="designation"></div>
                       
                        </div>
                        
                        
                         <div class="row-form">
                        
                            <div class="span1">Qualification</div>
                            <div class="span3"><input type="text" name="qualification" placeholder="Enter qualification"></div>
                         	
                         	<div class="span1">Email</div>
                            <div class="span3">
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icosg-mail1"></i></span>
                                    <input type="text" style="width: 209px;" name="email" placeholder="Enter email">                               
                                </div>      
                        </div>
                         
                         <div class="row-form">
                        
                                        
                              
                            </div>
                             
                            
                        </div>
                        <div class="row-form">
                        <div class="span1">Phone</div>
                              <div class="span3">
                             <div class="input-prepend">
                                    <span class="add-on"><i class="icosg-phone"></i></span>
                                    <input type="text" style="width: 209px;" name="phone" placeholder="Enter phone number">                               
                                </div>                  
                              </div>
                            <div class="span1">Gender</div>
                            <div class="span3">
                                <div class="radio"><span class=""><input type="radio" checked="checked" name="gender" value="Male" style="opacity: 0;"></span></div>Male 
                                  
                                 	<div class="radio"><span class=""><input type="radio"  name="gender" value="Female" style="opacity: 0;"></span></div>Female 
                               		 
                             </div>
                             
                           
                        </div>
                            
                       <div class="row-form">
                            <div class="span1">Image</div>
                            <div class="span3">                            
                                <div class="input-append file">
                                    <input type="file" name="file1" style="width: 160px;">
                                    <input type="text" style="width: 174px;">
                                    <button class="btn">Browse</button>
                                </div>                            
                            </div>
                            
                            <div class="span1">Joining Date</div>
                            <div class="span3">                                                            
                                <input type="text" name="joining"class="datepicker hasDatepicker" id="dp1453972527352" style="width:209px;">
                            </div>
                       
                        </div>
                        
                        <div class="row-form">
                            <div class="span1">Temporary address</div>
                            <div class="span3"><textarea name="temp" placeholder="Placeholder example"></textarea></div>
                        <div class="span1">Permanent address</div>
                            <div class="span3"><textarea required name="permanent" placeholder="Placeholder example"></textarea></div>
                        
                        </div>

                        <div class="toolbar bottom TAL">
                           <div class="span2"> <input class="btn btn-large btn-block btn-primary" type="submit" value="CREATE"></div>
                        </div>

                    </div>
                </div>
                
            </div>
            
             
                </div>
                
            </div>            
            </form>
        
                   
                       
             
                    
        
    
    
</body>
</html>
