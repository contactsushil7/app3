<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->        
    
    <title>View Inventory List</title>
    
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
                <h2>List of Inventory</h2>                       
                </div>   
                <div class="block-fluid">
                <div class="span4">
                <div class>
                <input type ="submit" class="btn btn-primary tip" data-original-title="Delete" value="Delete">                                                                       
                </div>
                </div>
                <div class="span4">
                <div class="input-prepend">
                <span class="add-on" style="background-color:#fff;margin-left:20px;"><i class="icosg-search"></i></span>
                <input type="text" style="width: 209px;"  placeholder="Reciept Number" id="Inventory_search" onkeyup="search()">    
                </div>  
                </div>
                </div>
                
                            
                        <div class="block-fluid">
                            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" class="checkall"/></th>
                                        <th width="20%">Reciept Id</th>
                                        <th width="15%">Expense Category</th>
                                        <th width="15%">Expense Description</th>
                                        <th width="15%">Amount</th>
                                        <th width="20%">Tax</th>

										  <th width="15%" class="TAC">Actions</th>		
                                    </tr>
                                </thead>
                                <tbody id="inventory_body">
                                <?php if(!empty($inventory)){
                                foreach ($inventory as $row){
                                 ?>
                                    <tr class="<?php echo "s".$row['id'];?>">
                                        <td><input type="checkbox" name="inventorys[]" value="<?php echo $row['id'];?>"/></td>
                                       <td><a href="#bModal" data-toggle="modal" id="<?php echo $row['id'];?>"  onClick="viewInventory(this.id)"><?php echo $row["recipt_number"]?></a></td>
										<td><?php echo $row["expences_catogery"];?></a></td>
										<td><?php echo $row["description_of_expence"];?></td>
										<td><?php echo $row["expence_amount"];?></span></td>
										<td><?php echo $row["dates"];?></td>
										<td class="TAC">
                                            <a class="action1 tip" title="View Detail" id="<?php echo $row['id']?>"  onClick="viewInventory(this.id)" href="#bModal" data-toggle="modal"><span class="icon-ok"></span></a> 
                                            <a class="action2" id="<?php echo $row['id'];?>"  href="<?php echo site_url('admin/editInventory/'.$row['id']);?>"><span class="icon-pencil"></span></a> 
                                            <a class="action3 " id="<?php echo $row['id'];?>" onClick="deletesInventory(this.id)" href="#"><span class="icon-trash"></span></a>
                                        </td>
									</tr>
                                <?php }}?>               
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
