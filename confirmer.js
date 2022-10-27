function checker()
{
	pass = document.getElementById('psswd').value;
	cpass = document.getElementById('cpsswd').value;
	if(cpass!==pass)
		return false;
	else return true;
}