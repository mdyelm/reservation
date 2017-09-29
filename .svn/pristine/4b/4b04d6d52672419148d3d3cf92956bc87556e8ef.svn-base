<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$user = $this->Session->read('user');
$corpmemberSS = $this->Session->read('corpmember');
$cakeDescription = __d('cake_dev', '（bellFace）');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $this->fetch('title'); ?><?php echo $cakeDescription ?> 
        </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <!-- ogp setting -->
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
        <!-- Latest compiled and minified CSS -->
        <!-- <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/lity/1.6.6/lity.css' />   -->
        <!-- Optional theme -->
        <!-- Latest compiled and minified JavaScript -->
        <!-- <script src='//cdnjs.cloudflare.com/ajax/libs/lity/1.6.6/lity.js'></script>
        <script src="//apis.google.com/js/platform.js?onload=onLoad"></script> -->
        <?php
        // echo $this->Html->meta ( 'favicon-32x32.png', 'fav/favicon-32x32.png', array (
        // 						    'type' => 'icon' 
        // 						) );
        echo $this->Html->css(['common', 'contact', 'validationEngine.jquery']);
        echo $this->Html->script(['jquery-1.11.0.min', 'jquery-1.11.0.min', 'jquery.validate.min', 'jquery.nicescroll.min', 'script', 'jquery.validationEngine', 'jquery.validationEngine-ja']);
        //echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-TT3Q7K');</script>
        <!-- End Google Tag Manager -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <![endif]-->
        <!--[if IE 9]>
        <?php echo $this->Html->css(['ie9']); ?>
        <![endif]-->
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TT3Q7K"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <section class="contactForm">
            <h1 class="logo"><a href="/" class="hoverJS"><img src="https://cdn.bell-face.com/assets/www/imgs/common/logo_bl.png" alt="bellFace" width="200px"></a></h1>

            <?php echo $this->Flash->render(); ?>
            <?php echo $this->fetch('content'); ?>
            <div class="copyright">Copyright bellFace inc.</div>
        </section>

    </body>
</html>
