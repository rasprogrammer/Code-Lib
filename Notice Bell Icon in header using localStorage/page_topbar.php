<?php
    $ackn_notice = ['noticeID'=>'noticeID']; // hashmap
?>
<acnk_notice style='display:none;'> <?= json_encode($ackn_notice) ?></acnk_notice>


         
<?php if (permissionChecker('notice')) { ?>
    <li class="dropdown notifications-menu">
        <a href="<?= base_url('notice') ?>" id="acnk_noticebox">
            <i class="fa fa-bullhorn" aria-hidden="true"></i>
            
        </a>
    </li>
<?php } ?>




<script>
    // =========== Show Horn Icon For Notice ===========
    const noticeKey = "noticeKey";
    const acnk_notice = JSON.parse($('acnk_notice').html());
    const noticeItem = localStorage.getItem(noticeKey);
    if(noticeItem){
        checkNotice(noticeKey, noticeItem, acnk_notice, true);
    }else{
        showNotice();
    }
    
    function checkNotice(key, items, notice, show=false){
        let arr = JSON.parse(items);
        for(const[k, v] of Object.entries(notice)){
            if(!arr[v]){
                if(show)
                    showNotice();
                return true;
            }
        }
        return false;
    }
    
    function showNotice(){
        $('#acnk_noticebox').append("<span class='label label-danger'>");
        $('#acnk_noticebox').append('<lable class="alert-image" style="width: 8px;height: 8px;background-color: red;border-radius: 50%;display: inline-block;position: absolute;"></lable>');
        $('#acnk_noticebox').append("</span>");
    }
    
    function updateNotice(key, value){
        localStorage.setItem(key, JSON.stringify(value));
    }
    
</script>
