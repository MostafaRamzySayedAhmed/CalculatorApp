<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<title>Calculator</title>
	
	<!-- Including Font Awesome 5.13 -->
	
	<link rel="stylesheet" href="css/all.css">
	
	<!-- Including Bootstrap -->
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	<!-- The Favourite Icon -->

	<link rel="icon" href="images/Calculator.ico" type="image/x-icon">

</head>

	<body>

		<div class="container">

			<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

			<!-- The First Operator -->

				<div class="form-group">

					<label class="control-label">Enter The First Number</label>

					<input placeholder="Enter Your First Number Here" class="form-control col-xs-6" required name="first" type="number" value="<?php echo $_POST['first'];?>">

				</div>

			<!-- The Second Operator -->

				<div class="form-group">

					<label class="control-label">Enter The Second Number</label>

					<input placeholder="Enter Your Second Number Here" class="form-control col-xs-6" required name="second" type="number"value="<?php echo $_POST['second'];?>">

				</div>



				<div class="form-group">

					<!-- The Four Basic Aritmatic Operations -->

					<div class="operation">

					<label class="select control-label lead">Select The Operation</label>


					<!-- The Addition Operation -->

					<div class="radio">

						<label><input id="add" type="radio" name="operation" value="Addition">Addition
						<i class="fas fa-plus-square"></i></label>

					</div>


					<!-- The Subtraction Operation -->

					<div class="radio">

						<label><input id="subtract" type="radio" name="operation" value="Subtraction">Subtraction
						<i class="fas fa-minus-square"></i></label>

					</div>

					<!-- The Multiplication Operation -->

					<div class="radio">

						<label><input id="multiply" type="radio" name="operation" value="Multiplication">Multiplication
						<i class="fas fa-times"></i></label>

					</div>

					<!-- The Division Operation -->

					<div class="radio">

						<label><input id="divide" type="radio" name="operation" value="Division">Division
						<i class="fas fa-divide"></i></label>

					</div>

				</div>

				</div>


				<input type="submit" value="Result" class="result btn btn-success">


		</form>
		</div>



		<?php

		if ($_SERVER["REQUEST_METHOD"] == "POST") 

		{

		$first_operator = $_POST['first'];
		$second_operator = $_POST['second'];


			// Server Side Validation For The First Operator

			if(empty($first_operator) || ! is_numeric($first_operator))

				{
					echo "<spnn class='error-message-operator alert alert-danger'>Please Eneter
					<strong> Valid Values</strong></span>";
				}

			else
				{
					$first_operator = $_POST['first'];
				}

			// Server Side Validation For The Second Operator

			if(empty($second_operator) || ! is_numeric($second_operator))

				{
					echo "<spnn class='error-message alert alert-danger'>Please Eneter
					<strong> Valid Values</strong></span>";
				}

			else
				{
					$second_operator = $_POST['second'];
				}


			// Server Side Validation For The Operatorion

			  if(isset ($_POST['operation']))

				{

					if($_POST['operation'] == 'Addition')


						{

							$result =   $first_operator + $second_operator;
							echo "<span class='message'>The Result Of The Selected Operation Is:   ". $result. "</span>";

						}


					if($_POST['operation'] == 'Subtraction')

						{

							$result =   $first_operator - $second_operator;
							echo "<span class='message'>The Result Of The Selected Operation Is:   ". $result. "</span>";

						}

					if($_POST['operation'] == 'Multiplication')

						{


							$result =   $first_operator * $second_operator;
							echo "<span class='message'>The Result Of The Selected Operation Is:   ". $result. "</span>";

						}

					if($_POST['operation'] == 'Division')

						{

							if($second_operator == 0)

							  {

								  echo "<span class='error'>The Second Operator Can Not Be Zero</span>";

							  }

						   else

							  {

									$result =   $first_operator / $second_operator;

									echo "<span class='message'>The Result Of The Selected Operation Is:   ". $result. "</span>";

							  }


						}
				}	

			else

				{

					echo "<span class='error-message-operation alert alert-danger'> Please Select an 
					<strong> Operation</strong></span>";

				}
		}

		?>

		<!-- Including Bootstrap -->

		<script src="js/jquery-1.12.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
	
</html>