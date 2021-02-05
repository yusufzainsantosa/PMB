<?php
	$e = mysqli_fetch_array(mysqli_query("SELECT * FROM pendaftar WHERE psNISN='$_GET[id]'"));
	if ($e[psNISN]==""){
		echo "<script>window.location=('?page=pendaftar')</script>";  
    	exit();
	}
?>
<div class="row-fluid">
<div class="span12">
<!-- WIDGET -->
<div class="widget-box">
<div class="widget-header widget-header-flat"><h2 class="smaller">Biodata Pendaftar</h2></div>
<div class="widget-body">
<div class="widget-main">
	<!-- FORM -->
	<form method="POST" action="#" class="form-horizontal">

		<hr><h4>A. Data Calon Mahasiswa</h4><hr>

		<div class="control-group">
			<label class="control-label" for="nisn">NISN - No.Peserta</label>
			<div class="controls">
				<input class="input span2" type="text" id="nisn" name="nisn" value="<?php echo $e[psNISN];?>" placeholder="NISN" maxlength="10" readonly required>
				- <input class="input span2" type="text" id="no_peserta" name="no_peserta" value="<?php echo $e[psNoPeserta];?>" readonly required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="nama">Nama</label>
			<div class="controls">
				<input class="input span4" type="text" id="nama" name="nama" value="<?php echo $e[psNama];?>" placeholder="Nama" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="t4l">Tempat/Tanggal Lahir</label>
			<div class="controls">
				<input class="input span4" type="text" id="t4l" name="t4l" value="<?php echo $e[psT4Lahir];?>" placeholder="Tempat Lahir" required>
				/ <input class="span2 date-picker" id="tgll" name="tgll" type="text" data-date-format="yyyy-mm-dd" value="<?php echo $e[psTglahir];?>" required />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="jk">Jenis Kelamin</label>
			<div class="controls">
				<select class="span2" name="jk" id="jk">
					<?php
						if ($e[psJK]=="L"){
							echo "<option value='L' selected>Laki-Laki</option>
									<option value='P'>Perempuan</option>";
						}else{
							echo "<option value='P' selected>Perempuan</option>
									<option value='L'>Laki-Laki</option>";
						}
					?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="alamat">Alamat</label>
			<div class="controls">
				<input class="input span5" type="text" id="alamat" name="alamat" value="<?php echo $e[psAlamat];?>" placeholder="Alamat" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="telp">No. Telp/Email</label>
			<div class="controls">
				<input class="input span3" type="text" id="telp" name="telp" value="<?php echo $e[psTelp];?>" placeholder="No. Telp/HP" required>
				/ <input class="input span4" type="email" id="email" name="email" value="<?php echo $e[psEmail];?>" placeholder="Email" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="agama">Agama</label>
			<div class="controls">
				<select class="span2" name="agama" id="agama">
					<?php
						$arAgama = array(
							'Islam' => "Islam",
							'Protestan' => "Protestan",
							'Katolik' => "Katolik",
							'Budha' => "Budha",
							'Hindu' => "Hindu"
						);
						foreach ($arAgama as $db => $isi) {
							if ($e[psAgama]==$db){
								echo "<option value='$db' selected>$isi</option>";
							}else{
								echo "<option value='$db'>$isi</option>";
							}
						}
					?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="goldarah">Golongan Darah</label>
			<div class="controls">
				<select class="span1" name="goldarah" id="goldarah">
					<?php
						$arGD = array(
							'A' => "A",
							'B' => "B",
							'O' => "O",
							'AB' => "AB"
						);
						foreach ($arGD as $db => $isi) {
							if ($e[psGDarah]==$db){
								echo "<option value='$db' selected>$isi</option>";
							}else{
								echo "<option value='$db'>$isi</option>";
							}
						}
					?>
				</select>
			</div>
		</div>

		<hr><h4>B. Data Pendidikan dan Asal Sekolah</h4><hr>

		<div class="control-group">
			<label class="control-label" for="pendidikan">Pendidikan / Jurusan</label>
			<div class="controls">
				<input class="input span3" type="text" id="pendidikan" name="pendidikan" value="<?php echo $e[psPendidikan];?>" placeholder="Ex : SMA / MA / SMK" required>
				/ <input class="input span4" type="text" id="jurusan" name="jurusan" value="<?php echo $e[psJurusan];?>" placeholder="Ex : IPA / IPS / BAHASA" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="tahunlulus">Tahun Lulus</label>
			<div class="controls">
				<input class="input span2" type="text" id="tahunlulus" name="tahunlulus" value="<?php echo $e[psTahunLulus];?>" placeholder="Tahun Lulus" maxlength="4" minlength="4" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="namasekolah">Nama Sekolah</label>
			<div class="controls">
				<input class="input span4" type="text" id="namasekolah" name="namasekolah" value="<?php echo $e[psNamaSekolah];?>" placeholder="Nama Sekolah" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="alamatsekolah">Alamat Sekolah</label>
			<div class="controls">
				<input class="input span5" type="text" id="alamatsekolah" name="alamatsekolah" value="<?php echo $e[psAlamatSekolah];?>" placeholder="Alamat Sekolah" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="telpsekolah">No. Telp Sekolah</label>
			<div class="controls">
				<input class="input span3" type="text" id="telpsekolah" name="telpsekolah" value="<?php echo $e[psTelpSekolah];?>" placeholder="No. Telp Sekolah" required>
			</div>
		</div>

		<hr><h4>C. Data Orang Tua</h4><hr>

		<div class="control-group">
			<label class="control-label" for="namaot">Nama Orang Tua</label>
			<div class="controls">
				<input class="input span4" type="text" id="namaot" name="namaot" value="<?php echo $e[psNamaOT];?>" placeholder="Nama Orang Tua/Wali" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="pekerjaanot">Pekerjaan Orang Tua</label>
			<div class="controls">
				<input class="input span3" type="text" id="pekerjaanot" name="pekerjaanot" value="<?php echo $e[psPekerjaanOT];?>" placeholder="Pekerjaan Orang Tua/Wali" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="alamatot">Alamat Orang Tua</label>
			<div class="controls">
				<input class="input span5" type="text" id="alamatot" name="alamatot" value="<?php echo $e[psAlamatOT];?>" placeholder="Alamat Orang Tua/Wali" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="telpot">No. Telp Orang Tua</label>
			<div class="controls">
				<input class="input span3" type="text" id="telpot" name="telpot" value="<?php echo $e[psTelpOT];?>" placeholder="Telp Orang Tua" required>
			</div>
		</div>
		
		<hr><h4>D. PILIHAN JURUSAN/PROGRAM STUDI YANG DIINGINKAN</h4><hr>

		<div class="control-group">
			<label class="control-label" for="pil1">Pilihan 1</label>
			<div class="controls">
				<select class="span4" name="pil1" id="pil1">
					<?php
						$qp = mysqli_query("SELECT * FROM ms_prodi");
						while($pr=mysqli_fetch_array($qp)){
							if ($e[psPil1]==$pr[prId]){
								echo "<option value='$pr[prId]' selected>$pr[prNama]</option>";
							}else{
								echo "<option value='$pr[prId]'>$pr[prNama]</option>";
							}
						}
					?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="pil2">Pilihan 2</label>
			<div class="controls">
				<select class="span4" name="pil2" id="pil2">
					<?php
						$qp = mysqli_query("SELECT * FROM ms_prodi");
						while($pr=mysqli_fetch_array($qp)){
							if ($e[psPil2]==$pr[prId]){
								echo "<option value='$pr[prId]' selected>$pr[prNama]</option>";
							}else{
								echo "<option value='$pr[prId]'>$pr[prNama]</option>";
							}
						}
					?>
				</select>
			</div>
		</div>

		<hr><h4>D. LAIN-LAIN</h4><hr>

		<div class="control-group">
			<label class="control-label" for="keinginan">Keinginan Mengikuti Pendidikan di ATIM</label>
			<div class="controls">
				<select class="span3" name="keinginan" id="keinginan">
					<?php
						$arIngin = array(
							'A' => "Sangat Minat Sekali",
							'B' => "Sangat Minat",
							'C' => "Minat",
							'D' => "Kurang Minat"
						);
						foreach ($arIngin as $db => $isi) {
							if ($e[psKeinginanMasuk]==$db){
								echo "<option value='$db' selected>$isi</option>";
							}else{
								echo "<option value='$db'>$isi</option>";
							}
						}
					?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="jalur">Jalur Penerimaan</label>
			<div class="controls">
				<select class="span3" name="jalur" id="jalur">
					<?php
						$arJalur = array(
							'A' => "Tes",
							'B' => "Bebas Tes/Rekomendasi"
						);
						foreach ($arJalur as $db => $isi) {
							if ($e[psJalurPenerimaan]==$db){
								echo "<option value='$db' selected>$isi</option>";
							}else{
								echo "<option value='$db'>$isi</option>";
							}
						}
					?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ukuranjas">Ukuran Jas</label>
			<div class="controls">
				<select class="span1" name="ukuranjas" id="ukuranjas">
					<?php
						$arJas = array(
							'XL' => "XL",
							'L' => "L",
							'M' => "M",
							'S' => "S"
						);
						foreach ($arJas as $db => $isi) {
							if ($e[psUkuranJas]==$db){
								echo "<option value='$db' selected>$isi</option>";
							}else{
								echo "<option value='$db'>$isi</option>";
							}
						}
					?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="info">Info ATIM diperoleh dari</label>
			<div class="controls">
				<input class="input span5" type="text" id="info" name="info" value="<?php echo $e[psInfoATIM];?>" placeholder="Informasi ATIM diperoleh dari" required>
			</div>
		</div>


		<div class="form-actions">
			<button class="btn btn-info" type="submit" name="simpan">
				<i class="icon-save bigger-110"></i>Simpan
			</button>
			<a class="btn" href="?page=pendaftar">
				<i class="icon-undo bigger-110"></i>Batal
			</a>
		</div>

	</form>
	<!-- FORM -->
</div>
</div>
</div>	
<!-- WIDGET -->
</div>
</div>	
<?php
if(isset($_POST[simpan])){

	$qbio = mysqli_query("UPDATE pendaftar SET
								psNama='$_POST[nama]',
								psT4Lahir='$_POST[t4l]',
								psTglahir='$_POST[tgll]',
								psJK='$_POST[jk]',
								psAlamat='$_POST[alamat]',
								psTelp='$_POST[telp]',
								psEmail='$_POST[email]',
								psAgama='$_POST[agama]',
								psGDarah='$_POST[goldarah]',
								psPendidikan='$_POST[pendidikan]',
								psJurusan='$_POST[jurusan]',
								psTahunLulus='$_POST[tahunlulus]',
								psNamaSekolah='$_POST[namasekolah]',
								psAlamatSekolah='$_POST[alamatsekolah]',
								psTelpSekolah='$_POST[telpsekolah]',
								psNamaOT='$_POST[namaot]',
								psPekerjaanOT='$_POST[pekerjaanot]',
								psAlamatOT='$_POST[alamatot]',
								psTelpOT='$_POST[telpot]',
								psPil1='$_POST[pil1]',
								psPil2='$_POST[pil2]',
								psKeinginanMasuk='$_POST[keinginan]',
								psJalurPenerimaan='$_POST[jalur]',
								psUkuranJas='$_POST[ukuranjas]',
								psInfoATIM='$_POST[info]',
								psSt_Bio='1'
								WHERE psNISN='$_POST[nisn]'");

	if ($qbio){
		echo "<script>window.alert('Data Tersimpan');
            window.location=('?page=pendaftar')</script>";  
	}
}
?>