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
                    
                 
                             
        <div class="row-fluid" style="overflow:x;">
            <form action="<?php echo  site_url('admin/addnewInventory') ?>" method="post" enctype="multipart/form-data">
            <div class="">                

                <div class="widget">
                    <div class="head">
                        <div class="icon"><i class="icos-pencil2"></i></div>
                        <h2>Details</h2>
                    </div>                        
                    <div class="block-fluid">

                        <div class="row-form">
                       
                            <div class="span2">Reciept No.</div>
                            <div class="span3"><input type="text" name="Reciept" placeholder="Reciept No"></div>
                            <div class="span2">Vendor Name</div>
                            <div class="span3"><input type="text" name="vendor" placeholder="Vendor name"></div>
                        </div>
                        
                        
                         <div class="row-form">
                         <div class="span2">Expenses Category</div>
                            <div class="span3"><input type="text" name="expenses" placeholder="Expenses Category"></div>
                       
                            <div class="span2">Expenses Description</div>
                            <div class="span3"><input type="text" name="description" placeholder="Expense Description"></div>
                            
                        </div>
                         
                         <div class="row-form">
                         <div class="span2">Expense Amount</div>
                            <div class="span3"><input type="text" name="amount"placeholder="Expense Amount"></div>
                       
                            <div class="span2">Tax</div>
                            <div class="span3"><input type="text" name="tax"placeholder="Tax"></div>
                       
                             
                            
                        </div>
                        <div class="row-form">
                        <div class="span2">Due Payment</div>
                              <div class="span3">
                             <div class="input-prepend">
                                  
                                    <input type="text" style="width: 209px;"  name="due"placeholder="Due Payment">                               
                                </div>                  
                              </div>
                            <div class="span2">Due Payment Date</div>
                            
                             <div class="span3">
                            
                                    <input type="text" style="width: 209px;"  name="due_date"placeholder="Due Payment">                               
                                              
                              </div>
                           
                        </div>
                            
                       <div class="row-form">
                            <div class="span2">Reciept Image</div>
                            <div class="span3">                            
                                <div class="input-append file">
                                    <input type="file" name="file" style="width: 160px;">
                                    <input type="text" style="width: 174px;">
                                  
                                </div>                            
                            </div>
                            
                            <div class="span2">Date</div>
                            <div class="span3">                                                            
                                <input type="text"  name="date"class="datepicker hasDatepicker" id="dp1453972527352" style="width:209px;">
                            </div>
                       
                        </div>
                        
                        <div class="row-form">
                           
                        <div class="span2">Permanent address</div>
                            <div class="span3"><input  name="mode" placeholder="Payment mode"></div>
                        
                        </div>

                        <div class="toolbar bottom TAL">
                           <div class="span2"> <input class="btn btn-large btn-block btn-primary" type="submit" value="Submit"></div>
                        </div>

                    </div>
                </div>
                
            </div>
            
             </form>
                </div>
                               

                               
            
                  
                        
        </div>
         
         
</body>
</html>
