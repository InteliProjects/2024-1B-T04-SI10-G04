<?php
$this->layout("web::_layout");
echo $this->insert("web::partials/header");

$this->start("scripts");
?>
<script>
	thankYouPage = '<?= $thankYouPage; ?>';
</script>
<?php $this->end() ?>

<main id="homepage">
	<section id="banner">
		<div class="container">
			<div class="row justify-content-between align-items-center g-0">
				<div class="col-md-12 col-lg-7 text-center">
					<img class="img-fluid d-none d-md-block animate__animated animate__bounceInUp" src=" <?= asset($theme, "images/texto-banner.webp"); ?>" alt="">
					<img class="img-fluid d-block d-md-none animate__animated animate__bounceInUp" src=" <?= asset($theme, "images/texto-banner-mobile.webp"); ?>" alt="">
				</div>
				<div id="form" class="col-md-12 col-lg-5 col-xl-4 d-flex justify-content-center flex-column align-items-center">
					<img class="img-fluid my-3 logo-wizard-on" src="<?= asset($theme, "images/logo-wizard-on-branco.svg"); ?>" alt="">
					<?= $this->insert('web::partials/leadModal'); ?>
				</div>
			</div>
		</div>
	</section>

	<section id="promo">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<h2 class="h1 text-center mb-3 text-blue fw-light">
						E se você aprender <strong class="bg-red text-white px-2 d-inline-block">inglês online</strong> com <strong>professor que acompanha seu desenvolvimento e seu aprendizado?</strong>
					</h2>
					<p class="text-center">
						Com Wizard ON, é fácil garantir o seu inglês até mesmo na correria. São aulas on-line ao vivo que se encaixam na sua rotina para você aprender de onde estiver!
					</p>

					<div>
						<iframe src="https://www.youtube.com/embed/EZ3gR4fled4?si=hfHclIgQGxqIjRVR&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fpromocoes.wizard.com.br" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" class="promo-video d-none d-md-block" allowfullscreen="" data-gtm-yt-inspected-10774588_155="true" id="471667175" data-gtm-yt-inspected-105="true" data-gtm-yt-inspected-109="true" title="Wizard ON: a Wizard que você já conhece, agora online" data-gtm-yt-inspected-10774588_534="true"></iframe>

						<iframe src="https://www.youtube.com/embed/cS0EqcUxi_w?si=bqoC4dX48Jfp6Zpx&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fpromocoes.wizard.com.br" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" class="promo-video d-md-none" allowfullscreen="" data-gtm-yt-inspected-10774588_155="true" id="457156324" data-gtm-yt-inspected-105="true" data-gtm-yt-inspected-109="true" title="Wizard ON: comece a estudar em qualquer época do ano" data-gtm-yt-inspected-10774588_534="true"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="rtb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<h2 class="h1 text-center mb-3 text-blue fw-light">
						Com o <strong class="bg-red text-white px-2 d-inline-block">Wizard ON</strong> você aprende inglês de verdade!
					</h2>
					<p class="text-center">
						Conecte-se com sua turma, pratique o idioma e tenha suporte personalizado do seu professor. Supere desafios e aprenda inglês mais rápido!
					</p>
				</div>
			</div>

			<ul class="text-blue d-flex justify-content-center banner-list row my-5">
				<li class="col-12 col-md-6 col-lg-3">
					<h5 class="fw-bold">Aulas online e ao vivo </h5>

					São 02 horas de aula por semana, 100% ao vivo e online.
				</li>
				<li class="col-12 col-md-6 col-lg-3">
					<h5 class="fw-bold">Material didático físico</h5>

					Para você exercitar a escrita com os exercícios e com os conteúdos da aula.
				</li>
				<li class="col-12 col-md-6 col-lg-3">
					<h5 class="fw-bold">Conversation club</h5>

					Encontros mensais online, para você praticar o idioma com os outros alunos.
				</li>

				<li class="col-12 col-md-6 col-lg-3">
					<h5 class="fw-bold">Aplicativo Exclusivo</h5>

					Tenha acesso ao Wiz.me, disponível 24 horas por dia para você exercitar o inglês.
				</li>
				<div class="w-100 d-none d-lg-block"></div>
				<li class="col-12 col-md-6 col-lg-3">
					<h5 class="fw-bold">Sala de aula virtual </h5>

					Ambiente virtual de aprendizado com a sua turma, para você interagir enquanto aprende o
					idioma.
				</li>

				<li class="col-12 col-md-6 col-lg-3">
					<h5 class="fw-bold">Professores dedicados </h5>

					Professor dedicado à sua turma, que te conhece pelo nome e te ajuda a superar desafios no
					idioma.
				</li>

				<li class="col-12 col-md-6 col-lg-3">
					<h5 class="fw-bold">Certificação Internacional</h5>

					Tenha acesso a certificações internacionais sem custo extra*. É o nosso
					Pearson English International Certificate.
				</li>
			</ul>
			<small>
				*A gratuidade do Pearson English International Certificate é válida a partir do nível W8.
			</small>
	</section>

	<section id="wizmenew">
		<div class="container">
			<div class="row justify-content-center justify-content-md-start">
				<div class="col-10 col-md-5 align-self-center text-start">
				<img class="img-fluid" src="https://promocoes.wizard.com.br/wizard-on/themes/web/images/wiz_me_new.webp?time=1715634565" alt="wiz_me_new">
					<div class="text">
						<b>
							Pratique sua pronúncia com o Wiz.me, aplicativo exclusivo com ferramenta de reconhecimento de voz!
						</b>
						<p>
							Na Wizard by Pearson, você tem um aplicativo exclusivo com correção automática para praticar fala, escuta, leitura e escrita, acelerando o seu aprendizado.
						</p>
					</div>
				</div>
				<div class="col-10 col-md-7">
					<img class="img-fluid" src="https://promocoes.wizard.com.br/wizard-on/themes/web/images/personagem.webp?time=1715634560" alt="personagem">
				</div>
			</div>
		</div>
	</section>

	<section id="compromisso">
		<div class="container">
			<div class="row justify-content-center justify-content-md-start">
				<div class="col-10">
					<h5 class="mb-3">
						CONHEÇA O COMPROMISSO DE APRENDIZADO DA WIZARD BY PEARSON!
					</h5>
				</div>
			</div>
			<div class="row justify-content-center justify-content-md-start py-4">
				<div class="col-10 col-md-8">
					<p>
						Só na Wizard by Pearson você tem acesso a testes internacionais de evolução, ao final de
						cada livro, para acompanhamento personalizado de seu progresso!
					</p>
					<p>
						Além disso, com o Compromisso de Aprendizado Wizard by Pearson, a cada dois anos
						o aluno realiza um teste de verificação de conhecimento. Se atingir a nota mínima,
						recebe um certificado de comprovação de resultado, que poderá, inclusive, ser usado
						para conquistar aquela vaga de emprego dos sonhos.
					</p>
					<p>
						Mas e se o resultado não for atingido? Não tem problema! O Compromisso de
						Aprendizado Wizard by Pearson garante um plano individual de estudo, além de aulas
						de reforço se for preciso, de modo a proporcionar melhor desempenho na próxima avaliação. Tudo
						isso sem nenhum custo para o aluno!
					</p>
					<h4 class="my-3 text-black">WIZARD. INGLÊS QUE TE GARANTE.</h4>
					<a class="btn btn-red text-white cursor-pointer my-3" href="<?= asset($theme, "uploads/regulamento.pdf", false); ?>" target="_blank">
						SAIBA MAIS NO REGULAMENTO
					</a>
				</div>
				<div class="col-8 col-md-4">
					<img class="img-fluid" src="https://promocoes.wizard.com.br/wizard-on/themes/web/images/SELO.webp" alt="Wizard">
				</div>
			</div>
			<div class="row justify-content-center justify-content-md-start">
				<div class="col-10">
					<small>A garantia de resultado mínimo de certificação estará atrelada a observância das regras e procedimento informados no regulamento desta Campanha. Confira o regulamento no site
						<a class="text-decoration-none text-black" href="https://promocoes.wizard.com.br/compromisso-de-aprendizado/themes/web/uploads/regulamento.pdf">wizard.com.br/compromisso-de-aprendizado</a></small>
				</div>
			</div>
		</div>
	</section>

	<section id="faq">
		<div class="container">

			<h2 class="text-center font-monospace fst-italic h1 fw-bold mb-3 text-white">FAQ</h2>

			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="accordion accordion-flush" id="accordionFlushExample">
						<div class="accordion-item">
							<h3 class="accordion-header" id="flush-headingOne">
								<button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
									1. O QUE É A CAMPANHA MATRICULOU, GANHOU 1 MÊS DE SPOTIFY?
								</button>
							</h3>
							<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
                                    <p>
                                        A presente Campanha tem como objetivo a entrega de Gift card da Americanas.com,
                                        para uso na plataforma de música Spotify no valor equivalente a R$ 17,00 (dezessete)
                                        aos Participantes que efetivarem sua matrícula, exclusivamente, no curso de Inglês
                                        e espanhol da Wizard na modalidade online “WizardOn”.
                                    </p>
                                    <p>
                                        O Gift card é disponibilizado de forma digital para uso no site www.americanas.com
                                        e serão válidos para resgate em duas plataformas de Streaming, a critério de escolha
                                        do ganhador, sendo elas 1 mês de plano pago para uso na plataforma de música
                                        Spotify
                                    </p>
                                    <p>Campanha válida apenas para Wizard On.</p>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h3 class="accordion-header" id="flush-headingTwo">
								<button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
									2. COMO FAÇO PARA PARTICIPAR DA CAMPANHA?
								</button>
							</h3>
							<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>
                                        O Participante que se matricular no Curso de WizardOn, dentro da vigência da
                                        Campanha, e cumprir com todos os requisitos previstos no Regulamento.
									</p>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h3 class="accordion-header" id="flush-headingThree">
								<button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
									3. QUAL É A VIGÊNCIA DA CAMPANHA?
								</button>
							</h3>
							<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>
                                        A Campanha será válida durante o período de 03/06/2024 e 30/06/2024
									</p>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h3 class="accordion-header" id="flush-headingFour">
								<button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
									4. QUEM PODERÁ PARTICIPAR DA CAMPANHA?
								</button>
							</h3>
							<div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
                                    <p>
                                        Poderão participar desta Campanha quaisquer pessoas físicas, em território
                                        nacional, que tenham interesse nos cursos de inglês e espanhol WizardOn
                                        (“Participantes”), respeitados os limites do Regulamento;
                                    </p>
                                    <p>
                                        A matrícula só poderá ser realizada por pessoa física, maior de idade, capaz,
                                        residente e domiciliada no território nacional, nos termos do Código Civil em vigor
                                    </p>
                                    <p>
                                        O Participante menor de idade, a partir de 11 (onze) anos, poderá participar da
                                        presente Campanha desde que representado por seus responsáveis legais no ato da
                                        matrícula.
                                    </p>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h3 class="accordion-header" id="flush-headingFive">
								<button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
									5. QUEM NÃO PODERÁ PARTICIPAR DA CAMPANHA?
								</button>
							</h3>
							<div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>
                                        Não poderão participar da presente Campanha: a) alunos que desejam realizar rematrícula
                                        na rede Wizard by Pearson; b) alunos que realizarem a matrícula para cursos regulares
                                        presenciais na rede Wizard by Pearson.
									</p>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h3 class="accordion-header" id="flush-headingSix">
								<button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
									6. A QUAL STREAMING TEREI ACESSO?
								</button>
							</h3>
							<div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
                                    <p>
                                        O Gift card será disponibilizads de forma digital para uso no site
                                        www.americanas.com e serão válidos para resgate de 1 mês de plano pago para
                                        uso na plataforma de música Spotify
                                    </p>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h3 class="accordion-header" id="flush-headingSeven">
								<button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
									7. COMO PODEREI FAZER USO DO VOUCHER DE STREAMING?
								</button>
							</h3>
							<div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>
                                        O código do Gift Card será enviado para o e-mail do Participante até 15, (quinze) dias
                                        úteis contados a partir da efetivação da Matrícula, com todas as instruções de uso.
                                    </p>
									<p>
                                        O Gift Card será exclusivamente para resgate do Voucher 1 mês de plano pago para
                                        uso na plataforma de música Spotify, por meio do site Americanas.com a ser
                                        utilizados na plataforma de Streaming escolhida.
									</p>
									<p>
                                        INSTRUÇÃO DE USO DO GIFTCARD AMERICANAS:
									</p>

                                        <ul>
                                            <li>
                                                Acesse o site da Americas.com;
                                            </li>
                                            <li>
                                                Busque pelo Card de Spotify 1 mês de assinatura;
                                            </li>
                                            <li>
                                                Link Spotify: <a href="https://www.americanas.com.br/produto/4052401332/gift-card-digital-spotify-1-mes?pfm_index=NaN&pfm_page=home&pfm_pos=grid&pfm_type=home_page&offerId=615767a909c351890db8c76f" target="_blank">Acesse aqui</a>
                                            </li>
                                            <li>
                                                Adicione seu giftcard no carrinho e inicie o processo para fechar a
                                                compra;
                                            </li>
                                            <li>
                                                Insira o Card em seu carrinho e clique em comprar – siga o passo a passo de compra
                                            </li>
                                                <li>Na página de pagamento, clique em VALE e no campo que aparecer, insira o código enviado
                                                    acima e clique em “aplicar”;</li>
                                            <li>Confira se seu desconto foi aplicado e finalize a compra;</li>
                                            <li>As instruções de uso do Voucher adquirido, irá para seu email;</li>
                                        </ul>

								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h3 class="accordion-header" id="flush-headingEight">
								<button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
									8. ONDE POSSO ENCONTRAR O REGULAMENTO?
								</button>
							</h3>
							<div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>
										<a href="https://promocoes.wizard.com.br/wizard-on/">https://promocoes.wizard.com.br/wizard-on/</a>
									</p>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h3 class="accordion-header" id="flush-headingNine">
								<button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
									9. QUAL A VIGÊNCIA DO GIFT CARD E DOS VOUCHERS DE STREAMING?
								</button>
							</h3>
							<div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
                                    <p>
                                        O Gift Card deve ser utilizado para a compra do Voucher 1 mês de plano pago para
                                        uso na plataforma de música Spotify, até o dia 24.04.2025, no site da
                                        Americanas.com. Passado esse prazo, o gift card expira e não será substituído.
                                    </p>
                                    <p>
                                        Após o resgate do voucher na Americanas.com, ele poderá ser usado em até 2 meses na
                                        plataforma de música Spotify.
                                    </p>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h3 class="accordion-header" id="flush-headingTwelve">
								<button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
									10. QUAIS SÃO AS ESCOLAS PARTICIPANTES?
								</button>
							</h3>
							<div id="flush-collapseTwelve" class="accordion-collapse collapse" aria-labelledby="flush-headingTwelve" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<p>
										Verificar o Anexo I do Regulamento
									</p>
								</div>
							</div>
						</div>

						<div class="accordion-item">
							<h3 class="accordion-header" id="flush-headingTen">
								<button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
									10. Não encontrei minha dúvida. Com quem falo?
								</button>
							</h3>
							<div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
                                    <p>
                                        Se forem dúvidas sobre a Campanha: <a href="mailto: fale.wizard@pearson.com" target="_blank">fale.wizard@pearson.com</a>
                                    </p>
                                    <p>
                                        Havendo qualquer dúvida ou problemas ao realizar o resgate no site Americanas,
                                        entre em contato diretamente com os canais de Atendimento ao Cliente da
                                        Americanas: lojas físicas e pelo email: <a href="mailto: atendimento.acom@americanas.com" target="_blank">atendimento.acom@americanas.com</a> ou
                                        telefone: <a href="tel: 4003-4848">4003-4848</a> (capital e regiões Metropolitanas) e
                                        <a href="tel: 0800 229 4848">0800 229 4848</a> (Rio de
                                        Janeiro) e <a href="tel: 0 41 11 4003 4848">0 41 11 4003 4848</a> (demais regiões)
                                    </p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
</main>