    <a class="adminmenu" href="/admin">Админ панель</a>
    <div class="beautiful_border">
        <center><h3>Управление разделами</h3></center>
    </div>
    <br/>
    {if $error ne NULL}
        <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)">{$error|htmlspecialchars}</div>
    {/if}
    <br/>
    <div class="beautiful_border">
        <form method="post" action="/admin/AddSection">
            <h3>Заголовок раздела:</h3>
            <input class="wi textbox" name="title" size="50" type="text" placeholder="Заголовок раздела" required>
            <input class="pushButton" type="submit" name="submit" value="Добавить"/>
        </form>
        <br/>
        <form method="post" action="/admin/SetSection">
            <h3>Назначить раздел:</h3>    
            <table>
                <tr>
                    <td><label for="username">Имя пользователя</label></td>                
                    <td><label for="sections">Раздел:</label></td>
                </tr>
                
                <tr>
                    <td>       
                        <input name = "username" class="textbox" name="title" size="15" type="text" placeholder="Имя пользователя" required>
                    </td>                
                    <td>
                        <select name="sections" class="textbox">
                            {foreach from=$sections item=section} 
                                <option value="{$section['id']|htmlspecialchars}">{$section['title']|htmlspecialchars}</option>
                            {/foreach}
                        </select>
                    </td>
                    <td> <input class="pushButton" style="margin-top: 0px;" class="" type="submit" name="submit" value="Назначить"/></td> 
                </tr>
            </table>

           
        </form>
        <br/>
        <form method="post" action="/admin/DeleteSection">
            <h3>Удаление раздела:</h3>
            <select name="sections" class="textbox">
                {foreach from=$sections item=section} 
                    <option value="{$section['id']|htmlspecialchars}">{$section['title']|htmlspecialchars}</option>
                {/foreach}
            </select>
            <input class="pushButton" class="" type="submit" name="submit" value="Удалить"/>
        </form>
    </div>