const container = document.querySelector('.container')
const openForm = document.querySelector('.open-menu')
const times = document.querySelector('.times')
const form = document.getElementById('form')
const resource = document.querySelector('.resource')
const submit = document.getElementById('submit')

openForm.addEventListener('click', () => {
  container.style.display = 'block'
  openForm.style.display = 'none'
})

times.addEventListener('click', () => {
  container.style.display = 'none'
  openForm.style.display = 'block'
})

submit.addEventListener('click', (e) => {
  e.preventDefault()

  getInput()
})

function getInput() {
  const resourceValue = resource.value.trim()
}