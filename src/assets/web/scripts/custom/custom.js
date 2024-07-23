var leadData = {};

var statesList = [{
	"Key": 0,
	"Value": "Selecione"
}];

var citiesList = [{
	"Key": 0,
	"Value": "Selecione"
}];

var unitsList = [{
	"dc": 0,
	"shortName": "Selecione"
}];

/**
 * setSession
 *
 * @var param
 * @var values
 */
const setSession = (param, values) => {
	localStorage.setItem(param, JSON.stringify(values));
}

/**
 * getSession
 *
 * @var param
 */
const getSession = (param) => {
	if (localStorage.getItem(param))
		return localStorage.getItem(param);
	else
		return false;
}

/**
 * fillFields
 *
 */
const fillFields = _ => {
	const { name, phone, email } = JSON.parse(getSession("leadForm"));
	$("#name").val(name);
	$("#phone").val(phone);
	$("#email").val(email);
}



// Prepara os dados do Lead
function prepareLeadData(objLead) {
	let preparedData = {};

	preparedData = {
		firstname: objLead.find(e => e.name == "name").value,
		email: objLead.find(e => e.name == "email").value,
		phone: objLead.find(e => e.name == "phone").value,
		declaro_ter_mais_de_12_anos: true,
		campanha_id: objLead.find(e => e.name == "campanha_id").value,
		campanha_nome: objLead.find(e => e.name == "campanha_nome").value,
		marca: "wizard ON",
		levantada_de_mao: true,
		media_id: objLead.find(e => e.name == "media_id").value,
		media: objLead.find(e => e.name == "media").value,
		segmentacao: "a",
	};

	setSession("leadForm", preparedData);
	return preparedData;
}

init();

function init() {
	$("#thank-you-content").hide();

	fillFields();
}

$("#formCta").validate({
	rules: {
		phone: {
			validatePhone: true
		}
	},
	errorPlacement: function (error, element) {
		if (element.attr("name") == "isStudent" || element.attr("name") == "declaro_ter_mais_de_12_anos")
			error.appendTo(`#${element.attr("name")}-error`);
		else
			error.insertAfter(element);
	},
	success: function (label) {
		formExpansive($(label[0]).attr('for'));
	},
	submitHandler: function (form) {
		startLoading("#custom-modal-container", "Enviando seus dados...");

		let userData = prepareLeadData($(form).serializeArray());

		$.ajax({
			url: `/lead`,
			type: "post",
			dataType: "json",
			data: userData,
			beforeSubmit: function () {
				startLoading("#custom-modal-container", "Enviando seus dados...");
			},
			success: function (response, status, xhr, $form) {
				stopLoading("#custom-modal-container");

				if (status == "success") {
					$("#form-content").hide();
					$("#thank-you-content").show();

					let userTikTokData = {
						name: userData.firstname,
						phone_number: userData.phone,
						email: userData.email
					}

					// Dispara o evento de Subscribe para mapeamento do pixel TikTok
					// ttq.track("Subscribe", { description: "Enviou o formulário Estude Online" }, userTikTokData, { event_id: userSession })
				} else {
					Swal.fire({
						title: 'Ops!',
						text: response.Message ? response.Message : 'Ocorreu um erro ao enviar seus dados, tente novamente.',
						icon: 'error',
						confirmButtonText: 'Continuar'
					})

					return;
				}
			}
		})
		return false;
	}
});

jQuery.extend(jQuery.validator.messages, {
	required: "Campo obrigatório.",
	email: "Digite um e-mail válido.",
});

jQuery.validator.addMethod("requiredSelect", function (value, element) {
	return (parseFloat(value) > 0);
}, "Campo obrigatório.");

jQuery.validator.addMethod("validatePhone", function (value, element) {
	return value.length == 15;
}, "Celular inválido.");

$(document).ready(function () {
	(function (w, d, s, l, i) {
		w[l] = w[l] || []; w[l].push({
			'gtm.start':
				new Date().getTime(), event: 'gtm.js'
		}); var f = d.getElementsByTagName(s)[0],
			j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
	})(window, document, 'script', 'dataLayer', 'GTM-WV7CJ3C');

	(function (h, o, t, j, a, r) { h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) }; h._hjSettings = { hjid: 3194966, hjsv: 6 }; a = o.getElementsByTagName('head')[0]; r = o.createElement('script'); r.async = 1; r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv; a.appendChild(r); })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');

	$('#phone').mask('(00) 00000-0000');

	$("a").click(function (event) {
		if (this.hash !== "") {
			event.preventDefault(event);
			event.preventDefault();
			var hash = this.hash;

			window.scrollTo({
				top: $(hash).offset().top - ($('.navbar').outerHeight()),
				behavior: 'smooth'
			});
		}
	});
});

$('#declaro_ter_mais_de_12_anos').on('change', function (e) {
	if (this.checked) {
		$('#submitFormCta').removeAttr('disabled');
	}
	else {
		$('#submitFormCta').attr('disabled', true);
	}
});

const formExpansive = elem => {
	$(`#${elem}`).parent().find('label.error').remove();
}
