<?php $page=basename($_SERVER[ 'SCRIPT_NAME']); ?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple calculator for adding VAT to an amount.">
    <meta name="author" content="">
    <title>South African PAYE Calculator | Calculating PAYE</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/custom.css">

    <style>
        body {
            padding-top: 50px;
        }
        
        .starter-template {
            padding: 40px 15px;
            text-align: center;
        }
    </style>

    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PCMSX7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PCMSX7');</script>
<!-- End Google Tag Manager -->
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
                <strong>Important -</strong> This site is currently under construction - Do not rely on any calculations, yet!
            </div>
            <!-- News and Updates pop-up end -->
            <div class="page-header">
                <h1>Helpful information <small>What is South African PAYE all about?</small></h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">PAYE explained</h3>
                        </div>
                        <div class="panel-body">
                            <p>VAT is the acronym for Value-added Tax. In essence it is the indirect tax on the consumption of goods and services in the South African economy.</p>
                            <p>Revenue is raised for government by requiring certain businesses to register and to charge VAT on the taxable supplies of goods and services.</p>
                            <a href="http://www.sars.gov.za/TaxTypes/VAT/Pages/default.aspx" class="btn btn-primary btn-sm" role="button" target="_blank">Official SARS definition</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Who should register for PAYE?</h3>
                        </div>
                        <div class="panel-body">
                            <p>Any person that does business, may register his or her entity for VAT. Person in this case is not only limited to companies, but can be individuals, partnerships, companies and many other.</p>
                            <p>If your turnover exceeds R1 million per consecutive 12 month period, it becomes mandatory to register.</p>
                            <a href="http://www.sars.gov.za/ClientSegments/Businesses/My-Bus-and-Tax/Pages/Register-and-Deregister-for-VAT.aspx" class="btn btn-primary btn-sm" role="button" target="_blank">More on registering for VAT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Preparing for PAYE</h3>
                        </div>
                        <div class="panel-body">
                            <p>Once you or your trading entity is registered for VAT, you must adhere to certain duties and take responsibility for, including VAT on your products and services.</p>
                            <p>Charge for and collect VAT as well as maintaining records related to all transactions.</p>
                            <a href="http://www.sars.gov.za/TaxTypes/VAT/Pages/Getting-ready-for-VAT.aspx" class="btn btn-primary btn-sm" role="button" target="_blank">Getting ready for VAT</a>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Adsense Desktop Start - ->
            <div class="panel panel-default hidden-xs hidden-sm">
                <div class="panel-body text-center">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- VAT - Leaderboard - Home - ->
                    <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-0590369945323371" data-ad-slot="4659918578"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
            <!-- Adsense Desktop End -->
            <!-- Adsense Mobi Start - ->
            <div class="panel panel-default hidden-md hidden-lg">
                <div class="panel-body text-center">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- VAT - Mobi - ->
                    <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-0590369945323371"
                     data-ad-slot="9694476574"
                     data-ad-format="auto"></ins>
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
                <li class="list-group-item">Guide - VAT Vendors information <em>(aimed at all registered VAT entities)</em>
                    <a href="downloads/LAPD-VAT-G02%20-%20VAT%20404%20Guide%20for%20Vendors%20-%20External%20Guide.pdf" class="pull-right" target="_blank"> <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a>
                </li>
                <li class="list-group-item">Guide - Using VAT eFiling
                    <a href="downloads/GEN-ELEC-04-G01%20-%20Guide%20for%20Value%20Added%20Tax%20via%20eFiling%20-%20External%20Guide.pdf" class="pull-right" target="_blank"> <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a>
                </li>
                <li class="list-group-item">Form - Application for Registration for Value Added Tax
                    <a href="downloads/VAT101%20-%20Application%20for%20Registration%20for%20Value%20Added%20Tax%20-%20External%20Form.pdf" class="pull-right" target="_blank"> <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a>
                </li>
            </ul>
            <div class="pull-right">
                <a href="calculate-paye.php" class="btn btn-primary btn-sm" role="button">PAYE calculator</a>
                <a href="http://www.sars.gov.za/Pages/Forms.aspx?pageid=C62;" class="btn btn-primary btn-sm" role="button" target="_blank">For more guides and forms visit SARS.org.za</a>
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
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557eccdd09b75a91" async="async"></script>

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