<?php
require_once '../Control/picture_control.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>



    <div class="sidebar">
        <h2>Brand</h2>
        <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#"><i class="fa-solid fa-people-roof"></i> Salesman</a>
        <a href="#"><i class="fa-solid fa-wrench"></i>Mechanic</a>
        <a href="#"><i class="fa-solid fa-expand"></i>Expend</a>
        <a href="#"><i class="fas fa-money-bill"></i>Income</a>
        <a href="#"><i class="fa-solid fa-money-check-dollar"></i>Balance</a>
        <a href="#"><i class="fa-solid fa-car"></i>Car</a>
        <a href="#"><i class="fa-solid fa-eye"></i>Show</a>
        <a href="#"><i class="fa-solid fa-envelope"></i>Mail</a>
        <a href="#"><i class="fas fa-question-circle"></i> Help</a>
        <a href="#"><i class="fas fa-cogs"></i> Settings</a>
    </div>
    <div class="main">
        <div class="topbar">
            <div class="search-bar">
                <input type="text" placeholder="Search...">
            </div>
            <div class="topbar-icons">
                <a href="#">Add New</a>
                <a href="#"><i class="fas fa-bell"></i></a>
                <a href="#"><i class="fas fa-user-circle"></i></a>
            </div>
        </div>
        <div class="cards">
            <div class="card">
                <i class="fa-solid fa-user"></i>
                <h3>2194</h3>
                <p>Total Customers</p>
            </div>
            <div class="card">
                <i class="fa-solid fa-user"></i>
                <h3>53</h3>
                <p>Total Employee</p>
            </div>
            <div class="card">
                <i class="fa-solid fa-car"></i>
                <h3>5</h3>
                <p>New Car</p>
            </div>
            <div class="card">
                <i class="fas fa-money-bill"></i>
                <h3>350000</h3>
                <p>Income</p>
            </div>
        </div>
        <div class="recent-payments">
            <h3>Recent Payments</h3>
            <div class="view-all"><a href="#">View All</a></div>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Payment Method</th>
                    <th>Amount</th>
                    <th>Option</th>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Card</td>
                    <td>$120</td>
                    <td><button class="view-btn">View</button></td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Cash</td>
                    <td>$120</td>
                    <td><button class="view-btn">View</button></td>
                </tr>
            </table>
        </div>
        <form id="carForm" action="" method="" enctype="multipart/form-data">
    <label>Car Name:</label>
    <input type="text" name="car_name"><br>

    <label>Car Price:</label>
    <input type="number" name="car_price" step="0.01"><br>

    <label>Car Buy Year:</label>
    <input type="number" name="car_buy_year" min="1900" max="2099"><br>

    <label>Car Mileage:</label>
    <input type="number" name="car_milage"><br>

    <label>Car Image:</label>
    <input type="file" name="uploadPicture" accept="image/*"><br>

    <button type="submit" onclick = "submitCarForm()">Upload Car</button>
      </form>

      <p id="statusMessage"></p>


        <div class="new-students">
            <h3>New Students</h3>
            <div class="view-all"><a href="#">View All</a></div>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Option</th>
                </tr>
                <tr>
                <td>Xyz</td>
                    <td>016555555555</td>
                    <td><button class="view-btn">View</button></td>
                </tr>
            </table>
        </div>
    </div>
    
</body>
</html>
