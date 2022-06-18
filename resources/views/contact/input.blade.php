<html>
　　<head>
    　<title>お問い合せ</title>
　　</head>
　　<body>
        <h1>お問合せページです</h1>

        <form class="contact-form" action="//www-creators.com/rsc/receiver.php" method="post">
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

<style>
.contact-form {
  border: 1px solid #ccc;
  padding: 10px;
  font-size: 13px;
  font-family: sans-serif;
}
.contact-form .item {
  display: block;
  overflow: hidden;
  margin-bottom: 10px;
}
.contact-form .item.no-label {
  padding: 5px 0px 5px 60px;
}
.contact-form .item .label {
  float: left;
  padding: 5px;
  margin:0;
}
.contact-form .item .radio-group{
  padding: 5px 0px 5px 60px;
}
.contact-form .item input[type=text],
.contact-form .item input[type=email],
.contact-form .item textarea {
  display: block;
  margin-left: 60px;
  width: 200px;
  padding: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 13px;
}
.contact-form .item ::placeholder {
  color: #ccc;
}
.contact-form .item textarea {
  outline: none;
  border: 1px solid #ccc;
  resize: vertical;
}
input[type=submit] {
  border: none;
  outline: none;
  display: block;
  line-height: 30px;
  width: 160px;
  text-align: center;
  font-size: 13px;
  color: #fff;
  background-color: #696;
  border-bottom: 4px solid #464;
  cursor:pointer;

  box-sizing: content-box;
  transition:0.3s ease all
}
input[type=submit]:hover{
  border-bottom-width:0;
  transform:translateY(4px)
}
</style>