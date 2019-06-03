<!DOCTYPE html>
<html>
<?php $this->load->view("partial/head.php") ?>

<div class="container-fluid">

	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="Home">Home</a>
		</li>
		<li class="breadcrumb-item active">Data Nilai</li>
	</ol>

	<!-- DataTables Example -->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
		Data Nilai</div>
		<div class="container mt-3">
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						PILIH MATA PELAJARAN :
						<select class="form-control" name="mapel" id="mapel">                      
							<option>Mata Pelajaran</option>
							
							<option value=""></option>
							
						</select>
					</div>
					<div class="form-group">
						PILIH SEMESTER :
						<select class="form-control" name="semester" id="semester">                      
							<option value="ganjil">GANJIL</option>
							<option value="genap">GENAP</option>            
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						PILIH KELAS :
						<select class="form-control" name="kelas" id="kelas">                      
							<option>--Kelas--</option>
							
							<option value=""></option>
							
						</select>
					</div>
					<input type = "button" onclick = "ajaxFunction()" class="btn btn-secondary mt-4" value ="FILTER"/>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<a href="">
							<button name="tambah" type="button" class="btn btn-primary  float-right mr-5 mt-5">+ Tambah Data</button></a>
						</div>
					</div>
				</div>
			</div>                           

			<div class="card-body">
				<div class="table-responsive"  id="txtHint">
					
				</div>
			</div>
			<div class="card-footer small text-muted"></div>
		</div>

		<p class="small text-center text-muted my-5">
			<em></em>
		</p>

	</div>

	<?php $this->load->view("partial/foot.php") ?>
	</html>