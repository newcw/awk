<div class="page-content">
    <div class="page-header">
        <h1>
        工单管理
        <small>
        <i class="icon-double-angle-right"></i>
        我的工单
        </small>
        </h1>
    </div>
    <div class="message-list-container">
        <div class="message-list" id="message-list">
            <?php
            foreach($userTicket as $item){
            ?>
            <!-- <TABLE class = "table table-hover">
                <tbody>
                    <tr> -->
                        <div style="text-align:left;height:32px;border-bottom:1px dashed #ccc;margin-top:10px;">
                            <div class="message-item message-unread">
                                <label class="inline">
                                    <?php
                                    $status = $item['status'];
                                    if($status == 1){
                                    ?>
                                    <span class="label label-info arrowed-in-right arrowed">创建工单</span>
                                    <?php
                                    }
                                    elseif($status == 2) {
                                    ?>
                                    <span class="label label-warning arrowed-in-right arrowed"><?php if($item['mc'] == 1){ echo "申请免测";}else{ echo "申请测试";} ?></span>
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
                                <span class="sender">
                                    
                                    
                                    <?php
                                    
                                    $ticketId = $item['id'];
                                    $userId = $item['owner'];
                                    $subject = $item['subject'];
                                    $lastUpdateTime = $item['update_time'];
                                    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."工单id:"."<a href='/ticket/detail?tid=$ticketId'>".$ticketId."</a>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."标题:"."<a href='/ticket/detail?tid=$ticketId'>".mb_substr($subject, 0,20,'utf-8')."...</a>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."最近操作时间:".$lastUpdateTime."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."<a href='/ticket/detail?tid=$ticketId'>"."详细信息"."</a>";
                                    ?>
                                    
                                    
                                </div>
                                
                            </span>
                            <!-- <hr style="height:1px;border:none;border-top:1px dashed #CCC;" /> -->
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </tr>
            </tbody>
        </TABLE> -->
        </div>

        <?php
        }
        ?>
    
    <!-- </div> -->
</div>
</div>
<div align="center">
<?php
use yii\widgets\LinkPager;
echo LinkPager::widget([
'pagination' => $pages,
]);
?>
</div>