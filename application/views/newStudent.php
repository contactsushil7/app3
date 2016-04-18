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
        <form action="<?php echo  site_url('admin/NewStudentEntry') ?>" method="post" enctype="multipart/form-data">
            <div class="">                

                <div class="widget">
                    <div class="head">
                       
                        <h2 align="centre"><b>Student Registration Form </b></h2>
                    </div>                        
                    <div class="block-fluid">

                        <div class="row-form">                     
                            <div class="span2"><b>First Name </b></div>
                            <div class="span3"><input type="text" name="fname" placeholder="Enter Your Fname"></div>
                            <div class="span2"><b>Last Name </b></div>
                            <div class="span3"><input type="text" name="lname" placeholder="Enter Your Lname"></div>
                            
                        </div>
                        
                        <div class="row-form"> 
                            <div class="span2"><b>Gender </b></div>
                            <div class="span3">
                                <div class="radio"><span class=""><input type="radio" checked="checked" name="gender" value="Male" style="opacity: 0;"></span></div>Male                                  
                                <div class="radio"><span class=""><input type="radio"  name="gender" value="Female" style="opacity: 0;"></span></div>Female                                      
                             </div>
                             
                        <div class="span2"><b>Seeking Grade </b></div>
                         <div class="span3"> <select input class="form-control input-md" name="Seeking_grade" id="seeking_grade" autocomplete="off">
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
                            </div>
                        
                        
                        
                        <div class="row-form"> 
                            <div class="span2"><b>Academic Year </b></div>
                            <div class="span3"><input type="text" name="AcademicYear" placeholder="Accademic Year"></div>
                            
                            <div class="span2"><b>Date of Birthday </b></div>
                            <div class="span3"><input type="text" name="dob" placeholder="Date of Birthday"></div>
                        </div>
                        
                        <div class="row-form"> 
                            
                            <div class="span2"><b>Mother Tongue</b></div>
                            <div class="span3"><input type="text" name="MotherTongue" placeholder="Ex: Hindi ,English"></div>
                            <div class="span2"><b>Religion</b></div>
                            <div class="span3"><input type="text" name="Religion" placeholder="Ex : Hinddu "></div>
                            
                        </div>
                        
                        <div class="row-form">                     
                            <div class="span2"><b>Blood Group</b></div>
                            <div class="span3"><input type="text" name="BloodGroup" placeholder="Ex : A+ "></div>
                            
                        </div>
                        <div class="row-form">
                            <div class="span2"><b>Temporary address</b></div>
                            <div class="span3"><textarea  name="temp" placeholder="Ex : Road number 5"></textarea></div>
                            <div class="span2"><b>Permanent address </b></div>
                            <div class="span3"><textarea  name="permanent"placeholder="Ex: Azamgarh"></textarea></div>
                        
                        </div>
                        
                        
                         <div class="row-form">
                                <div class="span2"><b>Phone</b></div>
                                <div class="span3">
                                <div class="input-prepend">
                                <span class="add-on"><i class="icosg-phone"></i></span>
                                <input type="text"  name="phone"placeholder="Enter phone number">                               
                                </div>                  
                              </div>
                         <div class="span2"><b>Email</b></div>
                            <div class="span3">
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icosg-mail1"></i></span>
                                    <input type="text"  name="email"  placeholder="Enter email" required>                               
                                </div>                  
                              </div>                         
                        </div>
                        
                        <div class="row-form">
                     
                        </div>
                            
                       <div class="row-form">
                            <div class="span2"><b>Image </b></div>
                            <div class="span3">                            
                                <div class="input-append file">
                                    <input type="file" name="file" style="width: 160px;">
                                    <input type="text">
                                    <button class="btn btn-sm"><b>Browse </b></button>
                                </div>                            
                            </div>
                        </div> 
                        
                    </div>
                </div>
                <div class="widget">
                                   
                   
                                          
                    <div class="block-fluid">
                     <h4 align="centre">Details of Last School :</h4><br>
                        <div class="row-form">                     
                            <div class="span2"><b>School Name</b></div>
                            <div class="span4"><input type="text" name="schoolname" placeholder="Ex: BHU"></div>
                            <div class="span2"><b>Parentage</b></div>
                            <div class="span3"><input type="text" name="Percentage" placeholder="Percentage"></div>                             
                        </div>                      
                         <div class="row-form">                     
                            <div class="span2"><b>School Address</b></div>
                            <div class="span4"><input type="text" name="SchoolAddress" placeholder="School Address"></div>
                            <div class="span2"><b>City</b></div>
                            <div class="span3"><input type="text" name="city" placeholder="Ex : Hyderabad"></div>                           
                        </div>                      
                        <div class="row-form">
                            <div class="span2"><b>State</b></div>
                            <div class="span4"><input type="text" name="state" placeholder="Ex : Utter Predesh"></div>                              
                            <div class="span2"><b>Country</b></div>                          
                             <div class="span3"><input type="text" name="country" placeholder="Ex : India"></div>                                                                       
                        </div>                                          
                        <div class="row-form">
                            <div class="span2"><b>Telephone</b></div>
                            <div class="span4"><input type="text" name="telephone" placeholder="Ex : 9616870830"></div>
                        </div>                          
                    </div>
                </div>
                
                
                
                <div class="widget">
                                    
                  
                                     
                    <div class="block-fluid">
                      <h4 align="centre">Father's/ Mother's Details(#Guardian):</h4><br>
                        <div class="row-form">                     
                            <div class="span3"><b>Father's Name</b></div>
                            <div class="span3"><input type="text" name="fathername" placeholder="Ex : Shiv"></div>
                            <div class="span3"><b>Mother's Name</b></div>
                            <div class="span3"><input type="text" name="mothername" placeholder="Ex : Minni "></div>                            
                        </div>                      
                         <div class="row-form">                     
                            <div class="span3"><b>Father's Qualification</b></div>
                            <div class="span3"><input type="text" name="fqualification" placeholder="Ex : MCA"></div>
                            <div class="span3"><b>Mother's Qualification</b></div>
                            <div class="span3"><input type="text" name="mqualification" placeholder="Ex : B.Ed"></div>                          
                        </div>                      
                        <div class="row-form">
                            <div class="span3"><b>Father's Occupation </b></div>
                            <div class="span3"><input type="text" name="foccupation" placeholder="Ex : S/W"></div>                              
                            <div class="span3"><b>Mother's Occupation</b></div>                          
                             <div class="span3"><input type="text" name="moccupation" placeholder="Ex : Teacher "></div>                                                                        
                        </div>  
                            <div class="row-form">
                            <div class="span3"><b>Annual Income </b></div>
                            <div class="span3"><input type="text" name="aincome" placeholder="Ex : 750000"></div>                           
                            <div class="span3"><b>Telephone</b></div>                          
                             <div class="span3"><input type="text" name="ftelephone" placeholder="Ex : 9616870830"></div>                                                                       
                        </div>  
                        <div class="row-form">
                            <div class="span3"><b>Mobile</b></div>
                            <div class="span3"><input type="text" name="fmobile" placeholder="Ex : 7075360671"></div>
                            <div class="span3"><b>Email</b></div>
                            <div class="span3"><input type="text" name="femail" placeholder="Ex : Shiv@gmail.com"></div>                 
                        </div>                          
                    </div>
                </div>
                <div class="toolbar bottom TAL">
                <div class="span12"> <b><input class="btn btn-large btn-block btn-primary" type="submit" value="Submit"></b></div>
                </div>
            </div>       
             </form>
                </div>               
            </div> 
</body>
</html>
