<?php
	$e = mysqli_fetch_array(mysqli_query("SELECT a.psNISN,a.psNama,
															 b.*,
															 c.*,
															 d.*,
															 e.*,
															 f.* 
															FROM pendaftar a 
															LEFT JOIN n_bing b ON a.psNISN=b.psNISN
															LEFT JOIN n_indo c ON a.psNISN=c.psNISN
															LEFT JOIN n_ipa d ON a.psNISN=d.psNISN
															LEFT JOIN n_ips e ON a.psNISN=e.psNISN
															LEFT JOIN n_mm f ON a.psNISN=f.psNISN
													WHERE a.psNISN='$_GET[id]'"));
	if ($e[psNISN]==""){
		echo "<script>window.location=('?page=pendaftar')</script>";  
    	exit();
	}
?>
<div class="row-fluid">
<div class="span12">
<!-- WIDGET -->
<div class="widget-box">
<div class="widget-header widget-header-flat"><h2 class="smaller">Nilai Rapor</h2></div>
<div class="widget-body">
<div class="widget-main">
	<!-- FORM -->
	<form method="POST" action="#" class="form-horizontal">

		<hr><h4>
			NISN : <?php echo $e[psNISN];?><br>
			Nama : <?php echo $e[psNama];?>
		</h4><hr>
		<input type="hidden" name="nisn" value="<?php echo $e[psNISN];?>">
		<div class="control-group">
			<label class="control-label" for="bhs">Bahasa Indonesia</label>
			<div class="controls">
				<input onblur="rata(this.name,'rbhs')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 1" 
				class="input-mini" type="text" id="bhs" name="bhs[]" value="<?php echo $e[indo1];?>" required> 
				<input onblur="rata(this.name,'rbhs')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 2" 
				class="input-mini" type="text" id="bhs" name="bhs[]" value="<?php echo $e[indo2];?>" required> 
				<input onblur="rata(this.name,'rbhs')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 3" 
				class="input-mini" type="text" id="bhs" name="bhs[]" value="<?php echo $e[indo3];?>" required> 
				<input onblur="rata(this.name,'rbhs')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 4" 
				class="input-mini" type="text" id="bhs" name="bhs[]" value="<?php echo $e[indo4];?>" required> 
				<input onblur="rata(this.name,'rbhs')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 5" 
				class="input-mini" type="text" id="bhs" name="bhs[]" value="<?php echo $e[indo5];?>" required> = 
				<input onblur="rata(this.name,'rbhs')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Rata-Rata" 
				class="input-mini" type="text" id="rbhs" name="rbhs" value="<?php echo $e[indoRata];?>" readonly required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ingg">Bahasa Inggris</label>
			<div class="controls">
				<input onblur="rata(this.name,'ringg')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 1" 
				class="input-mini" type="text" id="ingg" name="ingg[]" value="<?php echo $e[bing1];?>" required> 
				<input onblur="rata(this.name,'ringg')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 2" 
				class="input-mini" type="text" id="ingg" name="ingg[]" value="<?php echo $e[bing2];?>" required> 
				<input onblur="rata(this.name,'ringg')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 3" 
				class="input-mini" type="text" id="ingg" name="ingg[]" value="<?php echo $e[bing3];?>" required> 
				<input onblur="rata(this.name,'ringg')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 4" 
				class="input-mini" type="text" id="ingg" name="ingg[]" value="<?php echo $e[bing4];?>" required> 
				<input onblur="rata(this.name,'ringg')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 5" 
				class="input-mini" type="text" id="ingg" name="ingg[]" value="<?php echo $e[bing5];?>" required> = 
				<input onblur="rata(this.name,'ringg')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Rata-Rata" 
				class="input-mini" type="text" id="ringg" name="ringg" value="<?php echo $e[bingRata];?>" readonly required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="mm">Matematika</label>
			<div class="controls">
				<input onblur="rata(this.name,'rmm')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 1" 
				class="input-mini" type="text" id="mm" name="mm[]" value="<?php echo $e[mm1];?>" required> 
				<input onblur="rata(this.name,'rmm')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 2" 
				class="input-mini" type="text" id="mm" name="mm[]" value="<?php echo $e[mm2];?>" required> 
				<input onblur="rata(this.name,'rmm')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 3" 
				class="input-mini" type="text" id="mm" name="mm[]" value="<?php echo $e[mm3];?>" required> 
				<input onblur="rata(this.name,'rmm')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 4" 
				class="input-mini" type="text" id="mm" name="mm[]" value="<?php echo $e[mm4];?>" required> 
				<input onblur="rata(this.name,'rmm')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 5" 
				class="input-mini" type="text" id="mm" name="mm[]" value="<?php echo $e[mm5];?>" required> = 
				<input onblur="rata(this.name,'rmm')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Rata-Rata" 
				class="input-mini" type="text" id="rmm" name="rmm" value="<?php echo $e[mmRata];?>" readonly required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ipa">IPA</label>
			<div class="controls">
				<input onblur="rata(this.name,'ripa')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 1" 
				class="input-mini" type="text" id="ipa" name="ipa[]" value="<?php echo $e[ipa1];?>" required> 
				<input onblur="rata(this.name,'ripa')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 2" 
				class="input-mini" type="text" id="ipa" name="ipa[]" value="<?php echo $e[ipa2];?>" required> 
				<input onblur="rata(this.name,'ripa')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 3" 
				class="input-mini" type="text" id="ipa" name="ipa[]" value="<?php echo $e[ipa3];?>" required> 
				<input onblur="rata(this.name,'ripa')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 4" 
				class="input-mini" type="text" id="ipa" name="ipa[]" value="<?php echo $e[ipa4];?>" required> 
				<input onblur="rata(this.name,'ripa')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 5" 
				class="input-mini" type="text" id="ipa" name="ipa[]" value="<?php echo $e[ipa5];?>" required> = 
				<input onblur="rata(this.name,'ripa')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Rata-Rata" 
				class="input-mini" type="text" id="ripa" name="ripa" value="<?php echo $e[ipaRata];?>" readonly required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ips">IPS</label>
			<div class="controls">
				<input onblur="rata(this.name,'rips')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 1" 
				class="input-mini" type="text" id="ips" name="ips[]" value="<?php echo $e[ips1];?>" required> 
				<input onblur="rata(this.name,'rips')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 2" 
				class="input-mini" type="text" id="ips" name="ips[]" value="<?php echo $e[ips2];?>" required> 
				<input onblur="rata(this.name,'rips')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 3" 
				class="input-mini" type="text" id="ips" name="ips[]" value="<?php echo $e[ips3];?>" required> 
				<input onblur="rata(this.name,'rips')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 4" 
				class="input-mini" type="text" id="ips" name="ips[]" value="<?php echo $e[ips4];?>" required> 
				<input onblur="rata(this.name,'rips')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Semseter 5" 
				class="input-mini" type="text" id="ips" name="ips[]" value="<?php echo $e[ips5];?>" required> = 
				<input onblur="rata(this.name,'rips')" data-rel="tooltip" data-placement="top" data-original-title="Nilai Rata-Rata" 
				class="input-mini" type="text" id="rips" name="rips" value="<?php echo $e[ipsRata];?>" readonly required>
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
	$nisn = $_POST[nisn];

	$bhs = $_POST[bhs];
	$rbhs = $_POST[rbhs];

	$ingg = $_POST[ingg];
	$ringg = $_POST[ringg];

	$mm = $_POST[mm];
	$rmm = $_POST[rmm];

	$ipa = $_POST[ipa];
	$ripa = $_POST[ripa];

	$ips = $_POST[ips];
	$rips = $_POST[rips];

	$q1 = mysqli_query("UPDATE n_indo SET indo1='$bhs[0]',indo2='$bhs[1]',indo3='$bhs[2]',
													 indo4='$bhs[3]',indo5='$bhs[4]',indoRata='$rbhs',indoStatus='1'
												WHERE psNISN='$nisn'");

	$q2 = mysqli_query("UPDATE n_bing SET bing1='$ingg[0]',bing2='$ingg[1]',bing3='$ingg[2]',
													 bing4='$ingg[3]',bing5='$ingg[4]',bingRata='$ringg',bingStatus='1'
												WHERE psNISN='$nisn'");

	$q3 = mysqli_query("UPDATE n_mm SET mm1='$mm[0]',mm2='$mm[1]',mm3='$mm[2]',
												  mm4='$mm[3]',mm5='$mm[4]',mmRata='$rmm',mmStatus='1'
												WHERE psNISN='$nisn'");

	$q4 = mysqli_query("UPDATE n_ipa SET ipa1='$ipa[0]',ipa2='$ipa[1]',ipa3='$ipa[2]',
												   ipa4='$ipa[3]',ipa5='$ipa[4]',ipaRata='$ripa',ipaStatus='1'
												WHERE psNISN='$nisn'");

	$q5 = mysqli_query("UPDATE n_ips SET ips1='$ips[0]',ips2='$ips[1]',ips3='$ips[2]',
												   ips4='$ips[3]',ips5='$ips[4]',ipsRata='$rmm',ipsStatus='1'
												WHERE psNISN='$nisn'");

	if ($q1 && $q2 && $q3 && $q4 && $q5){
		echo "<script>window.alert('Data Tersimpan');
            window.location=('?page=pendaftar')</script>";  
	}

}
?>

<script type="text/javascript">
	function rata(x,y){
		var arr = document.getElementsByName(x);
		var tot=0;
		for(var i=0;i<arr.length;i++){
	  		if(parseFloat(arr[i].value))
	      	tot += parseFloat(arr[i].value);
		}
		var avg = parseFloat(tot/(arr.length));
		document.getElementById(y).value = avg;
	}
</script>