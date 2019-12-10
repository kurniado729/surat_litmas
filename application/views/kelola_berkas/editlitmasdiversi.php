<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

	<div class="row">
		<div class="col-lg-6">

			<?= form_error ('pengirim', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
			<?= form_error ('no_surat_masuk', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
			<?= form_error ('tgl_surat_masuk', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
			<?= form_error ('ringkasan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

			<div class="card">
				<div class="card-header">
					Edit Mail
				</div>
				<div class="card-body">
					<blockquote class="blockquote mb-0">
						<form method="post" action="<?= base_url('kelola_berkas/editlitmasdiversi/'. $litmas_diversi['id']); ?>" enctype="multipart/form-data">
							<div class="form-group row">
								<label for="pengirim" class="col-sm-4 col-form-label">Pengirim</label>
								<div class="col-sm-8">
								<input type="text" class="form-control" id="pengirim" name="pengirim" value="<?= $litmas_diversi['pengirim'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="no_sura" class="col-sm-4 col-form-label">No Surat</label>
								<div class="col-sm-8">
								<input type="text" class="form-control" id="no_sura" name="no_surat" value="<?= $litmas_diversi['no_surat'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="tgl_surat" class="col-sm-4 col-form-label">Tanggal Surat</label>
								<div class="col-sm-8">
								<input type="text" class="form-control" id="tgl_surat" name="tgl_surat" value="<?= $litmas_diversi['tgl_surat'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="ringkasan" class="col-sm-4 col-form-label">Ringkasan</label>
								<div class="col-sm-8">
								<input type="text" class="form-control" id="ringkasan" name="ringkasan" value="<?= $litmas_diversi['ringkasan'] ?>">
								</div>
							</div>
								<div class="form-group row">
									<label for="file" class="col-sm-4 col-form-label">File</label>
									<div class="col-sm-8">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="file" name="file">
										<label class="custom-file-label" for="file_surat_masuk"><?= $litmas_diversi['file'] ?></label>
									</div>
									</div>
								</div>
							<div class="from-group row justify-content-end" style="margin-left: 105px;">
								<div class="col-sm-10">
									<div class="row">
										<div class="col-3 mr-4">
											<a href="<?= base_url('kelola_berkas') ?>" class="btn btn-secondary btn-icon-split">
												<span class="icon text-white-50"><i class="fas fa-chevron-left"></i></span>
												<span class="text">Back</span>
											</a>
										</div>
										<div class="col-3">
											<button type="submit" class="btn btn-primary btn-icon-split">
												<span class="icon text-white-50"><i class="fas fa-check"></i></span>
												<span class="text">Edit</span></button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</blockquote>
				</div>
			</div>
		</div>
	</div>

</div>
</div>
