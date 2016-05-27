<!-- <div class="breadcrumbs" id="breadcrumbs">
    <script type="text/javascript">
    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
    </script>
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="#">控制台</a>
        </li>
        <li class="active">最新工单</li>
    </ul>
    <div class="nav-search" id="nav-search">
        <form class="form-search">
            <span class="input-icon">
                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                <i class="icon-search nav-search-icon"></i>
            </span>
        </form>
    </div>
</div>
 --><div class="page-content">
    <div class="page-header">
        <h1>
        工单管理
        <small>
        <i class="icon-double-angle-right"></i>
        最新工单
        </small>
        </h1>
        </div><!-- /.page-header -->
        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="tabbable">
                            <ul id="inbox-tabs" class="inbox-tabs nav nav-tabs padding-16 tab-size-bigger tab-space-1">
                                <li class="li-new-mail pull-right">
                                    <a data-toggle="tab" href="#write" data-target="write" class="btn-new-mail">
                                        <span class="btn bt1n-small btn-purple no-border">
                                            <i class=" icon-edit bigger-130"></i>
                                            <span class="bigger-110">新建工单</span>
                                        </span>
                                    </a>
                                    </li><!-- ./li-new-mail -->
                                    <li class="active">
                                        <a data-toggle="tab" href="#inbox" data-target="inbox">
                                            <i class="blue icon-inbox bigger-130"></i>
                                            <span class="bigger-110">工单列表</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                            <i class="pink icon-tags bigger-130"></i>
                                            <span class="bigger-110">
                                                工单状态
                                                <i class="icon-caret-down"></i>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-light-blue dropdown-125">
                                            <li>
                                                <a data-toggle="tab" href="#tag-1" data-target="tag-1">
                                                    <span class="mail-tag badge badge-pink"></span>
                                                    <span class="pink">新建</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tag-family" data-target="tag-family">
                                                    <span class="mail-tag badge badge-success"></span>
                                                    <span class="green">测试中</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tag-friends" data-target="tag-friends">
                                                    <span class="mail-tag badge badge-info"></span>
                                                    <span class="blue">上线中</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tag-work" data-target="tag-work">
                                                    <span class="mail-tag badge badge-grey"></span>
                                                    <span class="grey">已关闭</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content no-border no-padding">
                                    <div class="tab-pane in active">
                                        <div class="message-container">
                                            <div id="id-message-list-navbar" class="message-navbar align-center clearfix">
                                                <div class="message-bar">
                                                    <!-- <div class="message-infobar" id="id-message-infobar">
                                                        <span class="blue bigger-150">最新工单</span>
                                                        <span class="grey bigger-110">(相关)</span>
                                                    </div>
                                                    -->
                                                    <div class="message-toolbar hide">
                                                        <div class="inline position-relative align-left">
                                                            <a href="#" class="btn-message btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                                                <span class="bigger-110">Action</span>
                                                                <i class="icon-caret-down icon-on-right"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-mail-reply blue"></i>
                                                                        &nbsp; Reply
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-mail-forward green"></i>
                                                                        &nbsp; Forward
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-folder-open orange"></i>
                                                                        &nbsp; Archive
                                                                    </a>
                                                                </li>
                                                                <li class="divider"></li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-eye-open blue"></i>
                                                                        &nbsp; Mark as read
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-eye-close green"></i>
                                                                        &nbsp; Mark unread
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-flag-alt red"></i>
                                                                        &nbsp; Flag
                                                                    </a>
                                                                </li>
                                                                <li class="divider"></li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-trash red bigger-110"></i>
                                                                        &nbsp; Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="inline position-relative align-left">
                                                            <a href="#" class="btn-message btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-folder-close-alt bigger-110"></i>
                                                                <span class="bigger-110">Move to</span>
                                                                <i class="icon-caret-down icon-on-right"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-stop pink2"></i>
                                                                        &nbsp; Tag#1
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-stop blue"></i>
                                                                        &nbsp; Family
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-stop green"></i>
                                                                        &nbsp; Friends
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-stop grey"></i>
                                                                        &nbsp; Work
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <a href="#" class="btn btn-xs btn-message">
                                                            <i class="icon-trash bigger-125"></i>
                                                            <span class="bigger-110">Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <!--       <div class="messagebar-item-left">
                                                        <label class="inline middle">
                                                            <input type="checkbox" id="id-toggle-all" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                        &nbsp;
                                                        <div class="inline position-relative">
                                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                                                <i class="icon-caret-down bigger-125 middle"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-lighter dropdown-100">
                                                                <li>
                                                                    <a id="id-select-message-all" href="#">All</a>
                                                                </li>
                                                                <li>
                                                                    <a id="id-select-message-none" href="#">None</a>
                                                                </li>
                                                                <li class="divider"></li>
                                                                <li>
                                                                    <a id="id-select-message-unread" href="#">Unread</a>
                                                                </li>
                                                                <li>
                                                                    <a id="id-select-message-read" href="#">Read</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    -->
                                                    <div class="messagebar-item-right">
                                                        <div class="inline position-relative">
                                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                                                <!-- Sort &nbsp; -->
                                                                <i class="icon-caret-down bigger-125"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-lighter pull-right dropdown-100">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-ok green"></i>
                                                                        Date
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-ok invisible"></i>
                                                                        From
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-ok invisible"></i>
                                                                        Subject
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--  <div class="nav-search minimized">
                                                        <form class="form-search">
                                                            <span class="input-icon">
                                                                <input type="text" autocomplete="off" class="input-small nav-search-input" placeholder="Search inbox ..." />
                                                                <i class="icon-search nav-search-icon"></i>
                                                            </span>
                                                        </form>
                                                    </div>
                                                -->                                                            </div>
                                            </div>
                                            <div id="id-message-item-navbar" class="hide message-navbar align-center clearfix">
                                                <div class="message-bar">
                                                    <div class="message-toolbar">
                                                        <div class="inline position-relative align-left">
                                                            <a href="#" class="btn-message btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                                                <span class="bigger-110">Action</span>
                                                                <i class="icon-caret-down icon-on-right"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-mail-reply blue"></i>
                                                                        &nbsp; Reply
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-mail-forward green"></i>
                                                                        &nbsp; Forward
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-folder-open orange"></i>
                                                                        &nbsp; Archive
                                                                    </a>
                                                                </li>
                                                                <li class="divider"></li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-eye-open blue"></i>
                                                                        &nbsp; Mark as read
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-eye-close green"></i>
                                                                        &nbsp; Mark unread
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-flag-alt red"></i>
                                                                        &nbsp; Flag
                                                                    </a>
                                                                </li>
                                                                <li class="divider"></li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-trash red bigger-110"></i>
                                                                        &nbsp; Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="inline position-relative align-left">
                                                            <a href="#" class="btn-message btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                                                <i class="icon-folder-close-alt bigger-110"></i>
                                                                <span class="bigger-110">Move to</span>
                                                                <i class="icon-caret-down icon-on-right"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-stop pink2"></i>
                                                                        &nbsp; Tag#1
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-stop blue"></i>
                                                                        &nbsp; Family
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-stop green"></i>
                                                                        &nbsp; Friends
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="icon-stop grey"></i>
                                                                        &nbsp; Work
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <a href="#" class="btn btn-xs btn-message">
                                                            <i class="icon-trash bigger-125"></i>
                                                            <span class="bigger-110">Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="messagebar-item-left">
                                                        <a href="#" class="btn-back-message-list">
                                                            <i class="icon-arrow-left blue bigger-110 middle"></i>
                                                            <b class="bigger-110 middle">Back</b>
                                                        </a>
                                                    </div>
                                                    <div class="messagebar-item-right">
                                                        <i class="icon-time bigger-110 orange middle"></i>
                                                        <span class="time grey">Today, 7:15 pm</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="id-message-new-navbar" class="hide message-navbar align-center clearfix">
                                                <div class="message-bar">
                                                    <div class="message-toolbar">
                                                        <a href="#" class="btn btn-xs btn-message">
                                                            <i class="icon-save bigger-125"></i>
                                                            <span class="bigger-110">Save Draft</span>
                                                        </a>
                                                        <a href="#" class="btn btn-xs btn-message">
                                                            <i class="icon-remove bigger-125"></i>
                                                            <span class="bigger-110">Discard</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="message-item-bar">
                                                    <div class="messagebar-item-left">
                                                        <a href="#" class="btn-back-message-list no-hover-underline">
                                                            <i class="icon-arrow-left blue bigger-110 middle"></i>
                                                            <b class="middle bigger-110">Back</b>
                                                        </a>
                                                    </div>
                                                    <div class="messagebar-item-right">
                                                        <span class="inline btn-send-message">
                                                            <button type="button" class="btn btn-sm btn-primary no-border">
                                                            <span class="bigger-110">Send</span>
                                                            <i class="icon-arrow-right icon-on-right"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-list-container">
                                                <div class="message-list" id="message-list">
                                                    <?php
                                                    // echo 11111;exit;
                                                    // var_dump($ticketInfo);exit;
                                                    foreach($ticketInfo as $item){
                                                    ?>
                                                    <div class="message-item message-unread">
                                                        <label class="inline">
                                                            <span class="label label-success arrowed-in-right arrowed">上线完成</span>
                                                        </label>
                                                        <span class="sender" title="Alex John Red Smith"><?php echo $item['owner_showname']; ?></span>
                                                        <span class="time">2016/01/02 16:18</span>
                                                        <span class="summary">
                                                            <span class="text">
                                                                <?php echo $item['subject']; ?>
                                                            </span>
                                                        </span>
                                                        
                                                    </div>
                                                    <?php
                                                    }
                                                    ?>
                                                    
                                                    
                                                </div>
                                                </div><!-- /.message-list-container -->
                                                <!--                                                  <div class="message-footer clearfix">
                                                    <div class="pull-left"> 151 total </div>
                                                    <div class="pull-right">
                                                        <div class="inline middle"> page 1 of 16 </div>
                                                        &nbsp; &nbsp;
                                                        <ul class="pagination middle">
                                                            <li class="disabled">
                                                                <span>
                                                                    <i class="icon-step-backward middle"></i>
                                                                </span>
                                                            </li>
                                                            <li class="disabled">
                                                                <span>
                                                                    <i class="icon-caret-left bigger-140 middle"></i>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <input value="1" maxlength="3" type="text" />
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="icon-caret-right bigger-140 middle"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="icon-step-forward middle"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div> -->
                                                <div class="hide message-footer message-footer-style2 clearfix">
                                                    <div class="pull-left"> simpler footer </div>
                                                    <div class="pull-right">
                                                        <div class="inline middle"> message 1 of 151 </div>
                                                        &nbsp; &nbsp;
                                                        <ul class="pagination middle">
                                                            <li class="disabled">
                                                                <span>
                                                                    <i class="icon-angle-left bigger-150"></i>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="icon-angle-right bigger-150"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                </div><!-- /.message-container -->
                                                </div><!-- /.tab-pane -->
                                                </div><!-- /.tab-content -->
                                                </div><!-- /.tabbable -->
                                                </div><!-- /.col -->
                                                </div><!-- /.row -->
                                                <form id="id-message-form" class="hide form-horizontal message-form  col-xs-12">
                                                    <div class="">
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">Recipient:</label>
                                                            <div class="col-sm-9">
                                                                <span class="input-icon">
                                                                    <input type="email" name="recipient" id="form-field-recipient" data-value="alex@doe.com" value="alex@doe.com" placeholder="Recipient(s)" />
                                                                    <i class="icon-user"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="hr hr-18 dotted"></div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-subject">Subject:</label>
                                                            <div class="col-sm-6 col-xs-12">
                                                                <div class="input-icon block col-xs-12 no-padding">
                                                                    <input maxlength="100" type="text" class="col-xs-12" name="subject" id="form-field-subject" placeholder="Subject" />
                                                                    <i class="icon-comment-alt"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="hr hr-18 dotted"></div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label no-padding-right">
                                                                <span class="inline space-24 hidden-480"></span>
                                                                Message:
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <div class="wysiwyg-editor"></div>
                                                            </div>
                                                        </div>
                                                        <div class="hr hr-18 dotted"></div>
                                                        <div class="form-group no-margin-bottom">
                                                            <label class="col-sm-3 control-label no-padding-right">Attachments:</label>
                                                            <div class="col-sm-9">
                                                                <div id="form-attachments">
                                                                    <input type="file" name="attachment[]" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="align-right">
                                                            <button id="id-add-attachment" type="button" class="btn btn-sm btn-danger">
                                                            <i class="icon-paper-clip bigger-140"></i>
                                                            Add Attachment
                                                            </button>
                                                        </div>
                                                        <div class="space"></div>
                                                    </div>
                                                </form>
                                                <div class="hide message-content" id="id-message-content">
                                                    <div class="message-header clearfix">
                                                        <div class="pull-left">
                                                            <span class="blue bigger-125"> Clik to open this message </span>
                                                            <div class="space-4"></div>
                                                            <i class="icon-star orange2 mark-star"></i>
                                                            &nbsp;
                                                            <img class="middle" alt="John's Avatar" src="/ace/assets/avatars/avatar.png" width="32" />
                                                            &nbsp;
                                                            <a href="#" class="sender">John Doe</a>
                                                            &nbsp;
                                                            <i class="icon-time bigger-110 orange middle"></i>
                                                            <span class="time">Today, 7:15 pm</span>
                                                        </div>
                                                        <div class="action-buttons pull-right">
                                                            <a href="#">
                                                                <i class="icon-reply green icon-only bigger-130"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="icon-mail-forward blue icon-only bigger-130"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="icon-trash red icon-only bigger-130"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="hr hr-double"></div>
                                                    <div class="message-body">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </p>
                                                        <p>
                                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                        </p>
                                                        <p>
                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                        </p>
                                                        <p>
                                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                        </p>
                                                        <p>
                                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                        </p>
                                                        <p>
                                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                        </p>
                                                    </div>
                                                    <div class="hr hr-double"></div>
                                                    <div class="message-attachment clearfix">
                                                        <div class="attachment-title">
                                                            <span class="blue bolder bigger-110">Attachments</span>
                                                            &nbsp;
                                                            <span class="grey">(2 files, 4.5 MB)</span>
                                                            <div class="inline position-relative">
                                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                                                    &nbsp;
                                                                    <i class="icon-caret-down bigger-125 middle"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-lighter">
                                                                    <li>
                                                                        <a href="#">Download all as zip</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Display in slideshow</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        &nbsp;
                                                        <ul class="attachment-list pull-left list-unstyled">
                                                            <li>
                                                                <a href="#" class="attached-file inline">
                                                                    <i class="icon-file-alt bigger-110 middle"></i>
                                                                    <span class="attached-name middle">Document1.pdf</span>
                                                                </a>
                                                                <div class="action-buttons inline">
                                                                    <a href="#">
                                                                        <i class="icon-download-alt bigger-125 blue"></i>
                                                                    </a>
                                                                    <a href="#">
                                                                        <i class="icon-trash bigger-125 red"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="attached-file inline">
                                                                    <i class="icon-film bigger-110 middle"></i>
                                                                    <span class="attached-name middle">Sample.mp4</span>
                                                                </a>
                                                                <div class="action-buttons inline">
                                                                    <a href="#">
                                                                        <i class="icon-download-alt bigger-125 blue"></i>
                                                                    </a>
                                                                    <a href="#">
                                                                        <i class="icon-trash bigger-125 red"></i>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="attachment-images pull-right">
                                                            <div class="vspace-sm-4"></div>
                                                            <div>
                                                                <img width="36" alt="image 4" src="/ace/assets/images/gallery/thumb-4.jpg" />
                                                                <img width="36" alt="image 3" src="/ace/assets/images/gallery/thumb-3.jpg" />
                                                                <img width="36" alt="image 2" src="/ace/assets/images/gallery/thumb-2.jpg" />
                                                                <img width="36" alt="image 1" src="/ace/assets/images/gallery/thumb-1.jpg" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div><!-- /.message-content -->
                                                    <!-- PAGE CONTENT ENDS -->
                                                    </div><!-- /.col -->
                                                    </div><!-- /.row -->
                                                    </div><!-- /.page-content -->
                                                    <!--
                                                    <div class="page-header">
                                                        <h1>最新工单</h1>
                                                    </div>
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h3 class="panel-title">
                                                            <?php
                                                            foreach ($ticketInfo as $key => $value) {
                                                            // var_dump($value);
                                                            ?>
                                                            <div class="row">
                                                                <div class="col-xs-2">
                                                                    上线单:<a><?php  echo $value['id'];?></a>
                                                                </div>
                                                                <div class="col-xs-3">
                                                                    主题:<a><?php
                                                                        $subject = $value['subject'];
                                                                        $strSubject = mb_substr($subject,0,15,"utf-8");
                                                                        echo $strSubject;
                                                                    ?></a>
                                                                </div>
                                                                <div class="col-xs-1">
                                                                    类型:<?php echo $value['type'];?>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    创建者:<?php echo $value['owner_showname'];?>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    创建时间:<?php echo "2015-01-13 12:00:00";?>
                                                                </div>
                                                            </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            </h3>
                                                        </div>
                                                        <nav>
                                                            <ul class="pagination">
                                                                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                                                ...
                                                            </ul>
                                                        </nav>
                                                        
                                                        
                                                    </div>
                                                </div> -->