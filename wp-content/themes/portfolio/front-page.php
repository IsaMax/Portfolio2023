<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="bg-[#f7fafc] pt-9 xs:pt-[65px] pb-[80px]">
			<div class="container mx-auto px-5">
				<div class="grid grid-cols-1 md:grid-cols-section items-center gap-x-8 justify-between">
					<div>
						<h1 class=" text-fz48/[55px] md:text-fz60/[64px] text-darkerColorText font-bold font-barlow mb-5 md:mb-12">
							<?= get_field('titre_principal') ?>
						</h1>
						<h2 class="font-inter text-fz20/[30px] md:text-fz24/[40px] md:w-[77%]">
							<?= get_field('sous_titre_principal') ?>
						</h2>

						<div class="mt-8 flex flex-wrap gap-6 font-barlow font-semiBold text-fz20">
							<?php $groupe_boutons = get_field('bloc_boutons'); ?>

							<a href="<?= $groupe_boutons['lien_1']['url'] ?>" class="px-5 py-3 text-fz16 md:text-fz20 text- rounded-lg bg-blue text-white transition ease-linear hover:bg-blueDarker">
								<?= $groupe_boutons['lien_1']['title'] ?>
							</a>

							<a href="<?= $groupe_boutons['lien_2']['url'] ?>" class="px-5 py-3 text-fz16 md:text-fz20 rounded-lg text-blue border border-blue transition ease-linear hover:bg-[#077de413]">
								<?= $groupe_boutons['lien_2']['title'] ?>
							</a>
						</div>
					</div>

					<div class="relative z-10 w-fit mt-7 md:mt-0 before:absolute before:w-[96%] before:h-full before:bg-[#077de44f] before:-z-10 before:rounded-xl before:rotate-3 before:-left-[10px] before:top-[26px] xs:before:-left-[24px] xs:before:top-[43px]">
					
						<?php the_post_thumbnail('', array('class' => 'w-[350px] md:w-[480px] rounded-xl rotate-2')) ?>
					</div>
				</div>
			</div>
		</section>

		<section class=" py-14 xs:pt-[80px] xs:pb-[85px]">

			<div class="container mx-auto px-5">

				<h2 class="font-barlow font-bold text-darkerColorText text-fz36/[42px] md:text-fz48/[48px] text-center mb-6">
					<?= get_field('titre_services') ?>
				</h2>

				<p class="font-inter text-fz18 mx-auto text-center md:w-2/3">
					<?= get_field('sous_titre_services') ?>
				</p>
			</div>

			<div class="sections-services mt-8 xs:mt-16">

				<div class="container px-5 mx-auto grid grid-cols-2 lg:grid-cols-4 gap-4">

					<?php
					$groupe_services = get_field('bloc_des_services');

					if ($groupe_services) : ?>

						<?php foreach ($groupe_services as $groupe) :

							$image = $groupe['image'];
							$titre = $groupe['titre'];
							$sous_titre = $groupe['sous-titre'];
						?>
							<div class="text-center flex flex-col items-center gap-1 md:gap-4">

								<?php if ($image) : ?>
									<div class="relative w-fit before:w-[80px] before:h-[80px] xs:before:w-[100px] xs:before:h-[100px]
								 before:bg-[#b6d4f587] before:rounded-full before:absolute before:-z-10">
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="250" height="250" class="w-[150px] h-[150px] xs:w-[200px] xs:h-[200px]" />
									</div>
								<?php endif; ?>

								<?php if ($titre) : ?>
									<h3 class="uppercase font-barlow font-bold text-fz20 text-darkerColorText"><?= $titre; ?></h3>
								<?php endif; ?>

								<?php if ($sous_titre) : ?>
									<p><?= $sous_titre; ?></p>
								<?php endif; ?>

							</div>

						<?php endforeach; ?>
					<?php endif; ?>

				</div>
			</div>

		</section>

		<section class="py-8 xs:pt-16 xs:pb-5 md:pb-28 bg-blueDarker relative after:block after:absolute after:w-full after:h-[54%] after:bg-white after:bottom-0 after:left-0 after:z-0">
			<div id="splide-avis" class="splide z-10">
				<h2 class="text-white pl-5 xs:pl-[10%] font-barlow font-bold text-fz36/[42px] md:text-fz48 flex items-center gap-6 mb-6">
					<?= get_field('titre_temoignages') ?>
				</h2>

				<div class="splide__track relative z-10 pt-6 pb-14">
					<div class="splide__list">
						<?php
						$groupe_temoignages = get_field('groupe_temoignages');

						if ($groupe_temoignages) : ?>

							<?php foreach ($groupe_temoignages as $groupe) :

								$temoignage = $groupe['temoignage'];
								$nom_prenom = $groupe['nom_prenom'];
								$profession = $groupe['profession'];
								$entreprise = $groupe['entreprise'];

								if (empty($temoignage)) continue;
							?>
								<div class="splide__slide relative px-9 pt-20 pb-7 h-fit rounded-xl bg-white">

									<?php if ($temoignage) : ?>
										<span class="absolute top-[38px] block font-inter text-[70px]/[70px] text-blueDarker">“</span>
										<div>
											<blockquote class="text-fz20 md:text-fz24/9"><?= $temoignage ?></blockquote>
										</div>
									<?php endif; ?>

									<?php if ($nom_prenom) : ?>
										<p class="text-fz22 md:text-fz24/5 font-bold mt-2 md:mt-6"><?= $nom_prenom ?></p>
									<?php endif; ?>

									<?php if ($profession) : ?>
										<p class="text-fz22 md:text-fz24/5 mt-2 md:mt-4">
											<?php echo $profession;
											if ($entreprise) :
												echo '<span class="text-blueDarker font-bold"> ' . $entreprise . '</span>';
											endif; ?>
										</p>
									<?php endif; ?>

								</div>

							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>

		<section id="contact" class="py-8 xs:py-16 bg-lightGreen">
			<div class="container mx-auto px-5">
				<h2 class="font-barlow font-bold text-darkerColorText text-fz36/[42px] md:text-fz48/[48px] text-center mb-6 md:mb-8">
					Et si on discutait ?
				</h2>
				
				<?= do_shortcode('[contact-form-7 id="5746777" title="Contact"]') ?>
			</div>
		</section>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>


<!-- 

Comme mon précédent portfolio avec les titres en gros et les images qui apparaissent comme cncs sur le côté droit. Avec un remplissage de couleur principal de la capture affiché. Du haut vers le bas. Plus une ouverture accordéon si clique et les infos qui s'affichent avec la capture écran du site dans un pc plus texte explicatif.

-->