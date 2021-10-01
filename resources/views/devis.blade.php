<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <link rel="icon" href="log.png" />
    <title>Devis
    </title>
    <link rel="apple-touch-icon" href="log.png">
    <link rel="shortcut icon" type="image/x-icon" href="log.png">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/pickers/daterange/daterange.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END Custom CSS-->
</head>

<body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu"
    data-col="2-columns">
    <!-- fixed-top-->
    <nav
        class=" header-navbar navbar-expand-sm navbar navbar-with-menu navbar-light navbar-shadow border-grey border-lighten-2">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item mobile-menu d-md-none float-left">
                        <button class="nav-link menu-toggle hamburger hamburger--arrow js-hamburger is-active">
                            <span class="hamburger-box"></span>
                            <span class="hamburger-inner"></span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('index')}}" class="navbar-brand nav-link">
                            <img src="log.png" width="fa-rotate-2700px" alt="branding logo">
                        </a>
                    </li>
                    <li class="nav-item d-md-none float-right"><a data-toggle="collapse" data-target="#navbar-mobile10"
                            class="nav-link open-navbar-container"><i
                                class="la la-ellipsis-h pe-2x icon-rotate-right"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div id="navbar-mobile10" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link " href="{{route('index')}}">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#" style="font-weight: bold;">Demande de devis</a></li>
                    </ul>
    
                </div>
            </div>
        </div>
    </nav>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    
    <div class="app-content content">
        <div class="content-wrapper">
            
            <div class="content-body">
                
                <!-- Form wizard with icon tabs section end -->
                <!-- Form wizard with step validation section start -->
                <section id="validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" style="font-weight: bold;">Demande de devis</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-h font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form action="#" method="post" class="steps-validation wizard-circle">
                                            @csrf
                                            <!-- Step 1 -->
                                            <h6>Etape 1</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName3">
                                                               Nom :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control required"
                                                                id="firstName3" name="nom">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastName3">
                                                              Prénom :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control required"
                                                                id="lastName3" name="lastName">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emailAddress5">
                                                                Email  :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="email" class="form-control required"
                                                                id="emailAddress5" name="emailAddress">
                                                        </div>
                                                    </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phoneNumber3">Phone Number :</label>
                                                        <input type="tel" class="form-control" id="phoneNumber3">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date1">Date de Naissance:</label>
                                                        <input type="date" class="form-control" id="date1">
                                                    </div>
                                                </div>
                                                
                                                </div>
                                                
                                            </fieldset>
                                            <!-- Step 2 -->
                                            <h6>Etape 2</h6>
                                            <fieldset>
                                                <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <div class="form-group">
                                                        <label for="eventType3">
                                                            Qui souhaitez-vous assurer ? :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <select class="custom-select form-control required" id="eventType3" name="eventType">
                                                            <option value="Vous">Vous</option>
                                                            <option value="Vous et votre conjoint">Vous et votre conjoint</option>
                                                            <option value="Vous et vos enfants">Vous et vos enfants</option>
                                                            <option value="Vous, votre conjoint et vos enfants">Vous, votre conjoint et vos enfants</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="eventLocation3">Quel est votre régime social ? :</label>
                                                        <select class="custom-select form-control" id="eventLocation3" name="regime">
                                                            <option value="Salarié">Salarié</option>
                                                            <option value="Sans emploi">Sans emploi</option>
                                                            <option value="Retraité ancien salarié">Retraité ancien salarié</option>
                                                            <option value="Fonctionnaire">Fonctionnaire</option>
                                                            <option value="Autres">Autres</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                   
                                                </div>
                                            </fieldset>
                                            <!-- Step 3 -->
                                            <h6>Etape 3</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="eventName3">
                                                                Ville:
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control required"
                                                                id="eventName3" name="eventName">
                                                        </div>
                                                        
                                                    </div>
                                                  
                                                </div>
                                               
                                                <label>
                                                    <input checked type="checkbox" value=""> J'accepte de recevoir des offres personnalisées de lesfurets
                                                </label>
                                                <label>
                                                    <input checked required type="checkbox" value=""> J'accepte les Conditions Générales d'Utilisation et d'être contacté par nos partenaires assurance santé (uniquement si
                                                    je souhaite être mis en relation).
                                                </label>
                                            </fieldset>
                                            
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with step validation section end -->
                <!-- Form wizard with vertical tabs section start -->
               
                <!-- Form wizard with vertical tabs section end -->
            </div>
        </div>
    </div>
    <div style="background-color: white;">
        <section class="container" id="stats-icon-subtitle">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 style="    text-align: center;
                                                font-family: Poppins;
                                                font-style: normal;
                                                font-weight: bold;
                                                font-size: 30px;
                                                color: #fbc02d;
                                                text-transform: capitalize;
                                            " class="text-uppercase">Comment choisir sa mutuelle en ligne ?</h4>
                    <p>Le comparateur d’assurance Assurconsulting.fr vous permet de définir précisément vos attentes. A
                        l’aide de notre formulaire en ligne, décrypter les taux d’indemnisation qui correspondent à votre
                        profil pour trouver votre complémentaire santé.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-content">
                            <div class="media align-items-stretch">
                                <div class="bg-warning p-2 media-middle">
                                    <i class="icon-pencil font-large-2 text-white"></i>
                                </div>
                                <div class="media-body p-2">
                                    <h2 style="text-align: center;">Des couvertures adaptées à vos besoins spécifiques</h2>
                                    <span>Les tarifs sont calculés en fonction de curseurs qui vous permettent de moduler
                                        les taux de
                                        remboursements de vos frais. Équilibrez vos frais de santé (couverture jusqu’à 200%
                                        du coût de
                                        la consultation chez un spécialiste), d’hospitalisation (jusqu’à 250% pour un acte
                                        chirurgical),
                                        d’optique (entre 50€ et 250€ remboursés pour vos lunettes) et de soins spécifiques
                                        (jusqu’à
                                        300% sur vos couronnes et implants) : vous serez certain d’être bien couvert sans
                                        vous ruiner.</span>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="media align-items-stretch">
    
                                <div class="media-body p-2">
                                    <h2 style="text-align: center;">Des tarifs qui changent en fonction de votre zone
                                        géographique</h2>
                                    <span>En effet, nous constatons qu’il existe une différence de coûts selon la ville où
                                        vous habitez.
                                        Les
                                        personnes vivant en Île-de-France paieront une cotisation différente que ceux vivant
                                        dans une
                                        autre région alors même qu’ils auront un profil d’assuré identique.
                                        La région (département) reste donc un critère important dans la définition de la
                                        cotisation.</span>
                                </div>
                                <div class="media-right bg-danger p-2 media-middle rounded-right">
                                    <i class="icon-heart font-large-2 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="media align-items-stretch">
                                <div class="bg-success p-2 media-middle rounded-left">
                                    <i class="icon-speech font-large-2 text-white"></i>
                                </div>
                                <div class="media-body p-2">
                                    <h2 style="text-align: center;">Des couvertures différentes selon votre profil</h2>
                                    <span>Bien évidemment, selon votre profil, vos attentes sont bien différentes
                                        (hospitalisation,
                                        maladie
                                        rare, besoin d’une assistance spécifique etc…). Prenons par exemple : <br>
                                        Une mutuelle jeune : elle est souvent moins protectrice et ainsi moins chère ;<br>
                                        Une mutuelle familiale : elle va couvrir les parents mais aussi les enfants ;<br>
                                        Une mutuelle senior : avec un maximum de garanties pour avoir l’assurance d’accéder
                                        à
                                        un plus grand nombre de soins. Elle moyenne un coût bien plus important.<br>
                                        Cela s’explique par le fait que le niveau de protection n’est pas le même. Un senior
                                        aura besoin
                                        de couvrir des honoraires plus importants en moyenne qu’une personne jeune. Les
                                        organismes
                                        le savent d’où une cotisation souvent plus élevée.</span>
                                </div>
                                <div class="bg-success p-2 media-middle rounded-left">
                                    <i class="icon-speech font-large-2 text-white"></i>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </section>
    
    </div>
    <div style="margin-top: 18px; text-align: center;">
        <button  style='font-weight: bold;' onclick="scrollToTop()" type="button" class="btn btn-success width-300 buttonAnimation" data-animation="tada">Demander un
            devis</button>
    </div>
    <div style=" margin-top: 30px;">
        <section class="container">
            <h1 style="    text-align: center;
                                                            font-family: Poppins;
                                                            font-style: normal;
                                                            font-weight: bold;
                                                            font-size: 30px;
                                                            color: #fbc02d;
                                                            text-transform: capitalize;
                                                        ">
                Nos partenaires
            </h1>
            <p>
                C'est parce qu'on est indépendant qu'on peut vous trouver les meilleures offres.
    
            </p>
            <div style="bottom: 5px;" class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12 border-right-blue-grey border-right-lighten-5">
                                <div class="float-left pl-2">
                                    <span class="font-large-3 text-bold-300 info">
    
                                        <img src="cocoon.png" alt="">
                                    </span>
                                </div>
    
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 border-right-blue-grey border-right-lighten-5">
                                <div class="float-left pl-2">
                                    <span class="font-large-3 text-bold-300 danger"><img src="ag2r-la-mondiale.png"
                                            alt=""></span>
                                </div>
    
                            </div>
                            <div class="col-lg-3 col-md-6 col-12 border-right-blue-grey border-right-lighten-5">
                                <div class="float-left pl-2">
                                    <span class="font-large-3 text-bold-300 success"><img src="april-premium.png"
                                            alt=""></span>
                                </div>
    
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="float-left pl-2">
                                    <span class="font-large-3 text-bold-300 warning"><img src="les-menages-prevoyants.png"
                                            alt=""></span>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    
        </section>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
<footer class="footer footer-light footer-static footer-transparent">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span class="float-md-left d-block d-md-inline-block">Copyright © 2021 <a class="text-bold-800 grey darken-2"
                href="{{route('index')}}" target="_blank">ASSURCONSULTING
            </a>,
            Tous les droits sont réservés. </span>
        <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted &amp; Made with <i
                class="ft-heart pink"></i></span>
    </p>
</footer>
    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script type="text/javascript" src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script type="text/javascript" src="app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"
        type="text/javascript"></script>
    <script src="app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"
        type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script type="text/javascript" src="app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
    <script src="app-assets/js/scripts/forms/wizard-steps.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script>
        function scrollToTop() {
            window.scrollTo(0, 0);
        }
    </script>
</body>

</html>