<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
 <header class="header">
  <h1 class="header-ttl">FashionablyLate<h1>
 </header>

 <main>
  <div class="contact-form__content">
   <div class="contact-form__heading">
    <h2>Contact</h2>
   </div> 
   <form class="form" action="/confirm" method="post">
   @csrf
    <div class="form__group">
     <div class="form__group-title">
      <span class="form__label--item">お名前</span>
      <span class="form__label--required">※</span>
     </div>
     <div class="form__group-content">
      <div class="form__input">
       <div class="form__input--name">
        <input type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}" />
       </div>
       <div class="form__error">
        @error('last_name')
        {{ $message }} 
        @enderror
       </div>
      </div> 
      <div class="form__input">
       <div class="form__input--name">
        <input type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}" />
       </div>
       <div class="form__error">
        @error('first_name')
        {{ $message }} 
        @enderror
       </div>
      </div> 
     </div>
    </div>
    <div class="form__group">
     <div class="form__group-title">
      <span class="form__label--item">性別</span>
      <span class="form__label--required">※</span>
     </div>
     <div class="form__group-content">
      <div class="form__input--radio">
       <input type="radio" name="gender" value="男性" checked="cheched">男性</input>
       <input type="radio" name="gender" value="女性">女性</input>
       <input type="radio" name="gender" value="その他">その他</input>
      </div>
      <div class="form__error">
       @error('gender')
        {{ $message }} 
        @enderror
      </div>
     </div>
    </div>
    <div class="form__group">
     <div class="form__group-title">
      <span class="form__label--item">メールアドレス</span>
      <span class="form__label--required">※</span>
     </div>
     <div class="form__group-content">
      <div class="form__input--text">
       <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
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
      <span class="form__label--item">電話番号</span>
      <span class="form__label--required">※</span>
     </div>
     <div class="form__group-content">
      <div class=form__input>
       <div class="form__input--tel">
        <input type="tel" name="first_tel" placeholder="080" value="{{ old('first_tel') }}" />-
       </div>
       <div class="form__error">
        @error('first_tel')
        {{ $message }} 
        @enderror
       </div>
      </div>
      <div class=form__input>
        <div class="form__input--tel">
        <input type="tel" name="middle_tel" placeholder="1234" value="{{ old('middle_tel') }}" />-
       </div>
       <div class="form__error">
        @error('middle_tel')
        {{ $message }} 
        @enderror
       </div>
      </div>
      <div class=form__input>
       <div class="form__input--tel">
        <input type="tel" name="last_tel" placeholder="5678" value="{{ old('last_tel') }}" />
       </div>
       <div class="form__error">
        @error('last_tel')
        {{ $message }} 
        @enderror
       </div>
      </div>
     </div>
    </div>
    <div class="form__group">
     <div class="form__group-title">
      <span class="form__label--item">住所</span>
      <span class="form__label--required">※</span>
     </div>
     <div class="form__group-content">
      <div class="form__input--text">
       <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
      </div>
      <div class="form__error">
       @error('address')
        {{ $message }} 
        @enderror
      </div>
     </div>
    </div>
    <div class="form__group">
     <div class="form__group-title">
      <span class="form__label--item">建物名</span>
     </div>
     <div class="form__group-content">
      <div class="form__input--text">
       <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
      </div>
     </div>
    </div>
    <div class="form__group">
     <div class="form__group-title">
      <span class="form__label--item">お問い合わせの種類</span>
      <span class="form__label--required">※</span>
     </div>
     <div class="form__group-content">
      <div class="form__input--select">
       <select name="contact-type">
        <option value="" selected hidden> 選択してください</option>
        <option value="商品のお届けについて" >商品のお届けについて</option>
        <option value="商品の交換について" >商品の交換について</option>
        <option value="商品トラブル" >商品トラブル</option>
        <option value="ショップへのお問い合わせ" >ショップへのお問い合わせ</option>
        <option value="その他" >その他</option>
       </select>
      </div>
      <div class="form__error">
       @error('contact-type')
        {{ $message }} 
        @enderror
      </div>
     </div>
    </div>
    <div class="form__group">
     <div class="form__group-title">
      <span class="form__label--item">お問い合わせ内容</span>
      <span class="form__label--required">※</span>
     </div>
     <div class="form__group-content">
      <div class="form__input--textarea">
       <textarea name="detail" placeholder="お問い合わせ内容をご記載ください"> {{ old('detail') }}</textarea>
      </div>
     </div>
     <div class="form__error">
       @error('detail')
        {{ $message }} 
        @enderror
     </div>
    </div>
    <div class="form__button">
     <button class="form__button-submit" type="submit">確認画面</button>
    </div>
   </form>
  </div>
 </main>


</body>
</html>