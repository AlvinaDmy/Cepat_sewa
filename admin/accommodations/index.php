<?php if ($_settings->chk_flashdata('success')) : ?>
	<script>
		alert_toast("<?php echo $_settings->flashdata('success') ?>", 'success');
	</script>
<?php endif; ?>

<style>
	.table {
		width: 100%;
		border-collapse: collapse;
	}

	.table th,
	.table td {
		padding: 8px;
		border: 1px solid #ccc;
	}

	.table th {
		background-color: #f8f9fa;
	}

	.table-responsive {
		overflow-x: auto;
	}

	.truncate-1 {
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
	}
</style>

<div class="card card-outline card-primary">
	<div class="card-header">
		<h3 class="card-title">Daftar Akomondasi</h3>
		<div class="card-tools">
			<a href="?page=accommodations/manage" class="btn btn-flat btn-primary"><span class="fas fa-plus"></span> Create New</a>
		</div>
	</div>
	<div class="card-body">
		<div class="container-fluid table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal Dibuat</th>
						<th>Akomondasi</th>
						<th>Keterangan</th>
						<th>Harga</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$qry = $conn->query("SELECT * from `accommodations` order by date_created desc ");
					while ($row = $qry->fetch_assoc()) :
						$row['description'] = strip_tags(stripslashes(html_entity_decode($row['description'])));
					?>
						<tr>
							<td class="text-center"><?php echo $i++; ?></td>
							<td><?php echo date("Y-m-d H:i", strtotime($row['date_created'])); ?></td>
							<td><?php echo $row['accommodation']; ?></td>
							<td>
								<p class="truncate-1 m-0"><?php echo $row['description']; ?></p>
							</td>
							<td class="text-right"><?php echo number_format($row['price']); ?></td>
							<td align="center">
								<button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
									Action
									<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu" role="menu">
									<a class="dropdown-item" href="?page=accommodations/manage&id=<?php echo $row['id']; ?>"><span class="fa fa-edit text-primary"></span> Edit</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item delete_data" href="javascript:void(0)" data-id="<?php echo $row['id']; ?>"><span class="fa fa-trash text-danger"></span> Delete</a>
								</div>
							</td>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>

<script>
	$(document).ready(function() {
		$('.delete_data').click(function() {
			_conf("Apa kamu yakin ingin menghapus data ini", "delete_accommodation", [$(this).data('id')]);
		});
		$('.table').DataTable();
	});

	function delete_accommodation(id) {
		start_loader();
		$.ajax({
			url: _base_url_ + "classes/Master.php?f=delete_accommodation",
			method: "POST",
			data: {
				id: id
			},
			dataType: "json",
			error: function(err) {
				console.log(err);
				alert_toast("An error occurred.", 'error');
				end_loader();
			},
			success: function(resp) {
				if (typeof resp === 'object' && resp.status === 'success') {
					location.reload();
				} else {
					alert_toast("An error occurred.", 'error');
					end_loader();
				}
			}
		});
	}
</script>