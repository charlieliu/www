<div id="body">
    <p>{current_page}/{current_fun}</p>

    <form id="frm1" action="<?=base_url()?>login/{btn_url}" method="POST">
        <div>
            帳號 : <input type="text" id="username" name="username" placeholder="username">
        </div>
        <div>
            密碼 : <input type="password" id="pwd" name="pwd" placeholder="pwd">
        </div>
        <input id="btn_submit" class="btn btn-primary" type="submit" value="{btn_value}">
        <a class="btn btn-warning" href="<?=base_url()?>login/register">註冊</a>
    </form>
</div>
<script type="text/javascript">
    <!--
    $('#btn_submit').click(function(event){
        if( event.preventDefault() ) event.preventDefault(); else event.returnValue = false;
        if( $.trim($('#username').val())=='' ){
            alert('name is empty');
            $('#username').focus();
        }
        else if( $.trim($('#pwd').val())=='' ){
            alert('pwd is empty');
            $('#pwd').focus();
        }
        else
        {
            $('#frm1').submit();
        }
    });
    -->
</script>