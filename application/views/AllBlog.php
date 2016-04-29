
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->        
    
    <title>Blogs</title>
    
    <link href="<?php echo base_url('css/stylesheets.css'); ?>" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="<?php echo base_url('css/ie.css');?>" rel="stylesheet" type="text/css" />
    <![endif]-->       
    <link rel="icon" type="image/ico" href="<?php echo base_url('favicon.ico');?>"/>
      
    
</head>
<body>
    
   
    <div class="content">
   <div class="widget">
                <div class="head">
                    <div class="icon"><i class="icosg-clipboard1"></i></div>
                    <h2>List of My Blogs</h2>                       
                </div>                
                    <div class="block-fluid">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><table class="table dataTable" cellpadding="0" cellspacing="0" width="100%" id="DataTables_Table_0" style="width: 100%;">
                            <thead>
                                <tr role="row"><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="" style="width: 24px;">
                                <div class="checker"><span><input type="checkbox" class="checkall" style="opacity: 0;"></span></div>
                                </th><th width="25%" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 273px;">Blog Title</th><th width="20%" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending" style="width: 216px;">Blog Content</th><th width="20%" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 217px;">Status</th><th width="20%" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 217px;">Date</th><th width="15%" class="TAC sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Actions" style="width: 159px;">Actions</th></tr>
                            </thead>
                            
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <?php $count=1;foreach ($blog as $row){
                        	if($count==1){ $count=2?>
                        	<tr class="odd" id="<?php echo 'S'.$row['id']; ?>">
                                    <td class=" sorting_1"><div class="checker"><span><input type="checkbox" name="order[]" value="528" style="opacity: 0;"></span></div></td>
                                    <td class=" "><a href="#"><?php echo $row['headline'];?></a></td>
                                    <td class=" "><?php echo substr($row['description'],0,50)."...";?></td>
                                    <td class=" "><span class="label label-important"> <?php if($row['isverify']==0){ echo "Pending";}else {echo "Aproved";}?></span></td>
                                    <td class=" "><?php echo $row['post_date'];?></td>
                                    <td class="TAC ">
                                        <a class="action1 tip" title="View Detail" id="<?php echo $row['id']?>"  onClick="ViewBlogDetails(this.id)" href="#bModal" data-toggle="modal"><span class="icon-ok"></span></a> 
                                        <a href="<?php echo site_url('admin/editBlog/'.$row['id']) ;?>"><span class="icon-pencil"></span></a> 
                                        <a href="#" id="<?php echo $row['id'];?>"onclick="deleteBlog(this.id)"><span class="icon-trash"></span></a>
                                    </td>
                                </tr>
                                
                                <?php }else{ $count=1;?>
                                	<tr class="even" id="<?php echo 'S'.$row['id']; ?>">
                                    <td class=" sorting_1"><div class="checker"><span><input type="checkbox" name="order[]" value="528" style="opacity: 0;"></span></div></td>
                                    <td class=" "><a href="#"><?php echo $row['headline'];?></a></td>
                                    <td class=" "><?php echo substr($row['description'],0,50)."....";?></td>
                                    <td class=" "><span class="label label-important"> <?php if($row['isverify']==0){ echo "Pending";}else {echo "Aproved";}?></span></td>
                                    <td class=" "><?php echo $row['post_date'];?></td>
                                    <td class="TAC ">
                                         <a class="action1 tip" title="View Detail" id="<?php echo $row['id']?>"  onClick="ViewBlogDetails(this.id)" href="#bModal" data-toggle="modal"><span class="icon-ok"></span></a> 
                                        <a href="<?php echo site_url('admin/editBlog/'.$row['id']) ;?>"><span class="icon-pencil"></span></a> 
                                        <a href="#" id="<?php echo $row['id'];?>"onclick="deleteBlog(this.id)"><span class="icon-trash"></span></a>
                                    </td>
                                </tr>
                                <?php }?>
                                
                               <?php }?> 
                                </tbody></table></div>                    
                    </div> 
            </div>
    </div>



    <!-- Modal  start for Blog  Details -->
        <div id="bModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;width:50%;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Blog</h3>
            </div>
            <div class="modal-body" id="viewBlog">
            
            </div>
           
        </div>
        
        
        
</body>
</html>
