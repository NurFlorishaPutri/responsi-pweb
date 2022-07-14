<!DOCTYPE html>
<html>
<head>
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			font-family: times;
			padding: 10px;
			background: #f1f1f1;
			background-image: url("bgcoklat.jpg");
		}

		.header {
			padding: 30px;
			text-align: center;
			background: saddlebrown
		}

		.header h1 {
			font-size: 50px
		}

		.topnav {
			overflow: hidden;
			background-color: wheat;
		}

		.topnav a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		.topnav a:hover {
			background-color: moccasin;
			color: black;
		}

		.leftcolumn {
			float: left;
			width: 25%;
			background-color: lemonchiffon;
			padding-left: 20px
		}

		.centercolumn {
			float: left;
			width: 50%;
			background-color: lemonchiffon;
			padding-left: 20px
		}

		.rightcolumn {
			float: left;
			width: 25%;
			background-color: lemonchiffon;
			padding-left: 20px
		}

		.fakeimg {
			background-color: beige;
			width: 75%;
		}

		.card {
			background-color: burlywood;
			padding: 20px;
			margin-top: 20px;
		}

		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		.footer {
			padding: 20px;
			text-align: center;
			background-color: #ddd;
			margin-top: 20px;
		}

		.leftcolumn, .rightcolumn {
			width: 100%
			padding0;
		}
	}

	    .topnav a {
	    	float: none;
	    	width: 100%
	    }
	}
	</style>
</head>
<body>

	<div class="header" style="background-color: burlywood;">
		<h1 style="font-family: serif;">SELAMAT DATANG DI SUBY WEBSITE <3 </h1>
	</div>

	<div class="rightcolumn">
			<div class="card" style="background-color:cornsilk">
				<h2 style="font-family: Times New roman">Halo semuanyaa namaku echaaa </h2>
				<h4>Saya Kuliah Di Universitas Ahmad Dahlan</h4>
				<div>
					<img src="putri.jpeg" width="300px">
				</div>
			</div>
		</div>

	<div class="row">
		<div class="centercolumn">
			<div class="card" style="background-color: floralwhite">
				<h2 align="center" style="font-family: perpetua;">TUGAS AKHIR PEMROGRAMAN WEB</h2><br><br>

				<div style="background-color: tan">
					<img src="tugujogja.png" width="600px" height="350px">
					<div align="center"><strong><font size="7" face="courier New, courier,mono">Isi Data Diri</font></strong></div>
		            <form name="nama" method="post" action="prosess.php">
			        <table width="58%" border="0" align="center">
				    <tr>
					    <td><h4>Nama lengkap</h4></td>
					    <td><input style="background-color:peru;" type="text" name="nama" id="nama"></td>
				    </tr>
				    <tr>
					    <td><h4>NIM</h4></td>
					    <td><input style="background-color:peru;" type="text" name="nim" id="nim"></td>
				    </tr>
				    <tr>
					    <td><h4>E-mail</h4></td>
					    <td><input style="background-color:peru;" type="text" name="email" id="email"></td>
				    </tr>
				    <tr>
					<td><h4>Jurusan</h4></td>
					<td><select style="background-color:peru;" name="jurusan" id="jurusan">
						<option>Informatika</option>
						<option>Kedokteran</option>
						<option>Sistem Informasi</option>
						<option>Bahasa Arab</option>
						<option>Teknik Elektro</option>
					</select></td>
				</tr>
				<tr>
					<td>&nbsp</td>
					<td><input style="background-color:peachpuff;" type="submit" name="submit" value="kirim" id="kirim"><input style="background-color:peachpuff;" type="reset" name="reset" value="batal"></td>
				</tr>
				
			</table>
		</form>
		<br>
		<div align="center"><strong><a href="lihatt.php">::Lihat Data Diri::</a></strong></div>
				</div>
			</div>

			<div class="card">
				<h1><center style="font-family:didot ;">KALKULATOR</center></h1>
			<table border="1" cellspacing="10" align="center" cellpadding="">
                <tr>
                    <td colspan="4" id="inputLabel">0</td>
                </tr>

                <tr>
                    <td colspan="3"><button onclick="pushBtn(this);">Reset</button></td>
                    <td><button onclick="pushBtn(this);">/</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">7</button></td>
                    <td><button onclick="pushBtn(this);">8</button></td>
                    <td><button onclick="pushBtn(this);">9</button></td>
                    <td><button onclick="pushBtn(this);">*</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">4</button></td>
                    <td><button onclick="pushBtn(this);">5</button></td>
                    <td><button onclick="pushBtn(this);">6</button></td>
                    <td><button onclick="pushBtn(this);">-</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">1</button></td>
                    <td><button onclick="pushBtn(this);">2</button></td>
                    <td><button onclick="pushBtn(this);">3</button></td>
                    <td><button onclick="pushBtn(this);">+</button></td>
                </tr>

                <tr>
                   <td colspan="2"><button onclick="pushBtn(this);">0</button></td>
                   <td><button onclick="pushBtn(this);">.</button></td>
                   <td><button onclick="pushBtn(this);">=</button></td>
                </tr>
                </table>
                <script type="text/javascript">
                var inputLabel = document.getElementById('inputLabel');
                function pushBtn(obj) {
                    var pushed = obj.innerHTML
                    if (pushed == '=') {
                    // Calculate
                    inputLabel.innerHTML = eval(inputLabel.innerHTML);
                    } else if (pushed == 'Reset') {
                    // All Clear
                    inputLabel.innerHTML = '0';
                    } else {
                        if (inputLabel.innerHTML == '0') {
                               inputLabel.innerHTML = pushed;  
                    } else {
                        inputLabel.innerHTML += pushed;   
                    }
                }
            }
            </script>
            </div>

			<div class="card" style="background-color: papayawhip">
				<h1><center>KALENDER</center></h1>
				<?php
                $hari	= date("d");
                $bulan	= date ("m");
                $tahun	= date("Y");
                $jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
                ?>
                <table style="border:2px solid #00000f " align="center" width="10%" height="35%">
                <tr style="background-color: papayawhip;">
                    <td align=center><font color="black">Minggu</font></td>
                    <td align=center>Senin</td>
                    <td align=center>Selasa</td>
                    <td align=center>Rabu</td>
                    <td align=center>Kamis</td>
                    <td align=center>Jumat</td>
                    <td align=center>Sabtu</td>
                </tr>
                <?php
                $s=date ("w", mktime (0,0,0,$bulan,1,$tahun));
                for ($ds=1;$ds<=$s;$ds++) {
                    echo "<td></td>";
                }
 
                for ($d=1;$d<=$jumlahhari;$d++) {
	                if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
		                echo "<tr>"; 
		            }
                $warna="#000000";
 
                if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna="almond"; }
                echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>"; 
                if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
                }
                echo '</table>'; 
				?>
		    </div>
		</div>

		<div class="rightcolumn">
			<div class="card" style="background-color: wheat">
				<h2 style="font-family: Times New Roman">Tentang aku</h2>
				<p>Halo semuanya namaku Nur Florisha Putri NIM 2100018126 Kelas C <br><br>
                  Saya Asli Kepulauan Riau Dan Kuliah Di Universitas Ahmad Dahlan</p>
			</div>

			<div class="card" style="background-color: wheat">
		    <h3>Follow</h3>
		    <img src="ig.jpg" width="45px">
		    <a href="https://www.instagram.com/16_echa/">16_echa</a><br><br>
		</div>
</div>   
     <div class="footer" style="background-color: moccasin;">
     	<p></p>
     </div>

</body>
</html>j