<section class="floating-form h-100" ng-class="" id="aproveite" data-aos-delay="400">
	<div class="floating-form-content">
		<div class="custom-modal-container" id="custom-modal-container" data-widget>
			<div class="custom-modal-content animate__animated fast" id="custom-modal-content">
				<div id="form-content">
					<div class="text-center">
						<h2 class="form-title fw-bold text-red mb-3 h3">
							APRENDA INGLÊS ONLINE
							<span class="bg-red px-2 text-white d-inline-block"> COM AULAS AO VIVO! </span>
						</h2>
						<small>Preencha agora o formulário e entraremos em contato para mais informações.</small>
					</div>

					<form id="formCta" name="formCta" class="formCta" novalidate>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group form-group-input">
									<label for="name">Nome*</label>
									<input type="text" class="form-control name" name="name" id="name" placeholder="Ex: João" minlength="3" required autocomplete="name" />
								</div>
							</div>

							<div class="col-md-7">
								<div class="form-group form-group-input">
									<label for="email">E-mail*</label>
									<input type="email" class="form-control email" name="email" id="email" placeholder="seuemail@exemplo.com" required autocomplete="parentEmail" />
								</div>
							</div>

							<div class="col-md-5">
								<div class="form-group">
									<label for="phone">Telefone*</label>
									<input type="tel" class="form-control phone fone" name="phone" id="phone" placeholder="(00) 00000-0000" mask="(99) 9?9999-9999" reject="true" required-message="'Digite o seu telefone.'" required autocomplete="parentPhone" invalid-message="'Digite um telefone válido.'" />
								</div>
							</div>


							<div class="col-md-12 text-blue pb-3">
								<small>(*)Campos obrigatórios</small>
							</div>

							<div class="col-12" id="terms">
								<div class="form-group">
									<div class="form-check form-check-inline">
										<input type="checkbox" class="form-check-input" id="declaro_ter_mais_de_12_anos" required name="declaro_ter_mais_de_12_anos">
										<label class="form-check-label" for="declaro_ter_mais_de_12_anos">
											Declaro que li, entendi e estou de acordo com o <a target="_blank" href="<?= asset("web", "uploads/regulamento.pdf") ?>">regulamento da Promoção</a> e a <a target="_blank" href="https://www.wizard.com.br/politica-de-privacidade/?">política de privacidade</a> da Wizard by Pearson.
										</label>
									</div>
									<div id="declaro_ter_mais_de_12_anos-error"></div>
								</div>
							</div>
						</div>

						<div class="form-group text-center m-0">

							<input type="hidden" name="media_id" id="media_id" value="<?= $mediaId ?>" />
							<input type="hidden" name="media" id="media" value="<?= $media ?>" />
							<input type="hidden" name="campanha_nome" id="campanha_nome" value="<?= $campanha_nome ?>" />
							<input type="hidden" name="campanha_id" id="campanha_id" value="<?= $campanha_id ?>" />

							<button class="btn btn-red text-white btn-lg cursor-pointer" id="submitFormCta" disabled="true" type="submit">
								APROVEITAR PROMOÇÃO!
							</button>
						</div>
					</form>
				</div>

				<div id="thank-you-content" class="py-3" style="display: none">
					<h2 class="form-title fw-bold text-blue mb-4 h3 text-center">
						<span class="bg-red px-2 text-white">
							RECEBEMOS SEU CONTATO!
						</span>
					</h2>

					<p>Agradecemos o seu interesse na Wizard!</p>

					<p class="fw-bold">
						Fique atento!
					</p>

					<p class="m-0">
						Em breve, entraremos em contato com você!
					</p>
				</div>
			</div>
		</div>
	</div>
</section>