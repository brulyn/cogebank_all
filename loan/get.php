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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.bootstrap.min.css">

    <!-- Bootstrap Simplex Theme -->
    <link rel="stylesheet" href="https://bootswatch.com/simplex/bootstrap.min.css">
    
    
    <!-- jquery -->
    <script   src="https://code.jquery.com/jquery-1.12.4.js" ></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     
    <!-- Datatabled js -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.colVis.min.js"></script>
    
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [ 'excel', 'pdf', 'colvis' ]
            });

            var column_8 = table.column( 8 );
            column_8.visible(false);

            var column_9 = table.column( 9 );
            column_9.visible(false);
            
            var column_10 = table.column( 10 );
            column_10.visible(false);

            var column_11 = table.column( 11 );
            column_11.visible(false);

            var column_12 = table.column( 12 );
            column_12.visible(false);

            var column_13 = table.column( 13 );
            column_13.visible(false);

            var column_14 = table.column( 14 );
            column_14.visible(false);
            
            var column_15 = table.column( 15 );
            column_15.visible(false);

            var column_16 = table.column( 16 );
            column_16.visible(false);

            var column_17 = table.column( 17 );
            column_17.visible(false);

            var column_18 = table.column( 18 );
            column_18.visible(false);

            var column_19 = table.column( 19 );
            column_19.visible(false);

        } );
    </script>

    <style>
        #example {
            
            width: 100%;
        }
    </style>
    
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
                <div class="table-responsive">
                <table id="example" class="table display table-condensed">
                    <thead>
                        <tr>
                            <th>Country</th>
                            <th>Le_Book</th>
                            <th>YearMonth</th>
                            <th>Customer Gender</th>
                            <th>Branch</th>
                            <th>Loan Utlization Loc</th>
                            <th>Vision SBU</th>
                            <th>Economic Sector</th>
                            <th>Tot Applied Loan</th>
                            <th>Tot Applied Amount (LCY)</th>
                            <th>Tot Approved Loan</th>
                            <th>Tot Approved Amount (LCY)</th>
                            <th>Tot Rejected Loan</th>
                            <th>Tot Rejected Amount (LCY)</th>
                            <th>Tot Outstanding Loan</th>
                            <th>Tot Outstanding Amount (LCY)</th>
                            <th>Tot NPL Loan</th>
                            <th>Tot NPL Amount (LCY)</th>
                            <th>Tot Writeoff Loan</th>
                            <th>Tot Writeoff Amount (LCY)</th>
                            <th>Rejection Reason</th>
                            <th>Feed Date</th>
                            <th>Feed Status</th>
                            <th width="50">Action</th>
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
                            echo '<td width="auto">'.$row['COUNTRY'].'</td>';
                            echo '<td width="auto">'.$row['LE_BOOK'].'</td>';
                            echo '<td width="auto">'.$row['YEAR_MONTH'].'</td>';
                            echo '<td width="auto">'.$row['CUSTOMER_GENDER'].'</td>';
                            echo '<td width="auto">'.$row['VISION_OUC'].'</td>';
                            echo '<td width="auto">'.$row['LOAN_UTILIZATION_LOCATION'].'</td>';
                            echo '<td width="auto">'.$row['VISION_SBU'].'</td>';
                            echo '<td width="auto">'.$row['ECONOMIC_SECTOR_CODE'].'</td>';
                            echo '<td width="auto">'.$row['TOTAL_APPLIED_LOAN'].'</td>';
                            echo '<td width="auto">'.$row['TOTAL_APPLIED_AMOUNT_LCY'].'</td>';
                            echo '<td width="auto">'.$row['TOTAL_APPROVED_LOAN'].'</td>';
                            echo '<td>'.$row['TOTAL_APPROVED_AMOUNT_LCY'].'</td>';
                            echo '<td>'.$row['TOTAL_REJECTED_LOAN'].'</td>';
                            echo '<td>'.$row['TOTAL_REJECTED_AMOUNT_LCY'].'</td>';
                            echo '<td>'.$row['TOTAL_OUTSTANDING_LOAN'].'</td>';
                            echo '<td>'.$row['TOTAL_OUTSTANDING_AMOUNT_LCY'].'</td>';
                            echo '<td>'.$row['TOTAL_NPL_LOAN'].'</td>';
                            echo '<td>'.$row['TOTAL_NPL_AMOUNT_LCY'].'</td>';
                            echo '<td>'.$row['TOTAL_WRITEOFF_LOAN'].'</td>';
                            echo '<td>'.$row['TOTAL_WRITEOFF_AMOUNT_LCY'].'</td>';
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
                                            <input type="hidden" name="rejection_reason" value="'.$row['REJECTION_REASON'].'">
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
                </div>
    
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