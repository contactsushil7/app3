var urls="http://localhost/app3/index.php";
function deletes(id){
	$.ajax({
	        type: "POST",
	        url: urls + "/branch_manager_controller/deleteApplication",
	        data:{'id':id},
	        success: function(output) {
				   $(".s"+id).css('display','none');
		        }
	    });
	
}

$("#allDelete").click(function(){
		$("#application").submit();
	});


 function viewApplicationDetails(id)
	{
		//alert(id);
		 $.ajax({
		        type: "POST",
		       url: urls + "/branch_manager_controller/viewApplicationDetails",
		        data:{'id':id},
		        success: function(output) {
					 //  alert(output);
					 $("#viewDetail").empty();
					 $("#viewDetail").append(output);
			        }
		    });
	}


$("#Application_search").keyup(function(){

//alert("hello");
var key=$("#Application_search").val();
 $.ajax({
		        type: "POST",
		       url: urls + "/branch_manager_controller/Application_search",
		        data:{'key':key},
		        success: function(output) {
					 //  alert(output);
					 $("#applicationBody").empty();
					 $("#applicationBody").append(output);
			        }
		    });
});

$("#classes").change(function(){
	var key=$("#classes").val();
	//alert(key);
	//alert(key);
			$.ajax({
		        type: "POST",
		       url: urls + "/branch_manager_controller/Application_by_grade",
		        data:{'key':key},
		        success: function(output) {
					 //  alert(output);
					 $("#applicationBody").empty();
					 $("#applicationBody").append(output);
			        }
		    });
});

