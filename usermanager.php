<?PHP

if(isset($_POST["register"])){
	if(isset($_POST["email"])){
		if(trim($_POST["email"]) == ""){
			#Error Message + Code here (Email field is empty)
		}
		if (strpos(trim($_POST["email"], '@') == false) {
			#Error Message + Code here (String is probably not an email)
		}
		if(isset($_POST["username"])){
			if(isset($_POST["password1"])){
				
			}else{
				#Error Message + Code here (User Probably not using registration script)
			}
		}else{
			#Error Message + Code here (User Probably not using registration script)
		}
	}else{
		#Error Message + Code here (User probably not using registration script)
	}
}elseif($_POST["login"]){
	
}elseif($_GET["verify"]){
	
}else{
	
}

?>