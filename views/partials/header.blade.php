<div class="d-flex flex-column flex-md-row align-items-center px-md-4 bg-white border-bottom shadow-sm sticky-top">
	<div class="container" itemscope itemtype="http://schema.org/Organization">
		<div class="row">
			<div class="col-md-12 d-none d-sm-block">
				<div class="row top-br">
					<div class="col-md-4 col-lg-3 col-sm-5">
						<span style="font-size: .75em;color: #939393;">Москва, ул. Докукина, д.16с3</span>
					</div>
					<div class="col-md-5 col-lg-6 col-sm-4 text-center">
						<span style="font-size: .75em;color: #939393;">info@uk-ss.ru</span>
					</div>
					<div class="col-md-3 col-lg-3 col-sm-3" style="text-align: right;">
						<span style="font-size: .75em;color: #939393;">Личный кабинет</span>
					</div>
				</div>
			</div>

			<div class="col-sm-8 col-md-6 col-lg-3" style="height: 70px;">
				<nav class="navbar navbar-light navbar-expand-lg">
					<div class="container p-0"  style="max-height: 30px; max-width: 350px;">
						<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false">
							<span class="navbar-toggler-icon"></span>
						</button>
						<a href="{{ urlProcessor::makeUrl( $modx->getConfig('site_start') ) }}" title="{{ $modx->getConfig('site_start') }}" style="display: inline-block;position: relative; z-index: 1;">
							<span style="display: inline-block;">
								<object style="position: relative; z-index: -1" type="image/svg+xml" height="38" data="tpl/img/logo.svg">
									<img class="navbar-brand-logo" src="tpl/img/logo.png" alt="{{ $modx->getConfig('site_name') }}" itemprop="logo">
								</object>
							</span>
						</a>

						<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
							<div class="offcanvas-header shadow-sm" style="border-bottom: 2px #ccc solid;">
								<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
								<div class="col-xs-12 col-md-6">
									<div id="offcanvasNavbarLabel" style="margin-right: 25px;">
										<a href="{{ urlProcessor::makeUrl( $modx->getConfig('site_start') ) }}" title="{{ $modx->getConfig('site_start') }}" style="display: inline-block;position: relative; z-index: 1;">
											<span style="display: inline-block;">
												<object style="position: relative; z-index: -1" type="image/svg+xml" height="36" data="tpl/img/logo.svg">
													<img class="navbar-brand-logo" src="tpl/img/logo.png" alt="{{ $modx->getConfig('site_name') }}" itemprop="logo">
												</object>
											</span>
										</a>
									</div>
								</div>
								<div class="col-5 d-none d-sm-block" style="text-align: right;">
									<p class="fw-bold" style="font-size: 1.25em;margin-bottom: 0.05em;">+7 (495) 120 10 72</p>
									<span class="time">c 9:30 до 17.00</span> <button type="button" class="btn btn-of btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal">Заказать звонок</button>
								</div>

							</div>
							<div class="offcanvas-body">
								<ul class="navbar-nav flex-grow-1 pe-3 fw-light">
									<li class="nav-item" style="margin-right: 30px;">
										<a class="nav-link" href="#">О компании</a>
									</li>
									<li class="nav-item" style="margin-right: 30px;">
										<a class="nav-link" href="#">Статьи</a>
									</li>
									<li class="nav-item" style="margin-right: 30px;">
										<a class="nav-link" href="#">Контакты</a>
									</li>
								</ul>
								<div class="divider double-line"> </div>
								<div class="row">
									<div class="col-md-6 col-lg-3 col-sm-12">
										<div class="bd-highlight">
											<ul class="fw-normal li-group fw-bold">
												<li class="mb-2"><a href="#" title="Повышение квалификации">Повышение квалификации</a></li>
												<li class="mb-2"><a href="#" title="Профессиональная переподготовка">Профессиональная переподготовка</a></li>
												<li class="mb-2"><a href="#" title="Рабочие профессии">Рабочие профессии</a></li>
												<li class="mb-2"><a href="#" title="Курсы целевого назначения">Курсы целевого назначения</a></li>
												<li class="mb-2"><a href="#" title="Охрана труда">Охрана труда</a></li>
												<li class="mb-2"><a href="#" title="Пожарно-технический минимум">Пожарно-технический минимум</a></li>
												<li class="mb-2"><a href="#" title="Работы на высоте">Работы на высоте</a></li>
												<li class="mb-2"><a href="#" title="Спецоценка условий труда и Профриски">Спецоценка условий <br>труда и Профриски</a></li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 col-lg-3 d-none d-sm-block">
										<div class="bd-highlight">
											<ul class="fw-normal li-group fw-bold">
												<li class="mb-2"><a href="#" title="НАКС">НАКС</a></li>
												<li class="mb-2"><a href="#" title="Неразрушающий конторль">Неразрушающий контроль</a></li>
												<li class="mb-2"><a href="#" title="Лицензирование">Лицензирование</a></li>
												<li class="mb-2"><a href="#" title="СРО и НОСТРОЙ">СРО и НОСТРОЙ</a></li>
												<li class="mb-2"><a href="#" title="Электробезопасность">Электробезопасность</a></li>
												<li class="mb-2"><a href="#" title="Топловые Энергоустановки">Топловые Энергоустановки</a></li>
												<li class="mb-2"><a href="#" title="Промышленная безопасность">Промышленная безопасность</a></li>
												<li class="mb-2"><a href="#" title="БДД и ДОПОК">БДД и ДОПОК</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>

			<div class="col-lg-6 d-none d-lg-block text-center" style="margin: auto;">
				<nav class="my-2 my-md-0 mr-md-3 fw-light">
					<a class="p-2" href="#" title="О компании">О компании</a>
					<a class="p-2" href="#" title="Услуги">Услуги</a>
					<a class="p-2" href="#" title="Статьи">Статьи</a>
					<a class="p-2" href="#" title="Контакты">Контакты</a>
				</nav>
			</div>

			<div class="col-md-6 col-sm-4 col-lg-3 d-none d-sm-block" style="text-align: right;">
				<p class="fw-bold tel-cont">+7 (495) 120 10 72</p>
				<button type="button" class="btn btn-of btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@">Заказать звонок</button>
			</div>
		</div>
	</div>
</div>