<?php
include 'header.php';
include 'functions.php';
include 'navbar.php';

// include 'register.php';
if(isset($_POST) && !empty($_POST)) {
  $post = $_POST;
  $lastname = $_POST['lastname'];
  $firstname = $_POST['firstname'];
  $nickname = $_POST['nickname'];
  $plainPassword = $_POST['password'];
  $password = password_hash($plainPassword, PASSWORD_BCRYPT);
  $email = $_POST['email'];
  // var_dump($post);
  addUser($lastname, $firstname, $nickname, $password, $email) ;
}
?>

<div class="container page">
  <h3>S'enregistrer</h3>
  <form action="" method="post">
    <div class="form-group">
      <label for="lastname">Nom</label>
      <input name="lastname" type="lastname" class="form-control" id="lastname">
    </div>
    <div class="form-group">
      <label for="firstname">Prénom</label>
      <input name="firstname" type="firstname" class="form-control" id="firstname">
    </div>
    <div class="form-group">
      <label for="nickname">Pseudo</label>
      <input name="nickname" type="nickname" class="form-control" id="nickname">
    </div>
    <div class="form-group">
      <label for="password">Mot de passe</label>
      <input name="password" type="password" class="form-control" id="password">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input name="email" type="email" class="form-control" id="email">
    </div>
    <div class="row">
      <button type="submit" class="submit-btn btn-dark">S'enregistrer</button>
    </div>
  </form>
</div>

<?php include 'footer.php'?>