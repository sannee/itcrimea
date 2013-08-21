    <a class="adminmenu" href="/admin">Админ панель</a>
    <div class="beautiful_border">
        <center><h3>Управление файлами</h3></center>
    </div>
    <br/>
    {if $error ne NULL}
        <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)">{$error|htmlspecialchars}</div>
    {/if}
    <br/>
    <div class="beautiful_border">
        <form enctype="multipart/form-data" action="/admin/UploadFile" method="post">
            <h3>Загрузка файла:</h3>
            <input type="hidden" name="MAX_FILE_SIZE" value="20971520000000" id="MAX_FILE_SIZE">
            <input class="wi textbox" name="file" type="file" placeholder="Загрузка файла" required>
            <input class="pushButton" type="submit" name="submit" value="Загрузить"/>
        </form>
        <br/>
            {if $files ne NULL}
        <form method="POST" action="/admin/deleteFile">
            <table>
                <th>Загрузил</th>
                <th>Файл</th>
                {foreach from=$files item=file}
                <tr>
                    <td><span class="file">{$file['login']|htmlspecialchars}</span></td>
                    <td><a class="file" href="/public/uploads/{$file['name']}">{$file['name']|htmlspecialchars}</a></td>
                    <td><input  value="{$file['name']}" name="files[{$file['id']}]" type="checkbox" style="margin-left: 20px;"></td>
                </tr>
                {/foreach}
            </table>
            <input class="pushButton" type="submit" name="submit" value="Удалить"/>
        </form>
            {/if}
    </div>