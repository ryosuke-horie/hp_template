<html>
　　<head>
    　<title>お問い合せ</title>
　　</head>
　　<!--CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/contact.css') }}">

　　<body>
        <h1>お問合せページです</h1>

        <form class="contact-form" action="" method="post">
            <p>お客様の情報をご記載下さい。</p>
            <div class="item">
                <label class="label" for="name" name="name">名前</label>
                    <input id="name" type="text">
            </div>
            <div class="item">
                <label class="label" for="e-mail">メール</label>
                    <input id="e-mail" type="email" name="email">
            </div>
            <div class="item">
                <label class="label" for="message">本文</label>
                    <textarea rows="4" id="message" placeholder="ご意見をお寄せ下さい。" name="comment"></textarea>
            </div>
            <div class="item">
                <p class="label">購入理由</p>
                <div class="radio-group">
                    <label><input type="radio" name="source">友達から聞いた</label><br>
                    <label><input type="radio" name="source">CMを見た</label><br>
                    <label><input type="radio" name="source">ネット広告を見た</label>
                </div>
            </div>
            <div class="item no-label">
                <label><input type="checkbox" name="magazine">メルマガを希望する</label>
            </div>
            <div class="item no-label">
                <input type="submit">
            </div>
        </form>
　　</body>
</html>