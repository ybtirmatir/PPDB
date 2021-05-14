<div class="container">
								<h1 class="header smaller lighter blue">PENGATURAN Mencakup :</h1>
								<h5 class="header smaller lighter blue">-Nama Sekolah-Alamat-Jalur Seleksi-kuota jalur-nilai mapel-edit prosedur-edit jadwal</h5>
								
</button></a>
						<br/><br/>
								<table class="table table-striped table-bordered data">
			<thead>
				<tr>	
				<th>id</th>		
					<th>Nama Sekolah</th>
					<th>Alamat</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach ($biodata as $biodata)
				{
				?>
				<tr>
					<td><?php echo $biodata->idb;?></td>
					<td><?php echo $biodata->nama_sekolah;?></td>
					<td><?php echo $biodata->alamat_sekolah;?></td>
				</tr>

					
					
					</td>
					<a href="<?php echo site_url('admin/editpengaturan/'.$biodata->idb);?>"><button class="btn btn-large btn-warning"><strong>EDIT DATA</strong></button></a></td><br/>
				</tr>
				<?php
				}
				?>
				<br/>
			</tbody>
		</table>
	</div>