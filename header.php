<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <!-- adobeフォント -->
  <script>
    (function(d) {
      var config = {
          kitId: 'rvk2afu',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>

  <!-- ここまで追加 -->
  <?php wp_head(); ?>
</head>

<!-- ヘッダー ここから -->

<body <?php body_class(); ?>>
  <header id="header" class="scroll-nav scroll-navi-sp scroll-point">
    <div id="header-inner">
      <h1 id="logo">HIROMI</h1>
      <h4>
        <span class="header-tagline"><?php bloginfo('description') ?></span>
      </h4>
      <!-- PC ナビゲーション -->
      <nav id="navi">
        <ul id="navi-menu">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#garally">Garally</a></li>
          <li><a href="#works">Works</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
    <!-- SP ナビゲーション -->
    <div class="openbtn"><span></span><span></span><span></span></div>
    <nav id="g-nav">
      <ul id="g-nav-menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#garally">Garally</a></li>
        <li><a href="#works">Works</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
    <div class="circle-bg"></div>
  </header>
  <!-- ヘッダー ここまで -->