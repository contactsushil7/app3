<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->        
    
    <title>Student Attendence</title>
    
    <link href="<?php echo base_url('css/stylesheets.css'); ?>" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="<?php echo base_url('css/ie.css');?>" rel="stylesheet" type="text/css" />
    <![endif]-->       
    <link rel="icon" type="image/ico" href="<?php echo base_url('favicon.ico');?>"/>
      
    
</head>
<body>
    
   
    <div class="content" >
                
                    
                 <div class="widget">
                <div class="head">
                    <div class="icon"><i class="icosg-clipboard1"></i></div>
                    <h2>Student Attendence Details</h2>                       
                </div>  
                <div class="block-fluid">
                				<div class="span4">
                				<div class="input-prepend">
                                    <span class="add-on">Class</span>
                                      <select name="s_example">
                                    <option value="0">choose a class</option>
                                    <option value="1">L.K.G</option>
                                    <option value="2">U.K.G</option>
                                    <option value="3">1</option>
                                    <option value="4">2</option>
                                    <option value="5">3</option>
                                    <option value="6">4</option>
                                    <option value="7">5</option>
                                    <option value="8">6</option>
                                    <option value="9">7</option>
                                    <option value="10">8</option>                                                                       
                                </select>                         
                                </div> 
                				
                                </div>
                                <div class="span4 ">
                              <div class="input-prepend">
                                    <span class="add-on">Section</span>
                                      <select name="s_example">
				                                    <option value="0">choose a Section</option>
				                                    <option value="1">A</option>
				                                    <option value="2">B</option>
				                                    <option value="3">C</option>
				                                    <option value="4">D</option>
				                                    <option value="5">E</option>
                                                                                                        
                               			 </select>                           
                                </div> 
                                </div>
                </div>
                            
                        <div class="block-fluid">
                            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        
                                        <th width="25%">Roll No.</th>
                                        <th width="20%">Name</th>
                                        <th width="20%">Attendence</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">11</a></td>
                                        <td>shiv</td>
                                       
                                        <td class="TAC">
                                             <a  class="attendence" href="#"><img alt="present" src="<?php echo base_url('img/yes.gif')?>"></a> 
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">11</a></td>
                                        <td>shiv</td>
                                       
                                        <td class="TAC">
                                            <a  class="attendence" href="#"><img alt="present" src="<?php echo base_url('img/yes.gif')?>"></a> 
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">11</a></td>
                                        <td>shiv</td>
                                       
                                        <td class="TAC">
                                            <a  class="attendence" href="#"><img alt="present" src="<?php echo base_url('img/yes.gif')?>"></a> 
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">11</a></td>
                                        <td>shiv</td>
                                       
                                        <td class="TAC">
                                            <a  class="attendence" href="#"><img alt="present" src="<?php echo base_url('img/yes.gif')?>"></a> 
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">12</a> </td>
                                        <td>sushil</td>
                                        
                                        <td class="TAC">
                                           <a  class="attendence" href="#"><img alt="present" src="<?php echo base_url('img/no.jpg')?>"></a> 
                                           
                                        </td>
                                    </tr>
                                              
                                </tbody>
                            </table>                    
                        </div> 
             
                    </div>
        </div>
   
        
</body>
</html>
