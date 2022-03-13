let eye = document.querySelector('#eyeIcon')
let pass = document.querySelector('#signConPass')

	eye.onclick = function(){
		eye.classList.toggle('fa-eye-slash')

		if(pass.type == 'password'){
			pass.type = 'text'
		}
		else{
			pass.type = 'password'
		}
	}



let signUpBtn = document.getElementById('signUpBtn')

let fnAlert = document.getElementById('fnAlert')
let laAlert = document.getElementById('laAlert')
let eAlert = document.getElementById('eAlert')
let phAlert = document.getElementById('phAlert')
let paAlert = document.getElementById('paAlert')
let ConpaAlert = document.getElementById('ConpaAlert')


let SignUpPass = document.getElementById('pass');
	








	//first name validation




function firstNameAlert(name){
	if(name.value.length < 2){
		fnAlert.textContent = 'To Sort'
	}
	else if(name.value.length >= 20){
		fnAlert.textContent = 'To Long'
	}
	else{
		fnAlert.textContent = ''
	}

}





	//last name validation

function lastNameAlert(laname){
	if(laname.value.length < 2){
		laAlert.textContent = 'To Sort'
	}
	else if(laname.value.length >= 20){
		laAlert.textContent = 'To Long'
	}
	else{
		laAlert.textContent = ''
	}

}








	//phone validation

function phoneAlert(phone){
	if(phone.value.length < 10 ){
		phAlert.textContent = 'To Sort'
	}
	else if(phone.value.length > 12){
		phAlert.textContent = 'To Long'
	}
	else{
		phAlert.textContent = ''
	}

}







	//password validation

function pasAlert(pasw){

	if(pasw.value.length < 6 ){
		paAlert.textContent = 'Atleast 6 Charecters'
	}
	else if(pasw.value.length > 20){
		paAlert.textContent = 'To Long'
	}
	else{
		paAlert.textContent = ''
	}

}


	//confirm password
function conPass(){
	if (pass.value == SignUpPass.value){
		ConpaAlert.style.color = 'green'
		ConpaAlert.textContent = ' Matched'
	}
	else{
		ConpaAlert.style.color = 'rgba(255, 0, 0, .6)'
		ConpaAlert.textContent = ' Not Matched'
	}


}



