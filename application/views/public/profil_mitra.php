
<?php
$is_kosong=false;
if($user['perusahaan']=="" || $user['nama_jelas_perusahaan']=="" || $user['alamat']=="" || $user['nama_bank']=="" || $user['no_rekening']=="" || $user['no_hp']=="" || $user['ktp']=="" || $user['npwp']=="" || $user['file_akta_situ']=="")
{
	$is_kosong=true;
}

if($is_kosong==true)
{
	$class="alert-warning";
	$judul="Anda harus melengkapi data perusahaan";
}else{
	$class="alert-success";
	$judul="Data perusahaan";
	
}
?>

<p class="">Hi <b><?php echo $user['nama']?>..</b> selamat data di okiklan.com, silahkan pastikan profil anda sesuai dibawah ini.</p>

<form id="form_profile_mitranya">
    <input type="hidden" name="id_pengguna" id="id_pengguna" value="<?php echo $user['id_pengguna']?>">
    <div class="row">
    	<div class="col-sm-6">
	    <div class="form-group">
	        <label class="control-label">email</label>
	        <input type="email" class="form-control" name="email" id="email" value="<?php echo $user['email']?>">
	    </div>
	    <div class="form-group">
	        <label class="control-label">nama</label>
	        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $user['nama']?>">
	    </div>

    <div class="form-group">
        <label class="control-label">password</label>
        <input type="password" class="form-control" name="password" id="password" value="<?php echo $user['password']?>">
    </div>
		</div>
    
    <div class="col-sm-6 alert <?php echo($class)?>">
    	<b><?php echo $judul?></b>
    <div class="form-group">
        <label class="control-label">perusahaan</label>
        <input type="text" class="form-control" name="perusahaan" id="perusahaan" value="<?php echo $user['perusahaan']?>" required>
    </div>
    <div class="form-group">
        <label class="control-label">Nama Pemilik Perusahaan</label>
        <input type="text" class="form-control" name="nama_jelas_perusahaan" id="nama_jelas_perusahaan" value="<?php echo $user['nama_jelas_perusahaan']?>" required>
    </div>

    <div class="form-group">
        <label class="control-label">alamat Perusahaan</label>
        <textarea type="text" class="form-control" name="alamat" id="alamat" required><?php echo $user['alamat']?>	</textarea>
    </div>

    <div class="form-group">
        <label class="control-label">nama_bank</label>
        <select type="text" class="form-control" name="nama_bank" id="nama_bank" value="<?php echo $user['nama_bank']?>">
            <?php 
                foreach ($this->m_util->all_bank()->result() as $bank) {
                    echo "<option value='$bank->nama'>$bank->nama</option>";
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label class="control-label">no_rekening</label>
        <input type="text" class="form-control nomor" name="no_rekening" id="no_rekening" value="<?php echo $user['no_rekening']?>" required>
    </div>

    <div class="form-group">
        <label class="control-label">no_hp</label>
        <input type="text" class="form-control nomor" name="no_hp" id="no_hp" value="<?php echo $user['no_hp']?>" required>
    </div>
    
    <div class="form-group">
        <label class="control-label">ktp</label>        
        <input class="form-control" name="ktp" id="ktp" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" required>
        <?php
        	$link_ktp = "<a href='".base_url()."uploads/".$user['ktp']."' target='blank'>".$user['ktp']."</a>"; 
        ?>
		<div id="t4_ktp"><?php echo $link_ktp?></div>		
    </div>
    <div class="form-group">
        <label class="control-label">npwp perusahaan</label>        
        <input class="form-control" name="npwp" id="npwp" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" required>
        <?php
        	$link_npwp = "<a href='".base_url()."uploads/".$user['npwp']."' target='blank'>".$user['npwp']."</a>"; 
        ?>
		<div id="t4_npwp"><?php echo $link_npwp?></div>		
    </div>
    <div class="form-group">
        <label class="control-label">Document Legal (Akta/SITU)</label>
        <input class="form-control" name="file_akta_situ" id="file_akta_situ" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" required>
        <?php
        	$link_file_akta_situ = "<a href='".base_url()."uploads/".$user['file_akta_situ']."' target='blank'>".$user['file_akta_situ']."</a>"; 
        ?>
		<div id="t4_npwp"><?php echo $link_file_akta_situ?></div>		
    </div>
    


    
    <div id="info_update_profil"></div>
    <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>

	</div>
	</div>
</form>

<script type="text/javascript">
//di toko_anda.php
</script>