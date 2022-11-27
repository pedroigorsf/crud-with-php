<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changing data</title>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>

<nav>
    <div class="nav-wrapper blue-grey lighten-1">
      <a href="index.php" class="brand-logo"><span class="black-text">Client</span>List</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php?page=newData">Insert a new data</a></li>
        <li><a href="index.php?page=view">View</a></li>
        <li><a href="index.php?page=search">Search</a></li>
      </ul>
    </div>
</nav>

<?php
        include_once 'config.php';

		$id_user = $_GET['id_user'];
	
		$query = $connect->query("SELECT * FROM tb_user WHERE id_user='$id_user'");

		while($data = $query->fetch_assoc()){
			$name    = $data['name'];
			$address = $data['address'];
			$phone   = $data['phone'];
		}
	?>

<div class="container">
					<h1>Change the data</h1>

    				<form action="edit.php?id_user=<?php echo $id_user;?>" method="post">



                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate" name="name" value="<?php echo $name;?>">
                        <label for="icon_prefix">Name</label>
                    </div>

                    <div class="input-field">
                        <i class="material-icons prefix">location_on</i>
                        <input id="icon_prefix" type="text" class="validate" name="address" value="<?php echo $address;?>">
                        <label for="icon_prefix">Address</label>
                    </div>

                    <div class="input-field">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_prefix" type="text" class="validate" name="phone" value="<?php echo $phone;?>">
                        <label for="icon_prefix">Phone</label>
                    </div>
                    
    					

    					<input type="submit" name="btn" value="Save the change" class="waves-effect waves-light btn-small">

    					<a href="index.php?page=view" class="black-text">Cancel</a>

    				</form>

                    </div>

                    </br></br>
<footer class="page-footer grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="brown-text">Thousands of data in your hand.</h5>
                <p class="grey-text">You can create, view, edit and delete all data easily.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="brown-text">Follow us</h5>
                <ul>
                  <li><a class="grey-text" href="#!"><i class="icon-linkedin-sign"></i> Linkedin</a></li>
                  <li><a class="grey-text" href="#!"><i class="icon-instagram"></i> Instagram</a></li>
                  <li><a class="grey-text" href="#!"><i class="icon-github-sign"></i> Github</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="grey-text container">
            © 2022 Copyright
            </div>
          </div>
        </footer>
    
</body>
</html>