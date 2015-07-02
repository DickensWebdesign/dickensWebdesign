<?php
    session_start();
    $errors = '';
    $success = '';
    $_SESSION['mail'] = "";
    $_SESSION['nachricht'] = "";
    if (isset($_POST['anfrage'])) {
        if(empty($_POST['mail']) || empty($_POST['message'])) {
            $errors = "\n Fehler: Es müssen alle Felder ausgefüllt werden!";
        }
        $email_address = $_POST['mail'];
        $message = htmlspecialchars($_POST['message']);
        if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address)) {
            $errors .= "\n Fehler: Ungültige Mailadresse";
        }
        if(empty($errors)) {
            $to = "info@dickens-webdesign.de";
            $email_subject = "Neue Anfrage: $email_address";
            $email_body = "You have received a new message\n\n";
            $email_body .= " Here are the details:\n\n  Email: $email_address \n Message: \n $message";
            $headers = 'To: <info@dickens-webdesign.de>' . "\r\n";
            $headers .= 'From:' .$email_address;
	        mail($to,$email_subject,$email_body,$headers);
	        $success = true;
        }
    }
?>
<!DOCTYPE HTML>
<html lang="de">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Treten Sie mit Dickens Webdesign in Kontakt um ein kostenloses Angebot anzufordern oder sich beraten zu lassen. Telefonisch oder per Kontaktformular." />
<meta name="keywords" lang="de" content="kontakt, impressum, haftungsausschluss, kotaktformular, dickens, webdesign, copyright, mail, email, telefon, fon, karte, öffnungszeiten, anschrift, kontaktwege " />
<meta name="author" content="Dickens Webdesign" />
<meta name="robots" content="index,follow" />
<meta name="revisit-after" content="7 days" />
<meta name="geo.placename" content="Pinneberg" />
<meta name="geo.region" content="DE-SH" />
<title>Dickens Webdesign | Kontaktinformationen und Kontaktformular </title>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Signika:300' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="layout/layout.css" />
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css">
<link rel="canonical" href="http://www.dickens-webdesign.de/" />
</head>
<body>
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-P5NHMN" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P5NHMN');
</script>
<div class="hiddenMenuBar">
    <div class="hiddenMenuBarContainer">
        <div id="hiddenMenu">
            <ul>
                <li><a href="http://www.dickens-webdesign.de">Agentur</a></li>
                <li><a href="leistungen">Leistungen</a></li>
                <li><a href="projekte">Projekte</a></li>
                <li><a href="preise">Preise</a></li>
                <li><span class="activeMenu">Kontakt</span></li>
            </ul>
        </div>
    </div>
</div>
<!-- Container 1 -> Header -->
<div class="fullWidthContainerHeader">
    <div class="innerContainer">
        <header>
            <div class="headerContent">
                <div class="logoBg">
                    <div class="logoBgInner">
                        <a href="http://www.dickens-webdesign.de" title="Dickens Webdesign Startseite"><img id="logo" src="img/logo/logo.png" alt="Dickens Webdesign aus Pinneberg. Design &amp; Programmierung von Webseiten und Apps." /></a>
                    </div>
                    <div class="logoBgAttach">
                        <div class="logoBgAttachInner"></div>
                    </div>
                </div>
                <div class="menuBg">
                    <div class="menuBgAttach"></div>
                </div>
                <nav>
                    <div id="menu">
                        <img src="img/general/menArrow.png" alt="" class="activeArrow5" />
                        <ul>
                            <li><a href="http://www.dickens-webdesign.de">Agentur</a></li>
                            <li><a href="leistungen">Leistungen</a></li>
                            <li><a href="projekte">Projekte</a></li>
                            <li><a href="preise">Preise</a></li>
                            <li><span class="activeMenu">Kontakt</span></li>
                        </ul>
                    </div>
                </nav>
                <div class="networkLinkContainer">
                    <a class="facebookLink" href="https://www.facebook.com/DickensWebdesign" title="Like us on facebook" target="_blank"></a>
                    <a class="googlePlusLink" href="https://plus.google.com/u/0/b/115569366956502250130/+DickensWebdesignPinneberg/posts" title="Follow us on Google+" target="_blank"></a>
                    <a class="twitterLink" href="https://twitter.com/Webdesigner_HH" title="Follow us on twitter" target="_blank"></a>
                </div>
            </div>
        </header>
    </div>
</div>
<!-- Container 2 -> Kontakt -->
<div class="fullWidthContainerContent">
    <div class="innerContainer">
        <div class="contentHeader">
            <div class="contentHeaderBg">
                <a id="kontakt"></a>
                <h1>Kontakt</h1>
            </div>
            <div class="contentHeaderBgAttach"></div>
        </div>
        <div class="spacer"></div>
        <div class="content100">
            <div class="content55">
                <div class="infoContainer">
                    <p class="infoContainerHeader">Kontaktformular</p>
                    <div class="infoContainerHeaderAttachWrapper">
                        <div class="infoContainerHeaderAttach"></div>
                    </div>
                    <form name="contactform" method="post" action="kontakt.php">
                        <div class="infoContent">
                            <p>Mail:</p>
                            <input type="text" name="mail" id="mail" placeholder="example@muster.com" tabindex="1" value="<?php echo $_SESSION['mail']; ?>"/>
                            <p>Nachricht:</p>
                            <textarea maxlength="2000" name="message" id="message" rows="12" cols="1" tabindex="2"><?php echo $_SESSION['nachricht']; ?></textarea>
                            <p id="counter">Verbleibende Zeichen: 2000</p>
                        </div>
                        <div class="infoContainerFooter">
                            <p><input type="submit" name="anfrage" value="ABSENDEN" /></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="content45">
                <div class="contentCentered">
                    <p class="grayHead">Öffnungszeiten:</p>
                    <p>Montag - Freitag: 9:00 Uhr - 18:00 Uhr</p>
                    <p class="grayHead">Anschrift:</p>
                    <p>Jägerkamp 9<br />25421 Pinneberg<br />Deutschland</p>
                    <p class="grayHead">Kontaktwege:</p>
                    <p>Telefon: 04101/407777<br />Mobil: 0176/27065169<br />Mail: info@dickens-webdesign.de</p>
                    <p>Karte:</p>
                    <iframe class="framemap" src='http://a.tiles.mapbox.com/v3/dickenswebdesign.hf4oaiko/attribution,zoompan,zoomwheel,geocoder,share.html'></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container 2 -> Impressum -->
<div class="fullWidthContainerContentBlack">
    <div class="innerContainer">
        <div class="contentHeader">
            <div class="contentHeaderBg">
                <a id="impressum"></a>
                <h2>Impressum</h2>
            </div>
            <div class="contentHeaderBgAttach"></div>
        </div>
        <div class="spacer"></div>
        <div class="content55">
            <p class="grayHead">Dickens-webdesign.de ist ein Projekt von:</p>
            <p>Jan Ehlbeck<br />Shaghayegh Bayat</p>
            <p class="grayHead">Inhaltlich Verantwortlicher gemäß § 55 Abs. 2 RStV:</p>
            <p>Jan Ehlbeck</p>
            <p class="grayHead">Mail:</p>
            <p>jan.ehlbeck@dickens-webdesign.de</p>
            <p class="grayHead">Telefon:</p>
            <p>04101/407777</p>
            <p class="grayHead">Zuständiges Amtsgericht:</p>
            <p>Amtsgericht Pinneberg</p>
            <p class="grayHead">Steuernummer:</p>
            <p>31/017/03854</p>
        </div>
        <div class="content45">
            <p class="grayHead">Copyright</p>
            <p>Struktur und Inhalt der Website der Agentur Dickens sind urheberrechtlich geschützt.</p>
            <p>Die Vervielfältigung von Informationen oder Daten, insbesondere die Verwendung von Texten, Textteilen oder Bildmaterial bedarf der vorherigen Zustimmung der Agentur Dickens.</p>
            <p>© Dickens Webdesign. Alle Rechte vorbehalten.</p>
        </div>
    </div>
</div>
<!-- Container 3 -> Haftungsausschluss -->
<div class="fullWidthContainerContent">
    <div class="innerContainer">
        <div class="contentHeader">
            <div class="contentHeaderBg">
                <a id="Haftungsausschluss"></a>
                <h2>Haftungsausschluss</h2>
            </div>
            <div class="contentHeaderBgAttach"></div>
        </div>
        <div class="spacer"></div>
        <div class="content100">
            <div id="Accordion1" class="Accordion" tabindex="0">
                <div class="AccordionPanel">
                    <div class="AccordionPanelTab">Inhalt des Online-Angebots</div>
                    <div class="AccordionPanelContent"><p>Dickens Webdesign ist stets bemüht, qualitativ hochwertige Informationen zur Verfügung zu stellen. Dennoch übernehmen wir keinerlei Gewähr für die Aktualität, Korrektheit, Vollständigkeit, Qualität oder Verfügbarkeit der bereitgestellten Informationen. Haftungsansprüche gegen die Betreiber der Website, die sich auf Schäden materieller oder ideeller Art beziehen, welche durch die Nutzung oder Nichtnutzung der dargebotenen Informationen bzw. durch die Nutzung fehlerhafter und unvollständiger Informationen verursacht wurden sind grundsätzlich ausgeschlossen, sofern seitens der Betreiber kein nachweislich vorsätzliches oder grob fahrlässiges Verschulden vorliegt. Alle Angebote sind freibleibend und unverbindlich.Wir behalten es uns ausdrücklich vor, Teile der Seiten oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern, zu ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig einzustellen.Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p><p>Dickens Webdesign ist stets bemüht, qualitativ hochwertige Informationen zur Verfügung zu stellen. Dennoch übernehmen wir keinerlei Gewähr für die Aktualität, Korrektheit, Vollständigkeit, Qualität oder Verfügbarkeit der bereitgestellten Informationen. Haftungsansprüche gegen die Betreiber der Website, die sich auf Schäden materieller oder ideeller Art beziehen, welche durch die Nutzung oder Nichtnutzung der dargebotenen Informationen bzw. durch die Nutzung fehlerhafter und unvollständiger Informationen verursacht wurden sind grundsätzlich ausgeschlossen, sofern seitens der Betreiber kein nachweislich vorsätzliches oder grob fahrlässiges Verschulden vorliegt. Alle Angebote sind freibleibend und unverbindlich.Wir behalten es uns ausdrücklich vor, Teile der Seiten oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern, zu ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig einzustellen.Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p></div>
                </div>
                <div class="AccordionPanel">
                    <div class="AccordionPanelTab">Verweise und Links</div>
                    <div class="AccordionPanelContent"><p>Sofern auf Verweisziele direkt oder indirekt durch Links verwiesen wird, die außerhalb des Verantwortungsbereichs der Betreiber liegen, haftet dieser nur dann, wenn er von den Inhalten Kenntnis hatte und es technisch möglich und zumutbar wäre, die Nutzung im Falle rechtswidriger Inhalte zu verhindern. Wir erklären hiermit ausdrücklich, dass zum Zeitpunkt der Linksetzung keine illegalen Inhalte auf den zu verlinkenden Seiten erkennbar waren. Auf die aktuelle und zukünftige Gestaltung, die Inhalte oder die Urheberschaft der verlinkten/verknüpften Seiten hat der Autor keinerlei Einfluss.Für darüber hinausgehende Inhalte und insbesondere für Schäden, die aus der Nutzung oder Nichtnutzung solcherart dargebotener Informationen entstehen, haftet allein der Anbieter dieser Seiten, nicht derjenige, der über Links auf die jeweilige Veröffentlichung verweist. Diese Einschränkung gilt gleichermaßen auch für Fremdeinträge in Gästebüchern und Foren. Wir verwenden Links nur, um unseren Besuchern die Möglichkeit zu geben, sich weitere Informationen zu beschaffen. Ein Link bedeutet jedoch nicht, dass wir die entsprechenden fremden Seiten empfehlen oder dass wir uns die Inhalte zu eigen machen.</p></div>
                </div>
                <div class="AccordionPanel">
                    <div class="AccordionPanelTab">Nutzung von GoogleAnalytics und sozialen Netzwerken</div>
                    <div class="AccordionPanelContent"><p>Datenschutzerklärung für die Nutzung von Facebook-Plugins (Like-Button)Auf unseren Seiten sind Plugins des sozialen Netzwerks Facebook, 1601 South California Avenue, Palo Alto, CA 94304, USA integriert. Die Facebook-Plugins erkennen Sie an dem Facebook-Logo oder dem "Like-Button" ("Gefällt mir") auf unserer Seite. Eine Übersicht über die Facebook-Plugins finden Sie hier: http://developers.facebook.com/docs/plugins/. Wenn Sie unsere Seiten besuchen, wird über das Plugin eine direkte Verbindung zwischen Ihrem Browser und dem Facebook-Server hergestellt. Facebook erhält dadurch die Information, dass Sie mit Ihrer IP-Adresse unsere Seite besucht haben. Wenn Sie den Facebook "Like-Button" anklicken während Sie in Ihrem Facebook-Account eingeloggt sind, können Sie die Inhalte unserer Seiten auf Ihrem Facebook-Profil verlinken. Dadurch kann Facebook den Besuch unserer Seiten Ihrem Benutzerkonto zuordnen. Wir weisen darauf hin, dass wir als Anbieter der Seiten keine Kenntnis vom Inhalt der übermittelten Daten sowie deren Nutzung durch Facebook erhalten. Weitere Informationen hierzu finden Sie in der Datenschutzerklärung von facebook unter http://de-de.facebook.com/policy.php Wenn Sie nicht wünschen, dass Facebook den Besuch unserer Seiten Ihrem Facebook-Nutzerkonto zuordnen kann, loggen Sie sich bitte aus Ihrem Facebook-Benutzerkonto aus.</p><p>Datenschutzerklärung für die Nutzung von Google AnalyticsDiese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. ("Google"). Google Analytics verwendet sog. "Cookies", Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert. Im Falle der Aktivierung der IP-Anonymisierung auf dieser Webseite wird Ihre IP-Adresse von Google jedoch innerhalb von Mitgliedstaaten der Europäischen Union oder in anderen Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum zuvor gekürzt. Nur in Ausnahmefällen wird die volle IP-Adresse an einen Server von Google in den USA übertragen und dort gekürzt. Im Auftrag des Betreibers dieser Website wird Google diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegenüber dem Websitebetreiber zu erbringen. Die im Rahmen von Google Analytics von Ihrem Browser übermittelte IP-Adresse wird nicht mit anderen Daten von Google zusammengeführt. Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich werden nutzen können. Sie können darüber hinaus die Erfassung der durch das Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem sie das unter dem folgenden Link verfügbare Browser-Plugin herunterladen und installieren: http://tools.google.com/dlpage/gaoptout?hl=de.</p><p>Datenschutzerklärung für die Nutzung von TwitterAuf unseren Seiten sind Funktionen des Dienstes Twitter eingebunden. Diese Funktionen werden angeboten durch die Twitter Inc., Twitter, Inc. 1355 Market St, Suite 900, San Francisco, CA 94103, USA. Durch das Benutzen von Twitter und der Funktion "Re-Tweet" werden die von Ihnen besuchten Webseiten mit Ihrem Twitter-Account verknüpft und anderen Nutzern bekannt gegeben. Dabei werden auch Daten an Twitter übertragen. Wir weisen darauf hin, dass wir als Anbieter der Seiten keine Kenntnis vom Inhalt der übermittelten Daten sowie deren Nutzung durch Twitter erhalten. Weitere Informationen hierzu finden Sie in der Datenschutzerklärung von Twitter unter http://twitter.com/privacy. Ihre Datenschutzeinstellungen bei Twitter können Sie in den Konto-Einstellungen unter http://twitter.com/account/settings ändern.</p></div>
                </div>
                <div class="AccordionPanel">
                    <div class="AccordionPanelTab">Rechtswirksamkeit des Haftungsausschlusses</div>
                    <div class="AccordionPanelContent"><p>Dieser Haftungsausschluss ist Teil unseres Internetangebots, von dem auf diesen verwiesen wurde. Falls Teile oder Formulierungen des Texts nicht, nicht mehr oder nicht vollständig der geltenden Rechtslage entsprechen sollten, bleiben die übrigen Teile des Dokumentes in ihrem Inhalt und ihrer Gültigkeit davon unberührt.</p></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container 4 -> Footer -->
<!-- Container 5 -> Footer -->
<div class="fullWidthContainerFooter">
    <div class="innerContainer">
        <div class="contentFooter">
            <div class="footerBox">
                <div class="footerHeader">
                    <p>Dickens</p>
                </div>
                <ul>
                    <li><a href="http://www.dickens-webdesign.de">Agentur</a> </li>
                    <li><a href="leistungen">Leistungen</a></li>
                    <li><a href="projekte">Projekte</a></li>
                    <li><a href="preise">Preise</a></li>
                    <li><a href="kontakt">Kontakt</a></li>
                </ul>
            </div>
            <div class="footerBox">
                <div class="footerHeader">
                    <p>Wissen</p>
                </div>
                <ul>
                    <li><a href="leistungen#cms">CMS</a></li>
                    <li><a href="leistungen#ecommerce">E-Commerce</a></li>
                    <li><a href="leistungen#seo">SEO</a></li>
                    <li><a href="leistungen#marketing">Marketing</a></li>
                </ul>
            </div>
            <div class="footerBox">
                <div class="footerHeader">
                    <p>Netzwerke</p>
                </div>
                <ul>
                    <li><a href="https://www.facebook.com/DickensWebdesign" title="like us on facebook" target="_blank">Facebook</a></li>
                    <li><a href="https://plus.google.com/u/0/b/115569366956502250130/+DickensWebdesignPinneberg/posts" title="Follow us on Google+" target="_blank">Google +</a></li>
                    <li><a href="https://twitter.com/Webdesigner_HH" title="follow us on twitter" target="_blank">Twitter</a></li>
                </ul>
            </div>
            <div class="footerBox">
                <div class="footerHeader">
                    <p>Kontakt</p>
                </div>
                <span class="telImg"></span><span>04101/407777</span><br />
                <span class="mailImg"></span><span>info@dickens-webdesign.de</span>
            </div>
            <div class="footerEnd">
                <p>Copyright 2010 - 2014
                    <a href="http://www.dickens-webdesign.de">Dickens Webdesign</a>
                    <a class="right" href="kontakt#impressum">Impressum</a>
                </p>
            </div>
        </div>
    </div>
    <?php
    if ($errors != '') {
        echo '<div class="messages"><p class="red">Bei der Übermittlung Ihrer Nachricht ist ein Fehler aufgetreten!<br />Bitte probieren Sie es erneut.</p></div>';
    }
    if ($success != '') {
        echo '<div class="messages"><p class="green">Danke für Ihre Nachricht!<br />Ihre Nachricht wurde erfolgreich an uns gesendet.</p></div>';
    }
    ?>
</div>
<!-- last loaded -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/gen_validatorv4.js" ></script>
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<script type="text/javascript">
    $(".messages").animate({bottom: "0px"}, 500).css({width: "100%", position: "fixed"}).delay(5000).css({width: "100%", position: "fixed"}).animate({bottom: "-300px"}, 500)
    var frmvalidator = new Validator("contactform");
    frmvalidator.addValidation("mail","maxlen=50");
    frmvalidator.addValidation("mail","req", "Bitte geben Sie eine gültige Mailadresse ein.");
    frmvalidator.addValidation("message","maxlen=2000");
    frmvalidator.addValidation("message","req");
    frmvalidator.addValidation("message","message", "Bitte geben Sie eine Nachricht ein.");
    $("#message").keyup(
    function() {
         var message = $('#message').val().length;
         if (message == 0) {
             maxchara = 2000
         } else {
            maxchara = 2000 - message
         }
        $('#counter').text('Verbleibende Zeichen:' + maxchara)
     });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 238) {
            $('.hiddenMenuBar ').fadeIn();
        } else {
            $('.hiddenMenuBar').fadeOut();
        }
    });
    var Accordion1 = new Spry.Widget.Accordion("Accordion1");
    var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-33656348-1']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();
</script>
</body>
</html>