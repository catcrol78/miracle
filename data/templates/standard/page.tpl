<!--
 * Redactor: Nikita Kroll
 * Edited: 19.12.2023 00:34
-->
<!DOCTYPE html> {config_load file="default.conf"}
<html lang="en">
<head>
    <title>{$title}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{$description}">
    <meta name="keywords" content="{$keywords}">
    <link rel="stylesheet" type="text/css" href="../../../media/themes/general.css">
    <link rel="stylesheet" type="text/css" href="../../../media/themes/styleSheets/formStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="../../../media/controls/todo.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
{*    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>*}
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
        ga.src = ('https:' === document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
    onload = function() {
        for (var lnk = document.links, j = 0; j < lnk.length; j++)
            if (lnk[j].href === document.URL)
                if (lnk[j].className === "activ") lnk[j].style.color = 'red';
    }

</script>

    <link href="../../../media/themes/general.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        todo.onload(function() {
            todo.gallery('gallery');
        });

    </script>
    <script src="../../../media/controls/swfobject.js" type="text/javascript"></script>

    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    {*    <script type="text/javascript" src="../../../callme/js/callme.js"></script>*}
    {*    {literal}*}
    {*    <!-- Facebook Pixel Code -->*}
    {*    <script>*}
    {*        ! function(f, b, e, v, n, t, s) {*}
    {*            if (f.fbq) return;*}
    {*            n = f.fbq = function() {*}
    {*                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)*}
    {*            };*}
    {*            if (!f._fbq) f._fbq = n;*}
    {*            n.push = n;*}
    {*            n.loaded = !0;*}
    {*            n.version = '2.0';*}
    {*            n.queue = [];*}
    {*            t = b.createElement(e);*}
    {*            t.async = !0;*}
    {*            t.src = v;*}
    {*            s = b.getElementsByTagName(e)[0];*}
    {*            s.parentNode.insertBefore(t, s)*}
    {*        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');*}
    {*        fbq('init', '685120841952119');*}
    {*        fbq('track', 'PageView');*}

    {*    </script>*}
    {*    <noscript>*}
    {*<img height="1" width="1" src="https://www.facebook.com/tr?id=685120841952119&ev=PageView&noscript=1"/>*}
    {*</noscript>*}
    {*    <!-- End Facebook Pixel Code -->*}
    {*    {/literal}*}

    <meta name="google-translate-customization" content="bdcc9576ae1aef45-8b01dd303c44425a-g4d412b7f28dea256-14"/>



</head>

<body class="new_designe" id="body">
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    function mm(m,e,t,r,i,k,a) {
        m[i]=m[i] || function() {
            (m[i].a=m[i].a||[]).push(arguments)
        };

        m[i].l=1*new Date();
        for (let j = 0; j < document.scripts.length; j++) {
            if (document.scripts[j].src === r) {
                return;
            }
        }
        k=e.createElement(t);
        a=e.getElementsByTagName(t)[0];
        k.async=1;
        k.src=r;
        a.parentNode.insertBefore(k,a);
    }
    mm(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(98871717, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
    })
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/98871717" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<header>
    <div class="container" id="Float-preview">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 col-lg-4 col-12 text-center text-md-left">
                <p class="logo-text">Флоат-камеры</p>
            </div>
            <div class="col-md-6 col-lg-4 col-12"><img src="https://float-camera.ru/media/images/logo.png" alt="Сертификат флоат-камера MIRACLE"></div>
           
		   <div class="col-lg-4 col-12">
                <p class="logo-phone text-center">
                    <span>Круглосуточно</span><br/>
                    <a href="tel:89272528367">8-927-252-83-67</a>
                </p>
            </div>
        </div>
    </div>
    <div class="container-menu p-1" id="fixed-nav-bar" >
        <!--Для смарт-->
        <div class="container d-lg-none p-1">
            <div class="collapse" id="navbarNavAltMarkup">
                <div class="bg-light p-4 d-flex justify-content-center">
                    <div class="navbar-nav" style="text-align: center;ju">
                        <div class="navbar-nav p-1">
                            <button type="button" class="btn btn-outline-primary" style="border: 0">
                                <a style="font-size: 12px" class="nav-link" aria-current="page" href="https://float-camera.ru/pages/main.html">Главная</a>
                            </button>
                        </div>
                        <div class="navbar-nav p-1">
                            <button type="button" class="btn btn-outline-primary" style="border: 0">
                                <a style="font-size: 12px" class="nav-link" aria-current="page" href="https://float-camera.ru/pages/tovary.html">Наши работы</a>
                            </button>
                        </div>
                        <div class="navbar-nav p-1">
                            <button type="button" class="btn btn-outline-primary" style="border: 0">
                                <a style="font-size: 12px" class="nav-link" aria-current="page" href="https://float-camera.ru/pages/stati.html">Статьи</a>
                            </button>
                        </div>
                        <div class="navbar-nav p-1">
                            <button type="button" class="btn btn-outline-primary" style="border: 0">
                                <a style="font-size: 12px" class="nav-link" aria-current="page" href="https://float-camera.ru/pages/dokument.html">Документация</a>
                            </button>
                        </div>
                        <div class="navbar-nav p-1">
                            <button type="button" class="btn btn-outline-primary" style="border: 0">
                                <a style="font-size: 12px" class="nav-link" aria-current="page" href="https://float-camera.ru/pages/rezume.html">Для вопросов</a>
                            </button>
                        </div>
                        <div class="navbar-nav p-1">
                            <button type="button" class="btn btn-outline-primary" style="border: 0">
                                <a style="font-size: 12px" class="nav-link" aria-current="page" href="https://float-camera.ru/pages/cena.html">Цена</a>
                            </button>
                        </div>
                        <div class="navbar-nav p-1">
                            <button type="button" class="btn btn-outline-primary" style="border: 0">
                                <a style="font-size: 12px" class="nav-link" aria-current="page" href="https://float-camera.ru/pages/dostavka.html">Доставка</a>
                            </button>
                        </div>
                        <div class="navbar-nav p-1">
                            <button type="button" class="btn btn-outline-primary" style="border: 0">
                                <a style="font-size: 12px" class="nav-link" aria-current="page" href="https://float-camera.ru/pages/contact.html">Контакты</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-end">
                <nav class="navbar navbar-light bg-light d-flex align-items-baseline">
                    <div class="container-fluid">
                        <button class="navbar-toggler p-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>
            </div>
        </div>
        <!--Для large-->
        <div class="container d-none d-xxl-block">
            <nav class="navbar bg-light">
                <div class="container">
                    <div class="navbar-nav p-1">
                        <button type="button" class="btn btn-outline-primary" style="border: 0">
                            <a class="nav-link" aria-current="page" href="https://float-camera.ru/pages/main.html">Главная</a>
                        </button>
                    </div>
                    <div class="navbar-nav p-1">
                        <button type="button" class="btn btn-outline-primary" style="border: 0">
                            <a class="nav-link" aria-current="page" href="https://float-camera.ru/pages/tovary.html">Наши работы</a>
                        </button>
                    </div>
                    <div class="navbar-nav p-1">
                        <button type="button" class="btn btn-outline-primary" style="border: 0">
                            <a class="nav-link" aria-current="page" href="https://float-camera.ru/pages/stati.html">Статьи</a>
                        </button>
                    </div>
                    <div class="navbar-nav p-1">
                        <button type="button" class="btn btn-outline-primary" style="border: 0">
                            <a class="nav-link" aria-current="page" href="https://float-camera.ru/pages/dokument.html">Документация</a>
                        </button>
                    </div>
                    <div class="navbar-nav p-1">
                        <button type="button" class="btn btn-outline-primary" style="border: 0">
                            <a class="nav-link" aria-current="page" href="https://float-camera.ru/pages/rezume.html">Для вопросов</a>
                        </button>
                    </div>
                    <div class="navbar-nav p-1">
                        <button type="button" class="btn btn-outline-primary" style="border: 0">
                            <a class="nav-link" aria-current="page" href="https://float-camera.ru/pages/cena.html">Цена</a>
                        </button>
                    </div>
                    <div class="navbar-nav p-1">
                        <button type="button" class="btn btn-outline-primary" style="border: 0">
                            <a class="nav-link" aria-current="page" href="https://float-camera.ru/pages/dostavka.html">Доставка</a>
                        </button>
                    </div>
                    <div class="navbar-nav p-1">
                        <button type="button" class="btn btn-outline-primary" style="border: 0">
                            <a class="nav-link" aria-current="page" href="https://float-camera.ru/pages/contact.html">Контакты</a>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
        <!--Для xl-lg-->
        <div class="container d-none d-xl-block d-lg-block d-xxl-none">
            <nav class="navbar bg-light">
                <div class="container">
                    <div class="navbar-nav p-1">
                        <button type="button" class="btn btn-outline-primary" style="border: 0">
                            <a style="font-size: 12px" class="nav-link" aria-current="page" href="https://float-camera.ru/pages/main.html">Главная</a>
                        </button>
                    </div>
                    <div class="navbar-nav p-1">
                        <button type="button" class="btn btn-outline-primary" style="border: 0">
                            <a style="font-size: 12px" class="nav-link" aria-current="page" href="https://float-camera.ru/pages/tovary.html">Наши работы</a>
                        </button>
                    </div>
                    <div class="navbar-nav p-1">
                        <button type="button" class="btn btn-outline-primary" style="border: 0">
                            <a style="font-size: 12px" class="nav-link" aria-current="page" href="https://float-camera.ru/pages/stati.html">Статьи</a>
                        </button>
                    </div>
                    <div class="navbar-nav p-1">
                        <button type="button" class="btn btn-outline-primary" style="border: 0">
                            <a style="font-size: 12px" class="nav-link" aria-current="page" href="https://float-camera.ru/pages/dokument.html">Документация</a>
                        </button>
                    </div>
                    <div class="navbar-nav p-1">
                        <button type="button" class="btn btn-outline-primary" style="border: 0">
                            <a style="font-size: 12px" class="nav-link" aria-current="page" href="https://float-camera.ru/pages/rezume.html">Для вопросов</a>
                        </button>
                    </div>
                    <div class="navbar-nav p-1">
                        <button type="button" class="btn btn-outline-primary" style="border: 0">
                            <a style="font-size: 12px" class="nav-link" aria-current="page" href="https://float-camera.ru/pages/cena.html">Цена</a>
                        </button>
                    </div>
                    <div class="navbar-nav p-1">
                        <button type="button" class="btn btn-outline-primary" style="border: 0">
                            <a style="font-size: 12px" class="nav-link" aria-current="page" href="https://float-camera.ru/pages/dostavka.html">Доставка</a>
                        </button>
                    </div>
                    <div class="navbar-nav p-1">
                        <button type="button" class="btn btn-outline-primary" style="border: 0">
                            <a style="font-size: 12px" class="nav-link" aria-current="page" href="https://float-camera.ru/pages/contact.html">Контакты</a>
                        </button>
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
<div class="container mb-4" id="main-container">
    <div class="row">
        <div class="col-xl-9 col-lg-8 col-12 order-lg-2">
            <div id="right">
                {if !empty($slides)} {include file="standard/slideshow.tpl"} {/if}
                <div id="page-body">
                    {$body}
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-12 order-lg-1">
            <aside>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">

                        <div id="menu" class="menu-frame">

                            <ul class="menu">
                                <li><a href="https://float-camera.ru/pages/stati36.html">Как выбрать флоат-камеру?</a></li>
                                <li><a href="https://float-camera.ru/pages/istoria.html">О нас</a></li>
                                <li><a href="https://float-camera.ru/pages/novosti.html">Новости</a></li>
                                <li><a href="https://float-camera.ru/pages/complect.html">Комплектация камеры</a></li>




                                <li><a href="https://float-camera.ru/pages/gde posetit.html">Где посетить</a></li>
                                <li><a href="https://float-camera.ru/pages/filtr.html">Фильтрация</a></li>

                                <li><a href="https://float-camera.ru/pages/rassroshka.html">Рассрочка</a></li>

                                <li><a href="https://float-camera.ru/pages/gvozdi.html">Доски Садху</a></li>
                                <li><a href="https://float-camera.ru/pages/stati6.html">Исследования флоатинга</a>
                                    <ul>
                                        <li><a href="https://float-camera.ru/pages/stati11.html">спорт</a></li>
                                        <li><a href="https://float-camera.ru/pages/stati13.html">беременность и бесплодие</a></li>
                                        <li><a href="https://float-camera.ru/pages/stati17.html">заболевания</a></li>
                                        <li><a href="https://float-camera.ru/pages/stati18.html">исследования</a></li>
                                        <li><a href="https://float-camera.ru/pages/stati15.html">фибромиалгия</a></li>
                                        <li><a href="https://float-camera.ru/pages/stati16.html">эндорфины</a></li>

                                    </ul>
                                </li>
                                <li><a href="https://float-camera.ru/pages/poleznoe.html">Полезное</a></li>
                                <li><a href="https://float-camera.ru/pages/otzyv.html">Отзывы наших заказчиков</a></li>
                                <li><a href="https://float-camera.ru/pages/sol.html">Соль Эпсома</a></li>
                                <li><a href="https://float-camera.ru/pages/kalkulator.html">Рассчитать стоимость</a></li>
                                <li><a href="https://float-camera.ru/pages/contact.html">Связаться с нами</a></li>
                            </ul>
                        </div>
                        {literal}
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
                        {/literal}

                        {*                            <div id="reclama" class="phone-aside col-lg-12 col-md-12 col-12">*}
                        <div class="col-lg-12 col-md-12 col-12" style="background: #e2f6ff; color:#027dc0">

                            <h3>Звоните сейчас</h3>
                            <h5>Наши телефоны:</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="tel:89272528367">8-927-252-83-67</a>
                                    <a class="" href="viber://add?number=79272528367"  title="Должен быть установлен Viber для ПК" target="_blank">
                                        <img src="https://float-camera.ru/media/images/viber.png" alt="" style="height: 3vh">
                                    </a>
                                    <a href="https://wa.me/+79272528367" title="WhatsApp" target="_blank">
                                        <img src="https://float-camera.ru/media/images/whatsapp.png" alt="" style="height: 3vh">
                                    </a>
                                    <a href="https://max.ru/u/f9LHodD0cOKl5EAM667DlSemAIIP_fjs0OUJh1Ni7Hxkt0jk7AFczoJpCQA" target="_blank">
                                        <img  style="height: 3vh" src="https://upload.wikimedia.org/wikipedia/commons/7/75/Max_logo_2025.png">
                                    </a>
                                </li>
                                

                                <li>
                                    <a href="tel:89272535151">8-927-253-51-51</a>
                                    <a href="viber://add?number=79272535151"  title="Должен быть установлен Viber для ПК" target="_blank">
                                        <img src="https://float-camera.ru/media/images/viber.png" alt="" style="height: 3vh">
                                    </a>
                                    <a href="https://wa.me/+79272535151" title="WhatsApp" target="_blank">
                                        <img src="https://float-camera.ru/media/images/whatsapp.png" alt="" style="height: 3vh">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://t.me/float_camera_Miracle" target="_blank">
                                        Miracle в телеграмм!
                                    </a>
                                    <a href="https://t.me/float_camera_Miracle" target="_blank">
                                        <img src="https://float-camera.ru/media/images/telegram-256x256.png" alt="" style="height: 3vh">
                                    </a>
                                </li>
                                
                            </ul>
                            <!--                                <a href="http://float-camera.ru/pages/main.html"><img src="http://float-camera.ru/media/images/float2.gif" alt="Продаем флоат-камеру"></a>-->

                        </div>

                        <!--<a href="http://float-camera.ru/pages/fransh.html"><img src="http://float-camera.ru/media/images/float28.gif" alt="Франшиза"></a>-->

                        <!--
                        <iframe src="https://averin.pro/widget.php?l=float_camera_miracle&style=1&width=270&gallery=1&s=80&icc=3&icr=3&t=1&tt=Мы в Инстаграм&h=1&ttcolor=027dc0&th=e2f6ff&bw=f9f9f9&bscolor=FFFFFF&bs=FF0000&ts=Подписаться" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:100%;min-height: 420px;" ></iframe>
                                                </div>
                        -->
                        <div class="col-lg-12 col-md-12 col-12">

                            <a href="https://float-camera.ru/pages/tovary.html"><img src="https://float-camera.ru/media/images/4-41.jpg"  alt="Продаем флоат-камеру"></a>
                            <a href="https://float-camera.ru/pages/tovary.html"><img src="https://float-camera.ru/media/images/6-61.jpg"  alt="Продаем флоат-камеру"></a>

                            <div id="menu2" class="menu-frame">
                                <ul class="menu">
                                    <li><a href="https://float-camera.ru/pages/stati23.html">3 мифа о сне</a></li>
                                    <li><a href="https://float-camera.ru/pages/stati22.html">Флоатинг при сколиозе</a></li>
                                    <li><a href="https://float-camera.ru/pages/stati19.html">Флоатинг и похудение</a></li>
                                    <li><a href="https://float-camera.ru/pages/stati15.html">Флоатинг и фибромиалгия</a></li>
                                    <li><a href="https://float-camera.ru/pages/stati14.html">Флоатинг и боли</a></li>
                                    <li><a href="https://float-camera.ru/pages/stati13.html">Флоатинг при бесплодии</a></li>

                                    <li><a href="https://float-camera.ru/pages/stati12.html">Флоатинг и вредные привычки</a></li>

                                    <li><a href="https://float-camera.ru/pages/stati24.html">Профилактика рака</a></li>
                                    <li><a href="https://float-camera.ru/pages/stati18.html">Результаты исследований</a></li>
                                    <li><a href="https://float-camera.ru/pages/stati5.html">Отзывы о флоатинге</a></li>
                                </ul>
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
            <div class="col-md-6 col-lg-5 text-md-left text-center mb-3">&copy; MIRACLE Производство и продажа флоат-камер. 2013-<span id="year">2024</span>г.</div>
            {*                    <div class="col-md-3 text-lg-left text-center mb-3">*}
            {*                        <script type="text/javascript">*}
            {*                            new Date().getFullYear()*}
            {*                        </script>*}
            {*                        <script>*}
            {*                            document.getElementById("year").innerHTML = new Date().getFullYear();*}
            {*                        </script>*}
            {*                        <script type="text/javascript">*}
            {*                            (function() {*}
            {*                                if (window.pluso)*}
            {*                                    if (typeof window.pluso.start == "function") return;*}
            {*                                var d = document,*}
            {*                                    s = d.createElement('script'),*}
            {*                                    g = 'getElementsByTagName';*}
            {*                                s.type = 'text/javascript';*}
            {*                                s.charset = 'UTF-8';*}
            {*                                s.async = true;*}
            {*                                s.src = ('https:' === window.location.protocol ? 'https' : 'http') + '://share.pluso.ru/pluso-like.js';*}
            {*                                var h = d[g]('head')[0] || d[g]('body')[0];*}
            {*                                h.appendChild(s);*}
            {*                            })();*}

            {*                        </script>*}
            {*                        <div class="pluso" data-options="small,round,line,horizontal,nocounter,theme=08" data-services="vkontakte,odnoklassniki,facebook,twitter,moimir" data-background="transparent"></div>*}
            {*                    </div>*}
            <div class="col-md-auto text-md-right text-center">
                <!-- Yandex.Metrika informer -->
                <a href="https://metrika.yandex.ru/stat/?id=23937157&amp;from=informer" target="_blank" rel="nofollow" style="margin-left:12px;">
                    {literal}
                        <img src="https://informer.yandex.ru/informer/23937157/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                             style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика"
                             title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)"
                             class="ym-advanced-informer" data-cid="23937157" data-lang="ru"
                        />
                    {/literal}
                </a>
                <!-- /Yandex.Metrika informer -->
                {literal}
                    <!-- begin of Top100 code -->
                    <script id="top100Counter" type="text/javascript" src="https://counter.rambler.ru/top100.jcn?2996273"></script>
                    <noscript>
                        <a href="https://top100.rambler.ru/navi/2996273/">
                            <img src="https://counter.rambler.ru/top100.cnt?2996273" alt="Rambler's Top100" /><!--border="0"-->
                        </a>

                    </noscript>
                    <!-- end of Top100 code -->
                {/literal}
            </div>
        </div>
    </div>
</footer>


{literal}
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

            let n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function() {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol === "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

            if (w.opera === "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks");

    </script>
    <noscript><div><img src="//mc.yandex.ru/watch/23937157" style="position:absolute;display: none" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

{/literal}



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
    function elem_in_visible_area(selector) {
        let elem_p = $(selector),
            elem_p_height = elem_p.height(),
            offset_top_el = elem_p.offset().top,
            offset_bottom_el = offset_top_el + elem_p.height(),
            scrolled = $(window).scrollTop(),
            scrolled_bottom = scrolled + $(window).height();
        if (scrolled_bottom > offset_top_el && offset_bottom_el > scrolled) {
            return true;
        }
        return false;
    }
    const navBar = document.querySelector("#fixed-nav-bar");
    $(window).scroll(function() {
        if (!elem_in_visible_area('#Float-preview')) {
            navBar.style.cssText = ` position: fixed;   top: 0;   left: 0;   z-index: 9999;   width: 100%; background-color: #00a087; padding: 3px`;
        } else  {
            navBar.style.cssText = ` position: relative;   background-color: #00a087;`;
        }
    })
</script>
<script>
    $('body').click(function(){
        $(".collapse").collapse('hide');
    });
    $(window).scroll(function(){
        $(".collapse").collapse('hide');
    });
</script>
<script src="../../../media/controls/js/SubmitEmail.js"></script>


<script>


</script>



</body>

</html>
