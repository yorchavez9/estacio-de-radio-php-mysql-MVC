<?php
$item = null;
$valor = null;

$mensajesContacto = ControladorMensaje::ctrMostrarMensaje($item, $valor);

$showState = 0;

foreach ($mensajesContacto as $key => $value) {
	if ($value["estado"] == 0) {
		$showState++;
	}
}


?>
<header>
	<div class="topbar d-flex align-items-center">
		<nav class="navbar navbar-expand gap-3">
			<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
			</div>


			<div class="top-menu ms-auto">
				<ul class="navbar-nav align-items-center gap-1">
					<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
						<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
						</a>
					</li>
					<li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;" data-bs-toggle="dropdown"><img src="vistas/dist/admin/assets/images/county/02.png" width="22" alt="">
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="vistas/dist/admin/assets/images/county/01.png" width="20" alt=""><span class="ms-2">English</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="vistas/dist/admin/assets/images/county/02.png" width="20" alt=""><span class="ms-2">Catalan</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="vistas/dist/admin/assets/images/county/03.png" width="20" alt=""><span class="ms-2">French</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="vistas/dist/admin/assets/images/county/04.png" width="20" alt=""><span class="ms-2">Belize</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="vistas/dist/admin/assets/images/county/05.png" width="20" alt=""><span class="ms-2">Colombia</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="vistas/dist/admin/assets/images/county/06.png" width="20" alt=""><span class="ms-2">Spanish</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="vistas/dist/admin/assets/images/county/07.png" width="20" alt=""><span class="ms-2">Georgian</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="vistas/dist/admin/assets/images/county/08.png" width="20" alt=""><span class="ms-2">Hindi</span></a>
							</li>
						</ul>
					</li>
					<li class="nav-item dark-mode d-none d-sm-flex">
						<a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i>
						</a>
					</li>
					<li class="nav-item dropdown dropdown-app">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><i class='bx bx-grid-alt'></i></a>
						<div class="dropdown-menu dropdown-menu-end p-0">
							<div class="app-container p-2 my-2">
								<div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/slack.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">Slack</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/behance.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">Behance</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/google-drive.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">Dribble</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/outlook.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">Outlook</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/github.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">GitHub</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/stack-overflow.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">Stack</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/figma.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">Stack</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/twitter.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">Twitter</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/google-calendar.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">Calendar</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/spotify.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">Spotify</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/google-photos.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">Photos</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/pinterest.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">Photos</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/linkedin.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">linkedin</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/dribble.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">Dribble</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/youtube.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">YouTube</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/google.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">News</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/envato.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">Envato</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col">
										<a href="javascript:;">
											<div class="app-box text-center">
												<div class="app-icon">
													<img src="vistas/dist/admin/assets/images/app/safari.png" width="30" alt="">
												</div>
												<div class="app-name">
													<p class="mb-0 mt-1">Safari</p>
												</div>
											</div>
										</a>
									</div>

								</div><!--end row-->

							</div>
						</div>
					</li>

					<li class="nav-item dropdown dropdown-large">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown"><span class="alert-count"><?php echo $showState; ?></span>
							<i class='bx bx-bell'></i>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="javascript:;">
								<div class="msg-header">
									<p class="msg-header-title">Notificaciones</p>
									<p class="msg-header-badge"><?php echo $showState; ?> Nuevos</p>
								</div>
							</a>
							<div class="header-notifications-list">
								<?php
								foreach ($mensajesContacto as $key => $value) {
								?>
									<a class="dropdown-item" href="mensajeContacto">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="vistas/dist/admin/assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name"><?php echo $value["nombre"] ?>
													<span class="msg-time float-end"><?php echo date('d/m/Y', strtotime($value["fecha"])); ?></span>
												</h6>

												<p class="msg-info">
													<?php
														$words = str_word_count($value["mensaje"], 1);
														$first_five_words = implode(' ', array_slice($words, 0, 5));
														echo $first_five_words;
														if (count($words) > 5) {
															echo '...'; // Agregar tres puntos si hay más palabras
														}
													?>
												</p>

											</div>
										</div>
									</a>
								<?php
								}
								?>
							</div>
							<a href="javascript:;">
								<div class="text-center msg-footer">
									<a href="mensajeContacto" class="btn btn-primary w-100">Ver todas las notificaciones</a>
								</div>
							</a>
						</div>
					</li>

				</ul>
			</div>
			<div class="user-box dropdown px-3">
				<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<img src="vistas/dist/admin/assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
					<div class="user-info">
						<p class="user-name mb-0"><?php echo $_SESSION["nombre"] ?></p>
						<p class="designattion mb-0"><?php echo $_SESSION["perfil"] ?></p>
					</div>
				</a>
				<ul class="dropdown-menu dropdown-menu-end">
					<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Perfil</span></a>
					</li>
					<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-cog fs-5"></i><span>Configuración</span></a>
					</li>
					<li>
						<div class="dropdown-divider mb-0"></div>
					</li>
					<li><a class="dropdown-item d-flex align-items-center" href="salir"><i class="bx bx-log-out-circle"></i><span>Salir</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>