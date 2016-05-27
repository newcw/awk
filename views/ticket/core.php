<div class="col-md-8">
  <div class="message-list-container">
  <div class="message-list" id="message-list">
  <div class="jumbotron" style="text-align:left;padding:10px;">
  xxxxxxxxxxxxx
  </div>
  <div >
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@add">添加</button>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@del">删除</button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">添加</h4>
      </div>
      <!--选择文件-->
        <div class="fileMain">
                <form id="select-file" method="post" action="index.php?mod=web.ticket&act=browser&id={$smarty.const.TICKET_ID}">
                <div class="projecName">
                        <em>项目组名字：</em>
                        <span>
                                <select name="" class="projec" action-type="act-pro-select" tabindex="1">
                                <option value="0">请选择</option>
                                </select>

        <!--项目下拉菜单放到这里-->
                        </span>
                </div>
                <div class="version">
                        <em>svn版本：</em>
                        <input type="text" name="version" value="1" title="10以内为查看最新N次的修改" style="width:100px" tabindex="1">
                        <a href="##" class="btn browse" action-type="act-browse-file" tabindex="1">浏览</a>
                        <em>(10以内为查看最新N次的修改)</em>
                        <!--<input type="checkbox" name="sort" value="1" tabindex="1" style="margin:5px 4px 0 4px;"/><em>是否按版本排序</em>-->
                </div>
                </form>
        </div>
        <div class="ajax-callback-list">
        </div>
        <!--文件列表需要放到这里-->

    </div>
  </div>
</div>
  </div>
  </div>

</div>