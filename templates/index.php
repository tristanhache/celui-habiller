<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ancient Greek Shop</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #F8F8F8;
			color: #333;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #F5DEB3;
			padding: 20px;
			text-align: center;
		}
		h1 {
			font-size: 48px;
			margin: 0;
		}
		nav {
			background-color: #D2B48C;
			padding: 10px;
			text-align: center;
		}
		nav a {
			display: inline-block;
			color: #333;
			text-decoration: none;
			padding: 10px;
			margin: 0 10px;
			border-radius: 5px;
			background-color: #F5DEB3;
			transition: background-color 0.3s;
		}
		nav a:hover {
			background-color: #D2B48C;
			color: #fff;
		}
		.container {
			width: 80%;
			margin: 0 auto;
			padding: 20px;
		}
		.product {
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 5px rgba(0,0,0,0.3);
			padding: 20px;
			margin-bottom: 20px;
		}
		.product img {
			max-width: 100%;
			height: auto;
			border-radius: 5px;
			box-shadow: 0 0 5px rgba(0,0,0,0.3);
		}
		.product h2 {
			font-size: 24px;
			margin-top: 0;
		}
		.product p {
			margin: 10px 0;
		}
		.product button {
			background-color: #D2B48C;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px;
			cursor: pointer;
			transition: background-color 0.3s;
		}
		.product button:hover {
			background-color: #F5DEB3;
		}
		footer {
			background-color: #F5DEB3;
			padding: 10px;
			text-align: center;
			position: fixed;
			bottom: 0;
			width: 100%;
		}
	</style>
</head>
<body>
	<header>
		<h1>Ancient Greek Shop</h1>
	</header>
	<nav>
		<a href="#">Home</a>
		<a href="#">Shop</a>
		<a href="#">Contact</a>
	</nav>
	<div class="container">
		<div class="product">
			<img src="https://via.placeholder.com/300x200" alt="Product">
			<h2>Product Title</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor sapien in enim faucibus lacinia. Nam sit amet ipsum at massa imperdiet sagittis.</p>
			<button>Add to Cart</button>
		</div>
		<div class="product">
			<img src="https://via.placeholder.com/300x200
            "alt="Product">
<h2>Product Title</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor sapien in enim faucibus lacinia. Nam sit amet ipsum at massa imperdiet sagittis.</p>
<button>Add to Cart</button>
</div>
<!-- Add more product divs as needed -->
</div>
<footer>
<p>© 2023 Tristan Industries</p>
</footer>

</body>
</html>
