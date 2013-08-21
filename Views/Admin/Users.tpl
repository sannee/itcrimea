    <a href="/admin" class="adminmenu">Админ панель</a>
    <div class="beautiful_border">
        <center><h3>Добавление пользователей</h3></center>
    </div>
    <br/>
    {if $error ne NULL}
        <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)">{$error|htmlspecialchars}</div>
    {/if}
    <br/>
    <form method="post" action="/admin/addAdmin" class="loginform cf">
        <h3>Добавление администратора</h3>
        <br/>
        <ul>
            <li>
                <label for="username">Имя пользователя:</label>
                <input type="text" name="login" id="username" placeholder="Имя пользователя" required />
            </li>

            <li>
                <label for="name">Полное имя:</label>
                <input type="text" name="name"  id="password" placeholder="Полное имя" required />
            </li>
            <li>
                <label for="password">Пароль:</label>
                <input type="password" name="password" id="password" placeholder="Пароль" required />
            </li>
            <li>
                <label for="password">Email:</label>
                <input type="email" name="email" id="password" placeholder="Email" required />
            </li>

            <li>
                <label for="password">Повторите пароль:</label>
                <input type="password" name="confirmPassword" id="password" placeholder="Повторите пароль" required />
            </li>

            <li>
                <input type="submit" name="submit" value="Добавить" />
            </li>
        </ul>
    </form>
    <br/>

    <form method="post" action="/admin/addEditor" class="loginform cf">
        <h3>Добавление редактора</h3>
        <br/>
        <ul>
            <li>
                <label for="login">Имя пользователя:</label>
                <input type="text" name="login" id="username" placeholder="Имя пользователя" required />
            </li>
            <li>
                <label for="name">Полное имя:</label>
                <input type="text" name="name"  id="password" placeholder="Полное имя" required />
            </li>
            <li>
                <label for="password">Пароль:</label>
                <input type="password" name="password" id="password" placeholder="Пароль" required />
            </li>
            <li>
                <label for="password">Email:</label>
                <input type="email" name="email" id="password" placeholder="Email" required />
            </li>

            <li>
                <label for="password">Повторите пароль:</label>
                <input type="password" name="confirmPassword" id="password" placeholder="Повторите пароль" required />
            </li>
            <li>
                <label for="sections">Раздел:</label>
                <select name="section">
                    {foreach from=$sections item=section}
                        <option value="{$section['id']|htmlspecialchars}">{$section['title']|htmlspecialchars}</option>
                    {/foreach}
                </select>
            </li>

            <li>
                <input type="submit" name="submit" value="Добавить" />
            </li>
        </ul>
    </form>