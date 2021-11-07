<!DOCTYPE HTML>
<html>
    <meta charset="utf-8">
    <head>
        <title>Apotek.Com - Tips & Triks</title>
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
			.home{
				width:80px;
				height:30px;
				border:0px;
				color:#0874BF;
				font-family:"tahoma";
				font-size:14px;
				background:#fff;
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
			.home:hover{
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
                border-bottom:solid 2px dodgerblue;
			}
			.update:hover{
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
				margin-left:238px;
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
				height:370px;
				margin-top:2px;
			}
			.isi{
				width:500px;
				height:100px;
				border:solid 0px;
				position:absolute;
				margin-top:10px;
			}
            .isi5{
				width:500px;
				height:100px;
				border:solid 0px;
				position:absolute;
				margin-top:-45px;
			}
            .isi6{
				width:500px;
				height:100px;
				border:solid 0px;
				position:absolute;
				margin-top:-100px;
			}
            .isi7{
				width:500px;
				height:100px;
				border:solid 0px;
				position:absolute;
				margin-top:-155px;
			}
            .isi8{
				width:500px;
				height:100px;
				border:solid 0px;
				position:absolute;
				margin-top:-210px;
			}
            .isi9{
				width:500px;
				height:100px;
				border:solid 0px;
				position:absolute;
				margin-top:-265px;
			}
            .isi10{
				width:500px;
				height:100px;
				border:solid 0px;
				position:absolute;
				margin-top:-158px;
			}
            .isi11{
				width:500px;
				height:100px;
				border:solid 0px;
				position:absolute;
				margin-top:-50px;
			}
            .isi12{
				width:500px;
				height:100px;
				border:solid 0px;
				position:absolute;
				margin-top:60px;
			}
			.isi2{
				width:500px;
				height:40px;
				border:solid 0px;
				position:absolute;
				margin-top:10px;
			}
            .isi3{
				width:500px;
				height:40px;
				border:solid 0px;
				margin-left:500px;
				margin-top:10px;
			}
			.isi4{
				width:500px;
				height:150px;
				border:solid 0px;
				margin-left:500px;
				margin-top:10px;
			}
			.gambarisi1{
				width:220px;
				height:150px;
				border-radius:5px;
			}
            .gambarisi2{
				width:150px;
				height:100px;
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
				font-weight:700;
                width: 340px;
                height: 100px;
                position: absolute;
                color: black;
                padding-left: 5px;
                margin-left: 150px;
			}
            .penjelas{
				font-family:"tahoma";
				font-size:15px;
				font-weight:700;
                width: 275px;
                height: 150px;
                position: absolute;
                color: black;
                border: solid 0px;
                padding-left: 5px;
                margin-left: 220px;
			}
            .nama-obat2{
				font-family:"tahoma";
				font-size:15px;
				text-align:center;
				font-weight:700;
                width: 498px;
                height: 40px;
                position: absolute;
                background: rgba(000,000,000,.5);
                color: white;
                border-right: solid 3px white;
                margin-top: 0px;
			}
            .nama-obat1{
				font-family:"tahoma";
				font-size:15px;
				text-align:center;
				font-weight:700;
                width: 100px;
                height: 20px;
                position: absolute;
                margin-left: 130px;
                color: white;
                margin-top: -25px;
                border-radius: 0px 0px 8px 8px;
			}
            .nm1{
                margin-top: 0px;
            }
            .nm2{
                font-size: 13px;
                font-weight: normal;
            }
            .nm3{
                font-size: 19px;
                font-weight: normal;
                margin-top: 8px;
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
				margin-top:1460px;
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
            .samping{
                width: 310px;
                height: 80px;
                border: solid 0px;
                position: absolute;
                margin-left: 685px;
                margin-top: 2px;
                background:rgba(235,235,235,1);
            }
            .samping2{
                width: 310px;
                height: 80px;
                border: solid 0px;
                position: absolute;
                margin-left: 685px;
                margin-top: 92px;
                background:rgba(235,235,235,1);
            }
            .samping3{
                width: 310px;
                height: 80px;
                border: solid 0px;
                position: absolute;
                margin-left: 685px;
                margin-top: 182px;
                background:rgba(235,235,235,1);
            }
            .samping4{
                width: 310px;
                height: 80px;
                border: solid 0px;
                position: absolute;
                margin-left: 685px;
                margin-top: 272px;
                background:rgba(235,235,235,1);
            }
            .sp1{
                width: 100px;
                height: 80px;
                position: absolute;
            }
            .sp2{
                width: 205px;
                height: 80px;
                border: solid 0px;
                font-family: "tahoma";
                font-size: 13px;
                margin-left: 105px;
            }
            .caritutor{
                width: 300px;
                height: 40px;
                border: 0px;
                background: #F0F0F2;
                position: absolute;
                margin-top: 370px;
                margin-left: -520px;
                font-family: "tahoma";
                font-size: 13px;
                text-align: center;
            }
            .btn-caritutor{
                position: absolute;
                margin-top: 370px;
                margin-left: -220px;
                width: 70px;
                height: 40px;
                border: 0px;
                font-family: "tahoma";
                font-size: 14px;
                background: #7ABDE8;
                color: white;
            }
            .btn-caritutor:hover{
                background: #5F1F7D;
                transition: all 0.3s;
                color: white;
            }
            .share{
                position: absolute;
                margin-top: 370px;
                width: 150px;
                font-family: "tahoma";
                font-size: 13px;
                height: 40px;
                border: 0px;
                margin-left: -138px;
                background: #017DC3;
                color: white;
            }
            .share:hover{
                background: #5F1F7D;
                transition: all 0.3s;
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
        <a href="apotek-supplier-home.php"><button type="button" class="home">Home</button></a>
        <a href="apotek-update-supplier.php"><button type="button" class="update">Update</button></a>
        <a href="apotek-tips-supplier.php"><button type="button" class="tips">Tips & Trick</button></a>
        <a href="apotek-help-supplier.php"><button type="button" class="help">Help</button></a>
        <a href="apotek-other-supplier.php"><button type="button" class="other">Other</button></a>
        <a href="apotek-notice-supplier.php"><button type="button" class="notice">Notification</button></a>
        <a href="apotek-inventory-supplier.php"><button type="button" class="inventory">Inventory</button></a>
        <button type="button" class="next"><</button>
        <button type="button" class="pre">></button>
        <input type="text"  class="caritutor" placeholder="Cari Tips Triks Tutorial">
            <button type="button" class="btn-caritutor">Cari</button>
            <button type="button" class="share">Ingin Berbagi Tips ?</button>
        <img src="images/29.jpg" class="gambar1">
        <div class="isi2">
        
        <div class="nama-obat2"><p class="nm3">Articles</p>
            </div>
        
        </div>
        
        <div class="isi3">
        
        <div class="nama-obat2"><p class="nm3">Videos</p>
            </div>
        </div>
        <div class="isi">
            <div class="nama-obat"><p class="nm1">How to basic</p>
            <p class="nm2">Shared by Nico Lahara<br>Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br> Pembimbing Roy Hendro</p>
            </div>
        <img src="images/1.jpg" class="gambarisi2">
        </div>
        
        <div class="isi4">
            <div class="penjelas"><p class="nm1">Video Name</p>
            <p class="nm2">Upload 3 weeks ago<br>Shared by Nico Lahara<br>1,999,999,999 Views<br>Description : Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br> Pembimbing Roy Hendro</p></div>
        <img src="images/2.jpg" class="gambarisi1">
        <div class="nama-obat1">04:16  </div>
        </div>
            <div class="isi5">
                <div class="nama-obat"><p class="nm1">How to basic</p>
            <p class="nm2">Shared by Nico Lahara<br>Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br> Pembimbing Roy Hendro</p>
            </div>
        <img src="images/3.jpg" class="gambarisi2">
        </div>
        
        <div class="isi4">
            <div class="penjelas"><p class="nm1">Video Name</p>
            <p class="nm2">Upload 3 weeks ago<br>Shared by Nico Lahara<br>1,999,999,999 Views<br>Description : Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br> Pembimbing Roy Hendro</p></div>
        <img src="images/4.jpg" class="gambarisi1">
        <div class="nama-obat1">07:08</div>
        </div>
             <div class="isi6">
                <div class="nama-obat"><p class="nm1">How to basic</p>
            <p class="nm2">Shared by Nico Lahara<br>Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br> Pembimbing Roy Hendro</p>
            </div>
        <img src="images/5.jpg" class="gambarisi2">
        </div>
        
        <div class="isi4">
            <div class="penjelas"><p class="nm1">Video Name</p>
            <p class="nm2">Upload 3 weeks ago<br>Shared by Nico Lahara<br>1,999,999,999 Views<br>Description : Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br> Pembimbing Roy Hendro</p></div>
        <img src="images/6.jpg" class="gambarisi1">
        <div class="nama-obat1">16:00</div>
        </div>
             <div class="isi7">
                <div class="nama-obat"><p class="nm1">How to basic</p>
            <p class="nm2">Shared by Nico Lahara<br>Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br> Pembimbing Roy Hendro</p>
            </div>
        <img src="images/7.jpg" class="gambarisi2">
        </div>
        
        <div class="isi4">
            <div class="penjelas"><p class="nm1">Video Name</p>
            <p class="nm2">Upload 3 weeks ago<br>Shared by Nico Lahara<br>1,999,999,999 Views<br>Description : Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br> Pembimbing Roy Hendro</p></div>
        <img src="images/8.jpg" class="gambarisi1">
        <div class="nama-obat1">10:00</div>
        </div>
            <div class="isi8">
                <div class="nama-obat"><p class="nm1">How to basic</p>
            <p class="nm2">Shared by Nico Lahara<br>Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br> Pembimbing Roy Hendro</p>
            </div>
        <img src="images/9.jpg" class="gambarisi2">
        </div>
        
        <div class="isi4">
            <div class="penjelas"><p class="nm1">Video Name</p>
            <p class="nm2">Upload 3 weeks ago<br>Shared by Nico Lahara<br>1,999,999,999 Views<br>Description : Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br> Pembimbing Roy Hendro</p></div>
        <img src="images/10.jpg" class="gambarisi1">
        <div class="nama-obat1">09:12</div>
        </div>
            <div class="isi9">
                <div class="nama-obat"><p class="nm1">How to basic</p>
            <p class="nm2">Shared by Nico Lahara<br>Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br> Pembimbing Roy Hendro</p>
            </div>
        <img src="images/11.jpg" class="gambarisi2">
        </div>
            <div class="isi10">
                <div class="nama-obat"><p class="nm1">How to basic</p>
            <p class="nm2">Shared by Nico Lahara<br>Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br> Pembimbing Roy Hendro</p>
            </div>
        <img src="images/16.jpg" class="gambarisi2">
        </div>
        <div class="isi11">
                <div class="nama-obat"><p class="nm1">How to basic</p>
            <p class="nm2">Shared by Nico Lahara<br>Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br> Pembimbing Roy Hendro</p>
            </div>
        <img src="images/18.jpg" class="gambarisi2">
        </div>
            <div class="isi12">
                <div class="nama-obat"><p class="nm1">How to basic</p>
            <p class="nm2">Shared by Nico Lahara<br>Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br> Pembimbing Roy Hendro</p>
            </div>
        <img src="images/17.jpg" class="gambarisi2">
        </div>
        <div class="isi4">
            <div class="penjelas"><p class="nm1">Video Name</p>
            <p class="nm2">Upload 3 weeks ago<br>Shared by Nico Lahara<br>1,999,999,999 Views<br>Description : Tugas pemodelan perangkat lunak, rancangan desain user interface sistem penjualan obat.<br> Pembimbing Roy Hendro</p></div>
        <img src="images/15.jpg" class="gambarisi1">
        <div class="nama-obat1">08:54</div>
        </div>
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