<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="http://www.payecalculator.co.za">PAYE Calculator</a>
</div>

<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li <?php if ($page=='index.php' ) { ?>class="active"
            <?php } ?>><a href="index.php">Helpful PAYE information</a></li>
        <li <?php if ($page=='calculate-paye.php' ) { ?>class="active"
            <?php } ?>><a href="calculate-paye.php">Calculate PAYE <span class="label label-info">Try it!</a></li>
        <li><a href="mailto:webmaster@payecalculator.co.za">Email feedback and suggestions</a></li>
    </ul>
</div>