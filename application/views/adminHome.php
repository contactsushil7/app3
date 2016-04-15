<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->        
    
    <title>School Management System</title>
    
    <link href="<?php echo base_url('css/stylesheets.css'); ?>" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="<?php echo base_url('css/ie.css');?>" rel="stylesheet" type="text/css" />
    <![endif]-->       
    <link rel="icon" type="image/ico" href="<?php echo base_url('favicon.ico');?>"/>
      
    
</head>
<body >
    
   
    <div class="content">
                
        <div class="row-fluid">
            
            <div class="span8">
                
                <div class="middle">

                    <div class="button">
                        <a href="#">
                            <span class="icomg-earth"></span>
                            <span class="text">Faculty</span>
                        </a>
                        <ul class="sub">
                            <li><a href="/" class="tip" title="Faculty"><span class="icon-home"></span></a></li>
                            <li><a href="<?php echo site_url('admin/send_mail');?>" class="tip" title="Present Faculty"><span class="icon-user"></span></a></li>
                            <li><a href="grid.html" class="tip" title="Absent Faculty"><span class="icon-th"></span></a></li>
                            <li><a href="widgets.html" class="tip" title="Attendence"><span class="icon-th-large"></span></a></li>
                            <li><a href="buttons.html" class="tip" title="Report"><span class="icon-chevron-right"></span></a></li>
                            <li><a href="icons.html" class="tip" title="Add New"><span class="icon-fire"></span></a></li>
                            <li><a href="http://google.com/" class="tip" title="Ex-Faculty" target="_blank"><span class="icon-globe"></span></a></li>
                          </ul>
                    </div>

                    <div class="button">
                        <a href="#">
                            <span class="icomg-user2"></span>
                            <span class="text">Users Actions</span>
                        </a>
                        <ul class="sub">
                            <li><a href="users.html" class="tip" title="Show list"><span class="icon-th-list"></span></a></li>
                            <li><a href="ui.html" class="tip" title="Add new"><span class="icon-plus"></span></a></li>                        
                            <li><a href="#" class="tip" title="Registrations"><span class="icon-ok"></span></a></li>
                            <li><a href="#" class="tip" title="Send mail"><span class="icon-envelope"></span></a></li>
                            <li><a href="#" class="tip" title="Top users"><span class="icon-star"></span></a></li>
                            <li><a href="#" class="tip" title="Users activity"><span class="icon-signal"></span></a></li>
                            <li><a href="#" class="tip" title="Last comments"><span class="icon-comment"></span></a></li>
                        </ul>
                    </div>                

                    <div class="button">
                        <a href="#">
                            <span class="icomg-videos"></span>
                            <span class="text">Media Actions</span>
                        </a>
                        <ul class="sub">                        
                            <li><a href="#" class="tip" title="Videos"><span class="icon-film"></span></a></li>
                            <li><a href="#" class="tip" title="Images"><span class="icon-picture"></span></a></li>                        
                            <li><a href="#" class="tip" title="Add new"><span class="icon-plus"></span></a></li>                        
                            <li><a href="#" class="tip" title="File manager"><span class="icon-folder-open"></span></a></li>
                        </ul>
                    </div>                  
                    
                    <div class="button">
                        <a href="#">
                            <span class="icomg-mail"></span>
                            <span class="text">Mail box</span>
                        </a>
                        <ul class="sub">                        
                            <li><a href="#" class="tip" title="New"><span class="icon-envelope"></span></a></li>
                            <li><a href="#" class="tip" title="Inbox"><span class="icon-inbox"></span></a></li>                        
                            <li><a href="#" class="tip" title="Outbox"><span class="icon-share-alt"></span></a></li>                        
                            <li><a href="#" class="tip" title="Spam"><span class="icon-warning-sign"></span></a></li>
                            <li><a href="#" class="tip" title="Removed"><span class="icon-remove"></span></a></li>
                        </ul>                        
                    </div>
                    
                </div>                
                
                <div class="middle">
                    <div class="informer">
                        <a href="#">
                            <span class="title">25</span>
                            <span class="text">Present Faculty</span>
                        </a>
                        <span class="caption orange tip" title="Absent">4</span>
                    </div>                                        
                    <div class="informer">
                        <a href="#">
                            <span class="title">520000 Rs.</span>
                            <span class="text">Fee collected</span>
                        </a>
                        <span class="caption red tip" title="Dues">150000</span>
                    </div>                    
                    <div class="informer">
                        <a href="#">
                            <span class="title">1500</span>
                            <span class="text">Applicatiom</span>
                        </a>
                        <span class="caption green tip" title="New">200</span>
                    </div>                    
                    <div class="informer">
                        <a href="#">
                            <span class="title">4,536</span>
                            <span class="text">Present Student</span>
                        </a>
                        <span class="caption purple tip" title="Absent">100</span>
                    </div>                                        
                </div>
                
               

                
               
            </div>
            
            <div class="span4">
                
                <div class="block-fluid">
                    <div id="main_calendar"></div>
                </div>                

               
                 
                        
                    </div>
                    
                </div>                
                
            </div>            
            
      
   
</body>
</html>
