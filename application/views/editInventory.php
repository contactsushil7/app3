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
        <link href="<?php //echo base_url('css/ie.css');?>" rel="stylesheet" type="text/css" />
    <![endif]-->       
    <link rel="icon" type="image/ico" href="<?php echo base_url('favicon.ico');?>"/>
      
    
</head>

<body>
    
   
    <div class="content">
                    
           <?php foreach ($inventory as $row) {
               # code...
               
           ?>
                             
        <div class="row-fluid" style="overflow:x;">
            <form action="<?php echo  site_url('admin/updateInventory/'.$row['id']) ?>" method="post" enctype="multipart/form-data">
            <div class="">                

                <div class="widget">
                    <div class="head">
                        <div class="icon"><i class="icos-pencil2"></i></div>
                        <h2>Edit Inventory Details </h2>
                    </div>                        
                    <div class="block-fluid">

                        <div class="row-form">
                       
                            <div class="span2">Reciept No.</div>
                            <div class="span3"><input type="text" name="Reciept" placeholder="Reciept No" value="<?php echo $row['recipt_number'];?>"></div>
                            <div class="span2">Vendor Name</div>
                            <div class="span3"><input type="text" name="vendor" placeholder="Vendor name" value="<?php echo $row['vendor_name'];?>"></div>
                        </div>
                        
                        
                         <div class="row-form">
                         <div class="span2">Expenses Category</div>
                            <div class="span3"><input type="text" name="expenses" placeholder="Expenses Category" value="<?php echo $row['expences_catogery'];?>"></div>
                       
                            <div class="span2">Expenses Description</div>
                            <div class="span3"><input type="text" name="description" placeholder="Expense Description" value="<?php echo $row['description_of_expence'];?>"></div>
                            
                        </div>
                         
                         <div class="row-form">
                         <div class="span2">Expense Amount</div>
                            <div class="span3"><input type="text" name="amount"placeholder="Expense Amount"value="<?php echo $row['expence_amount'];?>"></div>
                       
                            <div class="span2">Tax</div>
                            <div class="span3"><input type="text" name="tax"placeholder="Tax"value="<?php echo $row['tax'];?>" ></div>
                       
                             
                            
                        </div>
                        <div class="row-form">
                        <div class="span2">Due Payment</div>
                              <div class="span3">
                             <div class="input-prepend">
                                  
                                    <input type="text" style="width: 209px;"  name="due"placeholder="Due Payment" value="<?php echo $row['due_payment'];?>">                               
                                </div>                  
                              </div>
                            <div class="span2">Due Payment Date</div>
                            
                             <div class="span3">
                            
                                    <input type="text" style="width: 209px;"  name="due_date"placeholder="Due Payment" value="<?php echo $row['payment_due_date'];?>">                               
                                              
                              </div>
                           
                        </div>
                            
                       <div class="row-form">
                            <div class="span2">Reciept Image</div>
                            <div class="span3">                            
                                <div class="input-append file">
                                    <input type="file" name="file" style="width: 160px;">
                                    <input type="text" style="width: 174px;" value="<?php echo $row['vendor_name'];?>">
                                  
                                </div>                            
                            </div>
                            
                            <div class="span2">Date</div>
                            <div class="span3">                                                            
                                <input type="text"  name="date"class="datepicker hasDatepicker" id="dp1453972527352" value="<?php echo $row['dates'];?>">
                            </div>
                       
                        </div>
                        
                        <div class="row-form">
                           
                        <div class="span2">Payment Mode</div>
                            <div class="span3"><input  name="mode" placeholder="Payment mode"value="<?php echo $row['mode_of_payment'];?>" ></div>
                        
                        </div>

                        <div class="toolbar bottom TAL">
                           <div class="span2"> <input class="btn btn-large btn-block btn-primary" type="submit" value="Submit"></div>
                        </div>

                    </div>
                </div>
                
            </div>
            
             </form>
                </div>
                               

                               
            
                  
               <?php } ?>         
        </div>
         
         
</body>
</html>
