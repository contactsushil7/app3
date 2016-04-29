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
      
    <style type="text/css">
        input[type="checkbox"]{
cursor: pointer;
-webkit-appearance: none;
appearance: none;
background: red;
border-radius: 1px;
box-sizing: border-box;
position: relative;
box-sizing: content-box ;
width: 30px;
height: 30px;
border-width: 0;
transition: all .3s linear;
}
input[type="checkbox"]:checked{
  background-color: #2ECC71;
}
input[type="checkbox"]:focus{
  outline: 0 none;
  box-shadow: none;
}
    </style>
</head>

<body>
    
   
    <div class="content">
                <form action="<?php echo site_url('admin/submitAttendence')?>" method="post">
    
                    
                 <div class="widget">
                <div class="head">
                    <div class="icon"><i class="icosg-clipboard1"></i></div>
                    <h2>Studence Attendence Details</h2>                       
                </div>  
                <div class="block-fluid">
                				<div class="span2">
                				<div class="input-prepend">
                                    <span class="add-on">Class</span>
                                      <select id="at_class" name="classs">
                                    <option value="0">choose a class</option>
                                  
                                    <option value="LKG" >LKG  </option>
                                    <option value="UKG" >UKG</option>
                                    <option value="Class 1" >Class 1 </option>
                                    <option value="Class 2" >Class 2</option>
                                    <option value="Class 3" >Class  3</option>
                                    <option value="Class 4" >Class 4</option>
                                    <option value="Class 5" >Class 5 </option>
                                    <option value="Class 6" >Class 6</option>
                                    <option value="Class 7" >Class 7</option>
                                    <option value="Class 8" >Class 8</option>
                                    <option value="Class 9" >Class 9</option>
                                    <option value="Class 11" >Class 11</option>                                                                 
                                </select>                         
                                </div> 
                			
                                </div>
                                <div class="span2 offset1 ">
                              <div class="input-prepend">
                                    <span class="add-on">Section</span>
                                      <select name="section" id="at_section">
				                                    <option value="0">choose a Section</option>
				                                    <option value="A">A</option>
				                                    <option value="B">B</option>
				                                    <option value="C">C</option>
				                                    <option value="D">D</option>
				                                    <option value="E">E</option>
                                                                                                        
                               			 </select>                           
                                </div> 
                                </div>
                                
                                <div class="span2 offset1 ">
                              <div class="input-prepend">
                                    <span class="add-on">Subject</span>
                                      <select name="subject" id="at_subject">
				                                    <option value="0">Choose Subjet</option>
				                                    <option value="1">Hindi</option>
				                                    <option value="2">English</option>
				                                    <option value="3">Math</option>
				                                    <option value="4">Science</option>
				                                    <option value="5">Social Science</option>
                                                                                                        
                               			 </select>                           
                                </div> 
                                </div>
                </div>
                
                        
                        <div class="block-fluid" style="height:700px;overflow:auto;">
                            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                                <thead >
                                    <tr>
                                        
                                        <th width="25%">Roll No.</th>
                                        <th width="20%">Name</th>
                                        <th width="20%">Attendence</th>
                                        
                                    </tr>
                                </thead>
                                <tbody id="attendanceSheet">
                              
                                              
                                </tbody>
                                
                                <tfoot>
                                <tr>
                                 <td></td>
								      <td><input type="submit" class="btn btn-lg btn-info" value="Submit Attendence" ></td>
								       <td><input type="button" class="btn btn-lg btn-info" value="Update" ></td>
								      
                                </tfoot>
                            </table>                    
                        </div> 
                       
             </div>
                     </form>
                        
        </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    
         
</body>
</html>
