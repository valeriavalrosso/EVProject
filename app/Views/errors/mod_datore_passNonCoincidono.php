<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="/css/stle-custom.css" rel="stylesheet">
<link rel="stylesheet" href="/css/login.css">

<head><title>Il Mio Account</title></head>

<body>
  <div class="main-content">
    <!-- Top navbar -->
	<?php
		include __DIR__ . "/../common/navbar_account_funzionalita.php";
	?>
	
	<div id="error2" class="errorDiv" >I campi Nuova Password e Conferma Password devono coincidere</div>
	
	<!-- Top navbar -->
	
    <!-- Header --><!--
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(/img/photo_2021-05-19_18-17-14.jpg); background-position: center;">
      <!-- Mask --
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid align-items-center" style="padding-top: 70px">
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 order-xl-1 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
			  <center>
				<form method="post" action="/Account/modificaAccount/Datore">
				
					<p class="pt-md-4">
						<input class="form-control" type="text" name="nome" placeholder="Nome" value="<?= esc(session()->get('nome')) ?>" style="width:90%" required>
					</p>
					
					<p class="pt-md-4">
						<input class="form-control" type="text" name="cognome" placeholder="Cognome" value="<?= esc(session()->get('cognome')) ?>" style="width:90%" required>
					</p>
					
					<p class="pt-md-4">
						<input class="form-control" type="text" name="codiceFiscale" placeholder="Codice Fiscale" value="<?= esc(session()->get('codicefiscale')) ?>" style="width:90%" required>
					</p>
					
					<p class="pt-md-4">
						<input class="form-control" type="text" name="nomeAzienda" placeholder="Nome Azienda" value="<?= esc(session()->get('nomeazienda'))?>" style="width:90%" required>
					</p>
					
					<p class="pt-md-4">
						<input class="form-control" type="text" name="partitaIVA" placeholder="Partita IVA" value="<?= esc(session()->get('partitaIVA'))?>" style="width:90%" required>
					</p>
					
					<p class="pt-md-4">
						<input class="form-control" type="text" name="codiceFiscaleAzienda" placeholder="Codice Fiscale Azienda" value="<?= esc(session()->get('cfAzienda'))?>" style="width:90%" required>
					</p>
					
					<p class="pt-md-4">
						<input class="form-control" type="password" name="password" placeholder="Password" style="width:90%" required>
					</p>
					
					<p class="pt-md-4">
						<input class="form-control" type="password" name="nuovaPassword" placeholder="Nuova Password" style="width:90%">
					</p>
					
					<p class="pt-md-4">
						<input class="form-control" type="password" name="confermaPassword" placeholder="Conferma Password" style="width:90%">
					</p>
					
					<button class="w3-button w3-section w3-teal w3-ripple accesso"> Salva </button>
				</form>
			  </center>
            </div>
          </div>
        </div>
            </div>
          </div>
        </div>
      <!--</div>
    </div>
  </div>-->
  <footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-6 m-auto text-center">
        <!--<div class="copyright">
          <p>Made with <a href="https://www.creative-tim.com/product/argon-dashboard" target="_blank">Argon Dashboard</a> by Creative Tim</p>
        </div>-->
      </div>
    </div>
  </footer>
</body>

