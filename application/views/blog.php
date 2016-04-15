
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->        
    
    <title>Virgo - Premium Admin Template</title>
    
    <link href="<?php echo base_url('css/stylesheets.css'); ?>" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="<?php echo base_url('css/ie.css');?>" rel="stylesheet" type="text/css" />
    <![endif]-->       
    <link rel="icon" type="image/ico" href="<?php echo base_url('favicon.ico');?>"/>
      
    
</head>
<body>
    
   
    <div class="content">
    
    <div class="span8">
          <form action="<?php echo site_url('admin/submitBlog')?>" method="post">
          
          
               <div class="widget">
               
         			 <div class="head dark">
                        <div class="icon"><i class="icos-pencil"></i></div>
                        <h2>Blog title</h2>
                        
                    </div>
         <div>
                         <textarea row="50" col="100" name="title" required></textarea>
                        
                        </div>
                    <div class="head dark">
                        <div class="icon"><i class="icos-pencil"></i></div>
                        <h2>Blog content</h2>
                    </div>
                    <div class="block-fluid editor">
                        
                        <div class="cleditorMain" style="width: 100%; height: 300px;">
                        
                        <textarea id="wysiwyg" name="content" >                           
                            Write Your Blog
                         </textarea>
                         <iframe frameborder="0" src="javascript:true;" style="width: 689px; height: 247px;"></iframe></div>
                        
                    </div>
                    <div class="toolbar TAR">
                        <button  class="btn btn-primary" >Submit</button>
                    </div>
                </div>            
              
           </form> 
           </div>          
    </div>
</body>
</html>
