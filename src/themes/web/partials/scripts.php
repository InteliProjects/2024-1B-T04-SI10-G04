<script>
	const appConstants = document.querySelector("#appConstants").dataset;
	const campaignId = appConstants.campaignid;
	const campaignName = appConstants.campaigname;
	const userSession = appConstants.usersession;
</script>
<script type="text/javascript" src="<?= asset("core", "js/core.min.js"); ?>"></script>
<script type="text/javascript" src="<?= asset($theme, "js/{$theme}.min.js"); ?>"></script>