<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->        
    
    <title>Student Fee Details</title>
    
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
                    <h2>Fee Details</h2>                       
                </div>   
                <div class="block-fluid">
                				<div class="span2">
                				
                                    <select input class="form-control input-md" name="Seeking_grade" id="classes_fee" onchange="GetStudentFee()">
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
                                <div class="span2">
									 <select input class="form-control input-md" name="Seeking_grade" id="section_fee" onchange="GetStudentFee()">
                                     <option value="0">choose a Section</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                                                                                                                
                                    </select> 
								</div> 

                                <div class="span2">
                                     <select input class="form-control input-md" name="fee_session" id="fee_session" onchange="GetStudentFee()">
                                     <option value="0">Choose Session</option>
                                                    <option value="07-11">July-October</option>
                                                    <option value="11-03">November-february</option>
                                                    <option value="03-07">March -June</option>
                                                  
                                                                                                                                                
                                    </select> 
                                </div> 
								
                </div>
                
                            
                        <div class="block-fluid" style="height:400px;overflow:auto">
                            <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="25%">Roll No.</th>
                                        <th width="20%">Name</th>
                                        <th width="20%">Paid Fee(Rs.)</th>
                                        <th width="20%">Dues Fee(Rs.)</th>
                                        <th width="20%">Total Fee(Rs.)</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#bModal"  data-toggle="modal">2016_R1</a></td>
                                        
                                        <td><span >Shiv Govind</span></td>
                                        <td>2000</td>
                                        <td>3000</td>
                                        <td>5000</td>
                                       
                                    </tr>
                                    
                                    
                                    
                                                         
                                </tbody>
                                
                            </table>  
                            
                                     
                        </div> 
                        
                              <table class="table table-hover" cellpadding="0" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                       <th width="25%"></th>
                                        <th width="20%"></th>
                                        <th width="20%">Paid Fee(Rs.)</th>
                                        <th width="20%">Dues Fee(Rs.)</th>
                                        <th width="20%">Total Fee(Rs.)</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      
                                        <td><a href="#"></a></td>
                                        
                                        <td><span >Total</span></td>
                                        <td>32000</td>
                                        <td>23000</td>
                                        <td>55000</td>
                                       
                                    </tr>
                                    
                                   
                            </table>  
                            
             
                    </div>
                    <div class="span6">
                
                
                
                			<div class="widget">

		                    	<div class="block">
		                      		  
		                  		<div id="chartContainer" style="height: 300px; width: 100%;"></div>
		                  		
		                  			 
		                  		 </div>
               				 </div>
                   </div>
                  
                        	
        </div>
   
    
    <div id="bModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h3 id="myModalLabel">Modal</h3>
            </div>
            <div class="modal-body">
            <div class="block-fluid">
                        
                        <table cellpadding="0" cellspacing="0" width="100%" class="sTable">
                            <tbody>
                                <tr>
                                    <td width="100" align="center">
                                        <img src="<?php echo base_url('img/examples/users/dmitry.jpg');?>" class="img-polaroid">                                                                    
                                        <address>
                                            <strong>Swati Reddy</strong><br>
                                            2016_R1<br>
                                            <a href="mailto:#">dmitry@domain.com</a>
                                        </address>
                                    </td>
                                    <td width="70%">
                                        <address>
                                            <strong>123 samajiguda</strong><br>
                                            sxbchb<br>
                                            Core, CA 15212<br>
                                            <abbr title="Phone">P:</abbr> +98 (765) 432-1098
                                        </address>
                                    </td>
                                    <td width="30%">
                                        <span class="label label-success">Paid fee</span>3000
                                        <span class="label label-warning">Dues Fee</span>2000
                                    </td>
                                    <td width="30">
                                        <button class="btn btn-primary tipl" data-original-title="Send message"><span class="icon-envelope icon-white"></span></button>
                                        <button class="btn btn-primary tipl" data-original-title="Edit"><span class="icon-pencil icon-white"></span></button>
                                        <button class="btn btn-primary tipl" data-original-title="Remove"><span class="icon-remove icon-white"></span></button>
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>                       
                        
                    </div>
             </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>            
            </div>
        </div>
        <script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Attendence Report "
		},
                animationEnabled: true,
		legend:{
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		data: [
		{        
			indexLabelFontSize: 20,
			indexLabelFontFamily: "Monospace",       
			indexLabelFontColor: "darkgrey", 
			indexLabelLineColor: "darkgrey",        
			indexLabelPlacement: "outside",
			type: "pie",       
			showInLegend: true,
			toolTipContent: "{y} - <strong>#percent%</strong>",
			dataPoints: [
				{  y: 68, legendText:"jan", indexLabel: "Jan" },
				{  y: 32, legendText:"Feb", indexLabel: "Feb" },
				{  y: 68, legendText:"March", indexLabel: "March" },
				{  y: 32, legendText:"Apr", indexLabel: "April" },
				
			]
		}
		]
	});
	chart.render();
}
</script>
        
</body>
</html>
