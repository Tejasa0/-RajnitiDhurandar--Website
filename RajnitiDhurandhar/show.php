<?php
include_once 'database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color:#d6cbd3;
            color:black;   
        }
        .div1{
            float:left;
            width:600px;
            border-style:solid;
            background-color:orange;
            text-align:center;
            margin-left:7px;
            margin-right:8px;
            height:2000px;
        }
        .div2{
            float:left;
            width:600px;
            border-style:solid;
            background-color:orange;
            text-align:center;
            margin-right:7px;
            margin-left:8px;
            height:2000px;

        }
        input{
            background-color:#b5e7a0;
            width:80px;
            height:30px;
            margin:5px;
            border-radius:25px;
            border:2px solid white;
        }
        #heading{
            padding:0px 0px 0px 470px;
            background-color: rgb(100,0,70);
            border:2px black;
            color:white;
        }
    </style>
</head>
<body>
    <div id="heading"><h1>Year Wise Information</h1></div>
    <?php
    function show($inp){
        global $conn;
        $sql="SELECT Description FROM backend.history WHERE Year=$inp;";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        echo "<h3>".$row['Description']."</h3>";
    }
    
  ?>
<div class="div1" >
    <form method="post">
        <input type="submit" name="1630" value="1630">
    </form>
    <?php
        if(array_key_exists('1630', $_POST)) {
            show(1630);
        }
    ?>
<form method="post">
        <input type="submit" name="1631" value="1631">
    </form>
    <?php
        if(array_key_exists('1631', $_POST)) {
            show(1631);
        }
    ?>

<form method="post">
        <input type="submit" name="1632" value="1632">
    </form>
    <?php
        if(array_key_exists('1632', $_POST)) {
            show(1632);
        }
    ?>
    <form method="post">
    <input type="submit" name="1633" value="1633">
    </form>
    <?php
        if(array_key_exists('1633', $_POST)) {
            show(1633);
        }
    ?>
    <form method="post">
        <input type="submit" name="1634" value="1634">
    </form>
    <?php
        if(array_key_exists('1634', $_POST)) {
            show(1634);
        }
    ?>
    <form method="post">
        <input type="submit" name="1635" value="1635">
    </form>
    <?php
        if(array_key_exists('1635', $_POST)) {
            show(1635);
        }
    ?>
    <form method="post">
        <input type="submit" name="1636" value="1636">
    </form>
    <?php
        if(array_key_exists('1636', $_POST)) {
            show(1636);
        }
    ?>
    <form method="post">
        <input type="submit" name="1637" value="1637">
    </form>
    <?php
        if(array_key_exists('1637', $_POST)) {
            show(1637);
        }
    ?>
    <form method="post">
        <input type="submit" name="1638" value="1638">
    </form>
    <?php
        if(array_key_exists('1638', $_POST)) {
            show(1638);
        }
    ?>
       <form method="post">
        <input type="submit" name="1639" value="1639">
    </form>
    <?php
        if(array_key_exists('1639', $_POST)) {
            show(1639);
        }
    ?>
<form method="post">
        <input type="submit" name="1640" value="1640">
    </form>
    <?php
        if(array_key_exists('1640', $_POST)) {
            show(1640);
        }
    ?>
<form method="post">
        <input type="submit" name="1641" value="1641">
    </form>
    <?php
        if(array_key_exists('1641', $_POST)) {
            show(1641);
        }
    ?>
    <form method="post">
        <input type="submit" name="1642" value="1642">
    </form>
    <?php
        if(array_key_exists('1642', $_POST)) {
            show(1642);
        }
    ?>
    <form method="post">
        <input type="submit" name="1643" value="1643">
    </form>
    <?php
        if(array_key_exists('1643', $_POST)) {
            show(1643);
        }
    ?>
    <form method="post">
        <input type="submit" name="1644" value="1644">
    </form>
    <?php
        if(array_key_exists('1644', $_POST)) {
            show(1644);
        }
    ?>
    <form method="post">
        <input type="submit" name="1645" value="1645">
    </form>
    <?php
        if(array_key_exists('1645', $_POST)) {
            show(1645);
        }
    ?>
    <form method="post">
        <input type="submit" name="1646" value="1646">
    </form>
    <?php
        if(array_key_exists('1646', $_POST)) {
            show(1646);
        }
    ?>
    <form method="post">
        <input type="submit" name="1647" value="1647">
    </form>
    <?php
        if(array_key_exists('1647', $_POST)) {
            show(1647);
        }
    ?>
       <form method="post">
        <input type="submit" name="1648" value="1648">
    </form>
    <?php
        if(array_key_exists('1648', $_POST)) {
            show(1648);
        }
    ?>
<form method="post">
        <input type="submit" name="1649" value="1649">
    </form>
    <?php
        if(array_key_exists('1649', $_POST)) {
            show(1649);
        }
    ?>
<form method="post">
        <input type="submit" name="1650" value="1650">
    </form>
    <?php
        if(array_key_exists('1650', $_POST)) {
            show(1650);
        }
    ?>
    <form method="post">
        <input type="submit" name="1651" value="1651">
    </form>
    <?php
        if(array_key_exists('1651', $_POST)) {
            show(1651);
        }
    ?>
    <form method="post">
        <input type="submit" name="1652" value="1652">
    </form>
    <?php
        if(array_key_exists('1652', $_POST)) {
            show(1652);
        }
    ?>
    <form method="post">
        <input type="submit" name="1653" value="1653">
    </form>
    <?php
        if(array_key_exists('1653', $_POST)) {
            show(1653);
        }
    ?>
    <form method="post">
        <input type="submit" name="1654" value="1654">
    </form>
    <?php
        if(array_key_exists('1654', $_POST)) {
            show(1654);
        }
    ?>
    <form method="post">
        <input type="submit" name="1655" value="1655">
    </form>
    <?php
        if(array_key_exists('1655', $_POST)) {
            show(1655);
        }
    ?>
   </div>
<div class="div2">
    <form method="post">
        <input type="submit" name="1656" value="1656">
    </form>
    <?php
        if(array_key_exists('1656', $_POST)) {
            show(1656);
        }
    ?>
       <form method="post">
        <input type="submit" name="1657" value="1657">
    </form>
    <?php
        if(array_key_exists('1657', $_POST)) {
            show(1657);
        }
    ?>
<form method="post">
        <input type="submit" name="1658" value="1658">
    </form>
    <?php
        if(array_key_exists('1658', $_POST)) {
            show(1658);
        }
    ?>

<form method="post">
        <input type="submit" name="1659" value="1659">
    </form>
    <?php
        if(array_key_exists('1659', $_POST)) {
            show(1659);
        }
    ?>
    <form method="post">
        <input type="submit" name="1660" value="1660">
    </form>
    <?php
        if(array_key_exists('1660', $_POST)) {
            show(1660);
        }
    ?>
    <form method="post">
        <input type="submit" name="1661" value="1661">
    </form>
    <?php
        if(array_key_exists('1661', $_POST)) {
            show(1661);
        }
    ?>
    <form method="post">
        <input type="submit" name="1662" value="1662">
    </form>
    <?php
        if(array_key_exists('1662', $_POST)) {
            show(1662);
        }
    ?>
    <form method="post">
        <input type="submit" name="1663" value="1663">
    </form>
    <?php
        if(array_key_exists('1663', $_POST)) {
            show(1663);
        }
    ?>
    <form method="post">
        <input type="submit" name="1664" value="1664">
    </form>
    <?php
        if(array_key_exists('1664', $_POST)) {
            show(1664);
        }
    ?>
    <form method="post">
        <input type="submit" name="1665" value="1665">
    </form>
    <?php
        if(array_key_exists('1665', $_POST)) {
            show(1665);
        }
    ?>
       <form method="post">
        <input type="submit" name="1666" value="1666">
    </form>
    <?php
        if(array_key_exists('1666', $_POST)) {
            show(1666);
        }
    ?>
<form method="post">
        <input type="submit" name="1667" value="1667">
    </form>
    <?php
        if(array_key_exists('1667', $_POST)) {
            show(1667);
        }
    ?>
<form method="post">
        <input type="submit" name="1668" value="1668">
    </form>
    <?php
        if(array_key_exists('1668', $_POST)) {
            show(1668);
        }
    ?>
    <form method="post">
        <input type="submit" name="1669" value="1669">
    </form>
    <?php
        if(array_key_exists('1669', $_POST)) {
            show(1669);
        }
    ?>
    <form method="post">
        <input type="submit" name="1670" value="1670">
    </form>
    <?php
        if(array_key_exists('1670', $_POST)) {
            show(1670);
        }
    ?>
    <form method="post">
        <input type="submit" name="1671" value="1671">
    </form>
    <?php
        if(array_key_exists('1671', $_POST)) {
            show(1671);
        }
    ?>
    <form method="post">
        <input type="submit" name="1672" value="1672">
    </form>
    <?php
        if(array_key_exists('1672', $_POST)) {
            show(1672);
        }
    ?>
    <form method="post">
        <input type="submit" name="1673" value="1673">
    </form>
    <?php
        if(array_key_exists('1673', $_POST)) {
            show(1673);
        }
    ?>
    <form method="post">
        <input type="submit" name="1674" value="1674">
    </form>
    <?php
        if(array_key_exists('1674', $_POST)) {
            show(1674);
        }
    ?>
     <form method="post">
        <input type="submit" name="1675" value="1675">
    </form>
    <?php
        if(array_key_exists('1675', $_POST)) {
            show(1675);
        }
    ?>
    <form method="post">
        <input type="submit" name="1676" value="1676">
    </form>
    <?php
        if(array_key_exists('1676', $_POST)) {
            show(1676);
        }
    ?>
     <form method="post">
        <input type="submit" name="1677" value="1677">
    </form>
    <?php
        if(array_key_exists('1677', $_POST)) {
            show(1677);
        }
    ?>
    <form method="post">
        <input type="submit" name="1678" value="1678">
    </form>
    <?php
        if(array_key_exists('1678', $_POST)) {
            show(1678);
        }
    ?>
     <form method="post">
        <input type="submit" name="1679" value="1679">
    </form>
    <?php
        if(array_key_exists('1679', $_POST)) {
            show(1679);
        }
    ?>
    <form method="post">
        <input type="submit" name="1680" value="1680">
    </form>
    <?php
        if(array_key_exists('1680', $_POST)) {
            show(1680);
        }
    ?>
</div>
 
