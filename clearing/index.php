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
    <title>Bounced Cheques</title>
</head>
<body>
    <?php
        require_once('./header.php');
    ?>
    <div class="container">
    
        <h1>Bounced Cheques</h1>

        <div class="card">
            <div class="card-body">
            <form action="insert.php" method="post">
                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="account_id">Account ID</label>
                        <input type="text" class="form-control" required="true" name="account_id">
                    </div>
                    <div class="col col-md-4">
                        <label for="cheque_account_type">Cheque Account Type</label>
                        <input type="text" class="form-control" required="true" name="cheque_account_type">
                    </div>
                </div>  

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="surname">Surname</label>
                        <input type="text" class="form-control" required="true" name="surname">
                    </div>
                    <div class="col col-md-4">
                        <label for="forename1">Forename1</label>
                        <input type="text" class="form-control" required="true" name="forename1">
                    </div>
                </div>   

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="forename2">Forename2</label>
                        <input type="text" class="form-control" required="true" name="forename2">                        
                    </div>
                    <div class="col col-md-4">
                        <label for="forename3">Forename3</label>
                        <input type="text" class="form-control" required="true" name="forename3">
                    </div>
                </div> 

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="national_id">National ID</label>
                        <input type="text" class="form-control" name="national_id">
                    </div>

                    <div class="col col-md-4">
                        <label for="passport_number">Passport Number</label>
                        <input type="text" class="form-control" name="passport_number">
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="nationality">Nationality</label>
                        <input type="text" class="form-control" name="nationality">
                    </div>

                    <div class="col col-md-4">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth">
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="place_of_birth">Place of birth</label>
                        <input type="text" class="form-control" name="place_of_birth">
                    </div>

                    <div class="col col-md-4">
                        <label for="postal_address1">Postal Address1</label>
                        <input type="text" class="form-control" name="postal_address1">
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="postal_address2">Postal Address2</label>
                        <textarea name="postal_address2" class="form-control" cols="30" rows="4"></textarea>
                    </div>

                    <div class="col col-md-4">
                        <label for="town">Town</label>
                        <input type="text" class="form-control" name="town">
                    </div>                    
                </div>


                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" name="country">
                    </div>

                    <div class="col col-md-4">
                        <label for="cheque_number">Cheque Number</label>
                        <input type="text" class="form-control" name="cheque_number">
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="presentation_date">Presentation Date</label>
                        <input type="date" class="form-control" name="presentation_date">
                    </div>

                    <div class="col col-md-4">
                        <label for="bounce_date">Bounce Date</label>
                        <input type="date" class="form-control" name="bounce_date">
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="currency">Currency</label>
                        <select name="currency" class="form-control">
                            <option value="RWF">RWF</option>
                            <option value="USD">USD</option>
                            <option value="EUROS">EUROS</option>
                            <option value="GBP">GBP</option>
                        </select>
                    </div>

                    <div class="col col-md-4">
                        <label for="cheque_amount">Cheque Amount</label>
                        <input type="number" class="form-control" required="true" name="cheque_amount">
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="bounce_reason">Bounce Reason</label>
                        <input type="text" class="form-control" required="true" name="bounce_reason">
                    </div>

                    <div class="col col-md-4">
                        <label for="payee">Payee</label>
                        <input type="text" class="form-control" required="true" name="payee">
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