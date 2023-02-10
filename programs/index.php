<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Setting the pages character encoding -->
	<meta charset="UTF-8">

	<!-- The meta viewport will scale my content to any device width -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Link to my stylesheet -->    
	<!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
        *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body{
	font-family: sans-serif;
	min-height: 100vh;
	color: #0b0b0b;
	background-color: #f4f4f4;
}

h2{
	text-align: center;
	padding: 15px 0;
	font-size: 32px;
	line-height: 30px;
	color: #201f1f;
	padding: 20px;
	margin-top: 30px;
}

table{
	width:  1000px;
	margin: 30px auto;
	border: 2px solid; 
}

table th{
	column-width: auto;
	padding: 10px 0;
	background-color: #51b1d7;
	/* background-color: #fff; */
	border: 2px solid;
}

table td{
	column-width: auto;
	padding: 10px;
	border: 2px solid blue;	
	text-align: center;
	background-color: #fff;
	width: 100px;
	overflow: hidden;
}

table img{
	width:  70%;
}

table td.total-price{
	font-weight: bold;
	font-size: 22px;
}
table a{
	text-decoration: none;
	color: darkred;
	background-color: #ffecef;
	padding: 10px 15px;
}
table a:active{
	background-color: #ccf4d6;
	color:  green;
}

table select{
	padding: 10px;
	width:  200px;
	font-size: 16px;
	border: thin solid #d4d4d4;
	background-color: transparent;
}
table select:focus{
	outline: none;
}

    </style>
	<title>FS Programs</title>
</head>
<body>

	<h2>FS Programs</h2>

	<!-- Lets start with the table element -->
	<table class="table table-bordered table-sm border-primary">
		<!-- The first row is the tables header -->
		<tr>			
			<th width=10% >Sl.No</th>
            <th Width=15%>Type</th>
			<th style="text-align:left;">Problem Statement</th>
			
			
		</tr>

		<!-- Next we will have the template which we will use inside
	  		the loop and poplulate with the data from the json file. -->

		<?php

			$json_data = file_get_contents("programs.json");
			$products = json_decode($json_data, true);
			if(count($products) != 0){
				foreach ($products as $product) {
					?>
						<tr>
							
							<td>
								<?php echo $product['id']; ?>
							</td>
                            <td>
								<?php echo $product['type']; ?>
							</td>
							<td style="text-align:left;">
								<?php echo $product['name']; ?>
							</td>
							
							
						</tr>
					<?php
				}
			}
		?>
	</table>
</body>
</html>
