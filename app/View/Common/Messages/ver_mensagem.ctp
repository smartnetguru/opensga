<!-- start: PAGE CONTENT -->
<div class="row">
    <div class="col-md-12">
        <!-- start: INBOX PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-envelope-o"></i>
                Inbox
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                    </a>
                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <a class="btn btn-xs btn-link panel-refresh" href="#">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a class="btn btn-xs btn-link panel-expand" href="#">
                        <i class="fa fa-resize-full"></i>
                    </a>
                    <a class="btn btn-xs btn-link panel-close" href="#">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body messages">
                <ul class="messages-list">
                    <li class="messages-search">
                        <form action="#" class="form-inline">
                            <div class="input-group">
                                <!--<input type="text" class="form-control" placeholder="Pesquisar Mensagens...">-->

                                <div class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </li>
                    <?php foreach ($messages as $message): ?>
                        <?php
                        $active= '';
                        $starred = '';
                            if($message['Message']['id']==$messageId){
                                $active = 'active';
                            }

                        ?>
                        <li class="messages-item <?= $active?>">
                            <span title="Mark as starred" class="messages-item-star"><i class="fa fa-star"></i></span>
                            <img alt="" src="assets/images/avatar-1.jpg" class="messages-item-avatar">
                            <span class="messages-item-from"><?= substr($message['Message']['User']['Entidade']['name'],0,15)?></span>

                            <div class="messages-item-time">
                                <span class="text"><?= $message['Message']['data_envio']?></span>

                                <div class="messages-item-actions">
                                    <a data-toggle="dropdown" title="Reply" href="#"><i
                                            class="fa fa-mail-reply"></i></a>

                                    <div class="dropdown">
                                        <a data-toggle="dropdown" title="Move to folder" href="#"><i
                                                class="fa fa-folder-open"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-pencil"></i>
                                                    Marcar como Lida
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-ban"></i>
                                                    Lixeira
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-trash-o"></i>
                                                    Apagar
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <a data-toggle="dropdown" title="Attach to tag" href="#"><i
                                                class="fa fa-tag"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="#"><i class="tag-icon red"></i>Important</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="tag-icon teal"></i>Work</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="tag-icon green"></i>Home</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <span class="messages-item-subject"><?= substr($message['Message']['assunto'],0,40)?></span>
                            <!--<span class="messages-item-preview">Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do antera ...</span>-->
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="messages-content">
                    <div class="message-header">
                        <div class="message-time">
                            <?= $message0['Message']['data_envio']?>
                        </div>
                        <div class="message-from">
                            <?= $message0['User']['Entidade']['name']?>
                            (<?= $message0['User']['username']?>)
                        </div>
                        <div class="message-to">
                            Para: <?= $message0['MessageUser'][0]['User']['Entidade']['name']?>
                            (<?= $message0['MessageUser'][0]['User']['username']?>)
                        </div>
                        <div class="message-subject">
                            <?= $message0['Message']['assunto']?>
                        </div>
                        <div class="message-actions">
                            <a title="Move to trash" href="#"><i class="fa fa-trash-o"></i></a>
                            <a title="Reply" href="#"><i class="fa fa-reply"></i></a>
                            <a title="Reply to all" href="#"><i class="fa fa-reply-all"></i></a>
                            <a title="Forward" href="#"><i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="message-content">
                        <?= $message0['MessageText']['texto']?>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: INBOX PANEL -->
    </div>
</div>
<!-- end: PAGE CONTENT-->
