
<div class="page-header">
  <h1>创建工单</h1>
</div>


<form id="defaultForm" class="form-horizontal"  method="POST" action='/ticket/save'>
  <div class="form-group">
    <label for="exampleInputEmail1" class="col-sm-1 control-label" >标题</label>
    <div class="col-sm-11">
        <input type="text" class="form-control" name="subject"  id="subject" placeholder="请输入上线单标题" required data-bv-notempty-message="请输入上线单标题" />
    </div>
    
    </div>

    
  <div class="form-group">
  <label for="exampleInputPassword1" class="col-sm-1 control-label">类型</label>
  <div class="col-sm-3">

    <select class="form-control" id="type" name="type" data-bv-notempty data-bv-notempty-message="请选择类型">
                <option value="">请选择</option>
                <option value="1">功能上线</option>
                <option value="2">BUG修复</option>
            </select>
      </div>

    <label for="exampleInputFile" class="col-sm-1 control-label" >项目</label>
    <div class="col-sm-3" >
        <select class="form-control" id="project"  name="project" data-bv-notempty  data-bv-notempty-message="请选择项目">
                <option value="">请选择</option>
                <option value="1">PHP上线</option>
                <option value="2">SQL操作</option>
            </select>
    </div>
    

    <label for="exampleInputFile" class="col-sm-1 control-label">免测</label>
    <div class="col-sm-3">
    <select class="form-control" id="mc" name="mc" data-bv-notempty data-bv-notempty-message="请选择是否免测">
                <option value="">请选择</option>
                <option value="1">是</option>
                <option value="2">否</option>
            </select>
    </div>
  </div>

  <div class="form-group">
      <label for="exampleInputFile" class="col-sm-1 control-label">抄送</label>
    <div class="col-sm-11">
    <input type="text" class="form-control" id="toPM" placeholder="请输入邮件抄送人" >
    </div>
  </div>


  <div class="form-group">
    <label for="exampleInputFile" class="col-sm-1 control-label">详情</label>
    <div id="test-editormd"><textarea  style="display:none;" id="step" name="step" data-bv-notempty data-bv-notempty-message="请输入上线步骤"></textarea></div>

    <!-- <div id="test-editormd" class="col-sm-11">
                <textarea  style="display:none;"></textarea>
     </div> -->
  </div>
  <div class="form-group">
    <label for="exampleInputFile" class="col-sm-1 control-label"></label>
    <div class="col-sm-11">
  <button type="submit" class="btn btn-primary" name="commit" id="commit">提交</button>
</div>
  </div>
</form>


  <script type="text/javascript">

      var testEditor;

            $(function() {
                testEditor = editormd("test-editormd", {
                    width   : "90%",
                    height  : 240,
                    syncScrolling : "single",
                    path    : "/bootstrap/editor.md-master/lib/",
                    toolbarIcons : function() {
                        // return editormd.toolbarModes["mini"];
                        // Or return editormd.toolbarModes[name]; // full, simple, mini
                        // Using "||" set icons align right.
                        return ["undo", "redo", "|", "bold", "hr", "|", "uppercase", "lowercase", "|", "h1", "h2", "h3" , "|", "list-ul", "list-ol", "|", "watch", "|", "code","code-block","|","clear","search"]
                    },
                    placeholder: "请输入上线单详情...",

                });
            });

            $("#commit").click(function(){ 
                // $('#defaultForm').bootstrapValidator();
               
                $('#defaultForm').bootstrapValidator().on('success.form.bv',function(e){

                    var subject = $("#subject").val();
                    var type = $("#type").val();
                    var project = $("#project").val();
                    var toPm = $("#toPM").val();
                    var mc = $("#mc").val();
                    var step = $("#step").val();
                    var data = {"subject":subject,"type":type,"project":project,"toPM":toPM,"mc":mc,"step":step};
                    

                 });
               
             });              
</script>
