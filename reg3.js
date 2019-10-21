var nameC =false;
var emailC =false;
var phoneC=false;
var passC=false;
var cpassC=false;
var cCode = false;
var ter = false;
var randomCode;

function nameError(){
	var box = document.getElementById('name');
	var str = document.getElementById('name').value;
	if(str.length==0){
		document.getElementById('namee').innerHTML = 'Can\'t leave this empty';
		box.style.borderColor= 'red';
		nameC=false;
		dis();
	}else{
					  box.style.borderColor = 'grey';
					  document.getElementById('namee').innerHTML = ' ';
					  nameC=true;
					  dis();
				  }
	
}
function checkemail(){
	var box = document.getElementById('email');
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			 if(document.getElementById('em').innerHTML = xmlhttp.responseText){
				 box.style.borderColor = 'red';
				 emailC=false;
				 dis();
			 }else{
				  box.style.borderColor = 'rgb(23,263,7)';
				  emailC=true;
				  dis();
				  var str = document.getElementById('email').value;
				  if(str.length == 0){
					   box.style.borderColor = 'red';
					   document.getElementById('em').innerHTML = 'Can\'t leave this empty';
					   emailC=false;
					   dis();
				  }
			 }
		} 
	}
	xmlhttp.open('GET','getemail.php?search_text='+document.ye.email.value,true);
	xmlhttp.send();
}
function checkuser(){
	var box = document.getElementById('num');
    var no = box.value;
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			 if(document.getElementById('tell').innerHTML = xmlhttp.responseText){
				 box.style.borderColor = 'red';
				 phoneC=false;
				 sendmsg(0);
				 dis();
			 }else{
				 var str = document.getElementById('num').value;
				 				  if(str.length >= 10 && str.length <=14){
				 box.style.borderColor = 'rgb(23,263,7)';
				 phoneC=true;
				 sendmsg(1);
				 dis();
				 
					}
					else{
					   box.style.borderColor = 'red';
					   document.getElementById('tell').innerHTML = 'Invalid mobile no.';
					   phoneC=false;
					   sendmsg(0);
					   dis();
				  }
			 }
			
		} 
	}
	xmlhttp.open('GET','getuser.php?search_text='+no,true);
	xmlhttp.send();
}



function passRs(){
	checkPass();
	var box = document.getElementById('pass');
	var str = box.value;
	if(str.length<6 && str.length>=1){
		passC=false;
		document.getElementById('bass').innerHTML='must be greater than 5 digits';
		dis();
		box.style.borderColor='red';
	}
	else if(str.length>=6 && str.length <=8){
		box.style.borderColor='rgb(34,4,221)';
		document.getElementById('bass').innerHTML='Strength - Good'
		passC=true;
		dis();
	}
	else if(str.length>8){
		box.style.borderColor='rgb(23,263,7)';
		passC=true;
		document.getElementById('bass').innerHTML='Strength - Strong'
		dis();
	}
	else if(str.length==0){
		passC=false;
		document.getElementById('bass').innerHTML='';
		dis();
		box.style.borderColor='grey';
	}
	

}

function checkPass(){
	var box1 = document.getElementById('pass');
	var box2 = document.getElementById('cpass');
	if(box1.value !=  box2.value){
		cpassC=false;
		dis();
		document.getElementById('b').innerHTML='Passwords don\'t match';
	}
	else if(box1.value == box2.value){
		cpassC=true;
		dis();
		document.getElementById('b').innerHTML='';
	}
}
function terms(){
    var box = document.getElementById('cond');
    if(box.checked){
        ter=true;
        dis();
        
    }
        else{
        ter = false;
            dis();
        }
}
function dis(){
	if(nameC==true && phoneC==true && passC==true && cpassC==true && cCode==true && ter==true){
		document.getElementById('submit_button').disabled=false;
	}
	else{
		document.getElementById('submit_button').disabled=true;
	}
}

function sendCode(){
	var num = document.getElementById('num').value.length;
    var aw = document.getElementById('num').value;
	if(phoneC==true){
		if(num>=10 && num <=14){
			document.getElementById('ecode').style="display:block;";
			document.getElementById('tell').innerHTML='';
			
			if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				randomCode = xmlhttp.responseText;
				document.getElementById('ppw').innerHTML=randomCode;
				document.getElementById('verify_button').disabled=true;
				document.getElementById('verify_button').style.background="rgb(255,121,121);";

			} 
		}
		xmlhttp.open('GET','sending.php?phn_num='+aw,true);
		xmlhttp.send();
			
		}
		else{
			box.style.borderColor = 'red';
			document.getElementById('tell').innerHTML='Invalid mobile no.';
			
		}
	}
}

function confirmCode(){
	var box = document.getElementById('code_field');
	if(randomCode==box.value){
		cCode=true;
		dis();
	}
	else{
		cCode=false;
		dis();
	}
	
}

window.onload=dis;
