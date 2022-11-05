<html>
<head>
  <title>WDD Midterm Long Quiz 2 </title>
  <style>
    body {
		background-color: violet;
		}
    .main-div
	{
      margin: 100px auto;
      text-align: center;
      padding: 50px;
      width: 500px;
      min-height: 100px;
      border-radius: 20px;
      background-color: white;
    }
  </style>

</head>
<body>

  <div class = "main-div">
  <h1><b>Problem 1</b></h1>
  <h2>Net Pay Computation</h2>

  <?php
	$salaryRate = 600;
	$days = 15;
	$salary = $salaryRate*$days;
	$tax = 0.30;
	$taxableAmount = $salary*$tax;

	echo "The Salary Rate is: <b>" . ($salaryRate) . " / per day </b><br/>";
	echo "Salary =<b> Salary Rate * 15 Days </b><br/>";
	echo "Salary = <b>". ($salary) ."</b><br /><br />";
	echo "Taxable Amount = <b>30% of Salary </b><br/>";
	echo "Taxable Amount = <b>". ($salary*$tax) ."</b><br/><br />";
	echo "Net Pay = <b>Salary - Taxable Amount </b><br/>";
	echo "Net Pay = <b>". ($salary-$taxableAmount) . "</b><br/>";
?>
 
<body>
<br>
<br>
  <h1>Problem 2</h1>
  <h2>Sum of Integers</h2>

  <?php
  
	$sum=0; 
	for ($i=1; $i<=50; $i++) {

	$sum=$sum+$i;

	} 
	echo "The sum of positive integers from 1-5 totals to <b>". ($sum) . "</b><br/>";

?>
 
</body>
</html>