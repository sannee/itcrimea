<a class="adminmenu" href="/editor">Панель редактора</a>
<div class="beautiful_border">
    <center><h3>Добавление статьи</h3></center>
</div>
<br/>
{if $error ne NULL}
    <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)">{$error|htmlspecialchars}</div>
{/if}
<br/>
<div class="beautiful_border">
    <script src="/public/Js/ckeditor/ckeditor.js"></script>
    <form method="post" action="/editor/AddArticle">
        <div>
            <h3>Заголовок:</h3>
            <br/>
            <input class="textbox" name="title" size="50" type="text" placeholder="Заголовок" required>
        </div>
        <br/>
        <div>
            <h3>Раздел:</h3>
            <br/>
            <select class="textbox" name="section" required>
                {foreach from=$sections item=section}
                    <option value="{$section['id']|htmlspecialchars}">{$section['section']|htmlspecialchars}</option>\
                {/foreach}
            </select>
        </div>
        <br/>
        <h3>Описание:</h3>
        <br/>
        <textarea id="description" name="description"></textarea>
        <br/>
        <h3>Полная статья:</h3>
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
