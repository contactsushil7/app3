<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->        
    
    <title>View Ex-Staff </title>
    
    <link href="<?php echo base_url('css/stylesheets.css'); ?>" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="<?php echo base_url('css/ie.css');?>" rel="stylesheet" type="text/css" />
    <![endif]-->       
    <link rel="icon" type="image/ico" href="<?php echo base_url('favicon.ico');?>"/>
      
    
</head>
<body>
    
    <form id="application"action="<?php echo  site_url('branch_manager_controller/') ?>" method="post">  
                <div class="content">
                
                <div class="widget">
                <div class="head">
                <div class="icon"><i class="icosg-clipboard1"></i></div>
                <h2>List of Ex-Staff</h2>                       
                </div>
                <div class="block-fluid">
                <div class="span4">
                <div class="btn-group">
                <button class="btn btn-primary tip" data-original-title="Terminate"><span class="icon-ok icon-white"></span></button>
                <button class="btn btn-primary tip" data-original-title="Delete"><span class="icon-trash icon-white" ></span></button>                                                                        
                </div>
                </div>
                <div class="span4">
                <div class="input-prepend">
                <span class="add-on" style="background-color:#fff;margin-left:20px;"><i class="icosg-search"></i></span>
                 <input type="text" style="width: 209px;"  placeholder="Name,Email,Phone Number" id="exstaffsearch">     
                </div>  
                </div>
                </div>
                <div class="block-fluid">
                                <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                <th><input type="checkbox" class="checkall"/></th>
                                        <th width="15%">Name</th>
                                        <th width="10%">Designation</th>
                                        <th width="15%">Qualification</th>
                                        <th width="15%">Phone</th>                                      
                                        <th width="15%">Email </th>
                                        <th width="30%">Address</th>
                                         <th width="15%" class="TAC">Actions</th>               
                                </tr>
                                </thead>
                                
                                <tbody id="exstaff">

                                <?php foreach ($exStaffList as $row){?>
                                      <tr class="<?php echo 's'.$row['staff_id'];?>">
                                        <td><input type="checkbox" name="order[]" value="528"/></td>
                                        <td><a href="#bModal" data-toggle="modal" id="<?php echo $row['staff_id'];?>"  onClick="viewExStaffDetails(this.id)"><?php echo$row["Name"];?></a></td>
                                        <td><?php echo $row['designation'];?></td>
                                        <td><?php echo $row['qualification'];?></td>
                                        <td><?php echo $row['phone'];?></td>
                                        <td><?php echo $row['email'];?></td>
                                        <td><?php echo $row['address'];?></td>
                                        <td class="TAC">
                                              <a class="action1 tip" title="View Detail" id="<?php echo $row['staff_id']?>"  onClick="viewExStaffDetails(this.id)" href="#bModal" data-toggle="modal"><span class="icon-ok"></span></a> 
                                                 <a class="action2" id="<?php echo $row['staff_id'];?>"  href="<?php echo site_url('branch_manager_controller/editexstaff'."/".$row['staff_id']);?>"><span class="icon-pencil"></span></a> 
                                         <a class="action3 " id="<?php echo $row['staff_id'];?>" onClick="Exstaffdeletes(this.id)" href="#"><span class="icon-trash"></span></a>
                                        </td>
                                      
                                    </tr>
                                <?php }?>
                                                            
                                </tbody>
                            </table>                    
                        </div> 
       
        </div>
   
    </div>
</form>
    
    <div id="bModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;width:50%;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Student Details</h3>
            </div>
            <div class="modal-body" id="viewDetail">
            
            </div>
           
        </div>
        
      
        
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   
   <script type="text/javascript">
   
  
   function search(){
        var searchkey=$("#search").val();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('admin/search');?>",
            data:{'key':searchkey},
            succ1ess: function(output) {
                 //  alert(output);
                 $("#tbodys").empty();
                 $("#tbodys").append(output);
                }
        });
        }
    </script>
</body>
</html>