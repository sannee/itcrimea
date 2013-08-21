        <div class="row beautiful_border">
            <div>
                <h1><a href="/article/show/id={$article['id']|htmlspecialchars}">{$article['title']|htmlspecialchars}</a></h1>
                <h5>{$article['date']|htmlspecialchars}</h5>
                <h3>Автор: "{$article['author']|htmlspecialchars}"</h3>
                <p>
                    {$article['text']}
                </p>
            </div>
        </div>
