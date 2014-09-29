<div id="body">
    <p>{current_page}/{current_fun}</p>

    <div style="margin:1em;">
        <input id="userfile_1" class="fileupload" type="file">
        <div>File Size:<span>0 bytes</span></div>
    </div>

    <div style="margin:1em;">
        <input id="userfile_2" class="fileupload" type="file">
        <div>File Size:<span>0 bytes</span></div>
    </div>

    <div style="margin:1em;">
        <input id="userfile_3" class="fileupload" type="file">
        <div>File Size:<span>0 bytes</span></div>
    </div>

    <div style="margin:1em;">
        <div>Total Size:<span id="totalsize">0 bytes</span></div>
    </div>

    <div style="margin:1em;">
        <table border="1">
            <tr>
                <th>files[0]</th>
                <th>this</th>
                <th>$(this)</th>
            </tr>
            <tr valign="top">
                <td id="filesinfo"></td>
                <td id="fileinfo"></td>
                <td id="fileinfo2"></td>
            </tr>
        </table>
    </div>
</div>

<script type="text/javascript">
    <!--
    if( $.support.leadingWhitespace )
    {
        function getFileSize(obj)
        {
            if( obj.files[0]!=null && 'number'==typeof(obj.files[0].size))
                return obj.files[0].size;
            else
                return 0;
        }
        function getFileinfo(obj)
        {
            var filesobj = [], v;
            if( obj.files[0]!=null && 'number'==typeof(obj.files[0].size))
            {
                for(var n in obj.files[0] )
                {
                    v = obj.files[0].n;
                    filesobj.push('{ "'+n+'" : "'+v+'" }');
                }

                filesobj.push('"obj.files[0].webkitRelativePath" : "'+obj.files[0].webkitRelativePath+'"');
                filesobj.push('"obj.files[0].lastModifiedDate" : "'+obj.files[0].lastModifiedDate+'"');
                filesobj.push('"obj.files[0].name" : "'+obj.files[0].name+'"');
                filesobj.push('"obj.files[0].type" : "'+obj.files[0].type+'"');
                filesobj.push('"obj.files[0].size" : "'+obj.files[0].size+'"');
                filesobj.push('"obj.files[0].lice" : "'+obj.files[0].slice+'"');
            }
            $('#filesinfo').html(filesobj.join('<br>'));
            filesobj = null;
            n = null;
            v = null;
        }

        function getFormate(bytes)
        {
            if( bytes<1024 )
            {
                return bytes + ' bytes';
            }
            else if( bytes<(1024*1024) )
            {
                return (bytes/1024).toFixed(2) + ' kb';
            }
            else if( bytes<(1024*1024*1024) )
            {
                return (bytes/(1024*1024)).toFixed(2) + ' MB';
            }
            else
            {
                return (bytes/(1024*1024*1024)).toFixed(2) + ' GB';
            }
        }

        function getTotalSize()
        {
            var totalsize = 0;
            $('.fileupload').each(function(){
                totalsize += getFileSize(this);
            });
            $('#totalsize').html(getFormate(totalsize)+'('+totalsize+')');
            totalsize = null;
        }

        function getInfo(obj)
        {
            var fileobj = [], v;
            for(var n in obj )
            {
                v = obj.n;
                fileobj.push('{ "'+n+'" : "'+v+'" }');
            }
            return fileobj.join('<br>');
            fileobj = null;
            n = null;
            v = null;
        }

        $('.fileupload').change(function(){
            $(this).siblings('div').find('span').html(getFormate(getFileSize(this))+'('+getFileSize(this)+')');
            getFileinfo(this);
            getTotalSize();
            $('#fileinfo').html(getInfo(this));
            $('#fileinfo2').html(getInfo($(this)));
        });
    }
    else
    {
        /*
        var fileobj = ['Browser do not support'], v, count=0;
        for(var n in this )
        {
            v = $('#filesize').n;
            fileobj.push('{" '+n+'" : "'+v+'"}');
            count++;
        }
        $('#err_msg').html(fileobj.join('<br>'));
        fileobj = null;// 釋放IE記憶體
        */
        $(this).siblings('div').find('span').html('Browser do not support');
    }
    -->
</script>