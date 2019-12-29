<?php
session_start();
require_once('database.php');
$database = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>
<div class="container">
    <h2>Demo giỏ hàng</h2>
    <p>Chi tiết giỏ hàng của bạn:</p>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Id sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá tiền</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Xóa khỏi giỏ hàng</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Camera</td>
            <td></td>
            <td>100000</td>
            <td>2</td>
            <td>200000</td>
            <td><a href="#">Xóa</a></td>
        </tr>
        </tbody>
    </table>
    <div>Tổng hóa đơn thanh toán <strong>20000</strong></div>
</div>

<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-6">
            <form name="product1" action="" method="post">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height: 315px; width: 100%; display: block;" src="image/camera.jpg" data-holder-rendered="true">                    <div class="card-body">
                        <p class="card-text">Sản phẩm 1</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-inline">
                                <input type="text" class="form-control" name="quantity" value="1">
                                <label style="margin-left: 10px"><button type="button" class="btn btn-sm btn-outline-secondary">Thêm vào giỏ hàng</button></label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-6">
            <form name="product2" action="" method="post">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height: 315px; width: 100%; display: block;" src="image/iphone.jpg" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">Sản phẩm 2</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-inline">
                                <input type="text" class="form-control" name="quantity" value="1">
                                <label style="margin-left: 10px"><button type="button" class="btn btn-sm btn-outline-secondary">Thêm vào giỏ hàng</button></label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <form name="product3" action="" method="post">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height: 315px; width: 100%; display: block;" src="image/latop.jpg" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">Sản phẩm 3</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-inline">
                                <input type="text" class="form-control" name="quantity" value="1">
                                <label style="margin-left: 10px"><button type="button" class="btn btn-sm btn-outline-secondary">Thêm vào giỏ hàng</button></label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-6">
            <form name="product4" action="" method="post">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height: 315px; width: 100%; display: block;" src="image/smart_watch.jpg_watch.jpg" data-holder-rendered="true">                    <div class="card-body">
                        <p class="card-text">Sản phẩm 4</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-inline">
                                <input type="text" class="form-control" name="quantity" value="1">
                                <label style="margin-left: 10px"><button type="button" class="btn btn-sm btn-outline-secondary">Thêm vào giỏ hàng</button></label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>