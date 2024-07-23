<?= $this->insert('web::partials/head') ?>

<input type="hidden" id="appConstants" data-campaignid="<?= site("campaignId") ?>" data-campaigname="<?= site("campaignName") ?>" data-usersession="<?= site("userSession") ?>">

<body>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WV7CJ3C" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<?= $this->section("content"); ?>
</body>
<?= $this->insert('web::partials/footer') ?>
<?= $this->insert('web::partials/scripts') ?>
<?= $this->section("scripts"); ?>

</html>