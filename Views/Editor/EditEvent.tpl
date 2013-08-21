<a class="adminmenu" href="/admin">Админ панель</a>
<div class="beautiful_border">
    <center><h3>Редактирование события</h3></center>
</div>
<br/>
{if $error ne NULL}
    <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)">{$error|htmlspecialchars}</div>
{/if}
<br/>
<div class="beautiful_border">
    <script src="/public/Js/ckeditor/ckeditor.js"></script>
    <form method="post" action="/editor/UpdateEvent">
        <div>
            <h3>Заголовок:</h3>
            <br/>
            <input class="textbox" value="{$event['title']|htmlspecialchars}" name="title" size="50" type="text" placeholder="Заголовок" required>
        </div>
        <br/>
        <h3>Описание:</h3>
        <br/>
        <textarea id="description" name="description">
            {$event['description']|htmlspecialchars}
        </textarea>
        <br/>
        <h3>Полная статья:</h3>
        <br/>
        <textarea id="fullText" name="text">
            {$event['text']|htmlspecialchars}
        </textarea>
        <input class="pushButton" class="" type="submit" name="submit" value="Изменить" style="float: right"/>
        <div style="clear: right"></div>
        <input type="hidden" name="id" value="{$event['id']}">
        <input type="hidden" name="referer" value="{$referer}">
    </form>
</div>

<script type="text/javascript">
    CKEDITOR.replace('description');
    CKEDITOR.replace('fullText');
</script>
