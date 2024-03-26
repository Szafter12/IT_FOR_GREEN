const logo = document.querySelector('.nav__logo-img')
const logoText = document.querySelector('.nav__logo-text')
const nav = document.querySelector('.nav')

const scroll = () => {
	let position = window.scrollY
	if (position > 100) {
		nav.classList.add('nav--scroll')
		logo.classList.add('nav__logo-img--active')
		logoText.classList.add('nav__logo-text--active')
	} else {
		nav.classList.remove('nav--scroll')
		logo.classList.remove('nav__logo-img--active')
		logoText.classList.remove('nav__logo-text--active')
	}
}

window.addEventListener('scroll', scroll)
