
<script>
    if(noticeItem){
        if(checkNotice(noticeKey, noticeItem, acnk_notice)){
            updateNotice(noticeKey, acnk_notice);
        }
    }else{
        updateNotice(noticeKey, acnk_notice);
    }
</script>
