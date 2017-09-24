<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
    .review-confirmation p,
    .review-confirmation a
    {
        font-size: 20px;
    }
    .review-confirmation h2,
    .review-confirmation h3
    {
        border-bottom: 2px solid #ccc;
        padding-bottom: 5px;
        margin-top: 20px;
    }
    .review-confirmation form{
        margin-top: 20px;
        width: 100%;
    }
    .review-confirmation button{
        margin: 0 auto;
        width: 60%;
        max-width: 500px;
    }
    .review-confirmation form p{
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="container review-confirmation">
        <div class="row">
            <h2>レビュー確認画面</h2>
        </div>
        <div class="row">
            <h3 class="col-md-12">コード</h3>
            <pre class="col-md-12">
&lt;strong&gt;ニホンカワウソ&lt;/strong&gt;<br>
かつては日本全国に生息していましたが、
今や&lt;em&gt;特別天然記念物&lt;/em&gt;です。
既に絶滅している可能性も指摘されています。
            </pre>
        </div>
        <div class="row">
            <form action="./sub/subject">
                <p><button type="submit" class="btn btn-primary">Submit</button></p>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
