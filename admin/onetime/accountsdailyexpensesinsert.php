<?php
include "db.php";
include('accountsdailyexpensesfunction.php');
if(isset($_POST["operation"]))
{



	if($_POST["operation"] == "Add")
	{
		$statement = $connection->prepare("
			INSERT INTO productprice (productid,type,units,price,mrp,pr) 
			VALUES (:productid,:type,:units,:price,:mrp,:pr)
		");
		$result = $statement->execute(
			array(
				':productid'	=>	$_POST["productid"],
				':type'	=>	$_POST["type"],
				':units'	=>	$_POST["units"],
				':price'	=>	$_POST["price"],
				':mrp'	=>	$_POST["mrp"],
				':pr'	=>	$_POST["pr"]
		
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}







	if($_POST["operation"] == "Edit")
	{
		
		$statement = $connection->prepare(
			"UPDATE productprice 
			SET productid = :productid, type = :type, price = :price, mrp = :mrp,units =:units,pr=:pr
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':productid' =>	$_POST["productid"],	
				':type' =>	$_POST["type"],
				':price' =>	$_POST["price"],
				':mrp' =>	$_POST["mrp"],
				':units' =>	$_POST["units"],
				':pr' =>	$_POST["pr"],
				':id' =>	$_POST["id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}




	
}

?>