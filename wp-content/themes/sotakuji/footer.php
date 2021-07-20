
	<footer id="footer">
		<section id="contact" class="contents">
			<div class="bg-img"><img src="<?php echo home_url(); ?>/assets/common/img/bg-img01.png" alt=""></div>
			<div class="container">
				<h2>お問い合わせ</h2>
				<h3>Contact</h3>
				<div class="flexbox">
					<div class="box">
						<p class="tel">TEL.<a href="tel:0722278855">072-227-8855</a> / <br class="dsp-ws">FAX.072-238-0007</p>
						<a href="<?php echo home_url(); ?>/よくあるご質問/">よくあるご質問は<br class="dsp-ws">こちらからご覧いただけます<img src="<?php echo home_url(); ?>/assets/common/img/img-arrow.png" alt=""></a>
					</div>
					<a href="<?php echo home_url(); ?>/お問い合わせ/">
					<div class="box">
						<p>メールフォームから<br class="dsp-ws">お問い合わせ</p>
						<a href="<?php echo home_url(); ?>/お問い合わせ/">見学予約のご相談は<br class="dsp-ws">こちらからどうぞ<img src="<?php echo home_url(); ?>/assets/common/img/img-arrow.png" alt=""></a>
					</div></a>
				</div>
			</div>
		</section>
		<section>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d821.1220693136074!2d135.48103822715913!3d34.591812580462474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000dcf115afd43b%3A0xb271d58481e046!2z5a6X5a6F5a-6!5e0!3m2!1sja!2sjp!4v1583399382633!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</section>
		<section id="footer-access" class="flexbox">
			<div class="box box3">
				<div class="box-inner">
					<img src="<?php echo home_url(); ?>/assets/common/img/img-car.png" alt="">
					<a class="btn" href="<?php echo home_url(); ?>/アクセス/">宗宅寺へのアクセスを見る</a>
				</div>
			</div>
			<div class="box box2">
				<div class="box-inner">
					<p><span>浄土宗 松音山</span> 宗宅寺</p>
					<p class="info">〒590-0921 大阪府堺市堺区北半町西 ３−１<br><a href="tel:0722278855">TEL.072-227-8855</a> / FAX.072-238-0007<br>開門時間 （平日・土曜・日曜・祝日） <br class="dsp-ws">8:00〜18:00</p>
					<a target="_blank" class="icon-f" href="https://www.instagram.com/sotakuji_jodo/"><img src="<?php echo home_url(); ?>/assets/common/img/icon-instagram.png" alt=""></a>
					<a target="_blank" class="icon-f icon-i" href="https://www.facebook.com/浄土宗-宗宅寺-2085309881598863/"><img src="<?php echo home_url(); ?>/assets/common/img/icon-facebook.png" alt=""></a>
					<a target="_blank" class="icon-f icon-i" href="https://www.youtube.com/channel/UCJ8nndCGDRbu8WYoJ3Pcusg"><img src="<?php echo home_url(); ?>/assets/common/img/icon-youtube.png" alt=""></a>
				</div>
			</div>
		</section>
		<section>
			<ul class="flexbox">
				<li><a href="<?php echo home_url(); ?>/宗宅寺について/">宗宅寺について</a></li>
				<li class="dsp-w">/</li>
				<li><a href="<?php echo home_url(); ?>/永代供養/">永代供養墓「蓮生」</a></li>
				<li class="dsp-w">/</li>
				<li><a href="<?php echo home_url(); ?>/納骨堂/">納骨堂「光明」</a></li>
				<li class="dsp-w">/</li>
				<li><a href="<?php echo home_url(); ?>/お問い合わせ/">お問い合わせ</a></li>
				<li class="dsp-w">/</li>
				<li><a href="<?php echo home_url(); ?>/よくあるご質問/">よくあるご質問</a></li>
				<li class="dsp-w">/</li>
				<li><a href="<?php echo home_url(); ?>//アクセス">アクセス</a></li>
			</ul>
			<p class="copy-rights">浄土宗 松音山 <span>宗宅寺</span> Copyright(c) Soutakuji All Rights Reserved.</p>
		</section>
	</footer>
	
	<script>
		//header animation -logo
		(function($){
			$(function(){
			   $(window).scroll(function(){
				  var scr = $(window).scrollTop();
				  if(scr > 1){
					 $('#logo').addClass('mini');
				  }else{
					 $('#logo').removeClass('mini');
				  }
			   })
			})
		})(jQuery);
		
		//header animation -height
		$(function() {
			$(window).on('load scroll', function() {
				var scrollPos = $(this).scrollTop();
				if ( scrollPos > 100 ) {
					$('#header').addClass('is-animation');
				} else {
					$('#header').removeClass('is-animation');
				}
			});
		});	

		
		//変数定義
		var navigationOpenFlag = false;
		var navButtonFlag = true;
		var focusFlag = false;
		//ハンバーガーメニュー
			$(function(){
			  $(document).on('click','.el_humburger',function(){
				if(navButtonFlag){
				  spNavInOut.switch();
				  //一時的にボタンを押せなくする
				  setTimeout(function(){
					navButtonFlag = true;
				  },200);
				  navButtonFlag = false;
				}
			  });
			  $(document).on('click touchend', function(event) {
				if (!$(event.target).closest('.bl_header,.el_humburger').length && $('body').hasClass('js_humburgerOpen') && focusFlag) {
				  focusFlag = false;
				  //scrollBlocker(false);
				  spNavInOut.switch();
				}
			  });
			});
		//ナビ開く処理
		function spNavIn(){
		  $('body').removeClass('js_humburgerClose');
		  $('body').addClass('js_humburgerOpen');
		  setTimeout(function(){
			focusFlag = true;
		  },200);
		  setTimeout(function(){
			navigationOpenFlag = true;
		  },200);
		}
		//ナビ閉じる処理
		function spNavOut(){
		  $('body').removeClass('js_humburgerOpen');
		  $('body').addClass('js_humburgerClose');
		  setTimeout(function(){
			$(".uq_spNavi").removeClass("js_appear");
			focusFlag = false;
		  },200);
		  navigationOpenFlag = false;
		}
		//ナビ開閉コントロール
		var spNavInOut = {
		  switch:function(){
			if($('body.spNavFreez').length){
			  return false;
			}
			if($('body').hasClass('js_humburgerOpen')){
			 spNavOut();
			} else {
			 spNavIn();
			}
		  }
		};
		//add class to "humburger-title"
		$(".el_humburger_wrapper").on("click", function(){
		  $(".humburger-title").toggleClass("clicked");
		});

		//スライドショー
		$(function(){
		  var imgs = $("#slideshow > li");
		  var imgLen = imgs.length;
		  var count = 0;
		  function changeImg(){
			count = (count + 1) % imgLen;
			imgs.removeClass("showSlide").eq(count).addClass("showSlide");
		  }
		  setInterval(changeImg, 5000);
		})	
		
		//FAQアコーディオンボタン
		$(function(){
			$(".accordion li a").on("click", function() {
				$(this).next().slideToggle();	
				// activeが存在する場合
				if ($(this).children(".accordion_icon").hasClass('active')) {			
					// activeを削除
					$(this).children(".accordion_icon").removeClass('active');				
				}
				else {
					// activeを追加
					$(this).children(".accordion_icon").addClass('active');			
				}			
			});
		});
		
		//グリッドレイアウト
		$(function () {
		  var sp = 600; //SPのサイズを設定

		  function masonry_execute() {
			var $demo2 = $('.grid');   //コンテナとなる要素を指定

			if ( $('html').width() < sp ) { //ウィンドウ幅が480px以下だった場合、masonry破棄 (無効)
			  $demo2.masonry('destroy');
			} else {                        //ウィンドウ幅が480px以上だった場合、masonry適応
			  $demo2.imagesLoaded(function(){
				$demo2.masonry({
				  itemSelector: '.grid-item',
				  columnWidth: 245,
				  fitWidth: true,
				});
			  });
			}
		  }
		  masonry_execute(); //masonry_execute関数を実行

		  $(window).resize(function(){ //ウィンドウがリサイズされたら、再度masonry_execute関数を実行
			masonry_execute();
		  });
		});
		
		//お問合せbtnのフェード
		$(function () {
			$(window).scroll(function () {
				const wHeight = $(window).height();
				const scrollAmount = $(window).scrollTop();
				$('.scrollanime').each(function () {
					const targetPosition = $(this).offset().top;
					if(scrollAmount > targetPosition - wHeight + 60) {
						$(this).addClass("fadeInDown");
					}
				});
			});
		});
		
	</script>
 <?php wp_footer(); ?>
</body>
</html>