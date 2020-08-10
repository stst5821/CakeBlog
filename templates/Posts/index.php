<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[] $posts
 */
?>

<div class="content">
    <?php foreach($posts as $post): ?>
    <h3><?= h($post->title) ?></h3>
    <?= $post->created->i18nFormat('YYYY年MM月dd日 HH:mm') ?>
    <?= $this->Text->autoParagraph(h($post->description)) ?>
    <?= $this->Html->link('記事を読む', 
        [
            'action' => 'view',
            $post->id
        ],['class' => 'button']) ?>
    <hr>
    <?php endforeach; ?>

    <!-- total()が1より大きければページネーションを表示する。 -->
    <?php if($this->Paginator->total() > 1): ?>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< 最初') ?>
            <?= $this->Paginator->prev('<前へ') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('次へ') ?>
            <?= $this->Paginator->last('最後 >>') ?>
        </ul>
    </div>

    <?php endif ?>

</div>