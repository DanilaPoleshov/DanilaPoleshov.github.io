const images = [
  '../img/background-header.jpg',
  '../img/background-header1.jpg',
  '../img/background-header2.jpg',
  '../img/background-header3.jpg',
  '../img/background-header4.jpg',
  '../img/background-header5.jpg',
]

let i = 0


function changeImages() {
  document.querySelector(
    '.vimeworld'
  ).style.backgroundImage = `url(${images[i]})`
  i++
  if (i == images.length) {
    i = 0
  }
  setTimeout('changeImages()', 8000)
}

function preloadImages() {
  for (let i = 0; i < arguments.length; i++) {
    new Image().src = arguments[i]
  }
}

changeImages()

preloadImages(
  '../img/background-header.jpg',
  '../img/background-header1.jpg',
  '../img/background-header2.jpg',
  '../img/background-header3.jpg',
  '../img/background-header4.jpg',
  '../img/background-header5.jpg'
)
