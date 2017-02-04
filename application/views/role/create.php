<?php $this->load->view('header') ?>

<div class="col-sm-12">
	<h1>Create Role</h1>

	<form method="post">
	    <div class="form-group">
	        <label for="">Label</label>
	        <input type="text" class="form-control" id="label" name="label" placeholder="Role label">
	    </div>
	    <legend>Permissions</legend>
	    <div class="form-group">
	        <label for="">Ticket</label>
	        <select class="form-control" name="permission_ticket">
	        	<option value="5">All</option>
	        	<option value="4">Edit all tickets</option>
	        	<option value="3">Create and edit own tickets</option>
	        	<option value="2">Change status and comment</option>
	        	<option value="1">View</option>
	        </select>
	    </div>
	    <div class="form-group">
	        <label for="">Category</label>
	        <select class="form-control" name="permission_category">
	        	<option value="3">All</option>
	        	<option value="2">Create and edit</option>
	        	<option value="1">View</option>
	        </select>
	    </div>
	    <div class="form-group">
	        <label for="">Status</label>
	        <select class="form-control" name="permission_status">
	        	<option value="3">All</option>
	        	<option value="2">Create and edit</option>
	        	<option value="1">View</option>
	        </select>
	    </div>
	    <div class="form-group">
	        <label for="">Users</label>
	        <select class="form-control" name="permission_user">
	        	<option value="3">All</option>
	        	<option value="2">Create and edit</option>
	        	<option value="1">View</option>
	        </select>
	    </div>
	    <div class="form-group">
	        <label for="">Roles</label>
	        <select class="form-control" name="permission_role">
	        	<option value="3">All</option>
	        	<option value="2">Create and edit</option>
	        	<option value="1">View</option>
	        </select>
	    </div>
	    <button type="submit" class="btn btn-primary">Create</button>
		<a href="/role/all/"><button type="button" class="btn btn-default">Back</button></a>
	</form>
</div>

<?php $this->load->view('footer') ?>