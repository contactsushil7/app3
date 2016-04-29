<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->        
    
    <title>Add New Staff</title>
    
    <link href="<?php echo base_url('css/stylesheets.css'); ?>" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="<?php echo base_url('css/ie.css');?>" rel="stylesheet" type="text/css" />
    <![endif]-->       
    <link rel="icon" type="image/ico" href="<?php echo base_url('favicon.ico');?>"/>
      
       <script>
            function formValidation()  
            {  
                var name = document.staffregistration.name;  
                var designation = document.staffregistration.designation; 
                var qualification = document.staffregistration.qualification; 
                var specilization = document.staffregistration.specilization; 
                var email = document.staffregistration.email; 
                var phone = document.staffregistration.phone;  
                var mobile = document.staffregistration.mobile;  


                if(name_validation(name,1,50))  
                {  
                        if(designation_validation(designation,1,250))  
                        {  
                            if(qualification_validation(qualification,1,250))  
                            {
								if(email_validate(email))  
                                    {
										if(mobile_validate(mobile))  
                                                {
                                                   return true;
                                                }  
                                    }
							}  
                        }
                }

                return false;  
                  
                } 


                function name_validation(name,mx,my)  
                {  
                var name_len = name.value.length;  
                if (name_len == 0 || name_len >= my || name_len < mx)  
                {  
                alert("Name should not be empty / length be between "+mx+" to "+my);  
                name.focus();  
                return false;  
                }  
                return true;  
                } 
                


                function designation_validation(designation,mx,my)  
                {  
                var lname_len = designation.value.length;  
                if (lname_len == 0 ||lname_len >= my || lname_len < mx)  
                {  
                alert(" Last Name should not be empty / length be between "+mx+" to "+my);  
                designation.focus();  
                return false;  
                }  
                return true;  
                } 
                
                
                function qualification_validation(qualification,mx,my)  
                {  
                var lname_len = qualification.value.length;  
                if (lname_len == 0 ||lname_len >= my || lname_len < mx)  
                {  
                alert(" Last Name should not be empty / length be between "+mx+" to "+my);  
                qualification.focus();  
                return false;  
                }  
                return true;  
                } 
               
                function email_validate(email)  
                {  
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
                if(email.value.match(mailformat))  
                {  
                return true;  
                }  
                else  
                {  
                alert("You have entered an invalid email address!");  
                email.focus();  
                return false;  
                }  
                }  


                function mobile_validate(phone)  
                {   
                var numbers = /^[0]?[789]\d{9}$/;  
                if(phone.value.match(numbers))  
                {  
                return true;  
                }  
                else  
                {  
                alert('Mobile digits(start with 7,8,9 )(0-9) ');  
                
                return false;  
                }  
                }  


</script>
    
</head>
<body>
    
   <form action="<?php echo site_url('admin/addnewstaff');?>" method="post" enctype="multipart/form-data" name='staffregistration' onSubmit="return formValidation();">
    <div class="content">
                <div class="row-fluid">
            
            <div class="span12">                

                <div class="widget">
                    <div class="head">
                        <div class="icon"><i class="icos-pencil2"></i></div>
                        <h2>Add New Staff</h2>
                    </div>                        
                    <div class="block-fluid">

                        <div class="row-form">
                           
                            <div class="span2">Name</div>
                            <div class="span3"><input type="text" placeholder="Ex : Shiv" name="name"></div>                   		 
							 <div class="span2">Gender</div>
                            <div class="span3">
                            <div class="radio"><span class=""><input type="radio" checked="checked" name="gender" value="Male" style="opacity: 0;"></span></div>Male 
                            <div class="radio"><span class=""><input type="radio"  name="gender" value="Female" style="opacity: 0;"></span></div>Female 
                            </div>
							
                        </div>
                        
                        
                        <div class="row-form">
                        
							<div class="span2">Designation</div>
                            <div class="span3"><input type="text" placeholder="Ex : MTS " name="designation"></div>                    
                            <div class="span2">Qualification</div>
                            <div class="span3"><input type="text" name="qualification" placeholder="Ex :Graduation"></div>                   	
                        </div>
						
                        <div class="row-form">
						
							<div class="span2">Email</div>
                            <div class="span3">
                            <div class="input-prepend">
                            <span class="add-on"><i class="icosg-mail1"></i></span>
                            <input type="text" style="width: 209px;" name="email" placeholder="Ex : shiv@idps.co.in">                               
                            </div>      
							</div>
							<div class="span2">Phone</div>
                             <div class="span3">
                             <div class="input-prepend">
                             <span class="add-on"><i class="icosg-phone"></i></span>
                             <input type="text" style="width: 209px;" name="phone" placeholder="Ex : 9616870830">                               
                             </div>                  
                             </div>
                            
                       </div>
                            
                       <div class="row-form">
                            <div class="span2">Image</div>
                            <div class="span3">                            
                                <div class="input-append file">
                                    <input type="file" name="file1" style="width: 160px;">
                                    <input type="text" style="width: 174px;">
                                    <button class="btn">Browse</button>
                                </div>                            
                            </div>
                            
                            <div class="span2">Joining Date</div>
                            <div class="span3">                                                            
                                <input type="text" name="joining" placeholder ="YYYY-MM-DD">
                            </div>
                       
                        </div>
                        
                        <div class="row-form">
                            <div class="span2">Temporary address</div>
                            <div class="span3"><textarea name="temp" placeholder="Ex : Road Number 12"></textarea></div>
                        <div class="span2">Permanent address</div>
                            <div class="span3"><textarea required name="permanent" placeholder="Ex: Vill & Post - Azamgarh "></textarea></div>
                        
                        </div>

                        <div class="toolbar bottom TAL">
                           <div class="span12"> <input class="btn btn-large btn-block btn-primary" type="submit" value="Submit"></div>
                        </div>

                    </div>
                </div>
                
            </div>
            
             
                </div>
                
            </div>            
            </form>
        
</body>
</html>
