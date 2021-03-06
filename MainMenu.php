
<link href="MainMenu.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<link rel="stylesheet" href="custom.css">

<?php
if(session_id() == '' || !isset($_SESSION)) {
	session_start();
	$name_email_id = 'name=' . $_SESSION['name'] .
				  '&email=' . $_SESSION['email'] .
				  '&id=' . $_SESSION['id'] .
				  '&cin=' . $_SESSION['cin'] .
				  '&nickname=' . $_SESSION['nickname'] . 
				  '&profpic=' . $_SESSION['profpic'];
	//print $name_email_id;
}
	
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="shopping.php?<?php print $name_email_id; ?>">Book Exchange</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse order-1" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="shopping.php?<?php print $name_email_id; ?>">Shopping <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="selling.php?<?php print $name_email_id; ?>">Selling</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="profile.php?<?php print $name_email_id; ?>">Profile</a>
      </li>

    </ul>
  </div>
  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">

            	<?php if(isset($_SESSION['is_logged_in'])):?>

			 <form class="form-inline my-2 my-lg-0" action="logout.php" method="post">
					<button class="btn btn-sm btn-outline-primary mr-sm-2" type="submit" name="logout" value="logout">Logout</button>
				</form>
               
        <?php    
        else:?>

		<a class="btn btn-sm btn-outline-primary mr-sm-2" href="login.html" role="button">Login</a>

        <?php endif; ?>
            </li>
        </ul>
    </div>
</nav>