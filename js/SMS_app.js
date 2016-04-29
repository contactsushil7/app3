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



function deletefaculty(id){
	$.ajax({
	        type: "POST",
	        url: urls + "/branch_manager_controller/deletefaculty",
	        data:{'id':id},
	        success: function(output) {
				   $(".s"+id).css('display','none');
		        }
	    });
	
}




function deleteexfaculty(id){
	$.ajax({
	        type: "POST",
	        url: urls + "/branch_manager_controller/deleteexfaculty",
	        data:{'id':id},
	        success: function(output) {
				   $(".s"+id).css('display','none');
		        }
	    });
	
}





function staffdeletes(id){
	$.ajax({
	        type: "POST",
	        url: urls + "/branch_manager_controller/staffdeletes",
	        data:{'id':id},
	        success: function(output) {
				   $(".s"+id).css('display','none');
		        }
	    });
	
}



function Exstaffdeletes(id){
	$.ajax({
	        type: "POST",
	        url: urls + "/branch_manager_controller/Exstaffdeletes",
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




function viewStaffDetails(id)
	{
		//alert(id);
		 $.ajax({
		        type: "POST",
		       url: urls + "/branch_manager_controller/viewStaffDetails",
		        data:{'id':id},
		        success: function(output) {
					 //  alert(output);
					 $("#viewDetail").empty();
					 $("#viewDetail").append(output);
			        }
		    });
	}





	function viewExStaffDetails(id)
	{
		//alert(id);
		 $.ajax({
		        type: "POST",
		       url: urls + "/branch_manager_controller/viewExStaffDetails",
		        data:{'id':id},
		        success: function(output) {
					 //  alert(output);
					 $("#viewDetail").empty();
					 $("#viewDetail").append(output);
			        }
		    });
	}

function viewexstudentdetails(id)
	{
		//alert(id);
		 $.ajax({
		        type: "POST",
		       url: urls + "/branch_manager_controller/viewexstudentdetails",
		        data:{'id':id},
		        success: function(output) {
					 //  alert(output);
					 $("#viewDetail").empty();
					 $("#viewDetail").append(output);
			        }
		    });
	}



function viewexfacultydetails(id)
	{
		//alert(id);
		 $.ajax({
		        type: "POST",
		       url: urls + "/branch_manager_controller/viewexfacultydetails",
		        data:{'id':id},
		        success: function(output) {
					 //  alert(output);
					 $("#viewDetail").empty();
					 $("#viewDetail").append(output);
			        }
		    });
	}


function viewefacultydetailss(id)
	{
		//alert(id);
		 $.ajax({
		        type: "POST",
		       url: urls + "/branch_manager_controller/viewefacultydetailss",
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

function deletesexstudent(id)
	{
		//alert("hello");
	$.ajax({
	        type: "POST",
	        url: urls + "/branch_manager_controller/deleteexstudent",
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



$("#fee_deposite").focusout(function(){
	//alert("Hello Shiva");
	var pre_duefees=parseInt($("#due_fees").text());
	//alert(pre_duefees);
	var tu_fees=parseInt($("#feetype").val());
	var other_fees=$("#otherfee").val();
	var dep_fees=parseInt($("#fee_deposite").val());
	var x;
	if(tu_fees==1)
	{

		x=pre_duefees-dep_fees;
		alert(x);
		$("#new_due_fee").val(x);
	}
	else
	{
		if(other_fees !="")
		{
			x=tu_fees + parseInt(other_fees) + pre_duefees-dep_fees;
			//var totalfee=xx-dep_fees;
					$("#new_due_fee").val(x);

		}
		else
		{
			x=tu_fees + pre_duefees-dep_fees;
			$("#new_due_fee").val(x);
		}
	}

});




function GetStudentFee()
{
	var classfee= $("#classes_fee").val();
	var sectionfee=$("#section_fee").val();
	//alert(classfee);
	//alert(sectionfee);
	$.ajax({
		       type: "POST",
		       url: urls + "/branch_manager_controller/feestudentdetails",
		        data:{'classfee':classfee,'sectionfee':sectionfee},
		        success: function(output) {
					 alert(output);
					// $("#feedetailbody").empty();
					// $("#feedetailbody").append(output);
					  //$("#feedetailbody").empty();
			        }
		    });
}

$("#feetype").change(function(){
   var feetype =$("#feetype").val();
   alert(feetype);
   if(feetype==1)
   {
   	$("#otherfee").attr('readonly','true');
   }
   else
   	{
   	$("#otherfee").removeAttr('readonly');
   }


});



$("#exfacultysearch").keyup(function(){

//alert("hello");
var key=$("#exfacultysearch").val();
 $.ajax({
		        type: "POST",
		        url: urls + "/branch_manager_controller/exfacultysearch",
		         data:{'key':key},
		        success: function(output) {
					 // alert(output);
					 $("#tbodys").empty();
					 $("#tbodys").append(output);
			        }
		    });
});





$("#facultysearch").keyup(function(){

//alert("hello");
var key=$("#facultysearch").val();
 $.ajax({
		        type: "POST",
		        url: urls + "/branch_manager_controller/facultysearch",
		         data:{'key':key},
		        success: function(output) {
					 // alert(output);
					 $("#tbodys").empty();
					 $("#tbodys").append(output);
			        }
		    });
});


$("#staffsearch").keyup(function(){

//alert("hello");
var key=$("#staffsearch").val();
 $.ajax({
		        type: "POST",
		        url: urls + "/branch_manager_controller/staffsearch",
		         data:{'key':key},
		        success: function(output) {
					 //alert(output);
					 $("#staff").empty();
					 $("#staff").append(output);
			        }
		    });
});




$("#exstaffsearch").keyup(function(){

//alert("hello");
var key=$("#exstaffsearch").val();
 $.ajax({
		        type: "POST",
		        url: urls + "/branch_manager_controller/exstaffsearch",
		         data:{'key':key},
		        success: function(output) {
					// alert(output);
					 $("#exstaff").empty();
					 $("#exstaff").append(output);
			        }
		    });
});




$("#exStudent_search").keyup(function(){

//alert("hello");
var key=$("#exStudent_search").val();
 $.ajax({
		        type: "POST",
		        url: urls + "/branch_manager_controller/exStudent_search",
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


$("#seeking_grade").change(function(){
	var key=$("#seeking_grade").val();
	
	//alert(key);
			$.ajax({
		        type: "POST",
		       url: urls + "/branch_manager_controller/Studentq",
		        data:{'key':key},
		        success: function(output) {
					 //  alert(output);
					 $("#applicationBody").empty();
					 $("#applicationBody").append(output);
			        }
		    });
});




$("#exgrades").change(function(){
	var key=$("#exgrades").val();
	
	//alert(key);
			$.ajax({
		        type: "POST",
		       url: urls + "/branch_manager_controller/exStudent_by_grade",
		        data:{'key':key},
		        success: function(output) {
					 //  alert(output);
					 $("#applicationBody").empty();
					 $("#applicationBody").append(output);
			        }
		    });
});




$("#student").change(function(){

//alert("hello");
var key=$("#student").val();
var classid=$("#classes").val();
alert(key);
 $.ajax({
		        type: "POST",
		       url: urls + "/branch_manager_controller/feestudentid",
		        data:{'key':key},
		        success: function(output) {
					//  alert(output);
					 $("#feedetailbody").empty();
					 $("#feedetailbody").append(output);
					  //$("#feedetailbody").empty();
			        }
		    });
 			$.ajax({
		        type: "POST",
		       url: urls + "/branch_manager_controller/getclassfee",
		        data:{'classid':classid},
		        success: function(output) {
					  //alert(output);
					 $("#tution").val("");
					 $("#tution").val(output);
					  //$("#feedetailbody").empty();
			        }


		    });

});


