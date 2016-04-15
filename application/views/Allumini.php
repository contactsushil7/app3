<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->        
    
    <title>Virgo - Premium Admin Template</title>
    
    <link href="<?php echo base_url('css/stylesheets.css'); ?>" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="<?php echo base_url('css/ie.css');?>" rel="stylesheet" type="text/css" />
    <![endif]-->       
    <link rel="icon" type="image/ico" href="<?php echo base_url('favicon.ico');?>"/>
      
    
</head>
<body>
    
   
    <div class="content">
                
                   <div class="widget">
                <div class="head">
                    <div class="icon"><i class="icosg-clipboard1"></i></div>
                    <h2>List of Our  Allumini</h2>                       
                </div>   
                
                <div class="block-fluid">
                				<div class="span4">
                				<div class="btn-group">
                                    
                                    <button class="btn btn-primary tip" data-original-title="Terminate"><span class="icon-ok icon-white"></span></button>
                                    <button class="btn btn-primary tip" data-original-title="Delete"><span class="icon-trash icon-white" ></span></button>                                                                        
                                </div>
                                </div>
                                <div class="span4">
                               <div class="input-prepend">
                                    <span class="add-on" style="background-color:#fff;margin-left:20px;"><i class="icosg-search"></i></span>
                                    <input type="text" style="width: 209px;"  placeholder="Department,Name,Email,Phone Number">    
                                                               
                                </div>  
                                </div>
                </div>
                            
                        <div class="block-fluid">
                            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" class="checkall"/></th>
                                        <th width="25%">Name</th>
                                        <th width="20%">Department</th>
                                        <th width="20%">Designation</th>
                                        <th width="20%">Joining Date</th>
                                        <th width="15%" class="TAC">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" name="order[]" value="528"/></td>
                                        <td><a href="#">Swati Reddy</a></td>
                                        <td>Robotics</td>
                                        <td><span class="label label-important">Robotics Developer</span></td>
                                        <td>21/12/2015</td>
                                        <td class="TAC">
                                            <a href="#"><span class="icon-ok"></span></a> 
                                            <a href="#"><span class="icon-pencil"></span></a> 
                                            <a href="#"><span class="icon-trash"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="order[]" value="527"/></td>
                                        <td><a href="#">Sushil Kumar Yadav</a> </td>
                                        <td>Software</td>
                                        <td><span class="label label-important">Software Developer</span></td>
                                        <td>22/12/2015</td>
                                        <td class="TAC">
                                            <a href="#"><span class="icon-ok"></span></a> 
                                            <a href="#"><span class="icon-pencil"></span></a> 
                                            <a href="#"><span class="icon-trash"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="order[]" value="526"/></td>
                                        <td><a href="#">Alex Fruz</a></td>
                                        <td>Product #53</td>
                                        <td><span class="label label-important">New</span></td>
                                        <td>23/11/2012</td>
                                        <td class="TAC">
                                            <a href="#"><span class="icon-ok"></span></a> 
                                            <a href="#"><span class="icon-pencil"></span></a> 
                                            <a href="#"><span class="icon-trash"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="order[]" value="525"/></td>
                                        <td><a href="#">Olga Yukhimchuk</a></td>
                                        <td>Product #874</td>
                                        <td><span class="label label-info">Pending</span></td>
                                        <td>23/11/2012</td>
                                        <td class="TAC">
                                            <a href="#"><span class="icon-ok"></span></a> 
                                            <a href="#"><span class="icon-pencil"></span></a> 
                                            <a href="#"><span class="icon-trash"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="order[]" value="524"/></td>
                                        <td><a href="#">Angelina Rose</a></td>
                                        <td>Product #533</td>
                                        <td><span class="label label-info">Pending</span></td>
                                        <td>23/11/2012</td>
                                        <td class="TAC">
                                            <a href="#" class="tip" data-original-title="View Detail"><span class="icon-ok "></span></a> 
                                            <a href="#"><span class="icon-pencil"></span></a> 
                                            <a href="#"><span class="icon-trash"></span></a>
                                        </td>
                                    </tr>                            
                                </tbody>
                            </table>                    
                        </div> 
             			</div>
                    
       
   <!-- hello temp details -->
    <div class="block-fluid">
                            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" class="checkall"/></th>
                                        <th width="25%">Name</th>
                                        <th width="20%">Department</th>
                                        <th width="20%">Designation</th>
                                        <th width="20%" class="TAC">Joining Date</th>
                                        <th width="15%" class="TAC">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span>Sun</span></td>
                                        <td>  
                                        <div class="span2">
                                        <select name="time">
                                        <option value="0">choose a option...</option>
                                    <option value="1">1:00-2:00</option>
                                    <option value="2">2:00-3:00</option>
                                    <option value="3">3:00-4:00</option>
                                    <option value="1">4:00-5:00</option>
                                    <option value="2">5:00-6:00</option>
                                    <option value="3">6:00-7:00</option>
                                    <option value="2">5:00-6:00</option>
                                    <option value="3">7:00-8:00</option>
                                    <option value="2">8:00-9:00</option>
                                    <option value="3">9:00-10:00</option>
                                    <option value="3">10:00-11:00</option>
                                    <option value="2">11:00-12:00</option>
                                    <option value="3">12:00-13:00</option>
                                    
                                    
                                                                                                          
                                </select>
                                </div>
                                <select name="faculty">
                                        <option value="0">choose a option...</option>
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
                            </td>
                                        <td>Robotics</td>
                                        <td><span class="label label-important">Robotics Developer</span></td>
                                        <td>21/12/2015</td>
                                        <td class="TAC">
                                            <a href="#"><span class="icon-ok"></span></a> 
                                            <a href="#"><span class="icon-pencil"></span></a> 
                                            <a href="#"><span class="icon-trash"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span>Mon</span></td>
                                        <td><a href="#"></a> </td>
                                        <td>Software</td>
                                        <td><span class="label label-important">Software Developer</span></td>
                                        <td>22/12/2015</td>
                                        <td class="TAC">
                                            <a href="#"><span class="icon-ok"></span></a> 
                                            <a href="#"><span class="icon-pencil"></span></a> 
                                            <a href="#"><span class="icon-trash"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span>Tue</span></td>
                                        <td><a href="#"></a></td>
                                        <td>Product #53</td>
                                        <td><span class="label label-important">New</span></td>
                                        <td>23/11/2012</td>
                                        <td class="TAC">
                                            <a href="#"><span class="icon-ok"></span></a> 
                                            <a href="#"><span class="icon-pencil"></span></a> 
                                            <a href="#"><span class="icon-trash"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span>Thu</span></td>
                                        <td><a href="#"></a></td>
                                        <td>Product #874</td>
                                        <td><span class="label label-info">Pending</span></td>
                                        <td>23/11/2012</td>
                                        <td class="TAC">
                                            <a href="#"><span class="icon-ok"></span></a> 
                                            <a href="#"><span class="icon-pencil"></span></a> 
                                            <a href="#"><span class="icon-trash"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span>Fri</span></td>
                                        <td><a href="#"></a></td>
                                        <td>Product #533</td>
                                        <td><span class="label label-info">Pending</span></td>
                                        <td>23/11/2012</td>
                                        <td class="TAC">
                                            <a href="#" class="tip" data-original-title="View Detail"><span class="icon-ok "></span></a> 
                                            <a href="#"><span class="icon-pencil"></span></a> 
                                            <a href="#"><span class="icon-trash"></span></a>
                                        </td>
                                    </tr>      
                                    
                                    <tr>
                                        <td><span>Sat</span></td>
                                        <td><a href="#"></a></td>
                                        <td>Product #533</td>
                                        <td><span class="label label-info">Pending</span></td>
                                        <td>23/11/2012</td>
                                        <td class="TAC">
                                            <a href="#" class="tip" data-original-title="View Detail"><span class="icon-ok "></span></a> 
                                            <a href="#"><span class="icon-pencil"></span></a> 
                                            <a href="#"><span class="icon-trash"></span></a>
                                        </td>
                                    </tr>                            
                                </tbody>
                            </table>                    
                        </div> 
    </div>
</body>
</html>
