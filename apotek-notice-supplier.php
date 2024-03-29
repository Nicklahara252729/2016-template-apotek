<!DOCTYPE HTML>
<html>
    <meta charset="utf-8">
    <head>
        <title>Notification Supplier</title>
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
				width:700px;
				height:auto;
				border:solid 0px;
				margin-top:20px;
				margin: 0 auto;
				border-radius:5px;
			}
			.container2{
				width:1000px;
				height:auto;
				position:absolute;
				border:solid 0px;
				margin-top:20px;
				margin-left:170px;
			}
			
			.container4{
				width:300px;
				height:570px;
				position:absolute;
				border:solid 0px;
				margin-left:10px;
				margin-top:970px;
			}
			.home{
				width:80px;
				height:30px;
				border:0px;
				color:#0874BF;
				font-family:"tahoma";
				font-size:14px;
				background:#fff;
                margin-left: 140px;
			}
			.home:hover{
				transition:all 0.1s;
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
			.notice{
				width:80px;
				height:30px;
				border:0px;
				color:#0874BF;
				font-family:"tahoma";
				font-size:14px;
				background:#fff;
				margin-left:10px;
                border-bottom:solid 2px dodgerblue;
			}
            .inventory{
				width:80px;
				height:30px;
				border:0px;
				color:#0874BF;
				font-family:"tahoma";
				font-size:14px;
				background:#fff;
				margin-left:10px;
			}
            .inventory:hover{
				transition:all 0.1s;
				border-bottom:solid 2px dodgerblue;
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
				margin-left:334px;
				margin-right:20px;
			}
			.next:hover{
				transition:all 0.2s;
				background:#fff;
				border:solid 2px #0874BF;
				color:#0874BF;
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
				height:300px;
				border:solid 0px;
				position:absolute;
				margin-top:800px;
				background:#0874BF;
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
				height:20px;
				font-family:"tahoma";
				font-size:15px;
				background:#0874BF;
				color:#fff;
				border:solid 0px;
				margin-top:65px;
			}
			.btn-bawah1{
				width:90px;
				height:20px;
				font-family:"tahoma";
				font-size:15px;
				background:#0874BF;
				color:#fff;
				border:0px;
				margin-top:65px;
				margin-left:710px;
			}
			.ket-membeli{
				width:340px;
				height:70%;
				border:solid 0px;
				margin-left:240px;
				font-family:"tahoma";
				position:absolute;
				font-size:13px;
				color:#fff;
			}
			.ket-member{
				width:340px;
				height:70%;
				border:solid 0px;
				margin-left:600px;
				font-family:"tahoma";
				position:absolute;
				font-size:13px;
				color:#fff;
			}
			.ket-suplier{
				width:340px;
				height:70%;
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
            .notice1{
                width: 100%;
                height: 100px;
                background: #F0F0F2;
                margin-bottom: 10px;
                margin-top: 10px;
                border-left: solid 3px #C8C9CB;
            }
            .img-notice{
                width: 100px;
                height: 100px;
                position: absolute;
            }
            .p-notice{
                border: solid 0px;
                margin-left: 110px;
                position: absolute;
                width: 580px;
                height: 90px;
                margin-top: 5px;
                font-family: "tahoma";
                font-size: 13px;
            }
        </style>
    </head>
    <body>
        <header>
        <img src="images/apotek.png" class="logo">
            <input type="text" class="cari" placeholder="Cari Nama Obat">
            <button type="button" class="btn-cari">Cari</button>
            <a href="apotek-member.php"><button type="button" class="btn-member">Nama</button></a>
            <a href="apotek-suplier.php"><button type="button" class="btn-suplier">Log Out</button></a>
        </header>
        <div class="container2">
        <a href="apotek-supplier-home.php"><button type="button" class="home">Home</button></a>
        <a href="apotek-update-supplier.php"><button type="button" class="update">Update</button></a>
        <a href="apotek-tips-supplier.php"><button type="button" class="tips">Tips & Trick</button></a>
        <a href="apotek-help-supplier.php"><button type="button" class="help">Help</button></a>
        <a href="apotek-other-supplier.php"><button type="button" class="other">Other</button></a>
        <a href="apotek-notice-supplier.php"><button type="button" class="notice">Notification</button></a>
        <a href="apotek-inventory-supplier.php"><button type="button" class="inventory">Inventory</button></a>
        <div class="container1">
        <p class="judulc1">Notification(6)</p>
            <div class="notice1">
                <img src="images/10%20(2).jpg" class="img-notice"><p class="p-notice"><b>Your Notification</b><br>Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br>Praktikan Nico Lahara<br>Pembimbing Roy Hendro </p>
            </div>
            <div class="notice1">
                <img src="images/10%20(2).jpg" class="img-notice"><p class="p-notice"><b>Your Notification</b><br>Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br>Praktikan Nico Lahara<br>Pembimbing Roy Hendro </p>
            </div>
            <div class="notice1">
                <img src="images/10%20(2).jpg" class="img-notice"><p class="p-notice"><b>Your Notification</b><br>Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br>Praktikan Nico Lahara<br>Pembimbing Roy Hendro </p>
            </div>
            <div class="notice1">
                <img src="images/10%20(2).jpg" class="img-notice"><p class="p-notice"><b>Your Notification</b><br>Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br>Praktikan Nico Lahara<br>Pembimbing Roy Hendro </p>
            </div>
            <div class="notice1">
                <img src="images/10%20(2).jpg" class="img-notice"><p class="p-notice"><b>Your Notification</b><br>Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br>Praktikan Nico Lahara<br>Pembimbing Roy Hendro </p>
            </div>
            <div class="notice1">
                <img src="images/10%20(2).jpg" class="img-notice"><p class="p-notice"><b>Your Notification</b><br>Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br>Praktikan Nico Lahara<br>Pembimbing Roy Hendro </p>
            </div>
        </div>
            
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