    {foreach from=$events item=event}
        <div class="row beautiful_border">
            <div>
                <h1><a href="/events/show/event={$event['id']|htmlspecialchars}">{$event['title']|htmlspecialchars}</a></h1>
                <h5>{$event['date']|htmlspecialchars}</h5>
                <h3>Автор: "{$event['author']|htmlspecialchars}"</h3>
                
                <p>
                    {$event['description']}
                </p>
                
                {if $permission eq "admin"}
                    <a href="/events/show/event={$event['id']|htmlspecialchars}" class="more"  style="margin-left: 10px;">Подробнее...</a> 
                    <a href="/admin/EditEvent/id={$event['id']|htmlspecialchars}" class="more"  style="margin-left: 10px;">Изменить</a> 
                    <a href="/admin/DeleteEvent/id={$event['id']|htmlspecialchars}" class="more"  style="margin-left: 10px;">Удалить</a> 
                {/if}
              
                {if $permission eq NULL or $permission eq "editor"}
                    <a href="/events/show/event={$event['id']|htmlspecialchars}" class="more">Подробнее...</a>                
                {/if}
                
            </div>
        </div>
    {/foreach}
<div class="paginator">
{$pagination}
</div>