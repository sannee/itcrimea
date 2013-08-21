    <a class="adminmenu" href="/admin">Админ панель</a>
    <div class="beautiful_border">
        <center><h3>Добавление события</h3></center>
    </div>
    <br/>
    {if $error ne NULL}
        <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)">{$error|htmlspecialchars}</div>
    {/if}
    <br/>
    <div class="beautiful_border tb">
        <script src="/public/Js/ckeditor/ckeditor.js"></script>
        <form method="post" action="/admin/AddEvent">
            <div>
                <h3>Заголовок:</h3>
                <br/>
                <input class="textbox" name="title" type="text" placeholder="Заголовок" required>
            </div>

            <br/>
            <h3>Описание:</h3>
            <br/>
            <textarea id="description" name="description"></textarea>
            <br/>
            <h3>Текст:</h3>
            <br/>
            <textarea id="fullText" name="text"></textarea>
            <input class="pushButton" class="" type="submit" name="submit" value="Добавить" style="float: right"/>
            <div style="clear: right"></div>
        </form>
    </div>

<script type="text/javascript">
    CKEDITOR.replace('description');
    CKEDITOR.replace('fullText');
</script>
