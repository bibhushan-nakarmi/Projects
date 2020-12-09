<?php
session_start();
global $item_total;
global $item_count;
require_once("dbcontroller.php");
require_once("db_connect.php");

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
    case "add":
        if(!empty($_POST["qty"])) {
            $sql=mysql_query("SELECT * FROM login WHERE Emali='" . $_GET["Email"] . "'");
			$productBycode=mysql_fetch_array($sql);
            $itemArray = array($productBycode["Email"]=>array('item_name'=>$productBycode["First_name"], 'Email'=>$productBycode["Email"], 'login_id'=>$productBycode["login_id"], 'Last_name'=>$_POST["Last-name"], 'Phone_no'=>$productBycode["Phone-no"]));
            
            if(!empty($_SESSION["cart_item"])) {
                if(in_array($productBycode["code"],$_SESSION["cart_item"])) {
                    foreach($_SESSION["cart_item"] as $k => $v) {
                            if($productBycode["code"] == $k)
                                $_SESSION["cart_item"][$k]["qty"] = $_POST["qty"];
                    }
                } else {
                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                }
            } else {
                $_SESSION["cart_item"] = $itemArray;
            }
        }
    break;
    case "remove":
        if(!empty($_SESSION["cart_item"])) {
            foreach($_SESSION["cart_item"] as $k => $v) {
                    if($_GET["code"] == $k)
                        unset($_SESSION["cart_item"][$k]);              
                    if(empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
            }
        }
    break;
    case "continue_shopping":
        header('Location:index.php');
        break;
    case "order":
        if(!empty($_SESSION["cart_item"])){
                foreach ($_SESSION["cart_item"] as $item){
                $db = "INSERT INTO orders(fullname,code,qty,item_price,location,phone,item_id,email,status,item_name) VALUES ('".$_POST['fname']."', '".$item['code']."' ,'".$item['qty']."','".$item['item_price']."','".$_POST['address']."','".$_POST['telephone']."','".$item['item_id']."','".$_POST['email']."','0','".$item['item_name']."')";
                $res = mysql_query($db);     
				if(mysql_error()){
				echo mysql_error();
				}      
            }   
				unset($_SESSION["cart_item"]);    
        }
    case "empty":
        unset($_SESSION["cart_item"]);
    break;  
}
}
if(isset($_SESSION["cart_item"])){
$item_total = 0;
foreach ($_SESSION["cart_item"] as $item){ 
$product_array = mysql_fetch_array(mysql_query("SELECT * FROM item WHERE code='$item[code]'"));
if (!empty($product_array)) { 
foreach($product_array as $key=>$value){
$one_item_total = ($item["item_price"]*$item["qty"]);
$item_total =$item_total + $one_item_total;
}
}
}
}
?>