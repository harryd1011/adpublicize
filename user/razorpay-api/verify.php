<?php

require('config.php');


session_start();

require('razorpay-php/Razorpay.php');

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false) {
    $api = new Api($keyId, $keySecret);

    try {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    } catch (SignatureVerificationError $e) {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true) {
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $user_id = $_SESSION['user_id'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $organization_name = $_SESSION['organization'];
    $advance_Payment = $_SESSION['advance_Payment'];
    $Publish_Date = $_SESSION['Publish_Date'];
    $Content = $_SESSION['Ad_Content'];
    $page_id = $_SESSION['page_id'];
    $address = $_SESSION['address'];
    $pincode = $_SESSION['pincode'];
    $area = $_SESSION['area'];
    $city = $_SESSION['city'];
    $Product_price = $_SESSION['Product_price'];

    $insert = mysqli_query($conn, "INSERT INTO booking_details(user_id,name,organization_name,Product_price,Payment,Publish_Date,Content,order_id,razorpay_payment_id,status)VALUES('$user_id','$name','$organization_name','$Product_price','$advance_Payment','$Publish_Date','$Content','$razorpay_order_id','$razorpay_order_id','success')");

    if ($insert) {

        $update_status = "UPDATE slot_details_1 SET Status= 'Unavailable' where id='$page_id'";
        if (mysqli_query($conn, $update_status)) {
            echo "<script>alert('Payment Done Successfully. Get the payment receipt.')</script>";
        } else {
            echo "<script>alert('Slot was not alloted conveineintly. Try to contact the admin.');
            window.location.href='../userhome.php';
            </script>";
        }
    } else {
        echo "<script>alert('Unknown error. Try to contact the admin.');
        window.location.href='../userhome.php';
        </script>";
    }

    // $html = "<p>Your payment was successful</p>
    //          <p>Payment ID: {$_POST['razorpay_payment_id']}</p>

    //          <button type= 'submit' name= 'update_status' accept-charset= 'utf-8' href='../userhome.php'>OK</button>";
} else {
    echo "<script>alert('Details were not fetched accurately. Try to contact the admin or book the slot again.');
        window.location.href='../bookSlot.php';
        </script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD Publicize- Paymment Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AD Publicize</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>

    <div class="wrapper">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <img src="photos/Company_logo.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-6">
                        <h3>Payment Receipt</h3>
                    </div>
                    <div class="col-6 d-flex justify-content-end pe-5">
                        <a href="payment_receipt.php" class="btn btn-danger" target="_blank">Print</a>
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
                                <td><?php echo $name; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Email Id:</th>
                                <td><?php echo $email; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Address:</th>
                                <td><?php echo $address; ?></td>
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
                                <td><?php echo $Publish_Date; ?></td>
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

            <div class="d-flex justify-content-center">
                <a href="../userhome.php" class="btn btn-primary w-25 mt-4 mb-5">OK</a>
            </div>


        </div>

    </div>

</body>

</html>