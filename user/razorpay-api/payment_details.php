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
    <div class="wrapper">
        <div class="container">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>Payment Receipt</h3>
                    </div>
                </div>
            </div>
            <hr>


            <div class="row">
                <div class="col-6">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">Customer Name:</th>
                                <td><?php echo $fname . ' ' . $lname; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Email Id:</th>
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
                        </tbody>

                    </table>
                </div>

                <div class="col-6">
                    <table class="table table-borderless">
                        <tbody>
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

                        </tbody>

                    </table>
                </div>
            </div>

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Rate</th>
                        <th>Advance Payment</th>
                        <th>Convenience fee</th>
                        <th>Sub Total</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><?php echo $Content;  ?></td>
                        <td><?php echo 'Rs. ' . $Product_price . '/-'; ?></td>
                        <td><?php echo 'Rs. ' . $advance_Payment . '/-'; ?></td>
                        <td>Rs. 10/-</td>
                        <td><?php echo 'Rs ' . ($advance_Payment + 10) . '/-'; ?></td>
                    </tr>
                </tbody>

            </table>

            <dl class="row mt-5">
                <dt class="col-5">
                    <h5>Contact details</h5>
                </dt>

            </dl>

            <div class="row">
                <div class="col-6">
                    <table class="table table-borderless">
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
                </div>
            </div>
        </div>

    </div>

</body>

</html>