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
        <form action="<?php echo  site_url('admin/FeePayment') ?>" method="post" enctype="multipart/form-data">
            <div class="">                

                <div class="widget">
                    <div class="head">
                       
                        <h2 align="centre"><b>Pay Fee</b></h2>
                    </div>                        
                    <div class="block-fluid">

                        <div class="row-form">                     
                           
						   <div class="span2"><b>Class</b></div>
							 <div class="span3"> <select class="form-control " id="fee_class" autocomplete="off" onchange="getStudentForFee()" >
									<option value="0">Select</option>
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


								 <div class="span2"><b>Section</b></div>
							<div class="span3"> <select input class="form-control input-md" id="fee_section" autocomplete="off">
									<option value="0" >Choose Section</option>
									<option value="A" >A</option>
									<option value="B" >B</option>
									<option value="C" >C</option>
									<option value="D" >D</option>
									<option value="E" >E</option>																	
									</select>
							</div>   
							</div>
						<div class="row-form">    
                          
                          <div class="span2"><b>Student</b></div>
							<div class="span3"> <select input class="form-control input-md" name="Seeking_grade" id="seeking_grade" autocomplete="off">
									<option value="Class 1" >A</option>
									<option value="Class 2" >B</option>
									<option value="Class 3" >C</option>																	
									</select>
							</div>   
						   
						  
                        </div>
						
						<h5> Student Details </h5>
						<div class="row-form"> 
						<div class="span3"><b>Name </b></div>
						
						<div class="span3"><b>Fee Due </b></div>
						
						<div class="span3"><b>Last Payment</b></div>
						
						<div class="span3"><b> Last Payment Date </b></div>
						
						</div>
						
						<div class="row-form"> 
						<div class="span3"><input type="text" disabled name="name" placeholder="Enter staff name"></div>	
						<div class="span3"><input type="text"  disabled name="name" placeholder="Enter staff name"></div>							
                        <div class="span3"><input type="text"  disabled name="name" placeholder="Enter staff name"></div>							
                        <div class="span3"><input type="text" disabled name="name" placeholder="Enter staff name"></div>							                         
						</div><br>
						
						
						<div class="row-form"> 
							<div class="span2"><b>Payment Date</b></div>
                            <div class="span2"><input type="text" name="name" placeholder="Enter staff name"></div>							
                            <div class="span2"><b>Type of Payment</b></div>
                            <div class="span2"><input type="text" name="name" placeholder="Enter staff name"></div>
							<div class="span2"><b>Payment Month</b></div>
                            <div class="span2"><input type="text" name="name" placeholder="Enter staff name"></div>
							
                      	</div>
						
						 <div class="row-form">                     
                            <div class="span2"><b>Tuition Fee</b></div>
                            <div class="span2"><input type="text" name="name" placeholder="Enter staff name"></div>
                      		<div class="span2"><b>Library Fee </b></div>
                            <div class="span2"><input type="text" name="name" placeholder="Enter staff name"></div>                  		
                        </div>
						
						
						 <div class="row-form">                     
                            <div class="span2"><b>Examination Fee</b></div>
                            <div class="span2"><input type="text" name="name" placeholder="Enter staff name"></div>
                      		<div class="span2"><b>Development Fee</b></div>
                            <div class="span2"><input type="text" name="name" placeholder="Enter staff name"></div>                  		
                        </div>
						
						<div class="row-form"> 
							<div class="span2"><b>Bus Fee</b></div>
							<div class="span2"><input type="text" name="name" placeholder="Enter staff name"></div>                            
							<div class="span2"><b>Other Fee </b></div>
							<div class="span2"><input type="text" name="name" placeholder="Enter staff name"></div>
						</div>
						
                        <div class="toolbar bottom TAL">
                           <div class="span2"> <input class="btn btn-large btn-block btn-primary" type="submit" value="Pay "></div>
                        </div>

                    </div>
                </div>
                
            </div>       
             </form>
                </div>               
            </div> 
</body>
</html>
