<div class    ="modal fade " id="loginModal">
<div class    ="modal-dialog">
<div class    ="modal-content">
<div class    ="modal-header">
<h4 class     ="fw-bolder"> Login </h4>
</div> 

<div class    ="modal-body">
<form action  ="index.php?page=login" method="post">
<div class    ="form-group fw-bolder ">
<label for    ="username"> Nama Pengguna </label>
<input type   ="text" class="form-control" id="username" name="username" required>
</div>
  <br>
  <div class  ="form-group fw-bolder">
  <label for  ="password"> Password </label>
  <input type ="password" class="form-control" id="password" name="password" minlength="12" required>
</div>
  <br>
  <button type="submit" class="btn btn-outline-danger"> login </button>
  </form>
</div>
</div>
</div>
</div>

<div class    ="modal fade"   id ="registerModal">
<div class    ="modal-dialog">
<div class    ="modal-content">
<div class    ="modal-header">
<h4 class     ="fw-bolder"> Register </h4>
</div>

<div class    ="modal-body">
<form action  ="index.php?page=register" method="post">
<div class    ="form-group fw-bolder">
<label for    ="username1"> Nama Pengguna </label>
<input type   ="text" class="form-control" id="username1" name="username1" minlength="12" maxlength="22" required>
</div>
  <br>
  <div class  ="form-group fw-bolder">
  <label for  ="password1">Password </label>
  <input type ="password" class="form-control" id="password1" name="password1" minlength="12" maxlength="22" required>
</div>
  <br>
  <div class    ="form-group fw-bolder">
  <label for    ="role1"> Opsi </label>
  <select class ="form-control" id="role1" name="role1" required>
  <option value ="Admin"> Admin </option>
  <option value ="Customer"> Pengguna </option>
  </select>
</div>
  <br>
  <div class    ="form-group fw-bolder">
  <label for    ="password1"> Clue Password </label>
  <input type   ="password" class="form-control " id="r_password1" name="r_password1" required>
</div>
  <br>
  <button type  ="submit" class="btn btn-outline-danger"> Register </button>             
</form>
</div>
</div>
</div>
</div>