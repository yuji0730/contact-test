<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>
<body>
 <header class="header">
  <h1 class="header-ttl">FashionablyLate<h1>
  <form class="logout" action="/logout" method="post">
   @csrf
   <button class="header__button">logout</button>
  </form>
 </header>
 <main>
  <div class="admin__content">
   <div class="admin__heading">
    <h2>Admin</h2>
   </div>
   <div class="search-menu">
    <form class="search-form" action="/search" method="get">
     @csrf
     <div class="search-form__item">
      <input class="search-form__item-input" type="text" name="keyword" placeholder="名前やメールアドレスを入力してください" value="{{ old('keyword') }}">
     </div>
     <select class="search-form__item-select" name="gender">
      <option value="" selected hidden> 性別</option>
      <option value="全て" >全て</option>
      <option value="男性" >男性</option>
      <option value="女性" >女性</option>
      <option value="その他" >その他</option>
     </select>
     <select class="search-form__item-select" name="category_id">
      <option value="" selected hidden> お問い合わせの種類</option>
      <option value="商品のお届けについて" >商品のお届けについて</option>
      <option value="商品の交換について" >商品の交換について</option>
      <option value="商品トラブル" >商品トラブル</option>
      <option value="ショップへのお問い合わせ" >ショップへのお問い合わせ</option>
      <option value="その他" >その他</option>
     </select>
     <div class="search-form__item">
      <input class="search-form__item-date" type="date" name="date">
     </div>
     <div class="search-form__button">
      <button class="search-form__button-submit" type="submit">検索</button>
     </div>
    </form> 
    <form class="reset" action="/admin">
     @csrf
     <div class="reset-button">
      <button class="reset-button-submit" type="submit">リセット</button>
     </div>
    </form>
   </div>
   <div class="contact-table">
    <table class="contact-table__inner">
     <tr class="contact-table__row">
      <th class="contact-table__header">
       <span class="contact-table__header-span">お名前</span>
       <span class="contact-table__header-span">性別</span> 
       <span class="contact-table__header-span">メールアドレス</span>
       <span class="contact-table__header-span">お問い合わせの種類</span>
      </th>
     </tr>
    </table>
   </div>
  </div>
</main>
    
</body>
</html>