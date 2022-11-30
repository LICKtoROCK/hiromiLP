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

<body <?php body_class(); ?>>
    <main>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : //投稿がある限り繰り返す 
            ?>
                <?php the_post(); //次の投稿に進める 
                ?>
                <div class="blog-post">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                    <?php else : ?>
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/noimage.png" alt=""></a>
                    <?php endif; ?>
                    <div class="blog-time"><?php the_time('Y.m.d'); ?></div>
                    <h2 class="blog-title"><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                <?php the_post_navigation(); ?>
            <?php endif; ?>
            <a href="<?php echo esc_url(home_url('/')); ?>">トップページに戻る</a>
    </main>
    <?php get_footer(); ?>