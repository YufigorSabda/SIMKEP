<?php require_once('koneksi.php');?>
<form  method=post action=simpan.php >
	<table border=0>
		<tr>
			<td colspan=2>Tanggal Masuk</td>
			<td>:</td>
			<td colspan=2><input type=date name=tgl_masuk value="2024-01-23"></td>
		</tr>
		<tr>
			<td colspan=2>Ruangan/kelas</td>
			<td>:</td>
			<td colspan=2><input type=text name=ruang onkeyup='this.value=this.value.toUpperCase()' ></td>
		</tr>
		<tr>
			<td colspan=2>No. Rekam Medis</td>
			<td>:</td>
			<td colspan=2><input type=text name=no_rekmed  size=16 maxlength=16 onkeyup='this.value=this.value.toUpperCase()'><font color=red>*</font></td>
		</tr>
		<tr>
			<td colspan=2>Diagnosa  masuk     </td>
			<td>:</td>
			<td colspan=2><input type=text name=diagnosa_masuk onkeyup='this.value = this.value.toUpperCase()'></td>
		</tr>
		<tr>
			<td colspan=5><b>A. IDENTITAS</b></td>
		</tr>
		<tr>
			<td colspan=2>1. Nama </td>
			<td>:</td>
			<td colspan=2><input type=text name=nama id=nama_pas onkeyup='this.value = this.value.toUpperCase()'><font color=red>*</font></td>
		</tr>
		<tr>
			<td colspan=2>2. Umur </td>
			<td>:</td>
			<td colspan=2><input type=number name=umur min=1 max=100 ></td>
		</tr>
		<tr>
			<td colspan=2>3. Jenis Kelamin </td>
			<td>:</td>
			<td colspan=2><select name=jkl>
							<option value='' selected>- Pilih Jenis Kelamin -</option>
		 					<option value='LAKI-LAKI' >LAKI-LAKI</option>
		 					<option value='PEREMPUAN'>PEREMPUAN</option>
		 				</select>
			</td>
		</tr>
		<tr>
			<td colspan=2>4. Agama </td>
			<td>:</td>
			<td colspan=2><select name=agama>
							<option value='' selected>- Pilih Agama -</option>
		 					<option value='ISLAM'>ISLAM</option>
		 					<option value='KRISTEN'>KRISTEN</option>
		 					<option value='KATHOLIK'>KATHOLIK</option>
		 					<option value='HINDU'>HINDU</option>
		 					<option value='BUDHA'>BUDHA</option>
		 					<option value='KONGHUCU'>KONGHUCU</option>
		 				</select></td>
		</tr>
		<tr>
			<td colspan=2>5. Suku Bangsa </td>
			<td>:</td>
			<td colspan=2><input type=text name=suku onkeyup='this.value = this.value.toUpperCase()'></td>
		</tr>
		<tr>
			<td colspan=2>6. Pendidikan </td>
			<td>:</td>
			<td colspan=2><input type=text name=pendidikan onkeyup='this.value = this.value.toUpperCase()'></td>
		</tr>
		<tr>
			<td colspan=2>7. Pekerjaan </td>
			<td>:</td>
			<td colspan=2><input type=text name=pekerjaan onkeyup='this.value = this.value.toUpperCase()'></td>
		</tr>
		<tr>
			<td colspan=2>8. Alamat </td>
			<td>:</td>
			<td colspan=2><input type=text name=alamat onkeyup='this.value = this.value.toUpperCase()'></td>
		</tr>
		<tr>
			<td colspan=2>9. Penanggung Jawab </td>
			<td>:</td>
			<td colspan=2><input type=radio name=penanggung value='Askes' checked>Askes
					<input type=radio name=penanggung value='Astek'>Astek
					<input type=radio name=penanggung value='Jamsostek'>Jamsostek
					<input type=radio name=penanggung value='Mandiri'>Mandiri</td>
		</tr>
		<tr>
			<td colspan=5><b>B. RIWAYAT SAKIT DAN KESEHATAN</b></td>
		</tr>
		<tr>
			<td colspan=2>1. Keluhan Utama </td>
			<td>:</td>
			<td colspan=2> DP: 1, 3, 5, 8, 9, 19, 20, 22 dan 23 <br>
				<select  name=keluhan >
							<option value='' selected>.:Silahkan pilih gejala yang mewakili:.</option>
				<option value=2>Sputum berlebih</option><option value=3>Suara atau bunyi nafas Tambahan Ronchi</option><option value=4>Suara atau bunyi nafas Tambahan wheezing</option><option value=1>Batuk tidak efektif</option><option value=9>pH Arteri meningkat</option><option value=12>Suara atau bunyi nafas Tambahan wheezing</option><option value=11>Suara atau bunyi nafas Tambahan Ronchi</option><option value=10>pH Arteri menurun</option><option value=8>Takikardi</option><option value=7>PCO2 Menurun</option><option value=6>PCO2 Meningkat</option><option value=5>Dispnea</option><option value=17>Bradipnea</option><option value=21>Palpitasi</option><option value=20>Chyne-stokes</option><option value=19>Kussmaul</option><option value=18>Hiperventilasi</option><option value=16>Takipnea</option><option value=15>Fase Ekspirasi memanjang</option><option value=14>Penggunaan obat bantu pernafasan</option><option value=13>Dispnea</option><option value=28>Central Venus Presure Meningkat</option><option value=42>Capilary refill time > 3 detik</option><option value=41>Ejection Fraction</option><option value=40>Terdengar suara jantung S3 &S4</option><option value=39>Batuk</option><option value=38>Orthopnoe</option><option value=37>Paroxysmal Nocturnal Dyspnoe</option><option value=36>Sianosis</option><option value=35>Oliguria</option><option value=34>Capilary refill time > 3 detik</option><option value=33>Nadi Perifer Lemah</option><option value=31>Tekanan darah > 130atau90 mm Hg</option><option value=30>Dispnoe</option><option value=29>Hepatomegali</option><option value=27>Distensi Vena Jugularis</option><option value=26>Edema</option><option value=25>Lelah</option><option value=24>Perubahan Gambaran EKG</option><option value=23>Takikardia</option><option value=22>bradikardia</option><option value=32>Tekanan darah < 120atau80 mm Hg</option><option value=54>feces lembekataucair</option><option value=53>BAB lebih dari 3 x dalam sehari</option><option value=55>Ortopnoe</option><option value=56>Dispnoe</option><option value=57>Paroxysmal nocturnal Dispnoe</option><option value=58>Edema Anasarka</option><option value=59>edema perifer</option><option value=60>frekuensi nadi meningkat</option><option value=61>nadi terasa lemah</option><option value=62>tekanan darah menurun</option><option value=63>membran mukosa kering</option><option value=64>volume urin menurun</option><option value=65>hematokrit meningkat</option>			</select></td>
		</tr>
		<tr>
			<td colspan=3>2. Riwayat Penyakit Sekarang</td>
			<td colspan=2></td>
		</tr>
		<tr>
			<td></td>
			<td>a. Alasan di rawat di rumah sakit / perjalanan penyakit </td>
			<td>:</td>
			<td colspan=2><input type=text name=alasan onkeyup='this.value = this.value.toUpperCase()'></td>
		</tr>
		<tr>
			<td></td>
			<td>b. Factor pencetus</td>
			<td>:</td>
			<td colspan=2><input type=text name=faktor onkeyup='this.value = this.value.toUpperCase()'></td>
		</tr>
		<tr>
			<td></td>
			<td>c. Lamanya keluhan</td>
			<td>:</td>
			<td colspan=2><input type=text name=lama onkeyup='this.value = this.value.toUpperCase()'></td>
		</tr>
		<tr>
			<td></td>
			<td>d. Timbulnya keluhan </td>
			<td>:</td>
			<td colspan=2><input type=radio name=tahap checked>Bertahap
					<input type=radio name=tahap>Mendadak</td>
		</tr>
		<tr>
			<td></td>
			<td>e. Upaya yang dilakukan untuk mengatasinya</td>
			<td>:</td>
			<td colspan=2><input type=text name=upaya onkeyup='this.value = this.value.toUpperCase()'></td>
		</tr>
		<tr>
			<td colspan=3>3. Riwayat Penyakit Dahulu</td>
			<td colspan=2></td>
		</tr>
		<tr>
			<td></td>
			<td>Pemakaian Obat </td>
			<td>:</td>
			<td colspan=2><input type=radio name=berobat value='Ya' checked>Ya
					<input type=radio name=berobat value='Tidak'>Tidak</td>
		</tr>
		<tr>
			<td></td>
			<td>a. Nama Obat</td>
			<td>:</td>
			<td colspan=2><input type=text name=obat onkeyup='this.value = this.value.toUpperCase()'></td>
		</tr>
		<tr>
			<td></td>
			<td>b. waktu penggunaan obat terakhir</td>
			<td>:</td>
			<td colspan=2><input type=text name=waktu onkeyup='this.value = this.value.toUpperCase()'></td>
		</tr>
		<tr>
			<td colspan=3>4. Riwayat atau pengalaman masalalu tentang kesehatan</td>
			<td colspan=2></td>
		</tr>
		<tr>
			<td></td>
			<td>a. penyakit yang pernah dialami</td>
			<td>:</td>
			<td colspan=2><input type=radio name=penyakit value='Ya' checked>Ya
					<input type="radio" name="penyakit" value='Tidak'>Tidak</td>
		</tr>
		<tr>
			<td></td>
			<td>b. riwayat masuk RS</td>
			<td>:</td>
			<td colspan=2><input type=radio name=rs value=Ya checked>Ya
					<input type=radio name=rs value='Tidak'>Tidak</td>
		</tr>
		<tr>
			<td></td>
			<td>c. riwayat kecelakaan</td>
			<td>:</td>
			<td colspan=2><input type=radio name=kecelakaan value='Ya' checked>Ya
					<input type=radio name=kecelakaan value='Tidak'>Tidak</td>
		</tr>
		<tr>
			<td></td>
			<td>d. Penjelasan</td>
			<td>:</td>
			<td colspan=2><textarea name=jls1 onkeyup='this.value = this.value.toUpperCase()'></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td>e.  Riwayat Alergi</td>
			<td>:</td>
			<td colspan=2><input type=radio name=alergi value='Ya' checked>Ya
					<input type=radio name=alergi value='Tidak'>Tidak</td>
		</tr>
		<tr>
			<td></td>
			<td>a) sebutkan</td>
			<td>:</td>
			<td colspan=2><textarea name='jls2' onkeyup='this.value = this.value.toUpperCase()'></textarea></td>
		</tr>
		<tr>
			<td colspan=3>5. Riwayat Kesehatan Keluarga</td>
			<td colspan=2></td>
		</tr>
		<tr>
			<td></td>
			<td>a. penyakit keturunan</td>
			<td>:</td>
			<td colspan=2><input type=text name=keturunan onkeyup='this.value = this.value.toUpperCase()'></td>
		</tr>
		<tr>
			<td></td>
			<td>b. Keterangan</td>
			<td>:</td>
			<td colspan=2><input type=text name=ket onkeyup='this.value = this.value.toUpperCase()'></td>
		</tr>
		<tr>
			<td colspan=5><b>C. POLA FUNGSI KESEHATAN (Gordon's Functional Health)</b></td>
		</tr>
		<tr>
			<td colspan=3>1. Pola/Nutrisi/Metabolik</td>
			<td colspan=2></td>
		</tr>
		<tr>
			<td></td>
			<td>a. Makan</td>
			<td>:</td>
			<td colspan=2><select  multiple=multiple name='makan[]'>
				<option value=50>BB dan PB > persentil 95 (anak < 2 Th)</option><option value=51>IMT 85-95 (Anak 2-18 Th)</option><option value=49>IMT 2 5-27ataukgataum2 (dewasa)</option><option value=52>berat badan menurun 10% dibawah BB ideal</option><option value=55>Ortopnoe</option><option value=56>Dispnoe</option><option value=57>Paroxysmal nocturnal Dispnoe</option><option value=58>Edema Anasarka</option><option value=59>edema perifer</option><option value=66>mengantuk</option><option value=71>kadar gula darah tinggi</option><option value=70>lelah&lesu</option><option value=69>kadar glukosa dalam darah atauurin rendah</option><option value=68>gangguan koordinasi</option><option value=67>pusing</option><option value=89>disfungsi regulasi endokrin</option><option value=83>kelebihan volume cairan</option><option value=88>disfungsi ginjal</option><option value=87>muntah</option><option value=86>diare</option><option value=85>efeksamping prosedur</option><option value=84>gangguan mekanisme regulasi</option><option value=82>ketidakseimbangan cairan</option><option value=90>kurang terpapar menejemen diabetes</option><option value=91>ketidaktepatan pemantauan glukosa</option><option value=92>kurang patuh rencana menejemen diabetes</option><option value=93>menejemen medikasi tidak terkontrol</option><option value=94>kehamilan</option><option value=95>periode pertumbuhan cepat</option><option value=96>stress berlebih</option><option value=97>penambahan berat badan</option><option value=98>kurang dapat menerima diagnosis</option>				</select>	</td>
		</tr>
		<tr>
			<td></td>
			<td>b. Minum</td>
			<td>:</td>
			<td colspan=2><select   multiple=multiple name='minum[]'>
				<option value=50>BB dan PB > persentil 95 (anak < 2 Th)</option><option value=51>IMT 85-95 (Anak 2-18 Th)</option><option value=49>IMT 2 5-27ataukgataum2 (dewasa)</option><option value=52>berat badan menurun 10% dibawah BB ideal</option><option value=55>Ortopnoe</option><option value=56>Dispnoe</option><option value=57>Paroxysmal nocturnal Dispnoe</option><option value=58>Edema Anasarka</option><option value=59>edema perifer</option><option value=66>mengantuk</option><option value=71>kadar gula darah tinggi</option><option value=70>lelah&lesu</option><option value=69>kadar glukosa dalam darah atauurin rendah</option><option value=68>gangguan koordinasi</option><option value=67>pusing</option><option value=89>disfungsi regulasi endokrin</option><option value=83>kelebihan volume cairan</option><option value=88>disfungsi ginjal</option><option value=87>muntah</option><option value=86>diare</option><option value=85>efeksamping prosedur</option><option value=84>gangguan mekanisme regulasi</option><option value=82>ketidakseimbangan cairan</option><option value=90>kurang terpapar menejemen diabetes</option><option value=91>ketidaktepatan pemantauan glukosa</option><option value=92>kurang patuh rencana menejemen diabetes</option><option value=93>menejemen medikasi tidak terkontrol</option><option value=94>kehamilan</option><option value=95>periode pertumbuhan cepat</option><option value=96>stress berlebih</option><option value=97>penambahan berat badan</option><option value=98>kurang dapat menerima diagnosis</option>				</select>	</td>
		</tr>
		<tr>
			<td colspan=2>2. Persepsi/penatalaksanaan Kesehatan</td>
			<td>:</td>
			<td colspan=2><select   name=persepsi>
				<option value='' selected>.:Silahkan pilih gejala yang mewakili:.</option>
				<option value=222>menanyakan masalah yang dihadapi</option><option value=223>menunjukan perilaku tidak sesuai anjuran</option><option value=224>menunjukan persepsi yang keliruterhadap masalah</option><option value=225>menjalani pemeriksaan tidak tepat</option><option value=226>menunjukan perilaku berlebih (apatis bermusuhan,agitsi , histeris)</option>				</select></td>
		</tr>
		<tr>
			<td colspan=2>3. Pola Istirahat Tidur</td>
			<td>:</td>
			<td colspan=2><select   multiple=multiple name='polatdr[]'>
				<option value=2>Sputum berlebih</option><option value=3>Suara atau bunyi nafas Tambahan Ronchi</option><option value=4>Suara atau bunyi nafas Tambahan wheezing</option><option value=1>Batuk tidak efektif</option><option value=115>mengeluh sulit menggerakan extremitas</option><option value=116>kekuatan otot menurun</option><option value=117>rentan gerak rom menurun</option><option value=118>nyeri saat bergerak</option><option value=119>enggan melakukan pergerakan</option><option value=122>mengeluh tidak puas tidur</option><option value=125>mengeluh kemampuan beraktifitas menurun</option><option value=124>mengewluh istirahat tidak cukup</option><option value=123>mengeluh pola tidur erubah</option><option value=121>mengeluh sulit terjaga</option><option value=120>mengeluh sulit tidur</option><option value=126>mengeluh lelah</option><option value=127>dispnoe saat dan setelah aktifitas</option><option value=128>merasa lemah</option><option value=129>frekuensi jantung meningkat lebih 20%</option><option value=130>tekanan darah meningkat 20% dari kondisi istirahat</option><option value=131>gambaran EKG Aritmia saatatausetelah aktifitas</option><option value=132>gambaran EKG aiskemia</option><option value=133>sianosis</option>				</select></td>
		</tr>
		<tr>
			<td colspan=2>4. Pola Aktivitas dan latihan</td>
			<td>:</td>
			<td colspan=2><select   multiple=multiple name='polalat[]'>
				<option value=2>Sputum berlebih</option><option value=3>Suara atau bunyi nafas Tambahan Ronchi</option><option value=4>Suara atau bunyi nafas Tambahan wheezing</option><option value=1>Batuk tidak efektif</option><option value=115>mengeluh sulit menggerakan extremitas</option><option value=116>kekuatan otot menurun</option><option value=117>rentan gerak rom menurun</option><option value=118>nyeri saat bergerak</option><option value=119>enggan melakukan pergerakan</option><option value=120>mengeluh sulit tidur</option><option value=125>mengeluh kemampuan beraktifitas menurun</option><option value=124>mengewluh istirahat tidak cukup</option><option value=123>mengeluh pola tidur erubah</option><option value=122>mengeluh tidak puas tidur</option><option value=121>mengeluh sulit terjaga</option><option value=133>sianosis</option><option value=132>gambaran EKG aiskemia</option><option value=131>gambaran EKG Aritmia saatatausetelah aktifitas</option><option value=130>tekanan darah meningkat 20% dari kondisi istirahat</option><option value=128>merasa lemah</option><option value=127>dispnoe saat dan setelah aktifitas</option><option value=126>mengeluh lelah</option><option value=129>frekuensi jantung meningkat lebih 20%</option><option value=215>menolak melakukan perawatan diri</option><option value=216>tidak mampu mandi</option><option value=217>tidak mampu berpakaian</option><option value=218>tidak mampu makan</option><option value=219>tidak mampu ke toilet</option><option value=220>tidak mampu berhias</option><option value=221>minat melakukan perwatan diri berkurang</option><option value=228>nyeri</option><option value=231>hematoma</option><option value=230>kemerahan</option><option value=229>perdarahan</option><option value=227>kerusakan jaringan atau nlapisan kulit</option><option value=238>kejang</option><option value=239>sinkop</option><option value=240>vertigo</option><option value=241>gangguan penglihatan</option><option value=242>gangguan pendengaran</option><option value=243>penyakit parkinson</option><option value=244>hipotensi</option><option value=245>kelainan nervus vestibularis</option><option value=246>retardasi mental</option>				</select></td>
		</tr>		
		<tr>
			<td colspan=2>5. Pola Eliminasi</td>
			<td>:</td>
			<td colspan=2><select   multiple=multiple name='polaeliminasi[]'>
				<option value=54>feces lembekataucair</option><option value=53>BAB lebih dari 3 x dalam sehari</option><option value=78>prosedur pembedahan mayor</option><option value=79>luka bakar</option><option value=80>traumaatau perdarahan</option><option value=81>Aferesis</option><option value=89>disfungsi regulasi endokrin</option><option value=88>disfungsi ginjal</option><option value=87>muntah</option><option value=86>diare</option><option value=85>efeksamping prosedur</option><option value=84>gangguan mekanisme regulasi</option><option value=83>kelebihan volume cairan</option><option value=82>ketidakseimbangan cairan</option><option value=99>desakan berkemih urgensi</option><option value=100>urin menetes</option><option value=101>sering buang air kecil</option><option value=102>nocturia</option><option value=103>mengompolenurisis</option><option value=104>tidak mampu mengontrol keluar feses</option><option value=105>tidak mampu menunda defekasi</option><option value=106>feses keluar sedikit-sedikit</option><option value=107>Mengompol sebelum mencapai atau selama usaha mencapai toilet</option><option value=112>sensasi penuh pada kandung kemih</option><option value=113>disuri</option><option value=114>anuri</option>				</select></td>
		</tr>
		<tr>
			<td colspan=3> </td>
			<td colspan=2><input type=submit value=Simpan name=simpan>
		</tr>
	</table>
</form>