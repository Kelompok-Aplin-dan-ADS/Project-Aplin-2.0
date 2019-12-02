<?php
require_once("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="jquery.js"></script>
	<style>
		.slider-wrapper {
			width: 100%;
			height: 100vh;
			position: relative;
		}

		.slide {
			float: left;
			position: absolute;
			width: 100%;
			height: 100%;
			opacity: 0;
			transition: opacity 3s linear;
		}

		.slider-wrapper>.slide:first-child {
			opacity: 1;
		}

		.btn {
			font-family: arial;
			font-size: 20px;
			text-align: center;
			line-height: 38px;
		}

		#bagian-1 {
			width: 100%;
			height: 80vh;
			border: 1px solid black;
			position: absolute;
			z-index: 3;
			margin: 7%;
		}

		#content-berita-agenda {
			border: 1px solid black;
			height: 70vh;
		}
	</style>
	<title>Halaman Media Massa</title>
</head>

<body>
	<div class="container" id="bagian-1">
		<div class="row">
			<div class="col-md-8">
				<!-- #943434-->
				<button type="button" style=" border-radius:25px; height: 50px; width: 50%;" id="bagian1" onclick="pilihacara(1)" class="btn">Berita</button>
				<button type="button" style=" border-radius:25px; height: 50px;width: 49%;" id="bagian2" onclick="pilihacara(2)" class="btn">Agenda</button>
				<div id="content-berita-agenda" class="col-md-12">

				</div>
			</div>
			<div class="col-md-4">
				<div id="content-media">
					<h1>MEDIA MASSA</h1>
					<?php
					$query = mysqli_query($conn, "SELECT acara.id_acara, acara.judul , acara.deskripsi , acara.kategori , acara.jurusan FROM acara WHERE kategori ='2'");
					while ($row = mysqli_fetch_array($query)) {
						echo "<div id='isi'><a href='detailberita.php?id=" . $row['id_acara'] . "'>" . $row['judul'] . "</a></div>";
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="slider" id="main-slider" style="z-index: 0">
		<div class="slider-wrapper">
			<img src="back.jpg" style="-webkit-filter:brightness(20%);" alt="First" class="slide" />
			<img src="back1.jpg" style="-webkit-filter:brightness(20%);" alt="Second" class="slide" />
			<img src="back.jpg" style="-webkit-filter:brightness(20%);" alt="Third" class="slide" />
		</div>
	</div>
</body>

</html>
<script>
	function pilihacara(ind) {
		$.post("ajax_media.php", {
				mode: "media",
				t1: ind
			},
			function(result) {
				$("#content-berita-agenda").html(result);
			}
		);
	}
	(function() {

		function Slideshow(element) {
			this.el = document.querySelector(element);
			this.init();
		}

		Slideshow.prototype = {
			init: function() {
				this.wrapper = this.el.querySelector(".slider-wrapper");
				this.slides = this.el.querySelectorAll(".slide");
				this.previous = this.el.querySelector(".slider-previous");
				this.next = this.el.querySelector(".slider-next");
				this.index = 0;
				this.total = this.slides.length;
				this.timer = null;
				this.action();
				this.stopStart();
			},
			_slideTo: function(slide) {
				var currentSlide = this.slides[slide];
				currentSlide.style.opacity = 1;

				for (var i = 0; i < this.slides.length; i++) {
					var slide = this.slides[i];
					if (slide !== currentSlide) {
						slide.style.opacity = 0;
					}
				}
			},
			action: function() {
				var self = this;
				self.timer = setInterval(function() {
					self.index++;
					if (self.index == self.slides.length) {
						self.index = 0;
					}
					self._slideTo(self.index);
				}, 3000);
			},
			stopStart: function() {
				var self = this;
				self.el.addEventListener("mouseover", function() {
					clearInterval(self.timer);
					self.timer = null;

				}, false);
				self.el.addEventListener("mouseout", function() {
					self.action();

				}, false);
			}
		};
		document.addEventListener("DOMContentLoaded", function() {
			var slider = new Slideshow("#main-slider");
		});
	})();
</script>