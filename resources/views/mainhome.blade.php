<?php
$page = 'all';
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
?>
<!doctype html>
<html lang="en-US" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <title>GMS</title>
        <meta name="robots" content="max-image-preview:large">
        <link
            rel="alternate"
            type="application/rss+xml"
            title="Bitrader &raquo; Feed"
            href="/dark/feed/"
        >
        <link
            rel="alternate"
            type="application/rss+xml"
            title="Bitrader &raquo; Comments Feed"
            href="/dark/comments/feed/"
        >
        <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/bitrader.thetork.com\/dark\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.2"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
        </script>
        <style id="wp-emoji-styles-inline-css" type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
        </style>
        <link
            rel="stylesheet"
            id="wp-block-library-css"
            href="/dark/wp-includes/css/dist/block-library/style.min.css?ver=6.5.2"
            type="text/css"
            media="all"
        >
        <style id="wp-block-library-theme-inline-css" type="text/css">
        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: #ffffffa6
        }

        .wp-block-audio {
            margin: 0 0 1em
        }

        .wp-block-code {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Menlo, Consolas, monaco, monospace;
            padding: .8em 1em
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: #ffffffa6
        }

        .wp-block-embed {
            margin: 0 0 1em
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .blocks-gallery-caption {
            color: #ffffffa6
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-image figcaption {
            color: #ffffffa6
        }

        .wp-block-image {
            margin: 0 0 1em
        }

        .wp-block-pullquote {
            border-bottom: 4px solid;
            border-top: 4px solid;
            color: currentColor;
            margin-bottom: 1.75em
        }

        .wp-block-pullquote cite,
        .wp-block-pullquote footer,
        .wp-block-pullquote__citation {
            color: currentColor;
            font-size: .8125em;
            font-style: normal;
            text-transform: uppercase
        }

        .wp-block-quote {
            border-left: .25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: .8125em;
            font-style: normal;
            position: relative
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: .25em solid;
            padding-left: 0;
            padding-right: 1em
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large,
        .wp-block-quote.is-style-plain {
            border: none
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700
        }

        .wp-block-search__button {
            border: 1px solid #ccc;
            padding: .375em .625em
        }

        :where(.wp-block-group.has-background) {
            padding: 1.25em 2.375em
        }

        .wp-block-separator.has-css-opacity {
            opacity: .4
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto
        }

        .wp-block-separator.has-alpha-channel-opacity {
            opacity: 1
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px
        }

        .wp-block-table {
            margin: 0 0 1em
        }

        .wp-block-table td,
        .wp-block-table th {
            word-break: normal
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-table figcaption {
            color: #ffffffa6
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-video figcaption {
            color: #ffffffa6
        }

        .wp-block-video {
            margin: 0 0 1em
        }

        .wp-block-template-part.has-background {
            margin-bottom: 0;
            margin-top: 0;
            padding: 1.25em 2.375em
        }
        </style>
        <style id="classic-theme-styles-inline-css" type="text/css">
        /*! This file is auto-generated */

        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
        </style>
        <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
        </style>
        <link
            rel="stylesheet"
            id="contact-form-7-css"
            href="/dark/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.8.1"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="hfe-style-css"
            href="/dark/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.6.16"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="elementor-icons-css"
            href="/dark/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.23.0"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="elementor-frontend-css"
            href="/dark/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.16.5"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="swiper-css"
            href="/dark/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="elementor-post-7-css"
            href="/dark/wp-content/uploads/elementor/css/post-7.css?ver=1697351777"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="elementor-global-css"
            href="/dark/wp-content/uploads/elementor/css/global.css?ver=1697351777"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="elementor-post-67-css"
            href="/dark/wp-content/uploads/elementor/css/post-67.css?ver=1697352569"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="hfe-widgets-style-css"
            href="/dark/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.16"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="elementor-post-367-css"
            href="/dark/wp-content/uploads/elementor/css/post-367.css?ver=1697351777"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="bitrader-custom-css"
            href="/dark/wp-content/themes/bitrader/assets/css/bitrader-custom.css?ver=6.5.2"
            type="text/css"
            media="all"
        >
        <style id="bitrader-custom-inline-css" type="text/css">
        html:root {
            /* --brand-color: #3b3bf9 */
            --brand-color: #00D094
        }

        html:root {
            --secondary-color: #3b3bf9
        }
        /* color: #3b3bf9; */
        </style>
        <link
            rel="stylesheet"
            id="bitrader-fonts-css"
            href="/dark/wp-content/themes/bitrader/assets/css/bitrader-fonts.css?ver=6.5.2"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="bootstrap-css"
            href="/dark/wp-content/themes/bitrader/assets/css/bootstrap.min.css?ver=6.5.2"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="font-awesome-free-css"
            href="/dark/wp-content/themes/bitrader/assets/css/fontawesome-all.min.css?ver=6.5.2"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="aos-css"
            href="/dark/wp-content/themes/bitrader/assets/css/aos.css?ver=6.5.2"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="bitrader-core-css"
            href="/dark/wp-content/themes/bitrader/assets/css/bitrader-core.css?ver=6.5.2"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="bitrader-unit-css"
            href="/dark/wp-content/themes/bitrader/assets/css/bitrader-unit.css?ver=6.5.2"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="bitrader-style-css"
            href="/dark/wp-content/themes/bitrader/style.css?ver=6.5.2"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="google-fonts-1-css"
            href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CAnek+Telugu%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.5.2"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="elementor-icons-shared-0-css"
            href="/dark/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3"
            type="text/css"
            media="all"
        >
        <link
            rel="stylesheet"
            id="elementor-icons-fa-brands-css"
            href="/dark/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3"
            type="text/css"
            media="all"
        >
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="/dark/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
        <script type="text/javascript" src="/dark/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
        <link rel="https://api.w.org/" href="/dark/wp-json/">
        <link rel="alternate" type="application/json" href="/dark/wp-json/wp/v2/pages/67">
        <link
            rel="EditURI"
            type="application/rsd+xml"
            title="RSD"
            href="/dark/xmlrpc.php?rsd"
        >
        <meta name="generator" content="WordPress 6.5.2">
        <link rel="canonical" href="/dark/">
        <link rel="shortlink" href="/dark/">
        <link rel="alternate" type="application/json+oembed" href="/dark/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fbitrader.thetork.com%2Fdark%2F">
        <link rel="alternate" type="text/xml+oembed" href="/dark/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fbitrader.thetork.com%2Fdark%2F&#038;format=xml">
        <meta name="generator" content="Elementor 3.16.5; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
        <link rel="icon" href="/tst/grnyellow.png" sizes="32x32">
        <link rel="icon" href="/tst/grnyellow.png" sizes="192x192">
        <link rel="apple-touch-icon" href="/tst/grnyellow.png">
        <meta name="msapplication-TileImage" content="/tst/grnyellow.png">
        <style id="kirki-inline-styles"></style>
    </head>
    <body class="home page-template page-template-elementor_header_footer page page-id-67 wp-embed-responsive ehf-footer ehf-template-bitrader ehf-stylesheet-bitrader no-sidebar elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-67">
        <!-- preloader -->
        <!-- <div class="preloader">
            <img src="/tst/grnyellow.png" style="max-height: 60px" alt="Preloader">
        </div> -->
        <!-- preloader-end -->
        <!-- <a href="javascript:void(0)" class="scrollToTop scroll__top scroll-to-target scrollToTop--home1" data-target="html">
            <i class="fas fa-angle-up"></i>
        </a> -->
        <!-- HEADER -->
        @if($page == 'all')
        <header id="stick-header" class="header-section header-section--style2">
            <div class="header-bottom">
                <div class="container">
                    <div class="header-wrapper">
                        <div class="logo">
                            <a class="main-logo" href="/dark/" style="display: flex; justify-content: center;">
                                <img src="/tst/grnyellow.png" style="max-height: 60px" alt="Logo">
                            </a>
                            <h3 style="text-align: center;">GMS</h3>
                            <h3 style="text-align: center; font-size: 13px;">Global Markets Stars</h3>
                        </div>
                        <div class="menu-area menu--style1">
                            <ul id="menu-main-menu" class="main-menu">
                            <li
                                    itemscope="itemscope"
                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                    id="menu-item-826"
                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children dropdown has-dropdown active menu-item-826 nav-item"
                                >
                                    <a title="Home" href="#" class="nav-links">Home</a>
                                    <ul class="sub-menu" role="menu">
                                        <li
                                            itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement"
                                            id="menu-item-816"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-67 current_page_item active menu-item-816 nav-item"
                                        >
                                            <a title="Home Stock" href="#our-values" class="dropdown-items">Our Values</a>
                                        </li>
                                        <li
                                            itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement"
                                            id="menu-item-816"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-67 current_page_item active menu-item-816 nav-item"
                                        >
                                            <a title="Home Stock" href="#the-benefits" class="dropdown-items">Benefits</a>
                                        </li>
                                        <li
                                            itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement"
                                            id="menu-item-816"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-67 current_page_item active menu-item-816 nav-item"
                                        >
                                            <a title="Home Stock" href="#market-analysis" class="dropdown-items">Market Analysis</a>
                                        </li>
                                        <li
                                            itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement"
                                            id="menu-item-816"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-67 current_page_item active menu-item-816 nav-item"
                                        >
                                            <a title="Home Stock" href="#invest-plans" class="dropdown-items">Invest Plans</a>
                                        </li>
                                        <li
                                            itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement"
                                            id="menu-item-816"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-67 current_page_item active menu-item-816 nav-item"
                                        >
                                            <a title="Home Stock" href="#growth-testing" class="dropdown-items">Growth Testing</a>
                                        </li>
                                        <li
                                            itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement"
                                            id="menu-item-816"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-67 current_page_item active menu-item-816 nav-item"
                                        >
                                            <a title="Home Stock" href="#the-management" class="dropdown-items">Management</a>
                                        </li>
                                        <li
                                        itemscope="itemscope"
                                        itemtype="https://www.schema.org/SiteNavigationElement"
                                        id="menu-item-826"
                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children dropdown has-dropdown active menu-item-826 nav-item"
                                    >
                                        <a title="Home" href="#ai-trading" class="nav-links">AI Trading</a>
                                        <ul class="sub-menu" role="menu">
                                            <li
                                                itemscope="itemscope"
                                                itemtype="https://www.schema.org/SiteNavigationElement"
                                                id="menu-item-816"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-67 current_page_item active menu-item-816 nav-item"
                                            >
                                                <a title="Home Stock" href="#arbitrage-bot" class="dropdown-items">Arbitrage Bot</a>
                                            </li>
                                            <li
                                                itemscope="itemscope"
                                                itemtype="https://www.schema.org/SiteNavigationElement"
                                                id="menu-item-816"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-67 current_page_item active menu-item-816 nav-item"
                                            >
                                                <a title="Home Stock" href="#risk-free" class="dropdown-items">Invest Risk Free</a>
                                            </li>
                                            <li
                                                itemscope="itemscope"
                                                itemtype="https://www.schema.org/SiteNavigationElement"
                                                id="menu-item-816"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-67 current_page_item active menu-item-816 nav-item"
                                            >
                                                <a title="Home Stock" href="#low-latency" class="dropdown-items">Low Latency Execution</a>
                                            </li>
                                            <li
                                                itemscope="itemscope"
                                                itemtype="https://www.schema.org/SiteNavigationElement"
                                                id="menu-item-816"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-67 current_page_item active menu-item-816 nav-item"
                                            >
                                                <a title="Home Stock" href="#quant-team" class="dropdown-items">Dedicated Quant Team</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li
                            itemscope="itemscope"
                            itemtype="https://www.schema.org/SiteNavigationElement"
                            id="menu-item-818"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-818 nav-item"
                        >
                            <a title="About Us" href="/?page=aboutus" class="nav-links">About Us</a>
                        </li>

                            <li
                                itemscope="itemscope"
                                itemtype="https://www.schema.org/SiteNavigationElement"
                                id="menu-item-818"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-818 nav-item"
                            >
                                <a title="About Us" href="#our-mission" class="nav-links">Our Mission</a>
                            </li>
                            <li
                                itemscope="itemscope"
                                itemtype="https://www.schema.org/SiteNavigationElement"
                                id="menu-item-818"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-818 nav-item"
                            >
                                <a title="About Us" href="#our-vision" class="nav-links">Our Vision</a>
                            </li>
                            <!-- <li
                                itemscope="itemscope"
                                itemtype="https://www.schema.org/SiteNavigationElement"
                                id="menu-item-818"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-818 nav-item"
                            >
                                <a title="About Us" href="#gms-academy" class="nav-links">GMS Academy</a>
                            </li> -->
                            <li
                                itemscope="itemscope"
                                itemtype="https://www.schema.org/SiteNavigationElement"
                                id="menu-item-818"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-818 nav-item"
                            >
                                <a title="About Us" href="/all/calculator?amnt=100&typ=compound" class="nav-links">Package Calculation</a>
                            </li>
                                <li
                                    itemscope="itemscope"
                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                    id="menu-item-819"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-819 nav-item"
                                >
                                    <a title="Contact Us" href="#colophon" class="nav-links">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header-action">
                            <div class="menu-area">
                                <div class="header-btn">
                                    <a href="/login" class="member-login-btn trk-btn trk-btn--border trk-btn--primary">
                                        <span>Member Login</span>
                                    </a>
                                </div>
                                <!-- toggle icons -->
                                <div class="header-bar d-lg-none header-bar--style1">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @endif
        <style>
            
        @media (max-width: 767px) {
            .header-wrapper .menu-area .header-btn {
                display: flex !important;
                margin-top: 30px;
            }
            .menu-area{
                flex-direction: column-reverse;
            }
        }

            .member-login-btn{
                /* background-color: #3b3bf9 !important;
                border-color: #3b3bf9 !important; */
                box-shadow: 0px 4px 20px 4px #00D094;
                animation: blnking 2s ease-in-out infinite;
                /* color: white !important; */
            }
            .member-login-btn {
        /* transform: translateX(-10px); */
    animation: blinking 2s ease-in-out infinite;
    box-shadow: 0px 4px 40px 4px #00D094;
}

@keyframes blinking {
    0% {
        /* transform: translateX(-10px); */
                box-shadow: 0px 1px 10px 1px #00D094;
    }
    50% {
    /* transform: translateX(10px); */
                box-shadow: 0px 1px 40px 1px #00D094;
    }
    100% {
    /* transform: translateX(-10px); */
                box-shadow: 0px 1px 10px 1px #00D094;
    }
}
            .member-login-btn:hover{
                background-color: #00D094 !important;
                border-color: #00D094 !important;
            }
            .get-started-btn{
                background-color: #3b3bf9 !important;
                border-color: #3b3bf9 !important;
            }
            .get-started-btn:hover{
                /* background-color: #00D094 !important; */
                /* border-color: #00D094 !important; */
            }
            .watch-video-btn{
                background-color: #00D094 !important;
               color: #fff !important;
               border-color: transparent !important;
                /* border-color: #3b3bf9 !important;
                color: #3b3bf9 !important;
                border-color: #3b3bf9 !important; */
            }
            .watch-video-btn:hover{
                background-color: #00D094 !important;
               color: #fff !important;
            }
            .watch-svg svg g path{
                /* fill: #3b3bf9; */
                stroke: #fff !important;
            }
            .watch-svg svg rect{
                /* fill: #3b3bf9;S */
                stroke: #fff !important;
            }
            .banner-title span{
                color: #3b3bf9 !important;
            }
            .sectioncards{
                background-color: #1c2e2a9c !important;
                padding: 20px !important;
                border-radius: 10px !important;
                margin: 50px auto !important;
            }
            @media (max-width: 1024px) and (min-width: 768px) {
    .elementor-67 .elementor-element.elementor-element-47b6712 {
        --content-width: 90% !important;
    }
}
/* @media (min-width: 1024) {
    .elementor-67 .elementor-element.elementor-element-47b6712 {
        --content-width: 70% !important;
    }
} */
    .about__thumb-image.floating-content {
                        display: flex;
                        justify-content: center;
                    }
@media (max-width: 1024px) {
    .elementor-67 .elementor-element.elementor-element-3d03e0f {
        --padding-block-start: 40px !important;
        --padding-block-end: 40px !important;
    }
}
        </style>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        >
        <!-- main-area -->
        <main class="main-area fix">
            <div data-elementor-type="wp-page" data-elementor-id="67" class="elementor elementor-67">
             
                <!-- banner -->
                @if($page == 'all')
                <div
                    class="elementor-element elementor-element-25a533a e-con-full e-flex e-con e-parent"
                    data-id="25a533a"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    data-core-v316-plus="true"
                >
                    <div
                        class="elementor-element elementor-element-2ac0b36 elementor-widget elementor-widget-hero-banner"
                        data-id="2ac0b36"
                        data-element_type="widget"
                        data-widget_type="hero-banner.default"
                    >
                        <div class="elementor-widget-container">
                            <script>
                            jQuery(document).ready(function($) {

                                AOS.init();

                            });
                            </script>
                            <section class="banner banner--style1 tg-section">
                                <div class="banner__bg">
                                    <div class="banner__bg-element">
                                        <img
                                            decoding="async"
                                            src="/dark/wp-content/uploads/2023/10/banner_bg_dark.png"
                                            alt="section-bg-element"
                                            class="dark d-none d-lg-block"
                                        >
                                        <span class="bg-color d-lg-none"></span>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="banner__wrapper">
                                        <div class="row gy-5 gx-4">
                                            <div class="col-lg-6 col-md-7">
                                                <div class="banner__content tg-content" data-aos="fade-right" data-aos-duration="1000">
                                                    <div class="banner__content-coi">
                                                        <div style="height: 80px;"></div>
                                                        <img
                                                            decoding="async"
                                                            style="height: 160px; display: none;"
                                                            src="https://media4.giphy.com/media/OccMlQrNO0YU4zFchY/source.gif"
                                                            alt="Coin icon"
                                                        >
                                                    </div>
                                                    <h1 class="banner-title banner__content-heading title">
                                                        Rule of success
                                                        <span>Never give up</span>
                                                        Keep on Trading
                                                    </h1>
                                                    <p class="banner__content-moto">
                                                        Anyone can invest money to different currency to increase their earnings by the help of GMS through online.
                                                    </p>
                                                    <div class="banner__btn-group btn-group">
                                                        <a
                                                            href="/login"
                                                            target="_self"
                                                            style="color: #fff !important;"
                                                            rel="nofollow"
                                                            class="get-started-btn trk-btn trk-btn--primary trk-btn--arrow"
                                                        >
                                                            Get Started
                                                            <span>
                                                                <i class="fas fa-arrow-right"></i>
                                                            </span>
                                                        </a>
                                                        <a href="https://youtu.be/_Fyk9pQ1Opw" class="watch-video-btn trk-btn trk-btn--outline22" data-fslightbox>
                                                            <span class="style1 watch-svg">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                >
                                                                    <g clip-path="url(#clip0_1397_814)">
                                                                        <path
                                                                            d="M10.5547 7.03647C9.89015 6.59343 9 7.06982 9 7.86852V16.1315C9 16.9302 9.89015 17.4066 10.5547 16.9635L16.7519 12.8321C17.3457 12.4362 17.3457 11.5638 16.7519 11.1679L10.5547 7.03647Z"
                                                                            stroke="#0A4FD5"
                                                                            stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        />
                                                                    </g>
                                                                    <rect
                                                                        x="-0.75"
                                                                        y="0.75"
                                                                        width="22.5"
                                                                        height="22.5"
                                                                        rx="11.25"
                                                                        transform="matrix(-1 0 0 1 22.5 0)"
                                                                        stroke="#0A4FD5"
                                                                        stroke-width="1.5"
                                                                    />
                                                                    <defs>
                                                                        <clipPath id="clip0_1397_814">
                                                                            <rect width="24" height="24" fill="white"/>
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </span>
                                                            Watch Video
                                                        </a>
                                                        <!-- <img
                                                            decoding="async"
                                                            style="height: 140px;"
                                                            src="https://cdn.pixabay.com/animation/2023/07/26/00/20/00-20-51-158_512.gif"
                                                            alt="Coin icon"
                                                        > -->
                                                    </div>
                                                    <div class="banner__content-social">
                                                        <p>Follow Us</p>
                                                        <ul class="social">
                                                            <li class="social__item">
                                                                <a href="#" class="social__link social__link--style1">
                                                                    <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social__item">
                                                                <a href="#" class="social__link social__link--style1">
                                                                    <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social__item">
                                                                <a href="#" class="social__link social__link--style1">
                                                                    <i aria-hidden="true" class="fab fa-instagram"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social__item">
                                                                <a href="#" class="social__link social__link--style1">
                                                                    <i aria-hidden="true" class="fab fa-youtube"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social__item">
                                                                <a href="#" class="social__link social__link--style1">
                                                                    <i aria-hidden="true" class="fab fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-5">
                                                <div class="banner__thumb" data-aos="fade-left" data-aos-duration="1000">
                                                    <img
                                                        style="height: 398px;"
                                                        decoding="async"
                                                        src="https://media4.giphy.com/media/OccMlQrNO0YU4zFchY/source.gif"
                                                        alt=""
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner__shape">
                                    <span class="banner__shape-item banner__shape-item--1">
                                        <img
                                            decoding="async"
                                            src="/wp-content/uploads/2023/10/4.png"
                                            width="43"
                                            alt="shape icon"
                                        >
                                    </span>
                                </div>
                            </section>
                            <!-- banner-area-end /imgs-->
                        </div>
                    </div>
                </div>
                @endif

                <!-- scroll images -->
                <!-- <div
                    class="elementor-element elementor-element-ee44b74 e-con-full e-flex e-con e-parent"
                    data-id="ee44b74"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    data-core-v316-plus="true"
                >
                    <div
                        class="elementor-element elementor-element-5433ca4 elementor-widget elementor-widget-brand"
                        data-id="5433ca4"
                        data-element_type="widget"
                        data-widget_type="brand.default"
                    >
                        <div class="elementor-widget-container">
                            <script>
                            jQuery(document).ready(function($) {

                                // component slider here
                                const Partner = new Swiper('.partner__slider', {
                                    spaceBetween: 24,
                                    grabCursor: true,
                                    loop: true,
                                    slidesPerView: 2,
                                    breakpoints: {
                                        576: {
                                            slidesPerView: 3,
                                        },
                                        768: {
                                            slidesPerView: 4,
                                        },
                                        992: {
                                            slidesPerView: 5,
                                            spaceBetween: 15,
                                        },
                                        1200: {
                                            slidesPerView: 6,
                                            spaceBetween: 25,
                                        },
                                    },
                                    autoplay: {
                                        delay: 1,
                                        disableOnInteraction: true,
                                    },
                                    speed: 2000,
                                });

                            });
                            </script>
                            <div class="partner partner--gradient tg-section">
                                <div class="container">
                                    <div class="partner__wrapper">
                                        <div class="partner__slider swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="partner__item">
                                                        <div class="partner__item-inner">
                                                            <a href="#">
                                                                <img decoding="async" src="/dark/wp-content/uploads/2023/10/barnd01.png" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="partner__item">
                                                        <div class="partner__item-inner">
                                                            <a href="#">
                                                                <img decoding="async" src="/dark/wp-content/uploads/2023/10/barnd02.png" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="partner__item">
                                                        <div class="partner__item-inner">
                                                            <a href="#">
                                                                <img decoding="async" src="/dark/wp-content/uploads/2023/10/barnd_dark03.png" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="partner__item">
                                                        <div class="partner__item-inner">
                                                            <a href="#">
                                                                <img decoding="async" src="/dark/wp-content/uploads/2023/10/barnd_dark04.png" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="partner__item">
                                                        <div class="partner__item-inner">
                                                            <a href="#">
                                                                <img decoding="async" src="/dark/wp-content/uploads/2023/10/barnd_dark05.png" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="partner__item">
                                                        <div class="partner__item-inner">
                                                            <a href="#">
                                                                <img decoding="async" src="/dark/wp-content/uploads/2023/10/barnd06.png" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <style>
                    /*! elementor - v3.16.0 - 09-10-2023 */

                    .elementor-heading-title {
                        padding: 0;
                        margin: 0;
                        line-height: 1
                    }

                    .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                        color: inherit;
                        font-size: inherit;
                        line-height: inherit
                    }

                    .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                        font-size: 15px
                    }

                    .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                        font-size: 19px
                    }

                    .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                        font-size: 29px
                    }

                    .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                        font-size: 39px
                    }

                    .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                        font-size: 59px
                    }
                </style>


                   <style>
                   
                       .stticky{
                       
                       }
                       .stticky-fixed{
                           position: fixed;
                           top: 0;
                           left: 0;
                           right: 0;
                         padding: 10px 20px;
                         color: #fff !important;
                         background: var(--secondary-color);
                         z-index: 100;
                           height: auto !important;
                           opacity: 1 !important;
                       }
                       .stticky-text {
                         opacity: 0;
                         height: 0px;
                       }
                       .sec-top-img{
                        display: flex !important;
                         align-items: start !important;
                       }
                    </style>

                <!-- About-Us -->
                @if($page == 'all' || $page == 'aboutus')
                <div class="stticky">
                <div class="stticky-text">About US</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="about-us"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards sec-top-img">
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title banner-title elementor-size-default">
                                        ABOUT
                                        <span style="color: var(--secondary-color);">US</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                            <style>
                                .about-p span{
                                    color: #fff;
                                }
                            </style>
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default about-p">
                                        “GMS is an Artificial Intelligence Robot that analyzes market Direction such as Forex, cryptocurrencies and Volatility Index market. It also predicts future trades by using market killer trading strategy with the idea of price action.
                                      <br>
                                      <br>
                                      Artificial intelligence is a machines that are programmed to think like humans and mimic their actions. With the use of AI-Trading-Bot, we have been able to minimize loses in the Forex / Cryptocurrencies market and we have also extends AI Trading-Bot to trade on both spot and future trade. AI-Trading-Bot has been programmed in such a way that, it can place trade and generate profits when markets are bad by trading on the futures market.
                                  </p>
                                    
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    @if($page == 'all')
                                     <a
                                       href="/?page=aboutus"
                                        target="_self"
                                        rel="nofollow"
                                        style="background-color: #3b3bf9; border-color: #3b3bf9;"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            style="margin-top: 30px;"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://www.shutterstock.com/image-photo/business-people-reviewing-data-on-600nw-2215199777.jpg"
                                                    alt=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                @endif


                @if($page == 'aboutus')
                <!-- Develop a Trading Plan -->
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-values"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img decoding="async" style="height: 298px;" src="https://a.c-dn.net/b/2AEsF4/GettyImages-1158166358.jpg" alt="">
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        <span style="color: var(--secondary-color);">Develop a Trading Plan</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default about-p">
                                        "A well-defined trading plan should outline your entry, exit, and money management strategies. It’s essential to backtest your trading plan using historical data to ensure its viability before applying it to real trades."
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!-- <a
                                        href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Treat Trading as a Business -->
                <div
                class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                data-id="47b6712"
                id="our-values"
                data-element_type="container"
                data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                data-core-v316-plus="true"
            >
                <div class="e-con-inner sectioncards">
                    <div
                        class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                        data-id="f496e11"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                            data-id="2a404d7"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    <span style="color: var(--secondary-color);">Treat Trading as a Business</span>
                                </h2>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                            data-id="77c0134"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default about-p">
                                    "Approach trading seriously and understand that it involves expenses, losses, taxes, and risks. By treating it as a business, you can create a structured approach to maximize your potential."
                                </p>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                            data-id="211649c"
                            data-element_type="widget"
                            data-widget_type="tg-btn.default"
                        >
                            <div class="elementor-widget-container">
                                <!-- <a
                                    href="/dark/about-us/"
                                    target="_self"
                                    rel="nofollow"
                                    class="trk-btn trk-btn--border trk-btn--primary"
                                >
                                    More
                                </a> --></div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                        data-id="3d03e0f"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                            data-id="8a79fe6"
                            data-element_type="widget"
                            data-widget_type="genix-image.default"
                        >
                            <div class="elementor-widget-container">
                                <script>
                                jQuery(document).ready(function($) {

                                    AOS.init();

                                });
                                </script>
                                <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                    <div class="about__thumb-inner">
                                        <div class="about__thumb-image floating-content">
                                            <img decoding="async" style="height: 298px;" src="https://i.ytimg.com/vi/kwlUGQL_GsM/maxresdefault.jpg" alt="">
                                            <div class="floating-content__top-left">
                                                <!-- <div class="floating-content__item">
                                                    <h3>10 Years</h3>
                                                    <p>Consulting Experience</p>
                                                </div> --></div>
                                            <div class="floating-content__bottom-right">
                                                <!-- <div class="floating-content__item">
                                                    <h3>25K+</h3>
                                                    <p>Satisfied Customers</p>
                                                </div> --></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Leverage Technology -->
                <div
                class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                data-id="47b6712"
                id="our-values"
                data-element_type="container"
                data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                data-core-v316-plus="true"
            >
                <div class="e-con-inner sectioncards">
                    <div
                        class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                        data-id="3d03e0f"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                            data-id="8a79fe6"
                            data-element_type="widget"
                            data-widget_type="genix-image.default"
                        >
                            <div class="elementor-widget-container">
                                <script>
                                jQuery(document).ready(function($) {

                                    AOS.init();

                                });
                                </script>
                                <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                    <div class="about__thumb-inner">
                                        <div class="about__thumb-image floating-content">
                                            <img decoding="async" style="height: 298px;" src="https://imageio.forbes.com/specials-images/imageserve/645d24b32b28e7e90acb5cb8/Big-Data-Technology-for-Business-Concept-/960x0.jpg?format=jpg&width=960" alt="">
                                            <div class="floating-content__top-left">
                                                <!-- <div class="floating-content__item">
                                                    <h3>10 Years</h3>
                                                    <p>Consulting Experience</p>
                                                </div> --></div>
                                            <div class="floating-content__bottom-right">
                                                <!-- <div class="floating-content__item">
                                                    <h3>25K+</h3>
                                                    <p>Satisfied Customers</p>
                                                </div> --></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                        data-id="f496e11"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                            data-id="2a404d7"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    <span style="color: var(--secondary-color);">Leverage Technology</span>
                                </h2>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                            data-id="77c0134"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default about-p">
                                    "Utilize charting platforms, market updates, and trading simulators to enhance your trading decisions. AI and machine learning software can also help identify trading opportunities."
                                </p>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                            data-id="211649c"
                            data-element_type="widget"
                            data-widget_type="tg-btn.default"
                        >
                            <div class="elementor-widget-container">
                                <!-- <a
                                    href="/dark/about-us/"
                                    target="_self"
                                    rel="nofollow"
                                    class="trk-btn trk-btn--border trk-btn--primary"
                                >
                                    More
                                </a> --></div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Protect Your Capital -->
                <div
                class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                data-id="47b6712"
                id="our-values"
                data-element_type="container"
                data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                data-core-v316-plus="true"
            >
                <div class="e-con-inner sectioncards">
                    <div
                        class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                        data-id="f496e11"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                            data-id="2a404d7"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    <span style="color: var(--secondary-color);">Protect Your Capital</span>
                                </h2>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                            data-id="77c0134"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default about-p">
                                    "Avoid unnecessary risks and do everything you can to preserve your trading business. Remember, protecting your capital doesn’t mean avoiding losses, but rather managing them effectively."
                                </p>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                            data-id="211649c"
                            data-element_type="widget"
                            data-widget_type="tg-btn.default"
                        >
                            <div class="elementor-widget-container">
                                <!-- <a
                                    href="/dark/about-us/"
                                    target="_self"
                                    rel="nofollow"
                                    class="trk-btn trk-btn--border trk-btn--primary"
                                >
                                    More
                                </a> --></div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                        data-id="3d03e0f"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                            data-id="8a79fe6"
                            data-element_type="widget"
                            data-widget_type="genix-image.default"
                        >
                            <div class="elementor-widget-container">
                                <script>
                                jQuery(document).ready(function($) {

                                    AOS.init();

                                });
                                </script>
                                <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                    <div class="about__thumb-inner">
                                        <div class="about__thumb-image floating-content">
                                            <img decoding="async" style="height: 298px;" src="https://media.istockphoto.com/id/1217218959/photo/money-protecting-concept-saving-symbol-close-up-of-a-human-hand-protecting-pink-piggy-bank.jpg?s=612x612&w=0&k=20&c=wcJbVduzmww4l4t83ADpEzC5gLB_hOQKpjPrMw3_sQM=" alt="">
                                            <div class="floating-content__top-left">
                                                <!-- <div class="floating-content__item">
                                                    <h3>10 Years</h3>
                                                    <p>Consulting Experience</p>
                                                </div> --></div>
                                            <div class="floating-content__bottom-right">
                                                <!-- <div class="floating-content__item">
                                                    <h3>25K+</h3>
                                                    <p>Satisfied Customers</p>
                                                </div> --></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Continuous Learning -->
                <div
                class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                data-id="47b6712"
                id="our-values"
                data-element_type="container"
                data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                data-core-v316-plus="true"
            >
                <div class="e-con-inner sectioncards">
                    <div
                        class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                        data-id="3d03e0f"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                            data-id="8a79fe6"
                            data-element_type="widget"
                            data-widget_type="genix-image.default"
                        >
                            <div class="elementor-widget-container">
                                <script>
                                jQuery(document).ready(function($) {

                                    AOS.init();

                                });
                                </script>
                                <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                    <div class="about__thumb-inner">
                                        <div class="about__thumb-image floating-content">
                                            <img decoding="async" style="height: 298px;" src="https://blog.vantagecircle.com/content/images/2019/09/Continuous-Learning.png" alt="">
                                            <div class="floating-content__top-left">
                                                <!-- <div class="floating-content__item">
                                                    <h3>10 Years</h3>
                                                    <p>Consulting Experience</p>
                                                </div> --></div>
                                            <div class="floating-content__bottom-right">
                                                <!-- <div class="floating-content__item">
                                                    <h3>25K+</h3>
                                                    <p>Satisfied Customers</p>
                                                </div> --></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                        data-id="f496e11"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                            data-id="2a404d7"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    <span style="color: var(--secondary-color);">Continuous Learning</span>
                                </h2>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                            data-id="77c0134"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default about-p">
                                    "The markets are always changing, so it’s crucial to become a student of the markets. Continuous education and staying updated with market trends are vital for success."
                                </p>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                            data-id="211649c"
                            data-element_type="widget"
                            data-widget_type="tg-btn.default"
                        >
                            <div class="elementor-widget-container">
                                <!-- <a
                                    href="/dark/about-us/"
                                    target="_self"
                                    rel="nofollow"
                                    class="trk-btn trk-btn--border trk-btn--primary"
                                >
                                    More
                                </a> --></div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Get Help and Accountability -->
                <div
                class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                data-id="47b6712"
                id="our-values"
                data-element_type="container"
                data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                data-core-v316-plus="true"
            >
                <div class="e-con-inner sectioncards">
                    <div
                        class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                        data-id="f496e11"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                            data-id="2a404d7"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    <span style="color: var(--secondary-color);">Get Help and Accountability</span>
                                </h2>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                            data-id="77c0134"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default about-p">
                                    "Having a mentor or a trading referee can help you stay disciplined and accountable for your trading decisions. This can minimize mistakes and keep you on track with your strategy."
                                </p>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                            data-id="211649c"
                            data-element_type="widget"
                            data-widget_type="tg-btn.default"
                        >
                            <div class="elementor-widget-container">
                                <!-- <a
                                    href="/dark/about-us/"
                                    target="_self"
                                    rel="nofollow"
                                    class="trk-btn trk-btn--border trk-btn--primary"
                                >
                                    More
                                </a> --></div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                        data-id="3d03e0f"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                            data-id="8a79fe6"
                            data-element_type="widget"
                            data-widget_type="genix-image.default"
                        >
                            <div class="elementor-widget-container">
                                <script>
                                jQuery(document).ready(function($) {

                                    AOS.init();

                                });
                                </script>
                                <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                    <div class="about__thumb-inner">
                                        <div class="about__thumb-image floating-content">
                                            <img decoding="async" style="height: 298px;" src="https://cdn.shopify.com/s/files/1/1752/1735/files/Workplace_With_High_Psychological_Safety.jpg?v=1686350446" alt="">
                                            <div class="floating-content__top-left">
                                                <!-- <div class="floating-content__item">
                                                    <h3>10 Years</h3>
                                                    <p>Consulting Experience</p>
                                                </div> --></div>
                                            <div class="floating-content__bottom-right">
                                                <!-- <div class="floating-content__item">
                                                    <h3>25K+</h3>
                                                    <p>Satisfied Customers</p>
                                                </div> --></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Practice and Discipline -->
                <div
                class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                data-id="47b6712"
                id="our-values"
                data-element_type="container"
                data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                data-core-v316-plus="true"
            >
                <div class="e-con-inner sectioncards">
                    <div
                        class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                        data-id="3d03e0f"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                            data-id="8a79fe6"
                            data-element_type="widget"
                            data-widget_type="genix-image.default"
                        >
                            <div class="elementor-widget-container">
                                <script>
                                jQuery(document).ready(function($) {

                                    AOS.init();

                                });
                                </script>
                                <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                    <div class="about__thumb-inner">
                                        <div class="about__thumb-image floating-content">
                                            <img decoding="async" style="height: 298px;" src="https://t3.ftcdn.net/jpg/04/74/58/30/360_F_474583030_lncLJfiuZYbrr4kaSRpIPXFSDLC0QI1s.jpg" alt="">
                                            <div class="floating-content__top-left">
                                                <!-- <div class="floating-content__item">
                                                    <h3>10 Years</h3>
                                                    <p>Consulting Experience</p>
                                                </div> --></div>
                                            <div class="floating-content__bottom-right">
                                                <!-- <div class="floating-content__item">
                                                    <h3>25K+</h3>
                                                    <p>Satisfied Customers</p>
                                                </div> --></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                        data-id="f496e11"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                            data-id="2a404d7"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    <span style="color: var(--secondary-color);">Practice and Discipline</span>
                                </h2>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                            data-id="77c0134"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default about-p">
                                    "Regular practice and maintaining discipline are key to improving your trading. This includes following your trading plan consistently and avoiding emotional decisions."
                                </p>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                            data-id="211649c"
                            data-element_type="widget"
                            data-widget_type="tg-btn.default"
                        >
                            <div class="elementor-widget-container">
                                <!-- <a
                                    href="/dark/about-us/"
                                    target="_self"
                                    rel="nofollow"
                                    class="trk-btn trk-btn--border trk-btn--primary"
                                >
                                    More
                                </a> --></div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Record Your Trades -->
                <div
                class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                data-id="47b6712"
                id="our-values"
                data-element_type="container"
                data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                data-core-v316-plus="true"
            >
                <div class="e-con-inner sectioncards">
                    <div
                        class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                        data-id="f496e11"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                            data-id="2a404d7"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    <span style="color: var(--secondary-color);">Record Your Trades</span>
                                </h2>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                            data-id="77c0134"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default about-p">
                                    "Keeping a detailed record of all your trades can help you analyze your performance and make informed adjustments to your strategy.”
                                </p>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                            data-id="211649c"
                            data-element_type="widget"
                            data-widget_type="tg-btn.default"
                        >
                            <div class="elementor-widget-container">
                                <!-- <a
                                    href="/dark/about-us/"
                                    target="_self"
                                    rel="nofollow"
                                    class="trk-btn trk-btn--border trk-btn--primary"
                                >
                                    More
                                </a> --></div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                        data-id="3d03e0f"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                            data-id="8a79fe6"
                            data-element_type="widget"
                            data-widget_type="genix-image.default"
                        >
                            <div class="elementor-widget-container">
                                <script>
                                jQuery(document).ready(function($) {

                                    AOS.init();

                                });
                                </script>
                                <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                    <div class="about__thumb-inner">
                                        <div class="about__thumb-image floating-content">
                                            <img decoding="async" style="height: 298px;" src="https://static.vecteezy.com/system/resources/previews/030/709/118/non_2x/worker-is-analyzing-stock-charts-generative-ai-free-photo.jpg" alt="">
                                            <div class="floating-content__top-left">
                                                <!-- <div class="floating-content__item">
                                                    <h3>10 Years</h3>
                                                    <p>Consulting Experience</p>
                                                </div> --></div>
                                            <div class="floating-content__bottom-right">
                                                <!-- <div class="floating-content__item">
                                                    <h3>25K+</h3>
                                                    <p>Satisfied Customers</p>
                                                </div> --></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif


                <!-- Mission -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">Our Mission</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-mission"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img decoding="async" style="height: 298px;" src="https://boms.co.in/UploadedFiles/AboutPage/2099ed0a96b44ee9aebe57fc21e44743.jpg" alt="">
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        Our
                                        <span style="color: var(--secondary-color);">Mission</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        "Our mission is to empower individuals by providing innovative staking solutions, reliable market data, and personalized guidance to help them navigate the market and achieve their financial goals."
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!-- <a
                                        href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif

                <script>
                    
                </script>

                <!-- Vision -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">Our Vision</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-vision"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title banner-title elementor-size-default">
                                        Our
                                        <span style="color: var(--secondary-color);">Vision</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        “Our vision is to empower investors by providing a transparent, efficient, and user-friendly supportive platform, enabling them to make informed decisions and achieve financial growth with confidence.”
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!--  <a
                                       href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        style="background-color: #3b3bf9;"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://t3.ftcdn.net/jpg/01/37/90/78/360_F_137907818_LNzsqtQT7OAZ98BuA3T4TKiEbEOY543G.jpg"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif

                <!-- values -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">Our Values</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-values"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img decoding="async" src="https://www.bluleadz.com/hubfs/Blog_pics/company-core-values-graphic-1.jpeg" alt="">
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        Our
                                        <span style="color: var(--secondary-color);">Values</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        "At AI Trading, we embrace integrity, and innovation. We prioritize client satisfaction, foster a collaborative environment. We strive for excellence, adapt to change, and drive long-term value creation for our stakeholders."
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!-- <a
                                        href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif

                <!-- Our Projects -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">Our Projects</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-vision"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards card-img-top">
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title banner-title elementor-size-default">
                                        Our
                                        <span style="color: var(--secondary-color);">Projects</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        “Our vision is to empower investors by providing a transparent, efficient, and user-friendly supportive platform, enabling them to make informed decisions and achieve financial growth with confidence.”
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                     <a
                                       href="/?page=ourproject"
                                        target="_self"
                                        rel="nofollow"
                                        style="background-color: #3b3bf9; border-color: #3b3bf9;"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        View All
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://thumbs.dreamstime.com/b/projects-concept-black-chalkboard-d-rendering-handwritten-top-view-office-desk-lot-business-office-supplies-79906734.jpg"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif

                
                <style>
                    .about-p span{
                        color: #fff !important;
                        font-weight: 600;
                    }
                </style>

                @if($page == 'ourproject')
                <!-- GMS -->
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-vision"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards sec-top-img">
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title banner-title elementor-size-default">
                                        1
                                        <span style="color: var(--secondary-color);">GMS</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-small about-p" style="font-size: 13px;">
                                        The future of cryptocurrency trading and growth appears to be a mix of challenges and opportunities. Here are some insights based on recent analyses 
                                        <br>
                                        <br>
                                        <br>
                                        <span>(a)Market Recovery:</span> After a tough year in 2022, where the crypto market lost over $2 trillion in value, there is a cautious optimism that the market will recover. The technology behind cryptocurrencies, such as blockchain and cryptography, is expected to continue being integral to the modern economic toolkit.
                                        <br>
                                        <br>
                                        <span>(b)Mainstream Adoption:</span> There has been a significant surge in the mainstream acceptance of cryptocurrencies. With more financial institutions embracing digital assets, 2024 could see a boom in mass adoption as regulatory clarity improves and traditional investors enter the market.
                                        <br>
                                        <br>
                                        <span>(c)Central Bank Digital Currencies</span> (CBDCs): Many countries are exploring or developing their own CBDCs, which could lead to a paradigm shift in how governments perceive and utilize digital currencies. While not decentralized like cryptocurrencies, CBDCs indicate a rising acceptance of digital assets.
                                        <br>
                                        <br>
                                        <span>(d)Interoperability: Focus on blockchain</span> interoperability will likely increase, with cross-chain solutions facilitating seamless communication and asset transfer between different blockchain networks.
                                        <br>
                                        <br>
                                        <span>(e)Market Growth:</span> The global cryptocurrency market is projected to grow significantly, with estimates suggesting it could hit $51.5 billion by 2024 and continue expanding at a compound annual growth rate (CAGR) of 8.62% 
                                        <br>
                                        <br>
                                        <span>(f)Long-term Outlook:</span> Looking further ahead, the cryptocurrency market could more than triple by 2030, driven by technological innovation, the rise of stablecoins, the expansion of decentralized finance (DeFi), and a greater emphasis on sustainable mining practices.
                                        These trends suggest that while the cryptocurrency market faces volatility and regulatory challenges, its underlying technologies and the shift towards digital assets could lead to promising growth in the future. However, it’s important to approach cryptocurrency trading with caution due to its inherent risks and volatility.
                                        <br>
                                        <br>
                                        <br>
                                        
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!--  <a
                                       href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        style="background-color: #3b3bf9;"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px; margin-top: 70px;"
                                                    src="/tst/grnyellow.png"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- GMS 2 -->
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-vision"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards sec-top-img">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <style>
                                        @media (max-width:1200px) {
                                            .gmss-img-thumb{
                                                display: none;
                                            }
                                        }
                                    </style>
                                    <div class="about__thumb pe-lg-5 gmss-img-thumb" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="/tst/grnyellow.png"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-small about-p" style="font-size: 13px;">
                                        
                                        I believe you meant “crypto”! Cryptocurrency, often referred to as “crypto,” is a digital or virtual currency that uses cryptography for security. Here are some key points about cryptocurrencies:
                                        <br>
                                        <br>
                                           <span> Bitcoin (BTC): </span> Bitcoin is the first and most well-known cryptocurrency. It operates on a decentralized network called the blockchain and is used for peer-to-peer transactions without the need for intermediaries like banks or governments.
                                        <br>
                                        <br>
                                           <span> Ethereum (ETH): </span> Ethereum is a platform that enables developers to create decentralized applications (DApps) using smart contracts. It introduced the concept of programmable money and has its native cryptocurrency called Ether (ETH).
                                        <br>
                                        <br>
                                           <span> Tether (USDT): </span> Tether is a stablecoin pegged to the value of a fiat currency (usually the US dollar). It provides stability by maintaining a 1:1 ratio with the underlying currency.
                                        <br>
                                        <br>
                                           <span> BNB (Binance Coin): </span> BNB is the native cryptocurrency of the Binance exchange. It’s used for trading fee discounts, participating in token sales, and other purposes within the Binance ecosystem.
                                        <br>
                                        <br>
                                           <span> Solana (SOL): </span> Solana is a high-performance blockchain known for its fast transaction speeds and low fees. It aims to support decentralized applications and DeFi projects.
                                        <br>
                                        <br>
                                           <span> Dogecoin (DOGE): </span> Originally created as a joke, Dogecoin gained popularity and became a legitimate cryptocurrency. It features the Shiba Inu dog as its logo and has a strong community following.
                                        <br>
                                        <br>
                                           <span> Cardano (ADA): </span> Cardano is a blockchain platform that focuses on scalability, security, and sustainability. It aims to provide a more balanced and efficient ecosystem for DApps and smart contracts.
                                        
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!--  <a
                                       href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        style="background-color: #3b3bf9;"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- BMS -->
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-values"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img decoding="async" src="https://i.ytimg.com/vi/q3NWnc3uwRg/sddefault.jpg" alt="">
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        2
                                        <span style="color: var(--secondary-color);">Billionare Mindset Program</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        Motivation training is a program that takes place inside an organization aiming to increase and maintain an employee's motivation levels, dedication, and desire to reach professional goals and successfully contribute to the company's success.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!-- <a
                                        href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Web3.0 Technology -->
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-vision"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards sec-top-img">
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title banner-title elementor-size-default">
                                        3
                                        <span style="color: var(--secondary-color);">Web3.0 </span>
                                        Technology
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-small about-p" style="font-size: 13px;">
                                        "Web3 (also known as Web 3.0) is an idea for a new iteration of the World Wide Web that incorporates several key concepts."
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                     <a
                                       href="/?page=web3"
                                        target="_self"
                                        rel="nofollow"
                                        style="background-color: #3b3bf9; border-color: #3b3bf9;"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmVV8XJmtYF5DtYBDvLpXMuvcafugRN9qqBQ&usqp=CAU"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 

                <!-- Financial Mangement -->
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-values"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img decoding="async" style="height: 298px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStzgckoJzalRJeHCjdehFJFinxAtBhZwoiPddmzCva9Y5R0WhFBhYGSYatFfurD9NmTb4&usqp=CAU" alt="">
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        4
                                        <span style="color: var(--secondary-color);">Financial Mangement</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default about-p">
                                        Financial management is a critical aspect of business operations. Let’s explore what it entails,
                                        its significance, and the core functions involved:
                                        Nature and Scope of Financial Management

                                        Financial management involves planning, controlling, and administering a firm’s financial
                                        resources.

                                        It ensures the efficient utilization of funds and effective decision-making related to finance.
                                        Financial management is integral to general management and influences the allocation of
                                        resources.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!-- <a
                                        href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  Sales Training -->
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-vision"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title banner-title elementor-size-default">
                                        5
                                        <span style="color: var(--secondary-color);">Sales</span>
                                        Training
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        Sales training is the process of improving seller skills, knowledge, and attributes to drive behavioral change and maximize sales success. It’s about empowering salespeople to sell more effectively by developing both soft skills (like understanding customer needs and maintaining relationships) and hard skills (such as presenting products and closing deals).
Effective sales training should be viewed as a change management initiative. It’s not just about learning theory; it’s about mastering proven techniques and personalizing your own style of selling and communication
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!--  <a
                                       href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        style="background-color: #3b3bf9;"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://assets.mailshake.com/wp-content/uploads/2022/11/30175700/sales-training-program-hero.jpg"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Support -->
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-values"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img decoding="async" style="height: 298px;" src="https://freshrecruitment.com/wp-content/uploads/2019/02/2.-Los-Vergadertafel-van-boven.jpg" alt="">
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        6
                                        <span style="color: var(--secondary-color);">Business</span>
                                        Support
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        "Business support encompasses various services and resources designed to assist businesses in their
                                        day-to-day operations, growth, and success.
                                        A Business Support Manager plays a crucial role in organizations.
                                        Responsibilities include overseeing financial management, coordinating resources, ensuring efficient
                                        operations, and supporting business growth.
                                        Remember that seeking and utilizing business support can enhance efficiency, address challenges, and
                                        contribute to overall success. Whether it’s technical support, policy guidance, or managerial assistance,
                                        leveraging available resources is essential!"
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!-- <a
                                        href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- WEB DESINING -->
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-vision"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title banner-title elementor-size-default">
                                        7 
                                        <span style="color: var(--secondary-color);">WEB</span>
                                        DESINING
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        “Web design is the process of planning, conceptualizing, and arranging content for websites. It
                                        encompasses various elements, including color schemes, typography, layout, and overall functionality.”
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!--  <a
                                       href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        style="background-color: #3b3bf9;"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2022/01/104228210.jpg?auto=format&q=60&fit=max&w=930"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Future technology of metaverse -->
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-values"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img decoding="async" style="height: 298px;" src="https://i.ytimg.com/vi/OD8jADtNzTY/mqdefault.jpg" alt="">
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        8
                                        <span style="color: var(--secondary-color);">Future technology of</span>
                                        metaverse
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        "The metaverse refers to the convergence of physical and virtual space accessed
                                        through computers and enabled by immersive technologies such as virtual reality,
                                        augmented reality and mixed reality."
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!-- <a
                                        href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif



                @if($page == 'web3')
                <!-- Decentralization -->
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-vision"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards sec-top-img">
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title banner-title elementor-size-default">
                                        1
                                        <span style="color: var(--secondary-color);">Decentralization</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-small about-p" style="font-size: 13px;">
                                        Unlike the current Web, which is often dominated by large technology companies, Web3 aims to be built, operated, and owned by its users. It puts power in the hands of individuals rather than corporations.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                     <!-- <a
                                       href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        style="background-color: #3b3bf9;"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://res.cloudinary.com/practicaldev/image/fetch/s--imNQ96gr--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/1o1g6r3rci5qtnnu4rql.png"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blockchain Technologies -->
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-vision"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards sec-top-img">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://bsmedia.business-standard.com/_media/bs/img/about-page/thumb/464_464/1611107541.jpg"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title banner-title elementor-size-default">
                                        2
                                        <span style="color: var(--secondary-color);">Blockchain Technologies</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-small about-p" style="font-size: 13px;">
                                        Web3 leverages blockchain technology, which provides a decentralized and secure way to manage data and transactions. Blockchains enable trust without relying on intermediaries, making them a fundamental part of Web3.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                     <!-- <a
                                       href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        style="background-color: #3b3bf9;"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Token-Based Economics -->
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-vision"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards sec-top-img">
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title banner-title elementor-size-default">
                                        3
                                        <span style="color: var(--secondary-color);">Token-Based Economics</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-small about-p" style="font-size: 13px;">
                                        Web3 introduces the concept of tokens, which represent ownership or value within the ecosystem. These tokens can be used for various purposes, such as governance, access to services, or even as digital assets (e.g., non-fungible tokens or NFTs).
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                     <!-- <a
                                       href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        style="background-color: #3b3bf9;"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://www.jumpstartmag.com/wp-content/uploads/2022/03/What-Is-It-and-Why-Is-It-Crucial-for-Crypto-Businesses.jpg"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ownership and Empowerment -->
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-vision"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards sec-top-img">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://media.licdn.com/dms/image/C4E12AQHP_06vhRoxFA/article-cover_image-shrink_720_1280/0/1520873079268?e=2147483647&v=beta&t=RgGXqQ9fbviPvuP-ZQ-XRVNnni85pt1MtqVYREPRCJs"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title banner-title elementor-size-default">
                                        4
                                        <span style="color: var(--secondary-color);">Ownership and Empowerment</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-small about-p" style="font-size: 13px;">
                                        Web3 seeks to give users more control over their data and digital assets. It aims to create an internet where individuals not only participate but also own and benefit from their contributions.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                     <!-- <a
                                       href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        style="background-color: #3b3bf9;"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif


                <!-- Our IncomePlans -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">Income Plans</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-vision"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title banner-title elementor-size-default">
                                        Income
                                        <span style="color: var(--secondary-color);">Plan</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default about-p">
                                        "Discover Just Income Plan: Simplifying your path to financial prosperity through seamless income generation strategies, tailored for modern earners seeking stability and growth."
                                    <br>
                                    <br>
                                    There are 5 types of income
                                    <br>
                                    <br>
                                    <span>1. Staking Profit</span>
                                    <br>
                                    <span>2. Referral Income</span>
                                    <br>
                                    <span>3. Level Divident</span>
                                    <br>
                                    <span>4. Compounding</span>
                                    <br>
                                    <span>5. Reward System</span>
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                     <a
                                       href="/?page=incomeplan"
                                        target="_self"
                                        rel="nofollow"
                                        style="background-color: #3b3bf9; border-color: #3b3bf9;"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        View All
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="/bcks/incom.jpeg"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
                @endif


                @if($page == 'incomeplan')
                <!-- Staking Profit -->
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-vision"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title banner-title elementor-size-default">
                                        Staking
                                        <span style="color: var(--secondary-color);">Profit</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default about-p">
                                    <br>
                                    <br>
                                    <span>15% Profit for every months</span>
                                    <br>
                                    <span>Duration 15 Months</span>
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                     <!-- <a
                                       href="/?page=ourproject"
                                        target="_self"
                                        rel="nofollow"
                                        style="background-color: #3b3bf9; border-color: #3b3bf9;"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        View All
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://img.freepik.com/premium-photo/man-stacking-coins-with-graph-profit_220873-9177.jpg"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Referral Income -->
                <div
                class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                data-id="47b6712"
                id="our-vision"
                data-element_type="container"
                data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                data-core-v316-plus="true"
            >
                <div class="e-con-inner sectioncards">
                    <div
                        class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                        data-id="3d03e0f"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                            data-id="8a79fe6"
                            data-element_type="widget"
                            data-widget_type="genix-image.default"
                        >
                            <div class="elementor-widget-container">
                                <script>
                                jQuery(document).ready(function($) {

                                    AOS.init();

                                });
                                </script>
                                <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                    <div class="about__thumb-inner">
                                        <div class="about__thumb-image floating-content">
                                            <img
                                                decoding="async"
                                                style="height: 298px;"
                                                src="https://growmudra.com/assets/images/direct-referral.jpg"
                                                alt=""
                                            >
                                            <div class="floating-content__top-left">
                                                <!-- <div class="floating-content__item">
                                                    <h3>10 Years</h3>
                                                    <p>Consulting Experience</p>
                                                </div> --></div>
                                            <div class="floating-content__bottom-right">
                                                <!-- <div class="floating-content__item">
                                                    <h3>25K+</h3>
                                                    <p>Satisfied Customers</p>
                                                </div> --></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                        data-id="f496e11"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                            data-id="2a404d7"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title banner-title elementor-size-default">
                                    Referral 
                                    <span style="color: var(--secondary-color);">income</span>
                                </h2>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                            data-id="77c0134"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default about-p">
                                <br>
                                <br>
                                <span>Direct Referral 10%</span>
                                <br>
                                </p>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                            data-id="211649c"
                            data-element_type="widget"
                            data-widget_type="tg-btn.default"
                        >
                            <div class="elementor-widget-container">
                                 <!-- <a
                                   href="/?page=ourproject"
                                    target="_self"
                                    rel="nofollow"
                                    style="background-color: #3b3bf9; border-color: #3b3bf9;"
                                    class="trk-btn trk-btn--border trk-btn--primary"
                                >
                                    View All
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
              </div>


            <!-- Rank Achievers -->
            <div
            class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
            data-id="47b6712"
            id="our-vision"
            data-element_type="container"
            data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
            data-core-v316-plus="true"
        >
            <div class="e-con-inner sectioncards">
                <div
                    class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                    data-id="f496e11"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                >
                    <div
                        class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                        data-id="2a404d7"
                        data-element_type="widget"
                        data-widget_type="heading.default"
                    >
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title banner-title elementor-size-default">
                                Rank
                                <span style="color: var(--secondary-color);">Achievers</span>
                            </h2>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                        data-id="77c0134"
                        data-element_type="widget"
                        data-widget_type="heading.default"
                    >
                        <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default about-p">
                            <br>
                            <br>
                            1. <span>Staker - </span><span style="color: #3b3bf9 !important;">Minimum 100 USDT</span>
                            <br>
                            2. <span>Promoter - </span><span style="color: #3b3bf9 !important;">Minimum 10 Direct Stakers</span>
                            <br>
                            3. <span>Executive Promoter - </span><span style="color: #3b3bf9 !important;">Direct 2 Promoters</span>
                            <br>
                            4. <span>Manager - </span><span style="color: #3b3bf9 !important;">Direct 2 Executive Promoters</span>
                            <br>
                            5. <span>Diamond Achievers - </span><span style="color: #3b3bf9 !important;">Direct 2 Managers</span>
                            <br>
                            </p>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                        data-id="211649c"
                        data-element_type="widget"
                        data-widget_type="tg-btn.default"
                    >
                        <div class="elementor-widget-container">
                             <!-- <a
                               href="/?page=ourproject"
                                target="_self"
                                rel="nofollow"
                                style="background-color: #3b3bf9; border-color: #3b3bf9;"
                                class="trk-btn trk-btn--border trk-btn--primary"
                            >
                                View All
                            </a> -->
                        </div>
                    </div>
                </div>
                <div
                    class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                    data-id="3d03e0f"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                >
                    <div
                        class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                        data-id="8a79fe6"
                        data-element_type="widget"
                        data-widget_type="genix-image.default"
                    >
                        <div class="elementor-widget-container">
                            <script>
                            jQuery(document).ready(function($) {

                                AOS.init();

                            });
                            </script>
                            <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                <div class="about__thumb-inner">
                                    <div class="about__thumb-image floating-content">
                                        <img
                                            decoding="async"
                                            style="height: 298px;"
                                            src="https://media.istockphoto.com/id/1134790777/vector/men-in-business-suits-are-holding-gold-coins.jpg?s=612x612&w=0&k=20&c=FCUXTppin13kiLtLlulfh-r19WTHFpJMbzfzD5tHknQ="
                                            alt=""
                                        >
                                        <div class="floating-content__top-left">
                                            <!-- <div class="floating-content__item">
                                                <h3>10 Years</h3>
                                                <p>Consulting Experience</p>
                                            </div> --></div>
                                        <div class="floating-content__bottom-right">
                                            <!-- <div class="floating-content__item">
                                                <h3>25K+</h3>
                                                <p>Satisfied Customers</p>
                                            </div> --></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <!-- Level Income -->
                <div
                class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                data-id="47b6712"
                id="our-vision"
                data-element_type="container"
                data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                data-core-v316-plus="true"
            >
                <div class="e-con-inner sectioncards">
                    <div
                        class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                        data-id="f496e11"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                            data-id="2a404d7"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title banner-title elementor-size-default">
                                    Level
                                    <span style="color: var(--secondary-color);">Dividend</span>
                                </h2>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                            data-id="77c0134"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default about-p">
                                <br>
                                <br>
                                1. <span>First Level - 10%</span>
                                <br>
                                2. <span>Second Level - 5%</span>
                                <br>
                                3. <span>Third Level - 5%</span>
                                <br>
                                4. <span>Fourth Level - 5%</span>
                                <br>
                                5. <span>Fifth Level - 5%</span>
                                <br>

                                <span style="color: #3b3bf9 !important;">For Executive Promoters (Direct 2 Promoters)</span>
                                <br>
                                6. <span>Sixth Level - 5%</span>
                                <br>
                                7. <span>Seventh Level - 5%</span>
                                <br>

                                <span style="color: #3b3bf9 !important;">For Managers (Direct 2 Executive Promoters)</span>
                                <br>
                                8. <span>Eighth Level - 5%</span>
                                <br>
                                9. <span>Ninth Level - 5%</span>
                                <br>

                                <span style="color: #3b3bf9 !important;">For Diamond Achievers (Direct 2 Managers)</span>
                                <br>
                                10. <span>Tenth Level - 5%</span>
                                <br>
                                11. <span>Eleventh Level - 5%</span>
                                <br>

                                </p>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                            data-id="211649c"
                            data-element_type="widget"
                            data-widget_type="tg-btn.default"
                        >
                            <div class="elementor-widget-container">
                                 <!-- <a
                                   href="/?page=ourproject"
                                    target="_self"
                                    rel="nofollow"
                                    style="background-color: #3b3bf9; border-color: #3b3bf9;"
                                    class="trk-btn trk-btn--border trk-btn--primary"
                                >
                                    View All
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                        data-id="3d03e0f"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                            data-id="8a79fe6"
                            data-element_type="widget"
                            data-widget_type="genix-image.default"
                        >
                            <div class="elementor-widget-container">
                                <script>
                                jQuery(document).ready(function($) {

                                    AOS.init();

                                });
                                </script>
                                <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                    <div class="about__thumb-inner">
                                        <div class="about__thumb-image floating-content">
                                            <img
                                                decoding="async"
                                                style="height: 298px;"
                                                src="https://media.istockphoto.com/id/1134790777/vector/men-in-business-suits-are-holding-gold-coins.jpg?s=612x612&w=0&k=20&c=FCUXTppin13kiLtLlulfh-r19WTHFpJMbzfzD5tHknQ="
                                                alt=""
                                            >
                                            <div class="floating-content__top-left">
                                                <!-- <div class="floating-content__item">
                                                    <h3>10 Years</h3>
                                                    <p>Consulting Experience</p>
                                                </div> --></div>
                                            <div class="floating-content__bottom-right">
                                                <!-- <div class="floating-content__item">
                                                    <h3>25K+</h3>
                                                    <p>Satisfied Customers</p>
                                                </div> --></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Compounding -->
                <div
                class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                data-id="47b6712"
                id="our-vision"
                data-element_type="container"
                data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                data-core-v316-plus="true"
            >
                <div class="e-con-inner sectioncards">
                    <div
                        class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                        data-id="3d03e0f"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                            data-id="8a79fe6"
                            data-element_type="widget"
                            data-widget_type="genix-image.default"
                        >
                            <div class="elementor-widget-container">
                                <script>
                                jQuery(document).ready(function($) {

                                    AOS.init();

                                });
                                </script>
                                <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                    <div class="about__thumb-inner">
                                        <div class="about__thumb-image floating-content">
                                            <img
                                                decoding="async"
                                                style="height: 298px;"
                                                src="https://t4.ftcdn.net/jpg/05/06/35/17/360_F_506351785_sXsz26SnnJ4MhhxYIIUnnJTEBvP8o7ki.jpg"
                                                alt=""
                                            >
                                            <div class="floating-content__top-left">
                                                <!-- <div class="floating-content__item">
                                                    <h3>10 Years</h3>
                                                    <p>Consulting Experience</p>
                                                </div> --></div>
                                            <div class="floating-content__bottom-right">
                                                <!-- <div class="floating-content__item">
                                                    <h3>25K+</h3>
                                                    <p>Satisfied Customers</p>
                                                </div> --></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                        data-id="f496e11"
                        data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    >
                        <div
                            class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                            data-id="2a404d7"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title banner-title elementor-size-default">
                                    <span style="color: var(--secondary-color);">Compounding</span>
                                </h2>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                            data-id="77c0134"
                            data-element_type="widget"
                            data-widget_type="heading.default"
                        >
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default about-p">
                                    <br>
                                    <br>
                                <span>Compounding 6 Months</span>
                                <br>
                                </p>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                            data-id="211649c"
                            data-element_type="widget"
                            data-widget_type="tg-btn.default"
                        >
                            <div class="elementor-widget-container">
                                 <!-- <a
                                   href="/?page=ourproject"
                                    target="_self"
                                    rel="nofollow"
                                    style="background-color: #3b3bf9; border-color: #3b3bf9;"
                                    class="trk-btn trk-btn--border trk-btn--primary"
                                >
                                    View All
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
              </div>


            <!-- Reward System -->
            <div
            class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
            data-id="47b6712"
            id="our-vision"
            data-element_type="container"
            data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
            data-core-v316-plus="true"
        >
            <div class="e-con-inner sectioncards">
                <div
                    class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                    data-id="f496e11"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                >
                    <div
                        class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                        data-id="2a404d7"
                        data-element_type="widget"
                        data-widget_type="heading.default"
                    >
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title banner-title elementor-size-default">
                                Reward
                                <span style="color: var(--secondary-color);">System</span>
                            </h2>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                        data-id="77c0134"
                        data-element_type="widget"
                        data-widget_type="heading.default"
                    >
                        <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default about-p">
                                <br>
                            1. <span>10,000 USDT</span>
                            <br>
                            2. <span>1,00,000 USDT</span>
                            <br>
                            3. <span>10,00,000 USDT</span>
                            <br>
                            4. <span>25,00,000 USDT</span>
                            <br>
                            5. <span>50,00,000 USDT</span>
                            <br>
                            </p>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                        data-id="211649c"
                        data-element_type="widget"
                        data-widget_type="tg-btn.default"
                    >
                        <div class="elementor-widget-container">
                             <a
                               href="/?page=reward"
                                target="_self"
                                rel="nofollow"
                                style="background-color: #3b3bf9; border-color: #3b3bf9;"
                                class="trk-btn trk-btn--border trk-btn--primary"
                            >
                                View All
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                    data-id="3d03e0f"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                >
                    <div
                        class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                        data-id="8a79fe6"
                        data-element_type="widget"
                        data-widget_type="genix-image.default"
                    >
                        <div class="elementor-widget-container">
                            <script>
                            jQuery(document).ready(function($) {

                                AOS.init();

                            });
                            </script>
                            <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                <div class="about__thumb-inner">
                                    <div class="about__thumb-image floating-content">
                                        <img
                                            decoding="async"
                                            style="height: 298px;"
                                            src="https://www.achievers.com/wp-content/uploads/2021/11/Engage-Blog-Employee-Rewards-Recognition-3.jpg"
                                            alt=""
                                        >
                                        <div class="floating-content__top-left">
                                            <!-- <div class="floating-content__item">
                                                <h3>10 Years</h3>
                                                <p>Consulting Experience</p>
                                            </div> --></div>
                                        <div class="floating-content__bottom-right">
                                            <!-- <div class="floating-content__item">
                                                <h3>25K+</h3>
                                                <p>Satisfied Customers</p>
                                            </div> --></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

              @endif



            @if($page == 'reward')
            <!-- GOA -->
            <div
           class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
           data-id="47b6712"
           id="our-vision"
           data-element_type="container"
           data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
           data-core-v316-plus="true"
       >
           <div class="e-con-inner sectioncards">
               <div
                   class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                   data-id="f496e11"
                   data-element_type="container"
                   data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
               >
                   <div
                       class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                       data-id="2a404d7"
                       data-element_type="widget"
                       data-widget_type="heading.default"
                   >
                       <div class="elementor-widget-container">
                           <h2 class="elementor-heading-title banner-title elementor-size-default">
                               GOA
                               <span style="color: var(--secondary-color);">TRIP</span>
                           </h2>
                       </div>
                   </div>
                   <div
                       class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                       data-id="77c0134"
                       data-element_type="widget"
                       data-widget_type="heading.default"
                   >
                       <div class="elementor-widget-container">
                           <p class="elementor-heading-title elementor-size-default about-p">
                               <br>
                           <span>Join Date to 30 Days</span>
                           <br>
                           <br>
                           <span>10,000 USDT Direct Referral</span>
                           <br>
                           <br>
                           <span>3 Days and 2 Nights</span>
                           <br>
                           <br>
                           <span>Direct Referral Only</span>
                           </p>
                       </div>
                   </div>
                   <div
                       class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                       data-id="211649c"
                       data-element_type="widget"
                       data-widget_type="tg-btn.default"
                   >
                       <div class="elementor-widget-container">
                            <!-- <a
                              href="/?page=ourproject"
                               target="_self"
                               rel="nofollow"
                               style="background-color: #3b3bf9; border-color: #3b3bf9;"
                               class="trk-btn trk-btn--border trk-btn--primary"
                           >
                               View All
                           </a> -->
                       </div>
                   </div>
               </div>
               <div
                   class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                   data-id="3d03e0f"
                   data-element_type="container"
                   data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
               >
                   <div
                       class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                       data-id="8a79fe6"
                       data-element_type="widget"
                       data-widget_type="genix-image.default"
                   >
                       <div class="elementor-widget-container">
                           <script>
                           jQuery(document).ready(function($) {

                               AOS.init();

                           });
                           </script>
                           <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                               <div class="about__thumb-inner">
                                   <div class="about__thumb-image floating-content">
                                       <img
                                           decoding="async"
                                           style="height: 298px;"
                                           src="https://t3.ftcdn.net/jpg/01/40/51/56/360_F_140515612_0MMpqpsIvs6xno5YXmPVy9FUmZ4uLnFB.jpg"
                                           alt=""
                                       >
                                       <div class="floating-content__top-left">
                                           <!-- <div class="floating-content__item">
                                               <h3>10 Years</h3>
                                               <p>Consulting Experience</p>
                                           </div> --></div>
                                       <div class="floating-content__bottom-right">
                                           <!-- <div class="floating-content__item">
                                               <h3>25K+</h3>
                                               <p>Satisfied Customers</p>
                                           </div> --></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
            </div>
            
            <!-- DUBAI -->
         <div
           class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
           data-id="47b6712"
           id="our-vision"
           data-element_type="container"
           data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
           data-core-v316-plus="true"
       >
           <div class="e-con-inner sectioncards">
               <div
                   class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                   data-id="3d03e0f"
                   data-element_type="container"
                   data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
               >
                   <div
                       class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                       data-id="8a79fe6"
                       data-element_type="widget"
                       data-widget_type="genix-image.default"
                   >
                       <div class="elementor-widget-container">
                           <script>
                           jQuery(document).ready(function($) {

                               AOS.init();

                           });
                           </script>
                           <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                               <div class="about__thumb-inner">
                                   <div class="about__thumb-image floating-content">
                                       <img
                                           decoding="async"
                                           style="height: 298px;"
                                           src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbiE9erZ7MLrJjIohDjDX-PZeNn9QRVdWHUQ&usqp=CAU"
                                           alt=""
                                       >
                                       <div class="floating-content__top-left">
                                           <!-- <div class="floating-content__item">
                                               <h3>10 Years</h3>
                                               <p>Consulting Experience</p>
                                           </div> --></div>
                                       <div class="floating-content__bottom-right">
                                           <!-- <div class="floating-content__item">
                                               <h3>25K+</h3>
                                               <p>Satisfied Customers</p>
                                           </div> --></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div
                   class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                   data-id="f496e11"
                   data-element_type="container"
                   data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
               >
                   <div
                       class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                       data-id="2a404d7"
                       data-element_type="widget"
                       data-widget_type="heading.default"
                   >
                       <div class="elementor-widget-container">
                           <h2 class="elementor-heading-title banner-title elementor-size-default">
                               DUBAI
                               <span style="color: var(--secondary-color);">TRIP</span>
                           </h2>
                       </div>
                   </div>
                   <div
                       class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                       data-id="77c0134"
                       data-element_type="widget"
                       data-widget_type="heading.default"
                   >
                       <div class="elementor-widget-container">
                           <p class="elementor-heading-title elementor-size-default about-p">
                           <br>
                           <br>
                           <span>1,00,000 USDT</span>
                           <br>
                           <br>
                           <span>4 Days and 3 Nights</span>
                           <br>
                           <br>
                           <span>5 Level Only</span>
                           </p>
                       </div>
                   </div>
                   <div
                       class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                       data-id="211649c"
                       data-element_type="widget"
                       data-widget_type="tg-btn.default"
                   >
                       <div class="elementor-widget-container">
                            <!-- <a
                              href="/?page=ourproject"
                               target="_self"
                               rel="nofollow"
                               style="background-color: #3b3bf9; border-color: #3b3bf9;"
                               class="trk-btn trk-btn--border trk-btn--primary"
                           >
                               View All
                           </a> -->
                       </div>
                   </div>
               </div>
             </div>
         </div>

            <!-- Swift -->
            <div
           class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
           data-id="47b6712"
           id="our-vision"
           data-element_type="container"
           data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
           data-core-v316-plus="true"
       >
           <div class="e-con-inner sectioncards">
               <div
                   class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                   data-id="f496e11"
                   data-element_type="container"
                   data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
               >
                   <div
                       class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                       data-id="2a404d7"
                       data-element_type="widget"
                       data-widget_type="heading.default"
                   >
                       <div class="elementor-widget-container">
                           <h2 class="elementor-heading-title banner-title elementor-size-default">
                               <span style="color: var(--secondary-color);">Mid-Segment</span> Car
                           </h2>
                       </div>
                   </div>
                   <div
                       class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                       data-id="77c0134"
                       data-element_type="widget"
                       data-widget_type="heading.default"
                   >
                       <div class="elementor-widget-container">
                           <p class="elementor-heading-title elementor-size-default about-p">
                           <br>
                           <br>
                           <span>10,00,000 USDT</span>
                           <br>
                           <br>
                           <span>7000 USDT Worth</span>
                           <br>
                           <br>
                           <span>10 Level Only</span>
                           </p>
                       </div>
                   </div>
                   <div
                       class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                       data-id="211649c"
                       data-element_type="widget"
                       data-widget_type="tg-btn.default"
                   >
                       <div class="elementor-widget-container">
                            <!-- <a
                              href="/?page=ourproject"
                               target="_self"
                               rel="nofollow"
                               style="background-color: #3b3bf9; border-color: #3b3bf9;"
                               class="trk-btn trk-btn--border trk-btn--primary"
                           >
                               View All
                           </a> -->
                       </div>
                   </div>
               </div>
               <div
                   class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                   data-id="3d03e0f"
                   data-element_type="container"
                   data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
               >
                   <div
                       class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                       data-id="8a79fe6"
                       data-element_type="widget"
                       data-widget_type="genix-image.default"
                   >
                       <div class="elementor-widget-container">
                           <script>
                           jQuery(document).ready(function($) {

                               AOS.init();

                           });
                           </script>
                           <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                               <div class="about__thumb-inner">
                                   <div class="about__thumb-image floating-content">
                                       <img
                                           decoding="async"
                                           style="height: 298px;"
                                           src="https://wallpapercave.com/wp/wp4224057.jpg"
                                           alt=""
                                       >
                                       <div class="floating-content__top-left">
                                           <!-- <div class="floating-content__item">
                                               <h3>10 Years</h3>
                                               <p>Consulting Experience</p>
                                           </div> --></div>
                                       <div class="floating-content__bottom-right">
                                           <!-- <div class="floating-content__item">
                                               <h3>25K+</h3>
                                               <p>Satisfied Customers</p>
                                           </div> --></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
            </div>

            <!-- volkswagen or Honda Elevate -->
            <div
           class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
           data-id="47b6712"
           id="our-vision"
           data-element_type="container"
           data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
           data-core-v316-plus="true"
       >
           <div class="e-con-inner sectioncards">
               <div
                   class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                   data-id="3d03e0f"
                   data-element_type="container"
                   data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
               >
                   <div
                       class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                       data-id="8a79fe6"
                       data-element_type="widget"
                       data-widget_type="genix-image.default"
                   >
                       <div class="elementor-widget-container">
                           <script>
                           jQuery(document).ready(function($) {

                               AOS.init();

                           });
                           </script>
                           <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                               <div class="about__thumb-inner">
                                   <div class="about__thumb-image floating-content">
                                       <img
                                           decoding="async"
                                           style="height: 198px;"
                                           src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuQEdJ0JOvcgj9xCkvD7rbo8SINs2PsgrZA9_MzQbHf8fiu3YwpD2r_4qeLSZqQBuAZ5g&usqp=CAU"
                                           alt=""
                                       >
                                       <div class="floating-content__top-left">
                                           <!-- <div class="floating-content__item">
                                               <h3>10 Years</h3>
                                               <p>Consulting Experience</p>
                                           </div> --></div>
                                       <div class="floating-content__bottom-right">
                                           <!-- <div class="floating-content__item">
                                               <h3>25K+</h3>
                                               <p>Satisfied Customers</p>
                                           </div> --></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div
                   class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                   data-id="3d03e0f"
                   data-element_type="container"
                   data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
               >
                   <div
                       class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                       data-id="8a79fe6"
                       data-element_type="widget"
                       data-widget_type="genix-image.default"
                   >
                       <div class="elementor-widget-container">
                           <script>
                           jQuery(document).ready(function($) {

                               AOS.init();

                           });
                           </script>
                           <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                               <div class="about__thumb-inner">
                                   <div class="about__thumb-image floating-content">
                                       <img
                                           decoding="async"
                                           style="height: 198px;"
                                           src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR40zrxjlGi9LmAwrOVwnJMHsjQbYT5QZViqA&usqp=CAU"
                                           alt=""
                                       >
                                       <div class="floating-content__top-left">
                                           <!-- <div class="floating-content__item">
                                               <h3>10 Years</h3>
                                               <p>Consulting Experience</p>
                                           </div> --></div>
                                       <div class="floating-content__bottom-right">
                                           <!-- <div class="floating-content__item">
                                               <h3>25K+</h3>
                                               <p>Satisfied Customers</p>
                                           </div> --></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div
                   class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                   data-id="f496e11"
                   data-element_type="container"
                   data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
               >
                   <div
                       class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                       data-id="2a404d7"
                       data-element_type="widget"
                       data-widget_type="heading.default"
                   >
                       <div class="elementor-widget-container">
                           <h2 class="elementor-heading-title banner-title elementor-size-default">
                               <span style="color: var(--secondary-color);">Premium</span>
                               Car
                           </h2>
                       </div>
                   </div>
                   <div
                       class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                       data-id="77c0134"
                       data-element_type="widget"
                       data-widget_type="heading.default"
                   >
                       <div class="elementor-widget-container">
                           <p class="elementor-heading-title elementor-size-default about-p">
                           <br>
                           <br>
                           <span>25,00,000 USDT</span>
                           <br>
                           <br>
                           <span>15000 USDT Worth</span>
                           <br>
                           <br>
                           <span>10 Level Only</span>
                           </p>
                       </div>
                   </div>
                   <div
                       class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                       data-id="211649c"
                       data-element_type="widget"
                       data-widget_type="tg-btn.default"
                   >
                       <div class="elementor-widget-container">
                            <!-- <a
                              href="/?page=ourproject"
                               target="_self"
                               rel="nofollow"
                               style="background-color: #3b3bf9; border-color: #3b3bf9;"
                               class="trk-btn trk-btn--border trk-btn--primary"
                           >
                               View All
                           </a> -->
                       </div>
                   </div>
               </div>
           </div>
            </div>


            <!-- BENZ -->
            <div
           class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
           data-id="47b6712"
           id="our-vision"
           data-element_type="container"
           data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
           data-core-v316-plus="true"
       >
           <div class="e-con-inner sectioncards">
               <div
                   class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                   data-id="f496e11"
                   data-element_type="container"
                   data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
               >
                   <div
                       class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                       data-id="2a404d7"
                       data-element_type="widget"
                       data-widget_type="heading.default"
                   >
                       <div class="elementor-widget-container">
                           <h2 class="elementor-heading-title banner-title elementor-size-default">
                               <span style="color: var(--secondary-color);">Luxuary</span>
                               Car
                           </h2>
                       </div>
                   </div>
                   <div
                       class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                       data-id="77c0134"
                       data-element_type="widget"
                       data-widget_type="heading.default"
                   >
                       <div class="elementor-widget-container">
                           <p class="elementor-heading-title elementor-size-default about-p">
                           <br>
                           <br>
                           <span>50,00,000 USDT</span>
                           <br>
                           <br>
                           <span>50000 USDT Worth</span>
                           <br>
                           <br>
                           <span>10 Level Only</span>
                           </p>
                       </div>
                   </div>
                   <div
                       class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                       data-id="211649c"
                       data-element_type="widget"
                       data-widget_type="tg-btn.default"
                   >
                       <div class="elementor-widget-container">
                            <!-- <a
                              href="/?page=ourproject"
                               target="_self"
                               rel="nofollow"
                               style="background-color: #3b3bf9; border-color: #3b3bf9;"
                               class="trk-btn trk-btn--border trk-btn--primary"
                           >
                               View All
                           </a> -->
                       </div>
                   </div>
               </div>
               <div
                   class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                   data-id="3d03e0f"
                   data-element_type="container"
                   data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
               >
                   <div
                       class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                       data-id="8a79fe6"
                       data-element_type="widget"
                       data-widget_type="genix-image.default"
                   >
                       <div class="elementor-widget-container">
                           <script>
                           jQuery(document).ready(function($) {

                               AOS.init();

                           });
                           </script>
                           <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                               <div class="about__thumb-inner">
                                   <div class="about__thumb-image floating-content">
                                       <img
                                           decoding="async"
                                           style="height: 298px;"
                                           src="https://imgcdn.oto.com/large/gallery/exterior/25/2196/mercedes-benz-cla-class-front-side-view-470179.jpg"
                                           alt=""
                                       >
                                       <div class="floating-content__top-left">
                                           <!-- <div class="floating-content__item">
                                               <h3>10 Years</h3>
                                               <p>Consulting Experience</p>
                                           </div> --></div>
                                       <div class="floating-content__bottom-right">
                                           <!-- <div class="floating-content__item">
                                               <h3>25K+</h3>
                                               <p>Satisfied Customers</p>
                                           </div> --></div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
            </div>

            @endif



                <!-- GMS Academy -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">GMS Academy</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="gms-academy"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title banner-title elementor-size-default">
                                        Courses in
                                        <span style="color: var(--secondary-color);">education</span>
                                        and
                                        <span style="color: var(--secondary-color);">teaching</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                            <style>
                                .gms-acdmy-p span{
                                    color: #fff;
font-size: 18px !important;
font-weight: 700 !important;
                                }
                            </style>
                                <div class="elementor-widget-container gms-acdmy-p">
                                    <p>
                                        “GMS offers a variety of courses for learners interested in the field. Education courses that meet your needs can depend on what kind of career you plan to pursue and the type of degree you seek.
                                        Sample topics of education courses include:
                                    </p>
                                         <span class="elementor-heading-title banner-title elementor-size-default">
                                            Introduction to Education
                                        </span>
                                        <p>
                                        A comprehensive overview of education’s history, philosophy, and sociology that can examine education’s social and cultural foundations, as well as the roles of learners, teachers, and schools.
                                        Educational Psychology: an exploration of how students learn and develop cognitively, emotionally, and socially.
                                        </p>

                                        <span class="elementor-heading-title banner-title elementor-size-default">
                                            Curriculum and Instruction
                                        </span>
                                        <p>
                                        The fundamentals of designing, implementing, and evaluating educational curricula, with topics related to planning, instructional strategies, materials selection, diversity issues, assessment methods, and technology integration.
                                        </p>

                                        <span class="elementor-heading-title banner-title elementor-size-default">
                                            Educational Technology
                                        </span>
                                        <p>
                                        An introduction to the use of technology for teaching and learning, including emerging technologies, teaching with technology, digital media literacy, online learning tools, and security and privacy issues.
                                        </p>

                                        <span class="elementor-heading-title banner-title elementor-size-default">
                                            Special Education
                                        </span>
                                        <p>
                                        Topics related to special education including identifying learners with special needs, developing Individualized Education Plans (IEPs), collaboration with families, laws and regulations governing special education services, and effective instructional strategies.
                                        </p>

                                        <span class="elementor-heading-title banner-title elementor-size-default">
                                            Early childhood Education
                                        </span>
                                        <p>
                                        An indepth look into the development of children from birth to age eight, covering educational techniques used to foster learning. 
                                        </p>

                                        <span class="elementor-heading-title banner-title elementor-size-default">
                                            Jobs in Education
                                        </span>
                                        <p>
                                        Education is a broad field with many exciting career paths. Whether you want to pursue a career inside or outside of the classroom, many different options are available. 
                                        Inside the classroom, teachers and professors provide instruction and prepare materials for their students. They are also involved in assessment, evaluation, and curriculum planning. As a teacher, you can focus on a specific subject, such as math, history, science, or language arts. You could also specialize in early childhood education or become a special education teacher. 
                                        There are also many jobs for professionals outside the classroom, such as a school administrator, where you will be tasked with managing the operations of an educational institution which can involve hiring faculty, developing policies, and overseeing budgets. You can pursue a career as a consultant, advising organizations on educational topics; typical job activities include evaluating programs, creating reports, and suggesting potential improvements. And, you can work as a curriculum writer, crafting the material taught in the classroom, or an instructional designer, assessing existing training practices and developing online learning programs.”
                                        </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!--  <a
                                       href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        style="background-color: #3b3bf9;"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif

                <style>
                    @media (min-width: 768px) {
                      .elementor-67 .elementor-element.elementor-element-f496e11 {
                         --width: 75%;
                      }
                   }
                    @media (max-width: 768px) {
                      .elementor-67 .elementor-element.elementor-element-f496e11 {
                         --width: 92%;
                      }
                   }
                </style>

                <!-- academy images -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">GMS Academy</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-values"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img decoding="async" style="height: 200px; width:100%;" src="https://www.investopedia.com/thmb/DF1cjkhi9_6nNTGtux9PJ3P4d8c=/2121x1414/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-1162966574-75a6582a8c5148b48b26282017ea71da.jpg" alt="">
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img decoding="async" style="height: 200px; width:100%;" src="https://www.brameshtechanalysis.com/wp-content/uploads/2021/01/education.jpg" alt="">
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img decoding="async" style="height: 200px; width:100%;" src="https://a.c-dn.net/b/0lKPqO/Trading_Discipline.jpg" alt="">
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif

                <!-- academy images -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">GMS Academy</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="our-values"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img decoding="async" style="height: 200px; width:100%;" src="https://qph.cf2.quoracdn.net/main-qimg-6dfcdfb4f43cd94589e53df0c56e2328-pjlq" alt="">
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img decoding="async" style="height: 200px; width:100%;" src="https://insightssuccess.com/wp-content/uploads/2022/08/Forex-Trading-Education-Can-you-really-make-it-alone-1.jpg" alt="">
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img decoding="async" style="height: 200px; width:100%;" src="https://mastertrader.com/wp-content/uploads/2020/03/trades1.jpg" alt="">
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif


                <!-- benefits -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">Benefits</div>
                <div
                    class="elementor-element elementor-element-c1c4aaf e-con-full e-flex e-con e-parent"
                    data-id="c1c4aaf"
                    id="the-benefits"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                    data-core-v316-plus="true"
                >
                    <div
                        class="elementor-element elementor-element-94c7ebe elementor-widget elementor-widget-offer-tab"
                        data-id="94c7ebe"
                        data-element_type="widget"
                        data-widget_type="offer-tab.default"
                    >
                        <div class="elementor-widget-container">
                            <script>
                            jQuery(document).ready(function($) {

                                AOS.init();

                            });
                            </script>
                            <section class="feature feature--style1 padding-bottom padding-top bg-color">
                                <div class="container">
                                    <div class="feature__wrapper">
                                        <div class="row g-5 align-items-center justify-content-between">
                                            <div class="col-md-6 col-lg-5">
                                                <div class="feature__content" data-aos="fade-right" data-aos-duration="800">
                                                    <div class="feature__content-inner">
                                                        <div class="section-header">
                                                            <h2 class="mb-15 mt-minus-5">
                                                                <span style="color: var(--secondary-color)">benefits</span>
                                                                We offer
                                                            </h2>
                                                            <p class="mb-0">Unlock the full potential of our product with our amazing features and top-notch.</p>
                                                        </div>
                                                        <div class="feature__nav">
                                                            <div
                                                                class="nav nav--feature flex-column nav-pills"
                                                                id="feat-pills-tab"
                                                                role="tablist"
                                                                aria-orientation="vertical"
                                                            >
                                                                <div
                                                                    class="nav-link active"
                                                                    id="tg-tab-0"
                                                                    data-bs-toggle="pill"
                                                                    data-bs-target="#tg-id-0"
                                                                    role="tab"
                                                                    aria-controls="tg-id-0"
                                                                    aria-selected="true"
                                                                >
                                                                    <div class="feature__item">
                                                                        <div class="feature__item-inner">
                                                                            <div class="feature__item-content">
                                                                                <h6>Make profit by staking in our company</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="nav-link "
                                                                    id="tg-tab-1"
                                                                    data-bs-toggle="pill"
                                                                    data-bs-target="#tg-id-1"
                                                                    role="tab"
                                                                    aria-controls="tg-id-1"
                                                                    aria-selected="true"
                                                                >
                                                                    <div class="feature__item">
                                                                        <div class="feature__item-inner">
                                                                            <div class="feature__item-content">
                                                                                <h6>Make profit by staking in our company</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="nav-link "
                                                                    id="tg-tab-2"
                                                                    data-bs-toggle="pill"
                                                                    data-bs-target="#tg-id-2"
                                                                    role="tab"
                                                                    aria-controls="tg-id-2"
                                                                    aria-selected="true"
                                                                >
                                                                    <div class="feature__item">
                                                                        <div class="feature__item-inner">
                                                                            <div class="feature__item-content">
                                                                                <h6>Mobile payment is more flexible and easy for all stakers</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="nav-link "
                                                                    id="tg-tab-3"
                                                                    data-bs-toggle="pill"
                                                                    data-bs-target="#tg-id-3"
                                                                    role="tab"
                                                                    aria-controls="tg-id-3"
                                                                    aria-selected="true"
                                                                >
                                                                    <div class="feature__item">
                                                                        <div class="feature__item-inner">
                                                                            <div class="feature__item-content">
                                                                                <h6>all transaction is kept free for the member of pro traders</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="feature__thumb pt-5 pt-md-0" data-aos="fade-left" data-aos-duration="800">
                                                    <div class="feature__thumb-inner">
                                                        <div class="tab-content" id="feat-pills-tabContent">
                                                            <div
                                                                class="tab-pane fade "
                                                                id="tg-id-0"
                                                                role="tabpanel"
                                                                aria-labelledby="tg-tab-0"
                                                                tabindex="0"
                                                            >
                                                                <div class="feature__image floating-content">
                                                                    <img decoding="async" src="/wp-content/uploads/2023/10/features01.png" alt="Feature image">
                                                                    <div class="floating-content__top-right floating-content__top-right--style2" data-aos="fade-left" data-aos-duration="1000">
                                                                        <div class="floating-content__item floating-content__item--style2 text-center">
                                                                            <img
                                                                                decoding="async"
                                                                                src="/wp-content/uploads/2023/10/percent01.png"
                                                                                width="80"
                                                                                alt="Feature image"
                                                                            >
                                                                            <p class="style2">Monthly profit</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="floating-content__bottom-left floating-content__bottom-left--style2" data-aos="fade-left" data-aos-duration="1000">
                                                                        <div class="floating-content__item floating-content__item--style3  d-flex align-items-center">
                                                                            <h3 class="style2">10M</h3>
                                                                            <p class="ms-3 style2">Available for loan</p> -->
                                                                    <!-- </div> -->
                                                                    <!-- </div> -->
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="tab-pane fade show active"
                                                                id="tg-id-1"
                                                                role="tabpanel"
                                                                aria-labelledby="tg-tab-1"
                                                                tabindex="0"
                                                            >
                                                                <div class="feature__image floating-content">
                                                                    <img decoding="async" src="https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg?cs=srgb&dl=pexels-divinetechygirl-1181406.jpg&fm=jpg" alt="Feature image">
                                                                    <div class="floating-content__top-right floating-content__top-right--style2" data-aos="fade-left" data-aos-duration="1000">
                                                                        <div class="floating-content__item floating-content__item--style2 text-center">
                                                                            <img
                                                                                decoding="async"
                                                                                src="/wp-content/uploads/2023/10/percent01.png"
                                                                                width="80"
                                                                                alt="Feature image"
                                                                            >
                                                                            <p class="style2">Monthly Profit</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="floating-content__bottom-left floating-content__bottom-left--style2" data-aos="fade-left" data-aos-duration="1000">
                                                                        <!-- <div class="floating-content__item floating-content__item--style3  d-flex align-items-center">
                                                                            <h3 class="style2">18M</h3>
                                                                            <p class="ms-3 style2">Available for loan</p> -->
                                                                        <!-- </div> --></div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="tab-pane fade "
                                                                id="tg-id-2"
                                                                role="tabpanel"
                                                                aria-labelledby="tg-tab-2"
                                                                tabindex="0"
                                                            >
                                                                <div class="feature__image floating-content">
                                                                    <img decoding="async" src="/wp-content/uploads/2023/10/features01.png" alt="Feature image">
                                                                    <div class="floating-content__top-right floating-content__top-right--style2" data-aos="fade-left" data-aos-duration="1000">
                                                                        <div class="floating-content__item floating-content__item--style2 text-center">
                                                                            <img
                                                                                decoding="async"
                                                                                src="/wp-content/uploads/2023/10/percent03.png"
                                                                                width="80"
                                                                                alt="Feature image"
                                                                            >
                                                                            <p class="style2">Monthly Profit</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="floating-content__bottom-left floating-content__bottom-left--style2" data-aos="fade-left" data-aos-duration="1000">
                                                                        <!-- <div class="floating-content__item floating-content__item--style3  d-flex align-items-center">
                                                                            <h3 class="style2">30M</h3>
                                                                            <p class="ms-3 style2">Available for loan</p> -->
                                                                        <!-- </div> --></div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="tab-pane fade "
                                                                id="tg-id-3"
                                                                role="tabpanel"
                                                                aria-labelledby="tg-tab-3"
                                                                tabindex="0"
                                                            >
                                                                <div class="feature__image floating-content">
                                                                    <img decoding="async" src="/wp-content/uploads/2023/10/features02.png" alt="Feature image">
                                                                    <div class="floating-content__top-right floating-content__top-right--style2" data-aos="fade-left" data-aos-duration="1000">
                                                                        <div class="floating-content__item floating-content__item--style2 text-center">
                                                                            <img
                                                                                decoding="async"
                                                                                src="/wp-content/uploads/2023/10/percent04.png"
                                                                                width="80"
                                                                                alt="Feature image"
                                                                            >
                                                                            <p class="style2">Monthly Profit</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="floating-content__bottom-left floating-content__bottom-left--style2" data-aos="fade-left" data-aos-duration="1000">
                                                                        <!-- <div class="floating-content__item floating-content__item--style3  d-flex align-items-center">
                                                                            <h3 class="style2">28M</h3>
                                                                            <p class="ms-3 style2">Available for loan</p> -->
                                                                        <!-- </div> --></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature__shape">
                                    <span class="feature__shape-item feature__shape-item--1">
                                        <img
                                            decoding="async"
                                            src="/wp-content/uploads/2023/10/features_shape.png"
                                            width="70"
                                            alt="shape-icon"
                                        >
                                    </span>
                                    <span class="feature__shape-item feature__shape-item--2">
                                        <span></span>
                                    </span>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
                @endif

                <!-- Market Analysis -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">Market Analysis</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="market-analysis"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img decoding="async" src="https://cdn.pixabay.com/photo/2020/07/08/04/12/work-5382501_640.jpg" alt="">
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        Market
                                        <span style="color: var(--secondary-color);">Analysis</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        "Stock market analysis: Volatile trends, tech dominance, heightened investor caution."
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!-- <a
                                        href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif

                <!-- Staking Plans -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">Staking Plans</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="invest-plans"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        Staking
                                        <span style="color: var(--secondary-color);">Plans</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        “Get staking plans and ideas to grow passive income and get a settled returns”
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!-- <a
                                        href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    style="height: 298px;"
                                                    decoding="async"
                                                    src="https://www.maxlifeinsurance.com/content/dam/corporate/images/Monthly_Investment_Plan-1.png"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif

                <!-- Growth Testing -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">Growth Testing</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="growth-testing"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://th.bing.com/th/id/OIG3.zWdt6pmysxQ9BiINgbKb?w=270&h=270&c=6&r=0&o=5&dpr=1.5&pid=ImgGn"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        Growth
                                        <span style="color: var(--secondary-color);">Testing</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        "Involves evaluating potential stakings for long-term growth and profitability."
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!-- <a
                                        href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif

                <!-- Management -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">Management</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="the-management"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        The
                                        <span style="color: var(--secondary-color);">Management</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        “The process of effectively managing finances, including budgeting, saving, investing.”
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!-- <a
                                        href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://th.bing.com/th/id/OIG2.osRu_HeoJCNZzQDZqWAM?w=270&h=270&c=6&r=0&o=5&dpr=1.5&pid=ImgGn"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif

                <!-- AI Trading -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">AI Trading</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="ai-trading"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://www.bing.com/th?id=OIP.Jsk8bZckCJymbr4U_jf2bAHaD5&w=220&h=110&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        AI
                                        <span style="color: var(--secondary-color);">Trading</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        "AI Trade is an Artificial Intelligence Robot that analyzes market Direction such as Forex, cryptocurrencies and Volatility Index market. It also predicts future trades by using market killer trading strategy with the idea of price action.

                                        Artificial intelligence is a machines that are programmed to think like humans and mimic their actions. With the use of AI Trading-Bot, we have been able to minimize loses in the Forex / Cryptocurrencies market and we have also extends AI Trading-Bot to trade on both spot and future trade. AI -Trading-Bot has been programmed in such a way that, it can place trade and generate profits when markets are bad by trading on the futures market."
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!-- <a
                                        href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif

                <!-- TRADING TYPES -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">TRADING TYPES</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="arbitrage-bot"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards sec-top-img" >
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            style="width: 85%;"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        <span style="color: var(--secondary-color);">TRADING</span>
                                        TYPES
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container trade-p">
                                    <style>
                                        .trade-p span{
color: #fff;
font-size: 18px;
font-weight: 700;
                                        }
                                    </style>
                                    <p class="elementor-heading-title elementor-size-default trade-p">
                                        Cryptocurrency trading has evolved into a diverse field with various strategies that traders use to capitalize on the market’s volatility. Here are some of the different 
                                        <br>
                                        Types of crypto trading:
                                        <br>
                                        <br>
                                        <div style="display: flex; flex-direction: row;">
                                        <img  style="height: 100px; width: 100px; margin-right: 13px; border-radius: 10px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2XSVewtS5iuPbsVb_ile28xRphgfiDMZ1GQ&usqp=CAU">
                                        <div class="trade-p">
                                        <span>ARBITRAGE BOT</span>
                                        <br> A reliable strategy designed for low risk investor. Trade and profit from a differences across Forex prices between markets.
                                        </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div style="display: flex; flex-direction: row;">
                                        <img  style="height: 100px; width: 100px; margin-right: 13px; border-radius: 10px;" src="https://bullsonwallstreet.com/wp-content/uploads/2019/01/Day-Trading-Definition.png">
                                        <div class="trade-p">
                                        <span>Day Trading:</span><br> Involves executing multiple trades within a single day to take advantage of short-term price movements                                                                              
                                        </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div style="display: flex; flex-direction: row;">
                                        <img  style="height: 100px; width: 100px; margin-right: 13px; border-radius: 10px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkOwkQYBo0Kzo9sDDsD8f-jfw8F7bUWqBMHBpfW95xRyJ1AcoOOMrSCnZvqHCxxZwGOv8&usqp=CAU">
                                        <div class="trade-p">
                                        <span>Swing Trading:</span><br> Targets longer-term volatility, holding trades for several days or weeks to capture market trends.
                                        </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div style="display: flex; flex-direction: row;">
                                        <img  style="height: 100px; width: 100px; margin-right: 13px; border-radius: 10px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCqB6f_gkIlbBXP_JSFI4EdnpLNU7rMJKDZxEwOc2_OfuCA7faCiOXyyf0qyJWZRDKbb8&usqp=CAU">
                                        <div class="trade-p">
                                        <span>Trend Following:</span><br> Traders identify directional patterns and trends in the market to make their trades.
                                        </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div style="display: flex; flex-direction: row;">
                                        <img  style="height: 100px; width: 100px; margin-right: 13px; border-radius: 10px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdAWtC24oruR5bkhyns1r5UC5JaUEez6qFc3KxTwAI0S5PLoblaE06E2KFN58cR6z1GhI&usqp=CAU">
                                        <div class="trade-p">
                                        <span>Spot Trading:</span><br> Direct exchange of coins at current market prices, focusing on short-term transactions.
                                        </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div style="display: flex; flex-direction: row;">
                                        <img  style="height: 100px; width: 100px; margin-right: 13px; border-radius: 10px;" src="https://miro.medium.com/v2/resize:fit:945/1*8sCfHdRPgSJxUK_YyfRZGQ.jpeg">
                                        <div class="trade-p">
                                        <span>Futures & Options Trading:</span><br> Involves derivatives contracts, allowing traders to speculate on future prices of cryptocurrencies.
                                        </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div style="display: flex; flex-direction: row;">
                                        <img  style="height: 100px; width: 100px; margin-right: 13px; border-radius: 10px;" src="https://miro.medium.com/v2/resize:fit:800/1*CiLXCqRqleD2GnFakvltBQ.png">
                                        <div class="trade-p">
                                        <span>Margin Trading:</span> <br> Trading with borrowed money to increase potential returns, which also increases potential risk.
                                        </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div style="display: flex; flex-direction: row;">
                                        <img  style="height: 100px; width: 100px; margin-right: 13px; border-radius: 10px;" src="https://realtrading.com/wp-content/uploads/2021/07/range-trading.png">
                                        <div class="trade-p">
                                        <span>Range Trading:</span> <br> Traders use support and resistance levels to buy low and sell high within a specific range.
                                        </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div style="display: flex; flex-direction: row;">
                                        <img  style="height: 100px; width: 100px; margin-right: 13px; border-radius: 10px;" src="https://online.hbs.edu/Style%20Library/api/resize.aspx?imgpath=/PublishingImages/blog/posts/arbitrage.jpg&w=1200&h=630">
                                        <div class="trade-p">
                                        <span>Arbitrage Trading:</span> <br> Exploits price differences across different exchanges or markets to make a profit.
                                        </div>
                                        </div>
                                        <br>
                                        <br>
                                        Each type of trading requires different skills and strategies, and the level of risk varies. Traders should choose a style that aligns with their staking goals, risk tolerance, and the amount of time they can dedicate to monitoring the markets.
                                        
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!-- <a
                                        href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://th.bing.com/th/id/OIG4.kZqaf_ne5bO2cG.7dNja?w=270&h=270&c=6&r=0&o=5&dpr=1.5&pid=ImgGn"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif

                <!-- ROAD MAP -->
                @if($page == 'all' || $page == 'ourmission')
            <div class="elementor-element elementor-element-5482bb2 bg-color e-flex e-con-boxed e-con e-parent" data-id="5482bb2" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-a229896 elementor-widget__width-inherit elementor-absolute h-100 elementor-widget elementor-widget-bg-shapes" data-id="a229896" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                        data-widget_type="bg-shapes.default">
                        <div class="elementor-widget-container">


                            <div class="roadmap--style1">
                                <span class="roadmap__shape-item roadmap__shape-item--1">
                    <span></span>
                                </span>
                            </div>


                        </div>
                    </div>
                    <div class="elementor-element elementor-element-8a1b9ae elementor-widget__width-auto elementor-absolute upAndDown_animation elementor-widget elementor-widget-image" data-id="8a1b9ae" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                        data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.16.0 - 09-10-2023 */

                                .elementor-widget-image {
                                    text-align: center
                                }

                                .elementor-widget-image a {
                                    display: inline-block
                                }

                                .elementor-widget-image a img[src$=".svg"] {
                                    width: 48px
                                }

                                .elementor-widget-image img {
                                    vertical-align: middle;
                                    display: inline-block
                                }
                                
                                @media (min-width: 768px) {
                                     .roadmap--style1 .roadmap__wrapper:after {
                                        height: 10% !important;
                                    }
                                }
                            </style> <img decoding="async" width="106" height="106" src="https://bitrader.thetork.com/dark/wp-content/uploads/2023/10/shape01.png" class="attachment-full size-full wp-image-238" alt="" /> </div>
                    </div>
                    <div class="elementor-element elementor-element-0caae5d e-flex e-con-boxed e-con e-child" data-id="0caae5d" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                        <div class="e-con-inner sectioncards">
                            <div class="elementor-element elementor-element-6f737e6 elementor-widget elementor-widget-tg-heading" data-id="6f737e6" data-element_type="widget" data-widget_type="tg-heading.default">
                                <div class="elementor-widget-container">

                                    <div class="section-title">
                                        <h2 class="title">The <span>Roadmap</span></h2>
                                    </div>

                                </div>
                            </div>
                            <div class="elementor-element elementor-element-c258034 elementor-widget elementor-widget-heading" data-id="c258034" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">The roadmap shows the path ahead, helps teams plan, and guides the delivery of the product.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-3473502 elementor-widget elementor-widget-genix-roadmap" data-id="3473502" data-element_type="widget" data-widget_type="genix-roadmap.default">
                        <div class="elementor-widget-container">

                            <script>
                                jQuery(document).ready(function($) {

                                    AOS.init();

                                });
                            </script>


                            <div class="roadmap--style1">
                                <div class="roadmap__wrapper">
                                    <div class="row gy-4 gy-md-0 gx-5">
                                        <div class="col-md-6 offset-md-6">
                                            <div class="roadmap__item ms-md-4 aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                                <div class="roadmap__item-inner">
                                                    <div class="roadmap__item-content">
                                                        <div class="roadmap__item-header">
                                                            <h3>Website launching</h3>
                                                            <span>Q2</span>
                                                        </div>
                                                        <p>Website launching and first level leaders meet in india.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="roadmap__item roadmap__item--style2 ms-auto me-md-4 aos-init aos-animate" data-aos="fade-right" data-aos-duration="800">
                                                <div class="roadmap__item-inner">
                                                    <div class="roadmap__item-content">
                                                        <div class="roadmap__item-header">
                                                            <h3>International launching</h3>
                                                            <span>Q3</span>
                                                        </div>
                                                        <p>Second leaders meet and international launching at dubai.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 offset-md-6">
                                            <div class="roadmap__item ms-md-4 aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                                <div class="roadmap__item-inner">
                                                    <div class="roadmap__item-content">
                                                        <div class="roadmap__item-header">
                                                            <h3>Financial ecosystem</h3>
                                                            <span>Q4</span>
                                                        </div>
                                                        <p>Thrive card launching</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            @endif

                <!-- INVEST RISK FREE -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">RISK FREE</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="risk-free"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://assets.entrepreneur.com/content/3x2/2000/20170130170703-GettyImages-539953664.jpeg"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        Stake
                                        <span style="color: var(--secondary-color);">RISK FREE</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        "Arbitrage is a risk-free trading strategy that allows investors to make a profit with no exposure. Our system makes sure that it detects price discrepancies only and takes advantage of the minimal amount of time to make profit"
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!-- <a
                                        href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif

                <!-- LOW LATENCY EXECUTION -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">LATENCY EXECUTION</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="low-latency"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        LOW
                                        <span style="color: var(--secondary-color);">LATENCY EXECUTION</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        “Our Triangular Arbitrage is a High Frequency Trading business. Running a crypto Arbitrage bot on low latency and high throughput system gives you the real edge on the market. Our infrastructure was built to satisfy the highest requirements of institutional traders on GMS.”
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!-- <a
                                        href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://tse4.mm.bing.net/th/id/OIG2.NvpNTopHdTz7rH.vFfK3?pid=ImgGn"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif
                
                <!-- DEDICATED QUANT TEAM -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">QUANT TEAM</div>
                <div
                    class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                    data-id="47b6712"
                    id="quant-team"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                            data-id="3d03e0f"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                                data-id="8a79fe6"
                                data-element_type="widget"
                                data-widget_type="genix-image.default"
                            >
                                <div class="elementor-widget-container">
                                    <script>
                                    jQuery(document).ready(function($) {

                                        AOS.init();

                                    });
                                    </script>
                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img
                                                    decoding="async"
                                                    style="height: 298px;"
                                                    src="https://res.cloudinary.com/dqpnh8iui/image/upload/v1712908322/header_2f95753b8f.svg"
                                                    alt=""
                                                >
                                                <div class="floating-content__top-left">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div> --></div>
                                                <div class="floating-content__bottom-right">
                                                    <!-- <div class="floating-content__item">
                                                        <h3>25K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div> --></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                            data-id="f496e11"
                            data-element_type="container"
                            data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                        >
                            <div
                                class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                                data-id="2a404d7"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        DEDICATED
                                        <span style="color: var(--secondary-color);">QUANT TEAM</span>
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                                data-id="77c0134"
                                data-element_type="widget"
                                data-widget_type="heading.default"
                            >
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        "Let our team of quant developers continuously work on our proprietary algorithms. They have vast experience in implementing market making bots and algorithms for staking banks, brokerage firms, exchanges, and hedge funds."
                                    </p>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                                data-id="211649c"
                                data-element_type="widget"
                                data-widget_type="tg-btn.default"
                            >
                                <div class="elementor-widget-container">
                                    <!-- <a
                                        href="/dark/about-us/"
                                        target="_self"
                                        rel="nofollow"
                                        class="trk-btn trk-btn--border trk-btn--primary"
                                    >
                                        More
                                    </a> --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif

                <!-- GMS EVENTS 2024 -->
                @if($page == 'all' || $page == 'ourmission')
                <div class="stticky">
                <div class="stticky-text">GMS EVENTS</div>
                <div
                class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
                data-id="47b6712"
                id="low-latency"
                data-element_type="container"
                data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                data-core-v316-plus="true"
            >
                <div class="e-con-inner">
                 </div>
                </div>
            </div>
                @endif

                <!-- GMS EVENT images -->
                @if($page == 'all' || $page == 'ourmission')
                <style>
                    .about__thumb-image::after {
                        position: absolute;
                        content: none !important;
                        display: none !important;
                    }
                    .evnt_imgs .about__thumb-image.floating-content {
                        display: flex;
                        justify-content: center;
                    }
                    .elementor-67 .elementor-element.elementor-element-3d03e0f {
                        --width: 100% !important;
                    }
                    .evnt_imgs{    width: 100% ;
                        display: grid ;
                        grid-template-columns: repeat(3, 1fr);
                        grid-gap: 50px;
                    }
                    @media (max-width:800px) {
                        .evnt_imgs{
                             grid-template-columns: repeat(2, 1fr);
                             grid-gap: 20px;
                        }
                    }
                </style>
                <div class="stticky">
                <div class="stticky-text">GMS EVENTS</div>
                <div
            class="elementor-element elementor-element-47b6712 e-flex e-con-boxed e-con e-parent"
            data-id="47b6712"
            id="low-latency"
            data-element_type="container"
            data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
            data-core-v316-plus="true"
        >
            <div class="e-con-inner sectioncards" style="display: flex; flex-direction: column; justify-content: center; align-items: start;">
                <div>
                <div
                    class="elementor-element elementor-element-f496e11 e-con-full e-flex e-con e-child"
                    data-id="f496e11"
                    style="
                    width: 100%;
                "
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                >
                    <div
                        class="elementor-element elementor-element-2a404d7 elementor-widget elementor-widget-heading"
                        data-id="2a404d7"
                        data-element_type="widget"
                        data-widget_type="heading.default"
                    >
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">
                                GMS EVENTS
                                <span style="color: var(--secondary-color);">2024</span>
                                
                            </h2>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-77c0134 elementor-widget elementor-widget-heading"
                        data-id="77c0134"
                        data-element_type="widget"
                        data-widget_type="heading.default"
                    >
                        <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default">
                                <!-- “Our Triangular Arbitrage is a High Frequency Trading business. Running a crypto Arbitrage bot on low latency and high throughput system gives you the real edge on the market. Our infrastructure was built to satisfy the highest requirements of institutional traders on GMS.” -->
                            </p>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-211649c elementor-widget elementor-widget-tg-btn"
                        data-id="211649c"
                        data-element_type="widget"
                        data-widget_type="tg-btn.default"
                    >
                        <div class="elementor-widget-container">
                            <!-- <a
                                href="/dark/about-us/"
                                target="_self"
                                rel="nofollow"
                                class="trk-btn trk-btn--border trk-btn--primary"
                            >
                                More
                            </a> --></div>
                    </div>
                </div>
            </div>
            <div class="evnt_imgs">
                <div
                    class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                    data-id="3d03e0f"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                >
                    <div
                        class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                        data-id="8a79fe6"
                        data-element_type="widget"
                        data-widget_type="genix-image.default"
                    >
                        <div class="elementor-widget-container">
                            <script>
                            jQuery(document).ready(function($) {

                                AOS.init();

                            });
                            </script>
                            <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                <div class="about__thumb-inner">
                                    <div class="about__thumb-image floating-content">
                                        <img
                                            decoding="async"
                                            style="height: 180px;"
                                            src="https://img.lovepik.com/photo/48013/9721.jpg_wh860.jpg"
                                            alt=""
                                        >
                                        <div class="floating-content__top-left">
                                            <!-- <div class="floating-content__item">
                                                <h3>10 Years</h3>
                                                <p>Consulting Experience</p>
                                            </div> --></div>
                                        <div class="floating-content__bottom-right">
                                            <!-- <div class="floating-content__item">
                                                <h3>25K+</h3>
                                                <p>Satisfied Customers</p>
                                            </div> --></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                    data-id="3d03e0f"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                >
                    <div
                        class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                        data-id="8a79fe6"
                        data-element_type="widget"
                        data-widget_type="genix-image.default"
                    >
                        <div class="elementor-widget-container">
                            <script>
                            jQuery(document).ready(function($) {

                                AOS.init();

                            });
                            </script>
                            <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                <div class="about__thumb-inner">
                                    <div class="about__thumb-image floating-content">
                                        <img
                                            decoding="async"
                                            style="height: 180px;"
                                            src="https://cdn.vectorstock.com/i/500p/64/54/travel-destination-poster-vector-51116454.jpg"
                                            alt=""
                                        >
                                        <div class="floating-content__top-left">
                                            <!-- <div class="floating-content__item">
                                                <h3>10 Years</h3>
                                                <p>Consulting Experience</p>
                                            </div> --></div>
                                        <div class="floating-content__bottom-right">
                                            <!-- <div class="floating-content__item">
                                                <h3>25K+</h3>
                                                <p>Satisfied Customers</p>
                                            </div> --></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                    data-id="3d03e0f"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                >
                    <div
                        class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                        data-id="8a79fe6"
                        data-element_type="widget"
                        data-widget_type="genix-image.default"
                    >
                        <div class="elementor-widget-container">
                            <script>
                            jQuery(document).ready(function($) {

                                AOS.init();

                            });
                            </script>
                            <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                <div class="about__thumb-inner">
                                    <div class="about__thumb-image floating-content">
                                        <img
                                            decoding="async"
                                            style="height: 180px;"
                                            src="https://wallpapers.com/images/featured/dubai-z03qow0d0d3yuumg.jpg"
                                            alt=""
                                        >
                                        <div class="floating-content__top-left">
                                            <!-- <div class="floating-content__item">
                                                <h3>10 Years</h3>
                                                <p>Consulting Experience</p>
                                            </div> --></div>
                                        <div class="floating-content__bottom-right">
                                            <!-- <div class="floating-content__item">
                                                <h3>25K+</h3>
                                                <p>Satisfied Customers</p>
                                            </div> --></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="elementor-element elementor-element-3d03e0f e-con-full e-flex e-con e-child"
                    data-id="3d03e0f"
                    data-element_type="container"
                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                >
                    <div
                        class="elementor-element elementor-element-8a79fe6 elementor-widget elementor-widget-genix-image"
                        data-id="8a79fe6"
                        data-element_type="widget"
                        data-widget_type="genix-image.default"
                    >
                        <div class="elementor-widget-container">
                            <script>
                            jQuery(document).ready(function($) {

                                AOS.init();

                            });
                            </script>
                            <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                <div class="about__thumb-inner">
                                    <div class="about__thumb-image floating-content">
                                        <img
                                            decoding="async"
                                            style="height: 180px;"
                                            src="https://th.bing.com/th/id/OIG4..Qlc06SeBrXOISLCqBq_?w=270&h=270&c=6&r=0&o=5&dpr=2&pid=ImgGn"
                                            alt=""
                                        >
                                        <div class="floating-content__top-left">
                                            <!-- <div class="floating-content__item">
                                                <h3>10 Years</h3>
                                                <p>Consulting Experience</p>
                                            </div> --></div>
                                        <div class="floating-content__bottom-right">
                                            <!-- <div class="floating-content__item">
                                                <h3>25K+</h3>
                                                <p>Satisfied Customers</p>
                                            </div> --></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
                </div>
            </div>
                @endif

                <!-- Sbscrib -->
                @if($page == 'all')
                <div
                    class="elementor-element elementor-element-cca183d bg-color e-flex e-con-boxed e-con e-parent"
                    data-id="cca183d"
                    id="contact_us"
                    data-element_type="container"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner">
                        <div
                            class="elementor-element elementor-element-a3cd40c e-flex e-con-boxed e-con e-child"
                            data-id="a3cd40c"
                            data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                        >
                            <div class="e-con-inner">
                                <div
                                    style="background-color: #00D094 !important;"
                                    class="elementor-element elementor-element-e8c8591 e-con-full e-flex e-con e-child"
                                    data-id="e8c8591"
                                    data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
                                >
                                    <div/dark/wp-content/uploads/2023/10/cta_shape1.png
                                        class="elementor-element elementor-element-403e394 e-con-full e-flex e-con e-child"
                                        data-id="403e394"
                                        data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                                    >
                                        <div
                                            class="elementor-element elementor-element-17f2b1b cta__thumb elementor-widget elementor-widget-image"
                                            data-id="17f2b1b"
                                            data-element_type="widget"
                                            data-widget_type="image.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <img
                                                    loading="lazy"
                                                    decoding="async"
                                                    width="244"
                                                    height="235"
                                                    src="https://cdni.iconscout.com/illustration/premium/thumb/man-working-on-laptop-5560594-4634155.png?f=webp"
                                                    class="attachment-full size-full wp-image-312"
                                                    alt=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-02dff66 e-flex e-con-boxed e-con e-child"
                                        data-id="02dff66"
                                        data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                                    >
                                        <div class="e-con-inner">
                                            <div
                                                class="elementor-element elementor-element-34cb115 elementor-widget elementor-widget-tg-heading"
                                                data-id="34cb115"
                                                data-element_type="widget"
                                                data-widget_type="tg-heading.default"
                                            >
                                                <div class="elementor-widget-container">
                                                    <div class="section-title">
                                                        <h2 class="title">
                                                            <span style="color: var(--secondary-color)">Contact</span>
                                                            Us
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-dad813c elementor-widget elementor-widget-heading"
                                                data-id="dad813c"
                                                data-element_type="widget"
                                                data-widget_type="heading.default"
                                            >
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">Hey! Are you tired of missing out on our updates? Contact us , we will contact you in 24hr</p>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-50c820d text-center elementor-widget elementor-widget-shortcode"
                                                data-id="50c820d"
                                                data-element_type="widget"
                                                data-widget_type="shortcode.default"
                                            >
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-shortcode">
                                                        <script>
                                                        (function() {
                                                            window.mc4wp = window.mc4wp || {
                                                                listeners: [],
                                                                forms: {
                                                                    on: function(evt, cb) {
                                                                        window.mc4wp.listeners.push({
                                                                            event: evt,
                                                                            callback: cb
                                                                        });
                                                                    }
                                                                }
                                                            }
                                                        })();
                                                        </script>
                                                        <!-- Mailchimp for WordPress v4.9.9 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                                        <form
                                                            id="mc4wp-form-1"
                                                            class="mc4wp-form mc4wp-form-329"
                                                            method="post"
                                                            data-id="329"
                                                            data-name="Newsletter Form"
                                                        >
                                                            <div class="mc4wp-form-fields">
                                                                <div class="cta-form cta-form--style2 form-subscribe">
                                                                    <div class="cta-form__inner d-sm-flex align-items-center">
                                                                        <input
                                                                            type="email"
                                                                            class="form-control form-control--style2 mb-3 mb-sm-0"
                                                                            name="EMAIL"
                                                                            placeholder="Email Address"
                                                                            required
                                                                        >
                                                                        <button class="trk-btn  trk-btn--large trk-btn--secondary2" style="background-color: var(--secondary-color) !important; border-color: var(--secondary-color) !important;" type="submit">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <label style="display: none !important;">
                                                                Leave this field empty if you're human:
                                                                <input
                                                                    type="text"
                                                                    name="_mc4wp_honeypot"
                                                                    value=""
                                                                    tabindex="-1"
                                                                    autocomplete="off"
                                                                >
                                                            </label>
                                                            <input type="hidden" name="_mc4wp_timestamp" value="1714408147">
                                                            <input type="hidden" name="_mc4wp_form_id" value="329">
                                                            <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                                                            <div class="mc4wp-response"></div>
                                                        </form>
                                                        <!-- / Mailchimp for WordPress Plugin -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div
                                    class="elementor-element elementor-element-3db5055 elementor-widget__width-auto elementor-absolute bit_rotate_animation elementor-widget elementor-widget-image"
                                    data-id="3db5055"
                                    data-element_type="widget"
                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                    data-widget_type="image.default"
                                >
                                    <div class="elementor-widget-container">
                                        <img
                                            loading="lazy"
                                            decoding="async"
                                            width="65"
                                            height="65"
                                            src="/dark/wp-content/uploads/2023/10/cta_shape1.png"
                                            class="attachment-full size-full wp-image-341"
                                            alt=""
                                        >
                                    </div>
                                </div> -->
                                <div
                                    class="elementor-element elementor-element-617ebb8 elementor-widget__width-auto elementor-absolute upAndDown_animation elementor-widget elementor-widget-image"
                                    data-id="617ebb8"
                                    data-element_type="widget"
                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                    data-widget_type="image.default"
                                >
                                    <div class="elementor-widget-container">
                                        <img
                                            decoding="async"
                                            width="106"
                                            height="106"
                                            src="/dark/wp-content/uploads/2023/10/shape01.png"
                                            class="attachment-full size-full wp-image-238"
                                            alt=""
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Support -->
                @if($page == 'support')
                <div
                    class="elementor-element elementor-element-cca183d bg-color e-flex e-con-boxed e-con e-parent"
                    data-id="cca183d"
                    data-element_type="container"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true"
                >
                    <div class="e-con-inner sectioncards">
                        <div
                            class="elementor-element elementor-element-a3cd40c e-flex e-con-boxed e-con e-child"
                            data-id="a3cd40c"
                            data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                        >
                            <div class="e-con-inner sectioncards">
                                <div
                                    style="background-color: #00D094 !important;"
                                    class="elementor-element elementor-element-e8c8591 e-con-full e-flex e-con e-child"
                                    data-id="e8c8591"
                                    data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
                                >
                                    <div
                                        class="elementor-element elementor-element-403e394 e-con-full e-flex e-con e-child"
                                        data-id="403e394"
                                        data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                                    >
                                        <div
                                            class="elementor-element elementor-element-17f2b1b cta__thumb elementor-widget elementor-widget-image"
                                            data-id="17f2b1b"
                                            data-element_type="widget"
                                            data-widget_type="image.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <img
                                                    loading="lazy"
                                                    decoding="async"
                                                    width="244"
                                                    height="235"
                                                    src="https://www.ebeamsinfotech.com/wp-content/uploads/2020/07/ebeamsinfotech-web-support.png"
                                                    class="attachment-full size-full wp-image-312"
                                                    alt=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-02dff66 e-flex e-con-boxed e-con e-child"
                                        data-id="02dff66"
                                        data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                                    >
                                        <div class="e-con-inner sectioncards">
                                            <div
                                                class="elementor-element elementor-element-34cb115 elementor-widget elementor-widget-tg-heading"
                                                data-id="34cb115"
                                                data-element_type="widget"
                                                data-widget_type="tg-heading.default"
                                            >
                                                <div class="elementor-widget-container">
                                                    <div class="section-title">
                                                        <h2 class="title">
                                                            <span style="color: var(--secondary-color)"></span>
                                                            Support
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div
                                                class="elementor-element elementor-element-dad813c elementor-widget elementor-widget-heading"
                                                data-id="dad813c"
                                                data-element_type="widget"
                                                data-widget_type="heading.default"
                                            >
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">Hey! Are you tired of missing out on our updates? Subscribe to our news now and stay in the loop!</p>
                                                </div>
                                            </div> -->
                                            <div
                                                class="elementor-element elementor-element-50c820d text-center elementor-widget elementor-widget-shortcode"
                                                data-id="50c820d"
                                                data-element_type="widget"
                                                data-widget_type="shortcode.default"
                                            >
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-shortcode">
                                                        <script>
                                                        (function() {
                                                            window.mc4wp = window.mc4wp || {
                                                                listeners: [],
                                                                forms: {
                                                                    on: function(evt, cb) {
                                                                        window.mc4wp.listeners.push({
                                                                            event: evt,
                                                                            callback: cb
                                                                        });
                                                                    }
                                                                }
                                                            }
                                                        })();
                                                        </script>
                                                        <!-- Mailchimp for WordPress v4.9.9 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                                        <form
                                                            id="mc4wp-form-1"
                                                            class="mc4wp-form mc4wp-form-329"
                                                            method="post"
                                                            action="/main/support"
                                                        >
                                                            <div class="mc4wp-form-fields">
                                                                <div class="cta-form cta-form--style2 form-subscribe">
                                                                    <div class="cta-form__inner d-sm-flex align-items-center">
                                                                        <input
                                                                            type="text"
                                                                            class="form-control form-control--style2 mb-3 mb-sm-0"
                                                                            name="subject"
                                                                            style="margin-bottom: 20px !important;"
                                                                            placeholder="Subject"
                                                                            required
                                                                        >
                                                                     </div>
                                                                     <div class="cta-form__inner d-sm-flex align-items-center">
                                                                         <textarea
                                                                             type="text"
                                                                             class="form-control form-control--style2 mb-3 mb-sm-0"
                                                                             name="comment"
                                                                             style="height: 100px; margin-bottom: 20px !important;"
                                                                             placeholder="Comments"
                                                                             required
                                                                         ></textarea>
                                                                    </div>
                                                                    <div class="cta-form__inner d-sm-flex align-items-center">
                                                                        <button class="trk-btn  trk-btn--small trk-btn--secondary2" style="background-color: var(--secondary-color) !important; border-color: var(--secondary-color) !important;" type="submit">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mc4wp-response"></div>
                                                        </form>
                                                        <!-- / Mailchimp for WordPress Plugin -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div
                                    class="elementor-element elementor-element-3db5055 elementor-widget__width-auto elementor-absolute bit_rotate_animation elementor-widget elementor-widget-image"
                                    data-id="3db5055"
                                    data-element_type="widget"
                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                    data-widget_type="image.default"
                                >
                                    <div class="elementor-widget-container">
                                        <img
                                            loading="lazy"
                                            decoding="async"
                                            width="65"
                                            height="65"
                                            src="/dark/wp-content/uploads/2023/10/cta_shape1.png"
                                            class="attachment-full size-full wp-image-341"
                                            alt=""
                                        >
                                    </div>
                                </div> -->
                                <div
                                    class="elementor-element elementor-element-617ebb8 elementor-widget__width-auto elementor-absolute upAndDown_animation elementor-widget elementor-widget-image"
                                    data-id="617ebb8"
                                    data-element_type="widget"
                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                    data-widget_type="image.default"
                                >
                                    <div class="elementor-widget-container">
                                        <img
                                            decoding="async"
                                            width="106"
                                            height="106"
                                            src="/dark/wp-content/uploads/2023/10/shape01.png"
                                            class="attachment-full size-full wp-image-238"
                                            alt=""
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif



            </div>
            
            <footer
                itemtype="https://schema.org/WPFooter"
                itemscope="itemscope"
                id="colophon"
                role="contentinfo"
            >
                <div class="footer-width-fixer">
                    <div data-elementor-type="wp-post" data-elementor-id="367" class="elementor elementor-367">
                        <div
                            class="elementor-element elementor-element-e7278ee e-flex e-con-boxed e-con e-parent"
                            data-id="e7278ee"
                            data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                            data-core-v316-plus="true"
                        >
                            <div class="e-con-inner">
                                <div
                                    class="elementor-element elementor-element-ca3a5d8 elementor-widget__width-inherit elementor-absolute h-100 elementor-widget elementor-widget-bg-shapes"
                                    data-id="ca3a5d8"
                                    data-element_type="widget"
                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                    data-widget_type="bg-shapes.default"
                                >
                                    <div class="elementor-widget-container">
                                        <div class="footer__shape">
                                            <span class="footer__shape-item footer__shape-item--2">
                                                <span></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-bd984a0 e-con-full e-flex e-con e-child"
                                    data-id="bd984a0"
                                    style="display: flex;
                                    flex-direction: column;
                                    align-items: center;"
                                    data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                                >
                                    <div
                                        class="elementor-element elementor-element-455b42f e-con-full e-flex e-con e-child"
                                        data-id="455b42f"
                                        style="display: flex;
                                        justify-content: center;
                                        align-items: center;"
                                        data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                                    >
                                        <div
                                            class="elementor-element elementor-element-1e70553 elementor-widget__width-initial elementor-widget elementor-widget-site-logo"
                                            data-id="1e70553"
                                            data-element_type="widget"
                                            data-settings="{&quot;align&quot;:&quot;left&quot;,&quot;width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;caption_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;caption_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                            data-widget_type="site-logo.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="hfe-site-logo">
                                                    <a data-elementor-open-lightbox="" class="elementor-clickable" href="/dark">
                                                        <div class="hfe-site-logo-set">
                                                            <div class="hfe-site-logo-container">
                                                                <img class="hfe-site-logo-img elementor-animation-" src="/tst/grnyellow.png" alt="logo-dark">
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-367b8d7 elementor-widget elementor-widget-heading"
                                            data-id="367b8d7"
                                            data-element_type="widget"
                                            data-widget_type="heading.default"
                                        >
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-319c32e elementor-widget elementor-widget-html"
                                            data-id="319c32e"
                                            data-element_type="widget"
                                            data-widget_type="html.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="footer__app">
                                                    <div class="footer__app-item footer__app-item--apple">
                                                        <div class="footer__app-inner">
                                                            <div class="footer__app-thumb">
                                                                <a href="https://www.apple.com/app-store/" target="_blank" class="stretched-link">
                                                                    <img src="/wp-content/uploads/2023/10/apple.png" alt="apple-icon">
                                                                </a>
                                                            </div>
                                                            <div class="footer__app-content">
                                                                <span>Download on the</span>
                                                                <p class="mb-0">App Store</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="footer__app-item footer__app-item--playstore">
                                                        <div class="footer__app-inner">
                                                            <div class="footer__app-thumb">
                                                                <a href="https://play.google.com/store" target="_blank" class="stretched-link">
                                                                    <img src="/wp-content/uploads/2023/10/play.png" alt="playstore-icon">
                                                                </a>
                                                            </div>
                                                            <div class="footer__app-content">
                                                                <span>GET IT ON</span>
                                                                <p class="mb-0">Google Play</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-widget-container">
                                        <p style="text-align: center; font-size: 12px;;" class="elementor-heading-title elementor-size-default">All forms of stakings carry its risks. Please ensure you fully understand the risks and consider your financial situation and trading experience before trading.
                                            Wherever necessary, seek independent advice. It is important that you read and consider the relevant legal documents associated with your account before you start trading.
                                        <br>
                                        <br>
                                        globalmarketstars@gmail.com
                                        </p>
                                    </div>
                                <div style="display: none;">
                                    <div
                                        class="elementor-element elementor-element-7c023eb e-con-full ms-auto e-flex e-con e-child"
                                        data-id="7c023eb"
                                        data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                                    >
                                        <div
                                            class="elementor-element elementor-element-ec42b89 elementor-widget elementor-widget-heading"
                                            data-id="ec42b89"
                                            data-element_type="widget"
                                            data-widget_type="heading.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">Quick links</h5>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-55bef3a elementor-list-item-link-inline elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                            data-id="55bef3a"
                                            data-element_type="widget"
                                            data-widget_type="icon-list.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <link rel="stylesheet" href="/dark/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <a href="https://bitrader.thetork.com/about-us/">
                                                            <span class="elementor-icon-list-text">About Us</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Teams</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="https://bitrader.thetork.com/our-services/">
                                                            <span class="elementor-icon-list-text">Services</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Features</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-fadd85c e-con-full e-flex e-con e-child"
                                        data-id="fadd85c"
                                        data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                                    >
                                        <div
                                            class="elementor-element elementor-element-66a2b33 elementor-widget elementor-widget-heading"
                                            data-id="66a2b33"
                                            data-element_type="widget"
                                            data-widget_type="heading.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">Support</h5>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-5a4d818 elementor-list-item-link-inline elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                            data-id="5a4d818"
                                            data-element_type="widget"
                                            data-widget_type="icon-list.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Terms & Conditions</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Privacy Policy</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">FAQs</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Support Center</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-7d2bbdd e-con-full e-flex e-con e-child"
                                        data-id="7d2bbdd"
                                        data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                                    >
                                        <div
                                            class="elementor-element elementor-element-06c894c elementor-widget elementor-widget-heading"
                                            data-id="06c894c"
                                            data-element_type="widget"
                                            data-widget_type="heading.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">Company</h5>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-ce52651 elementor-list-item-link-inline elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                            data-id="ce52651"
                                            data-element_type="widget"
                                            data-widget_type="icon-list.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Careers</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Updates</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Job</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Announce</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-39c3f15 e-con-full e-flex e-con e-child"
                                    data-id="39c3f15"
                                    data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                                >
                                    <div
                                        class="elementor-element elementor-element-c35f4f8 elementor-widget elementor-widget-heading"
                                        data-id="c35f4f8"
                                        data-element_type="widget"
                                        data-widget_type="heading.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">© 2024 All Rights Reserved</p>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-9b0d4fd elementor-widget elementor-widget-sociallist"
                                        data-id="9b0d4fd"
                                        data-element_type="widget"
                                        data-widget_type="sociallist.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <ul class="social list-wrap">
                                                <li class="social__item">
                                                    <a href="#" class="social__link social__link--style22">
                                                        <i aria-hidden="true" class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="#" class="social__link social__link--style22">
                                                        <i aria-hidden="true" class="fab fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="#" class="social__link social__link--style22">
                                                        <i aria-hidden="true" class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="#" class="social__link social__link--style22">
                                                        <i aria-hidden="true" class="fab fa-youtube"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="#" class="social__link social__link--style22">
                                                        <i aria-hidden="true" class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-1ceb9e5 elementor-widget__width-auto elementor-absolute footer__shape-item--1 elementor-widget elementor-widget-image"
                                    data-id="1ceb9e5"
                                    data-element_type="widget"
                                    data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                    data-widget_type="image.default"
                                >
                                    <!-- <div class="elementor-widget-container">
                                        <img
                                            width="81"
                                            height="40"
                                            src="/dark/wp-content/uploads/2023/10/footer_shape.png"
                                            class="attachment-full size-full wp-image-419"
                                            alt=""
                                            loading="lazy"
                                        >
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- #page -->

    <!-- scoll stickke -->
    @if($page== 'falsex')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elmnts = document.querySelectorAll('.stticky');
            elmnts.forEach(function(el) {
            window.addEventListener('scroll', function() {
            var rect = el.getBoundingClientRect();
            // alert(rect.top);
            var distanceFromTop = rect.top + window.scrollY;
            var distanceFromBottom = rect.bottom + window.scrollY;
                var scrollY = window.scrollY || window.pageYOffset;
                var nel = el.querySelector('.stticky-text');
                if (scrollY >= (distanceFromTop-200)) {
                    nel.classList.add('stticky-fixed');
                }else {
                    nel.classList.remove('stticky-fixed');
                }
                 if (scrollY >= distanceFromBottom) {
                    nel.classList.remove('stticky-fixed');
                } 
               });
            });
         });
    </script>
    @endif


        <script>
            (function() {
                function maybePrefixUrlField() {
                    const value = this.value.trim()
                    if (value !== '' && value.indexOf('http') !== 0) {
                        this.value = 'http://' + value
                    }
                }

                const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
                for (let j = 0; j < urlFields.length; j++) {
                    urlFields[j].addEventListener('blur', maybePrefixUrlField)
                }
            })();
        </script>
        <script type="text/javascript" src="/dark/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.8.1" id="swv-js"></script>
        <script type="text/javascript" id="contact-form-7-js-extra">
            /* <![CDATA[ */
            var wpcf7 = {
                "api": {
                    "root": "https:\/\/bitrader.thetork.com\/dark\/wp-json\/",
                    "namespace": "contact-form-7\/v1"
                }
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="/dark/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.8.1" id="contact-form-7-js"></script>
        <script type="text/javascript" src="/dark/wp-content/themes/bitrader/assets/js/bootstrap.min.js?ver=6.5.2" id="bootstrap-bundle-js"></script>
        <script type="text/javascript" src="/dark/wp-content/themes/bitrader/assets/js/swiper-bundle.min.js?ver=6.5.2" id="swiper-js"></script>
        <script type="text/javascript" src="/dark/wp-content/themes/bitrader/assets/js/aos.js?ver=6.5.2" id="aos-js"></script>
        <script type="text/javascript" src="/dark/wp-content/themes/bitrader/assets/js/fslightbox.js?ver=6.5.2" id="fslightbox-js"></script>
        <script type="text/javascript" src="/dark/wp-content/themes/bitrader/assets/js/purecounter_vanilla.js?ver=6.5.2" id="purecounter-js"></script>
        <script type="text/javascript" src="/dark/wp-includes/js/imagesloaded.min.js?ver=5.0.0" id="imagesloaded-js"></script>
        <script type="text/javascript" src="/dark/wp-content/themes/bitrader/assets/js/isotope.pkgd.min.js?ver=6.5.2" id="isotope-js"></script>
        <script type="text/javascript" src="/dark/wp-content/themes/bitrader/assets/js/custom.js?ver=6.5.2" id="bitrader-custom-js"></script>
        <script type="text/javascript" src="/dark/wp-content/plugins/bitrader-core/assets/js/hello-world.js?ver=6.5.2" id="genixcore-js"></script>
        <script
            type="text/javascript"
            defer
            src="/dark/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=4.9.9"
            id="mc4wp-forms-api-js"
        ></script>
        <script type="text/javascript" src="/dark/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.16.5" id="elementor-webpack-runtime-js"></script>
        <script type="text/javascript" src="/dark/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.16.5" id="elementor-frontend-modules-js"></script>
        <script type="text/javascript" src="/dark/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
        <script type="text/javascript" src="/dark/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js"></script>
        <script type="text/javascript" id="elementor-frontend-js-before">
            /* <![CDATA[ */
            var elementorFrontendConfig = {
                "environmentMode": {
                    "edit": false,
                    "wpPreview": false,
                    "isScriptDebug": false
                },
                "i18n": {
                    "shareOnFacebook": "Share on Facebook",
                    "shareOnTwitter": "Share on Twitter",
                    "pinIt": "Pin it",
                    "download": "Download",
                    "downloadImage": "Download image",
                    "fullscreen": "Fullscreen",
                    "zoom": "Zoom",
                    "share": "Share",
                    "playVideo": "Play Video",
                    "previous": "Previous",
                    "next": "Next",
                    "close": "Close",
                    "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                    "a11yCarouselPrevSlideMessage": "Previous slide",
                    "a11yCarouselNextSlideMessage": "Next slide",
                    "a11yCarouselFirstSlideMessage": "This is the first slide",
                    "a11yCarouselLastSlideMessage": "This is the last slide",
                    "a11yCarouselPaginationBulletMessage": "Go to slide"
                },
                "is_rtl": false,
                "breakpoints": {
                    "xs": 0,
                    "sm": 480,
                    "md": 768,
                    "lg": 1025,
                    "xl": 1440,
                    "xxl": 1600
                },
                "responsive": {
                    "breakpoints": {
                        "mobile": {
                            "label": "Mobile Portrait",
                            "value": 767,
                            "default_value": 767,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "mobile_extra": {
                            "label": "Mobile Landscape",
                            "value": 880,
                            "default_value": 880,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "tablet": {
                            "label": "Tablet Portrait",
                            "value": 1024,
                            "default_value": 1024,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "tablet_extra": {
                            "label": "Tablet Landscape",
                            "value": 1200,
                            "default_value": 1200,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "laptop": {
                            "label": "Laptop",
                            "value": 1366,
                            "default_value": 1366,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "widescreen": {
                            "label": "Widescreen",
                            "value": 2400,
                            "default_value": 2400,
                            "direction": "min",
                            "is_enabled": false
                        }
                    }
                },
                "version": "3.16.5",
                "is_static": false,
                "experimentalFeatures": {
                    "e_dom_optimization": true,
                    "e_optimized_assets_loading": true,
                    "e_optimized_css_loading": true,
                    "additional_custom_breakpoints": true,
                    "container": true,
                    "e_swiper_latest": true,
                    "landing-pages": true,
                    "e_global_styleguide": true
                },
                "urls": {
                    "assets": "https:\/\/bitrader.thetork.com\/dark\/wp-content\/plugins\/elementor\/assets\/"
                },
                "swiperClass": "swiper",
                "settings": {
                    "page": [],
                    "editorPreferences": []
                },
                "kit": {
                    "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                    "global_image_lightbox": "yes",
                    "lightbox_enable_counter": "yes",
                    "lightbox_enable_fullscreen": "yes",
                    "lightbox_enable_zoom": "yes",
                    "lightbox_enable_share": "yes",
                    "lightbox_title_src": "title",
                    "lightbox_description_src": "description"
                },
                "post": {
                    "id": 67,
                    "title": "Bitrader%20%E2%80%93%20Crypto%2C%20Stock%20and%20Forex%20Trading%20WordPress%20Theme",
                    "excerpt": "",
                    "featuredImage": false
                }
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="/dark/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.16.5" id="elementor-frontend-js"></script>
    </body>
</html>
