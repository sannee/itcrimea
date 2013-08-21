<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="/Public/CSS/style.css" type="text/css"/>
        <title>IT Crimea</title>
    </head>

    <body>
        <div class="wrapper">

            <div class="header">
                <div class="content">
                    <a href="/"><div class="logo polaroid"></div><div style="clear: left;"></div></a>
                </div>
                <div class="img"></div>
            </div>
            <div class="top">
                <div class="topContainer">
                    <div class="menu">
                        <a class="active" href="/">Главная</a>
                        <a class="active" href="/events">Новости</a>
                        <a class="active" href="/sections">Разделы</a>
                        <a class="active" href="#">Контакты</a>
                    </div>
                </div>  
            </div>

            <div class="content">
                <div class="left-sb">
                    <h2>Последние события</h2>

                    {foreach from=$EventsCollumn item=event}
                        <div class="row beautiful_border">
                            <a class="title" href="/events/show/event={$event['id']|htmlspecialchars}">{$event['title']|htmlspecialchars}</a>
                            <h5>{$event['date']|htmlspecialchars}</h5>
                            <p>
                                {$event['description']}
                            </p>
                            <a class="more" href="/events/show/event={$event['id']|htmlspecialchars}">Подробнее...</a>
                        </div>
                    {/foreach}
                    <a href="/events" class="show-all">Смотреть все</a>
                </div>

                <div class="right-sb">
                    <h2>Разделы</h2>
                    <a href="/sections/show/section=Microsoft">
                        <img class="beautiful_border" src="/Public/Images/l_company_microsoft.png" title="microsot"/>
                    </a>
                    <a href="/sections/show/section=Cisco">
                        <img class="beautiful_border" src="/Public/Images/cisco-logo.png" title="Cisco"/>
                    </a>
                    <a href="/sections/show/section=D-Link">
                        <img class="beautiful_border" src="/Public/Images/D-link.jpeg" title="D-Link"/>
                    </a>
                </div>

                <div class="center-sb">
                    {$view}

                </div>
                <div style="clear: both;"></div>
            </div>
            <div class="footer">
                <br>
                <span>IT Crimea, 2013</span>
            </div>
        </div>	
    </body>
</html>