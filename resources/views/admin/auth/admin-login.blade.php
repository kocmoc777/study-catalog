<!doctype html>
<html lang="uk">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Вхід</title>

</head>
<body class="login-page">
  <aside class="panel">
    <h2>Увійти</h2>
    <form>
      <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" placeholder="admin@admin.com" required />
      </div>

      <div class="form-group">
        <label for="password">Пароль</label>
        <input id="password" type="password" placeholder="••••••••" required />
      </div>

      <div class="controls">
        <a href="#" style="color:var(--muted);text-decoration:none">Забули пароль?</a>
      </div>

      <button class="btn" type="submit">Увійти</button>

      <!-- <div class="foot">Немає акаунту? <a href="#" style="color:var(--accent)">Зареєструватись</a></div> -->
    </form>
  </aside>
</body>
</html>
