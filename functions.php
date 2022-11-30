<?php
function hiromi_theme_setup()
{
    //head内にフィードリンクを出力
    add_theme_support('automatic-feed-links');
    //表示ページに合わせたタイトルタグを出力
    add_theme_support('title-tag');
    //ブロックエディタ用の標準スタイルを有効化
    add_theme_support('wp-block-styles');
    //埋め込みコンテンツをレスポンシブ対応に
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'hiromi_theme_setup');

function my_favicon()
{
    echo "\n" . '<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="' . get_bloginfo('template_url') . '/assets/img/favicon.ico" />' . "\n";
}
add_action('wp_head', 'my_favicon');

function hiromi_files()
{
    wp_enqueue_style(
        'hiromi-ress', //ハンドル名
        get_theme_file_uri('/assets/css/ress.min.css'), //ファイルのパスを取得
        array(), //依存関係
        NULL, //バージョンを指定しない
    );

    wp_enqueue_style(
        'hiromi-animate', //ハンドル名
        '//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', //ファイルのパスを取得
        array('hiromi-ress'), //依存関係
        NULL, //バージョンを指定しない
    );

    wp_enqueue_style(
        'hiromi-slick', //ハンドル名
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', //ファイルのパスを取得
        array('hiromi-ress', 'hiromi-animate'), //依存関係
        NULL, //バージョンを指定しない
    );

    wp_enqueue_style(
        'hiromi-modaal-css', //ハンドル名
        '//cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css', //ファイルのパスを取得
        array('hiromi-ress', 'hiromi-animate', 'hiromi-slick'), //依存関係
        NULL, //バージョンを指定しない
    );

    wp_enqueue_style(
        'hiromi-mobiriseicons', //ハンドル名
        get_theme_file_uri('/assets/css/mobiriseicons.css'), //ファイルのパスを取得
        array('hiromi-ress', 'hiromi-animate', 'hiromi-slick', 'hiromi-modaal-css'), //依存関係
        NULL, //バージョンを指定しない

    );

    wp_enqueue_style(
        'hiromi-style', //ハンドル名
        get_theme_file_uri('/assets/css/style.css'), //ファイルのパスを取得
        array('hiromi-ress', 'hiromi-animate', 'hiromi-slick', 'hiromi-modaal-css', 'hiromi-mobiriseicons'), //依存関係
        '1.0.0', //バージョン指定
    );


    //WordPress 本体の jQuery を登録解除
    wp_deregister_script('jquery');

    wp_enqueue_script(
        'hiromi-fontawesome',
        '//kit.fontawesome.com/4ca30fbc53.js',
        array(),
        NULL,
    );

    wp_enqueue_script(
        'hiromi-particles',
        '//cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js',
        array(),
        '2.0.0',
        true //</body>終了タグの前で読み込み
    );

    wp_enqueue_script(
        'hiromi-jquery214',
        get_theme_file_uri('/assets/js/jquery-2.1.4.min.js'),
        array('hiromi-particles'),
        '2.1.4',
        true //</body>終了タグの前で読み込み
    );

    wp_enqueue_script(
        'hiromi-skill-bars',
        get_theme_file_uri('/assets/js/skill.bars.jquery.js'),
        array('hiromi-particles', 'hiromi-jquery214'),
        NULL,
        true //</body>終了タグの前で読み込み
    );

    wp_enqueue_script(
        'hiromi-carousel',
        '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        array('hiromi-particles', 'hiromi-jquery214', 'hiromi-skill-bars'),
        NULL,
        true //</body>終了タグの前で読み込み
    );

    wp_enqueue_script(
        'hiromi-modaal-js',
        '//cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js',
        array('hiromi-particles', 'hiromi-jquery214', 'hiromi-skill-bars', 'hiromi-carousel'),
        NULL,
        true //</body>終了タグの前で読み込み
    );

    wp_enqueue_script(
        'hiromi-main',
        get_theme_file_uri('/assets/js/main.js'),
        array('hiromi-particles', 'hiromi-jquery214', 'hiromi-skill-bars', 'hiromi-carousel', 'hiromi-modaal-js'),
        '1.0.0',
        filemtime(get_theme_file_path('/assets/js/main.js')),  //更新時キャッシュクリア
        true //</body>終了タグの前で読み込み
    );
}
add_action('wp_enqueue_scripts', 'hiromi_files');

// 記事のアイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

//記事の投稿日、最終更新日を取得する。
function get_modifiedTime($format)
{
    $modifiedTime = get_the_modified_time('Ymd');
    $postedTime = get_the_time('Ymd');
    if ($postedTime > $modifiedTime) {
        return get_the_time($format);
    } elseif ($postedTime === $modifiedTime) {
        return null;
    } else {
        return get_the_modified_time($format);
    }
}
