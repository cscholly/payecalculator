
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="https://www.payecalculator.co.za">PAYE Calculator for 2020/2021</a>
    </div>

    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php if ($page=='index.php' ) { ?>class="active"
        <?php } ?>><a href="index.php">PAYE Calculator <span class="label label-info">Updated</a></a></li>
          <li <?php if ($page=='paye-information.php' ) { ?>class="active"
          <?php } ?>><a href="paye-information.php">Useful PAYE Information</a></li>
          <li><a href="https://www.vatcalculator.co.za">VAT Calculator</a></li>
          <li><a href="mailto:help@payecalculator.co.za">Suggestions?</a></li>
        </ul>
      </div>
      <!--.nav-collapse -->
    </div>
  </nav>
