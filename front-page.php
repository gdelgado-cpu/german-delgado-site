<?php
/**
 * Front page template for Germán Delgado portfolio.
 *
 * @package glitche-child
 */

get_header();
?>

<!-- Started -->
<div class="section started" id="inicio">
	<div class="centrize full-width">
		<div class="vertical-center">
			<div class="started-content">
				<h1 class="h-title glitch-effect" data-text="GERMÁN DELGADO">GERMÁN DELGADO</h1>
				<div class="h-subtitle typing-subtitle">
					<p>Ingeniero de Sistemas</p>
					<p>Automatización IA &amp; No-Code</p>
					<p>UI/UX</p>
					<p>Producción de Video con IA</p>
				</div>
				<span class="typed-subtitle"></span>
			</div>
		</div>
	</div>
	<a href="#about" class="mouse_btn"><span class="ion ion-mouse"></span></a>
</div>

<!-- About -->
<div class="section about" id="about">
	<div class="content">
		<div class="title">
			<div class="title_inner">Sobre Mí</div>
		</div>
		<div class="desc">
			<p>Ingeniero de Sistemas graduado en mayo de 2024, con experiencia progresiva en soporte de sistemas, desarrollo de software y automatización de procesos con inteligencia artificial. Ubicado en Ibagué, Tolima, Colombia.</p>
			<p>Diseño interfaces, automatizo flujos y genero contenido con IA: video con Kling 3.0 y Higgsfield, voz con MiniMax, y orquestación de agentes con n8n, Claude y Ollama.</p>
			<div class="info-list">
				<ul>
					<li><strong>Nombre:</strong> Germán Andrés Delgado Lozano</li>
					<li><strong>Ubicación:</strong> Ibagué, Tolima, Colombia</li>
					<li><strong>Email:</strong> <a href="mailto:German.delgadol@outlook.com">German.delgadol@outlook.com</a></li>
					<li><strong>Teléfono:</strong> <a href="https://wa.me/573174158919" target="_blank" rel="noopener">+57 317 415 8919</a></li>
				</ul>
			</div>
			<div class="bts bts-list">
				<a href="https://wa.me/573174158919" target="_blank" rel="noopener" class="btn fill" data-text="Escríbeme por WhatsApp">Escríbeme por WhatsApp</a>
				<a href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/cv_german_delgado.pdf' ); ?>" class="btn fill" target="_blank" rel="noopener" data-text="Descargar CV">Descargar CV</a>
			</div>
		</div>
		<div class="image">
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/photo-german.jpg' ); ?>" alt="Germán Delgado" />
		</div>
		<div class="clear"></div>
	</div>
</div>

<!-- Resume -->
<div class="section resume" id="experience">
	<div class="content">
		<div class="cols">
			<div class="col col-md">
				<div class="title">
					<div class="title_inner">Experiencia</div>
				</div>
				<div class="resume-items">
					<div class="resume-item active">
						<div class="date">Ene 2026 – May 2026</div>
						<div class="name">Automatización IA &amp; Diseño UI/UX</div>
						<div class="single-post-text">
							<p>Thanos Corp · than-os.com · Remoto</p>
							<p>Diseño UI/UX corporativo, flujos n8n, video IA con Higgsfield/Kling 3.0, voz con MiniMax, edición en CapCut y automatización con Claude/Ollama.</p>
						</div>
					</div>
					<div class="resume-item active">
						<div class="date">Feb 2025 – Nov 2025</div>
						<div class="name">Ingeniero Junior de Soporte</div>
						<div class="single-post-text">
							<p>Alcanos de Colombia S.A. E.S.P. · Ibagué</p>
							<p>Diagnóstico de sistemas internos, gestión de bases SQL e Informix, análisis y corrección de código C#.</p>
						</div>
					</div>
					<div class="resume-item active">
						<div class="date">Jul 2023 – May 2024</div>
						<div class="name">Desarrollador de Videojuegos</div>
						<div class="single-post-text">
							<p>Semillero DivitGames – U. Cooperativa de Colombia</p>
							<p>Juego multiplataforma 2D en Unity/C#. Publicación científica en Revista AmITIC 2024, Vol. 37.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col col-md">
				<div class="title">
					<div class="title_inner">Educación &amp; Certificaciones</div>
				</div>
				<div class="resume-items">
					<div class="resume-item active">
						<div class="date">Grad. Mayo 2024</div>
						<div class="name">Ingeniería en Sistemas</div>
						<div class="single-post-text">
							<p>Universidad Cooperativa de Colombia · Ibagué</p>
						</div>
					</div>
					<div class="resume-item active">
						<div class="date">2026</div>
						<div class="name">Automatización de flujos con n8n</div>
						<div class="single-post-text">
							<p>Autoformación aplicada / Thanos Corp</p>
						</div>
					</div>
					<div class="resume-item active">
						<div class="date">2026</div>
						<div class="name">Generación de Video con IA</div>
						<div class="single-post-text">
							<p>Higgsfield &amp; Kling 3.0 · Autoformación aplicada</p>
						</div>
					</div>
					<div class="resume-item active">
						<div class="date">2026</div>
						<div class="name">LLMs Locales con Ollama</div>
						<div class="single-post-text">
							<p>Autoformación aplicada</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Skills -->
<div class="section skills" id="skills">
	<div class="content">
		<div class="title">
			<div class="title_inner">Habilidades Técnicas</div>
		</div>
		<div class="skills">
			<ul>
				<li>
					<div class="name">Automatización IA (n8n, Claude, Ollama)</div>
					<div class="progress">
						<div class="percentage" style="width: 90%;"><span class="percent">90%</span></div>
					</div>
				</li>
				<li>
					<div class="name">Video con IA (Kling 3.0, Higgsfield, MiniMax)</div>
					<div class="progress">
						<div class="percentage" style="width: 85%;"><span class="percent">85%</span></div>
					</div>
				</li>
				<li>
					<div class="name">Diseño UI/UX &amp; prototipado</div>
					<div class="progress">
						<div class="percentage" style="width: 80%;"><span class="percent">80%</span></div>
					</div>
				</li>
				<li>
					<div class="name">Bases de datos SQL / Informix</div>
					<div class="progress">
						<div class="percentage" style="width: 85%;"><span class="percent">85%</span></div>
					</div>
				</li>
				<li>
					<div class="name">C# / Unity / Python</div>
					<div class="progress">
						<div class="percentage" style="width: 75%;"><span class="percent">75%</span></div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>

<!-- Portfolio -->
<div class="section works" id="portfolio">
	<div class="content">
		<div class="title">
			<div class="title_inner">Portafolio</div>
		</div>
		<div class="box-items portfolio-items">
			<div class="box-item">
				<div class="image">
					<a href="https://recuerdosauntoque.com" target="_blank" rel="noopener">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/project-recuerdos.jpg' ); ?>" alt="Recuerdos a un Toque" />
						<span class="info"><span class="centrize full-width"><span class="vertical-center"><span class="ion ion-link"></span></span></span></span>
					</a>
				</div>
				<div class="desc">
					<div class="category">NFC + QR</div>
					<a href="https://recuerdosauntoque.com" target="_blank" rel="noopener" class="name">Recuerdos a un Toque</a>
				</div>
			</div>
			<div class="box-item">
				<div class="image">
					<a href="https://arabiaperfumes.com.co" target="_blank" rel="noopener">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/project-arabia.jpg' ); ?>" alt="Arabia Perfumes" />
						<span class="info"><span class="centrize full-width"><span class="vertical-center"><span class="ion ion-link"></span></span></span></span>
					</a>
				</div>
				<div class="desc">
					<div class="category">E-commerce</div>
					<a href="https://arabiaperfumes.com.co" target="_blank" rel="noopener" class="name">Arabia Perfumes</a>
				</div>
			</div>
			<div class="box-item">
				<div class="image">
					<a href="https://instapromt.io" target="_blank" rel="noopener">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/project-instapromt.jpg' ); ?>" alt="Insta.PROMT" />
						<span class="info"><span class="centrize full-width"><span class="vertical-center"><span class="ion ion-link"></span></span></span></span>
					</a>
				</div>
				<div class="desc">
					<div class="category">Suscripción SaaS</div>
					<a href="https://instapromt.io" target="_blank" rel="noopener" class="name">Insta.PROMT</a>
				</div>
			</div>
			<div class="box-item">
				<div class="image">
					<a href="https://sobrevivientes-clerical.org" target="_blank" rel="noopener">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/project-resabsec.jpg' ); ?>" alt="RESABSEC" />
						<span class="info"><span class="centrize full-width"><span class="vertical-center"><span class="ion ion-link"></span></span></span></span>
					</a>
				</div>
				<div class="desc">
					<div class="category">Mapa + CMS</div>
					<a href="https://sobrevivientes-clerical.org" target="_blank" rel="noopener" class="name">RESABSEC / Sobrevivientes</a>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>

<!-- Contact -->
<div class="section contacts" id="contact">
	<div class="content">
		<div class="title">
			<div class="title_inner">Contacto</div>
		</div>
		<div class="service-items">
			<div class="service-item">
				<div class="icon"><span class="ion ion-email"></span></div>
				<div class="name">Email</div>
				<p><a href="mailto:German.delgadol@outlook.com">German.delgadol@outlook.com</a></p>
			</div>
			<div class="service-item">
				<div class="icon"><span class="ion ion-social-whatsapp"></span></div>
				<div class="name">WhatsApp</div>
				<p><a href="https://wa.me/573174158919" target="_blank" rel="noopener">+57 317 415 8919</a></p>
			</div>
			<div class="service-item">
				<div class="icon"><span class="ion ion-social-linkedin"></span></div>
				<div class="name">LinkedIn</div>
				<p><a href="https://www.linkedin.com/in/german-andres-delgado-9a0340313/" target="_blank" rel="noopener">linkedin.com/in/german-andres-delgado</a></p>
			</div>
			<div class="service-item">
				<div class="icon"><span class="ion ion-social-instagram"></span></div>
				<div class="name">Instagram</div>
				<p><a href="https://www.instagram.com/german_d_d/" target="_blank" rel="noopener">@german_d_d</a></p>
			</div>
		</div>
	</div>
</div>

<?php
get_sidebar();
get_footer();
