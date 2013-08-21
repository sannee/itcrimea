
    {if $events eq NULL}
        <div class="row beautiful_border"  style="background: rgba(255, 0, 0, 0.3)">
            Вы еще не добавили ниодного события
        </div>
    {/if}

    {foreach from=$events item=event}
        <div class="row beautiful_border">
            <div>
                <h1><a href="/events/show/event={$event['id']|htmlspecialchars}">{$event['title']|htmlspecialchars}</a></h1>
                <h5>{$event['date']|htmlspecialchars}</h5>
                <h3>Автор: "{$event['author']|htmlspecialchars}"</h3>
                <p>
                    {$event['description']}
                </p>
                <a href="/events/show/event={$event['id']|htmlspecialchars}" class="more"  style="margin-left: 10px;">Подробнее...</a> 
                <a href="/editor/EditEvent/id={$event['id']|htmlspecialchars}" class="more"  style="margin-left: 10px;">Изменить</a> 
                <a href="/editor/DeleteEvent/id={$event['id']|htmlspecialchars}" class="more"  style="margin-left: 10px;">Удалить</a> 
            </div>
        </div>
    {/foreach}
