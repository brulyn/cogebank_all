<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/logo.png" type="image/x-icon" />
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://bootswatch.com/simplex/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Switch Info</title>
</head>
<body>
<div class="container">
<?php
    //DB Connection
    require_once('./dbconnect.php');
    // $pdo = new PDO('oci:dbname=192.168.0.20:1521/cgbk', 'prod', 'prod');  
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Insert Data
    
    $stmt = $pdo->prepare("INSERT INTO clearinguser.bouncedcheques (
        account_id,
        cheque_account_type,
        surname,
        forename1,
        forename2,
        forename3,
        national_id,
        passport_number,
        nationality,
        date_of_birth,
        place_of_birth,
        postal_address1,
        postal_address2,
        town,
        country,
        cheque_number,
        presentation_date,
        bounce_date,
        currency,
        cheque_amount,
        bounce_reason,
        payee
            ) VALUES (
                :account_id,
                :cheque_account_type,
                :surname,
                :forename1,
                :forename2,
                :forename3,
                :national_id,
                :passport_number,
                :nationality,
                :date_of_birth,
                :place_of_birth,
                :postal_address1,
                :postal_address2,
                :town,
                :country,
                :cheque_number,
                :presentation_date,
                :bounce_date,
                :currency,
                :cheque_amount,
                :bounce_reason,
                :payee)");
    $stmt->bindParam(':account_id', $account_id);
    $stmt->bindParam(':cheque_account_type', $cheque_account_type);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':forename1', $forename1);
    $stmt->bindParam(':forename2', $forename2);
    $stmt->bindParam(':forename3', $forename3);
    $stmt->bindParam(':national_id', $national_id);
    $stmt->bindParam(':passport_number', $passport_number);
    $stmt->bindParam(':nationality', $nationality);
    $stmt->bindParam(':date_of_birth', $date_of_birth);
    $stmt->bindParam(':place_of_birth', $place_of_birth);
    $stmt->bindParam(':postal_address1', $postal_address1);
    $stmt->bindParam(':postal_address2', $postal_address2);
    $stmt->bindParam(':town', $town);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':cheque_number', $cheque_number);
    $stmt->bindParam(':presentation_date', $presentation_date);
    $stmt->bindParam(':bounce_date', $bounce_date);
    $stmt->bindParam(':currency', $currency);
    $stmt->bindParam(':cheque_amount', $cheque_amount);
    $stmt->bindParam(':bounce_reason', $bounce_reason);
    $stmt->bindParam(':payee', $payee);
    
    // insert one row
    $account_id = $_POST['account_id'];
    $cheque_account_type = $_POST['cheque_account_type'];
    $surname = $_POST['surname'];
    $forename1 = $_POST['forename1'];
    $forename2 = $_POST['forename2'];
    $forename3 = $_POST['forename3'];
    $national_id = $_POST['national_id'];
    $passport_number = $_POST['passport_number'];
    $nationality = $_POST['nationality'];
    $date_of_birth = $_POST['date_of_birth'];
    $place_of_birth = $_POST['place_of_birth'];
    $postal_address1 = $_POST['postal_address1'];
    $postal_address2 = $_POST['postal_address2'];
    $town = $_POST['town'];
    $country = $_POST['country'];
    $cheque_number = $_POST['cheque_number'];
    $presentation_date = $_POST['presentation_date'];
    $bounce_date = $_POST['bounce_date'];
    $currency = $_POST['currency'];
    $cheque_amount = $_POST['cheque_amount'];
    $bounce_reason = $_POST['bounce_reason'];
    $payee = $_POST['payee'];

    if(isset($_POST['account_id'])){
        $stmt->execute();
        ?>
        <br>
        <br>
        <br>
        <div class="container"> 
            <div class="alert alert-success" role="alert">
                Successfull. <br>
                <a href="index.php" class="btn btn-primary">Back to form</a>
            </div>
        </div>


        <?php
        // print_r($_POST);
    }

    //redirect back to index page
    //header("Location: index.php");
    // die();
?>
</div>

</body>
</html>



