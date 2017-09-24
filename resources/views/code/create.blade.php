<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
    .upload-detail-c label,
    .upload-detail-c a
    {
        font-size: 20px;
    }
    .upload-detail-c .language-wrapper{
        position: relative;
        width: 100%;
        height: 40px;
        margin-top: 20px;
        padding-bottom: 5px;
    }
    .upload-detail-c .language-wrapper h2{
        position: absolute;
        border-bottom: 2px solid #ccc;
        left: 5px;
    }
    .upload-detail-c .language{
        position: absolute;
        right: 5px;
        display: block;
        border: 1px solid #ccc;
        padding: 8px;
        border-radius: 5px;
    }
    .upload-detail-c form{
        margin-top: 20px;
        width: 100%;
    }
    .upload-detail-c button{
        margin: 0 auto;
        width: 60%;
        max-width: 500px;
    }
    .upload-detail-c form p{
        text-align: center;
    }
    @media (max-width: 600px) {
        .upload-detail-c .language-wrapper{
            height: 85px;
        }
        .upload-detail-c .language{
            top: 45px;
            left: 8px;
            right: auto;
        }
    }
    </style>
</head>
<body>
    <div class="container upload-detail-c">
        <div class="row">
            <div class="language-wrapper">
                <h2>アップロード内容画面</h2>
                <p class="language">language</p>
            </div>
        </div>
        <div class="row">

        </div>

        <form action="/code" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleFormControl1">タイトル</label>
                <input class="form-control" name="title" type="text" placeholder="タイトルを入力してください">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">コメント</label>
                <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="20"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControl2">Git url</label>
                <input class="form-control" name="url" type="text" placeholder="gitのurlを入力してください">
                <input type="hidden" name="id" value="{{ $id }}">
            </div>
            <div class="form-group">
                <p><button type="submit" class="btn btn-primary">Review</button></p>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
