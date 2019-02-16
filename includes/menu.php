<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="http://www.payecalculator.co.za/develop/index.php">PAYE Calculator for 2019</a>
</div>

<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li <?php if ($page=='index.php' ) { ?>class="active"
        <?php } ?>><a href="index.php">PAYE Calculator</a></li>
        <li <?php if ($page=='paye-information.php' ) { ?>class="active"
        <?php } ?>><a href="paye-information.php">PAYE Info</li>
        <li><a href="mailto:help@payecalculator.co.za">Suggestions?</a></li>
    </ul>
</div>
