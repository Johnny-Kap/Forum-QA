@extends('layouts.admin')

@section('content')

<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area bg-white shadow-sm overflow-hidden pt-50px pb-50px">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="hero-content text-center">
            <h2 class="section-title pb-3">Conditions d'utilisation</h2>
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section><!-- end hero-area -->
<!--======================================
        END HERO AREA
======================================-->

<!-- ================================
         START TERMS AREA
================================= -->
<section class="terms-and-condition-area pt-60px pb-60px bg-white position-relative mt-2">
    <div class="container">
        <div class="card card-item">
            <div class="card-body row">
                <div class="col-lg-3">
                    <ul class="js-scroll-nav js--scroll-nav mb-40px">
                        <li class="active"><a href="#welcome-to-disku" class="page-scroll">Welcome</a></li>
                        <li><a href="#using-our-services" class="page-scroll">1. Utilisation de nos services</a></li>
                        <li><a href="#privacy-and-copyright-protection" class="page-scroll">2. Protection de la vie privée et des droits d'auteur</a></li>
                        <li><a href="#your-content-in-our-services" class="page-scroll">3. Votre contenu dans nos services</a></li>
                        <li><a href="#hyperlinks" class="page-scroll">4. Hyperliens</a></li>
                        <li><a href="#contact" class="page-scroll">5. Contact</a></li>
                    </ul>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-9">
                    <div class="terms-panel-main-bar pl-3">
                        <div class="terms-panel mb-30px" id="welcome-to-disku">
                            <h3 class="fs-20 pb-3 fw-bold">Bienvenue sur Forum Q&A</h3>
                            <p class="pb-3 text-black">Ces termes et conditions décrivent les règles et règlements d'utilisation de Forum Q&A</p>
                        </div><!-- end terms-panel -->
                        <div class="terms-panel mb-30px" id="using-our-services">
                            <h3 class="fs-20 pb-3 fw-bold">1. Utilisation de nos services</h3>
                            <p class="pb-3">Vous devez suivre toutes les politiques mises à votre disposition dans les Services.</p>
                            <p class="pb-3">N'abusez pas de nos Services. Par exemple, n'interférez pas avec nos Services ou n'essayez pas d'y accéder en utilisant une méthode autre que l'interface et les instructions que nous fournissons. Vous ne pouvez utiliser nos Services que dans la mesure permise par la loi, y compris les lois et réglementations applicables en matière de contrôle des exportations et des réexportations. Nous pouvons suspendre ou cesser de vous fournir nos Services si vous ne vous conformez pas à nos conditions ou politiques ou si nous enquêtons sur une inconduite présumée.</p>
                            <p class="pb-3">L'utilisation de nos Services ne vous confère aucun droit de propriété intellectuelle sur nos Services ou sur le contenu auquel vous accédez. Vous ne pouvez pas utiliser le contenu de nos Services à moins d'obtenir l'autorisation de son propriétaire ou d'être autrement autorisé par la loi. Ces conditions ne vous accordent pas le droit d'utiliser les marques ou logos utilisés dans nos Services. Ne pas supprimer, masquer ou modifier les avis juridiques affichés dans ou avec nos Services.</p>
                            <h4 class="fs-16 pb-3">A. Données personnelles que nous collectons à votre sujet.</h4>
                            <p class="pb-3">Les données personnelles sont toutes les informations relatives à une personne identifiée ou identifiable. Les données personnelles que vous nous fournissez directement via nos sites ressortiront du contexte dans lequel vous fournissez les données. En particulier:</p>
                            <ul class="generic-list-item generic-list-item-bullet pb-3">
                                <li>Lorsque vous créez un compte, nous collectons votre nom complet, votre adresse e-mail et vos identifiants de connexion au compte.</li>
                                <li>Lorsque vous remplissez notre formulaire en ligne pour contacter notre équipe commerciale, nous recueillons votre nom complet, votre adresse e-mail professionnelle, votre pays et tout ce que vous nous dites sur votre projet, vos besoins et votre calendrier..</li>
                                <li>Lorsque vous utilisez la fonction « Se souvenir de moi » de lors de connexion à votre compte, nous collectons votre adresse e-mail et votre mot de passe.</li>
                            </ul>
                            <p class="pb-3">Lorsque vous répondez aux e-mails ou aux enquêtes de Forum Q&A, nous collectons votre adresse e-mail, votre nom et toute autre information que vous choisissez d'inclure dans le corps de votre e-mail ou de vos réponses. Si vous nous contactez par téléphone, nous collecterons le numéro de téléphone que vous utilisez pour appeler Forum Q&A. Si vous nous contactez par téléphone en tant qu'Utilisateur de Forum Q&A, nous pouvons collecter des informations supplémentaires afin de vérifier votre identité.</p>
                            <h4 class="fs-16 pb-3">B. Informations que nous collectons automatiquement sur nos Sites.</h4>
                            <p class="pb-3">Nous pouvons également collecter des informations sur vos activités en ligne sur des sites Web et des appareils connectés au fil du temps et sur des sites Web, des appareils, des applications et d'autres fonctionnalités et services en ligne tiers.</p>
                            <p class="pb-3">Pour en savoir plus sur les cookies qui peuvent être déposés sur nos sites et sur la manière dont vous pouvez contrôler notre utilisation des cookies et des analyses tierces, veuillez consulter notre politique en matière de cookies..</p>
                        </div><!-- end terms-panel -->
                        <div class="terms-panel mb-30px" id="privacy-and-copyright-protection">
                            <h3 class="fs-20 pb-3 fw-bold">2. Protection de la vie privée et des droits d'auteur</h3>
                            <p class="pb-3">Les politiques de confidentialité de Forum Q&A expliquent comment nous traitons vos données personnelles et protégeons votre vie privée lorsque vous utilisez nos Services. En utilisant nos Services, vous acceptez que Forum Q&A utilise ces données conformément à nos politiques de confidentialité.</p>
                            <p class="pb-3">Nous répondons aux avis de violation présumée du droit d'auteur et résilions les comptes des contrevenants récidivistes conformément au processus défini dans la loi camerounaise.</p>
                            <p class="pb-3">Nous fournissons des informations pour aider les titulaires de droits d'auteur à gérer leur propriété intellectuelle en ligne. Si vous pensez que quelqu'un viole vos droits d'auteur et que vous souhaitez nous en informer, vous pouvez trouver des informations sur la soumission d'avis et la politique de Forum Q&A concernant la réponse aux avis dans notre
                                <a href="{{route('contact')}}" class="text-color hover-underline">Centre d'aide</a>.
                            </p>
                        </div><!-- end terms-panel -->
                        <div class="terms-panel mb-30px" id="your-content-in-our-services">
                            <h3 class="fs-20 pb-3 fw-bold">3. Votre contenu dans nos services</h3>
                            <p class="pb-3">Certains de nos Services vous permettent de télécharger, soumettre, stocker, envoyer ou recevoir du contenu. Vous conservez la propriété de tous les droits de propriété intellectuelle que vous détenez sur ce contenu. Bref, ce qui t'appartient reste à toi.</p>
                            <p class="pb-3">Lorsque vous téléchargez, soumettez, stockez, envoyez ou recevez du contenu vers ou via nos Services, vous accordez à Front (et à ceux avec qui nous travaillons) une licence mondiale pour utiliser, héberger, stocker, reproduire, modifier, créer des œuvres dérivées (telles que celles résultant à partir de traductions, d'adaptations ou d'autres modifications que nous apportons afin que votre contenu fonctionne mieux avec nos Services), communiquer, publier, exécuter publiquement, afficher publiquement et distribuer ce contenu. Les droits que vous accordez dans cette licence sont dans le but limité d'exploiter, de promouvoir et d'améliorer nos Services, et d'en développer de nouveaux. Cette licence continue même si vous arrêtez d'utiliser nos Services (par exemple, pour une fiche d'entreprise que vous avez ajoutée à Front Maps). Certains Services peuvent vous offrir des moyens d'accéder au contenu qui a été fourni à ce Service et de le supprimer. De plus, dans certains de nos Services, il existe des conditions ou des paramètres qui limitent la portée de notre utilisation du contenu soumis dans ces Services. Assurez-vous que vous disposez des droits nécessaires pour nous accorder cette licence pour tout contenu que vous soumettez à nos Services.</p>
                        </div><!-- end terms-panel -->
                        <div class="terms-panel mb-30px" id="hyperlinks">
                            <h3 class="fs-20 pb-3 fw-bold">4. Hyperliens</h3>
                            <p class="pb-3">Notre site Web peut contenir des hyperliens. Ces liens hypertextes vous renvoient vers des sites d'autres organismes qui ne relèvent pas de notre responsabilité. Nous avons déployé des efforts raisonnables pour préparer notre propre site Web et les informations qu'il contient sont faites de bonne foi. Cependant, nous n'avons aucun contrôle sur les informations auxquelles vous pouvez accéder via d'autres sites Web. Par conséquent, aucune mention d'une organisation, d'une entreprise ou d'un individu auquel notre site Web est lié n'implique aucune approbation ou garantie quant à la réputation et à la capacité de ces organisations, entreprises ou individus.</p>
                        </div><!-- end terms-panel -->
                        <div class="terms-panel" id="contact">
                            <h3 class="fs-20 pb-3 fw-bold">5. Coordonnées</h3>
                            <p class="pb-3">Cette page Condition d'utilisation a été créée par l'équipe de développeurs. Si vous avez des questions concernant l'une de nos conditions, veuillez nous contacter.</p>
                        </div><!-- end terms-panel -->
                    </div><!-- end terms-panel-main-bar -->
                </div><!-- end col-lg-9 -->
            </div>
        </div>
    </div><!-- end container -->
</section><!-- end terms-and-condition-area -->
<!-- ================================
         END TERMS AREA
================================= -->

@endsection