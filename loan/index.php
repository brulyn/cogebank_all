<?php

?>
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
    <title>Loan Apply</title>
</head>
<body>
    <?php
        require_once('./header.php');
    ?>
    <div class="container">
    
        <h1>Loan Apply</h1>

        <div class="card">
            <div class="card-body">
            <form action="insert.php" method="post">
                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" maxlength="2" required="true" name="country">
                    </div>
                    <div class="col col-md-4">
                        <label for="le_book">LE_Book</label>
                        <input type="text" class="form-control" maxlength="3" required="true" name="le_book">
                    </div>
                </div>  

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="year_month">Year-Month</label>
                        <input type="number" class="form-control" maxlength="6" required="true" name="year_month">
                    </div>
                    <div class="col col-md-4">
                        <label for="customer_gender">Customer Gender</label>
                        <select name="customer_gender" class="form-control">
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                            <option value="C">Corporate</option>
                            <option value="NA">Not Applicable</option>
                        </select>
                        
                    </div>
                </div>   

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="vision_ouc">Vision OUC</label>
                        <input type="text" class="form-control" maxlength="10" required="true" name="vision_ouc">                        
                    </div>
                    <div class="col col-md-4">
                        <label for="loan_utilization_location">Loan Utilization Location</label>
                        <input type="text" class="form-control" maxlength="40" required="true" name="loan_utilization_location">
                    </div>
                </div> 

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="vision_sbu">Vision SBU</label>
                        <select name="vision_sbu" class="form-control">
                            <option value="MCESOLE">Micro Enterprises - Solepropriertorship</option>
                            <option value="MCECOOP">Micro Enterprises - Cooperative</option>
                            <option value="MCECOMP">Micro Enterprises - Company</option>
                            <option value="MCEOTHR">Micro Enterprises - Others</option>
                            <option value="SMLSOLE">Small Enterprises - Solepropriertorship</option>
                            <option value="SMLCOOP">Small Enterprises - Cooperative</option>
                            <option value="SMLCOMP">Small Enterprises - Company</option>
                            <option value="SMLOTHR">Small Enterprises - Others</option>
                            <option value="MEDSOLE">Medium Enterprises - Solepropriertorship</option>
                            <option value="MEDCOOP">Medium Enterprises - Cooperative</option>
                            <option value="MEDCOMP">Medium Enterprises - Company</option>
                            <option value="MEDOTHR">Medium Enterprises - Others</option>
                            <option value="LRGSOLE">Large Enterprises - Solepropriertorship</option>
                            <option value="LRGCOOP">Large Enterprises - Cooperative</option>
                            <option value="LRGCOMP">Large Enterprises - Company</option>
                            <option value="LRGOTHR">Large Enterprises - Others</option>
                            <option value="RETL">Retail or Individuals</option>
                            <option value="INST">Financial Institutions</option>
                            <option value="PB">Private Bank</option>
                            <option value="TRSY">Treasury</option>
                            <option value="OTHER">Others</option>
                            <option value="SAGRP">Saving Group</option>
                            <option value="NA"></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col col-md-4">
                        <label for="economic_sector_code">Economic Sector Code</label>
                        <input type="text" class="form-control" maxlength="10" required="true" name="economic_sector_code">
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="total_applied_loan">Total Applied Loan</label>
                        <input type="number" class="form-control"  required="true" name="total_applied_loan">
                    </div>

                    <div class="col col-md-4">
                        <label for="total_applied_amount_lcy">Total Applied Amount LCY</label>
                        <input type="number" class="form-control" required="true" name="total_applied_amount_lcy">
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="total_approved_loan">Total Approved Loan</label>
                        <input type="number" class="form-control" required="true" name="total_approved_loan">
                    </div>

                    <div class="col col-md-4">
                        <label for="total_approved_amount_lcy">Total Approved Amount LCY</label>
                        <input type="number" class="form-control"  required="true" name="total_approved_amount_lcy">
                    </div>                    
                </div>


                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="total_rejected_loan">Total Rejected Loan</label>
                        <input type="number" class="form-control" required="true" name="total_rejected_loan">
                    </div>

                    <div class="col col-md-4">
                        <label for="total_rejected_amount_lcy">Total Rejected Amount LCY</label>
                        <input type="number" class="form-control" required="true" name="total_rejected_amount_lcy">
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="total_outstanding_loan">Total Outstanding Loan</label>
                        <input type="number" class="form-control" required="true" name="total_outstanding_loan">
                    </div>

                    <div class="col col-md-4">
                        <label for="total_outstanding_amount_lcy">Total Outstanding Amount LCY</label>
                        <input type="number" class="form-control" required="true" name="total_outstanding_amount_lcy">
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="total_npl_loan">Total NPL Loan</label>
                        <input type="number" class="form-control" required="true" name="total_npl_loan">
                    </div>

                    <div class="col col-md-4">
                        <label for="total_npl_amount_lcy">Total NPL Amount LCY</label>
                        <input type="number" class="form-control" required="true" name="total_npl_amount_lcy">
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="total_writeoff_loan">Total Writeoff Loan</label>
                        <input type="number" class="form-control" required="true" name="total_writeoff_loan">
                    </div>

                    <div class="col col-md-4">
                        <label for="total_writeoff_amount_lcy">Total Writeoff Amount LCY</label>
                        <input type="number" class="form-control" required="true" name="total_writeoff_amount_lcy">
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="rejection_reason">Rejection Reason</label>
                        <textarea name="rejection_reason" class="form-control" cols="30" rows="10"></textarea>
                    </div>

                    <div class="col col-md-4">
                        <label for="feed_date">Feed Date</label>
                        <input type="date" class="form-control" required="true" name="feed_date">
                    </div>                   
                </div>
                <div class="row form-group">

                    <div class="col col-md-4">
                        <label for="feed_status">Feed Status</label>
                        <input type="text" class="form-control" maxlength="2" required="true" name="feed_status">
                    </div>                   
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
                
            </form>
                
            </div>
        </div>
    </div>
</body>
</html>