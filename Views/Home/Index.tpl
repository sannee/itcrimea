{foreach from=$articles item=article}
    <div class="row beautiful_border">
        <div>
            <h1><a href="/article/show/id={$article['id']|htmlspecialchars}">{$article['title']|htmlspecialchars}</a></h1>
            <h5>{$article['date']|htmlspecialchars}</h5>
            <h3>Автор: "{$article['author']|htmlspecialchars}"</h3>
            <p>
                {$article['description']}
            </p>
            {if $permission eq "admin"}
                <a href="/article/show/id={$article['id']|htmlspecialchars}" class="more" style="margin-left: 10px;">Подробнее...</a>
                <a href="/admin/EditArticle/id={$article['id']|htmlspecialchars}" class="more" style="margin-left: 10px;">Изменить</a>
                <a href="/admin/DeleteArticle/id={$article['id']|htmlspecialchars}" class="more" style="margin-left: 10px;">Удалить</a>
            {/if}
            {if $permission eq NULL or $permission eq "editor"}
                <a href="/article/show/id={$article['id']|htmlspecialchars}" class="more">Подробнее...</a>                    
            {/if}
        </div>
    </div>
{/foreach}

<div class="paginator">
{$pagination}
</div>
