var g_status=false;
	function getval(e_uname){
		//var e_uname=get("uname");
		var uname=e_uname.value;
		get("op").innerHTML=uname;
	}
	function get(id){
		return document.getElementById(id);
	}
	function viewGoogle()
	{
		var g_f=get("g_form");
		var g_b=get("btn_g");
		if(g_status){
			g_f.style.display="none";
			btn_g.innerHTML="Login With Google";
			g_status=false;
		}
		else{
			g_f.style.display="block";
			btn_g.innerHTML="Hide Google Form";
			g_status=true;
		}
	}
	function viewInfo()
	{
		var info=get("bd_info");
		info.style.display="block";
		info.style.color="blue";
		info.style.margin="20px";
		
	}
	function hideInfo()
	{
		var info=get("bd_info");
		info.style.display="none";
	}