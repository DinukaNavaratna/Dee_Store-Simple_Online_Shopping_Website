<?php

$connect = new PDO("mysql:host=localhost;dbname=bb_store","root","");

$column = array('o_id','p_id','qty','total');

$query = '
 SELECT * FROM  order_items
 WHERE  o_id LIKE " %'.$_POST["search"]["value"].'%" OR p_id LIKE "%'.$_POST["search"]["value"].'%"
 OR qty LIKE "%'.$_POST["search"]["value"].'%" OR total LIKE "%'.$_POST["search"]["value"].'%"

';
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY' . $column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'';

}
else
{
	$query .= 'ORDER BY id DESC';

}

$query1='';
if($_POST["length"] != -1){
	$query1 = 'LIMIT' .  .$_POST['start'] . ','. $_POST['length'];

}
$statement = $connect-> prepare($query);
$statement->execute();

$number_filer_row = $statement->rowCount();
$statement = $connect->prepare($query .$query1);

$statement-> execute();

$result = $statement->fetchAll();
$data = array();
$total_order= 0;
foreach($result as $row)
{
	$sub_array = array();
	$sub_array[] = $row["o_id"];
	$sub_array[] = $row["p_id"];
	$sub_array[] = $row["qty"];
	$sub_array[] = $row["total"];

	$total_order = $total_order + floatval($row["total"]);
	$data[] = $sub_array;

}

function count_all_data($connect)
{
	$query ="SELECT * FROM order_items";
	$statement =$connect->prepare($query);
	$statement->execute();
	return $statement->rowCount();
}
$output = array(
	'draw' =>  intval($_POST["draw"]),
	'recordTotal' => count_all_data($connect),
	'recordFiltered' => $number_filer_row,
	'data' => $data,
	'total'   => number_format($total_order,2)
);
echo json_encode($output);
?>