<?php

$task = $_POST['task'];

$conn = new mysqli('localhost','admin','password','challenge');



switch($task){
//    case 'sendStudents':
//        //$sql = "SELECT * FROM users"; ////////////////
//        
//        $sql = "INSERT INTO users (student_id, f_name, l_name) VALUES (value_1, 'value_2', value_3);"
//        
//        
//        $result = $conn->query($sql);
//        $customers = array();
//        while($row = $result->fetch_array()){
//            array_push($customers,$row);
//        }
//        echo json_encode($customers);
//        break;
        case 'sendStudents':
        echo 'Sent';
        break;
        
//    case 'getOrders':
//        $sql = "SELECT * FROM orders_tbl,products_tbl,customers_tbl WHERE orders_tbl.customer_id = $_POST[id] AND customers_tbl.customer_id = orders_tbl.customer_id AND products_tbl.product_id = orders_tbl.product_id";
//        $result = $conn->query($sql);
//        $orders = array();
//        while($row = $result->fetch_array()){
//            array_push($orders,$row);
//        }
//        echo json_encode($orders);
//        break;
    default:
        echo 'No task was declared';
        break;
}




?>