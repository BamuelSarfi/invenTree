<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Login</title>
</head>
<body>
    <style>
		body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: var(--background-light);
    text-align: center;
    font-family: "Cascadia Mono", monospace;
    min-height: 100vh;
    padding: 16px;
    margin: 0;
}

* {
    box-sizing: border-box;
    margin: 4px;
}

h2 {
    color: black;
    font-size: 2rem;
    font-family: "Cascadia Mono", monospace;
    margin-top: 1rem;
}

div form {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    max-width: 320px;
    padding: 20px;
    border-radius: 35px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

div input[type="text"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 16px;
    border: 2px solid #2ea9da;
    border-radius: 16px;
    background-color: #f2f2f2;
    font-size: 1rem;
}

div input[type="submit"] {
    width: 100%;
    padding: 16px;
    border-radius: 50px;
    background-color: var(--foreground-deep);
    color: #fff;
    font-family: "Cascadia Mono", monospace;
    font-weight: bold;
    font-size: 1.2rem;
    border: none;
    transition: background-color 0.3s ease;
}

div input[type="submit"]:hover {
    background-color: #0d4241;
    cursor: pointer;
}

.error {
    color: #a94442;
    background-color: #f2dede;
    padding: 8px;
    width: 100%;
    border-radius: 12px;
    font-size: 0.9rem;
}

a #logout {
    display: block;
    background-color: #0d4241;
    border-radius: 12px;
    color: white;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    margin-top: 16px;
}

	</style>

<div style = "display:block; text-align:center;">
		<form action="login.php" method="post">
     	<h2>LOGIN</h2><br>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<input type="text" name="user_id" placeholder="Enter Your UserID"><br>

     	<input type="submit" value="Let's Go">
     </form>
	</div>
	 <script>
		window.addEventListener('Load', function() {
			alert("Welcome to the Login Page");
		 });
	 </script>
</body>
</html>