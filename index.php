<?php get_header(); ?>
<!-- ビジュアル ここから -->
<main>
  <div id="home"></div>
  <div id="particles-js" class="base-color"></div>
  <div id="wrapper main_visual">
    <div class="catch"><span class="welcom_catch">Welcome</span></div>
    <div class="subcatch">
      <h2>I'M&nbsp;<span class="TextTyping">HIROMI KITAGAWA</span></h2>
    </div>
  </div>
  <!-- ビジュアル ここまで -->
  <!-- aboutここから -->
  <div id="about"></div>
  <section class="container scroll-point">
    <div class="about">
      <div class="about_img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/about.png" class="about_coding" alt="北川弘美について"></div>
      <div class="about_text">
        <h2>About Me</h2>
        <h3>Hello! <span>I'M Hiromi Kitagawa</span></h3>
        <p>
          愛知県在中の北川弘美です。病院勤務を経て、システム会社等で営業、経理、ディレクション、Webデザイン制作等様々な業務を行ってまいりました。<br>WordPressについては現在継続して勉強中です。これから一層、Web制作の技術や知識に磨きをかけ、問題点の解決やWeb運用などトータル的にサポートできるディレクターになりたいと思っています。
        </p>
      </div>
    </div>
  </section>
  <!-- aboutここまで -->
  <!-- skillsここから -->
  <div id="skills"></div>
  <section class="container gray-back scroll-point">
    <h2 class="container-title">Skills</h2>
    <div class="skills">
      <div class="skillbar skillbar-pink" data-percent="80">
        <div class="skillbar-title">Photoshop/illustrator</div>
        <div class="skillbar-bar"></div>
        <div class="skill-bar-percent"></div>
      </div>
      <div class="skillbar skillbar-yellow" data-percent="55">
        <div class="skillbar-title">HTML5/CSS</div>
        <div class="skillbar-bar"></div>
        <div class="skill-bar-percent"></div>
      </div>
      <div class="skillbar skillbar-green" data-percent="50">
        <div class="skillbar-title">Adobe XD/Figma</div>
        <div class="skillbar-bar"></div>
        <div class="skill-bar-percent"></div>
      </div>
      <div class="skillbar skillbar-blue" data-percent="30">
        <div class="skillbar-title">WordPress</div>
        <div class="skillbar-bar"></div>
        <div class="skill-bar-percent"></div>
      </div>
      <div class="skillbar skillbar-purple" data-percent="40">
        <div class="skillbar-title">jQuery/JavaScript</div>
        <div class="skillbar-bar"></div>
        <div class="skill-bar-percent"></div>
      </div>
      <div class="skillbar skillbar-black" data-percent="30">
        <div class="skillbar-title">Git/Github</div>
        <div class="skillbar-bar"></div>
        <div class="skill-bar-percent"></div>
      </div>
    </div>
  </section>
  <!-- skillsここまで -->
  <!-- garallyここから -->
  <div id="garally"></div>
  <section class="container scroll-point">
    <h2 class="container-title">Garally</h2>
    <ul class="slider">
      <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slide1.png" class="gallery" data-group="gallery" alt=""></li>
      <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slide2.png" class="gallery" data-group="gallery" alt=""></li>
      <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slide3.png" class="gallery" data-group="gallery" alt=""></li>
      <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slide4.png" class="gallery" data-group="gallery" alt=""></li>
      <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slide5.png" class="gallery" data-group="gallery" alt=""></li>
      <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slide6.png" class="gallery" data-group="gallery" alt=""></li>
    </ul>
  </section>
  <!-- garallyここまで -->
  <!-- worksここから -->
  <div id="works"></div>
  <section class="container gray-back scroll-point">
    <h2 class="container-title">Works</h2>
    <div class="works box fadeUpTrigger">
      <div class="works_contents">
        <div class="works_icon">
          <span class="mbri-shopping-cart icon_custom"></span>
        </div>
        <div class="works_text">
          <h3>ショッピングサイト</h3>
          <span></span>
          <p>某上場企業のショッピングサイトのワイヤーフレーム制作とシステム画面設計書作成を担当。フロントページはCMSを導入し既存カートシステムのリプレイスを行った。</p>
        </div>
      </div>
      <div class="works_contents">
        <div class="works_icon">
          <span class="mbri-new-file icon_custom"></span>
        </div>
        <div class="works_text">
          <h3>LPサイト</h3>
          <span></span>
          <p>青汁の商品とホームページ制作のワイヤーフレーム制作とデザインを担当。特性にあわせてお得感など全面に押し出したデザインとコンバーションに辿りつきやすい設計を行った。</p>
        </div>
      </div>
      <div class="works_contents">
        <div class="works_icon">
          <span class="mbri-mobile2 icon_custom"></span>
        </div>
        <div class="works_text">
          <h3>スマートフォンサイト</h3>
          <span></span>
          <p>ラジオ局のスマホサイトのワイヤーフレームとデザインを担当。既にあるシステムとの連携を考えた設計とPCデザインに合わせたデザイン制作を行った。</p>
        </div>
      </div>
      <div class="works_contents">
        <div class="works_icon">
          <span class="mbri-users icon_custom"></span>
        </div>
        <div class="works_text">
          <h3>マッチングサイト</h3>
          <span></span>
          <p>マッチングシステムのワイヤーフレームとデザイン制作を担当。他社のマッチングアプリなどの使いやすさ等調査し設計を行った。デザインではジェンダーニュートラルなデザインを心がけ制作した。</p>
        </div>
      </div>
      <div class="works_contents">
        <div class="works_icon">
          <span class="mbri-responsive icon_custom"></span>
        </div>
        <div class="works_text">
          <h3>レスポンシブサイト</h3>
          <span></span>
          <p>ヨガスタジオ、土木会社、飲食店等様々なサイトのワイヤーフレームとデザイン制作を担当。スマートフォン表示した際、最適に表示できるように設計を心かけた。</p>
        </div>
      </div>
      <div class="works_contents">
        <div class="works_icon">
          <span class="mbri-setting icon_custom"></span>
        </div>
        <div class="works_text">
          <h3>管理画面</h3>
          <span></span>
          <p>ショッピングシステムの管理画面のワイヤーフレームを担当。業務で支障がでないように最適にボタンを配置する等工夫をして制作を行った。</p>
        </div>
      </div>
    </div>
  </section>
  <!-- worksここまで -->
  <!-- blogここから -->
  <div id="blog"></div>
  <section class="container scroll-point">
    <h2 class="container-title">Blog</h2>
    <div class="hiromiBlog">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : //投稿がある限り繰り返す 
        ?>
          <?php the_post(); //次の投稿に進める 
          ?>
          <div class="blog_list">
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
            <?php else : ?>
            <?php endif; ?>
            <h3><?php the_title(); ?></h3>
            <?php if (get_modifiedTime('c') == null) : ?>
              <time datetime="<?php the_time('c'); ?>">投稿日 : <?php the_time('Y.m.d'); ?></time>
            <?php endif; ?>
            <?php if (get_modifiedTime('c') != null) : ?>
              <time>投稿日 : <?php the_time('Y.m.d'); ?></time>
              <time datetime="<?php if ($mtime = get_modifiedTime('c')) echo $mtime; ?>"><?php if ($mtime = get_modifiedTime('Y.m.d')) echo '最終更新日 : ', $mtime; ?></time>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
  <!-- contactここから -->
  <div id="contact"></div>
  <section class="container scroll-point container_contact">
    <form method="POST" action="#">
      <div class="contact_form_area">
        <h2 class="container-title container-title-contact">Contact</h2>
        <div class="form_column">
          <div class="form_label">お名前</div><span class="required">必須</span>
          <div class="form_input">
            <input type="text" name="username" id="username" class="form_parts" placeholder="山田花子">
          </div>
        </div>
        <div class="form_column">
          <div class="form_label">メールアドレス</div><span class="required">必須</span>
          <div class="form_input">
            <input type="text" name="mail" id="mail" class="form_parts" placeholder="hana8787@example.com">
          </div>
        </div>
        <div class="form_column form_column_textarea">
          <div class="form_label">お問い合せ内容</div><span class="required">必須</span>
          <div class="form_input">
            <textarea class="form_textarea" id="inquiry" placeholder="お問い合せ内容を入力してください"></textarea>
          </div>
        </div>
        <div id="form_submit">
          <button type="submit" name="submit_button" id="submit_button">送信する</button>
        </div>
      </div>
    </form>
  </section>
</main>
<?php get_footer(); ?>