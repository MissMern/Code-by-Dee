<?php
//currency converter.php
// This is a simple currency converter that converts USD to EUR and vice versa.

//I WILL USE THE EXCHANGE RATE api

// Define the API endpoint
$apiUrl = 'https://api.exchangerate-api.com/v4/latest/USD';

// Fetch the exchange rate data
$response = file_get_contents($apiUrl);
if ($response === FALSE) {
    die('Error occurred while fetching exchange rates.');
}

// Decode the JSON response
$data = json_decode($response, true);
if ($data === NULL) {
    die('Error occurred while decoding JSON response.');
}


//Get the usd ->ksh exchange rate
$usdToKshRate = $data['rates']['KES'];
//Get the ksh -> usd exchange rate
$kshToUsdRate = 1 / $usdToKshRate;
//Get the usd -> eur exchange rate
$usdToEurRate = $data['rates']['EUR'];
//Get the eur -> usd exchange rate
$eurToUsdRate = 1 / $usdToEurRate;
//Get the eur -> ksh exchange rate
$eurToKshRate = $usdToKshRate * $usdToEurRate;
//Get the ksh -> eur exchange rate
$kshToEurRate = 1 / $eurToKshRate;

// Function to convert USD to KSH
function convertUsdToKsh($amount) {
    global $usdToKshRate;
    return $amount * $usdToKshRate;
}

// Function to convert KSH to USD
function convertKshToUsd($amount) {
    global $kshToUsdRate;
    return $amount * $kshToUsdRate;
}

// Function to convert USD to EUR
function convertUsdToEur($amount) {
    global $usdToEurRate;
    return $amount * $usdToEurRate;
}

// Function to convert EUR to USD

function convertEurToUsd($amount) {
    global $eurToUsdRate;
    return $amount * $eurToUsdRate;
}
// Function to convert EUR to KSH
function convertEurToKsh($amount) {
    global $eurToKshRate;
    return $amount * $eurToKshRate;
}
// Function to convert KSH to EUR
function convertKshToEur($amount) {
    global $kshToEurRate;
    return $amount * $kshToEurRate;
}

// Check if the form is submitted

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $_POST['amount'];
    $fromCurrency = $_POST['from_currency'];
    $toCurrency = $_POST['to_currency'];
    if ($fromCurrency === $toCurrency) {
        $error = "Please select different currencies to convert.";
        $convertedAmount = null; // just to be sure
    }
    // Validate the amount


    // Perform the conversion based on the selected currencies
    if ($fromCurrency === 'USD' && $toCurrency === 'KSH') {
        $convertedAmount = convertUsdToKsh($amount);
    } elseif ($fromCurrency === 'KSH' && $toCurrency === 'USD') {
        $convertedAmount = convertKshToUsd($amount);
    } elseif ($fromCurrency === 'USD' && $toCurrency === 'EUR') {
        $convertedAmount = convertUsdToEur($amount);
    } elseif ($fromCurrency === 'EUR' && $toCurrency === 'USD') {
        $convertedAmount = convertEurToUsd($amount);
    } elseif ($fromCurrency === 'EUR' && $toCurrency === 'KSH') {
        $convertedAmount = convertEurToKsh($amount);
    } elseif ($fromCurrency === 'KSH' && $toCurrency === 'EUR') {
        $convertedAmount = convertKshToEur($amount);
    } else {
        $convertedAmount = null;
    }
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="number"], select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
        }
        footer p {
            margin: 0;
        }
        .fa-exchange {
            margin-right: 5px;
        }
        @media (max-width: 600px) {
            .container {
                width: 100%;
                padding: 10px;
            }
            input[type="number"], select {
                width: calc(100% - 20px);
            }
        }
    </style>
</head>
    <body>
        <div class="container">
            <h1>Currency Converter</h1>
            <form method="POST" action="index.php">
                <label for="amount">Amount:</label>
                <input type="number" name="amount" id="amount" required step="0.01" min="0" placeholder="Enter amount" />

                <label for="from_currency">From:</label>
                <select name="from_currency" id="from_currency" required>
                    <option value="USD">USD</option>
                    <option value="KSH">KSH</option>
                    <option value="EUR">EUR</option>
                </select>

                <label for="to_currency">To:</label>
                <select name="to_currency" id="to_currency" required>
                    <option value="USD">USD</option>
                    <option value="KSH">KSH</option>
                    <option value="EUR">EUR</option>
                </select>

                <button type="submit"><i class="fa fa-exchange"></i> Convert</button>
            </form>

            <?php if (isset($error)): ?>
    <h2 style="color: red;"><?php echo $error; ?></h2>
<?php elseif (isset($convertedAmount)): ?>
    <h2>Converted Amount: <?php echo number_format($convertedAmount, 2); ?></h2>
<?php endif; ?>

        </div>
        <footer>
            <p>&copy; 2023 Currency Converter. All rights reserved.</p>
        </footer>
    </body>
</html>
