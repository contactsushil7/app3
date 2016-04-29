<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->        
    
    <title>Inventory Reports</title> 
    
    <link href="<?php echo base_url('css/stylesheets.css'); ?>" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="<?php echo base_url('css/ie.css');?>" rel="stylesheet" type="text/css" />
    <![endif]-->       
    <link rel="icon" type="image/ico" href="<?php echo base_url('favicon.ico');?>"/>
      
    
</head>
<body>
    
   <form action="<?php echo site_url('admin/deleteAllInventory'); ?>" method="post">
    <div class="content">
               <div class="widget">
                <div class="head">
                <div class="icon"><i class="icosg-clipboard1"></i></div>
                <h2>Inventory Report</h2>                       
                </div>   
               
                <div class="block-fluid">
                                
                                <div class="span2">
                                <div class="input-prepend">
                                    <span class="add-on">Academic Year</span>
                                      <select id="academic_year" onchange="getInventory()" >
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
                                      <select id="month" onchange="getInventory()">
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

                               
                                </div>
                
                            
                        <div class="block-fluid">
                            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        
                                        <th width="10%">Reciept Id</th>
                                        <th width="15%">Expense Category</th>
                                        <th width="20%">Expense Description</th>
                                        <th width="5%">Date</th>
                                        <th width="10%">Amount</th>
                                         <th width="5%">Tax</th>
                                         <th width="5%">Due</th>
                                        
										  <th width="15%" class="TAC">Total</th>		
                                    </tr>
                                </thead>
                                <tbody id="inventory_body">
                                       
                                </tbody>
                            </table>                    
                        </div> 
             <div id="wait" style="display:none;;height:100px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;"><img src='<?php echo base_url('img/loader/2d_2.gif')?>' width="64" height="64" /><br>Loading..</div>
             
                    </div>
        </div>
        
        
        <!-- Modal  start for Faculty Details -->
        <div id="bModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Inventory Details</h3>
            </div>
            <div class="modal-body" id="viewDetail">
            
            </div>
            <div class="modal-footer">
                
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>            
            </div>
        </div>
        
        <!-- Modal  start for Faculty Edit -->
        
      </form>
   
</body>
</html>
