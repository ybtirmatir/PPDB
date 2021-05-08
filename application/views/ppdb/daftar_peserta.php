<div class="container">
		<table class="table table-striped table-bordered data">
			<thead>
				<tr>			
					<th>NIK</th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					<th>Agama</th>
					<th>Alamat</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($peserta as $peserta)
				{
				?>
				<tr>
					<td><?php echo $peserta->nik;?></td>
					<td><?php echo $peserta->nama_lengkap;?></td>
					<td><?php echo $peserta->jenis_kelamin;?></td>
					<td><?php echo $peserta->agama;?></td>
					<td><?php echo $peserta->alamat;?></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>