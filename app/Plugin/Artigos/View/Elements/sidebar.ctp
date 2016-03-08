<aside class="sidebar">
    <?= $this->Form->create('Pesquisa',['url'=>['plugin'=>'artigos','controller'=>'artigos','action'=>'pesquisa'],'type'=>'get'])?>
    <div class="input-group">
        <input type="text" id="s" name="q" placeholder="Pesquisar..." class="form-control">
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