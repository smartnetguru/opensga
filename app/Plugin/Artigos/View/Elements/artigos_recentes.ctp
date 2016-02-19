<div class="row">
    <h2>Artigos Recentes</h2>
    <div class="row recent-posts">
        <?php foreach ($artigos as $artigo): ?>
            <article>
                <h4>
                    <?php echo $this->Html->link(h($artigo['Artigo']['titulo']), [
                            'controller' => 'artigos',
                            'plugin'     => 'artigos',
                            'action'     => 'ver_artigo',
                            $artigo['Artigo']['id'],
                            $artigo['Artigo']['slug'],
                    ]) ?></h4>
                <p>
                    <?php echo $artigo['Artigo']['resumo']; ?>
                </p>
                <div class="post-meta">
                    <span><i class="fa fa-calendar"></i> <?php echo h($artigo['Artigo']['data_publicacao']); ?> </span>
                    <span>
                        <i class="fa fa-user"></i>
                        Por
                        <?php echo $this->Html->link($artigo['Entidade']['name'],
                                [
                                        'plugin'     => 'artigos',
                                        'controller' => 'artigos',
                                        'action'     => 'ver_autor',
                                        $artigo['Entidade']['id'],
                                ]);
                        ?>
                                                        </span>
														<span><i class="fa fa-tag"></i>
                                                            <!--<a href="#">
                                                                Design
                                                            </a>,
                                                            <a href="#">
                                                                Lifestyle
                                                            </a>
                                                             --></span>
														<span><i class="fa fa-comments"></i>
															<a href="#">
                                                                0 Comentarios
                                                            </a></span>
                    <?= $this->Html->link('Ler mais...', [
                            'controller' => 'artigos',
                            'plugin'     => 'artigos',
                            'action'     => 'ver_artigo',
                            $artigo['Artigo']['id'],
                            $artigo['Artigo']['slug'],
                    ],
                            ['class' => 'btn btn-xs btn-main-color pull-right']) ?>
                </div>

            </article>
        <?php endforeach; ?>

    </div>
</div>