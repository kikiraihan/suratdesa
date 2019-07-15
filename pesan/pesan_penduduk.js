function validasi_input_penduduk(form_penduduk)
{
	if(form_penduduk.NIK.value == "")
	{
		alert("NIK belum di isi !");
		form_penduduk.NIK.focus();
		return (false);
	
	}else if(form_penduduk.nama_p.value == "")
	{
		alert("Nama belum di isi !");
		form_penduduk.nama_p.focus();
		return (false);
	
	}else if(form_penduduk.tempat_tgl_lahir.value == "")
	{
		alert("Tempat tanggal lahir belum di isi !");
		form_penduduk.tempat_tgl_lahir.focus();
		return (false);
	
	}else if(form_penduduk.jenkel.value == "0")
	{
		alert("Jenis kelamin belum di pilih !");
		form_penduduk.jenkel.focus();
		return (false);
	
	}else if(form_penduduk.alamat.value == "")
	{
		alert("Alamat belum di isi !");
		form_penduduk.alamat.focus();
		return (false);
	
	}else if(form_penduduk.dusun.value == "0")
	{
		alert("Dusun belum di pilih !");
		form_penduduk.dusun.focus();
		return (false);
	
	}else if(form_penduduk.kel_desa.value == "")
	{
		alert("Desa belum di isi !");
		form_penduduk.kel_desa.focus();
		return (false);
	
	}else if(form_penduduk.kecamatan.value == "")
	{
		alert("Kecamatan belum di isi !");
		form_penduduk.kecamatan.focus();
		return (false);
	
	}else if(form_penduduk.agama.value == "0")
	{
		alert("Agama belum di pilih !");
		form_penduduk.agama.focus();
		return (false);
	
	}else if(form_penduduk.s_nikah.value == "0")
	{
		alert("Status belum di pilih !");
		form_penduduk.s_nikah.focus();
		return (false);
	
	}else if(form_penduduk.pekerjaan.value == "")
	{
		alert("Pekerjaan belum di isi !");
		form_penduduk.pekerjaan.focus();
		return (false);
	}


	return(true)
}