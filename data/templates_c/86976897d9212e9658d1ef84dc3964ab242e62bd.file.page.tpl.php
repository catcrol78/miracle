<?php /* Smarty version Smarty-3.1.13, created on 2019-11-16 22:30:49
         compiled from "/home/srv31090/htdocs/test/data/templates/standard/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1596136805dc7ee1a3fcbd1-43966560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86976897d9212e9658d1ef84dc3964ab242e62bd' => 
    array (
      0 => '/home/srv31090/htdocs/test/data/templates/standard/page.tpl',
      1 => 1573921843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1596136805dc7ee1a3fcbd1-43966560',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5dc7ee1a46abc2_04227476',
  'variables' => 
  array (
    'title' => 0,
    'description' => 0,
    'keywords' => 0,
    'slides' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc7ee1a46abc2_04227476')) {function content_5dc7ee1a46abc2_04227476($_smarty_tpl) {?><!DOCTYPE html> <?php  $_config = new Smarty_Internal_Config("default.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<html>

<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('mediaUrl');?>
/themes/general.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('mediaUrl');?>
/controls/todo.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="google-site-verification" content="Pd2dkYAv7OfqkxIGDgw9oLrxR4b77W0zmZsg6XdO6h0" />
    <meta name='yandex-verification' content='7b8f1002ba99de4e' />
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-39729429-1']);
        _gaq.push(['_setDomainName', 'float-camera.ru']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
        onload = function() {
            for (var lnk = document.links, j = 0; j < lnk.length; j++)
                if (lnk[j].href == document.URL)
                    if (lnk[j].class == "activ") lnk[j].style.color = 'red';
        }

    </script>

    <link href="todo/general.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        todo.onload(function() {
            todo.gallery('gallery');
        });

    </script>
    <script src="swfobject.js" type="text/javascript"></script>

    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <script type="text/javascript" src="/callme/js/callme.js"></script>
    
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '685120841952119');
        fbq('track', 'PageView');

    </script>
    <noscript>
<img height="1" width="1" src="https://www.facebook.com/tr?id=685120841952119&ev=PageView&noscript=1"/>
</noscript>
    <!-- End Facebook Pixel Code -->
    

    <meta name="google-translate-customization" content="bdcc9576ae1aef45-8b01dd303c44425a-g4d412b7f28dea256-14"></meta>

</head>

<body class="new_designe"> 
    <header>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-4 col-12 text-center text-md-left">
                    <p class="logo-text">Флоат-камеры</p>
                </div>
                <div class="col-md-6 col-lg-4 col-12"><a href="http://float-camera.ru/"><img src="http://float-camera.ru/media/images/logo.png" alt="Сертификат флоат-камера MIRACLE"></a></div>
                <div class="col-lg-4 col-12">
                    <p class="logo-phone text-center">
                        <span>Звонки по России
               бесплатны</span><br/>
                        <small>круглосуточно</small><br/>
                        <a href="tel:88003334870">8-800-333-48-70</a>
                    </p>
                </div>
            </div>
        </div>
<div class="container-menu">
        <div class="container ">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse  align-items-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav ">
                        <?php echo $_smarty_tpl->getSubTemplate ("standard/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    </div>
                </div>
            </nav>
        </div>
</div>
    </header>


    <!--
        <div id="main-menu">
            
        </div>
-->
    <div class="container mb-4">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-12 order-lg-2">
                <div id="right">
                    <?php if (!empty($_smarty_tpl->tpl_vars['slides']->value)){?> <?php echo $_smarty_tpl->getSubTemplate ("standard/slideshow.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }?>
                    <div id="page-body">
                        <?php echo $_smarty_tpl->tpl_vars['body']->value;?>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-12 order-lg-1">
                <aside>
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                          
                            <div id="menu" class="menu-frame">

                                <ul class="menu">
                                    <li><a href="http://float-camera.ru/pages/stati36.html">Как выбрать флоат-камеру?</a></li>
                                    <li><a href="http://float-camera.ru/pages/istoria.html">О нас</a></li>
                                    <li><a href="http://float-camera.ru/pages/novosti.html">Новости</a></li>
                                    <li><a href="http://float-camera.ru/pages/complect.html">Комплектация камеры</a></li>



                                    <li><a href="http://float-camera.ru/pages/spec.html">Аренда</a></li>
                                    <li><a href="http://float-camera.ru/pages/gde posetit.html">Где посетить</a></li>
                                    <li><a href="http://float-camera.ru/pages/filtr.html">Фильтрация</a></li>

                                    <li><a href="http://float-camera.ru/pages/rassroshka.html">Рассрочка</a></li>

                                    <li><a href="http://float-camera.ru/pages/gvozdi.html">Доски Садху</a></li>
                                    <li><a href="http://float-camera.ru/pages/stati6.html">Исследования флоатинга</a>
                                        <ul>
                                            <li><a href="http://float-camera.ru/pages/stati11.html">спорт</a></li>
                                            <li><a href="http://float-camera.ru/pages/stati13.html">беременность и бесплодие</a></li>
                                            <li><a href="http://float-camera.ru/pages/stati17.html">заболевания</a></li>
                                            <li><a href="http://float-camera.ru/pages/stati18.html">исследования</a></li>
                                            <li><a href="http://float-camera.ru/pages/stati15.html">фибромиалгия</a></li>
                                            <li><a href="http://float-camera.ru/pages/stati16.html">эндорфины</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="http://float-camera.ru/pages/poleznoe.html">Полезное</a></li>
                                    <li><a href="http://float-camera.ru/pages/otzyv.html">Отзывы наших заказчиков</a></li>
                                    <li><a href="http://float-camera.ru/pages/sol.html">Соль Эпсома</a></li>
                                    <li><a href="http://float-camera.ru/pages/kalkulator.html">Рассчитать стоимость</a></li>
                                    <li><a href="http://float-camera.ru/pages/contact.html">Связаться с нами</a></li>
                                </ul>
                            </div>
                              
                            <div id="google_translate_element"></div>
                            <script type="text/javascript">
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({
                                        pageLanguage: 'ru',
                                        layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                                        gaTrack: true,
                                        gaId: 'UA-39729429-1'
                                    }, 'google_translate_element');
                                }

                            </script>
                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                            

                            <div id="reclama" class="phone-aside">
                               
                               <h3>Звоните сейчас</h3>
                               <h5>Наши телефоны:</h5>
                               <ul class="list-unstyled">
                                   <li><a href="tel:88003334870">8-800-333-48-70</a></li>
                                   <li><a href="tel:89272528367">8-927-252-83-67</a><a class="" href="viber://add?number=89272528367"  title="Должен быть установлен Viber для ПК"><img src="http://float-camera.ru/media/images/viber.png" alt=""></a><a href="https://wa.me/+89272528367" title="WhatsApp"><img src="http://float-camera.ru/media/images/whatsapp.png" alt=""></a></li>
                                   
                                   
                                   <li><a href="tel:89272535151">8-927-253-51-51</a><a href="viber://add?number=89272535151"  title="Должен быть установлен Viber для ПК"><img src="http://float-camera.ru/media/images/viber.png" alt=""></a><a href="https://wa.me/+89272535151" title="WhatsApp"><img src="http://float-camera.ru/media/images/whatsapp.png" alt=""></a></li> 
                               </ul>
<!--                                <a href="http://float-camera.ru/pages/main.html"><img src="http://float-camera.ru/media/images/float2.gif" alt="Продаем флоат-камеру"></a>-->

                            </div>
                            
                            <!--<a href="http://float-camera.ru/pages/fransh.html"><img src="http://float-camera.ru/media/images/float28.gif" alt="Франшиза"></a>-->
                             <iframe src="https://averin.pro/widget.php?l=float_camera_miracle&style=1&width=270&gallery=1&s=80&icc=3&icr=3&t=1&tt=Мы в Инстаграм&h=1&ttcolor=027dc0&th=e2f6ff&bw=f9f9f9&bscolor=FFFFFF&bs=FF0000&ts=Подписаться" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:100%;min-height: 420px;" ></iframe>
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                          
                            <a href="http://float-camera.ru/pages/tovary.html"><img src="http://float-camera.ru/media/images/4-41.jpg"  alt="Продаем флоат-камеру"></a>
                            <a href="http://float-camera.ru/pages/tovary.html"><img src="http://float-camera.ru/media/images/6-61.jpg"  alt="Продаем флоат-камеру"></a>

                            <div id="menu2" class="menu-frame">
                                <ul class="menu">
                                    <li><a href="http://float-camera.ru/pages/stati23.html">3 мифа о сне</a></li>
                                    <li><a href="http://float-camera.ru/pages/stati22.html">Флоатинг при сколиозе</a></li>
                                    <li><a href="http://float-camera.ru/pages/stati19.html">Флоатинг и похудение</a></li>
                                    <li><a href="http://float-camera.ru/pages/stati15.html">Флоатинг и фибромиалгия</a></li>
                                    <li><a href="http://float-camera.ru/pages/stati14.html">Флоатинг и боли</a></li>
                                    <li><a href="http://float-camera.ru/pages/stati13.html">Флоатинг при бесплодии</a></li>

                                    <li><a href="http://float-camera.ru/pages/stati12.html">Флоатинг и вредные привычки</a></li>

                                    <li><a href="http://float-camera.ru/pages/stati24.html">Профилактика рака</a></li>
                                    <li><a href="http://float-camera.ru/pages/stati18.html">Результаты исследований</a></li>
                                    <li><a href="http://float-camera.ru/pages/stati5.html">Отзывы о флоатинге</a></li>
                                </ul>
                            </div>
                            <div>
                                
                            </div>
                        </div>
                    </div>



                </aside>

            </div>
        </div>
    </div> 

        <footer>
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 col-lg-5 text-md-left text-center mb-3">&copy; MIRACLE Производство и продажа флоат-камер. 2013-<span id="year">2018</span>г.</div>
                    <div class="col-md-3 text-lg-left text-center mb-3">
                        <script type="text/javascript">
                            new Date().getFullYear()
                        </script>
                        <script>
                            document.getElementById("year").innerHTML = new Date().getFullYear();
                        </script>
                        <script type="text/javascript">
                            (function() {
                                if (window.pluso)
                                    if (typeof window.pluso.start == "function") return;
                                var d = document,
                                    s = d.createElement('script'),
                                    g = 'getElementsByTagName';
                                s.type = 'text/javascript';
                                s.charset = 'UTF-8';
                                s.async = true;
                                s.src = ('https:' == window.location.protocol ? 'https' : 'http') + '://share.pluso.ru/pluso-like.js';
                                var h = d[g]('head')[0] || d[g]('body')[0];
                                h.appendChild(s);
                            })();

                        </script>
                        <div class="pluso" data-options="small,round,line,horizontal,nocounter,theme=08" data-services="vkontakte,odnoklassniki,facebook,twitter,moimir" data-background="transparent"></div>
                    </div>
                    <div class="col-md-auto text-md-right text-center">

                        <!-- Yandex.Metrika informer -->
                        <a href="http://metrika.yandex.ru/stat/?id=23937157&amp;from=informer" target="_blank" rel="nofollow" style="margin-left:12px;">
                        
                                    <img src="//bs.yandex.ru/informer/23937157/3_1_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" 
                                        title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:23937157,lang:'ru'});return false}catch(e){}"/>
                        
                                </a>
                        <!-- /Yandex.Metrika informer -->
                        
                        <!-- begin of Top100 code -->

                        <script id="top100Counter" type="text/javascript" src="http://counter.rambler.ru/top100.jcn?2996273"></script>
                        <noscript>
                            <a href="http://top100.rambler.ru/navi/2996273/">
                                <img src="http://counter.rambler.ru/top100.cnt?2996273" alt="Rambler's Top100" border="0" />
                            </a>

                            </noscript>
                        <!-- end of Top100 code -->
                        
                    </div>
                </div>
            </div>
        </footer>


        
        <!-- BEGIN JIVOSITE CODE -->
        <script type='text/javascript'>
            (function() {
                var widget_id = '100496';
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = '//code.jivosite.com/script/widget/' + widget_id;
                var ss = document.getElementsByTagName('script')[0];
                ss.parentNode.insertBefore(s, ss);
            })();

        </script>
        <!-- END JIVOSITE CODE -->

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function(d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter23937157 = new Ya.Metrika({
                            id: 23937157,
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true
                        });
                    } catch (e) {}
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function() {
                        n.parentNode.insertBefore(s, n);
                    };
                s.type = "text/javascript";
                s.async = true;
                s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }
            })(document, window, "yandex_metrika_callbacks");

        </script>
        <noscript><div><img src="//mc.yandex.ru/watch/23937157" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->

        




</body>

</html>
<?php }} ?>