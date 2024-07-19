<?php include_once "var_includes.php"; ?>
<!DOCTYPE html>
<!-- Last Published: Wed Jul 06 2022 15:53:36 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="<?=$empresa_dominio?>" data-wf-page="6254a50daf6298d27dc003cf" data-wf-site="6254a50daf6298adb0c003ca">

<head>
    <meta charset="utf-8" />
    <title>Blog / <?=$empresa_nombre_solo?> - Invertir es simple</title>
    <meta content="Con <?=$empresa_nombre_solo?> invertir en el extranjero es de forma simple, segura y de la mano de expertos. Únete ahora." name="description" />
    <meta content="Blog - <?=$empresa_nombre_solo?> - Invertir es simple" property="og:title" />
    <meta content="Con <?=$empresa_nombre_solo?> invertir en el extranjero es de forma simple, segura y de la mano de expertos. Únete ahora." property="og:description" />
    <meta content="https://portal.miblum.com/img/blumbanner_png.png" property="og:image" />
    <meta content="Blog - <?=$empresa_nombre_solo?> - Invertir es simple" property="twitter:title" />
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
    <link href="https://assets.website-files.com/6254a50daf6298adb0c003ca/6254db013e28f66340132b0c_Webclip256x256.jpg" rel="apple-touch-icon" />
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
    amplitude.getInstance().logEvent('web:blog', eventProperties);
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
                                    <li><a href="/blog" aria-current="page" class="nav-link-5 w-nav-link w--current"><span class="blog">Blog</span></a></li>
                                    <li class="list-item-6"><a href="/fondos" class="nav-link-4 w-nav-link"><span class="fondo-blum">Fondos <?=$empresa_nombre_solo?> Renta Global</span></a></li>
                                    <li class="list-item-6"><a href="/fondos" class="nav-link-4 w-nav-link"><span class="fondo-blum">Fondos <?=$empresa_nombre_solo?> Cash</span></a></li>
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
        <div class="section hero wf-section">
            <div class="container-default w-container">
                <div class="mg-bottom-64px">
                    <div class="inner-container _590px center">
                        <div class="text-center">
                            <h1 data-w-id="7fc9a1eb-f3ab-4273-b931-d5afbb391399" style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform-style:preserve-3d;opacity:0" class="mg-bottom-8px"><?=$empresa_nombre_solo?> blog</h1>
                            <p data-w-id="873cd4db-87c6-819a-5c4b-ce0bdc87c429" style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-ms-transform: translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform-style:preserve-3d;opacity:0" class="mg-bottom-40px">
                              Inversiones, tecnología y tendencias de mercado, para el <?=$empresa_nombre_solo?>ista bien informado
                            </p>
                            <a href="blog.php" aria-current="page" class="button-5 w-button w--current">Todo los artículos</a>
                            <div data-w-id="03f98ff4-f442-c5ee-c46d-75fec338593a" style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform-style:preserve-3d;opacity:0" class="collection-list-wrapper w-dyn-list">
                                <div role="list" class="flex-horizontal categories w-dyn-items">
                                    <!--<div role="listitem" class="flex-horizontal mg-bottom-12px w-dyn-item"><a href="/blog-post/beats" class="btn-category all w-condition-invisible w-button">Beats</a><a href="/blog-post/beats" class="btn-category w-button">Beats</a></div>-->
                                    <div role="listitem" class="flex-horizontal mg-bottom-12px w-dyn-item"><a href="index.php" class="btn-category all w-condition-invisible w-button"><?=$empresa_nombre_solo?></a><a href="index.php" class="btn-category w-button"><?=$empresa_nombre_solo?></a></div>
                                    <!--<div role="listitem" class="flex-horizontal mg-bottom-12px w-dyn-item"><a href="/blog-post/mercados" class="btn-category all w-condition-invisible w-button">Mercados</a><a href="/blog-post/mercados" class="btn-category w-button">Mercados</a></div>-->
                                    <!--<div role="listitem" class="flex-horizontal mg-bottom-12px w-dyn-item"><a href="/blog-post/finanzas-personales" class="btn-category all w-condition-invisible w-button">Finanzas Personales</a><a href="/blog-post/finanzas-personales" class="btn-category w-button">Finanzas Personales</a></div>
                                    <div role="listitem" class="flex-horizontal mg-bottom-12px w-dyn-item"><a href="/blog-post/videos" class="btn-category all w-condition-invisible w-button">Videos</a><a href="/blog-post/videos" class="btn-category w-button">Videos</a></div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-w-id="80d03df0-6e99-732a-785f-0c36b501a400" style="opacity:0;-webkit-transform:translate3d(0, 0, 0) scale3d(0.85, 0.85, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.85, 0.85, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.85, 0.85, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.85, 0.85, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="w-dyn-list">
                    <div role="list" class="w-dyn-items">
                        <div role="listitem" class="w-dyn-item"><a data-w-id="7a270a9d-2ee9-6ba8-7e43-2bafcc7e2452" href="#" class="link-content post-featured w-inline-block">
                                <div class="image-wrapper border-radius-28px post-featured"><img src="https://assets.website-files.com/6254a50daf62983becc003f6/62aceb9851c194c5775f1151_blum%20te%20informa%203.png" loading="eager" alt="Cambios en el Contrato de Administración" class="image cover" /></div>
                                <div class="card post-featured">
                                    <div class="mg-bottom-12px">
                                        <div class="flex-horizontal align-center children-wrap">
                                            <div class="text-200"><?=$empresa_nombre_solo?></div>
                                            <div class="text-divider"></div>
                                            <div class="text-200">Jun 21, 2022</div>
                                        </div>
                                    </div>
                                    <h2 class="display-4 mg-bottom-8px">Cambios en el Contrato de Administración</h2>
                                    <p class="mg-bottom-0">Hemos modificado nuestro contrato de Administración de Fondos Mutuos con la intensión de brindarte una mejor experiencia. </p>
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section _200px wf-section">
            <div class="container-default w-container">
                <div data-w-id="19aad606-1fe4-a929-ff98-061903eeafb0" style="opacity:0" class="w-layout-grid grid-2-columns blog-posts">
                    <div id="w-node-ad39b444-0e86-8cc1-a29b-716fea69d360-7dc003cf" class="w-dyn-list">
                        <div role="list" class="grid-1-column gap-row-32px blog-posts w-dyn-items">
                            <div role="listitem" class="w-dyn-item"><a href="/blog/la-cts-y-el-fondo-de-emergencia" class="card link-content post w-inline-block">
                                    <div class="image-wrapper card-post"><img src="https://assets.website-files.com/6254a50daf62983becc003f6/62ab9b3d952adac80f8d669e_andre-taissin-5OUMf1Mr5pU-unsplash.jpg" loading="eager" alt="La CTS y el Fondo de Emergencia" class="image cover" /></div>
                                    <div class="card-post-content">
                                        <div class="mg-bottom-12px">
                                            <div class="flex-horizontal align-center children-wrap">
                                                <div class="text-200">Finanzas Personales</div>
                                                <div class="text-divider"></div>
                                                <div class="text-200">June 30, 2022 5:54 PM</div>
                                            </div>
                                        </div>
                                        <h3 class="heading-h3-size">La CTS y el Fondo de Emergencia</h3>
                                        <p class="paragraph-15">Desde hace unas semanas ya puedes acceder a los fondos de tu CTS; pero recuerda que la necesidad que cubre la CTS no ha desaparecido</p>
                                    </div>
                                </a></div>
                            <div role="listitem" class="w-dyn-item"><a href="#" class="card link-content post w-inline-block">
                                    <div class="image-wrapper card-post"><img src="https://assets.website-files.com/6254a50daf62983becc003f6/62aceb9851c194c5775f1151_blum%20te%20informa%203.png" loading="eager" alt="Cambios en el Contrato de Administración" class="image cover" /></div>
                                    <div class="card-post-content">
                                        <div class="mg-bottom-12px">
                                            <div class="flex-horizontal align-center children-wrap">
                                                <div class="text-200"><?=$empresa_nombre_solo?></div>
                                                <div class="text-divider"></div>
                                                <div class="text-200">June 21, 2022 10:25 AM</div>
                                            </div>
                                        </div>
                                        <h3 class="heading-h3-size">Cambios en el Contrato de Administración</h3>
                                        <p class="paragraph-15">Hemos modificado nuestro contrato de Administración de Fondos Mutuos con la intensión de brindarte una mejor experiencia. </p>
                                    </div>
                                </a></div>
                            <div role="listitem" class="w-dyn-item"><a href="#" class="card link-content post w-inline-block">
                                    <div class="image-wrapper card-post"><img src="https://assets.website-files.com/6254a50daf62983becc003f6/626abacd71964a1e15836110_Captura%20de%20Pantalla%202022-04-28%20a%20la(s)%2011.03.15.png" loading="eager" alt="Luz Roja, Luz Verde: Los dos riesgos clave en inversiones personales" class="image cover" /></div>
                                    <div class="card-post-content">
                                        <div class="mg-bottom-12px">
                                            <div class="flex-horizontal align-center children-wrap">
                                                <div class="text-200">Finanzas Personales</div>
                                                <div class="text-divider"></div>
                                                <div class="text-200">May 24, 2022 1:21 PM</div>
                                            </div>
                                        </div>
                                        <h3 class="heading-h3-size">Luz Roja, Luz Verde: Los dos riesgos clave en inversiones personales </h3>
                                        <p class="paragraph-15">La literatura sobre riesgos de inversión se centra en la volatilidad de corto plazo, y no le presta atención al riesgo de no llegar al objetivo</p>
                                    </div>
                                </a></div>
                            <div role="listitem" class="w-dyn-item"><a href="#" class="card link-content post w-inline-block">
                                    <div class="image-wrapper card-post"><img src="https://assets.website-files.com/6254a50daf62983becc003f6/626afae5f25ea226fe2c09a3_image-11.png" loading="eager" alt="Conoce más de <?=$empresa_nombre_solo?> y de cómo invertir mejor" class="image cover" /></div>
                                    <div class="card-post-content">
                                        <div class="mg-bottom-12px">
                                            <div class="flex-horizontal align-center children-wrap">
                                                <div class="text-200">Videos</div>
                                                <div class="text-divider"></div>
                                                <div class="text-200">May 24, 2022 12:53 PM</div>
                                            </div>
                                        </div>
                                        <h3 class="heading-h3-size">Conoce más de <?=$empresa_nombre_solo?> y de cómo invertir mejor</h3>
                                        <p class="paragraph-15">Llegó Blum, la plataforma para invertir en el extranjero de forma simple, segura y de la mano de expertos.</p>
                                    </div>
                                </a></div>
                            <div role="listitem" class="w-dyn-item"><a href="#" class="card link-content post w-inline-block">
                                    <div class="image-wrapper card-post"><img src="https://assets.website-files.com/6254a50daf62983becc003f6/626afab1ae93d8ebc4dd0600_image-9-2-1-1.png" loading="eager" alt="¿Qué es un fondo mutuo? - video" class="image cover" /></div>
                                    <div class="card-post-content">
                                        <div class="mg-bottom-12px">
                                            <div class="flex-horizontal align-center children-wrap">
                                                <div class="text-200">Videos</div>
                                                <div class="text-divider"></div>
                                                <div class="text-200">May 24, 2022 12:52 PM</div>
                                            </div>
                                        </div>
                                        <h3 class="heading-h3-size">¿Qué es un fondo mutuo? - video</h3>
                                        <p class="paragraph-15">En este vídeo, Alfonso nos explica sobre Fondos Mutuos y el acceso que nos ofrecen a los mercados globales.</p>
                                    </div>
                                </a></div>
                            <div role="listitem" class="w-dyn-item"><a href="#" class="card link-content post w-inline-block">
                                    <div class="image-wrapper card-post"><img src="https://assets.website-files.com/6254a50daf62983becc003f6/62682579be39c6cd3c1f0f57_876a845b-6a87-9371-67ec-50494437b053.jpeg" loading="eager" alt="Tu perfil de riesgo" class="image cover" /></div>
                                    <div class="card-post-content">
                                        <div class="mg-bottom-12px">
                                            <div class="flex-horizontal align-center children-wrap">
                                                <div class="text-200"><?=$empresa_nombre_solo?></div>
                                                <div class="text-divider"></div>
                                                <div class="text-200">May 24, 2022 12:49 PM</div>
                                            </div>
                                        </div>
                                        <h3 class="heading-h3-size">Tu perfil de riesgo</h3>
                                        <p class="paragraph-15">Invertir es sobre ti, no sobre los mercados</p>
                                    </div>
                                </a></div>
                        </div>
                        <div role="navigation" aria-label="List" class="w-pagination-wrapper"><a href="?ea69d360_page=2" aria-label="Next Page" class="w-pagination-next btn-secondary pagination">
                                <div class="w-inline-block">Next</div>
                                <div class="line-rounded-icon link-icon-right"></div>
                            </a>
                            <link rel="prerender" href="?ea69d360_page=2" />
                        </div>
                    </div>
                    <div id="w-node-_80403301-cef7-5ec3-1348-cf00469ac910-7dc003cf" class="card popular-posts">
                        <h3 class="display-4 mg-bottom-22px">Artículos más populares</h3>
                        <div id="w-node-_4bd128b0-540a-acec-6787-8af42b721338-7dc003cf" class="w-dyn-list">
                            <div role="list" class="w-dyn-items">
                                <div role="listitem" class="popular-post-item w-dyn-item"><a data-w-id="d1f2e604-99d7-5f72-dd32-3b57c958029b" href="#" class="link-content popular-post w-inline-block">
                                        <div class="text-block-4">June 21, 2022 10:25 AM</div>
                                        <h4 class="heading-h4-size mg-bottom-16px">Cambios en el Contrato de Administración</h4>
                                        <div class="link-wrapper color-primary no-hover">
                                            <div class="link-text">Read more</div>
                                            <div class="line-rounded-icon link-icon-right"></div>
                                        </div>
                                    </a></div>
                                <div role="listitem" class="popular-post-item w-dyn-item"><a data-w-id="d1f2e604-99d7-5f72-dd32-3b57c958029b" href="#" class="link-content popular-post w-inline-block">
                                        <div class="text-block-4">May 24, 2022 1:21 PM</div>
                                        <h4 class="heading-h4-size mg-bottom-16px">Luz Roja, Luz Verde: Los dos riesgos clave en inversiones personales </h4>
                                        <div class="link-wrapper color-primary no-hover">
                                            <div class="link-text">Read more</div>
                                            <div class="line-rounded-icon link-icon-right"></div>
                                        </div>
                                    </a></div>
                                <div role="listitem" class="popular-post-item w-dyn-item"><a data-w-id="d1f2e604-99d7-5f72-dd32-3b57c958029b" href="#" class="link-content popular-post w-inline-block">
                                        <div class="text-block-4">May 24, 2022 12:53 PM</div>
                                        <h4 class="heading-h4-size mg-bottom-16px">Conoce más de <?=$empresa_nombre_solo?> y de cómo invertir mejor</h4>
                                        <div class="link-wrapper color-primary no-hover">
                                            <div class="link-text">Read more</div>
                                            <div class="line-rounded-icon link-icon-right"></div>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
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
                                    <li class="nav-menu-list-item"><a href="/fondos" class="text-200 menu-nav-link">Fondos Blum</a></li>
                                    <li class="nav-menu-list-item"><a href="/blog" aria-current="page" class="text-200 menu-nav-link w--current">Blog</a></li>
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
                                    <li class="nav-menu-list-item"><a href="/fondos" target="_blank" class="text-200 menu-nav-link">BLUM RENTA GLOBAL</a></li>
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
