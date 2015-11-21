<?php $page=basename($_SERVER[ 'SCRIPT_NAME']); ?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple calculator for calculating PAYE to an amount.">
    <meta name="author" content="">
    <title>South African PAYE Calculator | PAYE on Monthly Taxable Income</title>
    <link rel="shortcut icon" href="" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="css/custom.css" />

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
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-N3MLJP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N3MLJP');
    </script>
    <!-- End Google Tag Manager -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <?php include ( 'includes/menu.php'); ?>
            <!--.nav-collapse -->
        </div>
    </nav>

    <div id=wrap>
        <div class="container">
            <div class="jumbotron" style="margin-top:30px">
                <h2>PAYE Calculator Tax Year 2016 - including UIF</h2>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Monthly Income</h3>
                        </div>
                        <div class="panel-body">
                            <form id="calcForm">
                                <div id="calcbox">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <div class="btn-group" data-toggle="buttons" style="margin-bottom:10px;">
                                            <label class="btn btn-default">
                                                <input type="radio" data-toggle="button" name="age" value="under65"> Younger than 65 years
                                            </label>
                                            <label class="btn btn-default">
                                                <input type="radio" name="age" value="between6575"> Between 65 and 75 years
                                            </label>
                                            <label class="btn btn-default">
                                                <input type="radio" name="age" value="over75"> Older than 75 years
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">R</span>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest rand)" id="monthlyIncome">
                                        </div>
                                        <div style="margin-top:10px">
                                            <button type="submit" class="btn btn-default" onclick="payeCalc(); return false;">Calculate Tax</button>
                                            <button type="submit" class="btn btn-default" onclick="resetCalc(); return false;">Clear</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="addResult" class="panel panel-default">
                        <div class="panel-body">
                            <table class="table" style="margin-bottom: 5px;">
                                <tr>
                                    <td>Annual Income Equivelant</td>
                                    <td class="text-right"><span id=annualIncome>0.00</span></td>
                                </tr>
                                <tr>
                                    <td>Annual Tax</td>
                                    <td class="text-right"><span id=annualTax>0.00</span></td>
                                </tr>
                                <tr>
                                    <td>Monthly Taxable Income</td>
                                    <td class="text-right"><span id=monthlyInc>0.00</span></td>
                                </tr>
                                <tr>
                                    <td>Monthly PAYE</td>
                                    <td class="text-right"><span id=monthlyTax>0.00</span></td>
                                </tr>
                                <tr>
                                    <td>Monthly UIF</td>
                                    <td class="text-right"><span id=UIF>0.00</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Netto Income</strong> (after PAYE and UIF is deducted)</td>
                                    <td class="text-right"><strong><span id=nettoIncome>0.00</span></strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Adsense Desktop Start -->
            <div class="panel panel-default hidden-xs hidden-sm">
                <div class="panel-body text-center">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- VAT - Leaderboard - Home -->
                    <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-0590369945323371" data-ad-slot="4659918578"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
            <!-- Adsense Desktop End -->
            <!-- Adsense Mobi Start -->
            <div class="panel panel-default hidden-md hidden-lg">
                <div class="panel-body text-center">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- VAT - Mobi -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-0590369945323371" data-ad-slot="9694476574" data-ad-format="auto"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
            <!-- Adsense Mobi End -->
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

<!-- Initialize Popover -->
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
</script>

</html>