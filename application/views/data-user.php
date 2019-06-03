<!DOCTYPE html>
<html>
<?php $this->load->view("partial/head.php") ?>

<div class="container-fluid">

	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="Home">Home</a>
		</li>
		<li class="breadcrumb-item active">Data User</li>
	</ol>

	<!-- DataTables Example -->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
		Data User</div>
		<div class="container mt-3">                                
			<a href="input_user">
				<button name="tambah" type="button" class="btn btn-primary col-md-2 col-xs-12 float-right mr-5">+ Tambah User</button></a>
				<a href="input_admin">
					<button name="tambah" type="button" class="btn btn-primary col-md-2 col-xs-12 float-right mr-5">+ Tambah Admin</button></a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>ID User</th>
									<th>Username</th>
									<th>Password</th>  
									<th>Akses</th>  
									<th>Aksi</th>                   
								</tr>
							</thead>

							<tbody>

								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>
										<a href="" class="btn btn-info" >Ubah</a>
										<a href="" class="btn btn-danger" >Hapus</a>
									</td>

								</tr>
								         
						</tbody>
					</table>
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