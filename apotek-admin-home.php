<!DOCTYPE HTML>
<html>
    <meta charset="utf-8">
    <head>
        <title>Apotek.Com</title>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            body{
                margin: 0 auto;
            }
            header{
                width: 100%;
                height: 40px;
            }
            .cari{
                width: 65%;
                height: 38px;
                border: 0px;
                border-bottom: solid 2px dodgerblue;
                font-family: "tahoma";
                font-size: 13px;
                text-align: center;
                margin-left: 200px;
                position: absolute;
            }
            .btn-cari{
                width: 50px;
                height: 40px;
                border: 0px;
                border-bottom: solid 2px dodgerblue;
                font-family: "tahoma";
                font-size: 14px;
                background: #fff;
                color: white;
                margin-left: 1075px;
                position: absolute;
                background-color: #C0C0C0;
            }
			.btn-cari:hover{
				background-color: #EAEAEA;
				transition:all 0.3s;
			}
			.logo{
				width:140px;
				height:40px;
				position:absolute;
			}
			.logo2{
				width:200px;
				height:200px;
				background:#fff;
				margin-top:20px;
				margin-left:20px;
				position:absolute;
			}
			.img-logo2{
				margin-top:40px;
				width:100%;
			}
			.btn-member{
				width: 90px;
				height:40px;
				font-family:"tahoma";
				font-size:16px;
				color:#0874BF;
				border:0px;
				background:#fff;
				margin-left:1140px;				
			}
			.btn-member:hover{
				transition:all 0.1s;
				border-bottom:solid 2px dodgerblue;
			}
			.btn-suplier{
				width:90px;
				height:40px;
				font-family:"tahoma";
				font-size:16px;
				color:#0874BF;
				border:0px;
				background:#fff;
			}
			.btn-suplier:hover{
				transition:all 0.1s;
				border-bottom:solid 2px dodgerblue;
			}
			.container1{
				width:300px;
				height:auto;
				position:absolute;
				border:solid 0px;
				margin-top:20px;
				margin-left:10px;
			}
			.container2{
				width:1000px;
				height:auto;
				position:absolute;
				border:solid 0px;
				margin-top:20px;
				margin-left:320px;
			}
			.container3{
				width:300px;
				height:300px;
				position:absolute;
				border:solid 0px;
				margin-left:10px;
				margin-top:650px;
			}
			.container4{
				width:300px;
				height:570px;
				position:absolute;
				border:solid 0px;
				margin-left:10px;
				margin-top:970px;
			}
            .container5{
                width: 300px;
                height: 200px;
                border:solid 1px;
                border-radius: 5px;
                margin-left: 670px;
                position: absolute;
                margin-top: 80px;
                color: white;
                font-family: "wolf in the city";
                font-size: 50px;
                text-align: center;
            }
			.home{
				width:80px;
				height:30px;
				border:0px;
				color:#0874BF;
				font-family:"tahoma";
				font-size:14px;
				background:#fff;
				border-bottom:solid 2px dodgerblue;
			}.update{
				width:80px;
				height:30px;
				border:0px;
				color:#0874BF;
				font-family:"tahoma";
				font-size:14px;
				background:#fff;
				margin-left:10px;
			}
			.update:hover{
				transition:all 0.1s;
				border-bottom:solid 2px dodgerblue;
			}.tips{
				width:80px;
				height:30px;
				border:0px;
				color:#0874BF;
				font-family:"tahoma";
				font-size:14px;
				background:#fff;
				margin-left:10px;
			}
			.tips:hover{
				transition:all 0.1s;
				border-bottom:solid 2px dodgerblue;
			}
			.help:hover{
				transition:all 0.1s;
				border-bottom:solid 2px dodgerblue;
			}.help{
				width:80px;
				height:30px;
				border:0px;
				color:#0874BF;
				font-family:"tahoma";
				font-size:14px;
				background:#fff;
				margin-left:10px;
			}
			.other:hover{
				transition:all 0.1s;
				border-bottom:solid 2px dodgerblue;
			}.other{
				width:80px;
				height:30px;
				border:0px;
				color:#0874BF;
				font-family:"tahoma";
				font-size:14px;
				background:#fff;
				margin-left:10px;
			}
            .member:hover{
				transition:all 0.1s;
				border-bottom:solid 2px dodgerblue;
			}.member{
				width:80px;
				height:30px;
				border:0px;
				color:#0874BF;
				font-family:"tahoma";
				font-size:14px;
				background:#fff;
				margin-left:10px;
			}
            .supplier:hover{
				transition:all 0.1s;
				border-bottom:solid 2px dodgerblue;
			}.supplier{
				width:80px;
				height:30px;
				border:0px;
				color:#0874BF;
				font-family:"tahoma";
				font-size:14px;
				background:#fff;
				margin-left:10px;
			}
            .transaksi:hover{
				transition:all 0.1s;
				border-bottom:solid 2px dodgerblue;
			}.transaksi{
				width:80px;
				height:30px;
				border:0px;
				color:#0874BF;
				font-family:"tahoma";
				font-size:14px;
				background:#fff;
				margin-left:10px;
			}
			.next{
				width:30px;
				height:30px;
				border-radius:50px;
				border:0px;
				font-family:"tahoma";
				font-weight:bold;
				font-size:13px;
				color:#fff;
				background:#0874BF;
				margin-left:238px;
				margin-right:20px;
			}
			.next:hover{
				transition:all 0.2s;
				background:#fff;
				border:solid 2px #0874BF;
				color:#0874BF
			}
			.pre{
				width:30px;
				height:30px;
				border-radius:50px;
				border:0px;
				font-family:"tahoma";
				font-weight:bold;
				font-size:13px;
				color:#fff;
				background:#0874BF;
			}
			.pre:hover{
				transition:all 0.2s;
				background:#fff;
				border:solid 2px #0874BF;
				color:#0874BF
			}
			.gambar1{
				width:100%;
				height:250px;
				margin-top:2px;
			}
			.isi{
				width:220px;
				height:400px;
				border:solid 0px;
				position:absolute;
				margin-top:10px;
			}
			.isi2{
				width:220px;
				height:400px;
				border:solid 0px;
				margin-left:260px;
				position:absolute;
				margin-top:10px;
			}
			.isi3{
				width:220px;
				height:400px;
				border:solid 0px;
				margin-left:520px;
				margin-top:10px;
				position:absolute;
			}
			.isi4{
				width:220px;
				height:400px;
				border:solid 0px;
				margin-left:778px;
				margin-top:10px;
			}
			.gambarisi1{
				width:100%;
				height:150px;
				border-radius:5px;
			}
			.btn-isi1{
				width:100%;
				height:40px;
				margin-left:0px;
				border:0px;
				background:#0874BF;
				margin-bottom:10px;
				font-family:"tahoma";
				font-size:15px;
				color:#fff;
				border-radius:5px;
			}
			.btn-isi1:hover{
				border:solid 1px #0874BF;
				transition:all 0.2s;
				background:#fff;
				color:#0874BF;
			}
			.btn-isi1-2{
				width:100%;
				height:40px;
				margin-left:0px;
				border:0px;
				background: rgba(0,51,102,1);
				margin-bottom:0px;
				font-family:"tahoma";
				font-size:15px;
				color:#fff;
				border-radius:5px;
			}
			.btn-isi1-2:hover{
				border:solid 1px #0874BF;
				transition:all 0.2s;
				background:#fff;
				color:#0874BF;
			}
            .btn-isidaf{
				width:80px;
				height:30px;
				margin-left:0px;
				border:0px;
				background:#0874BF;
				margin-bottom:10px;
				font-family:"tahoma";
				font-size:15px;
				color:#fff;
				border-radius:5px;
			}
			.btn-isidaf:hover{
				border:solid 1px #0874BF;
				transition:all 0.2s;
				background:#fff;
				color:#0874BF;
			}
			.btn-isidaf2{
				width:80px;
				height:30px;
				margin-left:0px;
				border:0px;
				background: rgba(0,51,102,1);
				margin-bottom:0px;
				font-family:"tahoma";
				font-size:15px;
				color:#fff;
				border-radius:5px;
			}
			.btn-isidaf2:hover{
				border:solid 1px #0874BF;
				transition:all 0.2s;
				background:#fff;
				color:#0874BF;
			}
			.nama-obat{
				font-family:"tahoma";
				font-size:15px;
				text-align:center;
				font-weight:700;
			}
			.isi-obat{
				font-family:"tahoma";
				font-size:13px;
			}
			.judulc1{
				border-bottom:solid 2px dodgerblue;
				font-family:"tahoma";
				font-size:15px;
				color:#0874BF;
				text-align:center;
				padding-bottom:5px;
				margin-top:6px;
			}
			.gambardaftarobat{
				width:80px;
				height:80px;
				position:absolute;
				margin-top:5px;
				border-radius:5px;
			}
			.isidaftarobat{
				width:210px;
				height:78px;
				border:solid 0px;
				font-family:"tahoma";
				font-size:13px;
				margin-left:88px;
				margin-top:5px;
			}
			.footer{
				width:100%;
				height:400px;
				border:solid 0px;
				position:absolute;
				margin-top:1550px;
				background:#0874BF;
			}
			.nama{
				width:100%;
				height:40px;
				border:0px;
				border-left:solid 2px rgba(192,192,192,1);
				font-family:"tahoma";
				font-size:13px;
				margin-top:10px;
				background:rgba(235,235,235,1);
			}
			.email{
				width:100%;
				height:40px;
				border:0px;
				border-left:solid 2px rgba(192,192,192,1);
				font-family:"tahoma";
				font-size:13px;
				margin-top:10px;
				background:rgba(235,235,235,1);
			}
			.komentar{
				width:100%;
				height:80px;
				border:0px;
				border-left:solid 2px rgba(192,192,192,1);
				font-family:"tahoma";
				font-size:13px;
				margin-top:10px;
				background:rgba(235,235,235,1);
			}
			.kirim{
				width:147px;
				height:50px;
				margin-top:10px;
				border:0px;
				font-family:"tahoma";
				color:#fff;
				font-size:15px;
				background:#0874BF;
				border-radius:5px;
			}
			.kirim:hover{
				border:solid 1px #0874BF;
				background:#fff;
				color:#0874BF;
				transition:all 0.2s;
			}
			.reset{
				width:147px;
				height:50px;
				background:rgba(0,51,102,1);
				border:0px;
				font-family:"tahoma";
				color:#fff;
				font-size:15px;
				border-radius:5px;
			}
			.reset:hover{
				border:solid 1px #0874BF;
				background:#fff;
				color:#0874BF;
				transition:all 0.2s;
			}
			.btn-bawah{
				width:70px;
				height:30px;
				font-family:"tahoma";
				font-size:15px;
				background:#0874BF;
				color:#fff;
				border:solid 0px;
				margin-top:0px;
			}
			.btn-bawah1{
				width:90px;
				height:30px;
				font-family:"tahoma";
				font-size:15px;
				background:#0874BF;
				color:#fff;
				border:0px;
				margin-top:0px;
				margin-left:710px;
			}
			.ket-membeli{
				width:340px;
				height:90%;
				border:solid 0px;
				margin-left:240px;
				font-family:"tahoma";
				position:absolute;
				font-size:13px;
				color:#fff;
			}
			.ket-member{
				width:340px;
				height:90%;
				border:solid 0px;
				margin-left:600px;
				font-family:"tahoma";
				position:absolute;
				font-size:13px;
				color:#fff;
			}
			.ket-suplier{
				width:340px;
				height:90%;
				border:solid 0px;
				margin-left:960px;
				font-family:"tahoma";
				font-size:13px;
				color:#fff;
			}
			.ket{
				text-align:center;
				font-size:17px;
			}
            .isidaf{
                font-size: 15px;
            }
        </style>
    </head>
    <body>
        <header>
        <img src="images/apotek.png" class="logo">
            <input type="text" class="cari" placeholder="Cari Nama Obat">
            <button type="button" class="btn-cari">Cari</button>
            <a href="apotek-member.php"><button type="button" class="btn-member">Editing</button></a>
            <a href="apotek-suplier.php"><button type="button" class="btn-suplier">Out</button></a>
        </header>
        <div class="container1">
        <p class="judulc1">Daftar Obat Paling Dicari</p>
        <img src="images/11.jpg" class="gambardaftarobat">
        <div class="isidaftarobat">
            <p class="isidaf">HRV</p>
            Obat untuk penderita HIV<br>
            <button type="button" class="btn-isidaf">Buy</button>
            <button type="button" class="btn-isidaf2">View</button>
            </div>
        <img src="images/8.jpg" class="gambardaftarobat">
        <div class="isidaftarobat">
            <p class="isidaf">AMLODIPINE</p>
            Obat untuk penderita darah tinggi<br>
            <button type="button" class="btn-isidaf">Buy</button>
            <button type="button" class="btn-isidaf2">View</button>
            </div>
        <img src="images/6.jpg" class="gambardaftarobat">
        <div class="isidaftarobat">
            <p class="isidaf">CENDOBERRY</p>
            Vitamin untuk mata<br>
            <button type="button" class="btn-isidaf">Buy</button>
            <button type="button" class="btn-isidaf2">View</button>
            </div>
        <img src="images/19.jpg" class="gambardaftarobat">
        <div class="isidaftarobat">
            <p class="isidaf">DECOLSIN</p>
            Obat untuk flu dan batuk<br>
            <button type="button" class="btn-isidaf">Buy</button>
            <button type="button" class="btn-isidaf2">View</button>
            </div>
        <img src="images/21.jpg" class="gambardaftarobat">
        <div class="isidaftarobat">
            <p class="isidaf">TOBROSON</p>
            Obat tetes mata<br>
            <button type="button" class="btn-isidaf">Buy</button>
            <button type="button" class="btn-isidaf2">View</button>
            </div>
        <img src="images/20.jpg" class="gambardaftarobat">
        <div class="isidaftarobat">
            <p class="isidaf">NUTRI MAX</p>
            Vitamin untuk tubuh<br>
            <button type="button" class="btn-isidaf">Buy</button>
            <button type="button" class="btn-isidaf2">View</button>
            </div>
        <img src="images/18.jpg" class="gambardaftarobat">
        <div class="isidaftarobat">
            <p class="isidaf">RENADINAC</p>
            Antibiotik untuk tifus<br>
            <button type="button" class="btn-isidaf">Buy</button>
            <button type="button" class="btn-isidaf2">View</button>
            </div>
        </div>
        <div class="container2">
        <a href="apotek.php"><button type="button" class="home">Home</button></a>
        <a href="apotek-progres-admin.php"><button type="button" class="update">Progres</button></a>
        <a href="apotek-inventory-admin.php"><button type="button" class="tips">Inventory</button></a>
        <a href="apotek-member-admin.php"><button type="button" class="member">Member</button></a>
        <a href="apotek-supplier-admin.php"><button type="button" class="supplier">Supplier</button></a>
        <a href="apotek-transaksi-admin.php"><button type="button" class="transaksi">Transaction</button></a>
        <a href="apotek-other-admin.php"><button type="button" class="other">Other</button></a>
        <button type="button" class="next"><</button>
        <button type="button" class="pre">></button>
        <img src="images/a.jpg" class="gambar1">
        <div class="isi">
        <img src="images/1.jpg" class="gambarisi1">
        <p class="nama-obat">Nama Obat</p>
        <p class="isi-obat">
            Jenis :<br>
            Kategori :<br>
            Komposisi :<br>
            Kegunaan :<br>
            Harga :<br>
            Cara pakai :<br>
            Produsen :</p>
        <a href="apotek-buy.php"><button type="button" class="btn-isi1">Buy</button></a>
        <button type="button" class="btn-isi1-2">Information</button>
        </div>
        <div class="isi2">
        <img src="images/1.jpg" class="gambarisi1">
        <p class="nama-obat">Nama Obat</p>
        <p class="isi-obat">
            Jenis :<br>
            Kategori :<br>
            Komposisi :<br>
            Kegunaan :<br>
            Harga :<br>
            Cara pakai :<br>
            Produsen :
            </p>
        <button type="button" class="btn-isi1">Buy</button>
        <button type="button" class="btn-isi1-2">Information</button></div>
        <div class="isi3">
        <img src="images/1.jpg" class="gambarisi1">
        <p class="nama-obat">Nama Obat</p>
        <p class="isi-obat">
            Jenis :<br>
            Kategori :<br>
            Komposisi :<br>
            Kegunaan :<br>
            Harga :<br>
            Cara pakai :<br>
            Produsen :
            </p>
        <button type="button" class="btn-isi1">Buy</button>
        <button type="button" class="btn-isi1-2">Information</button></div>
        <div class="isi4">
        <img src="images/1.jpg" class="gambarisi1">
        <p class="nama-obat">Nama Obat</p>
        <p class="isi-obat">
            Jenis :<br>
            Kategori :<br>
            Komposisi :<br>
            Kegunaan :<br>
            Harga :<br>
            Cara pakai :<br>
            Produsen :
            </p>
        <button type="button" class="btn-isi1">Buy</button>
        <button type="button" class="btn-isi1-2">Information</button></div>
        <div class="isi">
        <img src="images/1.jpg" class="gambarisi1">
        <p class="nama-obat">Nama Obat</p>
        <p class="isi-obat">
            Jenis :<br>
            Kategori :<br>
            Komposisi :<br>
            Kegunaan :<br>
            Harga :<br>
            Cara pakai :<br>
            Produsen :
            </p>
        <button type="button" class="btn-isi1">Buy</button>
        <button type="button" class="btn-isi1-2">Information</button></div>
        <div class="isi2">
        <img src="images/1.jpg" class="gambarisi1">
        <p class="nama-obat">Nama Obat</p>
        <p class="isi-obat">
            Jenis :<br>
            Kategori :<br>
            Komposisi :<br>
            Kegunaan :<br>
            Harga :<br>
            Cara pakai :<br>
            Produsen :
            </p>
        <button type="button" class="btn-isi1">Buy</button>
        <button type="button" class="btn-isi1-2">Information</button></div>
        <div class="isi3">
        <img src="images/1.jpg" class="gambarisi1">
        <p class="nama-obat">Nama Obat</p>
        <p class="isi-obat">
            Jenis :<br>
            Kategori :<br>
            Komposisi :<br>
            Kegunaan :<br>
            Harga :<br>
            Cara pakai :<br>
            Produsen :
            </p>
        <button type="button" class="btn-isi1">Buy</button>
        <button type="button" class="btn-isi1-2">Information</button></div>
        <div class="isi4">
        <img src="images/1.jpg" class="gambarisi1">
        <p class="nama-obat">Nama Obat</p>
        <p class="isi-obat">
            Jenis :<br>
            Kategori :<br>
            Komposisi :<br>
            Kegunaan :<br>
            Harga :<br>
            Cara pakai :<br>
            Produsen :
            </p>
        <button type="button" class="btn-isi1">Buy</button>
        <button type="button" class="btn-isi1-2">Information</button></div>
        <div class="isi">
        <img src="images/1.jpg" class="gambarisi1">
        <p class="nama-obat">Nama Obat</p>
        <p class="isi-obat">
            Jenis :<br>
            Kategori :<br>
            Komposisi :<br>
            Kegunaan :<br>
            Harga :<br>
            Cara pakai :<br>
            Produsen :
            </p>
        <button type="button" class="btn-isi1">Buy</button>
        <button type="button" class="btn-isi1-2">Information</button></div>
        <div class="isi2">
        <img src="images/1.jpg" class="gambarisi1">
        <p class="nama-obat">Nama Obat</p>
        <p class="isi-obat">
            Jenis :<br>
            Kategori :<br>
            Komposisi :<br>
            Kegunaan :<br>
            Harga :<br>
            Cara pakai :<br>
            Produsen :
            </p>
        <button type="button" class="btn-isi1">Buy</button>
        <button type="button" class="btn-isi1-2">Information</button></div>
        <div class="isi3">
        <img src="images/1.jpg" class="gambarisi1">
        <p class="nama-obat">Nama Obat</p>
        <p class="isi-obat">
            Jenis :<br>
            Kategori :<br>
            Komposisi :<br>
            Kegunaan :<br>
            Harga :<br>
            Cara pakai :<br>
            Produsen :
            </p>
        <button type="button" class="btn-isi1">Buy</button>
        <button type="button" class="btn-isi1-2">Information</button></div>
        <div class="isi4">
        <img src="images/1.jpg" class="gambarisi1">
        <p class="nama-obat">Nama Obat</p>
        <p class="isi-obat">
            Jenis :<br>
            Kategori :<br>
            Komposisi :<br>
            Kegunaan :<br>
            Harga :<br>
            Cara pakai :<br>
            Produsen :
            </p>
        <button type="button" class="btn-isi1">Buy</button>
        <button type="button" class="btn-isi1-2">Information</button></div>
        </div>
        <div class="container3">
        <p class="judulc1">Komentar Anda Membantu Kami</p>
        <form>
        <input type="text" class="nama" placeholder="Masukkan Nama" required>
        <input type="text" class="email" placeholder="Masukkan Email" required>
        <textarea class="komentar" placeholder="Isi Komentar" required></textarea>
        <button type="reset" class="reset">Reset</button>
        <button type="button" class="kirim">Send</button></form>
        </div>
        <div class="container4">
        <p class="judulc1">Komentar Masuk</p></div>
            <div class="container5">
                <p>Kesehatan Anda</p>
                <p>Lebih Penting dari</p>
                <p>Gemerlapnya Dunia</p>
            </div>
        <div class="footer">
        <div class="logo2">
        <img src="images/apotek.png" class="img-logo2">
        </div>
        <div class="ket-membeli">
        <p class="ket">Informasi Membeli</p><br>
        Pembelian obat dapat melalui rekening / credit card / Paypal / Bitcoin<br>
        Pembeli wajib mengisi form pembelian<br>
        Pembayaran dapat dilakukan setengah atau seluruhnya<br>
        Pelunasan pembayaran selambat - lambatnya 24 jam setelah 
        barang sampai tujuan<br>
        Apabila barang belum sampai dalam kurun waktu max 2 hari
        pengembalian uang akan dilakukan dalam kurun waktu 24 jam<br>
        Biaya pengiriman ditanggung pembeli
        </div>
        <div class="ket-member">
        <p class="ket">informasi Member</p><br>
        Setiap member mendapatkan diskon pembelian sesuai dengan kategorinya<br>
        Transaksi member dapat melalui rekening / credit card / Paypal / Bitcoin / member card<br>
        Member wajib membayar tagihan setiap 3 bulan sesuai ketentuan yang berlaku & kategorinya<br>
        Member dapat kehilangan lisence anggotanya (lihat di ketentuan member)<br>
        Setiap viewer dapat menjadi member dengan mengisi form dan administrasi<br>
        Member dapat beralih menjadi supplier dengan ketentuan yang berlaku<br>
        Untuk info lebih lengkap lihat di ketentuan member
        </div>
        <div class="ket-suplier">
        <p class="ket">informasi Supplier</p><br>
        Setiap supplier wajib mengikuti ketentuan yang ada<br>
        Supplier mendapat kentungan 30% dari total penjulan<br>
        Viewers atau member dapat menjadi supplier dengan mengisi form dan administrasi<br>
        Supplier dapat kehilangan lisence-nya (lihat di ketentuan supplier)<br>
        Supplier tidak dipungut tagihan seperti member<br>
        Supplier tidak kehilangan hak-haknya untuk membeli <br>
        Untuk info lebih lengkap lihat di ketentuan supplier
        </div>
        <button type="button" class="btn-bawah">About Us</button>
        <button type="button" class="btn-bawah">Support</button>
        <button type="button" class="btn-bawah">Blog</button>
        <button type="button" class="btn-bawah">Pres</button>
        <button type="button" class="btn-bawah">Privacy</button>
        <button type="button" class="btn-bawah">Terms</button>
        <button type="button" class="btn-bawah">Language</button>
        <button type="button" class="btn-bawah1">&copy;NicoLahara</button>
        </div>
    </body>
</html>