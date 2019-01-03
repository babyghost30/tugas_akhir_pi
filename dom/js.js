function pilih() {
	// body...
	var buah = document.getElementById('buah');
	var pilihan = document.getElementById('hasil');
	var option = document.createElement('option');

	option.text = buah.options[buah.selectedIndex].text;
	try{
		pilihan.add(option,null);
	}catch(ex){
		pilihan.add(option);
	}
}