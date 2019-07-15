function validasi_input_pegawai(form_pegawai)
{
	if(form_pegawai.nama.value == "")
	{
		alert("Nama belum di isi !");
		form_pegawai.nama.focus();
		return (false);
	
	}else if(form_pegawai.jk.value == "0")
	{
		alert("Jenis kelamin belum di pilih !");
		form_pegawai.jk.focus();
		return (false);
	
	}else if(form_pegawai.jabatan.value == "")
	{
		alert("Jabatan belum di isi !");
		form_pegawai.jabatan.focus();
		return (false);
	
	}else if(form_pegawai.alamat_pg.value == "")
	{
		alert("Alamat belum di isi !");
		form_pegawai.alamat_pg.focus();
		return (false);
	
	}else if(form_pegawai.notelp.value == "")
	{
		alert("No Telp / Handphone belum di isi !");
		form_pegawai.notelp.focus();
		return (false);
	}


	return(true)
}