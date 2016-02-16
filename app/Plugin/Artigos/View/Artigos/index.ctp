<section class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="blog-posts">
                    <?php foreach ($artigos as $artigo): ?>
                        <article>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="post-image">
                                        <?= $this->Html->image($artigo['Artigo']['imagem_destacada'],
                                                ['style' => 'max-width: 330px;max-height: 280;']) ?>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h2>
                                            <?php echo $this->Html->link(h($artigo['Artigo']['titulo']), [
                                                    'controller' => 'artigos',
                                                    'plugin'     => 'artigos',
                                                    'action'     => 'ver_artigo',
                                                    $artigo['Artigo']['id'],
                                                    $artigo['Artigo']['slug'],
                                            ]) ?>
                                        </h2>
                                        <p>
                                            <?php echo $artigo['Artigo']['resumo']; ?> [...]
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <span>
                                            <i class="fa fa-calendar"></i>
                                            <?php echo h($artigo['Artigo']['data_publicacao']); ?>
                                        </span>
												<span><i class="fa fa-user"></i> Por
                                                    <?php echo $this->Html->link($artigo['Entidade']['name'],
                                                            [
                                                                    'controller' => 'artigos',
                                                                    'action'     => 'ver_autor',
                                                                    $artigo['Entidade']['id'],
                                                            ]);
                                                    ?>
													 </span>
												<span><i class="fa fa-tag"></i>
                                                    <!--<a href="#">
                                                        Bootstrap
                                                    </a>,
                                                    <a href="#">
                                                        Design
                                                    </a>--> </span>
												<span><i class="fa fa-comments"></i>
													<a href="#">
                                                        0 comentários
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
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                    <?php echo $this->Paginator->pagination([
                            'ul' => 'pagination',
                    ]); ?>

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
                                Outros Artigos
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
                                                    <img alt="" src="/assets/images/image03_thumb.jpg">
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
                                                    <img alt="" src="/assets/images/image04_thumb.jpg">
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
                                                    <img alt="" src="/assets/images/image05_thumb.jpg">
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
                                                    <img class="img-responsive" alt=""
                                                         src="/assets/images/image06_thumb.jpg">
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
                                                    <img alt="" src="/assets/images/image07_thumb.jpg">
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
                                                    <img alt="" src="/assets/images/image08_thumb.jpg">
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
<!-- start: FOOTER
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="newsletter">
                    <h4>Newsletter</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in
                        consequat.
                    </p>
                    <form method="POST" action="#" id="newsletterForm">
                        <div class="input-group">
                            <input type="text" id="email" name="email" placeholder="Email Address" class="form-control">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-default">
                                            Go!
                                        </button> </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <h4>Latest Tweet</h4>
                <div class="twitter" id="tweet">
                    <i class="fa fa-twitter"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                    hendrerit vehicula est, in consequat.
                    <a href="#" class="time">
                        12 Dec
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-details">
                    <h4>Contact Us</h4>
                    <ul class="contact">
                        <li>
                            <p>
                                <i class="fa fa-map-marker"></i><strong>Address:</strong> 1234 Street Name, City Name,
                                United States
                            </p>
                        </li>
                        <li>
                            <p>
                                <i class="fa fa-phone"></i><strong>Phone:</strong> (123) 456-7890
                            </p>
                        </li>
                        <li>
                            <p>
                                <i class="fa fa-envelope"></i><strong>Email:</strong>
                                <a href="mailto:mail@example.com">
                                    mail@example.com
                                </a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <ul>
                        <li class="social-twitter tooltips" data-original-title="Twitter" data-placement="bottom">
                            <a target="_blank" href="http://www.twitter.com">
                                Twitter
                            </a>
                        </li>
                        <li class="social-facebook tooltips" data-original-title="Facebook" data-placement="bottom">
                            <a target="_blank" href="http://facebook.com" data-original-title="Facebook">
                                Facebook
                            </a>
                        </li>
                        <li class="social-linkedin tooltips" data-original-title="LinkedIn" data-placement="bottom">
                            <a target="_blank" href="http://linkedin.com" data-original-title="LinkedIn">
                                LinkedIn
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <a class="logo" href="index.html">
                        CLIP<i class="clip-clip"></i>ONE
                    </a>
                </div>
                <div class="col-md-7">
                    <p>
                        &copy; Copyright 2014 by Clip-One. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-4">
                    <nav id="sub-menu">
                        <ul>
                            <li>
                                <a href="#">
                                    FAQ's
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Sitemap
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<a id="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
<!-- end: FOOTER -->

