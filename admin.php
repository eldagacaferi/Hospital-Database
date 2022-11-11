<?php
include('./admin_server.php')
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<style>
	*{
		padding:0;
		margin:0;
		box-sizing:border-box;
}
body{
		background:#e9eef5;
		display:flex;
		justify-content:center;
		align-items:center;
		height:100vh;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.container{
		background: #fff;
		padding: 20px;
		max-width: 330px;
		width: 100%;
		border-radius: 22px;
		box-shadow: 0px 27px 20px 0px rgba(0, 0, 0, 0.43);
		position: relative;
		overflow: hidden;
}
.header {
		height: 26px;
		clear: both;
}
h4 {
		float: left;
		font-size: 13px;
		margin-top: 5px;
		color: #2091eb;
}
h3 {
		float: right;
		font-size: 20px;
		color: #e0e0e0;
}

h2 {
		float: right;
		font-size: 14px;
		color: #e0e0e0;
}
form {
		margin:48px 29px;

}
.label {
		color: #6a7082;
		font-size: 14px;
		font-weight: 600;
		margin-left: 20px;
}
.input {
		margin-top: 17px;
}
.input .label p {
		display: inline-block;
}
.input .label i {
		display: inline-block;
}

.input input {
		padding: 11px;
		margin-top: 2px;
		border-radius: 32px;
		border: 1px solid #eaeef5;
		outline: none;
		background: #f5f6fa;
		width: 100%;
}
button {
		padding: 10px 28px;
		margin: 16px auto;
		display: block;
		background: #209ef0;
		border: none;
		color: #eee;
		border-radius: 25px;
		cursor: pointer;
		outline: none;
}
.login-with{
		 margin:0 29px;
}
.login-with ul{
		list-style: none;
}
li {
		margin: 7px 38px;
}
.login-with ul li i ,
.login-with ul li p {
		display: inline;
		color: #6a7082;
		font-size: 13px;
}
ul li span {
		width: 17px;
		height: 17px;
		border: 1px solid #6a7082;
		display: inline-block;
		font-size: 12px;
		text-align: center;
		line-height: 15px;
}
.footer p {
		font-size: 10px;
		font-weight: 700;
		color: #848997;
		float: right;
	margin-top:20px;
}
.footer p:first-child {
		float: left;
}


.overlayer {
		position: absolute;
		top: 0%;
		left: 0%;
		height: 100%;
		width: 100%;
		display: flex;
		background: #2091eb;
		justify-content: center;
		align-items: center;
		color: #eee;
		overflow: hidden;
}
.overlayer p {
		font-size: 39px;
		margin-top: 120px;
		font-weight: 800;
		text-align: center;
}
.overlayer {
		position: absolute;
		top: 0%;
		left: 0%;
		height: 100%;
		width: 100%;
		display: none;
		background: NONE;
		justify-content: center;
		align-items: center;
		color: #eee;
		z-index: 1;
}
.over{
		position: absolute;
		top: 58%;
		left: 48%;
		height: 0;
		width: 0;
		border-radius: 50%;
		background: #2091eb;
		transition: all .3s linear;
}
.over.active{
		top: -46px;
		left: -35%;
		height: 564px;
		width: 564px;
		border-radius: 50%;
}
.over.active~.overlayer{
		display: unset;
}

.overlayer p {
		font-size: 39px;
		margin-top: 120px;
		font-weight: 800;
		text-align: center;
}
i.fa.fa-close {
		margin: 150px auto;
		display: block;
		width: 50px;
		height: 50px;
		line-height: 40px;
		border: 5px solid;
		font-size: 31px;
		text-align: center;
		border-radius: 50%;
		cursor: pointer;
}
</style>

</head>
<body>
<div class="container">
		<div class="header">
			<h2>If you're not the admin please leave the site</h2>
				<h4>Admin login</h4>
				<h3>Login to Continue</h3>
		</div>

		<form action="index_admin.php" method="POST">
			<?php include('errors.php'); ?>
				<div class="input">
						<div class="label" >
								<i class="fa fa-sign-in"></i>
								<p>admin log in</p>
						</div class="label">
						<input type="text" name="username">
				</div>
				<div class="input">
						<div class="label">
								<i class="fa fa-unlock-alt"></i>
								<p>password</p>
						</div class="label">
						<input type="password" name="password">
				</div>
				<input type="submit" class="btn" name="login" value="Login">
		</form>

		<div class="footer">
				<a href="index.php"><p style="margin-left: 130px;">Go Back</p></a>
		</div>
		<div class="over"></div>
		<div class="overlayer">
				<p>Welcome!</p>
				<i class="fa fa-close"></i>
		</div>
</div>

<script>
	$(function () {
		$(".btn").on('click',function(e){
				e.preventDefault();
				$(".over").addClass("active");
		})
		$(".overlayer i").on('click',function(e){
				e.preventDefault();
				$(".over").removeClass("active");
		})
})

</script>

</body>
</html>