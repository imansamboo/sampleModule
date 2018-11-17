<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        /* cyrillic-ext */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OX-hpOqc.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OVuhpOqc.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OXuhpOqc.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OUehpOqc.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OXehpOqc.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OXOhpOqc.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UN_r8OUuhp.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFWJ0bbck.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFUZ0bbck.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFWZ0bbck.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFVp0bbck.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFWp0bbck.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFW50bbck.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOX-hpOqc.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOVuhpOqc.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOXuhpOqc.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOUehpOqc.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOXehpOqc.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOXOhpOqc.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v15/mem5YaGs126MiZpBA-UNirkOUuhp.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* latin-ext */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            src: local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            src: local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* latin-ext */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 700;
            src: local('Raleway Bold'), local('Raleway-Bold'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwJYtWqhPAMif.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 700;
            src: local('Raleway Bold'), local('Raleway-Bold'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwJYtWqZPAA.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

    </style>
    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>
<section id="header">
</section>
<section id="main-menu">

    <nav id="nav" class="navbar navbar-default navbar-main" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="primary-nav">

                <ul class="nav navbar-nav">

                    <li menuitemname="Home" class="" id="Primary_Navbar-Home">
                        <a href="/whmcs/clientarea.php">
                            Home
                        </a>
                    </li>
                    <li menuitemname="Services" class="dropdown" id="Primary_Navbar-Services">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Services
                            &nbsp;<b class="caret"></b>        </a>
                        <ul class="dropdown-menu">
                            <li menuitemname="My Services" id="Primary_Navbar-Services-My_Services">
                                <a href="/whmcs/clientarea.php?action=services">
                                    My Services
                                </a>
                            </li>
                            <li menuitemname="Services Divider" class="nav-divider" id="Primary_Navbar-Services-Services_Divider">
                                <a href="">
                                    -----
                                </a>
                            </li>
                            <li menuitemname="Order New Services" id="Primary_Navbar-Services-Order_New_Services">
                                <a href="/whmcs/cart.php">
                                    Order New Services
                                </a>
                            </li>
                            <li menuitemname="View Available Addons" id="Primary_Navbar-Services-View_Available_Addons">
                                <a href="/whmcs/cart.php?gid=addons">
                                    View Available Addons
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li menuitemname="Domains" class="dropdown" id="Primary_Navbar-Domains">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Domains
                            &nbsp;<b class="caret"></b>        </a>
                        <ul class="dropdown-menu">
                            <li menuitemname="My Domains" id="Primary_Navbar-Domains-My_Domains">
                                <a href="/whmcs/clientarea.php?action=domains">
                                    My Domains
                                </a>
                            </li>
                            <li menuitemname="Domains Divider" class="nav-divider" id="Primary_Navbar-Domains-Domains_Divider">
                                <a href="">
                                    -----
                                </a>
                            </li>
                            <li menuitemname="Renew Domains" id="Primary_Navbar-Domains-Renew_Domains">
                                <a href="/whmcs/index.php?rp=/cart/domain/renew">
                                    Renew Domains
                                </a>
                            </li>
                            <li menuitemname="Register a New Domain" id="Primary_Navbar-Domains-Register_a_New_Domain">
                                <a href="/whmcs/cart.php?a=add&amp;domain=register">
                                    Register a New Domain
                                </a>
                            </li>
                            <li menuitemname="Transfer a Domain to Us" id="Primary_Navbar-Domains-Transfer_a_Domain_to_Us">
                                <a href="/whmcs/cart.php?a=add&amp;domain=transfer">
                                    Transfer Domains to Us
                                </a>
                            </li>
                            <li menuitemname="Domains Divider 2" class="nav-divider" id="Primary_Navbar-Domains-Domains_Divider_2">
                                <a href="">
                                    -----
                                </a>
                            </li>
                            <li menuitemname="Domain Search" id="Primary_Navbar-Domains-Domain_Search">
                                <a href="/whmcs/domainchecker.php">
                                    Domain Search
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li menuitemname="Billing" class="dropdown" id="Primary_Navbar-Billing">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Billing
                            &nbsp;<b class="caret"></b>        </a>
                        <ul class="dropdown-menu">
                            <li menuitemname="My Invoices" id="Primary_Navbar-Billing-My_Invoices">
                                <a href="/whmcs/clientarea.php?action=invoices">
                                    My Invoices
                                </a>
                            </li>
                            <li menuitemname="uniqueSubMenuItemName" id="Primary_Navbar-Billing-uniqueSubMenuItemName">
                                <a href="/whmcs/index.php?m=addonmodule">
                                    VAInvoices
                                </a>
                            </li>
                            <li menuitemname="My Quotes" id="Primary_Navbar-Billing-My_Quotes">
                                <a href="/whmcs/clientarea.php?action=quotes">
                                    My Quotes
                                </a>
                            </li>
                            <li menuitemname="Billing Divider" class="nav-divider" id="Primary_Navbar-Billing-Billing_Divider">
                                <a href="">
                                    -----
                                </a>
                            </li>
                            <li menuitemname="Mass Payment" id="Primary_Navbar-Billing-Mass_Payment">
                                <a href="/whmcs/clientarea.php?action=masspay&amp;all=true">
                                    Mass Payment
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li menuitemname="Support" class="dropdown" id="Primary_Navbar-Support">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Support
                            &nbsp;<b class="caret"></b>        </a>
                        <ul class="dropdown-menu">
                            <li menuitemname="Tickets" id="Primary_Navbar-Support-Tickets">
                                <a href="/whmcs/supporttickets.php">
                                    Tickets
                                </a>
                            </li>
                            <li menuitemname="Announcements" id="Primary_Navbar-Support-Announcements">
                                <a href="/whmcs/index.php?rp=/announcements">
                                    Announcements
                                </a>
                            </li>
                            <li menuitemname="Knowledgebase" id="Primary_Navbar-Support-Knowledgebase">
                                <a href="/whmcs/index.php?rp=/knowledgebase">
                                    Knowledgebase
                                </a>
                            </li>
                            <li menuitemname="Downloads" id="Primary_Navbar-Support-Downloads">
                                <a href="/whmcs/index.php?rp=/download">
                                    Downloads
                                </a>
                            </li>
                            <li menuitemname="Network Status" id="Primary_Navbar-Support-Network_Status">
                                <a href="/whmcs/serverstatus.php">
                                    Network Status
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li menuitemname="Open Ticket" class="" id="Primary_Navbar-Open_Ticket">
                        <a href="/whmcs/submitticket.php">
                            Open Ticket
                        </a>
                    </li>


                </ul>

            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

</section>
        <div class="container"  style="width: 1000px">
            <nav class="navbar " style="background:#1A4D80;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false"> <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <ul class="nav navbar-nav">
                            <li  class="active"><a style="color: white; font-weight: bold" href="http://localhost/whmcs/index.php?m=addonmodule&controller=VAFactor">Invoices File</a></li>
                            <li  class=""><a style="color: white; font-weight: bold" href="http://localhost/whmcs/index.php?m=addonmodule&controller=CompanySpecification">Company Specification</a></li>
                            <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/index.php?m=addonmodule&controller=VA">Value Added</a></li>
                            <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/index.php?m=addonmodule&controller=VA&action=indexInvoices">Invoices</a></li>
                            <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/index.php?m=addonmodule&controller=VA&action=indexVAInvoices">Value Added Invoices</a></li>
                            <li ><a style="color: white; font-weight: bold" href="http://localhost/whmcs/index.php?m=addonmodule&controller=VA&action=indexNVAInvoices">NON-Value Added Invoices</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <h2>Enter <b>Company Specification</b></h2>
            <form action="http://localhost/whmcs/index.php?m=addonmodule&controller=CompanySpecification&action=update&id={$args.id}" method="post">
                <div class="row" style="padding: 1%">
                    <div class="col-lg-6">
                        <div class="input-group">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Name</button>
              </span>
                            <input value="{$args.name}" required name="name" type="text" class="form-control" placeholder="Enter Name">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->


                </div><!-- /.row -->
                <div class="row" style="padding: 1%">
                    <div class="col-lg-6">
                        <div class="input-group">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Registration Number</button>
              </span>
                            <input value="{$args.registration_number}" required name="registration_number" type="text" class="form-control" placeholder="Enter Registration Number">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->


                </div><!-- /.row -->
                <div class="input-group"  style="padding: 1%">
                    <span class="input-group-addon" id="basic-addon1">Address</span>
                    <input value="{$args.address}" required  name="address" type="text" class="form-control" placeholder="Address" aria-describedby="basic-addon1" >
                </div>
                <div class="row" style="padding: 1%">
                    <div class="col-lg-6">
                        <div class="input-group">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Economical Number</button>
              </span>
                            <input value="{$args.economical_number}" required name="economical_number" type="text" class="form-control" placeholder="Enter Economical Number">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <button class="btn btn-primary right" style="float: right; margin-right: 10%;">submit</button>
                    </div>
                </div>
            </form>
        </div>


<!--top of footer-->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>