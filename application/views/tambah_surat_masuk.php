<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Surat Masuk</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-0 text-widt-200 fas fa-user-tie text-info">Tambah Data Surat Masuk</h1>
	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<BR>
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('Admin/proses_tambah_surat')?>" autocomplete="off">
					<div class="form-group col-lg-12">
							<label>Tanggal Terima : </label>
                            <input type="date" name="tanggal_terima" id="tanggal_terima" class="form-control">
						</div>
							<div class="form-group col-lg-12">
							<label>Nomor Surat  : </label>
  							<input type="text" name="nomor_surat" id="nomor_surat" class="form-control">	
				        </div>
						<div class="form-group col-lg-12">
							<label>Tanggal Surat  : </label>
                            <input type="date" name="tanggal_surat" id="tanggal_suratl" class="form-control">
						</div>
						<div class="form-group col-lg-12">
							<label>Isi Ringkas  :</label>
							<textarea name="isi_ringkas" id="isi_ringkas" cols="20" rows="4" class="form-control"></textarea>
						</div>
						<div class="form-group col-lg-12">
							<label>Dari  : </label>
                            <input type="text" name="dari" id="dari" class="form-control">
						</div>
						<div class="form-group col-lg-12">
							<label>Kepada  : </label>
                            <input type="text" name="kepada" id="kepada" class="form-control" >
						</div>
						<div class="form-group col-lg-12">
							<label>Keterangan  : </label>
							<textarea name="keterangan" id="keterangan" cols="20" rows="3" class="form-control"></textarea>
						</div>
					

						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-info btn-flat">
								<i class="fa fa-pencil"></i> Simpan</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
				</div>
			</div>
			<br>
			<br>
		</div>

	</div>

</div>
	
