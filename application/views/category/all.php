<?php $this->load->view('header') ?>

<div class="col-sm-12">
	<h1>Categories</h1>

	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $categories as $category ): ?>
				<tr>
					<td><?php echo $category->cid ?></td>
					<td><?php echo $category->name ?></td>
					<td>
						<form method="post" action="/category/remove/<?php echo $category->cid ?>">
							<a href="/category/edit/<?php echo $category->cid ?>"><button type="button" class="btn btn-link"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
							<button type="submit" class="btn btn-link"><i class="fa fa-times" aria-hidden="true"></i></button>
						</form>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>

	<a href="/category/create/"><button class="btn btn-primary">New Category</button></a>
</div>

<?php $this->load->view('footer') ?>