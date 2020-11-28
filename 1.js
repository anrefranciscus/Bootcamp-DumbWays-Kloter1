
	var jumlahKalori = prompt("Jumlah Kalori = ",0);
	tentukanOlahraga(jumlahKalori);

	function tentukanOlahraga(jumlahKalori) {
		var jenisOlahraga = "";	
		var waktuOlahraga = jumlahKalori / (20/2);
		if (jumlahKalori > 750) {
			jenisOlahraga = "Lari";
		}if (jumlahKalori > 500) {
			jenisOlahraga = "Badminton";
		}if (jumlahKalori <= 500) {	
			jenisOlahraga = "Renang";
		}

		document.write("Jumlah Kalori : "+ jumlahKalori + "<br>");
		document.write("Jenis Olahraga : " + jenisOlahraga + "<br>");
		document.write("Waktu Olahraga : " + waktuOlahraga + " menit");	
	}
