    <a class="adminmenu" href="/editor">Панель редактора</a>
    <div class="beautiful_border">
        <center><h3>Мои разделы</h3></center>
    </div>
    <br/>

    <div class="beautiful_border">
        {foreach from=$sections item=section}
            <a class="adminmenu" href="/sections/show/section={$section['section']}">{$section['section']}</a><br/>
        {/foreach}
    </div>