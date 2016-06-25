<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Letní škola Symfony &hearts;</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <script src="https://sdk.amazonaws.com/js/aws-sdk-2.1.12.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
    <?php require 'tag-manager.php' ?>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Letní škola Symfony</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="#symfony-school" class="page-scroll">O škole</a>
                    </li>
                    <li>
                        <a href="#about" class="page-scroll">Stojí to za to?</a>
                    </li>
                    <li>
                        <a href="#study-plan" class="page-scroll">Studijní plán</a>
                    </li>
                    <li>
                        <a href="#sign-up" class="page-scroll">Přihláška</a>
                    </li>
                    <li>
                        <a href="#faq" class="page-scroll">FAQ</a>
                    </li>
                    <li>
                        <a href="#contact" class="page-scroll">Kontakt</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive symfony-logo" src="/img/symfony-logo.png" alt="">
                    <div class="intro-text">
                        <span class="name">Nastartuj svou<br>vývojářskou kariéru</span>
                        <hr class="star-main">
                        <span class="skills">16.&thinsp;8. - 20.&thinsp;9., 1x týdně, Praha</span>
                        <div>
                            <a href="#symfony-school" class="btn btn-outline btn-outline-light btn-lg page-scroll">Chci vědět víc</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="symfony-school">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Je Letní škola Symfony pro mě?</h2>
                    <hr class="star-even">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p>Letní škola Symfony je <strong>5týdenní intenzivní kurz</strong>, na kterém se naučíš vytvářet webové aplikace jako profík.</p>
                    <p><strong>Minimum teorie, maximum praxe</strong> - číst dokumentaci umí každý, my ti předáme naše dlouhodobé zkušenosti a vyzkoušené postupy.</p>
                    <p>Naučíme tě psát <strong>čistý a testovatelný kód</strong>, pracovat v týmu a vyzkoušíš si <strong>nejnovější technologie</strong>.</p>
                    <p>Jsi <strong>začátečník</strong> nebo <strong>mírně pokročilý</strong>? Pak je kurz právě pro tebe.</p>
                    <p>Umíš jiný framework (např. Nette) a chceš si vyzkoušet Symfony? Super, <strong>pojď do toho</strong>.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#about" class="btn btn-outline btn-outline-dark btn-lg page-scroll">Stojí to za to?</a>
                </div>
            </div>
        </div>
    </section>

    <section class="yellow" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Stojí to za to?</h2>
                    <hr class="star-odd">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <ol class="is-it-worth-list">
                        <li>
                            Naučíme tě pokročilé programovací techniky s využitím top technologií.
                            Symfony2, Bootstrap, PHPStorm, CircleCI, všechno tohle si s námi vyzkoušíš.
                        </li>
                        <li>
                            Za 5 týdnů ti předáme naše dlouholeté zkušenosti, které bys jinak získával roky. Škola tě praxi nenaučí, naši zkušení lektoři ano.
                        </li>
                        <li>
                            Pokud kurz dokončíš, budeš mít celou Letní školu Symfony zdarma.
                        </li>
                        <li>
                            Pokud si budeme rozumnět, po skončení kurzu ti nabídneme práci. Jestli ji přijmeš je jen na tobě.
                        </li>
                    </ol>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#study-plan" class="btn btn-outline btn-outline-dark btn-lg page-scroll">Jaký je studijní plán?</a>
                </div>
            </div>
        </div>
    </section>

    <section id="study-plan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Studijní plán</h2>
                    <hr class="star-even">
                    <p>
                        V průběhu výuky budeme ve <strong>2 týmech</strong> vytvářet <strong>reálnou aplikaci</strong> na téma, na kterém se domluvíme.
                        Nabízíme <a href="https://docs.google.com/document/d/18FOPct8QywCVkaU3RVNDVhRsVk1FVVo7R_l0MOFr5sA/edit#" target="_blank">2&nbsp;vlastní témata</a>,
                        o kterých si myslíme, že budou pro vás výzvou a <strong>posunou vás ve znalostech hodně kupředu</strong>.
                    </p>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <ol class="study-plan">
                        <li>
                            <div>
                                <strong>Teorie</strong>: Objektové programování. Proč framework? Proč Symfony? Bundles, Twig.
                            </div>
                            <div>
                                <strong>Praxe</strong>: Plán tvorby reálné aplikace, příprava prostředí (PHP, MySQL, Symfony).
                            </div>
                        </li>
                        <li>
                            <div>
                                <strong>Teorie</strong>: Dependency Injection, vrstvy aplikace, čistý kód, testování, refactoring.
                            </div>
                            <div>
                                <strong>Praxe</strong>: Diskuse nad návrhem aplikace, práce na aplikaci.
                            </div>
                        </li>
                        <li>
                            <div>
                                <strong>Teorie</strong>: Model, Doctrine 2, formuláře, Bootstrap.
                            </div>
                            <div>
                                <strong>Praxe</strong>: Diskuse nad vaším kódem, náměty na refactoring. Práce na aplikaci.
                            </div>
                        </li>
                        <li>
                            <div>
                                <strong>Teorie</strong>: Zabezpečení, sekce s omezeným přístupem, console.
                            </div>
                            <div>
                                <strong>Praxe</strong>: Diskuse nad vaším kódem, náměty na refactoring. Práce na aplikaci.
                            </div>
                        </li>
                        <li>
                            <div>
                                <strong>Teorie</strong>: Výkonová optimalizace (PHP + MySQL), cachování
                            </div>
                            <div>
                                <strong>Praxe</strong>: Dokončení a prezentace vytvořených aplikací. Sebehodnocení a retrospektiva.
                            </div>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-3 text-center">
                    <h4>Jiří Koutný - lektor</h4>
                    <div>
                        <img src="/img/jirka.jpg" alt="Jirka Koutný" />
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/jirkakoutny" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/kutny" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/jirikoutny" class="btn-social btn-outline" target="_blank"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <p style="font-size: 16px">
                        Jirka staví webové aplikace již <strong>12 let</strong>.
                        Symfony začal používat mezi prvními v ČR. Věnuje se mu poslední 4 roky na projektech <a href="http://www.collabim.cz">Collabim</a> a <a href="https://www.serpo.cz">Serpo</a>.
                    </p>
                    <p style="font-size: 16px">
                        V Collabimu jsme pomáhali zakládat <a href="http://www.symfony.cz">Symfony2 komunitu</a>, kde často přednášíme.
                        Třeba o&nbsp;<a href="https://www.youtube.com/watch?v=0VQXnLrGhqw">o architektuře Collabimu</a>&nbsp;nebo <a href="https://www.youtube.com/watch?v=j7EMYUnyk44">RabbitMQ</a>.
                    </p>
                    <p><i>Další lektory představíme brzy...</i></p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#sign-up" class="btn btn-outline btn-outline-dark btn-lg page-scroll">Jdu do toho</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="yellow" id="sign-up">
        <div class="container">
            <form action="https://collabim.ecomailapp.cz/public/subscribe/3" method="post" name="sentMessage" id="contactForm" novalidate>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Přihlas se, za zkoušku nic nedáš</h2>
                    <hr class="star-odd">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="name">Jméno</label>
                            <input type="text" class="form-control" placeholder="Jméno" name="name" id="name" required data-validation-required-message="Jméno je základ">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="surname">Příjmení</label>
                            <input type="text" class="form-control" placeholder="Příjmení" name="surname" id="surname" required data-validation-required-message="Bez příjmení to nepůjde">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email" required data-validation-required-message="Bez emailu ti nemůžeme odpovědět">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="age">Věk</label>
                            <input type="number" class="form-control" placeholder="Věk" name="custom_fields[age]" id="age" required data-validation-required-message="Snad tě neurazíme, ale vyplň i věk">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row sign-up-row">
                <div class="col-lg-2 col-lg-offset-2">
                    <button type="submit" class="btn btn-success btn-lg" id="signUpButton">Přihlaste mě</button>
                </div>
                <div class="col-lg-8">
                    <p class="text-muted">Zatím si nevěříš? Máš další dotazy? <a href="#contact" class="page-scroll">Napiš nám</a></p>
                </div>
            </div>
            </form>
        </div>
    </section>

    <section id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Nejčastější otázky</h2>
                    <hr class="star-even">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h4>Proč to děláte?</h4>
                    <p>
                        Baví náš přednášet a poznávat nové lidi se stejnými zájmy. Věříme, že Symfony škola nám pomůže najít programátory,
                        se kterými si budeme rozumět a bude je bavit spolupracovat na našich projektech.
                    </p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h4>Co musím umět?</h4>
                    <p>
                        Měl bys mít alespoň <strong>základní zkušenosti</strong> s programováním v PHP, HTML, CSS a Javascriptem. Nemusíš mít zkušenost s frameworky, ale je to samozřejmě výhoda.
                    </p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h4>Jaká bude organizace výuky?</h4>
                    <p>
                        Samotná výuka bude probíhat vždy <strong>celé úterý</strong>. Dopoledne si řekneme trochu teorie a poté budeme vytvářet samotnou aplikaci a diskutovat konkrétní řešení.
                    </p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h4>Kolik si mám vyhradit času?</h4>
                    <p>
                        Při výuce určitě všechno nestihneme. Počítej s tím, že ti zbude práce na doma.
                        Pokud se chceš za těch 5 týdnů opravdu zlepšit, vyhraď si <strong>3 dny čistého času každý týden</strong>.
                    </p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h4>Kolik bude účastníků?</h4>
                    <p>
                        Abychom se mohli všem pečlivě věnovat, vybereme do Letní školy Symfony maximálně 8 vývojářů.
                    </p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h4>Je to opravdu zadarmo? Není v tom nějaký háček?</h4>
                    <p>
                        Na začátku sice zaplatíš zálohu 3000 Kč. Tu ti ale vrátíme, pokud to s námi vydržíš až do konce. Obecně tolerujeme jednu absenci, ale vše je o domluvě.
                    </p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#sign-up" class="btn btn-outline btn-outline-dark btn-lg page-scroll">Jdu do toho</a>
                </div>
            </div>
        </div>
    </section>

    <?php require 'footer.php'; ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
