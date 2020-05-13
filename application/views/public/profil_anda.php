

												<p class="">Hi <b><?php echo $user['nama']?>..</b> selamat data di okiklan.com, silahkan pastikan profil anda sesuai dibawah ini.</p>

												<form id="form_profile_anda">
								                    <input type="hidden" name="id_pengguna" id="id_pengguna" value="<?php echo $user['id_pengguna']?>">
								                    
								                    <div class="form-group">
								                        <label class="control-label">email</label>
								                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $user['email']?>">
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">nama</label>
								                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $user['nama']?>">
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
								                        <input type="text" class="form-control nomor" name="no_rekening" id="no_rekening" value="<?php echo $user['no_rekening']?>">
								                    </div>
								                    <div class="form-group">
								                    	<?php $tgl_lahir = $user['tgl_lahir']=="0000-00-00"?"1980-01-01":$user['tgl_lahir'];?>
								                        <label class="control-label">tgl_lahir</label>
								                        <input type="text" class="form-control datepicker" name="tgl_lahir" id="tgl_lahir" value="<?php echo $tgl_lahir?>">
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">jenis_kelamin</label>
								                        <select type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $user['jenis_kelamin']?>">
								                            <option value="L">L</option>
								                            <option value="P">P</option>
								                        </select>
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">no_hp</label>
								                        <input type="text" class="form-control nomor" name="no_hp" id="no_hp" value="<?php echo $user['no_hp']?>">
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">alamat</label>
								                        <textarea type="text" class="form-control" name="alamat" id="alamat"><?php echo $user['alamat']?>
								                        </textarea>
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">ktp</label>
								                        <input type="text" class="form-control nomor" name="ktp" id="ktp" value="<?php echo $user['ktp']?>">
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">npwp</label>
								                        <input type="text" class="form-control nomor" name="npwp" id="npwp" value="<?php echo $user['npwp']?>">
								                    </div>
								                    <div class="form-group">
								                        <label class="control-label">password</label>
								                        <input type="password" class="form-control" name="password" id="password" value="<?php echo $user['password']?>">
								                    </div>

								                    
								                    <div id="info_update_profil"></div>
								                    <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
								                </form>
