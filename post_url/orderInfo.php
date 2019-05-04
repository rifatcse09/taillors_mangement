<?php
session_start();
$saved_by= $_SESSION['user_id'];
require_once('../functions/cls_dbconfig.php');
function __autoload($class_name){
    require_once("../functions/$class_name.class.php");
}

$cls_booking = new cls_booking();
$query=  $cls_booking->order_info($_POST['orderId']);

$response = "<table border='0' width='100%'>";
$row = $query->fetch_assoc();
    $id = $row['order_id'];  
    $response .= "<tr>";
    $response .= "<td>Order Id : </td><td>".$row['order_no']."</td>";
    $response .= "</tr>";

    $response .= "<tr>";
    $response .= "<td>Name : </td><td>".$row['name']."</td>";
    $response .= "</tr>";

    $response .= "<tr>";
    $response .= "<td>Mobile : </td><td>".$row['mobile']."</td>";
    $response .= "</tr>";
    if($row['panjabi']){
        $response .= "<tr>";
        $response .= "<td>পাঞ্জাবী : </td><td>".$row['panjabi']."</td>";
        $response .= "</tr>";
    }
    if($row['sherwani']){
        $response .= "<tr>";
        $response .= "<td>শেরওয়ানী : </td><td>".$row['sherwani']."</td>";
        $response .= "</tr>";
    }
    if($row['akchata']){
        $response .= "<tr>";
        $response .= "<td>একছাটা পাঞ্জাবী : </td><td>".$row['akchata']."</td>";
        $response .= "</tr>";
    }
    if($row['kabli']){
        $response .= "<tr>";
        $response .= "<td>কাবলী স্যুট : </td><td>".$row['kabli']."</td>";
        $response .= "</tr>";
    }
    if($row['jubba']){
        $response .= "<tr>";
        $response .= "<td>এরাবিয়ান জুব্বা : </td><td>".$row['jubba']."</td>";
        $response .= "</tr>";
    }
    if($row['phatua']){
        $response .= "<tr>";
        $response .= "<td>ফতুয়া : </td><td>".$row['phatua']."</td>";
        $response .= "</tr>";
    }
    if($row['ambrodary']){
        $response .= "<tr>";
        $response .= "<td>এমব্রয়ডারী : </td><td>".$row['ambrodary']."</td>";
        $response .= "</tr>";
    }
    if($row['lomba']){
        $response .= "<tr>";
        $response .= "<td>লম্বা : </td><td>".$row['lomba']."</td>";
        $response .= "</tr>";
    }
    if($row['body']){
        $response .= "<tr>";
        $response .= "<td>বডি + লুছ : </td><td>".$row['body']."</td>";
        $response .= "</tr>";
    }
    if($row['tira']){
        $response .= "<tr>";
        $response .= "<td>তিরা : </td><td>".$row['tira']."</td>";
        $response .= "</tr>";
    }
    if($row['hata']){
        $response .= "<tr>";
        $response .= "<td>হাতা লম্বা : </td><td>".$row['hata']."</td>";
        $response .= "</tr>";
    }
    if($row['colar']){
        $response .= "<tr>";
        $response .= "<td>কলার : </td><td>".$row['colar']."</td>";
        $response .= "</tr>";
    }
    if($row['mohorikof']){
        $response .= "<tr>";
        $response .= "<td>মহুরী / কফ : </td><td>".$row['mohorikof']."</td>";
        $response .= "</tr>";
    }
    if($row['plat_pada']){
        $response .= "<tr>";
        $response .= "<td>প্লেট ফাডা: </td><td>".$row['plat_pada']."</td>";
        $response .= "</tr>";
    }
    if($row['luch']){
        $response .= "<tr>";
        $response .= "<td>লুছ: </td><td>".$row['luch']."</td>";
        $response .= "</tr>";
    }
    if($row['medium']){
        $response .= "<tr>";
        $response .= "<td>মিডিয়াম: </td><td>".$row['medium']."</td>";
        $response .= "</tr>";
    }
    if($row['fhiting']){
        $response .= "<tr>";
        $response .= "<td>ফিটিং: </td><td>".$row['fhiting']."</td>";
        $response .= "</tr>";
    }
    if($row['serkolarRound']){
        $response .= "<tr>";
        $response .= "<td>সেরঃ কলার রাউন্ড: </td><td>".$row['serkolarRound']."</td>";
        $response .= "</tr>";
    }
    if($row['serkolarkona']){
        $response .= "<tr>";
        $response .= "<td>সেরঃ কলার কোনা: </td><td>".$row['serkolarkona']."</td>";
        $response .= "</tr>";
    }
    if($row['kolarRound']){
        $response .= "<tr>";
        $response .= "<td>কলার রউন্দ: </td><td>".$row['kolarRound']."</td>";
        $response .= "</tr>";
    }
    if($row['kolarKona']){
        $response .= "<tr>";
        $response .= "<td>কলার কোনা: </td><td>".$row['kolarKona']."</td>";
        $response .= "</tr>";
    }
    if($row['vkolar']){
        $response .= "<tr>";
        $response .= "<td>ভি কলার : </td><td>".$row['vkolar']."</td>";
        $response .= "</tr>";
    }
    if($row['singleplat']){
        $response .= "<tr>";
        $response .= "<td>সিঙ্গেল প্লেট: </td><td>".$row['singleplat']."</td>";
        $response .= "</tr>";
    }
    if($row['vgola']){
        $response .= "<tr>";
        $response .= "<td>ভি গলা: </td><td>".$row['vgola']."</td>";
        $response .= "</tr>";
    }
    if($row['surtorkolar']){
        $response .= "<tr>";
        $response .= "<td>শার্ট কলার : </td><td>".$row['surtorkolar']."</td>";
        $response .= "</tr>";
    }
    if($row['golgola']){
        $response .= "<tr>";
        $response .= "<td>গোল গলা: </td><td>".$row['golgola']."</td>";
        $response .= "</tr>";
    }
    if($row['golgola']){
        $response .= "<tr>";
        $response .= "<td>ডবল প্লেট : </td><td>".$row['golgola']."</td>";
        $response .= "</tr>";
    }if($row['boxplat']){
        $response .= "<tr>";
        $response .= "<td>বক্স প্লেট: </td><td>".$row['boxplat']."</td>";
        $response .= "</tr>";
    }if($row['ghunti']){
        $response .= "<tr>";
        $response .= "<td>ঘুণ্টি: </td><td>".$row['ghunti']."</td>";
        $response .= "</tr>";
    }if($row['net']){
        $response .= "<tr>";
        $response .= "<td>নেট : </td><td>".$row['net']."</td>";
        $response .= "</tr>";
    }if($row['pikingkolar']){
        $response .= "<tr>";
        $response .= "<td>পাইপিং কলার : </td><td>".$row['pikingkolar']."</td>";
        $response .= "</tr>";
    }if($row['pet']){
        $response .= "<tr>";
        $response .= "<td>পেট : </td><td>".$row['pet']."</td>";
        $response .= "</tr>";
    }if($row['hatai']){
        $response .= "<tr>";
        $response .= "<td>হাতাই : </td><td>".$row['hatai']."</td>";
        $response .= "</tr>";
    }if($row['phular']){
        $response .= "<tr>";
        $response .= "<td>ফুলের নং: </td><td>".$row['phular']."</td>";
        $response .= "</tr>";
    }if($row['surtorkolar']){
        $response .= "<tr>";
        $response .= "<td>শার্ট কলার : </td><td>".$row['surtorkolar']."</td>";
        $response .= "</tr>";
    }
    if($row['aligod']){
        $response .= "<tr>";
        $response .= "<td>আলীগড় : </td><td>".$row['aligod']."</td>";
        $response .= "</tr>";
    }
    if($row['saluar']){
        $response .= "<tr>";
        $response .= "<td>সেলোয়ার: </td><td>".$row['saluar']."</td>";
        $response .= "</tr>";
    }
    if($row['cudi']){
        $response .= "<tr>";
        $response .= "<td>চুড়ি: </td><td>".$row['cudi']."</td>";
        $response .= "</tr>";
    }
    if($row['costo']){
        $response .= "<tr>";
        $response .= "<td>চোস্ত : </td><td>".$row['costo']."</td>";
        $response .= "</tr>";
    }
    if($row['veltsaluar']){
        $response .= "<tr>";
        $response .= "<td>বেল্ট সেলোয়ার : </td><td>".$row['veltsaluar']."</td>";
        $response .= "</tr>";
    }
    if($row['dhuti']){
        $response .= "<tr>";
        $response .= "<td>ধুতি: </td><td>".$row['dhuti']."</td>";
        $response .= "</tr>";
    }
    if($row['ser']){
        $response .= "<tr>";
        $response .= "<td>সেরঃ পাঃ  : </td><td>".$row['ser']."</td>";
        $response .= "</tr>";
    }
    if($row['paki']){
        $response .= "<tr>";
        $response .= "<td>পাকি পাঃ : </td><td>".$row['paki']."</td>";
        $response .= "</tr>";
    }
    if($row['ghono_silay']){
        $response .= "<tr>";
        $response .= "<td>ঘন সিলাই  : </td><td>".$row['ghono_silay']."</td>";
        $response .= "</tr>";
    }
    if($row['motasuta']){
        $response .= "<tr>";
        $response .= "<td>মোটাসূতা : </td><td>".$row['motasuta']."</td>";
        $response .= "</tr>";
    }
    if($row['ghono_silay']){
        $response .= "<tr>";
        $response .= "<td>ঘন সিলাই  : </td><td>".$row['ghono_silay']."</td>";
        $response .= "</tr>";
    }
    if($row['cikonsuta']){
        $response .= "<tr>";
        $response .= "<td>চিকনসূতা : </td><td>".$row['cikonsuta']."</td>";
        $response .= "</tr>";
    }
    if($row['rabar']){
        $response .= "<tr>";
        $response .= "<td>চওডা রাবার  : </td><td>".$row['rabar']."</td>";
        $response .= "</tr>";
    }
    if($row['dudi']){
        $response .= "<tr>";
        $response .= "<td>ডুডি  : </td><td>".$row['dudi']."</td>";
        $response .= "</tr>";
    }
    if($row['totalpocket']){
        $response .= "<tr>";
        $response .= "<td>মোঃ পঃ : </td><td>".$row['totalpocket']."</td>";
        $response .= "</tr>";
    }
    if($row['chain']){
        $response .= "<tr>";
        $response .= "<td>পঃ চেন  : </td><td>".$row['chain']."</td>";
        $response .= "</tr>";
    }
    if($row['backpocket']){
        $response .= "<tr>";
        $response .= "<td>পিছে পঃ  : </td><td>".$row['backpocket']."</td>";
        $response .= "</tr>";
    }
    if($row['biborn']){
        $response .= "<tr>";
        $response .= "<td>বিবরণ : </td><td>".$row['biborn']."</td>";
        $response .= "</tr>";
    }

$response .= "</table>";

echo $response;
?>