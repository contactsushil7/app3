<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->        
    
    <title>Fee Payment | School Management System</title>
    
    <link href="<?php echo base_url('css/stylesheets.css'); ?>" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="<?php echo base_url('css/ie.css');?>" rel="stylesheet" type="text/css" />
    <![endif]-->       
    <link rel="icon" type="image/ico" href="<?php echo base_url('favicon.ico');?>"/>
      
    
</head>
<body>
    
   
    <div class="content" >
      <div class="row-fluid" style="overflow:x;">
        <form action="<?php echo  site_url('branch_manager_controller/FeePayment') ?>" method="post" enctype="multipart/form-data">
            <div class="">                

                <div class="widget">
                    <div class="head">
                       
                        <h2 align="centre"><b>Pay Fee</b></h2>
                    </div>                        
                    <div class="block-fluid">

                        <div class="row-form">                     
                             
						   <div class="span2"><b>Class</b></div>
							 <div class="span2">
                              <select input class="form-control input-md" name="Seeking_grade" id="classes" onchange="getStudentss()">
									<option value="none">Select</option>
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
                            <div class="span2"> 
                                <select input class="form-control input-md" name="Seeking_grade" id="section" onchange="getStudentss()">
                                     <option value="0">choose a Section</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                                                                                                                
                                    </select>
                            </div>

                             <div class="span2"><b>Student List </b></div>
                                   <div class="span2" id ="feestudentids"> 
                                    <select  id="student" name="student_id_fee">
                                                                                                               
                                    </select> 
                                    </div>  
  
							</div>
                           
						 
                       
						 <div class="row-form">   
						 <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                               
                                    <tr>
                                    
                                        <th width="15%">Name</th>
                                         <th width="15%">Last Payment Date </th>                                       
                                        <th width="15%">Payment From </th>
                                         <th width="15%">Paymnet To</th>                                        
                                        <th width="15%">Tution Fee</th>                                   
                                        <th width="10%">Deposite Fee</th>    
                                         <th width="10%">Due Fee</th>    
                                    </tr>
                               
                                <tbody id="feedetailbody">
                                              
                                </tbody>
                            </table><br>
                              </div>
             <div id="bModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;width:50%;">
           
           
           </div>
           <div class="row-form"> 
					<div class="span2"><b>Type of Payment</b></div>
                     <div class="span2">
                    <select input class="form-control input-md" name="payment_mode" >
                    <option value="Cash">Cash</option>
                                     
                                                                                                                                        
                  </select> 
                    </div>


              	     <div class="span2"><b>Payment From </b></div>
                    <div class="span2">
                    <select input class="form-control input-md" name="payment_from" required>
                    <option value="0">Choose Session</option>
                    <option value="7-11">July-October</option>
                    <option value="11-3">November-february</option>
                    <option value="3-6">March -June</option>
                                      
                                                                                                                                        
                  </select> 
                    </div>


                        </div>
						

                         <div class="row-form">                     
                           
                            

                        </div>
                        

						 <div class="row-form">                     
                            <div class="span2"><b>Tuition Fee</b></div>
                            <div class="span2"><select input class="form-control input-md" name="tution" id ="feetype">
                                     <option id ="tution">Tution Fee</option>
                                    <option value="1"> Due Fee </option>
                                                                                                                                          
                            </select>
                             </div> 



                            <div class="span2"><b>Other Fee </b></div>
                            <div class="span2"><input type="text" name="other_fee" placeholder="Enter staff name" id="otherfee"></div>
                                        		
                        </div>
						
						
						
						<div class="row-form"> 
							<div class="span2"><b>Fee Deposite </b></div>
							<div class="span2"><input type="text" name="fee_deposite" id="fee_deposite" placeholder="Enter staff name"></div>                            
							<div class="span2"><b>Due Fee </b></div>
							<div class="span2"><input type="text" name="due_fee" id= "new_due_fee" placeholder="Enter staff name"></div>
						</div>
						
                        <div class="toolbar bottom TAL">
                           <div class="span12"> <input class="btn btn-large btn-block btn-primary" type="submit" value="Pay "></div>
                        </div>

                    </div>
                </div>
                
            </div>       
             </form>
                </div>               
            </div> 



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript">
        $("#show").click(function(){
           // alert("hello");
           
            var section =$("#section").val();
             var classes =$("#classes").val();
              var month =$("#month").val();
              var stu= $("#student").val();
            //alert("hello");
            $.ajax({
                type: "POST",
               url: urls + "/admin/studentReportS",
                data:{"years":years,"classes":classes,"section":section,"month":month,"student":stu},
                success: function(output) {
                       alert(output);
                     $("#attendanceReport").empty();
                     $("#attendanceReport").append(output);
                    }
            });
        });
        function getStudentss(){
            var years =$("#academic_year").val();
            var section =$("#section").val();
             var classes =$("#classes").val();
             if(years!= 0 && section != 0 && classes !=0)
             {
                    $.ajax({
                            type: "POST",
                            url: urls + "/admin/GetClassStudentss",
                             data:{"years":years,"classes":classes,"section":section},
                             success: function(output) {
                              //  alert(output);
                                 $("#student").empty();
                                $("#student").append(output);
                             }
                        });
             } 
             else
             {
                if(section != 0){
                     if(years== 0)
                     {
                        //$("#academic_year").notify("Please choose academic year","danger");
                       //alert("");
                        alert("Please choose academic year");
                     }
                     if(classes== 0)
                     {
                     //   $("#classes").notify("Please choose academic year","danger");
                       alert("Please choose Classes");
                     }
                 }
             }
        }
    </script>
</body>
</html>
