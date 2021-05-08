<div class="container">
								<h3 class="header smaller lighter blue">Status pengumuman saat ini : <b><?php echo $pengumuman->status;;?><b/></h3>
									<h5 class="header smaller lighter blue">Silahkan Edit terlebih dahulu score sebelum aktifkan pengumuman</h5>
								<a href="<?php echo site_url('admin/hidupkanpengumuman');?>"><button class="btn btn-large btn-primary"><strong>HIDUPKAN</strong></button></a>
								
								<a href="<?php echo site_url('admin/matikanpengumuman');?>"><button class="btn btn-large btn-danger"><strong>MATIKAN</strong></button></a>

	</div>
								
</button></a>
						<br/><br/>
								<table class="table table-striped table-bordered data">
			<thead>
				<tr>	
				<th>id</th>		
					<th>Jarak Terjauh Jalur Zonasi </th>
					<th>Passingrade jalur Prestasi</th>
					<th>Penentuan seleksi Afirmasi</th>
					<th>Passingrade Kuota Jalur Perpindahan Tugas Orang tua/Wali </th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach ($biodata as $biodata)
				{
				?>
				<tr>
					<td><?php echo $biodata->idb;?></td>
					<td><?php echo $biodata->score1;?></td>
					<td><?php echo $biodata->score2;?></td>
					<td><?php echo $biodata->score3;?></td>
					<td><?php echo $biodata->score4;?></td>
				</tr>

					
					
					</td>
					<a href="<?php echo site_url('admin/editscore/'.$biodata->idb);?>"><button class="btn btn-large btn-warning"><strong>EDIT DATA</strong></button></a></td><br/>
				</tr>
				<?php
				}
				?>
				<br/>
			</tbody>
		</table>
	</div>


								