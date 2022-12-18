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
  <td><label for="fname" class= class="form-label">First name : </label></td>
  <td><input type="text" class="form-control"  id="fname" name="fname"  method="post" ></td>
</tr>

<tr>
  <td><label for="lname" class= class="form-label">Last name : </label></td>
  <td><input type="text" class="form-control"  id="lname" name="lname"   method="post"></td>
</tr>

<tr>
  <td><label for="email" class= class="form-label">Email id : </label></td>
  <td><input type="email" class="form-control"  id="email" name="email" ></td  method="post">
</tr>

<tr>
  <td><label for="mobile" class= class="form-label">Mobile : </label></td>
  <td><input type="text" class="form-control"  id="mobile" name="mobile" m  method="post"axlength="10" ></td>
</tr>

<tr>
  <td><label for="address" class= class="form-label">Address : </label></td>
  <td><input type="text" class="form-control"  id="address" name="address" ></td>
</tr>

<tr><td>Gender : </td>
  <td><input type="radio"  id="male" name="gender" value="male">
  <label for="male" >Male</label>
  <input type="radio"  id="female" name="gender" value="female">
  <label for="female">female</label></td  method="post">
</tr>

<tr>
  <td><label for="pwd1" class= class="form-label">Password : </label></td>
  <td><input type="password" class="form-control"  id="pwd" name="pwd"  method="post" ></td>
</tr>
<!--
<tr>
  <td><label for="pwd2">Confirm Password : </label></td>
  <td><input type="password" id="pwd2" name="pwd2" ></td>
</tr>
-->
<tr>  
  <td colspan="2"><input type="submit" class="btn btn-primary" value="Submit" name="submit" ></td>
</tr>

</table>
</form>

</body>
</html>