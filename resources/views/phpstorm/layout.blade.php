<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://www.jetbrains.com">
    <!-- Google Tag Manager -->
    <script>(function() {
            // Initialize Tag Manager queue
            window.dataLayer = window.dataLayer || [];
            // Setup reporting for errors that occurred before Tag Manager initialized
            var prevOnError = window.onerror;
            var onError = function(msg, file, line, col, err) {
                // When Tag Manager initializes it will replace window.onerror handler with its own one
                if (window.onerror === onError) {
                    // Reproduce the behavior of the Tag Manager error handler
                    window.dataLayer.push(makeEvt(msg, file, line));
                }
                prevOnError && prevOnError.apply(window, arguments);
                return false;
            };
            window.onerror = onError;
            // Setup reporting for unhandled Promise rejection errors (Tag Manager doesn't report them yet)
            window.addEventListener("unhandledrejection", function(e) {
                if (!e.reason) return;
                var l = getSrcLocation(e.reason);
                window.dataLayer.push(makeEvt(e.reason.message, l.file, l.line));
            });
            // Setup reporting for console.error and console.warn calls
            patchConsole('error');
            patchConsole('warn');
            // Utility functions
            function patchConsole(fnName) {
                var fn = console[fnName];
                console[fnName] = function() {
                    fn.apply(console, arguments);
                    var l; try {
                        throw new Error('_');
                    } catch (err) {
                        l = getSrcLocation(err, 1);
                    }
                    var msg = 'console.' + fnName + ': ' + Array.prototype.join.call(arguments, ' ');
                    window.dataLayer.push(makeEvt(msg, l.file, l.line));
                };
            }
            function getSrcLocation(err, sd) {
                var s = err && err.stack;
                var l = s && s.split("\n")[1 + (sd|0)];
                var r = l && (/^\s*at [^(]*\((.*?):(\d+)(:\d+)?\)$/.exec(l) || /^\s*at (.*?):(\d+)(:\d+)?$/.exec(l));
                return r ? {file: r[1], line: r[2]} : {};
            }
            function makeEvt(msg, file, line) {
                return {
                    event: "gtm.pageError", "gtm.errorMessage": msg,
                    "gtm.errorUrl": file, "gtm.errorLineNumber": line
                };
            }
        })();</script>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5P98');</script>
    <!-- End Google Tag Manager -->
    <title>Features - PhpStorm</title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
    <meta name="apple-mobile-web-app-title" content="JetBrains">
    <meta name="application-name" content="JetBrains">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000">    <link rel="canonical" href="https://www.jetbrains.com/phpstorm/features/" />    <!-- 64.141-->
    <meta name="description" content="The most intelligent PHP IDE with refactorings, code completion, on-the-fly code analysis and coding productivity orientation"/>

    <meta name="keywords" content="PHP, PHP editor, PHP Development, IDE, automatic refactoring, debugging, PHP Web development with the best HTML, CSS and JavaScript support, JavaScript debugger, Windows, MacOS PHP IDE, Linux PHP IDE, code editing, completion, refactoring and debugging, JetBrains, JetBrain, refactoring, refactoring IDE, integrated development environment, development environment, code editor, code inspection, code refactoring"/>


    <link rel="alternate" hreflang="x-default" href="https://www.jetbrains.com/phpstorm/features/" />







    <script>
        var current_lang = 'en-us';
        var i18n_info = {"current_lang": "en-us", "languages": [{"canonical": "en", "code": "en-us", "label": "English", "page_translated": true, "url": "/phpstorm/features/"}, {"canonical": "de", "code": "de-de", "label": "German", "page_translated": false, "url": "/de-de/phpstorm/features/"}, {"canonical": "es-ES", "code": "es-es", "label": "Spanish", "page_translated": false, "url": "/es-es/phpstorm/features/"}, {"canonical": "fr", "code": "fr-fr", "label": "French", "page_translated": false, "url": "/fr-fr/phpstorm/features/"}, {"canonical": "ja", "code": "ja-jp", "label": "Japanese", "page_translated": false, "url": "/ja-jp/phpstorm/features/"}, {"canonical": "ko", "code": "ko-kr", "label": "Korean", "page_translated": false, "url": "/ko-kr/phpstorm/features/"}, {"canonical": "ru", "code": "ru-ru", "label": "\u0420\u0443\u0441\u0441\u043a\u0438\u0439", "page_translated": false, "url": "/ru-ru/phpstorm/features/"}, {"canonical": "zh-CN", "code": "zh-cn", "label": "Chinese Simplified", "page_translated": false, "url": "/zh-cn/phpstorm/features/"}, {"canonical": "pt-BR", "code": "pt-br", "label": "Brazilian Portuguese", "page_translated": false, "url": "/pt-br/phpstorm/features/"}]};
    </script>



    <link href="/_assets/common.24a29cf026e3dc647508442df3db2f93.css" rel="stylesheet" type="text/css">
    <link href="/_assets/default-page.8253b2f676670482e8d55def480ae236.css" rel="stylesheet" type="text/css">
    <script src="/_assets/common.b34689a18ccfcfc0431e.js" type="text/javascript"></script>
    <script src="/_assets/default-page.c851b76ea790089e451f.js" type="text/javascript"></script>

    <!-- Social Media tag Starts -->
    <!-- Open Graph data -->
    <meta property="og:title" content="Features - PhpStorm"/>

    <meta property="og:description" content="The most intelligent PHP IDE with refactorings, code completion, on-the-fly code analysis and coding productivity orientation"/>
    <meta property="og:image" content="http://resources.jetbrains.com/storage/products/phpstorm/img/meta/phpstorm_1280x800.png"/>

    <meta property="og:site_name" content="JetBrains"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.jetbrains.com/phpstorm/features/"/>
    <!-- Social Media tag Ends -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body ">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5P98" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page _has-page-sidebar-left">
    <div class="page__header">
        <div class="header-popover-content-wrapper _group">

            <div class="header-popover-content" data-popover-group-content-id="header-navigation-tools">
                <div class="wt-container">
                    <div class="wt-row wt-row_size_m wt-row_nowrap">
                        <div class="wt-col-3">
                            <a class="header-container-description" href="/products.html?fromMenu">
                                <div class="header-container-description__logo">
                                    <svg class="_header-find-tool sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#header-find-tool"></use></svg>
                                </div>
                                <div class="header-container-description__title">Find a tool for you</div>
                                <div class="header-container-description__text">Whichever technologies you use there's a JetBrains tool to match</div>
                                <div class="header-container-description__link">find a tool</div>
                            </a>
                        </div>


                        <div class="wt-col-auto-fill">
                            <div class="header-category">
                                <div class="header-category__title text-uppercase">Ides</div>

                                <div class="header-category-items-list">
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/objc/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_appcode sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#appcode"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">AppCode</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/clion/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_clion sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#clion"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">CLion</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="https://datalore.io/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_datalore sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#datalore"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Datalore</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/datagrip/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_datagrip sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#datagrip"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">DataGrip</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/go/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_goland sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#goland"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">GoLand</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/idea/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_intellij-idea sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#intellij-idea"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">IntelliJ IDEA</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/phpstorm/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_phpstorm sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#phpstorm"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">PhpStorm</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/pycharm/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_pycharm sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#pycharm"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">PyCharm</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/rider/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_rider sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#rider"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Rider</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/ruby/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_rubymine sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#rubymine"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">RubyMine</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/webstorm/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_webstorm sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#webstorm"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">WebStorm</span>

                                                  </span>
                                    </a>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="wt-col-auto-fill">
                            <div class="header-category">
                                <div class="header-category__title text-uppercase">.NET &amp; Visual Studio</div>

                                <div class="header-category-items-list">
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/resharper/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_resharper sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#resharper"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">ReSharper</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/rider/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_rider sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#rider"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Rider</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/resharper-cpp/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_resharper-cpp sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#resharper-cpp"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">ReSharper C++</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/dotcover/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_dotcover sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#dotcover"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">dotCover</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/dotmemory/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_dotmemory sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#dotmemory"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">dotMemory</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/decompiler/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_dotpeek sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#dotpeek"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">dotPeek</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/profiler/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_dottrace sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#dottrace"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">dotTrace</span>

                                                  </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="wt-col-auto-fill">
                            <div class="header-category">
                                <div class="header-category__title text-uppercase">Team Tools</div>

                                <div class="header-category-items-list">
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/teamcity/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_teamcity sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#teamcity"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">TeamCity</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/upsource/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_upsource sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#upsource"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Upsource</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/youtrack/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_youtrack sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#youtrack"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">YouTrack</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/hub/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_hub sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#hub"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Hub</span>

                                                  </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="wt-col-auto-fill">
                            <div class="header-category">
                                <div class="header-category__title text-uppercase">Education</div>

                                <div class="header-category-items-list">
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/education/?fromMenu#lang=python&amp;role=learner">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_pycharm-edu sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#pycharm-edu"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">PyCharm Edu</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category  _has-logo-left-action " href="/education/?fromMenu#lang=java&amp;role=learner">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20 _action-logo">
                            <svg class="_intellij-idea sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#intellij-idea"></use></svg>
                          </span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">IntelliJ IDEA Edu</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category " href="/academy/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">JB Academy</span>

                                                  </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="header-separate-border">
                    <div class="wt-container">
                        <div class="wt-row wt-row_size_m">
                            <div class="wt-col-8 wt-offset-left-3">
                                <a class="header-link-item-in-category _justify-left" href="/toolbox/app/?fromMenu">
                                  <span class="header-link-item-in-category__logo-left _full-size-logo _size-50 _toolbox">
                    <svg class="_toolbox sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#toolbox"></use></svg>
                  </span>
                                    <span class="header-link-item-in-category__content _flex">
                <span class="header-link-item-in-category__title _padding-right">Toolbox App</span>
                <span class="header-link-item-in-category__description _font-size-14">A control panel for your tools and projects</span>
              </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-popover-content" data-popover-group-content-id="header-navigation-languages">
                <div class="wt-container">
                    <div class="wt-row wt-row_size_m wt-row_nowrap">
                        <div class="wt-col-4"></div>

                        <div class="wt-col-auto-fill wt-row wt-row_size_m header-category-items-list _without-category">
                            <div class="wt-col-5 wt-col-lg-6">
                                <a class="header-link-item-in-category _without-category  _has-logo-left-action "
                                   href="https://kotlinlang.org/?fromMenu">
                                      <span
                                          class="header-link-item-in-category__logo-left _full-size-logo _size-50 ">
                      <svg class="_header-kotlin-grayscale sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#header-kotlin-grayscale"></use></svg>
                    </span>
                                    <span
                                        class="header-link-item-in-category__logo-left _full-size-logo _size-50  _action-logo">
                      <svg class="_kotlin sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#kotlin"></use></svg>
                    </span>
                                    <span class="header-link-item-in-category__content">
                    <span class="header-link-item-in-category__title">Kotlin</span>

                                          <span class="header-link-item-in-category__description">Programming language <br> for JVM & Android</span>
                                      </span>
                                </a>

                                <a class="header-link-item-in-category _without-category  _has-logo-left-action "
                                   href="/mps/?fromMenu">
                                      <span
                                          class="header-link-item-in-category__logo-left _full-size-logo _size-50 ">
                      <svg class="_header-mps-grayscalse sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#header-mps-grayscalse"></use></svg>
                    </span>
                                    <span
                                        class="header-link-item-in-category__logo-left _full-size-logo _size-50  _action-logo">
                      <svg class="_mps sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#mps"></use></svg>
                    </span>
                                    <span class="header-link-item-in-category__content">
                    <span class="header-link-item-in-category__title">MPS</span>

                                          <span class="header-link-item-in-category__description">Create your own domain-specific language</span>
                                      </span>
                                </a>

                            </div>
                            <div class="wt-col-5 wt-col-lg-6">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="header-popover-content" data-popover-group-content-id="header-navigation-solutions">
                <div class="wt-container">
                    <div class="wt-row wt-row_size_m wt-row_nowrap">
                        <div class="wt-col-4"></div>

                        <div class="wt-col-auto-fill wt-row wt-row_size_m header-category-items-list _without-category">
                            <div class="wt-col-5 wt-col-lg-6">
                                <a class="header-link-item-in-category _without-category  _has-logo-left-action "
                                   href="/cpp/?fromMenu">
                                      <span
                                          class="header-link-item-in-category__logo-left _full-size-logo  _size-70">
                      <svg class="_header-cpp-grayscale sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#header-cpp-grayscale"></use></svg>
                    </span>
                                    <span
                                        class="header-link-item-in-category__logo-left _full-size-logo  _size-70 _action-logo">
                      <svg class="_header-cpp sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#header-cpp"></use></svg>
                    </span>
                                    <span class="header-link-item-in-category__content">
                    <span class="header-link-item-in-category__title">C++ Tools</span>

                                          <span class="header-link-item-in-category__description">Tools for C/C++ development <br>for any platform</span>
                                      </span>
                                </a>

                                <a class="header-link-item-in-category _without-category  _has-logo-left-action "
                                   href="/store/business/?fromMenu">
                                      <span
                                          class="header-link-item-in-category__logo-left _full-size-logo  _size-70">
                      <svg class="_header-for-business-grayscale sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#header-for-business-grayscale"></use></svg>
                    </span>
                                    <span
                                        class="header-link-item-in-category__logo-left _full-size-logo  _size-70 _action-logo">
                      <svg class="_header-for-business sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#header-for-business"></use></svg>
                    </span>
                                    <span class="header-link-item-in-category__content">
                    <span class="header-link-item-in-category__title">For Business</span>

                                          <span class="header-link-item-in-category__description">Wide range of tools. <br>All major technologies covered</span>
                                      </span>
                                </a>

                            </div>
                            <div class="wt-col-5 wt-col-lg-6">
                                <a class="header-link-item-in-category _without-category  _has-logo-left-action "
                                   href="/gamedev/?fromMenu">
                                      <span
                                          class="header-link-item-in-category__logo-left _full-size-logo  _size-70">
                      <svg class="_header-gamedev-grayscale sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#header-gamedev-grayscale"></use></svg>
                    </span>
                                    <span
                                        class="header-link-item-in-category__logo-left _full-size-logo  _size-70 _action-logo">
                      <svg class="_header-gamedev sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#header-gamedev"></use></svg>
                    </span>
                                    <span class="header-link-item-in-category__content">
                    <span class="header-link-item-in-category__title">Game Development</span>

                                          <span class="header-link-item-in-category__description">Tools for game development <br>for any platform</span>
                                      </span>
                                </a>

                                <a class="header-link-item-in-category _without-category  _has-logo-left-action "
                                   href="/devops/?fromMenu">
                                      <span
                                          class="header-link-item-in-category__logo-left _full-size-logo  _size-70">
                      <svg class="_header-devops-grayscale sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#header-devops-grayscale"></use></svg>
                    </span>
                                    <span
                                        class="header-link-item-in-category__logo-left _full-size-logo  _size-70 _action-logo">
                      <svg class="_header-devops sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#header-devops"></use></svg>
                    </span>
                                    <span class="header-link-item-in-category__content">
                    <span class="header-link-item-in-category__title">DevOps</span>

                                          <span class="header-link-item-in-category__description">Tools and integrations <br>for any infrastructure</span>
                                      </span>
                                </a>

                            </div>
                            <div class="wt-col-5 wt-col-lg-6">
                                <a class="header-link-item-in-category _without-category  _has-logo-left-action "
                                   href="/education/?fromMenu">
                                      <span
                                          class="header-link-item-in-category__logo-left _full-size-logo  _size-70">
                      <svg class="_header-education-grayscale sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#header-education-grayscale"></use></svg>
                    </span>
                                    <span
                                        class="header-link-item-in-category__logo-left _full-size-logo  _size-70 _action-logo">
                      <svg class="_header-education sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#header-education"></use></svg>
                    </span>
                                    <span class="header-link-item-in-category__content">
                    <span class="header-link-item-in-category__title">Education</span>

                                          <span class="header-link-item-in-category__description">Products to learn and teach programming</span>
                                      </span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="header-popover-content" data-popover-group-content-id="header-navigation-support">
                <div class="wt-container">
                    <div class="wt-row wt-row_size_m wt-row_nowrap">
                        <div class="wt-col-3">
                            <a class="header-container-description" href="/store/?fromMenu#edition=commercial?fromMenu">
                                <div class="header-container-description__logo">
                                    <svg class="_header-store sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#header-store"></use></svg>
                                </div>
                                <div class="header-container-description__title">JetBrains Store</div>
                                <div class="header-container-description__text">Pricing and licensing for businesses and individuals</div>
                                <div class="header-container-description__link">visit store</div>
                            </a>
                        </div>


                        <div class="wt-col-auto-fill">
                            <div class="header-category">
                                <div class="header-category__title text-uppercase">Customers</div>

                                <div class="header-category-items-list">
                                    <a class="header-link-item-in-category " href="/support/sales/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Sales Support</span>

                                                      <span class="header-link-item-in-category__description">
                              Orders, payments
                          </span>
                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category " href="/support/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Product Support</span>

                                                      <span class="header-link-item-in-category__description">
                              Tech support, documentation
                          </span>
                                                  </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="wt-col-auto-fill">
                            <div class="header-category">
                                <div class="header-category__title text-uppercase">Community Programs</div>

                                <div class="header-category-items-list">
                                    <a class="header-link-item-in-category " href="/community/education/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Education</span>

                                                      <span class="header-link-item-in-category__description">
                              Students, classrooms, training
                          </span>
                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category " href="/community/opensource/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Open Source</span>

                                                      <span class="header-link-item-in-category__description">
                              Projects support
                          </span>
                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category " href="/community/support/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Sponsorship</span>

                                                      <span class="header-link-item-in-category__description">
                              User groups, events, technology experts
                          </span>
                                                  </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="wt-col-auto-fill">
                            <div class="header-category">
                                <div class="header-category__title text-uppercase">Resources</div>

                                <div class="header-category-items-list">
                                    <a class="header-link-item-in-category " href="/resources/newsletters/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Newsletters</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category " href="/resources/webinars/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Webinars</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category " href="/resources/eap/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Early Access</span>

                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category " href="//blog.jetbrains.com/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Blog</span>

                                                  </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <div class="header-popover-content" data-popover-group-content-id="header-navigation-company">
                <div class="wt-container">
                    <div class="wt-row wt-row_size_m wt-row_nowrap">
                        <div class="wt-col-4"></div>


                        <div class="wt-col-auto-fill">
                            <div class="header-category">
                                <div class="header-category__title text-uppercase">Initiatives</div>

                                <div class="header-category-items-list">
                                    <a class="header-link-item-in-category " href="/opensource/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Open Source</span>

                                                      <span class="header-link-item-in-category__description">
                              Projects, contributions
                          </span>
                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category " href="/research/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Research</span>

                                                      <span class="header-link-item-in-category__description">
                              Scientific, marketing research
                          </span>
                                                  </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="wt-col-auto-fill">
                            <div class="header-category">
                                <div class="header-category__title text-uppercase">Company</div>

                                <div class="header-category-items-list">
                                    <a class="header-link-item-in-category " href="/company/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">About</span>

                                                      <span class="header-link-item-in-category__description">
                              People, customers, awards
                          </span>
                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category " href="/company/brand/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Brand Assets</span>

                                                      <span class="header-link-item-in-category__description">
                              Guidelines, logos
                          </span>
                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category " href="/careers/apply/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Careers</span>

                                                      <span class="header-link-item-in-category__description">
                              Jobs, internships
                          </span>
                                                  </span>
                                    </a>
                                    <a class="header-link-item-in-category " href="/company/contacts/?fromMenu">
                                        <span class="jetbrains-logo header-link-item-in-category__logo-left _size-20"></span>
                                        <span class="header-link-item-in-category__content">
                          <span class="header-link-item-in-category__title">Contacts</span>

                                                      <span class="header-link-item-in-category__description">
                              Partners, resellers, Kotlin training
                          </span>
                                                  </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <div class="header-popover-content" data-popover-group-content-id="header-navigation-store">
                <div class="wt-container">
                    <div class="wt-row wt-row_size_m wt-row_nowrap">
                        <div class="wt-col-4"></div>

                        <div class="wt-col-auto-fill wt-row wt-row_size_m header-category-items-list _without-category">
                            <div class="wt-col-5 wt-col-lg-6">
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="header-popover-content" data-popover-group-content-id="header-navigation-search">
                <div class="wt-container">
                    <form class="header-search-container" id="header-search-form" name="formSearch" action="/search/" method="get">
                        <input type="text" class="ja-header-search-input header-search-input" id="header-search" name="q"
                               autocomplete="off"
                               placeholder="Your search query"/>
                        <button class="search-box__button button">Search</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="js-header-secondary header-secondary">
            <div class="wt-container">
                <div class="wt-row wt-row_size_m wt-row_align-items_center wt-row_nowrap">
                    <div class="wt-col-2">
                        <a class="header-secondary__brand "
                           href="/phpstorm/">

          <span class="header-secondary__logo">
                          <span class="jetbrains-logo">
                <svg class="_phpstorm sprite-img" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#phpstorm"></use></svg>
            </span>
                      </span>
                            <span class="header-secondary__title">
            PhpStorm
          </span>
                        </a>
                    </div>
                    <div class="wt-col-auto-fill header-secondary__links-list">
                        <nav class="header-link-list _second _fill-empty-space" aria-label="Secondary section navigation"
                        style="visibility: hidden;">
                            <a href="/phpstorm/eap/" class="header-link-item-second  ">Coming in 2019.2</a>
                            <a href="/phpstorm/whatsnew/" class="header-link-item-second  ">What&#39;s New</a>
                            <a href="/phpstorm/features/" class="header-link-item-second  _active">Features</a>
                            <a href="/phpstorm/documentation/" class="header-link-item-second  ">Learn</a>
                            <a href="/phpstorm/social/" class="header-link-item-second  ">Blog &amp; Social</a>
                            <a href="/phpstorm/buy/" class="header-link-item-second  ">Buy</a>
                        </nav>
                    </div>


                    <div class="wt-col-2 col-inline-xlg" style="visibility: hidden;">
                        <div class="float-right header-link-item-second _button">
                            <a class="header-link-item-second__button" href="/phpstorm/download/">
                                Download
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="js-header-overlay header__overlay"></div>    </div>

    <div class="page__content">

        <div class="section-content article-content">
            <div class="wt-container">
                <h1 class="_big">@yield('title')</h1>
                <h2>@yield('subtitle')</h2>
              {{--
                <div class="wt-row wt-row_size_m">
                    <div class="wt-col-8">
                        <p class="sub-title">PhpStorm is a PHP IDE that actually ‘gets’ your code. It supports
                            PHP 5.3/5.4/5.5/5.6/7.0/7.1/7.2, provides on-the-fly error prevention, best
                            autocompletion & code refactoring, zero configuration debugging, and an extended HTML, CSS, and JavaScript editor.</p>
                    </div>
                </div>
                --}}
                @yield('content')
            </div>
        </div>
    </div>

    <div class="page__footer" id="footer"></div>    </div>
<script>
    (function() {
        var STORAGE_KEY_NAME = 'firefoxDisappearedSVGWorkaround';
        var STORAGE_KEY_VALUE = '1';

        var isFirefox = /firefox/i.test(navigator.userAgent);
        if (!isFirefox || isFirefox && sessionStorage.getItem(STORAGE_KEY_NAME) === STORAGE_KEY_VALUE) {
            return;
        }

        var arrayFrom = function (arrayLike) {
            return Array.prototype.slice.call(arrayLike, 0);
        };

        function workaround() {
            var uses = document.querySelectorAll('.page svg use');
            var badNodesCount = 0;

            arrayFrom(uses).forEach(function (node) {
                var rect = node.getBoundingClientRect();
                if (rect.width === 0 && rect.height === 0)
                    badNodesCount++;
            });

            if (badNodesCount === uses.length) {
                sessionStorage.setItem(STORAGE_KEY_NAME, STORAGE_KEY_VALUE);
                if (typeof dataLayer !== 'undefined')
                    dataLayer.push({'firefoxDisappearedSVGWorkaround': STORAGE_KEY_VALUE});

                window.location.replace(window.location.href);
            }
        }

        window.addEventListener('DOMContentLoaded', workaround);

    })();
</script>      <script src="/_assets/banner-rotator.entry.e68c44e796d4d82462ad.js" type="text/javascript"></script>
<link href="/_assets/banner-rotator.entry.875ff22261827269cce7cb3a9f3affbb.css" rel="stylesheet" type="text/css">

<script>
    (function () {

        'use strict';

        function ImagesSrcReplacer () {

            var attribute = 'data-src';
            var matches = document.querySelectorAll('img[' + attribute + ']');

            for (var i = 0, n = matches.length; i < n; i++) {

                var attrValue = matches[i].getAttribute(attribute);

                if (_isHighDensity ()) {

                    var name = attrValue.substring(0, attrValue.lastIndexOf('.'));
                    var extention = attrValue.substring(attrValue.lastIndexOf('.'), attrValue.length);

                    matches[i].setAttribute('src', name + '@2x' + extention);

                } else {
                    matches[i].setAttribute('src', attrValue)
                }
            }

            /**
             * Detect high density
             * @returns {*|boolean}
             */
            function _isHighDensity () {
                return (
                    (window.matchMedia &&
                        (window.matchMedia('only screen and (min-resolution: 124dpi), only screen and (min-resolution: 1.3dppx), only screen and (min-resolution: 48.8dpcm)').matches ||
                            window.matchMedia('only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen and (-o-min-device-pixel-ratio: 2.6/2), only screen and (min--moz-device-pixel-ratio: 1.3), only screen and (min-device-pixel-ratio: 1.3)').matches)) ||
                    (window.devicePixelRatio &&
                        window.devicePixelRatio > 1.3));
            }
        }

        return new ImagesSrcReplacer()

    }(document, window));
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
