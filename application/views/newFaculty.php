<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->        
    
    <title>New Faculty | School Management System</title>
    
    <link href="<?php echo base_url('css/stylesheets.css'); ?>" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="<?php echo base_url('css/ie.css');?>" rel="stylesheet" type="text/css" />
    <![endif]-->       
    <link rel="icon" type="image/ico" href="<?php echo base_url('favicon.ico');?>"/>
      
    
</head>
<body>
    
   
    <div class="content" >
                <div class="row-fluid" style="overflow:x;">
            <form action="<?php echo  site_url('admin/addnewFaculty') ?>" method="post" enctype="multipart/form-data">
            <div class="">                

                <div class="widget">
                    <div class="head">
                        <div class="icon"><i class="icos-pencil2"></i></div>
                        <h2>Details</h2>
                    </div>                        
                    <div class="block-fluid">

                        <div class="row-form">
                        <!-- <div class="">Department</div>
                            <div class="span3">
                        <select name="s_example">
                                    <option value="0">choose a department...</option>
                                    <option value="1">Andorra</option>
                                    <option value="2">Antarctica</option>
                                    <option value="3">Bulgaria</option>
                                    <option value="4">Germany</option>
                                    <option value="5">Dominican Republic</option>
                                    <option value="6">Micronesia</option>
                                    <option value="7">United Kingdom</option>
                                    <option value="8">Greece</option>
                                    <option value="9">Italy</option>
                                    <option value="10">Ukraine</option>                                                                       
                                </select>
                                </div>--> 
                            <div class="span2">Name</div>
                            <div class="span3"><input type="text" name="name" placeholder="Enter staff name"></div>
                      		
                        </div>
                        
                        
                         <div class="row-form">
                         <div class="span2">Designation</div>
                            <div class="span3"><input type="text" name="designation" placeholder="Enter staff designation"></div>
                       
                            <div class="span2">Qualification</div>
                            <div class="span3"><input type="text" name="qaulification" placeholder="Enter qualification"></div>
                         	
                        </div>
                         
                         <div class="row-form">
                         <div class="span2">Specilization</div>
                            <div class="span3"><input type="text" name="specilization"placeholder="Specilization in"></div>
                       
                            <div class="span2">Email</div>
                            <div class="span3">
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icosg-mail1"></i></span>
                                    <input type="text" style="width: 209px;" name="email"  placeholder="Enter email" required>                               
                                </div>                  
                              
                            </div>
                             
                            
                        </div>
                        <div class="row-form">
                        <div class="span2">Phone</div>
                              <div class="span3">
                             <div class="input-prepend">
                                    <span class="add-on"><i class="icosg-phone"></i></span>
                                    <input type="text" style="width: 209px;"  name="phone"placeholder="Enter phone number">                               
                                </div>                  
                              </div>
                            <div class="span2">Gender</div>
                            <div class="span3">
                                <div class="radio"><span class=""><input type="radio" checked="checked" name="gender" value="Male" style="opacity: 0;"></span></div>Male 
                                  
                                 	<div class="radio"><span class=""><input type="radio"  name="gender" value="Female" style="opacity: 0;"></span></div>Female 
                               		 
                             </div>
                             
                           
                        </div>
                            
                       <div class="row-form">
                            <div class="span2">Image</div>
                            <div class="span3">                            
                                <div class="input-append file">
                                    <input type="file" name="file" style="width: 160px;">
                                    <input type="text" style="width: 174px;">
                                    <button class="btn btn-sm">Browse</button>
                                </div>                            
                            </div>
                            
                            <div class="span2">Joining Date</div>
                            <div class="span3">                                                            
                                <input type="text"  name="date"class="datepicker hasDatepicker" id="dp1453972527352" style="width:209px;">
                            </div>
                       
                        </div>
                        
                        <div class="row-form">
                            <div class="span2">Temporary address</div>
                            <div class="span3"><textarea  name="temp" placeholder="Placeholder example"></textarea></div>
                        <div class="span2">Permanent address</div>
                            <div class="span3"><textarea  name="permanent"placeholder="Placeholder example"></textarea></div>
                        
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
