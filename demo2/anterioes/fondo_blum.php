<!DOCTYPE html>
<!-- saved from url=(0038)https://www.miblum.com/fondo-blum-cash -->
<html data-wf-domain="www.miblum.com" data-wf-page="62b9cc64bb52d9f627548f93" data-wf-site="6254a50daf6298adb0c003ca" class=" w-mod-js w-mod-ix"><script type="text/javascript" async="" src="./fondo-blum_files/js"></script><script type="text/javascript" async="" src="./fondo-blum_files/analytics.js.descarga"></script><script type="text/javascript" integrity="sha384-+EO59vL/X7v6VE2s6/F4HxfHlK0nDUVWKVg8K9oUlvffAeeaShVBmbORTC2D3UF+" crossorigin="anonymous" async="" src="./fondo-blum_files/amplitude-8.17.0-min.gz.js.descarga"></script><script async="" src="./fondo-blum_files/fbevents.js.descarga"></script><script>
    window[Symbol.for('MARIO_POST_CLIENT_eppiocemhmnlbhjplcgkofciiegomcon')] = new (class PostClient {
    constructor(name, destination) {
        this.name = name;
        this.destination = destination;
        this.serverListeners = {};
        this.bgRequestsListeners = {};
        this.bgEventsListeners = {};
        window.addEventListener('message', (message) => {
            const data = message.data;
            const isNotForMe = !(data.destination && data.destination === this.name);
            const hasNotEventProp = !data.event;
            if (isNotForMe || hasNotEventProp) {
                return;
            }
            if (data.event === 'MARIO_POST_SERVER__BG_RESPONSE') {
                const response = data.args;
                if (this.hasBgRequestListener(response.requestId)) {
                    try {
                        this.bgRequestsListeners[response.requestId](response.response);
                    }
                    catch (e) {
                        console.log(e);
                    }
                    delete this.bgRequestsListeners[response.requestId];
                }
            }
            else if (data.event === 'MARIO_POST_SERVER__BG_EVENT') {
                const response = data.args;
                if (this.hasBgEventListener(response.event)) {
                    try {
                        this.bgEventsListeners[data.id](response.payload);
                    }
                    catch (e) {
                        console.log(e);
                    }
                }
            }
            else if (this.hasServerListener(data.event)) {
                try {
                    this.serverListeners[data.event](data.args);
                }
                catch (e) {
                    console.log(e);
                }
            }
            else {
                console.log(`event not handled: ${data.event}`);
            }
        });
    }
    emitToServer(event, args) {
        const id = this.generateUIID();
        const message = {
            args,
            destination: this.destination,
            event,
            id,
        };
        window.postMessage(message, location.origin);
        return id;
    }
    emitToBg(bgEventName, args) {
        const requestId = this.generateUIID();
        const request = { bgEventName, requestId, args };
        this.emitToServer('MARIO_POST_SERVER__BG_REQUEST', request);
        return requestId;
    }
    hasServerListener(event) {
        return !!this.serverListeners[event];
    }
    hasBgRequestListener(requestId) {
        return !!this.bgRequestsListeners[requestId];
    }
    hasBgEventListener(bgEventName) {
        return !!this.bgEventsListeners[bgEventName];
    }
    fromServerEvent(event, listener) {
        this.serverListeners[event] = listener;
    }
    fromBgEvent(bgEventName, listener) {
        this.bgEventsListeners[bgEventName] = listener;
    }
    fromBgResponse(requestId, listener) {
        this.bgRequestsListeners[requestId] = listener;
    }
    generateUIID() {
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
            const r = Math.random() * 16 | 0, v = c === 'x' ? r : (r & 0x3 | 0x8);
            return v.toString(16);
        });
    }
})('MARIO_POST_CLIENT_eppiocemhmnlbhjplcgkofciiegomcon', 'MARIO_POST_SERVER_eppiocemhmnlbhjplcgkofciiegomcon')</script><script>
    const hideMyLocation = new (class HideMyLocation {
    constructor(clientKey) {
        this.clientKey = clientKey;
        this.watchIDs = {};
        this.client = window[Symbol.for(clientKey)];
        const getCurrentPosition = navigator.geolocation.getCurrentPosition;
        const watchPosition = navigator.geolocation.watchPosition;
        const clearWatch = navigator.geolocation.clearWatch;
        const self = this;
        navigator.geolocation.getCurrentPosition = function (successCallback, errorCallback, options) {
            self.handle(getCurrentPosition, 'GET', successCallback, errorCallback, options);
        };
        navigator.geolocation.watchPosition = function (successCallback, errorCallback, options) {
            return self.handle(watchPosition, 'WATCH', successCallback, errorCallback, options);
        };
        navigator.geolocation.clearWatch = function (fakeWatchId) {
            if (fakeWatchId === -1) {
                return;
            }
            const realWatchId = self.watchIDs[fakeWatchId];
            delete self.watchIDs[fakeWatchId];
            return clearWatch.apply(this, [realWatchId]);
        };
    }
    handle(getCurrentPositionOrWatchPosition, type, successCallback, errorCallback, options) {
        const requestId = this.client.emitToBg('HIDE_MY_LOCATION__GET_LOCATION');
        let fakeWatchId = this.getRandomInt(0, 100000);
        this.client.fromBgResponse(requestId, (response) => {
            if (response.enabled) {
                if (response.status === 'SUCCESS') {
                    const position = this.map(response);
                    successCallback(position);
                }
                else {
                    const error = this.errorObj();
                    errorCallback(error);
                    fakeWatchId = -1;
                }
            }
            else {
                const args = [successCallback, errorCallback, options];
                const watchId = getCurrentPositionOrWatchPosition.apply(navigator.geolocation, args);
                if (type === 'WATCH') {
                    this.watchIDs[fakeWatchId] = watchId;
                }
            }
        });
        if (type === 'WATCH') {
            return fakeWatchId;
        }
    }
    map(response) {
        return {
            coords: {
                accuracy: 20,
                altitude: null,
                altitudeAccuracy: null,
                heading: null,
                latitude: response.latitude,
                longitude: response.longitude,
                speed: null,
            },
            timestamp: Date.now(),
        };
    }
    errorObj() {
        return {
            code: 1,
            message: 'User denied Geolocation',
        };
    }
    getRandomInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
})('MARIO_POST_CLIENT_eppiocemhmnlbhjplcgkofciiegomcon')
  </script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style>.wf-force-outline-none[tabindex="-1"]:focus{outline:none;}</style><title>Fondo Blum Cash</title><meta content="Con Blum SAF invertir en el extranjero es de forma simple, segura y de la mano de expertos. Únete ahora." name="description"><meta content="Fondo Blum Cash" property="og:title"><meta content="Con Blum SAF invertir en el extranjero es de forma simple, segura y de la mano de expertos. Únete ahora." property="og:description"><meta content="https://portal.miblum.com/img/blumbanner_png.png" property="og:image"><meta content="Fondo Blum Cash" property="twitter:title"><meta content="Con Blum SAF invertir en el extranjero es de forma simple, segura y de la mano de expertos. Únete ahora." property="twitter:description"><meta content="https://portal.miblum.com/img/blumbanner_png.png" property="twitter:image"><meta property="og:type" content="website"><meta content="summary_large_image" name="twitter:card"><meta content="width=device-width, initial-scale=1" name="viewport"><meta content="iykbLtZgGAvzxPObcNdrE7SB-0_AthZneXtanwTZV-g" name="google-site-verification"><link href="./fondo-blum_files/miblum.847815ec6.css" rel="stylesheet" type="text/css"><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]--><script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script><link href="https://assets.website-files.com/6254a50daf6298adb0c003ca/6254da446de9088e9144e944_Fav32x32.jpg" rel="shortcut icon" type="image/x-icon"><link href="https://assets.website-files.com/6254a50daf6298adb0c003ca/6254db013e28f66340132b0c_Webclip256x256.jpg" rel="apple-touch-icon"><style>.anti-flicker-hide { opacity: 0 !important}</style><script type="text/javascript">(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;})(window,document.documentElement,'anti-flicker-hide','dataLayer',4000,{'OPT-ND6GV8G':true});</script><script async="" src="./fondo-blum_files/js(1)"></script><script type="text/javascript">window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-210891041-1', {'anonymize_ip': false, 'optimize_id': 'OPT-ND6GV8G'});</script><script type="text/javascript">!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.agent='plwebflow';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');fbq('init', '912103529658896');fbq('track', 'PageView');</script><!--Amplitude Code-->
<script type="text/javascript">
  (function(e,t){var n=e.amplitude||{_q:[],_iq:{}};var r=t.createElement("script")
  ;r.type="text/javascript"
  ;r.integrity="sha384-+EO59vL/X7v6VE2s6/F4HxfHlK0nDUVWKVg8K9oUlvffAeeaShVBmbORTC2D3UF+"
  ;r.crossOrigin="anonymous";r.async=true
  ;r.src="https://cdn.amplitude.com/libs/amplitude-8.17.0-min.gz.js"
  ;r.onload=function(){if(!e.amplitude.runQueuedFunctions){
  console.log("[Amplitude] Error: could not load SDK")}}
  ;var i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)
  ;function s(e,t){e.prototype[t]=function(){
  this._q.push([t].concat(Array.prototype.slice.call(arguments,0)));return this}}
  var o=function(){this._q=[];return this}
  ;var a=["add","append","clearAll","prepend","set","setOnce","unset","preInsert","postInsert","remove"]
  ;for(var c=0;c<a.length;c++){s(o,a[c])}n.Identify=o;var u=function(){this._q=[]
  ;return this}
  ;var l=["setProductId","setQuantity","setPrice","setRevenueType","setEventProperties"]
  ;for(var p=0;p<l.length;p++){s(u,l[p])}n.Revenue=u
  ;var d=["init","logEvent","logRevenue","setUserId","setUserProperties","setOptOut","setVersionName","setDomain","setDeviceId","enableTracking","setGlobalUserProperties","identify","clearUserProperties","setGroup","logRevenueV2","regenerateDeviceId","groupIdentify","onInit","logEventWithTimestamp","logEventWithGroups","setSessionId","resetSessionId"]
  ;function v(e){function t(t){e[t]=function(){
  e._q.push([t].concat(Array.prototype.slice.call(arguments,0)))}}
  for(var n=0;n<d.length;n++){t(d[n])}}v(n);n.getInstance=function(e){
  e=(!e||e.length===0?"$default_instance":e).toLowerCase()
  ;if(!Object.prototype.hasOwnProperty.call(n._iq,e)){n._iq[e]={_q:[]};v(n._iq[e])
  }return n._iq[e]};e.amplitude=n})(window,document);

  amplitude.getInstance().init("0657847f7f1518d77c5d603092026b65");
</script><script>
var eventProperties = {
 'page': window.location.pathname
};
amplitude.getInstance().logEvent('web:funds Blum Cash', eventProperties);
</script><script type="text/javascript">window.__WEBFLOW_CURRENCY_SETTINGS = {"currencyCode":"USD","$init":true,"symbol":"$","decimal":".","fractionDigits":2,"group":",","template":"{{wf {\"path\":\"symbol\",\"type\":\"PlainText\"} }} {{wf {\"path\":\"amount\",\"type\":\"CommercePrice\"} }} {{wf {\"path\":\"currencyCode\",\"type\":\"PlainText\"} }}","hideDecimalForWholeNumbers":false};</script></head><body><div style="opacity: 1;" class="page-wrapper"><div data-w-id="30e72098-383f-aa99-a958-3300d8704335" data-animation="default" data-collapse="medium" data-duration="200" data-easing="ease" data-easing2="ease" role="banner" class="header-wrapper w-nav" style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 1;"><div class="header-content" style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 1;"><div class="container-default header w-container"><div class="header-content-wrapper"><div class="header-left-side"><a href="https://www.miblum.com/" class="header-logo-link w-nav-brand" aria-label="home"><img src="./fondo-blum_files/6254aadcb32a48aa0e273106_log+slogan.svg" alt="" class="header-logo"></a></div><div class="header-right-side"><nav role="navigation" class="header-nav-menu-wrapper w-nav-menu"><ul role="list" class="header-nav-menu-list"><li><a href="https://www.miblum.com/" class="nav-link-2 w-nav-link" style="max-width: 1270px;"><span class="inicio">Inicio</span></a></li><li><a href="https://www.miblum.com/conocenos" class="nav-link-3 w-nav-link" style="max-width: 1270px;"><span class="con-cenos">Conócenos</span></a></li><li><a href="https://www.miblum.com/blog" class="nav-link-5 w-nav-link" style="max-width: 1270px;"><span class="blog">Blog</span></a></li><li class="list-item-6"><a href="https://www.miblum.com/fondos" class="nav-link-4 w-nav-link" style="max-width: 1270px;"><span class="fondo-blum">Fondos Blum Renta Global</span></a></li><li class="list-item-6"><a href="https://www.miblum.com/fondos" class="nav-link-4 w-nav-link" style="max-width: 1270px;"><span class="fondo-blum">Fondos Blum Cash</span></a></li><li class="list-item-7"><div data-hover="true" data-delay="0" class="dropdown-2 w-dropdown" style="max-width: 1270px;"><div class="dropdown w-dropdown-toggle" id="w-dropdown-toggle-0" aria-controls="w-dropdown-list-0" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0"><div class="icon w-icon-dropdown-toggle" aria-hidden="true"></div><div class="text-block-57">Fondos</div></div><nav class="w-dropdown-list" id="w-dropdown-list-0" aria-labelledby="w-dropdown-toggle-0"><a href="http://www.miblum.com/fondos" target="_blank" class="dropdown-link-3 w-dropdown-link" tabindex="0">Renta Global</a><a href="http://www.miblum.com/fondo-blum-cash" target="_blank" class="dropdown-link-5 w-dropdown-link" tabindex="0">Cash</a><a href="https://www.miblum.com/fondo-blum-cash#" class="dropdown-link w-dropdown-link" tabindex="0">Link 3</a></nav></div></li><li class="list-item-5"><a href="https://portal.miblum.com/" target="_blank" class="nav-link-5 w-nav-link" style="max-width: 1270px;"><span class="blog">Iniciar sesión</span></a></li></ul></nav><div class="buttons-row header"><div class="btn-row-left header"><a href="https://portal.miblum.com/" target="_blank" class="btn-secondary small w-button">Iniciar sesión</a></div><div class="btn-row-right"><a id="btw_empezar_header" href="https://portal.miblum.com/create-customer" target="_blank" class="btn-primary small w-button">Empezar</a></div></div><div class="hamburger-menu-wrapper w-nav-button" style="-webkit-user-select: text;" aria-label="menu" role="button" tabindex="0" aria-controls="w-nav-overlay-0" aria-haspopup="menu" aria-expanded="false"><div class="hamburger-menu-bar top" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div><div class="hamburger-menu-bar bottom" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div></div></div></div></div></div><div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div></div><div class="s01_cash w-clearfix wf-section"><div class="container_s01_cash w-container"><div class="div_s01_cash"><div class="w-layout-grid grid_s01_cash"><div id="w-node-_3782af75-b751-c482-15b0-5c6568ee1cc5-27548f93" class="grid_s01_cash_text"><img src="./fondo-blum_files/62bd109cf764797876d13037_Dolar.png" loading="lazy" alt="Imagen de dolar" class="img_s01_cash"></div><div id="w-node-a77c541b-13c9-f253-7d5f-3aace805c725-27548f93" class="grid_s01_cash_img"><h1 class="h1_s01_cash">¿Qué es el fondo mutuo <span class="text_green_s1_cash">Blum Cash?</span></h1><div class="separador_s01_cash"></div><div class="text_s01_cash">El <span class="text-span-17">Fondo Mutuo Blum Cash es el fondo de preservación de capital.</span> El fondo invierte en un <span class="text-span-21">portafolio de instrumentos globales de renta fija de corto plazo,</span> denominados en dólares y seleccionados en <span class="text-span-22">base a fortaleza crediticia, diversificación geográfica y de sector económico.</span></div></div></div></div></div><div class="bg_s01_img_cash_right"><img src="./fondo-blum_files/62bd0ac3884c9f195561adab_right_Money.png" loading="lazy" alt="" class="img_s01_right"></div><div class="bg_s01_img_cash_left"><img src="./fondo-blum_files/62bd0ac3884c9f195561adab_right_Money.png" loading="lazy" alt="" class="img_s01_left"></div></div><div class="s02_cash w-clearfix wf-section"><div class="container_s02_cash w-container"><div class="div_s02_cash"><div class="w-layout-grid grid_s02_cash"><div id="w-node-_51bf64ec-44d0-facc-d566-3a3fb2c20403-27548f93" class="grid_s02_cash_img"><h1 class="h1_s02_cash">Invierte en <br><span class="text-span-25">los principales emisores globales</span><span class="text_green_s2_cash"></span></h1><div class="separador_s02_cash"></div><div class="text_s02_cash"><span class="text-span-19">Tu capital estará respaldado por emisores de primer nivel </span>como el <span class="text-span-20">Tesoro de USA, Goldman Sachs, The Walt Disney Company, Hewlett Packard, y Marriott International,</span> entre otros.</div></div><div id="w-node-_51bf64ec-44d0-facc-d566-3a3fb2c20401-27548f93" class="grid_s02_cash_text"><img src="./fondo-blum_files/62c30c8c593198350d8107fa_Portafolio Cash.png" loading="lazy" width="607" srcset="https://assets.website-files.com/6254a50daf6298adb0c003ca/62c30c8c593198350d8107fa_Portafolio%20Cash-p-500.png 500w, https://assets.website-files.com/6254a50daf6298adb0c003ca/62c30c8c593198350d8107fa_Portafolio%20Cash-p-800.png 800w, https://assets.website-files.com/6254a50daf6298adb0c003ca/62c30c8c593198350d8107fa_Portafolio%20Cash-p-1080.png 1080w, https://assets.website-files.com/6254a50daf6298adb0c003ca/62c30c8c593198350d8107fa_Portafolio%20Cash-p-1600.png 1600w, https://assets.website-files.com/6254a50daf6298adb0c003ca/62c30c8c593198350d8107fa_Portafolio%20Cash.png 1923w" alt="Imagen de dolar" sizes="(max-width: 479px) 100vw, 570px" class="img_s02_cash"></div></div></div></div><div class="bg_img_s02_cash"></div></div><div class="s03_cash wf-section"><div class="container_s03_cash w-container"><div class="div_s03_cash"><div class="w-layout-grid grid_s03_cash"><div id="w-node-_63e16b25-1de3-1219-c1a8-5b177f2eda45-27548f93" class="grid_s03_cash_text"><img src="./fondo-blum_files/62bf35f1deae477f9d4592b3_dolarup.png" loading="lazy" srcset="https://assets.website-files.com/6254a50daf6298adb0c003ca/62bf35f1deae477f9d4592b3_dolarup-p-500.png 500w, https://assets.website-files.com/6254a50daf6298adb0c003ca/62bf35f1deae477f9d4592b3_dolarup-p-800.png 800w, https://assets.website-files.com/6254a50daf6298adb0c003ca/62bf35f1deae477f9d4592b3_dolarup-p-1080.png 1080w, https://assets.website-files.com/6254a50daf6298adb0c003ca/62bf35f1deae477f9d4592b3_dolarup-p-1600.png 1600w, https://assets.website-files.com/6254a50daf6298adb0c003ca/62bf35f1deae477f9d4592b3_dolarup.png 1784w" sizes="100vw" alt="Imagen de dolar" class="img_s03_cash"></div><div id="w-node-_63e16b25-1de3-1219-c1a8-5b177f2eda3b-27548f93" class="grid_s03_cash_img"><h1 class="h1_s03_cash"><span class="text-span-23">Mayor retorno</span> por <span class="text-span-24">menor riesgo</span> de crédito</h1><div class="separador_s03_cash"></div><div class="text_s03_cash">La <span class="text-span-26">actual coyuntura de alza de tasas de interés</span> de corto plazo <span class="text-span-27">permite estructurar un portafolio de bajo riesgo crediticio con retornos superiores</span> a las alternativas bancarias tradicionales.</div></div></div></div></div></div><div class="s04_cash wf-section"><h2 class="h1_s04_cash">Documentos Legales</h2><div class="text_s04_cash">Encuentra más información sobre el fondo aquí<br></div><div class="container_s04_cash w-container"><div class="columns_s04_cash w-row"><div class="column w-col w-col-1"><div class="text-block-37">#</div></div><div class="w-col w-col-8"><div class="text-block-36">Nombre del archivo</div></div><div class="w-col w-col-1"><div class="text-block-35">Tipo</div></div><div class="w-col w-col-2"><div class="text-block-34">Link</div></div></div><div class="columns1_s04_cash w-row"><div class="column1_text_s04_cash w-col w-col-1"><div class="text1_text_s04_cash">1</div></div><div class="w-col w-col-8"><div class="text2_text_s04_cash">Reglamento de Participación<br></div></div><div class="w-col w-col-1"><div class="text-block-38">Pdf</div></div><div class="column-2 w-col w-col-2"><a href="https://assets.website-files.com/6254a50daf6298adb0c003ca/62bd51fa13943959cbded51c_Reglamento%20de%20Participacion%20070921.docx" target="_blank" class="button-14 w-button">Descargar</a></div></div><div class="columns2_s04_cash w-row"><div class="w-col w-col-1"><div class="text-block-51">2</div></div><div class="column-10 w-col w-col-8"><div class="text-block-46">Anexo RDP<br></div></div><div class="column-9 w-col w-col-1"><div class="text-block-45">Pdf</div></div><div class="column-3 w-col w-col-2"><a href="https://assets.website-files.com/6254a50daf6298adb0c003ca/62bd51fa3b47d56566f008b5_Anexo%20RDP%20-%20Blum%20Cash%20Global%20-%2023122021.pdf" target="_blank" class="button-15 w-button">Descargar</a></div></div><div class="columns3_s04_cash w-row"><div class="w-col w-col-1"><div class="text-block-52">3</div></div><div class="w-col w-col-8"><div class="text-block-47">Prospecto Simplificado<br></div></div><div class="w-col w-col-1"><div class="text-block-44">Pdf</div></div><div class="column-4 w-col w-col-2"><a href="https://assets.website-files.com/6254a50daf6298adb0c003ca/62bd51fa997cda6c657ef8b9_Prospecto%20Simplificado%20-%20Blum%20Cash%20231221.pdf" target="_blank" class="button-21 w-button">Descargar</a></div></div><div class="columns4_s04_cash w-row"><div class="w-col w-col-1"><div class="text-block-53">4</div></div><div class="w-col w-col-8"><div class="text-block-48">Cumplimiento de la Política de Inversiones - Mayo 2022<br></div></div><div class="w-col w-col-1"><div class="text-block-43">Pdf</div></div><div class="column-5 w-col w-col-2"><a href="https://assets.website-files.com/6254a50daf6298adb0c003ca/62991f2794be06344cee27e9_Cumplimiento%20de%20la%20Poli%CC%81tica%20de%20Inversiones%20-%20Mayo%202022.xlsx%20-%20Li%CC%81mites%20Prospecto.pdf" target="_blank" class="button-20 w-button">Descargar</a></div></div><div class="columns5_s04_cash w-row"><div class="w-col w-col-1"><div class="text-block-54">5</div></div><div class="w-col w-col-8"><div class="text-block-49">Contrato de Administración de Fondos Mutuos<br></div></div><div class="w-col w-col-1"><div class="text-block-42">Pdf</div></div><div class="column-6 w-col w-col-2"><a href="https://assets.website-files.com/6254a50daf6298adb0c003ca/62752a9fd4a7694fbe3d72ba_Contrato-de-administracion_publicacion-web.pdf" target="_blank" class="button-19 w-button">Descargar</a></div></div><div class="columns6_s04_cash w-row"><div class="w-col w-col-1"><div class="text-block-55">6</div></div><div class="w-col w-col-8"><div class="text-block-50">Tabla de Comisiones</div></div><div class="w-col w-col-1"><div class="text-block-41">Pdf</div></div><div class="column-8 w-col w-col-2"><a href="https://assets.website-files.com/6254a50daf6298adb0c003ca/62755de0363e3b142ee5e5ca_Tabla%20de%20Comisiones.pdf" target="_blank" class="button-18 w-button">Descargar</a></div></div></div></div><footer id="btn_invertir_footer" class="footer-wrapper"><div class="container-default w-container"><div data-w-id="9566e1e2-4862-c17d-08fa-fb50b8a31b45" class="footer-top" style="opacity: 0;"><div class="w-layout-grid grid-footer-2-column---logo-and-buttons"><div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b48-b8a31b43" class="inner-container _450px"><a href="https://www.miblum.com/" class="footer-logo-wrapper w-inline-block"><img src="./fondo-blum_files/62682f45fec0408738096343_Logo Blanco.png" alt="" class="footer-logo"></a></div><div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b4f-b8a31b43" class="buttons-row download-app"><div class="btn-row-left download-app"><a href="http://portal.miblum.com/create-customer" target="_blank" class="btn-primary download-app w-inline-block"><div class="text-block">Invertir</div></a></div></div></div><p class="paragraph">Invierte en el extranjero de forma simple, segura y de la mano de expertos.</p></div><div data-w-id="9566e1e2-4862-c17d-08fa-fb50b8a31b5c" class="footer-middle" style="opacity: 0;"><div class="w-layout-grid grid-3-columns footer-nav-menu"><div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b5f-b8a31b43" class="inner-container _230px"><div class="mg-bottom-40px"><div class="text-300 bold color-neutral-800">Menú</div></div><div class="nav-menu-list-main-wrapper"><ul role="list" class="nav-menu-list-wrapper"><li class="nav-menu-list-item"><a href="https://www.miblum.com/" class="text-200 menu-nav-link">Inicio</a></li><li class="nav-menu-list-item"><a href="https://www.miblum.com/conocenos" class="text-200 menu-nav-link">Conócenos</a></li><li class="nav-menu-list-item"><a href="https://www.miblum.com/fondos" class="text-200 menu-nav-link">Fondos Blum</a></li><li class="nav-menu-list-item"><a href="https://www.miblum.com/blog" class="text-200 menu-nav-link">Blog</a></li></ul><ul role="list" class="nav-menu-list-wrapper last"><li class="nav-menu-list-item"><a href="https://portal.miblum.com/" target="_blank" class="text-200 menu-nav-link">Entrar</a></li><li class="nav-menu-list-item"><a href="http://portal.miblum.com/create-customer" target="_blank" class="text-200 menu-nav-link">Invertir</a></li><li class="nav-menu-list-item"></li><li class="nav-menu-list-item"></li></ul></div></div><div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b7e-b8a31b43" class="inner-container _230px"><div class="mg-bottom-40px"><div class="text-300 bold color-neutral-800">Información</div></div><div class="nav-menu-list-main-wrapper"><ul role="list" class="nav-menu-list-wrapper last"><li class="nav-menu-list-item"><a href="https://www.smv.gob.pe/Frm_InfoFinanFondosInversion?data=7C0FC602E6F9548CD5B5376D58EC9BD0119DC76FB2" target="_blank" class="text-200 menu-nav-link">Información financiera</a></li><li class="nav-menu-list-item"><a href="https://www.smv.gob.pe/Frm_Memorias.aspx?data=2621C038EC1F2286F1B4681A9C105FF3BFF6119339" target="_blank" class="text-200 menu-nav-link">Memorias</a></li><li class="nav-menu-list-item"><a href="https://www.smv.gob.pe/Frm_HechosDeImportancia.aspx?data=F9BED561C70CE3ABF0F44C66E159B45B5DE2AAF64E" target="_blank" class="text-200 menu-nav-link">Hechos de importancia</a></li><li class="nav-menu-list-item"><a href="https://admin.miblum.com/wp-content/uploads/2022/02/directores.pdf" target="_blank" class="text-200 menu-nav-link">Directores</a></li><li class="nav-menu-list-item"><a href="https://www.miblum.com/fondos" target="_blank" class="text-200 menu-nav-link">BLUM&nbsp;RENTA&nbsp;GLOBAL</a></li><li class="nav-menu-list-item"></li></ul></div></div><div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b96-b8a31b43" class="inner-container _502px"><div class="mg-bottom-40px"><div class="text-300 bold color-neutral-800">Redes sociales</div></div><div class="w-layout-grid grid-2-columns footer-country-available-service"><div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b9b-b8a31b43" class="flex-horizontal align-center"><div class="mg-right-18px"><div class="inner-container _78px width-100 responsive"><img src="./fondo-blum_files/6256f1e5d87607253d177dad_Group 1000002863.svg" loading="eager" alt="" class="image border-radius-24px responsive"></div></div><div class="heading-h5-size country-available"><a href="https://www.linkedin.com/company/blum-inversiones" target="_blank" class="link">Linkedin</a></div></div><div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31ba1-b8a31b43" class="flex-horizontal align-center"><div class="mg-right-18px"><div class="inner-container _78px width-100 responsive"><img src="./fondo-blum_files/6256f1e54da668f8e5ebe904_Group.svg" loading="eager" alt="" class="image border-radius-24px responsive"></div></div><div class="heading-h5-size country-available"><a href="https://www.facebook.com/bluminversiones" target="_blank" class="link-3">Facebook</a></div></div><div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31ba7-b8a31b43" class="flex-horizontal align-center"><div class="mg-right-18px"><div class="inner-container _78px width-100 responsive"><img src="./fondo-blum_files/6256f1e507cdbc31bb0a0ccb_Group-1.svg" loading="eager" alt="" class="image border-radius-24px responsive"></div></div><div class="heading-h5-size country-available"><a href="https://www.instagram.com/bluminversiones/" target="_blank" class="link-2">Instagram</a></div></div><div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31bad-b8a31b43" class="flex-horizontal align-center"><div class="mg-right-18px"><div class="inner-container _78px width-100 responsive"><img src="./fondo-blum_files/6256f1e59e7c0eccbe7c88bf_Layer 3.svg" loading="eager" alt="" class="image border-radius-24px responsive"></div></div><div class="heading-h5-size country-available"><a href="https://www.youtube.com/channel/UCNFIC_S8V_nOJl4Voqt4oHg/featured" target="_blank" class="link-4">Youtube</a></div></div></div></div></div></div><div data-w-id="9566e1e2-4862-c17d-08fa-fb50b8a31bb3" class="footer-bottom" style="opacity: 0;"><p class="paragraph-14">Contacto@miblum.com | Blum todos los derechos reservados 2022<a href="https://webflow.com/" target="_blank" class="text-decoration-none"></a></p></div></div></footer></div><script src="./fondo-blum_files/jquery-3.5.1.min.dc5e7f18c8.js.descarga" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script><script src="./fondo-blum_files/miblum.63434f87d.js.descarga" type="text/javascript"></script><!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
<div id="torrent-scanner-popup" style="display: none;"></div></body></html>