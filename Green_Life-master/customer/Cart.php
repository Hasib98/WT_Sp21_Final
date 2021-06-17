


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <!-- cart details -->
    <div class="cart-info" method="post">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Sub Total</th>
        </tr>
        <tr>
            <td>
                <div class="product-info  small-container">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/311cmr4AEIL.jpg" >
                    <div>
                        <p>Rui Fish</p>
                        <small>Price: 500 BDT</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1" min="0"></td>
            <td>$0.0</td>
        </tr>
        <tr>
            <td>
                <div class="product-info  small-container">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/311cmr4AEIL.jpg" alt="Rui fish picture">
                    <div>
                        <p>Rui Fish</p>
                        <small>Price: 500 BDT</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1" min="0"></td>
            <td>$0.0</td>
        </tr>

    </table>

    <div class="total-price">
    <table>
            <tr>
                <td>VAT</td>
                <td>3%</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>0.0 BDT</td>
            </tr>
            <tr>
                <td ><input style="height: 40px;width: 100px; border-radius: 10px; background: #489657;color: #fff;" type="submit" name="submit" value="confirm"><td>
            </tr>
        </table>

    </div>
        
    </div>
    
</body>
</html>