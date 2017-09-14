<?php

?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img src="./images/logo.png" alt="Logo" style="width:25px;height:25px;border:0;">
            </a>
            
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <ul class="nav navbar-nav navbar-right">

                <!-- Localhost -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View/Edit <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <!-- localhost -->
                        <!-- <li><a href="http://localhost/loan/get.php">Loan Apply</a></li> -->

                        <!-- Server -->
                        <li><a href="http://192.168.0.213:7070/loan/get.php">Loan Apply</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Entry <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <!-- localhost -->
                        <!-- <li><a href="http://localhost/loan/">Loan Apply</a></li> -->

                        <!-- Server -->
                        <li><a href="http://192.168.0.213:7070/loan/">Loan Apply</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>