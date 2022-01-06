function onlyOne(checkbox) {
	var checkboxes = document.getElementById('check')
checkboxes.forEach((item) => {
	if (item !== checkbox) item.checked = false
})
}