<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->        
    
    <title>View Application</title>
    
    <link href="<?php echo base_url('css/stylesheets.css'); ?>" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="<?php echo base_url('css/ie.css');?>" rel="stylesheet" type="text/css" />
    <![endif]-->       
    <link rel="icon" type="image/ico" href="<?php echo base_url('favicon.ico');?>"/>
      
    
</head>
<body>
    
    <form id="application"action="<?php echo  site_url('branch_manager_controller/deleteAllApplication') ?>" method="post">  
    <div class="content">
               <div class="widget">
                <div class="head">
                <div class="icon"><i class="icosg-clipboard1"></i></div>
                <h2>List of Application</h2>                       
                </div>   
                <div class="block-fluid">
                <div class="span3">
                 <input type="submit" class="btn btn-primary tip" id="convert"data-original-title="Convert to Student" name="submit" value="Convert" style="width:70px">
                <input type="submit"class="btn btn-primary tip" data-original-title="Delete" name="submit" value="delete" style="width:70px;">                                                                    
               
                </div>

                 <div class="span3">
                <div >
                    <select input class="form-control input-md" name="Seeking_grade" id="classes" autocomplete="off">
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
                <div class="span3">
                <div class="input-prepend">
                <span class="add-on" style="background-color:#fff;margin-left:20px;"><i class="icosg-search"></i></span>
                <input type="text" style="width: 209px;"  placeholder="Name,Email,Phone Number" id="Application_search" >    
                </div>  
                </div>
                </div>
                
                            
                        <div class="block-fluid">
                            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" class="checkall"/></th>
                                        <th width="20%">Name</th>
                                         <th width="15%">Father name</th>
                                        <th width="15%">Seeking Grade</th>
                                       
                                        <th width="15%">Email</th>
                                        <th width="20%">Address</th>
										  <th width="15%" class="TAC">Actions</th>		
                                    </tr>
                                </thead>
                                <tbody id="applicationBody">
                                <?php if(!empty($application)){
                                foreach ($application as $row){
                                 ?>
                                    <tr class="<?php echo 's'.$row['application_id'];?>">
                                        <td><input type="checkbox" name="order[]" value="<?php echo $row['application_id'];?>"/></td>
                                       <td><a href="#bModal" data-toggle="modal" id="<?php echo $row['application_id'];?>"  onClick="viewApplicationDetails(this.id)"><?php echo $row["fname"]." ". $row["lname"];?></a></td>
										<td><?php echo $row["father_name"];?></a></td>
										<td><?php echo $row["seeking_grade"];?></td>
										<td><?php echo $row["email"];?></span></td>
										<td><?php echo $row["parmanent_address"];?></td>
										<td class="TAC">
                                            <a class="action1 tip" title="View Detail" id="<?php echo $row['application_id']?>"  onClick="viewApplicationDetails(this.id)" href="#bModal" data-toggle="modal"><span class="icon-ok"></span></a> 
                                            <a class="action2" id="<?php echo $row['application_id'];?>"  href="<?php echo site_url('branch_manager_controller/editApplication'."/".$row['application_id']);?>"><span class="icon-pencil"></span></a> 
                                            <a class="action3 " id="<?php echo $row['application_id'];?>" onClick="deletes(this.id)" href="#"><span class="icon-trash"></span></a>
                                        </td>
									</tr>
                                <?php }}?>               
                                </tbody>
                            </table>                    
                        </div> 

                        
             <div id="wait" style="display:none;;height:100px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;"><img src='<?php echo base_url('img/loader/2d_2.gif')?>' width="64" height="64" /><br>Loading..</div>
             
                    </div>
        </div>
        </form>
        
        <!-- Modal  start for Faculty Details -->
        <div id="bModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;width:50%;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Application Details</h3>
            </div>
            <div class="modal-body" id="viewDetail">
            
            </div>
           
        </div>
        
        <!-- Modal  start for Faculty Edit -->
        
       <div id="eModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h3 id="myModalLabel">Edit faculty information</h3>
            </div>
            <div class="modal-body" id="editDetail">
            
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
