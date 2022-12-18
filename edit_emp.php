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
<form  method="post">
<table align="center" class="table table-striped">

<tr>
  <td><label for="fname" class="form-label">First name : </label></td>
  <td><input type="text" class="form-control" value="<?php echo $user_fetch->fname;?>" name="fname"></td>
</tr>

<tr>
  <td><label for="lname" class="form-label">Last name : </label></td>
  <td><input type="text" class="form-control" value="<?php echo $user_fetch->lname;?>" name="lname"></td>
</tr>

<tr>
  <td><label for="email" class="form-label">Email id : </label></td>
  <td><input type="text" class="form-control" value="<?php echo $user_fetch->email;?>" name="email"></td>
</tr>

<tr>
  <td><label for="mobile" class="form-label">Mobile No : </label></td>
  <td><input type="text" class="form-control"  value="<?php echo $user_fetch->mobile;?>" name="mobile"></td>
</tr>

<tr>  
  <td colspan="2"><input type="submit" class="btn btn-primary" value="Update" name="update" ></td>
</tr>

</table>
</form>

</body>
</html>