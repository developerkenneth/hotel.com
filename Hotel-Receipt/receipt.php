<?php
// Sample booking/payment information
$customerName = "John Doe";
$receiptNumber = "HOTEL-" . rand(100000, 999999);

$roomType = "Deluxe Room";
$checkIn = "25 September 2026";
$checkOut = "28 September 2026";
$guests = 2;

$roomPrice = 150000;
$serviceCharge = 10000;
$totalAmount = $roomPrice + $serviceCharge;

$paymentMethod = "Online Payment";
$paymentDate = "25 September 2026";
$paymentStatus = "PAID";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hotel.com - Payment Receipt</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #222;
            padding: 40px 20px;
        }

        .receipt {
            max-width: 750px;
            margin: auto;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid #f57c00;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }

        .logo {
            font-size: 32px;
            font-weight: bold;
            color: #f57c00;
        }

        .logo span {
            color: #111;
        }

        .receipt-title {
            text-align: right;
        }

        .receipt-title h2 {
            color: #111;
            margin-bottom: 5px;
        }

        .receipt-title p {
            color: #777;
            font-size: 14px;
        }

        .status {
            text-align: center;
            background-color: #fff3e0;
            border: 1px solid #f57c00;
            color: #e65100;
            padding: 15px;
            border-radius: 6px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .section {
            margin-bottom: 30px;
        }

        .section h3 {
            color: #f57c00;
            border-bottom: 1px solid #ddd;
            padding-bottom: 8px;
            margin-bottom: 15px;
        }

        .details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .detail-box {
            padding: 12px;
            background-color: #f8f8f8;
            border-radius: 5px;
        }

        .label {
            display: block;
            color: #777;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .value {
            font-weight: bold;
            color: #222;
        }

        .payment-table {
            width: 100%;
            border-collapse: collapse;
        }

        .payment-table th,
        .payment-table td {
            padding: 14px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        .payment-table th {
            background-color: #111;
            color: white;
        }

        .total {
            display: flex;
            justify-content: space-between;
            background-color: #f57c00;
            color: white;
            padding: 18px;
            margin-top: 15px;
            border-radius: 5px;
            font-size: 20px;
            font-weight: bold;
        }

        .message {
            text-align: center;
            margin-top: 30px;
            line-height: 1.6;
            color: #555;
        }

        .buttons {
            text-align: center;
            margin-top: 30px;
        }

        button {
            background-color: #111;
            color: white;
            border: none;
            padding: 13px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #f57c00;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #777;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .receipt {
                padding: 25px;
            }

            .header {
                flex-direction: column;
                gap: 15px;
            }

            .receipt-title {
                text-align: center;
            }

            .details {
                grid-template-columns: 1fr;
            }
        }

        @media print {
            body {
                background-color: white;
                padding: 0;
            }

            .receipt {
                box-shadow: none;
                max-width: 100%;
            }

            .buttons {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="receipt">

        <!-- Header -->
        <div class="header">

            <div class="logo">
                Hotel<span>.com</span>
            </div>

            <div class="receipt-title">
                <h2>Payment Receipt</h2>
                <p>Receipt #<?php echo $receiptNumber; ?></p>
            </div>

        </div>


        <!-- Payment Status -->
        <div class="status">
            ✓ PAYMENT <?php echo $paymentStatus; ?> — BOOKING CONFIRMED
        </div>


        <!-- Customer Information -->
        <div class="section">

            <h3>Customer Information</h3>

            <div class="details">

                <div class="detail-box">
                    <span class="label">Customer Name</span>
                    <span class="value">
                        <?php echo $customerName; ?>
                    </span>
                </div>

                <div class="detail-box">
                    <span class="label">Payment Date</span>
                    <span class="value">
                        <?php echo $paymentDate; ?>
                    </span>
                </div>

            </div>

        </div>


        <!-- Booking Information -->
        <div class="section">

            <h3>Booking Information</h3>

            <div class="details">

                <div class="detail-box">
                    <span class="label">Room Type</span>
                    <span class="value">
                        <?php echo $roomType; ?>
                    </span>
                </div>

                <div class="detail-box">
                    <span class="label">Number of Guests</span>
                    <span class="value">
                        <?php echo $guests; ?>
                    </span>
                </div>

                <div class="detail-box">
                    <span class="label">Check-in</span>
                    <span class="value">
                        <?php echo $checkIn; ?>
                    </span>
                </div>

                <div class="detail-box">
                    <span class="label">Check-out</span>
                    <span class="value">
                        <?php echo $checkOut; ?>
                    </span>
                </div>

            </div>

        </div>


        <!-- Payment Details -->
        <div class="section">

            <h3>Payment Details</h3>

            <table class="payment-table">

                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>

                <tr>
                    <td><?php echo $roomType; ?></td>
                    <td>₦<?php echo number_format($roomPrice); ?></td>
                </tr>

                <tr>
                    <td>Service Charge</td>
                    <td>₦<?php echo number_format($serviceCharge); ?></td>
                </tr>

            </table>

            <div class="total">
                <span>Total Paid</span>
                <span>₦<?php echo number_format($totalAmount); ?></span>
            </div>

        </div>


        <!-- Payment Method -->
        <div class="section">

            <h3>Payment Method</h3>

            <div class="detail-box">
                <span class="label">Method</span>
                <span class="value">
                    <?php echo $paymentMethod; ?>
                </span>
            </div>

        </div>


        <!-- Message -->
        <div class="message">
            <p>
                Thank you for choosing <strong>Hotel.com</strong>.
                Your payment has been successfully confirmed and your booking is secured.
            </p>
        </div>


        <!-- Print Button -->
        <div class="buttons">
            <button onclick="window.print()">
                Print / Save Receipt
            </button>
        </div>


        <!-- Footer -->
        <div class="footer">
            <p>Hotel.com — Your comfort, our priority.</p>
            <p>This receipt confirms successful payment for your hotel booking.</p>
        </div>

    </div>

</body>
</html>