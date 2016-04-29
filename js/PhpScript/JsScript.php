 <script>
	function deletes(id){
		
		$(document).ajaxStart(function(){
	        $("#wait").css("display", "block");
	    });
	    $(document).ajaxComplete(function(){
	        $("#wait").css("display", "none");
	    });
		 $.ajax({
		        type: "POST",
		        url: "<?php echo site_url('admin/deletes');?>",
		        data:{'id':id},
		        success: function(output) {
					 //  alert(output);
			        }
		    });
		 $(".s"+id).hide();
		}



	
	


	
//student  list for attendence

    $('#clas').change(function(){
		var id=$("#clas").val();
		$.ajax({
	        type: "POST",
	        url: "<?php echo site_url('admin/getClassStudent');?>",
	        data:{'id':id},
	        success: function(output) {
				  // alert(output);
				 $("#t").empty();
				 $("#t").append(output);
		        }
	    });
		});

	function attendence(id,status)
	{
		var class_id=$("#clas").val();
		if(status==1){
				//$("#"+id).css('background_color':red);
			}
		var subject_id=1;
		$.ajax({
	        type: "POST",
	        url: "<?php echo site_url('admin/TeacherTakeStudentAttendence');?>",
	        data:{'student_id':id,'status':status,'subject_id':subject_id,'class_id':class_id},
	        success: function(output) {
				  // alert(output);
				// $("#t").empty();
				// $("#t").append(output);
		        }
	    });
		}
	 $("#periods").keyup(function(){
				//alert("hello");
			var p=parseInt($("#periods").val());
			var output="";
			var i=0,j=0;
			if(p>0 && p<10)
			{ 
				for(i=1;i<=p;i++)
				{output += '<tr>';
				output += '<td style="padding: 5px;margin:0px;">'+i+'</td>';
				output += '<td style="padding: 5px;margin:0px;"><div style="padding: 0px;margin:5px;width:100%"><input type="time" style="width:100%;"placeholder="Start time" name="t'+i+'"><br><input type="time" style="width:100%;"placeholder="End time" name="t'+(i+1)+'"></div></td>';
					for(j=0;j<6;j++){
					output += ' <td style="padding: 5px;margin:0px;">';
					output += ' <div style="padding: 0px;margin:5px;width:100%">';
					output += ' <select name="teacher'+i+'" style="width:100%;">';
					output += ' <option>Choose Teacher</option>  <?php foreach($teacher as $row){?><option value="'+ <?php echo $row["teacher_id"] ?> +'">' + "<?php echo $row["Name"] ?>" + '</option> <?php }?>';
					output += ' </select>    </div>'; 
				     
					output += ' <div style="padding: 0px;margin:5px;width:100%">';
					output += ' <select name="subject'+i+'" style="width:100%;">';
					output += ' <option>Opt Subject</option>  <?php foreach($subject as $row){?><option value="'+ <?php echo $row["id"] ?> +'">' + "<?php echo $row["subject_name"] ?>" + '</option> <?php }?>';
					output += '  </select>';
				      
					output += '   </div>';
				      
					output += '  </td>';
				}
				output += '</tr>';
				}

				$("#tabletr").empty();
				$("#tabletr").append(output);
				
                
           
			}
			else
				$("#tabletr").empty();
		 });
	 
	
    </script>
    