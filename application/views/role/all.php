<?php $this->load->view('header') ?>

<div class="col-sm-12">
	<h1>Statuses</h1>

	<table class="table">
		<thead>
			<tr>
				<th>Role</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $roles as $role ): ?>
				<tr>
					<td><?php echo $role->label ?></td>
					<td>
						<form method="post" action="/role/remove/<?php echo $role->rid ?>">
							<a href="/role/edit/<?php echo $role->rid ?>"><button type="button" class="btn btn-link"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
							<button type="submit" class="btn btn-link"><i class="fa fa-times" aria-hidden="true"></i></button>
						</form>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>

	<a href="/role/create/"><button class="btn btn-primary">New role</button></a>
</div>

<?php $this->load->view('footer') ?>