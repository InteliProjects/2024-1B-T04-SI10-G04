// Funções auxiliares
function startLoading(element, message = '') {
	let widget = $(element).closest('[data-widget]');

	if ($(element).attr('[data-widget]'))
		widget = $(element);

	widget.append(`
		<div class="loading-body">
			<div class="loading-content">
				<img src="/wizard-on/themes/web/images/progress-dot-white.svg" alt="Carregando, aguarde...">
				<p>${message}</p>
			</div>
		</div>`);
}

function stopLoading(element) {
	let widget = $(element).closest('[data-widget]');

	if ($(element).attr('[data-widget]'))
		widget = $(element);

	widget
		.find('.loading-body')
		.fadeOut(function () {
			$(this).remove();
		});
}