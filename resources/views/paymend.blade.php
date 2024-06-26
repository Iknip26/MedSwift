<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Payment getway form design in Hindi</title>
	<link rel="stylesheet" type="text/css" href="payment.css">
</head>
<style>
  *{padding:0; margin:0; box-sizing: border-box; font-family:sans-serif;}

header{
	width: 100vw;
	min-height: 100vh;
	background: linear-gradient(135deg, rgba(111, 173, 255, 0.373) 25%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 192, 203, 0.2) 75%);
	font-size: 1.2rem;
	display: flex;
	justify-content: center;
	align-items: center;
}
.container{
	background: #BCC2EB;
	max-width: 800px;
	min-height: 500px;
	display: flex;
	border-radius: 15px;
	justify-content:space-between;
	align-items: flex-start;
	padding: 0.5rem 1.5rem;
	box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.3);
}
.left{
	flex-basis: 50%;
}
.right{
	flex-basis: 50%;
}
form{
	padding: 1rem;
}

h3{
	margin-top: 1rem;
	color:#2c3e50;
	}

form input[type="text"]{
	width: 100%;
	padding: 0.5rem 0.7rem;
	margin: 0.5rem 0;
	outline: none;
	border-radius: 15px;
}

#zip{
	display: flex;
	margin-top: 0.5rem;
	border-radius: 15px;
}
#zip select{
	padding: 0.5rem 0.7rem;
	border-radius: 15px;
}
#zip input[type="number"]{
	padding: 0.5rem 0.7rem;
	margin-left: 5px;	
	border-radius: 15px;
}
input[type="submit"]{
	width: 100%;
	padding: 0.7rem 1.5rem;
	background: #34495e;
	color: white;
	border: none;
	outline: none;
	margin-top: 1rem;
	cursor: pointer;
	border-radius: 15px;
}

input[type="submit"]:hover{
	/* background: #2c3e50; */
	border-radius: 15px;
}


@media only screen and (max-width: 770px){
	.container{
		flex-direction: column;
	}
	body{
		overflow-x: hidden;
	}
}


</style>
<body>
<header>
	<div class="container">
		<div class="left">
			<h3>BILLING ADDRESS</h3>
			<form>
				Full name
				<input type="text" name="" placeholder="Enter name">
				Email
				<input type="text" name="" placeholder="Enter email">

				Address
				<input type="text" name="" placeholder="Enter address">
				
				City
				<input type="text" name="" placeholder="Enter City">
				<div id="zip">
					<label>
						State
						<select>
							<option>Pilih Daerah..</option>
							<option value="Yogyakarta">Yogyakarta</option>
							<option value="Sleman">Sleman</option>
							<option value="KulonProgo">KulonProgo</option>
							<option value="Bantul">Bantul</option>
							<option value="Gunung Kidul">Gunung Kidul</option>
						</select>
					</label>
						<label>
						Zip code
						<input type="number" name="" placeholder="Zip code">
					</label>
				</div>
			</form>
		</div>
		<div class="right">
			<h3>PAYMENT</h3>
			<form>
				Accepted Card <br>
				<img src="../img/card1.jpg" width="100">
				<img src="../img/card2.jpg" width="50">
				<br><br>

				Credit card number
			<input type="text" name="" placeholder="Enter card number">
				
				Exp month
				<input type="text" name="" placeholder="Enter Month">
				<div id="zip">
					<label>
						Exp year
						<select>
							<option>Choose Year..</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
						</select>
					</label>
						<label>
						CVV
						<input type="number" name="" placeholder="CVV">
					</label>
				</div>
			</form>
			<input type="submit" name="" value="Proceed to Checkout">
		</div>
	</div>
</header>
</body>
</html>