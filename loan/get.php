<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/logo.png" type="image/x-icon" />
     <!-- Datatables css -->
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/dt-1.10.15/b-1.4.0/datatables.min.css"/>
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://bootswatch.com/simplex/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- jquery -->
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <!-- Datatabled js -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/dt-1.10.15/datatables.min.js"></script>
    
    
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    
    <title>Loan Apply</title>
</head>
<body>
<?php

    require_once('header.php');

    
    ?>
    <div class="container">
        <div class="row">
        <div class="col-md-4">
            <h1>Loan Apply</h1>
            <p> <a href="index.php" class="btn btn-xs btn-primary">New Entry</a></p>
        </div>

        <div class="col-md-4 form-group">
            
        </div>
        
        
        </div>
        
        <!-- Get all -->

        <?php

        if(!isset($_POST['edit'])){
            get_show();
        }else if(!isset($_POST['delete'])){
            insert();
            get_show();   
        }

        if(isset($_POST['delete'])){
            delete();
            $location = $_SERVER['PHP_SELF'];
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
        }
        

        function get_show(){

            $pdo = new PDO('oci:dbname=192.168.0.20:1521/cgbk', 'prod', 'prod');  
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = "SELECT * FROM clearinguser.loanapply";
            $stmt = $pdo->prepare($query);
    
            $country = array();
            $le_book = array();
            $year_month = array();
            $customer_gender = array();
            $vision_ouc = array();
            $loan_utilization_location = array();
            $vision_sbu = array();
            $economic_sector_code = array();
            $total_applied_loan = array();
            $total_applied_amount_lcy = array();
            $total_approved_loan = array();
            $total_approved_amount_lcy = array();
            $total_rejected_loan = array();
            $total_rejected_amount_lcy = array();
            $total_outstanding_loan = array();
            $total_outstanding_amount_lcy = array();
            $total_npl_loan = array();
            $total_npl_amount_lcy = array();
            $total_writeoff_loan = array();
            $total_writeoff_amount_lcy = array();
            $rejection_reason = array();
            $feed_date = array();
            $feed_status = array();
            if($stmt->execute()){
                ?>
                <table id="example" class="table display">
                    <thead>
                        <tr>
                            <th>Country</th>
                            <th>Le_Book</th>
                            <th>YearMonth</th>
                            <th>Customer Gender</th>
                            <th>Rejection Reason</th>
                            <th>Feed Date</th>
                            <th>Feed Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
    
                    <tbody>
                <?php
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        // $country[] = $row['COUNTRY'];
                        // $le_book[] = $row['LE_BOOK'];
                        // $fraud_by[] = $row['FRAUD_BY'];
                        // $vision_ouc[] = $row['VISION_OUC'];
                        // $fraud_sequence[] = $row['FRAUD_SEQUENCE'];
                        // $fraud_scheme[] = $row['FRAUD_SCHEME'];
                        // $description_of_fraud[] = $row['DESCRIPTION_OF_FRAUD'];
                        // $fraud_txn_status[] = $row['FRAUD_TXN_STATUS'];
                        // $currency[] = $row['CURRENCY'];
                        // $fraud_amount_fcy[] = $row['FRAUD_AMOUNT_FCY'];
                        // $fraud_amount_lcy[] = $row['FRAUD_AMOUNT_LCY'];
                        // $amount_paid_fcy[] = $row['AMOUNT_PAID_FCY'];
                        // $amount_paid_lcy[] = $row['AMOUNT_PAID_LCY'];
                        // $adopt_to_avoid[] = $row['ADOPT_TO_AVOID'];
                        // $feed_date[] = $row['FEED_DATE'];
                        // $feed_status[] = $row['FEED_STATUS'];
                        
                            echo '<tr>';
                            echo '<td>'.$row['COUNTRY'].'</td>';
                            echo '<td>'.$row['LE_BOOK'].'</td>';
                            echo '<td>'.$row['YEAR_MONTH'].'</td>';
                            echo '<td>'.$row['CUSTOMER_GENDER'].'</td>';
                            echo '<td>'.$row['REJECTION_REASON'].'</td>';
                            echo '<td>'.$row['FEED_DATE'].'</td>';
                            echo '<td>'.$row['FEED_STATUS'].'</td>';
                            echo '<td>
                                <div>
                                    <div class="col-md-3">
                                        <form action="edit.php" method="post">
                                            <button class="btn btn-primary btn-xs">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></button>
                                            <input type="hidden" name="id" value='.$row['ID'].'>
                                            <input type="hidden" name="country" value='.$row['COUNTRY'].'>
                                            <input type="hidden" name="le_book" value='.$row['LE_BOOK'].'>
                                            <input type="hidden" name="year_month" value='.$row['YEAR_MONTH'].'>
                                            <input type="hidden" name="customer_gender" value='.$row['CUSTOMER_GENDER'].'>
                                            <input type="hidden" name="vision_ouc" value='.$row['VISION_OUC'].'>
                                            <input type="hidden" name="loan_utilization_location" value='.$row['LOAN_UTILIZATION_LOCATION'].'>
                                            <input type="hidden" name="vision_sbu" value='.$row['VISION_SBU'].'>
                                            <input type="hidden" name="economic_sector_code" value='.$row['ECONOMIC_SECTOR_CODE'].'>
                                            <input type="hidden" name="total_applied_loan" value='.$row['TOTAL_APPLIED_LOAN'].'>
                                            <input type="hidden" name="total_applied_amount_lcy" value='.$row['TOTAL_APPLIED_AMOUNT_LCY'].'>
                                            <input type="hidden" name="total_approved_loan" value='.$row['TOTAL_APPROVED_LOAN'].'>
                                            <input type="hidden" name="total_approved_amount_lcy" value='.$row['TOTAL_APPROVED_AMOUNT_LCY'].'>
                                            <input type="hidden" name="total_rejected_loan" value='.$row['TOTAL_REJECTED_LOAN'].'>
                                            <input type="hidden" name="total_rejected_amount_lcy" value='.$row['TOTAL_REJECTED_AMOUNT_LCY'].'>
                                            <input type="hidden" name="total_outstanding_loan" value='.$row['TOTAL_OUTSTANDING_LOAN'].'>
                                            <input type="hidden" name="total_outstanding_amount_lcy" value='.$row['TOTAL_OUTSTANDING_AMOUNT_LCY'].'>
                                            <input type="hidden" name="total_npl_loan" value='.$row['TOTAL_NPL_LOAN'].'>
                                            <input type="hidden" name="total_npl_amount_lcy" value='.$row['TOTAL_NPL_AMOUNT_LCY'].'>
                                            <input type="hidden" name="total_writeoff_loan" value='.$row['TOTAL_WRITEOFF_LOAN'].'>
                                            <input type="hidden" name="total_writeoff_amount_lcy" value='.$row['TOTAL_WRITEOFF_AMOUNT_LCY'].'>
                                            <input type="hidden" name="rejection_reason" value='.$row['REJECTION_REASON'].'>
                                            <input type="hidden" name="feed_date" value='.$row['FEED_DATE'].'>
                                            <input type="hidden" name="feed_status" value='.$row['FEED_STATUS'].'>
                                        </form>
                                    </div>
    
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#'.$row['ID'].'">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true">
                                        </button>
                                        
                                        <div id="'.$row['ID'].'" class="modal fade" role="dialog">
                                            <div class="modal-dialog modal-sm">
                                        
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    
                                                    <div class="modal-body">
                                                        Are you sure you want to delete entry with ID number '.$row['ID'].'?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="row">
                                                            <div class="col-md-6"></div>

                                                            <div class="col-md-3">
                                                                <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Cancel</button>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <form action="get.php" method="post">
                                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete">Delete</button>
                                                                    <input type="hidden" value="'.$row['ID'].'" name="id">
                                                                </form>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </td>';
                            echo '</tr>';
                        
                            
                    }
    
    
                ?>
                     </tbody>
                </table>
    
                <?php
            }
        }

        function insert(){
            
            $pdo = new PDO('oci:dbname=192.168.0.20:1521/cgbk', 'prod', 'prod');  
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare("UPDATE clearinguser.loanapply SET 
                country = :country,
                le_book = :le_book,
                year_month = :year_month,
                customer_gender = :customer_gender,
                vision_ouc = :vision_ouc,
                loan_utilization_location = :loan_utilization_location,
                vision_sbu = :vision_sbu,
                economic_sector_code = :economic_sector_code,
                total_applied_loan = :total_applied_loan,
                total_applied_amount_lcy = :total_applied_amount_lcy,
                total_approved_loan = :total_approved_loan,
                total_approved_amount_lcy = :total_approved_amount_lcy,
                total_rejected_loan = :total_rejected_loan,
                total_rejected_amount_lcy = :total_rejected_amount_lcy,
                total_outstanding_loan = :total_outstanding_loan,
                total_outstanding_amount_lcy = :total_outstanding_amount_lcy,
                total_npl_loan = :total_npl_loan,
                total_npl_amount_lcy = :total_npl_amount_lcy,
                total_writeoff_loan = :total_writeoff_loan,
                total_writeoff_amount_lcy = :total_writeoff_amount_lcy,
                rejection_reason = :rejection_reason,
                feed_date = :feed_date,
                feed_status= :feed_status
                    
                     WHERE id = :id ");

            $stmt->bindParam(':id', $id);
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

            $id = $_POST['id'];
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
                
            $stmt->execute();
            
        }

        function delete(){            
            $pdo = new PDO('oci:dbname=192.168.0.20:1521/cgbk', 'prod', 'prod');  
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare("DELETE FROM clearinguser.loanapply WHERE id = :id ");
            $stmt->bindParam(':id', $id);
            $id = $_POST['id'];   
            $stmt->execute();
            
        }

        function confirm(){
        }

        

        ?>

            

            
    </div>
</body>
</html>