<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Pemrograman website modul
	</title>
	<style type="text/css">

		form{
			width: 50%;
			height: auto;
			padding: 20px;
			border: 2px solid #ccc;
			margin: auto;
			transition: .5s;

		}
		form * {
			font-size: 20px;
		}
		form input{
			display: block;
			width: 100%;
			height: auto;
			padding: 20px;
			/*border-radius: 4px;*/
			border: none;
			border-bottom: 2px solid #000;
			box-sizing: border-box;
		}
		button{
			width: 100%;
			height: auto;
			padding: 20px;
			box-shadow: none;
			background: green;
			color: #fff;
			border-radius: 3px;
			border: none;
			margin-top: 50px;
		}
		form:hover{
			transform:scale(1.2);

		}
	</style>
</head>
<body>

	<form>
		<h1 style="text-align: center;"> Form Data </h1>
		<input type="text" placeholder="Isi nama anda" name="nama">
		<input type="number" placeholder="Isi umur anda" name="umur">

		<button type="submit">
			Kirim
		</button>
	</form>

</body>
</html>