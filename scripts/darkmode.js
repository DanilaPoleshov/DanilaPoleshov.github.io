const themeIcon = document.querySelector('.header__nav__ul__theme')

themeIcon.addEventListener('click', event => {
  event.preventDefault()
  if (localStorage.getItem('theme') === 'dark') {
    localStorage.removeItem('theme')
  } else {
    localStorage.setItem('theme', 'dark')
  }
  addDarkTheme()
})

function addDarkTheme() {
  if (localStorage.getItem('theme') === 'dark') {
    console.log('dark')

    document.querySelector('#header-logo').src = '../img/header-logo-dark.png'
    document.querySelector('#theme').href = '../styles/dark-theme.css'
    document.querySelector('.theme-img').src = '../img/sun.png'
  } else {
    console.log('light')
    document.querySelector('#header-logo').src = '../img/header-logo.png'
    document.querySelector('#theme').href = '../styles/light-theme.css'
    document.querySelector('.theme-img').src = '../img/sun.png'
  }
}

addDarkTheme()
