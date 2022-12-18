<html>
<head>
<title></title>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<br><br>
<form method="post">
<table cellspacing="35" class="table table-striped">
					<thead>
					  <tr>
						<th>Emp id</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php 
					foreach($employee_arr as $e)
					{
					?>
					  <tr>
						<td><?php echo $e->emp_id;?></td>
						<td><?php echo $e->fname;?></td>
						<td><?php echo $e->lname;?></td>
						<td><?php echo $e->email;?></td>
            			<td><?php echo $e->mobile;?></td>
						<td><a href="edit?edit_emp_id=<?php echo $e->emp_id ?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_emp_id=<?php echo $e->emp_id ?>" class="btn btn-primary">Delete</a></td>
					  </tr>
					 <?php
					}
					 ?> 
					</tbody>
				  </table>
</form>
</body>
</html>