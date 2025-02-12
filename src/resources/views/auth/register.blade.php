<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>
<body>
 <header class="header">
  <h1 class="header-ttl">FashionablyLate<h1>
  <form class="login" action="/login">
    @csrf
   <button>login</button>
  </form>
 </header>
 <main>
  <div class="register-form__content">
   <div class="register-form__heading">
    <h2>Register</h2>
   </div>
   <form class="form" action="/register" method="post">
    @csrf
    <div class="form__group">
     <div class="form__group-title">
      <span class="form__label--item">お名前</span>
     </div>
     <div class="form__group-content">
      <div class="form__input--text">
       <input type="text" name="name" value="{{ old('name') }}"  placeholder="例:山田 太郎" />
      </div>
      <div class="form__error">
        @error('name')
        {{ $message }}
        @enderror
      </div>
     </div>
    </div>
    <div class="form__group">
     <div class="form__group-title">
      <span class="form__label--item">メールアドレス</span>
     </div>
     <div class="form__group-content">
      <div class="form__input--text">
       <input type="email" name="email" value="{{ old('email') }}" placeholder="例:test@example.com" />
      </div>
      <div class="form__error">
        @error('email')
        {{ $message }}
        @enderror
      </div>
     </div>
    </div>
    <div class="form__group">
     <div class="form__group-title">
      <span class="form__label--item">パスワード</span>
     </div>
     <div class="form__group-content">
      <div class="form__input--text">
       <input type="password" name="password" placeholder="coachtech1106" />
      </div>
      <div class="form__error">
        @error('password')
        {{ $message }}
        @enderror
      </div>
     </div>
    </div>
    <div class="form__button">
     <button class="form__button-submit" type="submit">登録</button>
    </div>
   </form>
 </main>
</body>
</html>