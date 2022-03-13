	window.addEventListener('scroll', function(){
		let nav = document.querySelector('nav')

	
		nav.classList.toggle('active', window.scrollY > 200)
	})



	

	function showWar(){
		var viewTxt = document.querySelector('.viewmoreTxt');
		alert('You Need To LogIn');
	}

	var toggleNav = document.querySelector('#nav')
	

	toggleNav.onclick = function(){
		var navlist = document.querySelector('#navList')
		navlist.classList.toggle('active')
	}

	function hide(){
		var navlist = document.querySelector('#navList')
		navlist.classList.remove('active')
	}