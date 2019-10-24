function logout(){
    window.location='logout.php';
}                                  
function adding(id) {
	window.location='addroom.php?userid='+id;
}
function profile(id){
	window.location='profile.php?userid='+id;
}
function disableRoom(id){
	var box = document.getElementById('avai_button'+id);
	var str = box.value;
	if(str == 'Yes'){
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				var te = xmlhttp.responseText;
				if(te=='true'){
					box.value='No';
					box.style.background="red";
					box.style.borderColor="red";
				}
			}
		}
		xmlhttp.open('GET','disable.php?id='+id,true);
		xmlhttp.send();
	}
	else if(str == 'No'){
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				var te = xmlhttp.responseText;
				if(te=='true'){
					box.value='Yes';
					box.style.background="green";
					box.style.borderColor="green";
				}
			}
		}
		xmlhttp.open('GET','disable.php?id='+id,true);
		xmlhttp.send();
	}
	
}

function gop(id){
	if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				
			}
		}
	xmlhttp.open('GET','setsession.php?room_id='+id,true);
	xmlhttp.send();
	gg(id);
}

function gg(id){
	window.location="addimage.php?room_id="+id;

}
function shp(id){
	box=document.getElementById('dec'+id);
	box.style.display="block";
}

function nop(id){
	box=document.getElementById('dec'+id);
	box.style.display="none";
}
function edit(id){
	window.location='seteditses.php?id='+id;
}
function del(id){
	if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				if(xmlhttp.responseText=='Sucessfully deleted')
					window.location='landlord.php';
				else{
					document.getElementById('err'+id).innerHTML="Try again";
					box=document.getElementById('dec'+id);
					box.style.display="none";
				}
			}
		}
		xmlhttp.open('GET','delete.php?id='+id,true);
		xmlhttp.send();
}