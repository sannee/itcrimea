    <br/>
    <h3 class="row beautiful_border"><center>Разделы</center></h3>
    <div class="row beautiful_border">

        {foreach from=$sections item=section}
            <div>
                <h1><a href="/sections/show/section={$section['title']|htmlspecialchars}">{$section['title']|htmlspecialchars}</a></h1>
            </div>
        {/foreach}
    </div>