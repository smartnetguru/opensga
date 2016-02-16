<section class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="blog-posts post-page">
                    <article>
                        <div class="post-image">
                            <?= $this->Html->image($artigo['Artigo']['imagem_destacada'],
                                    ['style' => 'max-width: 330px;max-height: 280;']) ?>
                        </div>
                        <div class="post-content">
                            <h2>
                                <?php echo $this->Html->link(h($artigo['Artigo']['titulo']), '#') ?>
                            </h2>
                            <div class="post-meta">
                                <span><i class="fa fa-calendar"></i><?php echo h($artigo['Artigo']['data_publicacao']); ?> </span>
											<span><i class="fa fa-user"></i> Por
                                                <?php echo $this->Html->link($artigo['Entidade']['name'],
                                                        [
                                                                'controller' => 'artigos',
                                                                'action'     => 'ver_autor',
                                                                $artigo['Entidade']['id'],
                                                        ]);
                                                ?> </span>
											<span><i class="fa fa-tag"></i>
												<!--<a href="#">
                                                    Bootstrap
                                                </a>,
												<a href="#">
                                                    Design
                                                </a>--> </span>
											<span><i class="fa fa-comments"></i>
												<a href="#">
                                                    0 Comentarios
                                                </a></span>
                            </div>
                            <?php echo $artigo['Artigo']['conteudo']; ?>
                            <div class="post-media post-author">
                                <h4><i class="fa fa-user"></i>Autor</h4>
                                <div class="img-thumbnail">
                                    <?php

                                            //$file = '/Fotos/Estudantes/' . $aluno['Aluno']['ano_ingresso'] . '/' . $aluno['Aluno']['codigo'] . '.jpg';
                                            $file = '/Fotos/profile2.png';
                                            if (!$signedUrl = $this->AmazonS3->getSignedUrl($file)) {

                                                $file = '/Fotos/profile2.png';
                                                $signedUrl = $this->AmazonS3->getSignedUrl($file);
                                            }
                                            ?>
                                            <?php echo $this->Html->image($signedUrl,
                                                ['style' => 'max-width:50px;max-height:50px']); ?>
                                </div>
                                <p>
                                    <strong class="name">
                                        <?php echo $this->Html->link($artigo['Entidade']['name'],
                                                [
                                                        'controller' => 'artigos',
                                                        'action'     => 'ver_autor',
                                                        $artigo['Entidade']['id'],
                                                ]);
                                        ?>
                                    </strong>
                                </p>
                               <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.
                                </p>-->
                            </div>
                            <!--<div class="post-media post-comments">
                                <h4><i class="fa fa-comments"></i>Comments (3)</h4>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" alt="" src="assets/images/avatar-2.jpg">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-heading">Media heading </h5>
                                        <span class="pull-right"> <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span> </span>
                                        <p>
                                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                                        </p>
                                        <span class="date pull-right">January 12, 2014 at 1:38 pm</span>
                                        <hr>
                                        <!-- Nested media object
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object" alt="" src="assets/images/avatar-1.jpg">
                                            </a>
                                            <div class="media-body">
                                                <h5 class="media-heading">Media heading </h5>
                                                <span class="pull-right"> <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span> </span>
                                                <p>
                                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                                                </p>
                                                <span class="date pull-right">January 12, 2014 at 1:38 pm</span>
                                            </div>
                                        </div>
                                        <!--end media-
                                        <hr>
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object" alt="" src="assets/images/avatar-3.jpg">
                                            </a>
                                            <div class="media-body">
                                                <h5 class="media-heading">Media heading </h5>
                                                <span class="pull-right"> <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span> </span>
                                                <p>
                                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                                                </p>
                                                <span class="date pull-right">January 12, 2014 at 1:38 pm</span>
                                            </div>
                                        </div>
                                        <!--end media
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" alt="" src="assets/images/avatar-4.jpg">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-heading">Media heading </h5>
                                        <span class="pull-right"> <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span> </span>
                                        <p>
                                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                                        </p>
                                        <span class="date pull-right">January 12, 2014 at 1:38 pm</span>
                                    </div>
                                </div>
                            </div> -->
                            <!--<div class="post-block post-leave-comment">
                                <h3>Leave a comment</h3>
                                <form type="post" action="">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>
                                                    Your name *
                                                </label>
                                                <input type="text" id="name" name="name" class="form-control" maxlength="100" value="">
                                            </div>
                                            <div class="col-md-6">
                                                <label>
                                                    Your email address *
                                                </label>
                                                <input type="email" id="email" name="email" class="form-control" maxlength="100" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>
                                                    Comment *
                                                </label>
                                                <textarea id="comment" name="comment" class="form-control" rows="10" maxlength="5000"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" data-loading-text="Loading..." class="btn btn-main-color" value="Post Comment">
                                        </div>
                                    </div>
                                </form>
                            </div>-->
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-md-3">
                <?= $this->element('sidebar')?>
            </div>
        </div>
    </div>
</section>

