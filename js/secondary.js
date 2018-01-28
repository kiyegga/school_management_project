
function PrintContent(el){
			 var restorecontent=document.body.innerHTML;
			 var PrintContent=document.getElementById(el).innerHTML;
			 document.body.innerHTML=PrintContent;
			 window.print();
			 document.body.innerHTML=restorecontent;
			
		}

		function f1(){
		var StudentNo=document.getElementById("StudentNo").value;
        var Student=document.getElementById("Student").value;
        var Class=document.getElementById("Class").value;
        var Term=document.getElementById("Term").value;
		var Year=document.getElementById("Year").value;
	
        
		
		if(StudentNo==""){
			alert("Please Enter StudentNo ");
			return false;
		}else if(Student==""){
			alert("Please Enter Student name");
			return false;
		} else if(Class==""){
			alert("Please Enter Student Class");
			return false;
		}else if(Term==""){
			alert("Please Enter Term");
			return false;
		}else if (Year=="") {
			alert("Please Enter Year");
			return false;
		}else{

		
        
		return true;

	}
	
		}
	
		