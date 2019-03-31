<?php include "functions.php"; ?>

<?php create(); ?>

<?php include "includes/header.php"; ?>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h1 class="text-center">Create</h1>
      <form action="login_create.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Create">
      </form>
    </div>
  </div>
</div>

<?php include "includes/footer.php" ?>
