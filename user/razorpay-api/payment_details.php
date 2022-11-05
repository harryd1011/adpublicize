<?php
require('config.php');
require('session.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>

    <h3>Payment Receipt</h3>

    <hr>



    <table class="table">
        <tbody>
            <tr>
                <th scope="row">Customer Name:</th>
                <td scope= "col"><?php echo $fname . ' ' . $lname; ?></td>
            </tr>
            <tr>
                <th scope="row" >Email Id:</th>
                <td><?php echo $emailid; ?></td>
            </tr>
            <tr>
                <th scope="row">Address:</th>
                <td><?php echo $resiadd; ?></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td><?php echo $area . ',' . $city; ?></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td><?php echo $pincode; ?></td>
            </tr>
            <tr>
                <th scope="row">Order Id:</th>
                <td><?php echo $razorpay_order_id; ?></td>
            </tr>
            <tr>
                <th scope="row">Payment Id:</th>
                <td><?php echo $razorpay_payment_id; ?></td>
            </tr>
            <tr>
                <th scope="row">Date of publish:</th>
                <td><?php echo $Payment_Date; ?></td>
            </tr>
            <tr>
                <th scope="row">Description</th>
                <td><?php echo $Content;  ?></td>
            </tr>
            <tr>
                <th scope="row">Rate</th>
                <td><?php echo 'Rs. ' . $Product_price . '/-'; ?></td>
            </tr>
            <tr>
                <th scope="row">Advance Payment</th>
                <td><?php echo 'Rs. ' . $advance_Payment . '/-'; ?></td>
            </tr>
            <tr>
                <th scope="row">Convenience fee</th>
                <td>Rs. 10/-</td>
            </tr>
            <tr>
                <th scope="row">Sub Total</th>
                <td><?php echo 'Rs ' . ($advance_Payment + 10) . '/-'; ?></td>
            </tr>

        </tbody>

    </table>
    <hr>

    <h3>Admin Contact details</h3>
    <hr>

    <table class="table">
        <tbody>
            <tr>
                <th scope="row">Email : </th>
                <td>Bazargroupad@gmail.com</td>
            </tr>
            <tr>
                <th scope="row">Contact No. : </th>
                <td>8000707909</td>
            </tr>
            <tr>
                <th scope="row">Address : </th>
                <td>Shop No.6, Sayona Tilak 1, Opp. Apollo School, New S. G. Road, Gota, Ahmedabad, 382481</td>
            </tr>
        </tbody>

    </table>

</body>

</html>