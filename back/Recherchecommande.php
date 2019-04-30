<?PHP
require  "../core/CommandeC.php";
$CommandeC=new CommandeC();
if(!(isset($_GET['recherche']))){
$listeEmploye=$CommandeC->afficherCommande();
$listeEmploye1=$CommandeC->afficherCommande();
}
else{
	
	$listeEmploye=$CommandeC->recherche($_GET['recherche']);
	$listeEmploye1=$CommandeC->afficherCommande();

	}
//var_dump($listeEmployes->fetchAll());
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashboard JTS</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- ********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        ********************************************************************************************************************************************************* -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        
      </div>
      
    </header>
    <!--header end-->
    <!-- ********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        ********************************************************************************************************************************************************* -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Commmandes</span>
              </a>
            <ul class="sub">
              <li><a href="commandes.php">Commandes</a></li>
              <li><a href="factures.php">Factures</a></li>
              <li><a href="panier.php">Panier</a></li>
                <li><a href="RechercheCommande.php">recherche</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Produits</span>
              </a>
            <ul class="sub">
              <li><a href="stock.php">Stock</a></li>
              <li><a href="Recherchestock.php">Recherche</a></li>
              <li><a href="catalogue.php">Catalogue</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>SAV</span>
              </a>
             <ul class="sub">
              <li><a href="recherche.php">Recherche</a></li>
              <li><a href="reclamation.php">Reclamations</a></li>
              <li><a href="rendezvous.php">Rendez-vous</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Clients</span>
              </a>
            <ul class="sub">
              <li><a href="clients.php">Clients</a></li>
            
              <li><a href="historique.php">Historique</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Livraisons</span>
              </a>
             <ul class="sub">
              <li><a href="livdispo.php">Livraisons disponibles</a></li>
              <li><a href="livreur.php">Livreurs</a></li>
              <li><a href="recherche.php">Recherche</a></li>
            </ul>
          </li>
           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Paiement</span>
              </a>
           
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Publicité</span>
              </a>
            <ul class="sub">
              
              <li><a href="pub.php">Publicité</a></li>
              <li><a href="relationclient.php">Relationclient</a></li>
              <li><a href="recherche.php">Recherche</a></li>
            </ul>
              
           
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- ********************************************************************************************************************************************************
        MAIN CONTENT
        ********************************************************************************************************************************************************* -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>Reclamation</h3>
            </div>
            
              
            <!--custom chart end-->
            
                  
                <!-- /grey-panel -->
              
              <!-- /col-md-4-->
              
              <!-- /col-md-4-->
              <!-- DIRECT MESSAGE PANEL -->
              
              <!-- /col-md-4 -->
              
            <!-- /row -->
            
              </div>
              <!-- /col-md-4 -->
              <!--  PROFILE 02 PANEL -->
              
                  
                <!-- /panel -->
              </div>
              <!--/ col-md-4 -->
             
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- ********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              ********************************************************************************************************************************************************* -->
          <div class="col-lg ds">
            <!--COMPLETED ACTIONS DONUTS CHART-->
            <div class="donut-main">
            	<form method="get" action="Recherchecommande.php">
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom</label>
     
      <input list="browsers" name="recherche" class="form-control">
 

<datalist id="browsers">
	<?PHP
foreach($listeEmploye1 as $rows){
 
  ?>
  <option value="<?PHP echo $rows['idCom']; ?>">
   <?PHP
}
?>
</datalist>

    </div> <button type="submit"   class="btn btn-success">search</button>
            	</form>
      <table class="table table-hover table-fixed">

  <!--Table head-->
  <thead>
    <tr>
      <th>idCom</th>
      <th>idClient</th>
      <th>prTotal </th>
      <th>etatCom </th>
 
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>

   <?PHP
foreach($listeEmploye as $row){
  ?>
  <tr>
  <td><?PHP echo $row['idCom']; ?></td>
  <td><?PHP echo $row['idClient']; ?></td>
  <td><?PHP echo $row['prTotal']; ?></td>
  <td><?PHP echo $row['etatCom']; ?></td>
  <td><form method="POST" action="../views/supprimerCommande.php">
  
  <input type="submit" name="supprimer"  class="btn btn-danger"  value="supprimer">
  <input type="hidden" value="<?PHP echo $row['idClient']; ?>" name="idClient">
  </form>
  </td>
  <td><a href="modifierCommande.php?id=<?PHP echo $row['idClient']; ?>" style="text-decorations:none; color:white;"  class="btn btn-warning">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>
   
  </tbody>
  <!--Table body-->

</table>
</div>
<div class="row">
  <div class="col-lg-6">
      </div>
  </div>

    
    <input type="hidden" name="token" value="b89d333e2455e31843293ec95a2acfd5">
  </div>


    


</form>





      </div>
</div>
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>

