<div class="page-content">
  <div class="page-header">
    <h1>
    <!-- 工单管理 -->
    <?php
      $ticketId = $ticket['id'];
      $subject = $ticket['subject'];
      echo "【<b>#".$ticketId."</b>】".mb_substr($subject,0,10,'utf-8');
    ?>
    <small>
    <!-- <i class="icon-double-angle-right"></i> -->
        <sup>
         <label class="inline">
                <?php
                $status = $ticket['status'];
                if($status == 1){
                ?>
                <span class="label label-info arrowed-in-right arrowed">创建工单</span>
                <?php
                }
                elseif($status == 2) {
                ?>
                <span class="label label-warning arrowed-in-right arrowed"><?php if($ticket['mc'] == 1){ echo "申请免测";}else{ echo "申请测试";} ?></span>
                <?php
                }
                elseif($status == 3){
                ?>
                <span class="label label-primary arrowed-in-right arrowed">测试通过</span>
                <?php
                }
                elseif($status == 4) {
                ?>
                <span class="label label-danger arrowed-in-right arrowed">申请上线</span>
                <?php
                }
                elseif($status == 5){
                ?>
                <span class="label label-success arrowed-in-right arrowed">上线完成</span>
                <?php
                }
                ?>
              </label>
            </sup>
    </small>
    </h1>
  </div>
</div>
<div class="col-md-8">
<div class="message-list-container">
  <div class="message-list" id="message-list">
    
          <div class="jumbotron" style="text-align:left;padding:10px;">
            <div class="message-ticket message-unread">
             
              <span class="sender">
                
                
                <?php
                
                $ticketId = $ticket['id'];
                $userId = $ticket['owner'];
                $subject = $ticket['subject'];
                $lastUpdateTime = $ticket['update_time'];
                $createTime = $ticket['create_time'];
                $type = $ticket['type'];
                $step = $ticket['step'];
                if($type == 1){
                  $showType = "php上线";
                }
                echo "类型:".$showType."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."创建时间:".$createTime."<br>"."<br>";
                echo "上线备注(步骤):"."<br/>"."<br/>".str_replace("\n", "<br/>", $step);
                ?>
              </span>  
                
              </div>
              
            
          </div>
        </div>
</div>
</div>
<div class="col-md-4">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          #history历史记录
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        这是历史记录
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          #comment备注
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        这是评论
      </div>
    </div>
  </div>

</div>

</div>


<?php include 'core.php'; ?>