<?php ?>
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
                
                    
               <div class="widget">
                <div class="head">
                    <div class="icon"><i class="icosg-clipboard1"></i></div>
                    <h2>Fee Details</h2>                       
                </div>   
                <div class="block-fluid">
                				<div class="span4">
                				
                                    <select id="op">
                                    <option value="1">Select Report Type</option>
									 <option value="2">Column Chart</option>
                                    <option value="3">Pie Chart</option>
                                    <option value="4">Table</option>
                                    
                                    </select>
                                     
                                </div>
                                <div class="span4">
                               <div class="input-prepend">
                                    <span class="add-on" style="background-color:#fff;margin-left:20px;"><i class="icosg-search"></i></span>
                                    <input type="text" style="width: 209px;"  placeholder="Name,Number">    
                                                               
                                </div>  
                                </div>
                </div>
                
                             <div class="block-fluid">
                
                        
                    <div class="span8">
                
                
                
                			<div class="widget">

		                    	<div class="block">
		                      		  
		                  		<div id="chartContainer" style="height: 300px; width: 100%;"></div>
		                  		
		                  			 
		                  		 </div>
               				 </div>
                   </div>
                   </div>
                  
                        	
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
				{  y: 68, legendText:"May", indexLabel: "May" },
				{  y: 32, legendText:"June", indexLabel: "June" },
				{  y: 68, legendText:"July", indexLabel: "July" },
				{  y: 32, legendText:"Agust", indexLabel: "Agust" },
				
				{  y: 68, legendText:"Sept", indexLabel: "Sept" },
				{  y: 32, legendText:"Oct", indexLabel: "Oct" },
				{  y: 68, legendText:"Nov", indexLabel: "Nov" },
				{  y: 32, legendText:"Dec", indexLabel: "Dec" },
				
				
			]
		}
		]
	});
	chart.render();
}



</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>

$(document).ready(function(){
    $("select").change(function(){
      var value=$('#op').val();
      alert(value);
if(value==2){
	var chart = new CanvasJS.Chart("chartContainer",
			{
				animationEnabled: true,
				title:{
					text: "Chart with Labels on X Axis"
				},
				data: [
				{
					type: "column", //change type to bar, line, area, pie, etc
					dataPoints: [
						{ label: "Jan", y: 18 },
						{ label: "Feb", y: 29 },
						{ label: "March",  y: 40 },                                    
						{ label: "April",  y: 34 },
						{ label: "May",  y: 24 },
						{ label: "June", y: 18 },
						{ label: "July", y: 29 },
						{ label: "Aug",  y: 40 },                                    
						{ label: "Sep",  y: 34 },
						{ label: "Oct",  y: 24 },
						{ label: "Nov", y: 29 },
						{ label: "Dec",  y: 40 }                                   
						
					]
				}
				]
				});

			chart.render();
}

if(value==3){

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
						{  y: 68, legendText:"May", indexLabel: "May" },
						{  y: 32, legendText:"June", indexLabel: "June" },
						{  y: 68, legendText:"July", indexLabel: "July" },
						{  y: 32, legendText:"Agust", indexLabel: "Agust" },
						
						{  y: 68, legendText:"Sept", indexLabel: "Sept" },
						{  y: 32, legendText:"Oct", indexLabel: "Oct" },
						{  y: 68, legendText:"Nov", indexLabel: "Nov" },
						{  y: 32, legendText:"Dec", indexLabel: "Dec" },
						
						
					]
				}
				]
			});
			chart.render();
}
    });
});
 
</script>
        
</body>
</html>
