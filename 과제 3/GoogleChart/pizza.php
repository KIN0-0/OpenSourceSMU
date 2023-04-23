<!DOCTYPE html>
<html>
<head>
	<title>Insert Pizza</title>
	<script>
	$(document).ready(function(){
		$("#submit").click(function(){
			var dataString = $("#pizza_form").serialize();
			$.ajax({
				type: "POST",
				url: "add_pizza.php",
				data: dataString,
				cache: false,
				success: function(){
					alert("입력이 완료되었습니다.");
				}
			});
			return false;
		});
	});
	</script>
</head>
<body>
	<form id="pizza_form">
		<label for="name">이름:</label>
		<input type="text" name="name" id="name">
		<br>
		<label for="quantity">수량:</label>
		<input type="text" name="quantity" id="quantity">
		<br>
		<input type="submit" name="submit" id="submit" value="입력">
	</form>
</body>
</html>
