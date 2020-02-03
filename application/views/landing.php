	<!-- Banner -->
		<div class="banner">
			<div class="bn-img-plc">
				<div class="bn-img" style="background-image:url(<?= base_url()?>assets/img/kalimantan.jpg)"></div>
				<div class="bn-overlay">
					<p> 
						Kalimantan merupakan sebuah pulau di Indonesia yang belum banyak dijelajahi oleh wisatawan namun memiliki banyak keunikan dan daya tarik termasuk juga kaya dengan warisan budaya.
					</p>
					<span>Kalimantan</span>
				</div>
			</div>
			<div class="bn-img-plc">
				<div class="bn-img" style="background-image:url(<?= base_url()?>assets/img/sulawesi1.jpg)"></div>
				<div class="bn-overlay">
					<p> 
					Nama Sulawesi diperkirakan berasal dari bahasa lokal, Sula yang artinya pulau dan Mesi yang berarti besi. Nama ini digunakan karena adanya perdagangan bijih besi, hasil produksi tambang-tambang di sekitar Danau Matano, 
					</p>
					<span>Sulawesi</span>
				</div>
			</div>
			<div class="bn-img-plc">
				<div class="bn-img" style="background-image:url(<?= base_url()?>assets/img/maluku1.jpg)"></div>
				<div class="bn-overlay">
					<p> 
					Maluku adalah sebuah provinsi yang meliputi bagian selatan Kepulauan Maluku, Indonesia, Mesir menyebutkan adanya negeri dari timur yang sangat kaya, merupakan tanah surga, dengan hasil alam berupa cengkih, emas dan mutiara, daerah itu tak lain dan tak bukan adalah tanah Maluku
					</p>
					<span>Maluku</span>
				</div>
			</div>
			<div class="bn-img-plc">
				<div class="bn-img" style="background-image:url(<?= base_url()?>assets/img/papua6.jpg)"></div>
				<div class="bn-overlay">
					<p>
					Provinsi Papua memiliki luas sekitar 421.981 km2, pulau Papua berada di ujung timur dari wilayah Indonesia, dengan potensi sumber daya alam yang bernilai ekonomis dan strategis, dan telah mendorong bangsa-bangsa asing untuk menguasai pulau Papua. 
					</p>
					<span>Papua</span>
				</div>
			</div>
		</div>
		<!-- End of Banner -->

		<!-- Data Terbaru -->
		<section class="sect-data pt-5 pb-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 m-0">
						<div class="col-lg-12">
							<h2>Berita Terbaru</h2>
						</div>
						<div class="col-lg-12">
							<?php foreach($presult as $res){?>
							<div class="info-latest my-4">
								<div class="row w-100">
									<div class="col-lg-9">
										<small><?= $res->cname?></small>
										<div class="title"> <?= substr($res->pname, 0, 35)?> </div>
										<div class="summary">
											Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit nostrum ducimus dolores quae? Laborum consectetur, est quaerat quos enim aut nihil perspiciatis, repellat quod voluptate reprehenderit ab possimus mollitia sunt!
											<!-- <?php //echo substr($res->pdesc, 0, 290)?>.. -->
										</div>
										<div class="date"><?= $res->pdate?></div>
									</div>
									<div class="col-lg-3 p-0 m-auto" style="text-align:center;">
										<button class="btn btn-theme-1 btn-sm my-2 w-75">Lainnya</button>
										<!-- <button class="btn btn-theme-1 btn-sm my-2 w-75"><i class="fas fa-download"></i>Unduh</button> -->
									</div>
								</div>
							</div>
							<?php };?>
							<div class="info-latest my-4">
								<div class="row w-100">
									<div class="col-lg-12">
										<a href=""><button class="btn btn-theme-1 btn-sm my-2 w-100">Lainnya</button></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 m-0 px-0">
						<div class="col-sm-12 m-0 p-0">
							<a href="">
								<div class="data-box">
								<i class="fas fa-angle-right cs-angle"></i>
								<i class="fas fa-heartbeat"></i> <i class="fas fa-users"></i>
								<p>Sosial dan Kesehatan</p>
							</div>
							</a>
						</div>
						<div class="col-sm-12 m-0 p-0">
							<div class="data-box">
								<i class="fas fa-angle-right cs-angle"></i>
								<i class="fas fa-balance-scale"></i> <i class="fas fa-landmark"></i>
								<p>Ekonomi Dan Bank</p>
							</div>
						</div>
						<div class="col-sm-12 m-0 p-0">
							<div class="data-box">
								<i class="fas fa-angle-right cs-angle"></i>
								<i class="fas fa-tractor"></i> <i class="fas fa-industry"></i>
								<p>Pertanian Dan Industri</p>
							</div>
						</div>
						<div class="col-sm-12 m-0 p-0">
							<div class="data-box">
								<i class="fas fa-angle-right cs-angle"></i>
								<i class="fas fa-tasks"></i> 
								<p>Perencanaan</p>
							</div>
						</div>
						<div class="col-sm-12 m-0 p-0">
							<div class="data-box">
								<i class="fas fa-angle-right cs-angle"></i>
								<i class="fas fa-archive"></i>
								<p>Lainnya</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End of Data Terbaru -->

		<!-- Graph -->
		<div class="sect-about graph py-4">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 chart-info" style="text-align:left">
						<h5>Grafik Data Terbaru</h5>
						<h1>Tingkat Partisipasi Angkatan Kerja Tahun 2018</h1>
						<div class="date">
							<div class="info-bar"></div>
							2019-06-14 00:03:12
						</div>
					</div>
					<div class="col-lg-7 chart-bar">
						<canvas id="myChart1"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="sect-about graph py-4">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 chart-info" style="text-align:left">
						<h5>Grafik Data Terbaru</h5>
						<h1>Tingkat Partisipasi Angkatan Kerja Tahun 2018</h1>
						<div class="date">
							<div class="info-bar"></div>
							2019-06-14 00:03:12
						</div>
					</div>
					<div class="col-lg-7 chart-bar">
						<canvas id="myChart2"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="sect-about graph py-4">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 chart-info" style="text-align:left">
						<h5>Grafik Data Terbaru</h5>
						<h1>Tingkat Partisipasi Angkatan Kerja Tahun 2018</h1>
						<div class="date">
							<div class="info-bar"></div>
							2019-06-14 00:03:12
						</div>
					</div>
					<div class="col-lg-7 chart-bar">
						<canvas id="myChart3"></canvas>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Graph -->

		<!-- About -->
		<div class="sect-about about-us pt-4">
			<div class="img-container img-left">
				<img src="<?= base_url()?>assets/img/Geo.jpg" alt="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 about-image">
					</div>
					<div class="col-lg-6 about-article themed my-4">
						<div class="col-lg-12 p-0" id="geografis">
							<div class="title themed mb-3"><h3>Letak Geografis</h3></div>
							<p>Sulampuka terdiri dari empat pulau, yakni Pulau Sulawesi, Maluku, Papua dan kalimantan.  Sedangkan kalimantan terdiri dari Provinsi Kalimantan Selatan, Kalimantan Tengah, Kalimantan Timur, Kalimantan Barat, dan Kalimantan Utara. Pulau Sulawesi terdiri dari enam provinsi, yakni Provinsi Sulawesi Utara, Sulawesi Tengah, Sulawesi Selatan, Sulawesi Tenggara, Sulawesi Barat dan Gorontalo. Sementara Kepulauan Maluku terdiri dari dua provinsi, yakni Provinsi Maluku dan Maluku Utara. Sedangkan Pulau Papua terdiri dari dua provinsi, yakni Provinsi Papua dan Papua Barat.</p> 
						</div>
						<div class="col-lg-12 p-0" id="about">
							<div class="title themed mb-3"><h3>Keadaan Penduduk</h3></div>
							<p>Sulampuka terdiri dari empat pulau, yakni Pulau Sulawesi, Maluku, Papua dan kalimantan.  Sedangkan kalimantan terdiri dari Provinsi Kalimantan Selatan, Kalimantan Tengah, Kalimantan Timur, Kalimantan Barat, dan Kalimantan Utara. Pulau Sulawesi terdiri dari enam provinsi, yakni Provinsi Sulawesi Utara, Sulawesi Tengah, Sulawesi Selatan, Sulawesi Tenggara, Sulawesi Barat dan Gorontalo. Sementara Kepulauan Maluku terdiri dari dua provinsi, yakni Provinsi Maluku dan Maluku Utara. Sedangkan Pulau Papua terdiri dari dua provinsi, yakni Provinsi Papua dan Papua Barat.</p> 
						</div>
						<div class="col-lg-12 p-0" id="people">
							<div class="title themed mb-3"><h3>Ketenagakerjaan</h3></div>
							<p>Sulampuka terdiri dari empat pulau, yakni Pulau Sulawesi, Maluku, Papua dan kalimantan.  Sedangkan kalimantan terdiri dari Provinsi Kalimantan Selatan, Kalimantan Tengah, Kalimantan Timur, Kalimantan Barat, dan Kalimantan Utara. Pulau Sulawesi terdiri dari enam provinsi, yakni Provinsi Sulawesi Utara, Sulawesi Tengah, Sulawesi Selatan, Sulawesi Tenggara, Sulawesi Barat dan Gorontalo. Sementara Kepulauan Maluku terdiri dari dua provinsi, yakni Provinsi Maluku dan Maluku Utara. Sedangkan Pulau Papua terdiri dari dua provinsi, yakni Provinsi Papua dan Papua Barat.</p> 
						</div>
						<div class="col-lg-12 p-0">
							<button for="r1" class="about-checked" value="1"></button>
							<button for="r2" class="about-checked" value="2"></button>
							<button for="r3" class="about-checked" value="3"></button>
						</div>
					</div>
				</div>
			</div>
		</div>
