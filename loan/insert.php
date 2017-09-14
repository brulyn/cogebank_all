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
    
    $stmt = $pdo->prepare("INSERT INTO clearinguser.loanapply (
        country,
        le_book,
        year_month,
        customer_gender,
        vision_ouc,
        loan_utilization_location,
        vision_sbu,
        economic_sector_code,
        total_applied_loan,
        total_applied_amount_lcy,
        total_approved_loan,
        total_approved_amount_lcy,
        total_rejected_loan,
        total_rejected_amount_lcy,
        total_outstanding_loan,
        total_outstanding_amount_lcy,
        total_npl_loan,
        total_npl_amount_lcy,
        total_writeoff_loan,
        total_writeoff_amount_lcy,
        rejection_reason,
        feed_date,
        feed_status
            ) VALUES (
                :country,
                :le_book,
                :year_month,
                :customer_gender,
                :vision_ouc,
                :loan_utilization_location,
                :vision_sbu,
                :economic_sector_code,
                :total_applied_loan,
                :total_applied_amount_lcy,
                :total_approved_loan,
                :total_approved_amount_lcy,
                :total_rejected_loan,
                :total_rejected_amount_lcy,
                :total_outstanding_loan,
                :total_outstanding_amount_lcy,
                :total_npl_loan,
                :total_npl_amount_lcy,
                :total_writeoff_loan,
                :total_writeoff_amount_lcy,
                :rejection_reason,
                :feed_date,
                :feed_status)");
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':le_book', $le_book);
    $stmt->bindParam(':year_month', $year_month);
    $stmt->bindParam(':customer_gender', $customer_gender);
    $stmt->bindParam(':vision_ouc', $vision_ouc);
    $stmt->bindParam(':loan_utilization_location', $loan_utilization_location);
    $stmt->bindParam(':vision_sbu', $vision_sbu);
    $stmt->bindParam(':economic_sector_code', $economic_sector_code);
    $stmt->bindParam(':total_applied_loan', $total_applied_loan);
    $stmt->bindParam(':total_applied_amount_lcy', $total_applied_amount_lcy);
    $stmt->bindParam(':total_approved_loan', $total_approved_loan);
    $stmt->bindParam(':total_approved_amount_lcy', $total_approved_amount_lcy);
    $stmt->bindParam(':total_rejected_loan', $total_rejected_loan);
    $stmt->bindParam(':total_rejected_amount_lcy', $total_rejected_amount_lcy);
    $stmt->bindParam(':total_outstanding_loan', $total_outstanding_loan);
    $stmt->bindParam(':total_outstanding_amount_lcy', $total_outstanding_amount_lcy);
    $stmt->bindParam(':total_npl_loan', $total_npl_loan);
    $stmt->bindParam(':total_npl_amount_lcy', $total_npl_amount_lcy);
    $stmt->bindParam(':total_writeoff_loan', $total_writeoff_loan);
    $stmt->bindParam(':total_writeoff_amount_lcy', $total_writeoff_amount_lcy);
    $stmt->bindParam(':rejection_reason', $rejection_reason);
    $stmt->bindParam(':feed_date', $feed_date);
    $stmt->bindParam(':feed_status', $feed_status);
    
    // insert one row
    $country = $_POST['country'];
    $le_book = $_POST['le_book'];
    $year_month = $_POST['year_month'];
    $customer_gender = $_POST['customer_gender'];
    $vision_ouc = $_POST['vision_ouc'];
    $loan_utilization_location = $_POST['loan_utilization_location'];
    $vision_sbu = $_POST['vision_sbu'];
    $economic_sector_code = $_POST['economic_sector_code'];
    $total_applied_loan = $_POST['total_applied_loan'];
    $total_applied_amount_lcy = $_POST['total_applied_amount_lcy'];
    $total_approved_loan = $_POST['total_approved_loan'];
    $total_approved_amount_lcy = $_POST['total_approved_amount_lcy'];
    $total_rejected_loan = $_POST['total_rejected_loan'];
    $total_rejected_amount_lcy = $_POST['total_rejected_amount_lcy'];
    $total_outstanding_loan = $_POST['total_outstanding_loan'];
    $total_outstanding_amount_lcy = $_POST['total_outstanding_amount_lcy'];
    $total_npl_loan = $_POST['total_npl_loan'];
    $total_npl_amount_lcy = $_POST['total_npl_amount_lcy'];
    $total_writeoff_loan = $_POST['total_writeoff_loan'];
    $total_writeoff_amount_lcy = $_POST['total_writeoff_amount_lcy'];
    $rejection_reason = $_POST['rejection_reason'];
    $feed_date = $_POST['feed_date'];
    $feed_status = $_POST['feed_status'];

    $country = $_POST['country'];
    if(isset($_POST['country'])){
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



