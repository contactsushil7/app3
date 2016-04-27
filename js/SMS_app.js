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

// Student Module Jquery function 

 function viewStudentDetails(id)
	{
		//alert(id);
		 $.ajax({
		        type: "POST",
		       url: urls + "/branch_manager_controller/viewStudentDetails",
		        data:{'id':id},
		        success: function(output) {
					 //  alert(output);
					 $("#viewDetail").empty();
					 $("#viewDetail").append(output);
			        }
		    });
	}

	function deletesStudent(id){
		//alert("hello");
	$.ajax({
	        type: "POST",
	        url: urls + "/branch_manager_controller/deleteStudent",
	        data:{'id':id},
	        success: function(output) {
	        	alert(output);
				   $(".s"+id).css('display','none');
		        }
	    });
	
}


$("#Student_search").keyup(function(){

//alert("hello");
var key=$("#Student_search").val();
 $.ajax({
		        type: "POST",
		       url: urls + "/branch_manager_controller/Student_search",
		        data:{'key':key},
		        success: function(output) {
					 //  alert(output);
					 $("#applicationBody").empty();
					 $("#applicationBody").append(output);
			        }
		    });
});


$("#grades").change(function(){
	var key=$("#grades").val();
	
	//alert(key);
			$.ajax({
		        type: "POST",
		       url: urls + "/branch_manager_controller/Student_by_grade",
		        data:{'key':key},
		        success: function(output) {
					 //  alert(output);
					 $("#applicationBody").empty();
					 $("#applicationBody").append(output);
			        }
		    });
});



// function for Student Attendence Start Here

$("#at_subject").change(function(){

//alert("hello");
var classes=$("#at_class").val();
var section=$("#at_section").val();
var subject=$("#at_subject").val();
if(classes !=0 && section !=0 && subject!=0)
{
	$.ajax({
		        type: "POST",
		       url: urls + "/admin/studentRecordForAttendance",
		        data:{'classes':classes,'section':section},
		        success: function(output) {
					   //alert(output);
					 $("#attendanceSheet").empty();
					 $("#attendanceSheet").append(output);
			        }
		    });

}
else
{
	if(classes!=0)
	alert("Please choose class");
	else
		alert("Please choose section");
}

});

//  Inventory function start here


function deletesInventory(id){
	//alert("hello");
	$.ajax({
	        type: "POST",
	        url: urls + "/admin/deletesInventory",
	        data:{'id':id},
	        success: function(output) {
				   $(".s"+id).css('display','none');
		        }
	    });
	
}


 function viewInventory(id)
	{
		//alert(id);
		 $.ajax({
		        type: "POST",
		       url: urls + "/admin/viewInventoryDetails",
		        data:{'id':id},
		        success: function(output) {
					//  alert(output);
					 $("#viewDetail").empty();
					 $("#viewDetail").append(output);
			        }
		    });
	}


$("#Inventory_search").keyup(function(){

//alert("hello");
var key=$("#Inventory_search").val();
//alert(key)
 $.ajax({
		        type: "POST",
		       url: urls + "/admin/Inventory_search",
		        data:{'key':key},
		        success: function(output) {
					 // alert(output);
					 $("#inventory_body").empty();
					 $("#inventory_body").append(output);
			        }
		    });
});

// inventory function finish here/

// function for Fee Module start from here //
/*function getStudentForFee(){
alert("hello");
	var class= $("#fee_class").val();
	var section=$("#fee_section").val();
	alert(class);
	alert(section);
}*/

function deleteBlog(id)
{

	//alert("hello");

	$.ajax({
	        type: "POST",
	        url: urls + "/admin/deleteBlog",
	        data:{'id':id},
	        success: function(output) {
	        	//alert(output);
				   $("#S"+id).css('display','none');
		        }
	    });
	
}
function ViewBlogDetails(id){
//alert("hello");
$.ajax({
		        type: "POST",
		       url: urls + "/admin/viewBlogDetail",
		        data:{'id':id},
		        success: function(output) {
					  alert(output);
					 $("#viewBlog").empty();
					 $("#viewBlog").append(output);
			        }
		    });
}

function getInventory()
{
	var academic=$("#academic_year").val();
	var month=$("#month").val();
	
	$.ajax({
		        type: "POST",
		       url: urls + "/admin/getInventoryList",
		        data:{'academic':academic , 'month':month},
		        success: function(output) {
					  alert(output);
					 $("#inventory_body").empty();
					 $("#inventory_body").append(output);
			        }
		    });

}