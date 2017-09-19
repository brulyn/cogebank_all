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
    <link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />

    <!-- jquery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- moment -->
    <script type="text/javascript" src="bower_components/moment/min/moment.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
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
                        <input type="text" class="form-control" maxlength="2" value="RW" required="true" name="country">
                    </div>
                    <div class="col col-md-4">
                        <label for="le_book">LE_Book</label>
                        <input type="text" class="form-control" maxlength="3" value="030" required="true" name="le_book">
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
                        <select name="vision_ouc" class="form-control">
                            <option value="00001">Agence Central</option>
                            <option value="00002">Agence Rubangura</option>
                            <option value="00003">Agence Nyabugogo</option>
                            <option value="00004">Agence Remera</option>
                            <option value="00005">Agence Nyarutarama</option>
                            <option value="00006">Agence Kicukiro</option>
                            <option value="00007">Agence Rwamagana</option>
                            <option value="00008">Agence Kabarondo</option>
                            <option value="00009">Agence Musanze</option>
                            <option value="00010">Agence Rubavu</option>
                            <option value="00011">Agence Muhanga</option>
                            <option value="00012">Agence Huye</option>
                            <option value="00013">Agence Nyamagabe</option>
                            <option value="00014">Agence Kamembe</option>
                            <option value="00015">Agence Tyazo</option>
                            <option value="00016">Corporate</option>
                            <option value="00018">Prestige</option>
                            <option value="00019">Agence Nyagatare</option>
                            <option value="00020">Agence Gisozi</option>
                            <option value="00021">Agence Gicumbi</option>
                            <option value="00022">Agence CHIC</option>
                            <option value="00023">Agence Karongi</option>
                            <option value="00024">Agence Ruhango</option>
                            <option value="00100">Siege</option>
                        </select>                        
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
                            <option value="NA">Not Applicable</option>
                            <option value="INVALID">Invalid value</option>
                        </select>
                    </div>

                    <div class="col col-md-4">
                        <label for="economic_sector_code">Economic Sector Code</label>
                        <select name="economic_sector_code" class="form-control">
                            <option value="A">Agriculture, Forestry and Fishing</option>
                            <option value="B">Mining and Quarrying</option>
                            <option value="C">Manufacturing</option>
                            <option value="D">Electricity, Gas, Steam and Air Conditioning Supply</option>
                            <option value="E">Water Supply; Sewerage, Waste management and Remediation Activities</option>
                            <option value="F">Construction</option>
                            <option value="G">Wholesale and Retail Tradel; Repair of Motor Vehicles and Motorcycles</option>
                            <option value="H">Transportation and Storage</option>
                            <option value="I">Accomodation and Food Service Activities</option>
                            <option value="J">Information and Communication</option>
                            <option value="K">Financial and Insurance Activities</option>
                            <option value="L">Real Estate Activities</option>
                            <option value="M">Professional, Scientific and Technical Activities</option>
                            <option value="N">Administrative and Support Service Activities</option>
                            <option value="O">Public Administration and Defence; Compulsory Social Security</option>
                            <option value="P">Education</option>
                            <option value="Q">Human Health and Social Work Activities</option>
                            <option value="R">Arts, Entertainment and Recreation</option>
                            <option value="S">Other Service Activities</option>
                            <option value="T">Activities of Households as Employers; Undifferentiated Goods - And Services-Producing Activities of Households for Own Use</option>
                            <option value="U">Activities of Extraterritorial Organizations and Bodies</option>
                            <option value="NA">Not Applicable</option>
                            <option value="INVALID">Invalid Value</option>
                        </select>
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
                        <textarea name="rejection_reason" class="form-control" rows="4" cols="100">
                            
                        </textarea>
                    </div>

                    <div class="col col-md-4">
                        <label for="feed_date">Feed Date</label>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' name='feed_date' class="form-control" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                            
                        <script type="text/javascript">
                            $(function () {
                                $('#datetimepicker1').datetimepicker({
                                    format: 'DD-MM-YYYY'
                                });
                            });
                        </script>
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