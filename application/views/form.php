<div class="site-form card text-center " style="width: 60rem;">
	<div class="card-body">
		<div class="site-form-header">
			<h2 class="card-title">Form Mahasiswa</h2>
			<p class="card-text">Data isian Mahasiswa FORLAP DIKTI</p>
		</div>
		<span style="color: red;">
			<center><b><?php echo $this->session->flashdata('message'); ?></b></center>
		</span>
		<form action="<?php echo base_url(); ?>index.php/Form/addMahasiswa" method="post">

			<div class="form-group">
				<label>Nama Lengkap</label>
				<input type="text" class="form-control  form-control-sm" placeholder="" name="nama_mhs" value="<?= set_value('nama_mhs'); ?>" required>
				<?php echo form_error('nama_mhs', '<small class="text-danger h6">', '</small>'); ?>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>Jurusan / Program Studi</label>
						<input type="text" class="form-control  form-control-sm" placeholder="" name="jurusan_mhs" value="<?= set_value('jurusan_mhs'); ?>" required>
						<?php echo form_error('jurusan_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>NPM</label>
						<input type="text" class="form-control  form-control-sm" placeholder="" name="npm_mhs" value="<?= set_value('npm_mhs'); ?>" onkeypress="return onlyNumber(event)" required>
						<?php echo form_error('npm_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>Tempat Lahir</label>
						<input type="text" class="form-control  form-control-sm" placeholder="" name="tempat_lahir_mhs" value="<?= set_value('tempat_lahir_mhs'); ?>" required>
						<?php echo form_error('tempat_lahir_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>Tanggal Lahir</label>
						<input type="date" class="form-control  form-control-sm" placeholder="" name="tanggal_lahir_mhs" id="datepicker" value="<?= set_value('tanggal_lahir_mhs'); ?>" required>
						<?php echo form_error('tanggal_lahir_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>Jenis Kelamin</label>
						<div class="row justify-content-center">
							<div class="col">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="jenis_kelamin_mhs" id="inlineRadio1" value="laki-laki">
									<label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
								</div>
							</div>
							<div class="col">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="jenis_kelamin_mhs" id="inlineRadio2" value="perempuan">
									<label class="form-check-label" for="inlineRadio2">Perempuan</label>
								</div>
							</div>
						</div>
						<?php echo form_error('jenis_kelamin_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>NIK / Nomor KTP</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="nik_ktp_mhs" value="<?= set_value('nik_ktp_mhs'); ?>" onkeypress="return onlyNumber(event)" required>
						<?php echo form_error('nik_ktp_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>Sekolah Asal</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="asal_sekolah_mhs" value="<?= set_value('asal_sekolah_mhs'); ?>" required>
						<?php echo form_error('asal_sekolah_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>Jurusan</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="jurusan_sekolah_mhs" value="<?= set_value('jurusan_sekolah_mhs'); ?>" required>
						<?php echo form_error('jurusan_sekolah_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Alamat Sekolah Asal</label>
				<input type="text" class="form-control form-control-sm" placeholder="" name="alamat_sekolah_mhs" value="<?= set_value('alamat_sekolah_mhs'); ?>" required>
				<?php echo form_error('alamat_sekolah_mhs', '<small class="text-danger h6">', '</small>'); ?>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-6">
						<label>Nomor STTB / Ijazah</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="nomor_sttb" value="<?= set_value('nomor_sttb'); ?>" onkeypress="return onlyNumber(event)" required>
						<?php echo form_error('nomor_sttb', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col-3">
						<label>Nilai Ijazah</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="nilai_ijazah" value="<?= set_value('nilai_ijazah'); ?>" onkeypress="return onlyNumber(event)" required>
						<?php echo form_error('nilai_ijazah', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col-3">
						<label>Nilai NEM</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="nilai_nem" value="<?= set_value('nilai_nem'); ?>" onkeypress="return onlyNumber(event)" required>
						<?php echo form_error('nilai_nem', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>NISN</label>
				<input type="text" class="form-control form-control-sm" placeholder="" name="nisn" value="<?= set_value('nisn'); ?>" onkeypress="return onlyNumber(event)" required>
				<?php echo form_error('nisn', '<small class="text-danger h6">', '</small>'); ?>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>Telepon Rumah</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="nomor_telpon_mhs" value="<?= set_value('nomor_telpon_mhs'); ?>" onkeypress="return onlyNumber(event)" required>
						<?php echo form_error('nomor_telpon_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>Nomor Handphone</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="nomor_hp_mhs" value="<?= set_value('nomor_hp_mhs'); ?>" onkeypress="return onlyNumber(event)" required>
						<?php echo form_error('nomor_hp_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>Email</label>
						<input type="email" class="form-control form-control-sm" placeholder="" name="email_mhs" value="<?= set_value('email_mhs'); ?>" required>
						<?php echo form_error('email_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>Agama</label>
						<select class="form-control form-control-sm" id="agama" name="agama_mhs" required>
							<option disabled selected value> -- Select an Option -- </option>
							<option>Islam</option>
							<option>Kristen</option>
							<option>Katholik</option>
							<option>Buddha</option>
							<option>Hindu</option>
							<option>Konghucu</option>
						</select>
						<?php echo form_error('agama_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-6">
						<label>Penerima KPS (Keluarga Perlindungan Sosial)</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="nomor_kps" value="<?= set_value('nomor_kps'); ?>" onkeypress="return onlyNumber(event)">
						<small>*Optional. Diisi jika anda penerima KPS</small>
						<?php echo form_error('nomor_kps', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col-3">
						<label>Anak Ke </label>
						<input type="number" class="form-control form-control-sm" placeholder="" name="urutan_anak" value="<?= set_value('urutan_anak'); ?>" required>
						<?php echo form_error('urutan_anak', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col-3">
						<label>Dari (Bersaudara)</label>
						<input type="number" class="form-control form-control-sm" placeholder="" name="jumlah_saudara" value="<?= set_value('jumlah_saudara'); ?>" required>
						<?php echo form_error('jumlah_saudara', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<h5>Mahasiswa Pindahan <br>atau Program Studi Lanjut</h5>
			<p class="card-text">*Jika anda Mahasiswa Pindahan/Program Studi Lanjut <br> Silahkan isi form dibawah</p>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>Perguruan Tinggi Asal</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="perguruan_tinggi_asal" value="<?= set_value('perguruan_tinggi_asal'); ?>">
						<?php echo form_error('perguruan_tinggi_asal', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>Jurusan / Program Studi</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="jurusan_asal" value="<?= set_value('jurusan_asal'); ?>">
						<?php echo form_error('jurusan_asal', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>NPM Perguruan Tinggi Asal</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="npm_asal" value="<?= set_value('npm_asal'); ?>" onkeypress="return onlyNumber(event)">
						<?php echo form_error('npm_asal', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>Tahun Tanggal Lulus</label>
						<input type="date" class="form-control form-control-sm" placeholder="" name="tahun_lulus_asal" id="datepicker" value="<?= set_value('tahun_lulus_asal'); ?>">
						<?php echo form_error('tahun_lulus_asal', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<h5>Alamat Rumah</h5>
			<div class="form-group">
				<div class="row">
					<div class="col-6">
						<label>Alamat</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="alamat_mhs" value="<?= set_value('alamat_mhs'); ?>" required>
						<?php echo form_error('alamat_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col-3">
						<label>RT</label>
						<input type="number" class="form-control form-control-sm" placeholder="" name="rt_mhs" value="<?= set_value('rt_mhs'); ?>" required>
						<?php echo form_error('rt_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col-3">
						<label>RW</label>
						<input type="number" class="form-control form-control-sm" placeholder="" name="rw_mhs" value="<?= set_value('rw_mhs'); ?>" required>
						<?php echo form_error('rw_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>Kelurahan / Desa</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="kelurahan_mhs" value="<?= set_value('kelurahan_mhs'); ?>" required>
						<?php echo form_error('kelurahan_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>Kecamatan</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="kecamatan_mhs" value="<?= set_value('kecamatan_mhs'); ?>" required>
						<?php echo form_error('kecamatan_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-9">
						<label>Kota</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="kota_mhs" value="<?= set_value('kota_mhs'); ?>" required>
						<?php echo form_error('kota_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col-3">
						<label>Kode Pos</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="kode_pos_mhs" value="<?= set_value('kode_pos_mhs'); ?>" onkeypress="return onlyNumber(event)" required>
						<?php echo form_error('kode_pos_mhs', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<h5>Orang Tua</h5>
			<h6>Ayah</h6>
			<div class="form-group">
				<label>Nama Lengkap (titel)</label>
				<input type="text" class="form-control form-control-sm" placeholder="" name="nama_ayah" value="<?= set_value('nama_ayah'); ?>" required>
				<?php echo form_error('nama_ayah', '<small class="text-danger h6">', '</small>'); ?>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>Tempat Lahir</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="tempat_lahir_ayah" value="<?= set_value('tempat_lahir_ayah'); ?>" required>
						<?php echo form_error('tempat_lahir_ayah', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>Tanggal Lahir</label>
						<input type="date" class="form-control form-control-sm" placeholder="" name="tanggal_lahir_ayah" id="datepicker" value="<?= set_value('tanggal_lahir_ayah'); ?>" required>
						<?php echo form_error('tanggal_lahir_ayah', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>NIK / Nomor KTP</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="nik_ktp_ayah" value="<?= set_value('nik_ktp_ayah'); ?>" onkeypress="return onlyNumber(event)" required>
						<?php echo form_error('nik_ktp_ayah', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>Pendidikan</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="pendidikan_ayah" value="<?= set_value('pendidikan_ayah'); ?>" required>
						<?php echo form_error('pendidikan_ayah', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Alamat Rumah Lengkap</label>
				<input type="text" class="form-control form-control-sm" placeholder="" name="alamat_ayah" value="<?= set_value('alamat_ayah'); ?>" required>
				<?php echo form_error('alamat_ayah', '<small class="text-danger h6">', '</small>'); ?>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>Pekerjaan</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="pekerjaan_ayah" value="<?= set_value('pekerjaan_ayah'); ?>" required>
						<?php echo form_error('pekerjaan_ayah', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>Penghasilan</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Rp</span>
							</div>
							<input type="text" class="form-control form-control-sm" placeholder="" name="penghasilan_ayah" value="<?= set_value('penghasilan_ayah'); ?>" onkeypress="return onlyNumber(event)" required>
						</div>
						<?php echo form_error('penghasilan_ayah', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<h6>Ibu</h6>
			<div class="form-group">
				<label>Nama Lengkap</label>
				<input type="text" class="form-control form-control-sm" placeholder="" name="nama_ibu" value="<?= set_value('nama_ibu'); ?>" required>
				<?php echo form_error('nama_ibu', '<small class="text-danger h6">', '</small>'); ?>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>Tempat Lahir</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="tempat_lahir_ibu" value="<?= set_value('tempat_lahir_ibu'); ?>" required>
						<?php echo form_error('tempat_lahir_ibu', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>Tanggal Lahir</label>
						<input type="date" class="form-control form-control-sm" placeholder="" name="tanggal_lahir_ibu" id="datepicker" value="<?= set_value('tanggal_lahir_ibu'); ?>" required>
						<?php echo form_error('tanggal_lahir_ibu', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>NIK / Nomor KTP</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="nik_ktp_ibu" value="<?= set_value('nik_ktp_ibu'); ?>" onkeypress="return onlyNumber(event)" required>
						<?php echo form_error('nik_ktp_ibu', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>Pendidikan</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="pendidikan_ibu" value="<?= set_value('pendidikan_ibu'); ?>" required>
						<?php echo form_error('pendidikan_ibu', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Alamat Rumah Lengkap</label>
				<input type="text" class="form-control form-control-sm" placeholder="" name="alamat_ibu" value="<?= set_value('alamat_ibu'); ?>" required>
				<?php echo form_error('alamat_ibu', '<small class="text-danger h6">', '</small>'); ?>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>Pekerjaan</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="pekerjaan_ibu" value="<?= set_value('pekerjaan_ibu'); ?>" required>
						<?php echo form_error('pekerjaan_ibu', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>Penghasilan</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Rp</span>
							</div>
							<input type="text" class="form-control form-control-sm" placeholder="" name="penghasilan_ibu" value="<?= set_value('penghasilan_ibu'); ?>" onkeypress="return onlyNumber(event)" required>
						</div>
						<?php echo form_error('penghasilan_ibu', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<h6>Wali</h6>
			<div class="form-group">
				<label>Nama Lengkap</label>
				<input type="text" class="form-control form-control-sm" placeholder="" name="nama_wali" value="<?= set_value('nama_wali'); ?>" required>
				<?php echo form_error('nama_wali', '<small class="text-danger h6">', '</small>'); ?>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>Tempat Lahir</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="tempat_lahir_wali" value="<?= set_value('tempat_lahir_wali'); ?>" required>
						<?php echo form_error('tempat_lahir_wali', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>Tanggal Lahir</label>
						<input type="date" class="form-control form-control-sm" placeholder="" name="tanggal_lahir_wali" id="datepicker" value="<?= set_value('tanggal_lahir_wali'); ?>" required>
						<?php echo form_error('tanggal_lahir_wali', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>NIK / Nomor KTP</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="nik_ktp_wali" value="<?= set_value('nik_ktp_wali'); ?>" onkeypress="return onlyNumber(event)" required>
						<?php echo form_error('nik_ktp_wali', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>Pendidikan</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="pendidikan_wali" value="<?= set_value('pendidikan_wali'); ?>" required>
						<?php echo form_error('pendidikan_wali', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Alamat Rumah Lengkap</label>
				<input type="text" class="form-control form-control-sm" placeholder="" name="alamat_wali" value="<?= set_value('alamat_wali'); ?>" required>
				<?php echo form_error('alamat_wali', '<small class="text-danger h6">', '</small>'); ?>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<label>Pekerjaan</label>
						<input type="text" class="form-control form-control-sm" placeholder="" name="pekerjaan_wali" value="<?= set_value('pekerjaan_wali'); ?>" required>
						<?php echo form_error('pekerjaan_wali', '<small class="text-danger h6">', '</small>'); ?>
					</div>
					<div class="col">
						<label>Penghasilan</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Rp</span>
							</div>
							<input type="text" class="form-control form-control-sm" placeholder="" name="penghasilan_wali" onkeypress="return onlyNumber(event)" value="<?= set_value('penghasilan_wali'); ?>" required>
						</div>
						<?php echo form_error('penghasilan_wali', '<small class="text-danger h6">', '</small>'); ?>
					</div>
				</div>
			</div>

			<div class="form-group">
				<button type="submit" name="submit" class="site-btn-submit btn btn-outline-primary btn-block">SUBMIT</button>
			</div>

		</form>
	</div>
</div>