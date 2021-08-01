<html>
<script>
	function loadDoc(){
		var xhr=new XMLHttpRequest();
		xhr.open("GET","my_profile.php",true);
		xhr.onreadystatechange=function(){
			if(this.readystate==4 && this.status==200){
				get("demo").innerHTML=this.responseText;
				
			}
		};
		xhr.send();
	}
	function get(id){
		return document.getElementById(id);
	}
	</script>
	
	<body>
		<button onclick="loadDock()">Click me</button>
		<div id="demo"></div>
	
	
	</body>
	</html>