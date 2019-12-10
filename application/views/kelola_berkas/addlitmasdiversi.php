<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

	<div class="row">

		<div class="flash-data-danger" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

		<div class="col-lg-8">

			<?= form_error('nama_klien', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
			<?= form_error('pengirim', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
			<?= form_error('no_surat_masuk', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
			<?= form_error('tgl_surat_masuk', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
			<?= form_error('perihal', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

			<div class="card">
				<div class="card-header">
					Add Litmas Diversi
				</div>
				<div class="card-body">
					<blockquote class="blockquote mb-0">
						<div class="stepwizard">
							<div class="stepwizard-row setup-panel">
								<div class="stepwizard-step">
									<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
									<p>Klien</p>
								</div>
								<div class="stepwizard-step">
									<a href="#step-2" type="button" class="btn btn-default btn-circle"
									   disabled="disabled">2</a>
									<p>Ayah </br>Kandung</p>
								</div>
								<div class="stepwizard-step">
									<a href="#step-3" type="button" class="btn btn-default btn-circle"
									   disabled="disabled">3</a>
									<p>Ibu </br>Kandung</p>
								</div>
								<div class="stepwizard-step">
									<a href="#step-4" type="button" class="btn btn-default btn-circle"
									   disabled="disabled">4</a>
									<p>Wali</p>
								</div>
								<div class="stepwizard-step">
									<a href="#step-5" type="button" class="btn btn-default btn-circle"
									   disabled="disabled">5</a>
									<p>Suami</br>Istri</p>
								</div>
								<div class="stepwizard-step">
									<a href="#step-6" type="button" class="btn btn-default btn-circle"
									   disabled="disabled">6</a>
									<p>Pegawai</p>
								</div>
								<div class="stepwizard-step">
									<a href="#step-7" type="button" class="btn btn-default btn-circle"
									   disabled="disabled">7</a>
									<p>Surat</p>
								</div>
								<div class="stepwizard-step">
									<a href="#step-8" type="button" class="btn btn-default btn-circle"
									   disabled="disabled">8</a>
									<p>Selesai</p>
								</div>
							</div>
						</div>
						<?php echo form_open_multipart() ?>
						<!--						step 1-->
						<div class="row setup-content" id="step-1">
							<div class="col">
								<div class="col-md-12">
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="nama_klien">Nama</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="nama_klien"
													   name="nama_klien"
													   placeholder="Nama Klien" value="<?= set_value('nama_klien') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="tempat_lahir_klien">Tempat Lahir</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="tempat_lahir_klien"
													   name="tempat_lahir_klien" placeholder="Tempat Lahir Klien"
													   value="<?= set_value('tempat_lahir_klien') ?>">
											</div>
										</div>
									</div>
									<div class="form-group"> <!-- Date input -->
										<div class="row">
											<div class="col-5">
												<label for="tanggal_lahir_klien">Tanggal Lahir</label>
											</div>
											<div class="col">
												<input class="form-control" id="tanggal_lahir_klien"
													   name="tanggal_lahir_klien"
													   placeholder="Tanggal Lahir" autocomplete="off" type="text"/
												value="<?= set_value('tanggal_lahir_klien') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="jenis_kelamin_klien">Jenis Kelamin</label>
											</div>
											<div class="col">
												<select class="form-control" id="jenis_kelamin_klien" name="jenis_kelamin_klien">
													<option value="laki-laki">laki-laki</option>
													<option value="perempuan">perempuan</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="agama_klien">Agama</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="agama_klien"
													   name="agama_klien"
													   placeholder="Agama Klien" value="<?= set_value('agama_klien') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="suku_klien">Suku</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="suku_klien" name="suku_klien"
													   placeholder="Suku" value="<?= set_value('suku_klien') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="bangsa_klien">Bangsa</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="bangsa_klien"
													   name="bangsa_klien"
													   placeholder="Bangsa" value="<?= set_value('bangsa_klien') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="warga_negara_klien">Warga Negara</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="warga_negara_klien"
													   name="warga_negara_klien" placeholder="Warga Negara"
													   value="<?= set_value('warga_negara_klien') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="pendidikan_terakhir_klien">Pendidikan Terakhir</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="pendidikan_terakhir_klien"
													   name="pendidikan_terakhir_klien" placeholder="Pendidikan Terakhir"
													   value="<?= set_value('pendidikan_terakhir_klien') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="status_perkawinan_klien">Status Perkawinan</label>
											</div>
											<div class="col">
												<select class="form-control" id="status_perkawinan_klien"
														name="status_perkawinan_klien">
													<option value="belum menikah">Belum Menikah</option>
													<option value="menikah">Menikah</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="ciri_klien">Ciri-ciri Khusus</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="ciri_klien"
													   name="ciri_klien"
													   placeholder="Ciri Ciri Khusus"
													   value="<?= set_value('ciri_klien') ?>">
											</div>
										</div>
									</div>
									<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next
									</button>
								</div>
							</div>
						</div>

						<!--						step 2-->
						<div class="row setup-content" id="step-2">
							<div class="col">
								<div class="col-md-12">
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="nama_ayah">Nama</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
													   placeholder="Nama" value="<?= set_value('nama_ayah') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="tempat_lahir_ayah">Tempat Lahir</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="tempat_lahir_ayah"
													   name="tempat_lahir_ayah" placeholder="Tempat Lahir"
													   value="<?= set_value('tempat_lahir_ayah') ?>">
											</div>
										</div>
									</div>
									<div class="form-group"> <!-- Date input -->
										<div class="row">
											<div class="col-5">
												<label for="tanggal_lahir_ayah">Tanggal Lahir</label>
											</div>
											<div class="col">
												<input class="form-control" id="tanggal_lahir_ayah"
													   name="tanggal_lahir_ayah"
													   placeholder="Tanggal Lahir" autocomplete="off" type="text"/
												value="<?= set_value('tanggal_lahir_ayah') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="agama_ayah">Agama</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="agama_ayah"
													   name="agama_ayah"
													   placeholder="Agama Klien" value="<?= set_value('agama_ayah') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="suku_ayah">Suku</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="suku_ayah" name="suku_ayah"
													   placeholder="Suku" value="<?= set_value('suku_ayah') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="bangsa_ayah">Bangsa</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="bangsa_ayah"
													   name="bangsa_ayah"
													   placeholder="Bangsa" value="<?= set_value('bangsa_ayah') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="warga_negara_ayah">Warga Negara</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="warga_negara_ayah"
													   name="warga_negara_ayah" placeholder="Warga Negara"
													   value="<?= set_value('warga_negara_ayah') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="pendidikan_terakhir_ayah">Pendidikan Terakhir</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="pendidikan_terakhir_ayah"
													   name="pendidikan_terakhir_ayah" placeholder="Pendidikan Terakhir"
													   value="<?= set_value('pendidikan_terakhir_ayah') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="pekerjaan_ayah">Pekerjaan</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="pekerjaan_ayah"
													   name="pekerjaan_ayah"
													   placeholder="Pekerjaan"
													   value="<?= set_value('pekerjaan_ayah') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="alamat_ayah">Alamat</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="alamat_ayah"
													   name="alamat_ayah"
													   placeholder="Alamat"
													   value="<?= set_value('alamat_ayah') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="hubungan_ayah">Hubungan</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="hubungan_ayah"
													   name="hubungan_ayah"
													   placeholder="Hubungan"
													   value="<?= set_value('hubungan_ayah') ?>">
											</div>
										</div>
									</div>
									<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next
									</button>
								</div>
							</div>
						</div>
						<!--step 3-->
						<div class="row setup-content" id="step-3">
							<div class="col">
								<div class="col-md-12">
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="nama_ibu">Nama</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
													   placeholder="Nama" value="<?= set_value('nama_ibu') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="tempat_lahir_ibu">Tempat Lahir</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="tempat_lahir_ibu"
													   name="tempat_lahir_ibu" placeholder="Tempat Lahir"
													   value="<?= set_value('tempat_lahir_ibu') ?>">
											</div>
										</div>
									</div>
									<div class="form-group"> <!-- Date input -->
										<div class="row">
											<div class="col-5">
												<label for="tanggal_lahir_ibu">Tanggal Lahir</label>
											</div>
											<div class="col">
												<input class="form-control" id="tanggal_lahir_ibu"
													   name="tanggal_lahir_ibu"
													   placeholder="Tanggal Lahir" autocomplete="off" type="text"/
												value="<?= set_value('tanggal_lahir_ibu') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="agama_ibu">Agama</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="agama_ibu" name="agama_ibu"
													   placeholder="Agama Klien" value="<?= set_value('agama_ibu') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="suku_ibu">Suku</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="suku_ibu" name="suku_ibu"
													   placeholder="Suku" value="<?= set_value('suku_ibu') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="bangsa_ibu">Bangsa</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="bangsa_ibu"
													   name="bangsa_ibu"
													   placeholder="Bangsa" value="<?= set_value('bangsa_ibu') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="warga_negara_ibu">Warga Negara</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="warga_negara_ibu"
													   name="warga_negara_ibu" placeholder="Warga Negara"
													   value="<?= set_value('warga_negara_ibu') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="pendidikan_terakhir_ibu">Pendidikan Terakhir</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="pendidikan_terakhir_ibu"
													   name="pendidikan_terakhir_ibu" placeholder="Pendidikan Terakhir"
													   value="<?= set_value('pendidikan_terakhir_ibu') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="pekerjaan_ibu">Pekerjaan</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="pekerjaan_ibu"
													   name="pekerjaan_ibu"
													   placeholder="Pekerjaan"
													   value="<?= set_value('pekerjaan_ibu') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="alamat_ibu">Alamat</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="alamat_ibu"
													   name="alamat_ibu"
													   placeholder="Alamat"
													   value="<?= set_value('alamat_ibu') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="hubungan_ibu">Hubungan</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="hubungan_ibu"
													   name="hubungan_ibu"
													   placeholder="Hubungan"
													   value="<?= set_value('hubungan_ibu') ?>">
											</div>
										</div>
									</div>
									<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next
									</button>
								</div>
							</div>
						</div>
						<!--step 4-->
						<div class="row setup-content" id="step-4">
							<div class="col">
								<div class="col-md-12">
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="nama_wali">Nama</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="nama_wali" name="nama_wali"
													   placeholder="Nama" value="<?= set_value('nama_wali') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="tempat_lahir_wali">Tempat Lahir</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="tempat_lahir_wali"
													   name="tempat_lahir_wali" placeholder="Tempat Lahir"
													   value="<?= set_value('tempat_lahir_wali') ?>">
											</div>
										</div>
									</div>
									<div class="form-group"> <!-- Date input -->
										<div class="row">
											<div class="col-5">
												<label for="tanggal_lahir_wali">Tanggal Lahir</label>
											</div>
											<div class="col">
												<input class="form-control" id="tanggal_lahir_wali"
													   name="tanggal_lahir_wali"
													   placeholder="Tanggal Lahir" autocomplete="off" type="text"/
												value="<?= set_value('tanggal_lahir_wali') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="agama_wali">Agama</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="agama_wali"
													   name="agama_wali"
													   placeholder="Agama Klien" value="<?= set_value('agama_wali') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="suku_wali">Suku</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="suku_wali" name="suku_wali"
													   placeholder="Suku" value="<?= set_value('suku_wali') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="bangsa_wali">Bangsa</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="bangsa_wali"
													   name="bangsa_wali"
													   placeholder="Bangsa" value="<?= set_value('bangsa_wali') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="warga_negara_wali">Warga Negara</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="warga_negara_wali"
													   name="warga_negara_wali" placeholder="Warga Negara"
													   value="<?= set_value('warga_negara_wali') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="pendidikan_terakhir_wali">Pendidikan Terakhir</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="pendidikan_terakhir_wali"
													   name="pendidikan_terakhir_wali" placeholder="Pendidikan Terakhir"
													   value="<?= set_value('pendidikan_terakhir_wali') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="pekerjaan_wali">Pekerjaan</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="pekerjaan_wali"
													   name="pekerjaan_wali"
													   placeholder="Pekerjaan"
													   value="<?= set_value('pekerjaan_wali') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="status_perkawinan_wali">Status Perkawinan</label>
											</div>
											<div class="col">
												<select class="form-control" id="status_perkawinan_wali"
														name="status_perkawinan_wali">
													<option value="belum menikah">Belum Menikah</option>
													<option value="menikah">Menikah</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="alamat_wali">Alamat</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="alamat_wali"
													   name="alamat_wali"
													   placeholder="Alamat"
													   value="<?= set_value('alamat_wali') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="hubungan_wali">Hubungan</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="hubungan_wali"
													   name="hubungan_wali"
													   placeholder="Hubungan"
													   value="<?= set_value('hubungan_wali') ?>">
											</div>
										</div>
									</div>
									<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next
									</button>
								</div>
							</div>
						</div>
						<!--step 5-->
						<div class="row setup-content" id="step-5">
							<div class="col">
								<div class="col-md-12">
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="nama_suami/istri">Nama</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="nama_suami/istri"
													   name="nama_suami/istri"
													   placeholder="Nama" value="<?= set_value('nama_suami/istri') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="tempat_lahir_suami/istri">Tempat Lahir</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="tempat_lahir_suami/istri"
													   name="tempat_lahir_suami/istri" placeholder="Tempat Lahir"
													   value="<?= set_value('tempat_lahir_suami/istri') ?>">
											</div>
										</div>
									</div>
									<div class="form-group"> <!-- Date input -->
										<div class="row">
											<div class="col-5">
												<label for="tanggal_lahir_suami/istri">Tanggal Lahir</label>
											</div>
											<div class="col">
												<input class="form-control" id="tanggal_lahir_suami/istri"
													   name="tanggal_lahir_suami/istri"
													   placeholder="Tanggal Lahir" autocomplete="off" type="text"/
												value="<?= set_value('tanggal_lahir_suami/istri') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="agama_suami/istri">Agama</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="agama_suami/istri"
													   name="agama_suami/istri"
													   placeholder="Agama Klien"
													   value="<?= set_value('agama_suami/istri') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="suku_suami/istri">Suku</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="suku_suami/istri"
													   name="suku_suami/istri"
													   placeholder="Suku" value="<?= set_value('suku_suami/istri') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="bangsa_suami/istri">Bangsa</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="bangsa_suami/istri"
													   name="bangsa_suami/istri"
													   placeholder="Bangsa"
													   value="<?= set_value('bangsa_suami/istri') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="warga_negara_suami/istri">Warga Negara</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="warga_negara_suami/istri"
													   name="warga_negara_suami/istri" placeholder="Warga Negara"
													   value="<?= set_value('warga_negara_suami/istri') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="pendidikan_terakhir_suami/istri">Pendidikan Terakhir</label>
											</div>
											<div class="col">
												<input type="text" class="form-control"
													   id="pendidikan_terakhir_suami/istri"
													   name="pendidikan_terakhir_suami/istri"
													   placeholder="Pendidikan Terakhir"
													   value="<?= set_value('pendidikan_terakhir_suami/istri') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="pekerjaan_suami/istri">Pekerjaan</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="pekerjaan_suami/istri"
													   name="pekerjaan_suami/istri"
													   placeholder="Pekerjaan"
													   value="<?= set_value('pekerjaan_suami/istri') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="status_perkawinan_suami/istri">Status Perkawinan</label>
											</div>
											<div class="col">
												<select class="form-control" id="status_perkawinan_suami/istri"
														name="status_perkawinan_suami/istri">
													<option value="belum menikah">Belum Menikah</option>
													<option value="menikah">Menikah</option>
												</select>
											</div>
										</div>
									</div>
									<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next
									</button>
								</div>
							</div>
						</div>
						<!--step 6-->
						<div class="row setup-content" id="step-6">
							<div class="col">
								<div class="col-md-12">
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="nama_pegawai">Nama</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="nama_pegawai"
													   name="nama_pegawai"
													   placeholder="Nama" value="<?= set_value('nama_pegawai') ?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-5">
												<label for="nip_pegawai">NIP</label>
											</div>
											<div class="col">
												<input type="text" class="form-control" id="nip_pegawai"
													   name="nip_pegawai"
													   placeholder="NIP" value="<?= set_value('nip_pegawai') ?>">
											</div>
										</div>
									</div>
									<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next
									</button>
								</div>
							</div>
						</div>
								<!--step 7-->
								<div class="row setup-content" id="step-7">
									<div class="col">
										<div class="col-md-12">
											<div class="form-group">
												<div class="row">
													<div class="col-5">
														<label for="pengirim">Pengirim</label>
													</div>
													<div class="col">
														<input type="text" class="form-control" id="pengirim" name="pengirim" placeholder="Pengirim" value="<?= set_value('pengirim')?>">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-5">
														<label for="no_surat_masuk">No Surat</label>
													</div>
													<div class="col">
														<input type="text" class="form-control" id="no_surat_masuk" name="no_surat_masuk" placeholder="No Surat" value="<?= set_value('no_surat_masuk')?>">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-5">
														<label for="tgl_surat_masuk">Tanggal Surat</label>
													</div>
													<div class="col">
														<input class="form-control" id="tgl_surat_masuk" name="tgl_surat_masuk" placeholder="Tanggal Surat Masuk" autocomplete="off" type="text"/ value="<?= set_value('tanggal_surat_masuk')?>">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-5">
														<label for="perihal">Perihal</label>
													</div>
													<div class="col">
														<input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perilah" value="<?= set_value('perihal')?>">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-5">
														<label for="perihal">File Surat</label>
													</div>
													<div class="col">
														<div class="custom-file">
															<input type="file" class="custom-file-input" id="file_surat_masuk" name="file_surat_masuk">
															<label class="custom-file-label" for="file_surat_masuk">Pilih Surat Masuk</label>
														</div>
													</div>
												</div>
											</div>
											<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next
											</button>
										</div>
									</div>
								</div>
								<!--				step 8-->
								<div class="row setup-content" id="step-8">
									<div class="col-xs-12">
										<div class="col-md-12">
											<div class="col-3">
												<button type="submit" class="btn btn-primary btn-icon-split">
													<span class="icon text-white-50"><i class="fas fa-check"></i></span>
													<span class="text">Add</span></button>
											</div>
										</div>
									</div>
								</div>
								<?php echo form_close() ?>
					</blockquote>
				</div>
			</div>

			<!-- Top menu -->
		</div>
	</div>
</div>
</div>
