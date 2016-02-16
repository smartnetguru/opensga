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
                <aside class="sidebar">
                    <form>
                        <div class="input-group">
                            <input type="text" id="s" name="s" placeholder="Pesquisar..." class="form-control">
										<span class="input-group-btn">
											<button class="btn btn-main-color" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button> </span>
                        </div>
                    </form>
                    <hr>
                    <h4>Categorias</h4>
                    <ul class="nav nav-list blog-categories">
                        <li>
                            <a href="#">
                                Manual SIGA
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Notícias
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Outros
                            </a>
                        </li>
                    </ul>
                    <div class="tabs">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#popularPosts"><i class="fa fa-star"></i> Populares</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#recentPosts">
                                    Recentes
                                </a>
                            </li>
                        </ul>
                        <!--<div class="tab-content">
                            <div id="popularPosts" class="tab-pane active">
                                <ul class="post-list">
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="#">
                                                    <img alt="" src="assets/images/image03_thumb.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="#">
                                                Nullam Vitae Nibh Un Odiosters
                                            </a>
                                            <div class="post-meta">
                                                Jan 10, 2014
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="#">
                                                    <img alt="" src="assets/images/image04_thumb.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="#">
                                                Vitae Nibh Un Odiosters
                                            </a>
                                            <div class="post-meta">
                                                Jan 10, 2014
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="#">
                                                    <img alt="" src="assets/images/image05_thumb.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="#">
                                                Odiosters Nullam Vitae
                                            </a>
                                            <div class="post-meta">
                                                Jan 10, 2014
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="recentPosts" class="tab-pane">
                                <ul class="post-list">
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="#">
                                                    <img class="img-responsive" alt="" src="assets/images/image06_thumb.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="#">
                                                Vitae Nibh Un Odiosters
                                            </a>
                                            <div class="post-meta">
                                                Jan 10, 2014
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="#">
                                                    <img alt="" src="assets/images/image07_thumb.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="#">
                                                Odiosters Nullam Vitae
                                            </a>
                                            <div class="post-meta">
                                                Jan 10, 2014
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="#">
                                                    <img alt="" src="assets/images/image08_thumb.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="#">
                                                Nullam Vitae Nibh Un Odiosters
                                            </a>
                                            <div class="post-meta">
                                                Jan 10, 2014
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>-->
                    </div>
                    <hr>
                    <h4>Sobre esta Página</h4>
                    <p>
                        Esta é uma seccão experimental do SIGA, que pretende fornecer um espaco para que a comunidade
                        academica da Universidade possa partilhar conhecimentos academicos em varias areas de interesse.
                        Brevemente teremos mais actualizacoes a respeito.

                    </p>
                </aside>
            </div>
        </div>
    </div>
</section>

