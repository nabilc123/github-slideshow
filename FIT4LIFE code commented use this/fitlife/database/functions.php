<?php

function last_id()
{
	global $connection;
	return mysqli_insert_id($connection);
}

function query($sql)
{
	global $connection;
	return mysqli_query($connection,$sql);
}

function confirm($result)
{
	global $connection;
	if(!$result)
	{
		die("QUERY FAILED". mysqli_error($connection));
	}
}

function fetch_array($result)
{
	return mysqli_fetch_array($result);
}


function num_rows($result) // this will return number of rows
{
	return mysqli_num_rows($result);
}

function genrate_navigation() // Diferrent Menu after login used in all pages
{
	if (isset($_SESSION['user_id'])) { // This will swicth the menu on every page if user is logged in than this menu will show
		echo '<li class="nav-item"><a class="nav-link" href="profile.php">PROFILE</a></li>';
		echo '<li class="nav-item"><a class="nav-link" href="logout.php">LOGOUT</a></li>';
	} else { // if user is not logged in than this menu will tack place
		echo '<li class="nav-item"><a class="nav-link" href="login.php">LOGIN</a></li>';
		echo '<li class="nav-item"><a class="nav-link" href="register.php">REGISTER</a></li>';
	}
}

//////////////////////////////////////////////////

function register_user() // This function will register user used in only register.php
{
	if (isset($_POST['register'])) {
		$username = $_POST['username']; // this "username" is a field of the submited form for registeration on register.php
		$password = $_POST['password']; // this "password" is a field of the submited form for registeration on register.php
		$image	= ""; // for initial the image name is null
		$query = query("SELECT username FROM users WHERE username = '".$username."'"); // This query will help to rather username is available or not
		confirm($query);
		$count = num_rows($query); // this will count the returned rows
		if ($count == 0) { // if the row count is 0 that mean user didn't exist
			$image = $_FILES['img1']['name']; // this will get uploaded image name
			$image_temp_location  = $_FILES['img1']['tmp_name']; // // this will get uploaded image tem location
			$time_num = time(); // this will return the current time
			$final = $time_num.$image; // this will add above time before image name for uniqueness
			$image = $final;
			if (move_uploaded_file($image_temp_location ,"uploads/" . $image )) { // insert data into database after uploading image
				$query = query("INSERT INTO users(username,password,image) VALUES ('".$username."','".$password."','".$image."')");
				confirm($query);
				header("location: login.php"); // after adding record to database this will redirected to login page where user can login
			}
		} else { // if the row count is not 0 that mean user is already exist and return with an alert
			echo "<script>alert('username already taken. Please use different!')</script>"; // This alert will show if username is taken
		}
	}
}

function login_user() // This function will login user used in only login.php
{
	if (isset($_SESSION['user_id'])) { // if user is already logged in will redirect to homepage
		header("location: index.php"); // this will redirect to the home page
	} else {
		if (isset($_POST['signin'])) { // this will verify if the login form is submitted
			$username = $_POST['username'];
			$password = $_POST['password'];
			$query = query("SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'"); // this will check is provided information is correct
			confirm($query);
			$count = num_rows($query);
			if ($count == 1) { // if  count of returned rows is 1 that mean user exist than we can start user session
				$data = fetch_array($query);
				$_SESSION['user_id'] = $data['user_id'];
				$_SESSION['username'] = $username;
				header("location: profile.php"); 
			} else { // if count of rows is not 1 that means user didn't exist we will show an alert that say wrong details.
				echo "<script>alert('Please enter correct details!')</script>"; // this alert will show if login information is incorrect
			}
		}
	}
}

function genrate_cart() // this function will controlls all functionalities of cart like add item, clear cart, remove item from cart & confirm order after paypal payment successed
{
	if (isset($_GET['action'])) {
		if ($_GET['action'] == "add") { // if the parameter in url is add than this will add item
			$name = $_GET['name'];
			$id = $_GET['id'];
			$qty = $_GET['qty'];
			$price = $_GET['price'];
			if (!isset($_SESSION['shooping_cart']) || count($_SESSION['shooping_cart']) == 0) { // this will add item to cart if cart is empty
				$_SESSION['shooping_cart'] = []; // for initial the Sooping cart is having nothing 
				$new_item = array( // this array will pass to the array
					"id" => $id,
					"name" => $name,
					"qty" => $qty,
					"price" => $price,
				);
				array_push($_SESSION['shooping_cart'], $new_item); // this will push above array into shooping cart
				header("location: cart.php"); // after that this will redirect to the cart in order to erase all perameters from url

			} else { // this will add item if cart is not empty

				for ($i=0; $i < count($_SESSION['shooping_cart']); $i++) {  // this loop will help to find item in cart if exist than it will update qty of the item
					if ($_SESSION['shooping_cart'][$i]["id"] == $id) {
						$_SESSION['shooping_cart'][$i]['qty'] = $_SESSION['shooping_cart'][$i]['qty']+$qty; // this wil increase the quantity of the existing product 
						header("location: cart.php");// after that will redirect to the cart page in order to erase all perameters from url
						return false; // this will break the loop
					}
				}

				// if loop didn't break that mean its a new product

				$new_item = array(
					"id" => $id,
					"name" => $name,
					"qty" => $qty,
					"price" => $price,
				);
				array_push($_SESSION['shooping_cart'], $new_item);  // if the item is not an item of the cart than it will add item into the cart
				header("location: cart.php");// after that will redirect to the cart page in order to erase all perameters from url
			}
		}

		if ($_GET['action'] == "remove") {  // this will take place if the action perameter is remove this will remove single item from cart
			$id = $_GET['id'];
			for ($i=0; $i < count($_SESSION['shooping_cart']); $i++) { // this loop will help to find the sellected item from cart
				if ($_SESSION['shooping_cart'][$i]["id"] == $id) {
					unset($_SESSION['shooping_cart'][$i]); // this will remove item from cart if index / id matched
					$_SESSION['shooping_cart'] = array_values($_SESSION['shooping_cart']); // this will re arreange/renew the indexes of array
					header("location: cart.php");// after that will redirect to the cart page in order to erase all perameters from url
				}
			}
		}

		if ($_GET['action'] == "clear") { // this will take place if the action perameter is clear this will empty/clear the whole cart
			unset($_SESSION['shooping_cart']); // this will empty the cart
			header("location: cart.php");// after that will redirect to the cart page in order to erase all perameters from url
		}
}
}

function get_cart() // this function will get the cart into table for user
{
	$total = 0;
	if (isset($_SESSION['shooping_cart']) && count($_SESSION['shooping_cart']) != 0) {
		for ($i=0; $i < count($_SESSION['shooping_cart']); $i++) { // the table->rows for user to telly that he purchasing right product and inputs is for paypal payment
			$sr = $i+1;
			$subtotal = $_SESSION['shooping_cart'][$i]['qty'] * $_SESSION['shooping_cart'][$i]['price'];
			echo '<tr><td>'. $sr .'</td>';
			echo '<td>'.$_SESSION['shooping_cart'][$i]['name'].'</td>';
			echo '<td>'.$_SESSION['shooping_cart'][$i]['qty'].'</td>';
			echo '<td>£'.$_SESSION['shooping_cart'][$i]['price'].'</td>';
			echo '<td>£'.$subtotal.'</td>';
			echo '<td><a href="cart.php?action=remove&id='.$_SESSION['shooping_cart'][$i]['id'].'" class="btn-sm btn-danger">Remove</a></td><tr>';
			$total = $total+$subtotal;
			// these below inputs are for paypal payments
			echo '<input type="hidden" name="item_name_'.$sr.'" value="'.$_SESSION['shooping_cart'][$i]['name'].'">';
			echo '<input type="hidden" name="item_number_'.$sr.'" value="'.$_SESSION['shooping_cart'][$i]['id'].'">';
			echo '<input type="hidden" name="amount_'.$sr.'" value="'.$_SESSION['shooping_cart'][$i]['price'].'">';
			echo '<input type="hidden" name="quantity_'.$sr.'" value="'.$_SESSION['shooping_cart'][$i]['qty'].'">';
		}
		$_SESSION['total'] = $total;
		echo '<tr><td colspan="6" class="text-center"><b>Total: £'.$_SESSION['total'].'</b></td>';
	} else {
		echo '<tr><td colspan="6" class="text-center text-danger">Nothing to show</td>';
	}
}

function generate_tracking_number() { // this function will genrate a tracking number every time when it called
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; // the tracking number will genrated from this string
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 10; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function confirm_membership_payment() // this function will confirm paypal payment for membership
{
	if (isset($_GET['action']) && $_GET['action'] == "confirm_purchase") {
		$user_id = $_SESSION['user_id'];
		$name = $_SESSION['mem_name'];
		$id = $_SESSION['mem_id'];
		$price = $_SESSION['mem_price'];
		$paypal_tx = $_GET['tx'];
		$tracking_number = generate_tracking_number().generate_tracking_number(); // These two function will genrate tracking numner for purchased memberships
		$query = query("INSERT INTO memberships(name,price,user_id,paypal_tx,tracking_number) VALUES ('".$name."',".$price.",".$user_id.",'".$paypal_tx."','".$tracking_number."')");
		confirm($query);
		unset($_SESSION['mem_name']);
		unset($_SESSION['mem_id']);
		unset($_SESSION['mem_price']);
		header("location: membership.php?tracking_number=".$tracking_number."");
	}
}

function genrate_favorites_list() // this will control all functionalities of favorites module like cart stated above
{
	if (isset($_GET['action'])) {
		if ($_GET['action'] == "add") { // if the perameter in url action is add than this will add product to the favorites list all functionalites ar same as cart
			$name = $_GET['name'];
			$id = $_GET['id'];
			$qty = $_GET['qty'];
			$price = $_GET['price'];
			if (!isset($_SESSION['Favorites']) || count($_SESSION['Favorites']) == 0) {
				$_SESSION['Favorites'] = [];
				$new_item = array(
					"id" => $id,
					"name" => $name,
					"qty" => $qty,
					"price" => $price,
				);
				array_push($_SESSION['Favorites'], $new_item);
				header("location: favorites.php");

			} else {

				for ($i=0; $i < count($_SESSION['Favorites']); $i++) {
					if ($_SESSION['Favorites'][$i]["id"] == $id) {
						// $_SESSION['Favorites'][$i]['qty'] = $_SESSION['Favorites'][$i]['qty']+$qty;
						header("location: favorites.php");
						return false;
					}
				}

				$new_item = array(
					"id" => $id,
					"name" => $name,
					"qty" => $qty,
					"price" => $price,
				);
				array_push($_SESSION['Favorites'], $new_item);
				header("location: favorites.php");
			}
		}

		if ($_GET['action'] == "remove") {
			$id = $_GET['id'];
			for ($i=0; $i < count($_SESSION['Favorites']); $i++) {
				if ($_SESSION['Favorites'][$i]["id"] == $id) {
					unset($_SESSION['Favorites'][$i]);
					$_SESSION['Favorites'] = array_values($_SESSION['Favorites']);
					header("location: favorites.php");
				}
			}
		}

		if ($_GET['action'] == "clear") {
			unset($_SESSION['Favorites']);
			header("location: favorites.php");
		}

		if ($_GET['action'] == "confirm_order") {
			$tracking_number = generate_tracking_number().generate_tracking_number();
			$total = $_SESSION['list_total'];
			$user_id = $_SESSION['user_id'];
			$paypal_tx = $_GET['tx'];
			$query = query("INSERT INTO orders(user_id,amount,tracking_number,paypal_tx) VALUES (".$user_id.",".$total.",'".$tracking_number."','".$paypal_tx."')");
			confirm($query);
			$order_id = last_id();
			for ($i=0; $i < count($_SESSION['Favorites']); $i++) { 
				$id = $_SESSION['Favorites'][$i]['id'];
				$name = $_SESSION['Favorites'][$i]['name'];
				$price = $_SESSION['Favorites'][$i]['price'];
				$qty = $_SESSION['Favorites'][$i]['qty'];
				$query = query("INSERT INTO order_detail(order_detail_id,item_id,item_name,item_price,item_quantity) VALUES (".$order_id.",".$id.",'".$name."',".$price.",".$qty.")");
				confirm($query);
			}
			unset($_SESSION['Favorites']);
			unset($_SESSION['list_total']);
			header("location: favorites.php?tracking_number=".$tracking_number."");
		}
	}
}


function get_favorites_list() // this function will get the cart into table for user
{
	$total = 0;
	if (isset($_SESSION['Favorites']) && count($_SESSION['Favorites']) != 0) {
		for ($i=0; $i < count($_SESSION['Favorites']); $i++) { // the table->rows for user to telly that he purchasing right product and inputs is for paypal payment
			$sr = $i+1;
			$subtotal = $_SESSION['Favorites'][$i]['qty'] * $_SESSION['Favorites'][$i]['price'];
			echo '<tr><td>'. $sr .'</td>';
			echo '<td>'.$_SESSION['Favorites'][$i]['name'].'</td>';
			echo '<td>'.$_SESSION['Favorites'][$i]['qty'].'</td>';
			echo '<td>£'.$_SESSION['Favorites'][$i]['price'].'</td>';
			echo '<td>£'.$subtotal.'</td>';
			echo '<td><a href="favorites.php?action=remove&id='.$_SESSION['Favorites'][$i]['id'].'" class="btn-sm btn-danger"><i class = "fa fa-trash"></i></a> | <a href="cart.php?action=add&id='.$_SESSION['Favorites'][$i]['id'].'&qty=1&price='.$_SESSION['Favorites'][$i]['price'].'&name='.$_SESSION['Favorites'][$i]['name'].'" class="btn-sm btn-success" title="Add to Cart"><i class = "fa fa-shopping-cart"></i></a></td><tr>';
			$total = $total+$subtotal;
		}
		$_SESSION['list_total'] = $total;
		echo '<tr><td colspan="6" class="text-center"><b>Total: £'.$_SESSION['list_total'].'</b></td>';
	} else {
		echo '<tr><td colspan="6" class="text-center text-danger">Nothing to show</td>';
	}
}

function get_cart_orders() // this function will get the cart into table for user
{
	$total = 0;
	if (isset($_SESSION['shooping_cart']) && count($_SESSION['shooping_cart']) != 0) {
		for ($i=0; $i < count($_SESSION['shooping_cart']); $i++) { // the table->rows for user to telly that he purchasing right product and inputs is for paypal payment
			$sr = $i+1;
			// $paypal_tx = $_GET['tx'];
			$paypal_tx = "txtxtxt";
			$subtotal = $_SESSION['shooping_cart'][$i]['qty'] * $_SESSION['shooping_cart'][$i]['price'];
			$tracking_number = generate_tracking_number().generate_tracking_number(); // this will genrate tracking number for user to track the order
			echo '<tr><td>'. $sr .'</td>';
			echo '<td>'.$_SESSION['shooping_cart'][$i]['name'].'</td>';
			echo '<td>'.$_SESSION['shooping_cart'][$i]['qty'].'</td>';
			echo '<td>£'.$_SESSION['shooping_cart'][$i]['price'].'</td>';
			echo '<td>£'.$subtotal.'</td>';
			$total = $total+$subtotal;
		}
		$_SESSION['total'] = $total;
		echo '<tr><td colspan="6" class="text-center"><b>Total: £'.$_SESSION['total'].'</b><br>Your order tracking number : <b>'.$tracking_number.'</b></td>';
	} else {
		header("location: shop.php");
	}
	if ($_GET['action'] == "confirm_order") { // this will take place if palpal payment is complete/successed 
			$total = $_SESSION['total'];
			$user_id = $_SESSION['user_id'];
			$query = query("INSERT INTO orders(user_id,amount,tracking_number,paypal_tx) VALUES (".$user_id.",".$total.",'".$tracking_number."','".$paypal_tx."')");
			confirm($query);
			$order_id = last_id();
			for ($i=0; $i < count($_SESSION['shooping_cart']); $i++) { 
				$id = $_SESSION['shooping_cart'][$i]['id'];
				$name = $_SESSION['shooping_cart'][$i]['name'];
				$price = $_SESSION['shooping_cart'][$i]['price'];
				$qty = $_SESSION['shooping_cart'][$i]['qty'];
				$query = query("INSERT INTO order_detail(order_detail_id,item_id,item_name,item_price,item_quantity) VALUES (".$order_id.",".$id.",'".$name."',".$price.",".$qty.")");
				confirm($query);
			}
			unset($_SESSION['shooping_cart']);
			unset($_SESSION['total']);
		}

}

function get_membership_user() // this will show purchased memberships for current login user
{
	if (isset($_SESSION['username'])) {
		$id = $_SESSION['user_id'];
		$query = query("SELECT * FROM memberships WHERE user_id = {$id}");
		confirm($query);
		$sr=1;
		$count = num_rows($query);
		if ($count > 0) {
			while ($data = fetch_array($query)) {
			if ($data['status'] == 1) {
				$status = "<span class='text-success'>Running</span>";
				$action = '<a href="profile.php?cancle_id='.$data['membership_id'].'" class="btn-sm btn-danger">Cancel</a>';
			} else {
				$status = "<span class='text-danger'>Expired</span>";
				$action = '<a href="#"" class="btn-sm btn-danger">Expired</a>';
			}
			echo '<tr><td>'. $sr .'</td>';
			echo '<td>'.$data['name'].'</td>';
			echo '<td>'.$data['tracking_number'].'</td>';
			echo '<td>£'.$data['price'].'</td>';
			echo '<td>'.$status.'</td>';
			echo '<td>'.$action.'</td></tr>';
			$sr++;
		}
		} else {
			echo "<tr><td class='text-danger text-center' colspan='6'>You didn't purchased any membership.</td></tr>";
		}
		
	}
}

function cancel_membership() // this will cancel/expire the membership
{
	if (isset($_GET['cancle_id'])) {
		$id = $_GET['cancle_id']; // cancel id means membership_id which is from database
		$query = query("UPDATE memberships SET status=0 WHERE membership_id = {$id}");
		confirm($query);
		header("location: profile.php"); // after this will redirect to profile page in order to clear all perameters from url
	}
}

function login_admin() // this will log admin into the website
{
	if (isset($_SESSION['admin_id'])) { // if user is already logged in will redirect to homepage
		header("location: index.php");
	} else {
		if (isset($_POST['signin'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$query = query("SELECT * FROM admin WHERE username = '".$username."' AND password = '".$password."'"); // this will check is provided information is correct
			confirm($query);
			$count = num_rows($query);
			if ($count == 1) {
				$data = fetch_array($query);
				$_SESSION['admin_id'] = $data['admin_id'];
				$_SESSION['admin_name'] = "Admin";
				header("location: users.php");
			} else {
				echo "<script>alert('Please enter correct details!')</script>"; // this alert will show if login information is incorrect
			}
		}
	}
}

function get_all_users() // this will retutn all registered users from database
{
	$query = query("SELECT * FROM users");
	confirm($query);
	$sr=1;
	$count = num_rows($query);
	if ($count > 0) {
		while ($data = fetch_array($query)) {
			echo '<tr><td>'. $sr .'</td>';
			echo '<td>'.$data['username'].'</td>';
			echo '<td>'.$data['created_at'].'</td></tr>';
			$sr++;
		}
	} else {
		echo "<tr><td class='text-danger text-center' colspan='6'>Nothing to shoe.</td></tr>";
	}
}

function get_all_memberships() // this will return all purchased memberships from users
{
	$query = query("SELECT * FROM memberships");
	confirm($query);
	$sr=1;
	$count = num_rows($query);
	if ($count > 0) {
		while ($data = fetch_array($query)) {
			if ($data['status'] == 1) {
				$status = "<span class='text-success'>Running</span>";
			} else {
				$status = "<span class='text-danger'>Expired</span>";
			}
			$user_id = $data['user_id'];
			$query_1 = query("SELECT username FROM users WHERE user_id = {$user_id}"); // this will fetch data of user who purchased that membership
			confirm($query_1);
			$username = fetch_array($query_1);
			$username = $username['username'];
			echo '<tr><td>'. $sr .'</td>';
			echo '<td>'.$data['name'].'</td>';
			echo '<td>'.$username.'</td>';
			echo '<td>£'.$data['price'].'</td>';
			echo '<td>'.$status.'</td>';
			echo '<td>'.$data['created_at'].'</td></tr>';
			$sr++;
		}
	} else {
		echo "<tr><td class='text-danger text-center' colspan='6'>Nothing to shoe.</td></tr>";
	}
}