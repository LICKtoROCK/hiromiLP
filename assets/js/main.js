/* global $, google */
// ヘッダーのスクロール時のカラー変更
window.addEventListener("scroll", function () {
    // ヘッダーを変数の中に格納する
    const header = document.querySelector("header");
    // 100px以上スクロールしたらヘッダーに「scroll-nav」クラスをつける
    header.classList.toggle("scroll-nav", window.scrollY > 500);
  });
// メインビジュアル雪の設定
particlesJS("particles-js", {"particles":{"number":{"value":400,"density":{"enable":true,"value_area":800}},"color":{"value":"#fff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/snow.png","width":100,"height":100}},"opacity":{"value":0.5,"random":true,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":10,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":500,"color":"#ffffff","opacity":0.4,"width":2},"move":{"enable":true,"speed":6,"direction":"bottom","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"bubble"},"onclick":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":0.5}},"bubble":{"distance":400,"size":4,"duration":0.3,"opacity":1,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});

// TextTypingの設定
function TextTypingAnime() {
	$('.TextTyping').each(function () {
		var elemPos = $(this).offset().top - 50;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		var thisChild = "";
		if (scroll >= elemPos - windowHeight) {
			thisChild = $(this).children(); //spanタグを取得
			//spanタグの要素の１つ１つ処理を追加
			thisChild.each(function (i) {
				var time = 100;
				//時差で表示する為にdelayを指定しその時間後にfadeInで表示させる
				$(this).delay(time * i).fadeIn(time);
			});
		} else {
			thisChild = $(this).children();
			thisChild.each(function () {
				$(this).stop(); //delay処理を止める
				$(this).css("display", "none"); //spanタグ非表示
			});
		}
	});
}
// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
	TextTypingAnime();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
	//spanタグを追加する
	var element = $(".TextTyping");
	element.each(function () {
		var text = $(this).html();
		var textbox = "";
		text.split('').forEach(function (t) {
			if (t !== " ") {
				textbox += '<span>' + t + '</span>';
			} else {
				textbox += t;
			}
		});
		$(this).html(textbox);

	});

	TextTypingAnime();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述

// ハンバーガーメニュー
$(".openbtn").click(function () {//ボタンがクリックされたら
	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
    $(".circle-bg").toggleClass('circleactive');//丸背景にcircleactiveクラスを付与
});
$("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".openbtn").removeClass('active');//ボタンの activeクラスを除去し
    $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスを除去
    $(".circle-bg").removeClass('circleactive');//丸背景のcircleactiveクラスを除去
});

// スキルバー
jQuery( function($) {
	$('.skillbar').skillBars({
		from: 0,	// バーの動くスタート位置
		speed: 4000,  // 動くスピード
		interval: 100, // 動き始めるまでの時間
	});
});
// スライドショー
$('.slider').slick({
    autoplay: true,//自動的に動き出すか。初期値はfalse。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    slidesToShow: 3,//スライドを画面に3枚見せる
    slidesToScroll: 3,//1回のスクロールで3枚の写真を移動して見せる
    prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
    dots: true,//下部ドットナビゲーションの表示
    responsive: [
        {
        breakpoint: 769,//モニターの横幅が769px以下の見せ方
        settings: {
            slidesToShow: 2,//スライドを画面に2枚見せる
            slidesToScroll: 2,//1回のスクロールで2枚の写真を移動して見せる
        }
    },
    {
        breakpoint: 426,//モニターの横幅が426px以下の見せ方
        settings: {
            slidesToShow: 1,//スライドを画面に1枚見せる
            slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
        }
    }
]
});
//画像のモーダル
$(".gallery").modaal({
	type: 'image',
	overlay_close:true,//モーダル背景クリック時に閉じるか
	before_open:function(){// モーダルが開く前に行う動作
		$('html').css('overflow-y','hidden');/*縦スクロールバーを出さない*/
	},
	after_close:function(){// モーダルが閉じた後に行う動作
		$('html').css('overflow-y','scroll');/*縦スクロールバーを出す*/
	}
});
//worksのコンテンツの動き
// 動きのきっかけとなるアニメーションの名前を定義
function fadeAnime(){

    //ふわっと動くきっかけのクラス名と動きのクラス名の設定
    $('.fadeUpTrigger').each(function(){ //fadeInUpTriggerというクラス名が
    　　var elemPos = $(this).offset().top-50; //要素より、50px上の
    　　var scroll = $(window).scrollTop();
    　　var windowHeight = $(window).height();
    　　if (scroll >= elemPos - windowHeight){
    　　$(this).addClass('fadeUp');
    　　// 画面内に入ったらfadeInというクラス名を追記
    　　}
    　　});
    
    //関数でまとめることでこの後に違う動きを追加することが出来ます
    $('.fadeDownTrigger').each(function(){ //fadeInDownTriggerというクラス名が
    　　var elemPos = $(this).offset().top-50; //要素より、50px上の
    　　var scroll = $(window).scrollTop();
    　　var windowHeight = $(window).height();
    　　if (scroll >= elemPos - windowHeight){
    　　$(this).addClass('fadeDown');
    　　// 画面内に入ったらfadeDownというクラス名を追記
    　　}else{
    　　　$(this).removeClass('fadeDown');
    　　// 画面外に出たらfadeDownというクラス名を外す
    　　}
    　　});
    
    
    }//ここまでふわっと動くきっかけのクラス名と動きのクラス名の設定
    
    // 画面をスクロールをしたら動かしたい場合の記述
      $(window).scroll(function (){
        fadeAnime();/* アニメーション用の関数を呼ぶ*/
      });// ここまで画面をスクロールをしたら動かしたい場合の記述
    
    // 画面が読み込まれたらすぐに動かしたい場合の記述
      $(window).on('load', function(){
        fadeAnime();/* アニメーション用の関数を呼ぶ*/
      });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述

//ページ内リンク現在地ハイライトの動き
//基準点の準備
var elemTop = [];

//現在地を取得するための設定を関数でまとめる
function PositionCheck(){

//headerの高さを取得
var headerH = $("#header").outerHeight(true);

//.scroll-pointというクラス名がついたエリアの位置を取得する設定
$(".scroll-point").each(function(i) {//.scroll-pointクラスがついたエリアからトップまでの距離を計算して設定
elemTop[i] =Math.round(parseInt($(this).offset().top-headerH));//追従するheader分の高さ（70px）を引き小数点を四捨五入
});
}

//ナビゲーションに現在地のクラスをつけるための設定
function ScrollAnime() {//スクロールした際のナビゲーションの関数にまとめる
var scroll = Math.round($(window).scrollTop());
var NavElem = $("#navi li");//ナビゲーションのliの何番目かを定義するための準備
$("#navi li").removeClass('current');//全てのナビゲーションの現在地クラスを除去
if(scroll >= 0 && scroll < elemTop[1]) {//スクロール値が0以上 .scroll-point 1つめ（area-1）の高さ未満
$(NavElem[0]).addClass('current');//1つめのliに現在地クラスを付与
}
else if(scroll >= elemTop[1] && scroll < elemTop[2]) {//.scroll-point 1つめ（area-1）以上.scroll-point 2つめ（area-2）未満
$(NavElem[1]).addClass('current');//2つめのliに現在地クラスを付与
} 
else if(scroll >= elemTop[2] && scroll < elemTop[3]) {//.scroll-point 2つめ（area-2）以上.scroll-point 3つめ（area-3）未満
$(NavElem[2]).addClass('current');//3つめのliに現在地クラスを付与
} 
else if(scroll >= elemTop[3] && scroll < elemTop[4]) {//.scroll-point 3つめ（area-3）以上.scroll-point 4つめ（area-3）未満
$(NavElem[3]).addClass('current');//4つめのliに現在地クラスを付与
}
else if(scroll >= elemTop[4] && scroll < elemTop[5]) {//.scroll-point 4つめ（area-4）以上.scroll-point 5つめ（area-3）未満
$(NavElem[4]).addClass('current');//5つめのliに現在地クラスを付与
}
else if(scroll >= elemTop[5] && scroll < elemTop[6]) {//.scroll-point 5つめ（area-5）以上.scroll-point 6つめ（area-3）未満
$(NavElem[5]).addClass('current');//6つめのliに現在地クラスを付与
}
else if(scroll >= elemTop[6]) {// .scroll-point 6つめ（area-3）以上
$(NavElem[6]).addClass('current');//7つめのliに現在地クラスを付与
} 
}
//ナビゲーションをクリックした際のスムーススクロール
$('#navi a').click(function () {
var elmHash = $(this).attr('href'); //hrefの内容を取得
var headerH = $("#header").outerHeight(true);//追従するheader分の高さ（70px）を引く
var pos = Math.round($(elmHash).offset().top-headerH); //headerの高さを引き小数点を四捨五入
$('body,html').animate({scrollTop: pos}, 500);//取得した位置にスクロール※数値が大きいほどゆっくりスクロール
return false;//リンクの無効化
});

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
PositionCheck();/* 現在地を取得する関数を呼ぶ*/
ScrollAnime();/* ナビゲーションに現在地のクラスをつけるための関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
PositionCheck();/* 現在地を取得する関数を呼ぶ*/
ScrollAnime();/* ナビゲーションに現在地のクラスをつけるための関数を呼ぶ*/
});

$(window).resize(function() {
//リサイズされたときの処理
PositionCheck()
});
