<form method="post" action="/createIntegration" id="form-send" class="form-authorization container-modal-window send-window">
    <h3>Введите данные для интеграции с AmoCrm</h3>

    <label class="label-form" for="subdomain">Поддомен AmoCRM</label>
    <input name="subdomain" id="subdomain" class="input-form" required>

    <label class="label-form" for="client_secret">Секретный ключ</label>
    <input name="client_secret" id="client_secret" class="input-form" required>

    <label class="label-form" for="client_id">ID интеграции</label>
    <input name="client_id" id="client_id" class="input-form" required>

    <label class="label-form" for="code">Код авторизации</label>
    <input name="code" id="code" class="input-form" required>

    <button type="submit" class="btn btn-start">Получить доступ</button>
</form>
