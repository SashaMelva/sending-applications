<form id="form-send" class="form-authorization container-modal-window send-window">
    <h3>Введите данные для отправки заявки</h3>
    <label class="label-form" for="name">Имя</label>
    <input name="name" id="name" class="input-form" required>
    <label class="label-form" for="email">Email</label>
    <input name="email" id="email" class="input-form" required>
    <label class="label-form" for="phone">Телефон</label>
    <input name="phone" id="phone" class="input-form" required>
    <label class="label-form" for="price">Цена</label>
    <input type="email" name="price" id="price" class="input-form" required>
    <button type="button" onclick="validateInputUser()" class="btn btn-start">Сохранить</button>
    <a type="button" class="btn btn-start" href="/">Назад</a>
</form>
