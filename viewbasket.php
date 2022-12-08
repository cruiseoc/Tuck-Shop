<!DOCTYPE html>
<html>
<title>Basket</title>
    
</head>
<body>
    <h1>Basket contains</h1>
    <table>
        <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
    <?php
    include_once('connection.php');
    session_start();
    $total=0;
    $total1=0;
    echo("<tr>");
    foreach ($_SESSION["tuck"] as $tuck){

        echo("<br>");
        $stmt = $conn->prepare("SELECT * FROM tuck WHERE TuckID=:tuckid");
        $stmt->bindParam(':tuckid', $tuck["tuck"]);
        $stmt->execute();
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                echo("<td>".$row["Name"]."</td><td> ".$tuck["qty"]." </td><td>- £".number_format(($tuck["qty"]*$row["Cost"]),2)."</td></tr>");
                $total=$total+($tuck["qty"]*$row["Cost"]);
                $total1=$total1+($tuck["qty"]);
            }
    }
    echo("<tr><td></td><td>Total cost </td><td>£".number_format($total,2)."</td></tr>");
    $_SESSION["totalcost"]=$total;
    echo("<tr><td></td><td>Total Quantity</td><td>".number_format($total1)."</td></tr>");
    $_SESSION["totalquantity"]=$total1;
    ?>
    </table>
    <a href="buy.php">Confirm and order</a>
</body>
</html>