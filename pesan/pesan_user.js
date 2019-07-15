function validasi_input_user(form_user)
{
	if(form_user.username.value == "")
	{
		alert("Username belum di isi !");
		form_user.username.focus();
		return (false);
	
	}else if(form_user.password.value == "")
	{
		alert("Password belum di isi !");
		form_user.password.focus();
		return (false);
	
	}else if(form_user.nama_user.value == "")
	{
		alert("Nama belum di isi !");
		form_user.nama_user.focus();
		return (false);
	
	}else if(form_user.hak_akses.value == "0")
	{
		alert("Hak Akses Belum di pilih !");
		form_user.hak_akses.focus();
		return (false);
	}


	return(true)
}