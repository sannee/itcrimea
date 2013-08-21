    <a class="adminmenu" href="/editor">Панель редактора</a>
    <div class="beautiful_border">
        <center><h3>Управление файлами</h3></center>
    </div>
    <br/>
    {if $error ne NULL}
        <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)">{$error|htmlspecialchars}</div>
    {/if}
    <br/>
    <div class="beautiful_border">
        <form enctype="multipart/form-data" action="/editor/UploadFile" method="post">
            <h3>Загрузка файла:</h3>
            <input type="hidden" name="MAX_FILE_SIZE" value="20971520000000" id="MAX_FILE_SIZE">
            <input class="wi textbox" name="file" type="file" placeholder="Загрузка файла" required>
            <input class="pushButton" type="submit" name="submit" value="Загрузить"/>
        </form>
        <br/>
        {if $files ne NULL}
            <form method="POST" action="/editor/deleteFile">
                <h5>Список файлов:</h5>
                <br/>
                <table>
                    {foreach from=$files item=file}
                        <tr>
                            <td><a class="file" href="/public/uploads/{$file['name']}">{$file['name']|htmlspecialchars}</a></td>
                            <td><input  value="{$file['name']}" name="files[{$file['id']}]" type="checkbox" style="margin-left: 20px;"></td>
                        </tr>
                    {/foreach}
                </table>
                <input class="pushButton" type="submit" name="submit" value="Удалить"/>
            </form>
        {/if}
    </div>