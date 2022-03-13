var eye = document.querySelector('#eyeIcon')
var pass = document.querySelector('#logPass')

	eye.onclick = function(){
		eye.classList.toggle('fa-eye-slash')

		if(pass.type == 'password'){
			pass.type = 'text'
		}
		else{
			pass.type = 'password'
		}

	}
	
