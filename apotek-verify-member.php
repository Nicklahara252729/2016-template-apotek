<!DOCTYPE HTML>
<html>
    <meta charset="utf-8">
    <head>
        <title>Apotek.Com - Verify</title>
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
				width:430px;
				height:auto;
				border:solid 0px;
				margin-top:20px;
				margin: 0 auto;
				border-radius:5px;
				box-shadow:0px 0px 2px 0px  rgba(171,171,171,1);
				
			}
			.container2{
				width:1000px;
				height:auto;
				position:absolute;
				border:solid 0px;
				margin-top:20px;
				margin-left:170px;
			}
			.container3{
				width:430px;
				height:90px;
				position:absolute;
				border:solid 0px;
				margin-left:285px;
				margin-top:10px;
                border-left:solid 2px rgba(192,192,192,1);
                border-radius:0px;
				box-shadow:0px 0px 0px 0px  rgba(171,171,171,1);
                font-family: "tahoma";
                font-size: 13px;
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
			}
            .notice:hover{
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
				width:195px;
				height:200px;
				border-radius:5px;
                margin-top: 5px;
                margin-left: 10px;
                position: absolute;
                background-position: center;
                background-repeat: no-repeat;
                border: solid 2px rgba(235,235,235,1);
                background-image:url(images/ajax-loader.gif);
			}
            
            .gambarisi2{
				width:195px;
				height:200px;
				border-radius:5px;
                margin-top: 5px;
                margin-left: 220px;
                border: solid 2px rgba(235,235,235,1);
                background-repeat: no-repeat;
                background-position: center;
                background-image:url(images/ajax-loader.gif);
			}
            
			.btn-isi1{
				width:46%;
				height:40px;
				margin-left:7px;
				border:0px;
				background:#0874BF;
				margin-bottom:10px;
				font-family:"tahoma";
				font-size:15px;
				color:#fff;
				border-radius:5px;
				margin-top:10px;
			}
			.btn-isi1:hover{
				border:solid 1px #0874BF;
				transition:all 0.2s;
				background:#fff;
				color:#0874BF;
			}
			.btn-isi1-2{
				width:46%;
				height:40px;
				margin-left:7px;
                margin-right: 2px;  
				border:0px;
				background: rgba(0,51,102,1);
				margin-bottom:0px;
				font-family:"tahoma";
				font-size:15px;
				color:#fff;
				border-radius:5px;
				margin-bottom:10px;
			}
			.btn-isi1-2:hover{
				border:solid 1px #0874BF;
				transition:all 0.2s;
				background:#fff;
				color:#0874BF;
			}
			.nama-obat{
				font-family:"tahoma";
				font-size:15px;
				text-align:center;
				position:absolute;
				margin-top:-30px;
				margin-top:-30px;
				margin-left:40px;
			}
            .nama-obat2{
				font-family:"tahoma";
				font-size:15px;
				text-align:center;
				position:absolute;
				margin-top:-30px;
				margin-left:160px;
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
            .judulc2{
				border-bottom:solid 2px dodgerblue;
				font-family:"tahoma";
				font-size:15px;
				color:#0874BF;
				text-align:center;
				padding-bottom:5px;
				margin-top:0px;
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
				margin-top:520px;
				background:#0874BF;
			}
			.nama{
				width:95%;
				height:40px;
				border:0px;
				border-left:solid 2px rgba(192,192,192,1);
				font-family:"tahoma";
				font-size:13px;
				margin-top:10px;
				margin-left:7px;
				text-align:center;
				background: rgba(235,235,235,1);
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
			.cek{
				margin-left:10px;
			}
            .cek2{
				margin-left:100px;
			}
            .tgl{
            width: 70px;
            height: 25px;
            font-family: "tahoma";
            font-size: 13px;
            border: 0px;
            margin-left: 382px;
            text-align: center;
            background: rgba(235,235,235,1);
                margin-top: 20px;
                margin-bottom: -5px;
            
        }
            
            .nb{
                margin-left: 10px;
                margin-top: 15px;
                width: 96%;
            }
            .sc{
                font-family: "tahoma";
                font-size: 13px;
                width: 100%;
                text-align: center;
                height: 50px;
                border-radius:0px 0px 5px 5px;
                margin-top: 150px;
                margin-left: 0px;
                color: #fff;
                background: rgba(000,000,000,.4);
            }
            .sc2{
                padding-top: 15px;
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
        <a href="apotek-member-home.php"><button type="button" class="home">Home</button></a>
        <a href="apotek-update-member.php"><button type="button" class="update">Update</button></a>
        <a href="apotek-tips-member.php"><button type="button" class="tips">Tips & Trick</button></a>
        <a href="apotek-help-member.php"><button type="button" class="help">Help</button></a>
        <a href="apotek-other-member.php"><button type="button" class="other">Other</button></a>
        <a href="apotek-notice-member.php"><button type="button" class="notice">Notification</button></a>
        <div class="container1">
        <p class="judulc1">Verifikasi</p>
            <div class="gambarisi1"><div class="sc"><p class="sc2">Screenshoot data pembelian</p></div></div>
            
            <div class="gambarisi2"><div class="sc"><p class="sc2">Screenshoot tanda pembayaran</p></div></div>
            
            
        <form>
        <input type="text" class="nama" placeholder="Kode Verifikasi" required>
        
        <a href="apotek-buy-member.php"><button type="button" class="btn-isi1-2">Back</button></a>
        <button type="button" class="btn-isi1">Verify</button>
            </form>
        </div>
            <div class="container3">
                <p class="nb">Terima Kasih telah mempercayakan kami, semoga kesehatan dan kondisi anda cepat membaik. Dan tetap gunakan jasa kami sebagai apotik terlengkap</p>
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