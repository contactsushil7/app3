 <div class="header"> 
        <a href="<?php echo site_url('admin/home');?>" >LOGO</a>
        
        <div class="buttons">
                                
            <div class="dropdown">
                <div class="label"><span class="icos-cog"></span></div>
                <div class="body" style="width: 160px;">
                    <div class="itemLink">
                        <a href="#"><span class="icon-cog icon-white"></span> Settings</a>
                    </div>
                    <div class="itemLink">
                        <a href="#"><span class="icon-comment icon-white"></span> Profile</a>
                    </div>                    
                    <div class="itemLink">
                        <a href="<?php echo site_url('admin/logout');?>"><span class="icon-off icon-white"></span> Logoff</a>
                    </div>                                        
                </div>                
            </div>
            
        </div>
        
    </div>
    <?php foreach ($loginPersonInfo as $row){
    	$role=$row["role_type"];
    	
    ?>
    <div class="navigation">

        <ul class="main">
            <li><a href="#default" class="active"><span class="icom-screen"></span><span class="text">Profile</span></a></li>
           <?php if($role=="Branch_Admin"){?>
            <li><a href="#ui"><span class="icom-user"></span><span class="text">Manage Faculty</span></a></li>
            
            <li><a href="#forms"><span class="icom-user"></span><span class="text">Manage Staff</span></a></li>
            <li><a href="#tables"><span class="icom-user"></span><span class="text">Manage Student</span></a></li>
            <li><a href="#media"><span class="icom-videos"></span><span class="text">Admission</span></a></li>            
            <li><a href="#stats"><span class="icom-stats-up"></span><span class="text">Reports</span></a></li>
            <li><a href="#fee"><span class="icom-clipboard1"></span><span class="text">Fee</span></a></li>
            <li><a href="#samples"><span class="icom-box-add"></span><span class="text">Attendence</span></a></li>
            <li><a href="#other"><span class="icom-star1"></span><span class="text">Inventory</span></a></li>
       		<?php }else{if($role=="Student"){?>
       				 <li><a href="<?php echo site_url('admin/myhomework');?>"><span class="icosg-pencil"></span><span class="text">Homework</span></a></li>
          			  <li><a href="<?php echo site_url('admin/playGame');?>"><span class="icosg-cars"></span><span class="text">Play Games</span></a></li>
           			 <li><a href="#"><span class="icosg-chat"></span><span class="text">Feedback</span></a></li>
            		 <li><a href="#Blogs"><span class="icosg-feed"></span><span class="text">Blog</span></a></li>
           <li><a href="<?php echo site_url('admin/college')?>"><span class="icom-user"></span><span class="text">Create College</span></a></li>
            <li><a href="<?php echo site_url('admin/branches')?>"><span class="icom-user"></span><span class="text">Create Branch</span></a></li>
           
       		<?php }else{?>
       					<li><a href="<?php echo site_url('admin/myhomework');?>"><span class="icom-user"></span><span class="text">Assign  Homework</span></a></li>
          			  <li><a href="#"><span class="icom-user"></span><span class="text">Check Homework</span></a></li>
           			 <li><a href="#"><span class="icom-user"></span><span class="text">Feedback</span></a></li>
            <li><a href="<?php echo site_url('admin/StudentAttendence')?>"><span class="icom-user"></span><span class="text">Attendence</span></a></li>
            
       		
       					<?php }?>
       		<?php }?>
        </ul>
        
        <div class="control"></div>        
        
        <div class="submain">
            
            <div id="default">
                
                <div class="widget-fluid userInfo clearfix">
                    <div class="image">
                        <img src="<?php echo base_url('img/examples/users/dmitry.jpg');?>" class="img-polaroid"/>
                    </div>              
                    <div class="name">Welcome, Admin</div>
                    <ul class="menuList">
                        <li><a href="#"><span class="icon-cog"></span> Settings</a></li>
                        <li><a href="#"><span class="icon-comment"></span> Messages</a></li>
                        <li><a href="#"><span class="icon-share-alt"></span> Logoff</a></li>                        
                    </ul>
                    <div class="text">
                        Welcome back! Your last visit: 24.10.2012 in 19:55
                    </div>
                </div>
                
                            
                             
                
            </div>
            
             <div id="Blogs">                
                <div class="menu">
                    <a href="<?php echo site_url('admin/allBlog')?>"><span class="icosg-feed"></span>Blog</a>
                    <a href="<?php echo site_url('admin/blog');?>"><span class="icosg-pencil"> </span>Write New Blog</a>
                    <a href="<?php echo site_url('admin/Ex_Faculty')?>"><span class="icosg-feed2"></span>My Blogs</a>                    
                    
                </div>                                
                                  
                                 
               
            </div>      
            
            <div id="ui">                
                <div class="menu">
                    <a href="<?php echo site_url('admin/newFaculty')?>"><span class="icon-user"></span>Add New</a>
                    <a href="<?php echo site_url('admin/viewFaculty')?>"><span class="icon-chevron-right"> </span>View Faculty</a>
                    <a href="<?php echo site_url('admin/Ex_Faculty')?>"><span class="icon-th-large"></span> Ex-Faculty</a>                    
                    
                </div>                                
                                  
                                 
               
            </div>            
            
            <div id="forms">                                                
                <div class="menu">
                   <a href="<?php echo site_url('admin/newStaff')?>"><span class="icon-user"></span>Add New</a>
                    <a href="<?php echo site_url('admin/viewStaff')?>"><span class="icon-chevron-right"> </span>View Staff</a>
                    <a href="<?php echo site_url('admin/Ex_Staff')?>"><span class="icon-th-large"></span> Ex-Staff</a>                    
                    <a href="<?php echo site_url('admin/timeTable')?>"><span class="icon-th"></span> Form grid system</a>
                    <a href="editor.html"><span class="icon-pencil"></span> Editors</a>
                </div>                                                                
                             
            </div>             
            
            <div id="tables">
                                                
                 <div class="menu">
                    <a href="<?php echo site_url('admin/newStudent')?>"><span class="icon-user"></span>Add New</a>
                    <a href="<?php echo site_url('admin/viewStudent')?>"><span class="icon-chevron-right"> </span>View Student</a>
                    <a href="<?php echo site_url('admin/AlluminiEntry')?>"><span class="icon-th-large"></span> Allumini Entry</a>                                        
				   <a href="<?php echo site_url('admin/Allumini')?>"><span class="icon-th-large"></span> Allumini</a>                    
                   
                </div>                                
                         
            </div>  

            <div id="media">
                
                <div class="menu">
                   <div class="dr"><span></span></div>
                   <a href="<?php echo site_url('branch_manager_controller/NewRegistration')?>"><span class="icon-picture"></span> Registration</a>
                   <div class="dr"><span></span></div>
                    <a href="<?php echo site_url('branch_manager_controller/ViewApplication')?>"><span class="icon-file"></span>View All Registration </a> 
                    <div class="dr"><span></span></div>
                    <a href="files.html"><span class="icon-file"></span>Update Student Info</a> 
                   <div class="dr"><span></span></div>
                                                                          
                </div>         
                <div class="dr"><span></span></div>
               
            </div>                          
            
            <div id="stats">
                
                <div class="menu">
                    <a href="chart_line.html"><span class="icosg-pencil"></span>File Report</a>
                    <a href="<?php echo site_url('admin/report');?>"><span class="icon-adjust"></span> Graphical Report</a>
                    <a href="chart_column.html"><span class="icon-tasks"></span> Columns</a>
                    <a href="chart_widgets.html"><span class="icon-star"></span> Chart widgets</a>                    
                </div>                
                
            </div>              
            
             <div id="fee">
                <div class="menu">
                    <a href="<?php echo site_url('admin/StudentFeePayment')?>"><span class="icon-refresh"></span> Fee Payments</a>                  
					<a href="<?php echo site_url('admin/FeeDetails')?>"><span class="icon-user"></span>Fee Dues</a>              					
					<a href="mailbox.html"><span class="icon-envelope"></span> Due Fee Report</a>             
                    <a href="users.html"><span class="icon-align-justify"></span>Fee Collection Report</a>
               
                </div>                
                <div class="dr"><span></span></div>
            </div>
            
            
            <div id="samples">
                <div class="menu">
                    <a href="<?php echo site_url('admin/view_attendence');?>"><span class="icon-user"></span> View Student Attendence</a>
                    <a href="<?php echo site_url('admin/teacher_attendence')?>"><span class="icon-refresh"></span>View Teacher Attendence</a>
                   </div>                
                <div class="dr"><span></span></div>
            </div>

            <div id="other">
                <div class="menu">
                    <a href="login.html"><span class="icon-off"></span> Stock Category</a>
                    <a href="error_403.html"><span class="icon-warning-sign"></span>Suplier/Vendors</a>
                    <a href="error_404.html"><span class="icon-warning-sign"></span> Purchased Orders</a>
                    <a href="error_503.html"><span class="icon-warning-sign"></span>Stock Inwards </a>
                     <a href="error_503.html"><span class="icon-warning-sign"></span>Stock Issues </a>                
                </div>
                <div class="dr"><span></span></div>
                <div class="widget">
                    <div class="alert alert-block">                
                        <strong>Alert block!</strong> Click me!:P
                    </div>
                    <div class="alert alert-error">            
                        <strong>Oh snap!</strong> Change a few... 
                    </div>
                    <div class="alert alert-success">            
                        <strong>Well done!</strong> Successfully...
                    </div>            
                    <div class="alert alert-info">            
                        <strong>Heads up!</strong> This alert...
                    </div>                  
                </div>
            </div>            
            
        </div>

    </div>
    <?php }?>
    