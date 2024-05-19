<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<title>
		Build a Survey Form using HTML and CSS
	</title>

	<style>
	
		body {
			background-color: #05c46b;
			font-family: Verdana;
			text-align: center;
		}

		form {
			background-color: #fff;
			max-width: 500px;
			margin: 50px auto;
			padding: 30px 20px;
			box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
		}

		.form-control {
			text-align: left;
			margin-bottom: 25px;
		}

		.form-control label {
			display: block;
			margin-bottom: 10px;
		}

	
		.form-control input,
		.form-control select,
		.form-control textarea {
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			padding: 10px;
			display: block;
			width: 95%;
		}

	
		.form-control input[type="radio"],
		.form-control input[type="checkbox"] {
			display: inline-block;
			width: auto;
		}

		
		button {
			background-color: #05c46b;
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			font-size: 21px;
			display: block;
			width: 100%;
			margin-top: 50px;
			margin-bottom: 20px;
			cursor: pointer;
		}
	</style>
</head>

<body>
	<h1>Survey Form</h1>

	
	<form id="form" action="insert_survey.php" method="post">
	
		<div class="form-control">
			<label for="name" id="label-name" >
				Name
			</label>

			
			<input type="text" id="name"
				placeholder="Enter your name"  name="name"/>
		</div>

		<div class="form-control">
			<label for="email" id="label-email" >
				Email
			</label>

			
			<input type="email" id="email"
				placeholder="Enter your email" name="email"/>
		</div>

		<div class="form-control">
			<label for="age" id="label-age">
				Age
			</label>

			
			<input type="text" id="age"
				placeholder="Enter your age"  name="age"/>
		</div>

		<div class="form-control">
			<label for="role" id="label-role">
				Which option best describes you?
			</label>

		
			<select name="role" id="role" >
				<option value="student" >Student</option>
				<option value="intern">Intern</option>
				<option value="professional">
					Professional
				</option>
				<option value="other">Other</option>
			</select>
		</div>

		<div class="form-control">
			<label>language[]s and Frameworks known
				<small>(Check all that apply)</small>
			</label>
			
			<label for="inp-1">
				<input type="checkbox" name="language[]" value="C">C
				</input>
			</label>
			<label for="inp-2">
				<input type="checkbox" name="language[]" value="C++">C++
				</input>
			</label>
			<label for="inp-3">
				<input type="checkbox" name="language[]" value="C#">C#
				</input>
			</label>
			<label for="inp-4">
				<input type="checkbox" name="language[]" value="Java">Java
				</input>
			</label>
			<label for="inp-5">
				<input type="checkbox" name="language[]" value="Python">Python
				</input>
			</label>
			<label for="inp-6">
				<input type="checkbox" name="language[]" value="JavaScript">JavaScript
				</input>
			</label>
			<label for="inp-7">
				<input type="checkbox" name="language[]" value="React">React
				</input>
			</label>
			<label for="inp-7">
				<input type="checkbox" name="language[]" value="Angular">Angular
				</input>
			</label>
			<label for="inp-7">
				<input type="checkbox" name="language[]" value="Django">Django
				</input>
			</label>
		</div>

		<div class="form-control">
			<label for="comment">
				Any comments or suggestions
			</label>
			<textarea name="comment" id="comment"
					placeholder="Enter your comment here">
			</textarea>
		</div>

		<button type="submit" value="submit">
			Submit
		</button>
	</form>
</body>

</html>
