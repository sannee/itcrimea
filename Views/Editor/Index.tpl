
    <h3 class="beautiful_border"><center>Панель редактора</center></h3><br/>
    {if $error ne NULL}
        <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)">{$error|htmlspecialchars}</div>
    {/if}
    <br/>
    <div class="beautiful_border">
        <a class="adminmenu" href="/editor/articles" >Добавление статтей</a><br/>
        <a class="adminmenu" href="/editor/files">Управление файлами</a><br/>
        <a class="adminmenu" href="/editor/events">Добавление события</a><br/>
        <a class="adminmenu" href="/editor/MyEvents">Управление событиями</a><br/>
        <a class="adminmenu" href="/editor/MySections">Мои разделы</a><br/>
        <a class="adminmenu" href="/editor/logout">Выйти</a><br/>
    </div>