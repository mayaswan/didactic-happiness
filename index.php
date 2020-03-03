<?php
include('Session.php');
include('Config.php');
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            /*text-align: ;*/
            /*color: yellow;*/
            /*background: #9A0000;*/
        }
        th, td {
            padding: 5px;
            text-align: left;
            /*background: #ffffff;*/

        }
        tr, tr {
            border-bottom: 1px solid #FFFF;

        }
        .bg_coloer{
            background: #702918;
            color: yellow;
        }
        .text_left{
            text-align: left;
        }
        .text_center{
            text-align: center;
        }
        .text_right{
            text-align: right;
        }

        .table_bottom{
            border-bottom: 1px solid #FFFF;
        }

        .row{
            padding-top: 30px;
        }
    </style>

</head>
<body>
<h3>ยินดีต้อนรับเข้าสู้ระบบ : <?php echo $login_session; ?></h3>
<a href="ListOrder.php">แสดงข้อมูล การสั่งซื้อสินค้า</a><br>
<a href="ListProduct.php">รายการสินค้า</a><br>
<a href="Report.php">รายงานกำหนดส่งสินค้า</a><br>
<a href="Master.php">การประมวลผลข้อมูลการสั่งสินค้า</a><br>
<a href="Logout.php">ออกจากระบบ</a>

</body>

</html>
<script>
    function addOrder(){
        window.location.href='Addorder.php';
    };

</script>
