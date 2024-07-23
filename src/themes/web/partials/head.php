<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR" dir="ltr" prefix="og: http://ogp.me/ns#">

<head>
	<meta charset="UTF-8">
	<link rel="canonical" href="<?= (!empty($siteUrl)) ? $siteUrl : ""; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= (!empty($title)) ? "{$title} - {$siteName}" : $siteName; ?></title>
	<meta name="Description" content="<?= (!empty($siteDescription)) ? $siteDescription : ""; ?>" />
	<meta property="og:image" content="<?= asset("web", "images/sharer.jpg"); ?>" />
	<meta property="og:title" content="<?= (!empty($title)) ? $title : ""; ?>" />
	<meta property="og:description" content="<?= (!empty($siteDescription)) ? $siteDescription : ""; ?>" />
	<meta property="og:url" content="<?= (!empty($siteUrl)) ? $siteUrl : ""; ?>" />
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:site_name" content="<?= (!empty($siteName)) ? $siteName : ""; ?>" />
	<meta property="og:type" content="website" />
	<link rel="icon" type="image/x-icon" href="<?= asset($theme, "images/favicon.ico"); ?>">

	<link rel="stylesheet" href="<?= asset("core", "css/core.min.css"); ?>" />
	<link rel="stylesheet" href="<?= asset($theme, "css/{$theme}.min.css"); ?>" />


	<script>
		// Pixel do TikTok
		! function(w, d, t) {
			w.TiktokAnalyticsObject = t;
			var ttq = w[t] = w[t] || [];
			ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias", "group", "enableCookie", "disableCookie"], ttq.setAndDefer = function(t, e) {
				t[e] = function() {
					t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
				}
			};
			for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);
			ttq.instance = function(t) {
				for (var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]);
				return e
			}, ttq.load = function(e, n) {
				var i = "https://analytics.tiktok.com/i18n/pixel/events.js";
				ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = i, ttq._t = ttq._t || {}, ttq._t[e] = +new Date, ttq._o = ttq._o || {}, ttq._o[e] = n || {};
				n = document.createElement("script");
				n.type = "text/javascript", n.async = !0, n.src = i + "?sdkid=" + e + "&lib=" + t;
				e = document.getElementsByTagName("script")[0];
				e.parentNode.insertBefore(n, e)
			};

			// Existe um parâmetro aqui que é o ID do pixel do TikTok que foi ocultado por medidas de sigilo e segurança.
			// ttq.load('');
			ttq.page();
		}(window, document, 'ttq');
	</script>

</head>