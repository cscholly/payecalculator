<?php $page=basename($_SERVER[ 'SCRIPT_NAME']); ?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple calculator for calculating PAYE for 2019.">
    <meta name="author" content="">
    <title>South African PAYE Calculator | PAYE on Monthly Taxable Income</title>
    <link rel="shortcut icon" href="" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="css/custom.css" />

    <?php include ( 'includes/header.php'); ?>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <?php include ( 'includes/menu.php'); ?>
            <!--.nav-collapse -->
        </div>
    </nav>

    <div id=wrap>
        <div class="container">
            <!-- News and Updates pop-up start -->
            <div class="alert alert-info alert-dismissible fade in" role="alert" style="margin-top:30px" ;>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>New -</strong> You can now choose tax calculation by age bracket! <a href="http://www.payecalculator.co.za" class="alert-link">Try it now!</a>
            </div>
            <!-- News and Updates pop-up end -->
            <div class="page-header">
                <h1>Helpful information <small>What is South African PAYE all about?</small></h1>
                <div class="addthis_native_toolbox"></div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Employees’ Tax explained</h3>
                        </div>
                        <div class="panel-body">
                            <p>PAYE is the acronym for Pay-As-You-Earn. In essence it is the tax required to be deducted by the employer from the employee's renumeration.</p>
                            <p>Companies or employers who are registered (or required to register) with SARS for PAYE or SDL purposes, are also required to register for UIF purposes.</p>
                            <a href="http://www.sars.gov.za/TaxTypes/PAYE/Pages/default.aspx" class="btn btn-primary btn-sm" role="button" target="_blank">Official SARS Definition</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Who should know about this?</h3>
                        </div>
                        <div class="panel-body">
                            <p>The amounts deducted or withheld must be paid by the employer to SARS on a monthly basis, by completing the Monthly Employer Declaration (EMP201).</p>
                            <p>This is an official declaration whereby the employer indicates the total payment owed to SARS for PAYE, UIF and SDL.</p>
                            <a href="http://www.sars.gov.za/TaxTypes/PAYE/Pages/Completing-the-EMP201.aspx" class="btn btn-primary btn-sm" role="button" target="_blank">More on the Employer Declaration (EMP210)</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">How and when should PAYE be paid?</h3>
                        </div>
                        <div class="panel-body">
                            <p>It must be paid within seven days after the end of the month during which the amount was deducted.</p><p> If the last day for payment falls on a public holiday or weekend, the payment must be made on the last business day before the public holiday or weekend.</p>
                            <a href="https://secure.sarsefiling.co.za/!Generator/WebWiz.aspx?BusinessProcessCode=BPLogin&ProcessCode=Login&ActionCode=Load" class="btn btn-primary btn-sm" role="button" target="_blank">Link to eFiling</a>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Adsense Desktop Start -->
            <div class="panel panel-default hidden-xs hidden-sm">
                <div class="panel-body text-center">
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                  <!-- PAYE - Responsive -->
                  <ins class="adsbygoogle"
                       style="display:block"
                       data-ad-client="ca-pub-0590369945323371"
                       data-ad-slot="8869708491"
                       data-ad-format="auto"
                       data-full-width-responsive="true"></ins>
                  <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
                </div>
            </div>
            <!-- Adsense Mobi End -->

            <div class="page-header">
                <h1>Downloadable Files <small>Guides and documents supplied by SARS</small></h1>
            </div>
            <ul class="list-group">
                <li class="list-group-item">A guide to managing your SARS employer account
                    <a href="http://www.sars.gov.za/AllDocs/OpsDocs/Guides/EMP-GEN-01-G03%20-%20A%20guide%20to%20managing%20your%20SARS%20employer%20account%20-%20External%20Guide.pdf" class="pull-right" target="_blank"> <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a>
                </li>
                <li class="list-group-item">Registering for Employees’ Tax  (PAYE) EMP101e form
                    <a href="http://www.sars.gov.za/AllDocs/OpsDocs/SARSForms/EMP101e%20-%20Application%20for%20Registration%20PAYE%20SDL%20UIF%20-%20External%20Form.pdf" class="pull-right" target="_blank"> <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a>
                </li>
                <!-- <li class="list-group-item">Form - Application for Registration for Value Added Tax
                    <a href="downloads/VAT101%20-%20Application%20for%20Registration%20for%20Value%20Added%20Tax%20-%20External%20Form.pdf" class="pull-right" target="_blank"> <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a>
                </li> -->
            </ul>
            <div class="pull-right">
                <a href="http://www.payecalculator.co.za" class="btn btn-primary btn-sm" role="button">PAYE Calculator</a>
                <a href="http://www.sars.gov.za" class="btn btn-primary btn-sm" role="button" target="_blank">For more tax information visit SARS.org.za</a>
            </div>
        </div>
    </div>
    <!-- wrap end -->

    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <?php include ( 'includes/footer.php'); ?>
        </div>
    </footer>
    <!-- footer end -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>

<!-- VAT calculation scripts -->
<script src="js/calculation.js"></script>

<!-- jQuery Cookie remember https://github.com/js-cookie/js-cookie-->
<script src="js/js.cookie-1.5.1.min.js"></script>
<script>
    // When document is ready replaces the need for onload
    jQuery(function($) {

        // Grab your button (based on your posted html)
        $('.close').click(function(e) {

            // Do not perform default action when button is clicked
            e.preventDefault();

            /* If you just want the cookie for a session don't provide an expires
             Set the path as root, so the cookie will be valid across the whole site */
            $.cookie('alert-box', 'closed', {
                path: '/'
            }, {
                expires: 7
            });

        });

    });
</script>

<script>
    jQuery(function($) {

        // Check if alert has been closed
        if ($.cookie('alert-box') === 'closed') {

            $('.alert').hide();

        }

    });
</script>

<!-- Initialize Popover -->
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
</script>

</html>
