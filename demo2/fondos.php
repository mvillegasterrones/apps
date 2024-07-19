<?php include_once "var_includes.php"; ?>
<!DOCTYPE html>
<!-- Last Published: Wed Jul 06 2022 15:53:36 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="<?=$empresa_dominio?>" data-wf-page="6254a50daf629807bdc003ed" data-wf-site="6254a50daf6298adb0c003ca">
<head>
    <meta charset="utf-8" />
    <title>Fondos / <?=$empresa_nombre_solo?> - Invertir es simple</title>
    <meta content="Con <?=$empresa_nombre_solo?> invertir en el extranjero es de forma simple, segura y de la mano de expertos. Únete ahora." name="description" />
    <meta content="Fondos <?=$empresa_nombre_solo?> - Invertir es simple" property="og:title" />
    <meta content="Con <?=$empresa_nombre_solo?> invertir en el extranjero es de forma simple, segura y de la mano de expertos. Únete ahora." property="og:description" />
    <meta content="https://portal.miblum.com/img/blumbanner_png.png" property="og:image" />
    <meta content="Fondos <?=$empresa_nombre_solo?> - Invertir es simple" property="twitter:title" />
    <meta content="Con <?=$empresa_nombre_solo?> invertir en el extranjero es de forma simple, segura y de la mano de expertos. Únete ahora." property="twitter:description" />
    <meta content="https://portal.miblum.com/img/blumbanner_png.png" property="twitter:image" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="iykbLtZgGAvzxPObcNdrE7SB-0_AthZneXtanwTZV-g" name="google-site-verification" />
    <link href="https://assets.website-files.com/6254a50daf6298adb0c003ca/css/miblum.630bbc33d.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
    ! function(o, c) {
        var n = c.documentElement,
            t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
    </script>
    <link href="<?= $empresa_icon ?>" rel="shortcut icon" type="image/x-icon" />
    <link href="<?= $empresa_icon ?>" rel="apple-touch-icon" />
    <style>.anti-flicker-hide { opacity: 0 !important}</style>
    <script type="text/javascript">
    (function(a, s, y, n, c, h, i, d, e) {
        s.className += ' ' + y;
        h.start = 1 * new Date;
        h.end = i = function() { s.className = s.className.replace(RegExp(' ?' + y), '') };
        (a[n] = a[n] || []).hide = h;
        setTimeout(function() {
            i();
            h.end = null
        }, c);
        h.timeout = c;
    })(window, document.documentElement, 'anti-flicker-hide', 'dataLayer', 4000, { 'OPT-ND6GV8G': true });
    </script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-210891041-1"></script>
    <script type="text/javascript">
    window.dataLayer = window.dataLayer || [];

    function gtag() { dataLayer.push(arguments); } gtag('js', new Date());
    gtag('config', 'UA-210891041-1', { 'anonymize_ip': false, 'optimize_id': 'OPT-ND6GV8G' });
    </script>
    <script type="text/javascript">
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() { n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments) };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.agent = 'plwebflow';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '912103529658896');
    fbq('track', 'PageView');
    </script>
    <!--Amplitude Code-->
    <script type="text/javascript">
    (function(e, t) {
        var n = e.amplitude || { _q: [], _iq: {} };
        var r = t.createElement("script");
        r.type = "text/javascript";
        r.integrity = "sha384-+EO59vL/X7v6VE2s6/F4HxfHlK0nDUVWKVg8K9oUlvffAeeaShVBmbORTC2D3UF+";
        r.crossOrigin = "anonymous";
        r.async = true;
        r.src = "https://cdn.amplitude.com/libs/amplitude-8.17.0-min.gz.js";
        r.onload = function() {
            if (!e.amplitude.runQueuedFunctions) {
                console.log("[Amplitude] Error: could not load SDK")
            }
        };
        var i = t.getElementsByTagName("script")[0];
        i.parentNode.insertBefore(r, i);

        function s(e, t) {
            e.prototype[t] = function() {
                this._q.push([t].concat(Array.prototype.slice.call(arguments, 0)));
                return this
            }
        }
        var o = function() { this._q = []; return this };
        var a = ["add", "append", "clearAll", "prepend", "set", "setOnce", "unset", "preInsert", "postInsert", "remove"];
        for (var c = 0; c < a.length; c++) { s(o, a[c]) } n.Identify = o;
        var u = function() {
            this._q = [];
            return this
        };
        var l = ["setProductId", "setQuantity", "setPrice", "setRevenueType", "setEventProperties"];
        for (var p = 0; p < l.length; p++) { s(u, l[p]) } n.Revenue = u;
        var d = ["init", "logEvent", "logRevenue", "setUserId", "setUserProperties", "setOptOut", "setVersionName", "setDomain", "setDeviceId", "enableTracking", "setGlobalUserProperties", "identify", "clearUserProperties", "setGroup", "logRevenueV2", "regenerateDeviceId", "groupIdentify", "onInit", "logEventWithTimestamp", "logEventWithGroups", "setSessionId", "resetSessionId"];

        function v(e) {
            function t(t) {
                e[t] = function() {
                    e._q.push([t].concat(Array.prototype.slice.call(arguments, 0)))
                }
            }
            for (var n = 0; n < d.length; n++) { t(d[n]) }
        }
        v(n);
        n.getInstance = function(e) {
            e = (!e || e.length === 0 ? "$default_instance" : e).toLowerCase();
            if (!Object.prototype.hasOwnProperty.call(n._iq, e)) {
                n._iq[e] = { _q: [] };
                v(n._iq[e])
            }
            return n._iq[e]
        };
        e.amplitude = n
    })(window, document);

    amplitude.getInstance().init("0657847f7f1518d77c5d603092026b65");
    </script>
    <script>
    var eventProperties = {
        'page': window.location.pathname
    };
    amplitude.getInstance().logEvent('web:Funds Renta Global', eventProperties);
    </script>
    <script type="text/javascript">
    window.__WEBFLOW_CURRENCY_SETTINGS = { "currencyCode": "USD", "$init": true, "symbol": "$", "decimal": ".", "fractionDigits": 2, "group": ",", "template": "{{wf {\"path\":\"symbol\",\"type\":\"PlainText\"} }} {{wf {\"path\":\"amount\",\"type\":\"CommercePrice\"} }} {{wf {\"path\":\"currencyCode\",\"type\":\"PlainText\"} }}", "hideDecimalForWholeNumbers": false };
    </script>
</head>

<body>
    <div style="opacity:0" class="page-wrapper">
        <div data-w-id="30e72098-383f-aa99-a958-3300d8704335" data-animation="default" data-collapse="medium" data-duration="200" data-easing="ease" data-easing2="ease" role="banner" class="header-wrapper w-nav">
          <?php include_once "views/sections/navbar.php" ?>
            <!--<div class="header-content">
                <div class="container-default header w-container">
                    <div class="header-content-wrapper">
                        <div class="header-left-side"><a href="/" class="header-logo-link w-nav-brand"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/6254aadcb32a48aa0e273106_log%2Bslogan.svg" alt="" class="header-logo" /></a></div>
                        <div class="header-right-side">
                            <nav role="navigation" class="header-nav-menu-wrapper w-nav-menu">
                                <ul role="list" class="header-nav-menu-list">
                                    <li><a href="/" class="nav-link-2 w-nav-link"><span class="inicio">Inicio</span></a></li>
                                    <li><a href="/conocenos" class="nav-link-3 w-nav-link"><span class="con-cenos">Conócenos</span></a></li>
                                    <li><a href="/blog" class="nav-link-5 w-nav-link"><span class="blog">Blog</span></a></li>
                                    <li class="list-item-6"><a href="/fondos" aria-current="page" class="nav-link-4 w-nav-link w--current"><span class="fondo-blum">Fondos <?=$empresa_nombre_solo?> Renta Global</span></a></li>
                                    <li class="list-item-6"><a href="/fondos" aria-current="page" class="nav-link-4 w-nav-link w--current"><span class="fondo-blum">Fondos <?=$empresa_nombre_solo?> Cash</span></a></li>
                                    <li class="list-item-7">
                                        <div data-hover="true" data-delay="0" class="dropdown-2 w-dropdown">
                                            <div class="dropdown w-dropdown-toggle">
                                                <div class="icon w-icon-dropdown-toggle"></div>
                                                <div class="text-block-57">Fondos</div>
                                            </div>
                                            <nav class="w-dropdown-list"><a href="http://www.miblum.com/fondos" target="_blank" class="dropdown-link-3 w-dropdown-link">Renta Global</a><a href="http://www.miblum.com/fondo-blum-cash" target="_blank" class="dropdown-link-5 w-dropdown-link">Cash</a><a href="#" class="dropdown-link w-dropdown-link">Link 3</a></nav>
                                        </div>
                                    </li>
                                    <li class="list-item-5"><a href="https://portal.miblum.com/" target="_blank" class="nav-link-5 w-nav-link"><span class="blog">Iniciar sesión</span></a></li>
                                </ul>
                            </nav>
                            <div class="buttons-row header">
                                <div class="btn-row-left header"><a href="https://portal.miblum.com/" target="_blank" class="btn-secondary small w-button">Iniciar sesión</a></div>
                                <div class="btn-row-right"><a id="btw_empezar_header" href="https://portal.miblum.com/create-customer" target="_blank" class="btn-primary small w-button">Empezar</a></div>
                            </div>
                            <div class="hamburger-menu-wrapper w-nav-button">
                                <div class="hamburger-menu-bar top"></div>
                                <div class="hamburger-menu-bar bottom"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
        <div class="section hero _04 wf-section">
            <div class="container-default w-container">
                <div class="div-block-5">
                    <div class="w-layout-grid grid-5">
                        <div id="w-node-_2fc5e307-e261-5b5b-a330-c150129ab22e-bdc003ed" class="div-block-7"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/62607df2977a9758bc10e330_dollar_image-min.png" loading="lazy" width="531" srcset="https://assets.website-files.com/6254a50daf6298adb0c003ca/62607df2977a9758bc10e330_dollar_image-min-p-500.png 500w, https://assets.website-files.com/6254a50daf6298adb0c003ca/62607df2977a9758bc10e330_dollar_image-min-p-800.png 800w, https://assets.website-files.com/6254a50daf6298adb0c003ca/62607df2977a9758bc10e330_dollar_image-min.png 944w" sizes="(max-width: 479px) 87vw, 400px" alt="" class="image-15" /></div>
                        <div id="w-node-eb12d30d-1122-4797-642f-6d09c0dccd30-bdc003ed" class="div-block-6">
                            <h1 class="heading-15">¿Qué es el fondo mutuo <span class="text-span-5"><?=$empresa_nombre_solo?> Renta Global?</span></h1>
                            <p data-w-id="fc4a99af-8aaa-47d9-2433-cb96e1debbe9" style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform-style:preserve-3d;opacity:0" class="mg-bottom-0">
                              <?=$empresa_nombre_solo?> Renta Global busca superar los retornos del mercado global de bonos con un riesgo moderado, invirtiendo en instrumentos generadores de renta denominadosen USD.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fb-section-02 wf-section">
            <div class="div-block-8">
                <div class="w-layout-grid grid-6">
                    <div id="w-node-b55e02e1-993c-b311-fc9b-ca2e27526526-bdc003ed" class="div-block-9">
                        <h2 class="heading-16">Objetivo de retorno <br />sobre los bonos globales, <br />con <span class="text-span-6">riesgo moderado</span></h2>
                        <p class="paragraph-6">En la curva de “riesgo/retorno», <?=$empresa_nombre_solo?> Renta Global se ubica en la mitad del espectro: busca superar el retorno de los bonos, pero sin la volatilidad de las acciones.</p>
                    </div>
                    <div id="w-node-_48096856-647b-afbf-ced3-8f11e7ab0179-bdc003ed" class="div-block-10"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/6260952734bd2cd96d8c8000_Captura%20de%20Pantalla%202022-04-20%20a%20la(s)%2018.14.57.png" loading="lazy" width="489" srcset="https://assets.website-files.com/6254a50daf6298adb0c003ca/6260952734bd2cd96d8c8000_Captura%20de%20Pantalla%202022-04-20%20a%20la(s)%2018.14.57-p-500.png 500w, https://assets.website-files.com/6254a50daf6298adb0c003ca/6260952734bd2cd96d8c8000_Captura%20de%20Pantalla%202022-04-20%20a%20la(s)%2018.14.57-p-800.png 800w, https://assets.website-files.com/6254a50daf6298adb0c003ca/6260952734bd2cd96d8c8000_Captura%20de%20Pantalla%202022-04-20%20a%20la(s)%2018.14.57-p-1080.png 1080w, https://assets.website-files.com/6254a50daf6298adb0c003ca/6260952734bd2cd96d8c8000_Captura%20de%20Pantalla%202022-04-20%20a%20la(s)%2018.14.57.png 1172w" sizes="(max-width: 479px) 86vw, (max-width: 767px) 26vw, (max-width: 991px) 29vw, (max-width: 1439px) 34vw, (max-width: 1919px) 32vw, 489px" alt="" class="image-16" /></div>
                </div>
            </div>
        </div>
        <div class="fb-section-03 wf-section">
            <div class="div-block-11">
                <div class="w-layout-grid grid-10">
                    <div id="w-node-_4e7fd08e-4057-2e8b-5eaa-729f2ef58a68-bdc003ed" class="div-block-10"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/626097abe29ee49fde9534c1_Captura%20de%20Pantalla%202022-04-20%20a%20la(s)%2018.30.34.png" loading="lazy" width="450" id="w-node-_4e7fd08e-4057-2e8b-5eaa-729f2ef58a69-bdc003ed" sizes="(max-width: 479px) 100vw, (max-width: 767px) 76vw, 450px" srcset="https://assets.website-files.com/6254a50daf6298adb0c003ca/626097abe29ee49fde9534c1_Captura%20de%20Pantalla%202022-04-20%20a%20la(s)%2018.30.34-p-500.png 500w, https://assets.website-files.com/6254a50daf6298adb0c003ca/626097abe29ee49fde9534c1_Captura%20de%20Pantalla%202022-04-20%20a%20la(s)%2018.30.34-p-800.png 800w, https://assets.website-files.com/6254a50daf6298adb0c003ca/626097abe29ee49fde9534c1_Captura%20de%20Pantalla%202022-04-20%20a%20la(s)%2018.30.34-p-1080.png 1080w, https://assets.website-files.com/6254a50daf6298adb0c003ca/626097abe29ee49fde9534c1_Captura%20de%20Pantalla%202022-04-20%20a%20la(s)%2018.30.34.png 1162w" alt="" class="image-16" /></div>
                    <div id="w-node-_4e7fd08e-4057-2e8b-5eaa-729f2ef58a59-bdc003ed" class="div-block-9">
                        <h2 class="heading-16">¿En qué invertimos <br />exactamente?<strong><br /></strong></h2>
                        <p class="paragraph-7">Invertimos en los siguientes mercados:<strong><br /></strong></p>
                        <ul role="list" class="list">
                            <li><span class="text-span-7">Alto Rendimiento (High Yield)</span></li>
                            <li><strong class="bold-text-5">Mercados Emergentes </strong></li>
                            <li><strong>Temático / Sectorial</strong></li>
                            <li class="list-item-4"><strong class="bold-text-7">Renta Alternativa</strong></li>
                        </ul>
                        <p class="paragraph-9">Tu dinero estará invertido en bonos de las principales empresas y países a nivel mundial, así como activos generadores de renta como Real Estate, bonos vinculados a seguros, etc.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="fb-section-04 wf-section">
            <div class="container-default w-container">
                <div class="div-block-5">
                    <div class="w-layout-grid grid-8">
                        <div id="w-node-_13b73f94-4655-afb4-2d14-cd6210466c3d-bdc003ed" class="div-block-6">
                            <h1 class="heading-15">Experiencia de <br />‍<span class="text-span-8">Clase Mundial</span><strong><br /></strong></h1>
                            <p data-w-id="13b73f94-4655-afb4-2d14-cd6210466c45" style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform-style:preserve-3d;opacity:0" class="paragraph-16">
                              Equipo de Inversiones con más de 20 años de experiencia y más de <br />
                              ‍<strong>S/. 7,000 millones</strong> bajo administración en las principales empresas de la región.<br />
                            </p>
                        </div>
                        <div id="w-node-_13b73f94-4655-afb4-2d14-cd6210466c4f-bdc003ed" class="div-block-7"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625705d4d3bb315d5452a82b_bolsa_dinero-2-91c62720116de553993788320dd0309b.png" loading="lazy" width="339" alt="" class="image-15" /></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fb-section-05 wf-section">
            <div class="container-default w-container">
                <div class="div-block-5">
                    <div class="w-layout-grid grid-9">
                        <div id="w-node-a8ed627f-2bbd-823b-32e1-68a2262427d0-bdc003ed" class="div-block-7"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/6256c20c66f2135389ef25b3_Captura%20de%20Pantalla%202022-04-13%20a%20la(s)%2007.28.41.png" loading="lazy" width="398" srcset="https://assets.website-files.com/6254a50daf6298adb0c003ca/6256c20c66f2135389ef25b3_Captura%20de%20Pantalla%202022-04-13%20a%20la(s)%2007.28.41-p-500.png 500w, https://assets.website-files.com/6254a50daf6298adb0c003ca/6256c20c66f2135389ef25b3_Captura%20de%20Pantalla%202022-04-13%20a%20la(s)%2007.28.41-p-800.png 800w, https://assets.website-files.com/6254a50daf6298adb0c003ca/6256c20c66f2135389ef25b3_Captura%20de%20Pantalla%202022-04-13%20a%20la(s)%2007.28.41.png 955w" alt="" sizes="(max-width: 479px) 92vw, 398px" class="image-15" /></div>
                        <div id="w-node-a8ed627f-2bbd-823b-32e1-68a2262427d2-bdc003ed" class="div-block-6">
                            <h1 class="heading-15">&quot;Best of Class&quot;<br />+ <span class="text-span-9">Diversificación<br />inteligente</span><strong><br /></strong></h1>
                            <p data-w-id="a8ed627f-2bbd-823b-32e1-68a2262427d7" style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform-style:preserve-3d;opacity:0" class="paragraph-17">
                              En este entorno de tasas de interés bajas, no basta seleccionar instrumentos “clásicos” de Renta Fija. Es necesario ampliar el universo de inversión para maximizar la relación retorno / riesgo.<br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-6 wf-section">
            <h2 class="heading-19">Documentos Legales</h2>
            <div class="text-block-20">Encuentra más información sobre el fondo aquí<br /></div>
            <div class="container-7 w-container">
                <div class="columns-2 w-row">
                    <div class="column w-col w-col-1">
                        <div class="text-block-37">#</div>
                    </div>
                    <div class="w-col w-col-8">
                        <div class="text-block-36">Nombre del archivo</div>
                    </div>
                    <div class="w-col w-col-1">
                        <div class="text-block-35">Tipo</div>
                    </div>
                    <div class="w-col w-col-2">
                        <div class="text-block-34">Link</div>
                    </div>
                </div>
                <div class="columns-3 w-row">
                    <div class="w-col w-col-1">
                        <div class="text-block-40">1</div>
                    </div>
                    <div class="w-col w-col-8">
                        <div class="text-block-39">Reglamento de Participación<br /></div>
                    </div>
                    <div class="w-col w-col-1">
                        <div class="text-block-38">Pdf</div>
                    </div>
                    <div class="column-2 w-col w-col-2"><a href="https://assets.website-files.com/6254a50daf6298adb0c003ca/62752491d15f280925c0f951_Reglamento-de-participacion-12232021.pdf" target="_blank" class="button-14 w-button">Descargar</a></div>
                </div>
                <div class="columns-4 w-row">
                    <div class="w-col w-col-1">
                        <div class="text-block-51">2</div>
                    </div>
                    <div class="w-col w-col-8">
                        <div class="text-block-46">Anexo RDP<br /></div>
                    </div>
                    <div class="column-9 w-col w-col-1">
                        <div class="text-block-45">Pdf</div>
                    </div>
                    <div class="column-3 w-col w-col-2"><a href="https://assets.website-files.com/6254a50daf6298adb0c003ca/62752aa07c4f88b59895b968_Anexo-RDP-Blum-Renta-Global-Enero-2022.pdf" target="_blank" class="button-15 w-button">Descargar</a></div>
                </div>
                <!--<div class="columns-5 w-row">
                    <div class="w-col w-col-1">
                        <div class="text-block-52">3</div>
                    </div>
                    <div class="w-col w-col-8">
                        <div class="text-block-47">Prospecto Simplificado<br /></div>
                    </div>
                    <div class="w-col w-col-1">
                        <div class="text-block-44">Pdf</div>
                    </div>
                    <div class="column-4 w-col w-col-2"><a href="https://assets.website-files.com/6254a50daf6298adb0c003ca/62752aa02723a0c537ea9f5f_Prospecto-Simplificado-Blum-Renta-Global-Enero-2022.pdf" target="_blank" class="button-21 w-button">Descargar</a></div>
                </div>
                <div class="columns-6 w-row">
                    <div class="w-col w-col-1">
                        <div class="text-block-53">4</div>
                    </div>
                    <div class="w-col w-col-8">
                        <div class="text-block-48">Cumplimiento de la Política de Inversiones - Mayo 2022<br /></div>
                    </div>
                    <div class="w-col w-col-1">
                        <div class="text-block-43">Pdf</div>
                    </div>
                    <div class="column-5 w-col w-col-2"><a href="https://assets.website-files.com/6254a50daf6298adb0c003ca/62c5ae44c07e3c08f149f80d_Cumplimiento%20de%20la%20Poli%CC%81tica%20de%20Inversiones%20-%20Junio%202022%20-%20Li%CC%81mites%20Prospecto.pdf" target="_blank" class="button-20 w-button">Descargar</a></div>
                </div>
                <div class="columns-7 w-row">
                    <div class="w-col w-col-1">
                        <div class="text-block-54">5</div>
                    </div>
                    <div class="w-col w-col-8">
                        <div class="text-block-49">Contrato de Administración de Fondos Mutuos<br /></div>
                    </div>
                    <div class="w-col w-col-1">
                        <div class="text-block-42">Pdf</div>
                    </div>
                    <div class="column-6 w-col w-col-2"><a href="https://assets.website-files.com/6254a50daf6298adb0c003ca/62752a9fd4a7694fbe3d72ba_Contrato-de-administracion_publicacion-web.pdf" target="_blank" class="button-19 w-button">Descargar</a></div>
                </div>-->
                <div class="columns-9 w-row">
                    <div class="w-col w-col-1">
                        <div class="text-block-55">6</div>
                    </div>
                    <div class="w-col w-col-8">
                        <div class="text-block-50">Tabla de Comisiones</div>
                    </div>
                    <div class="w-col w-col-1">
                        <div class="text-block-41">Pdf</div>
                    </div>
                    <div class="column-8 w-col w-col-2"><a href="https://assets.website-files.com/6254a50daf6298adb0c003ca/62755de0363e3b142ee5e5ca_Tabla%20de%20Comisiones.pdf" target="_blank" class="button-18 w-button">Descargar</a></div>
                </div>
            </div>
        </div>
        <?php include_once "views/sections/footer.php"; ?>
        <!--<footer id="btn_invertir_footer" class="footer-wrapper">
            <div class="container-default w-container">
                <div data-w-id="9566e1e2-4862-c17d-08fa-fb50b8a31b45" class="footer-top">
                    <div class="w-layout-grid grid-footer-2-column---logo-and-buttons">
                        <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b48-b8a31b43" class="inner-container _450px"><a href="/" class="footer-logo-wrapper w-inline-block"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/62682f45fec0408738096343_Logo%20Blanco.png" alt="" class="footer-logo" /></a></div>
                        <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b4f-b8a31b43" class="buttons-row download-app">
                            <div class="btn-row-left download-app"><a href="http://portal.miblum.com/create-customer" target="_blank" class="btn-primary download-app w-inline-block">
                                    <div class="text-block">Invertir</div>
                                </a></div>
                        </div>
                    </div>
                    <p class="paragraph">Invierte en el extranjero de forma simple, segura y de la mano de expertos.</p>
                </div>
                <div data-w-id="9566e1e2-4862-c17d-08fa-fb50b8a31b5c" class="footer-middle">
                    <div class="w-layout-grid grid-3-columns footer-nav-menu">
                        <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b5f-b8a31b43" class="inner-container _230px">
                            <div class="mg-bottom-40px">
                                <div class="text-300 bold color-neutral-800">Menú</div>
                            </div>
                            <div class="nav-menu-list-main-wrapper">
                                <ul role="list" class="nav-menu-list-wrapper">
                                    <li class="nav-menu-list-item"><a href="/" class="text-200 menu-nav-link">Inicio</a></li>
                                    <li class="nav-menu-list-item"><a href="/conocenos" class="text-200 menu-nav-link">Conócenos</a></li>
                                    <li class="nav-menu-list-item"><a href="/fondos" aria-current="page" class="text-200 menu-nav-link w--current">Fondos Blum</a></li>
                                    <li class="nav-menu-list-item"><a href="/blog" class="text-200 menu-nav-link">Blog</a></li>
                                </ul>
                                <ul role="list" class="nav-menu-list-wrapper last">
                                    <li class="nav-menu-list-item"><a href="https://portal.miblum.com/" target="_blank" class="text-200 menu-nav-link">Entrar</a></li>
                                    <li class="nav-menu-list-item"><a href="http://portal.miblum.com/create-customer" target="_blank" class="text-200 menu-nav-link">Invertir</a></li>
                                    <li class="nav-menu-list-item"></li>
                                    <li class="nav-menu-list-item"></li>
                                </ul>
                            </div>
                        </div>
                        <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b7e-b8a31b43" class="inner-container _230px">
                            <div class="mg-bottom-40px">
                                <div class="text-300 bold color-neutral-800">Información</div>
                            </div>
                            <div class="nav-menu-list-main-wrapper">
                                <ul role="list" class="nav-menu-list-wrapper last">
                                    <li class="nav-menu-list-item"><a href="https://www.smv.gob.pe/Frm_InfoFinanFondosInversion?data=7C0FC602E6F9548CD5B5376D58EC9BD0119DC76FB2" target="_blank" class="text-200 menu-nav-link">Información financiera</a></li>
                                    <li class="nav-menu-list-item"><a href="https://www.smv.gob.pe/Frm_Memorias.aspx?data=2621C038EC1F2286F1B4681A9C105FF3BFF6119339" target="_blank" class="text-200 menu-nav-link">Memorias</a></li>
                                    <li class="nav-menu-list-item"><a href="https://www.smv.gob.pe/Frm_HechosDeImportancia.aspx?data=F9BED561C70CE3ABF0F44C66E159B45B5DE2AAF64E" target="_blank" class="text-200 menu-nav-link">Hechos de importancia</a></li>
                                    <li class="nav-menu-list-item"><a href="https://admin.miblum.com/wp-content/uploads/2022/02/directores.pdf" target="_blank" class="text-200 menu-nav-link">Directores</a></li>
                                    <li class="nav-menu-list-item"><a href="/fondos" target="_blank" aria-current="page" class="text-200 menu-nav-link w--current">BLUM RENTA GLOBAL</a></li>
                                    <li class="nav-menu-list-item"></li>
                                </ul>
                            </div>
                        </div>
                        <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b96-b8a31b43" class="inner-container _502px">
                            <div class="mg-bottom-40px">
                                <div class="text-300 bold color-neutral-800">Redes sociales</div>
                            </div>
                            <div class="w-layout-grid grid-2-columns footer-country-available-service">
                                <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b9b-b8a31b43" class="flex-horizontal align-center">
                                    <div class="mg-right-18px">
                                        <div class="inner-container _78px width-100 responsive"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/6256f1e5d87607253d177dad_Group%201000002863.svg" loading="eager" alt="" class="image border-radius-24px responsive" /></div>
                                    </div>
                                    <div class="heading-h5-size country-available"><a href="https://www.linkedin.com/company/blum-inversiones" target="_blank" class="link">Linkedin</a></div>
                                </div>
                                <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31ba1-b8a31b43" class="flex-horizontal align-center">
                                    <div class="mg-right-18px">
                                        <div class="inner-container _78px width-100 responsive"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/6256f1e54da668f8e5ebe904_Group.svg" loading="eager" alt="" class="image border-radius-24px responsive" /></div>
                                    </div>
                                    <div class="heading-h5-size country-available"><a href="https://www.facebook.com/bluminversiones" target="_blank" class="link-3">Facebook</a></div>
                                </div>
                                <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31ba7-b8a31b43" class="flex-horizontal align-center">
                                    <div class="mg-right-18px">
                                        <div class="inner-container _78px width-100 responsive"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/6256f1e507cdbc31bb0a0ccb_Group-1.svg" loading="eager" alt="" class="image border-radius-24px responsive" /></div>
                                    </div>
                                    <div class="heading-h5-size country-available"><a href="https://www.instagram.com/bluminversiones/" target="_blank" class="link-2">Instagram</a></div>
                                </div>
                                <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31bad-b8a31b43" class="flex-horizontal align-center">
                                    <div class="mg-right-18px">
                                        <div class="inner-container _78px width-100 responsive"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/6256f1e59e7c0eccbe7c88bf_Layer%203.svg" loading="eager" alt="" class="image border-radius-24px responsive" /></div>
                                    </div>
                                    <div class="heading-h5-size country-available"><a href="https://www.youtube.com/channel/UCNFIC_S8V_nOJl4Voqt4oHg/featured" target="_blank" class="link-4">Youtube</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-w-id="9566e1e2-4862-c17d-08fa-fb50b8a31bb3" class="footer-bottom">
                    <p class="paragraph-14">Contacto@miblum.com | <?=$empresa_nombre_solo?> todos los derechos reservados 2022<a href="https://webflow.com/" target="_blank" class="text-decoration-none"></a></p>
                </div>
            </div>
        </footer>-->
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6254a50daf6298adb0c003ca" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://assets.website-files.com/6254a50daf6298adb0c003ca/js/miblum.cc1aa3d44.js" type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>

</html>
