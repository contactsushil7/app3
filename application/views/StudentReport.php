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
                    
                 <div class="widget">
                <div class="head">
                    <div class="icon"><i class="icosg-clipboard1"></i></div>
                    <h2>Studence Attendence Details</h2>                       
                </div>  
                <div class="block-fluid">
                				
                                <div class="span2">
                                <div class="input-prepend">
                                    <span class="add-on">Academic Year</span>
                                      <select id="academic_year" onchange="getStudent()" >
                                    <option value="0">Academic Year</option>
                                  <?php foreach ($academic_year as $row) { ?>
                                     
                                    <option value="<?php echo $row['academic_year'];?>" ><?php echo $row['academic_year'];?></option>

                                 <?php } ?>
                                    
                                                                                                     
                                </select>                         
                                </div> 
                            
                                </div>

                                <div class=" offset1 span2">
                				<div class="input-prepend">
                                    <span class="add-on">Month</span>
                                      <select id="month">
                                    <option value="0">choose a Month</option>
                                  
                                    <option value="1" >January  </option>
                                     <option value="2" >February </option>
                                      <option value="3" >March  </option>
                                       <option value="4" >April </option>
                                        <option value="5" >May </option>
                                         <option value="6" >June  </option>
                                          <option value="7" >July  </option>
                                           <option value="8" >August </option>
                                            <option value="9" >September  </option>
                                             <option value="10" >October </option>
                                              <option value="11" >November  </option>
                                               <option value="12" >December  </option>
                                                                                                     
                                </select>                         
                                </div> 
                			
                                </div>

                                <div class=" offset1 span2">
                                <div class="input-prepend">
                                    <span class="add-on">Class</span>
                                      <select id="classes" onchange="getStudent()">
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
                                </div>
                                 <div class="block-fluid">
                                <div class="span2 offset1 ">
                              <div class="input-prepend">
                                    <span class="add-on">Section</span>
                                      <select id="section" onchange="getStudent()">
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
                                    <span class="add-on">Student</span>
                                      <select  id="student">
				                                    
				                                   
                                                                                                        
                               			 </select>                           
                                </div> 
                                </div>


                                <div class="span2 offset1 ">
                              <button class="btn btn-lg btn-info" id="show">Show</button>
                                </div>
                </div>
                
                        
                        <div class="block-fluid" style="height:700px;overflow:auto;">
                            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                                <thead >
                                    <tr>
                                        
                                        <th >Name </th>
                                        <th >1</th>
                                         <th >2</th>
                                         <th >3</th>
                                         <th >4</th>
                                         <th >5</th>
                                         <th >6</th>
                                         <th >7</th>
                                         <th >8</th>
                                         <th >9</th>
                                         <th >10</th>
                                         <th >11</th>
                                         <th >12</th>
                                         <th >13</th>
                                         <th >14</th>
                                         <th >15</th>
                                         <th >16</th>
                                         <th >17</th>
                                         <th >18</th>
                                         <th >19</th>
                                         <th >20</th>
                                         <th >21</th>
                                         <th >22</th>
                                         <th >23</th>
                                         <th >24</th>
                                         <th >25</th>
                                         <th >26</th>
                                         <th >27</th>
                                         <th >28</th>
                                         <th >29</th>
                                         <th >30</th>
                                        
                                        <th >31</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody id="attendanceReport">
                              
                                              
                                </tbody>
                                
                                <tfoot>
                                <tr>
                                 <td></td>
								      <td><input type="submit" class="btn btn-lg btn-info" value="Submit Attendence" ></td>
								       <td><input type="button" class="btn btn-lg btn-info" id="generate"value="Generate" ></td>
								      
                                </tfoot>
                            </table>                    
                        </div> 
                       
             </div>
                  
                        
        </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript">
        $("#show").click(function(){
           // alert("hello");
            var years =$("#academic_year").val();
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

        function getStudent(){

            var years =$("#academic_year").val();
            var section =$("#section").val();
             var classes =$("#classes").val();
             if(years!= 0 && section != 0 && classes !=0)
             {
                    $.ajax({
                            type: "POST",
                            url: urls + "/admin/GetClassStudent",
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
