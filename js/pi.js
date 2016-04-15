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