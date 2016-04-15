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
    
    </style>
</head>

<body>
    
   
    <div class="content">
                
                    
                 <div class="widget">
                <div class="head">
                    <div class="icon"><i class="icosg-clipboard1"></i></div>
                    <h2>Time Table Details</h2>                       
                </div>  
                <form action="<?php echo site_url('admin/generateTimeTable')?>" method="post">
                <div class="block-fluid">
                				<div class="span2">
                				<div class="input-prepend">
                                    <span class="add-on">Class</span>
                                      <select id="classes" name="classs" required>
                                    <option value="0">choose a class</option>
                                    <?php foreach ($class as $row){?>
                                    <option value="<?php echo $row['class_id'];?>"><?php echo $row['name'];?></option>
                                      <?php }?>                                                                 
                                </select>                         
                                </div> 
                			
                                </div>
                                <div class="span2 offset1 ">
                              <div class="input-prepend">
                                    <span class="add-on">Section</span>
                                      <select name="section" required>
				                                    <option value="0">choose a Section</option>
				                                    <option value="1">A</option>
				                                    <option value="2">B</option>
				                                    <option value="3">C</option>
				                                    <option value="4">D</option>
				                                    <option value="5">E</option>
                                                                                                        
                               			 </select>                           
                                </div> 
                                </div>
                                <div class="span2 offset1 ">
                              <div class="input-prepend">
                                    <span class="add-on" >No. of Periods</span>
                                     <input id="periods" name="periods" type="text" style="width: 169px;" required>                                                  
                                                               
                                </div> 
                                </div>
                </div>
               
                 
                        
                        <div class="block-fluid" style="height:450px;overflow:auto;">
                           <div class="table-responsive">          
  <table >
    <thead>
      <tr>
        <th>Period</th>
        <th>Time</th>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
        <th>Sat</th>
      </tr>
    </thead>
    
    <tbody id="tabletr" >
      
    </tbody>
  </table>
 </div>          
       
                        </div> 
                       <div class="offset8"> <input type="submit" class="btn btn-info btn-lg" value="Generate"></div>
   
                </form>
                        
             </div>
              
        </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   <?php include './js/PhpScript/JsScript.php'?>;
       
         
</body>
</html>
