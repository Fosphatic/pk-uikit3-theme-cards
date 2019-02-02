<?php $view->script('post', 'blog:app/bundle/post.js', 'vue') ?>

<div class="<?= $params['container_width'] ?> uk-light">

    <article class="uk-article uk-background-primary">

        <?php if ($image = $post->get('image.src')): ?>
        <div class="tm-article-teaser uk-display-block"><img src="<?= $image ?>" alt="<?= $post->get('image.alt') ?>"></div>
        <?php endif ?>

        <h1 class="uk-article-title"><?= $post->title ?></h1>

        <p class="uk-article-meta">
            <?= __('Written on %date%', ['%name%' => $post->user->name, '%date%' => '<time datetime="'.$post->date->format(\DateTime::W3C).'" v-cloak>{{ "'.$post->date->format(\DateTime::W3C).'" | date "longDate" }}</time>' ]) ?>
        </p>

        <div class="uk-margin"><?= $post->content ?></div>

        <?= $view->render('blog/comments.php') ?>

    </article>

</div>
