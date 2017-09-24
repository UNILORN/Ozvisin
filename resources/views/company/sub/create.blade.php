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
    .challenge-registration label,
    .challenge-registration a
    {
        font-size: 20px;
    }
    .challenge-registration h2
    {
        border-bottom: 2px solid #ccc;
        padding-bottom: 5px;
        margin-top: 20px;
    }
    .challenge-registration form{
        margin-top: 20px;
        width: 100%;
    }
    .challenge-registration button{
        margin: 0 auto;
        width: 60%;
        max-width: 500px;
    }
    .challenge-registration form p{
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="container challenge-registration">
        <div class="row">
            <h2>課題登録</h2>
        </div>

        <form>
            <div class="form-group">
                <label for="exampleFormControl1">タイトル</label>
                <input class="form-control" type="text" placeholder="タイトルを入力してください">
            </div>
            <div class="form-group">
                <label for="exampleFormControl2">期限</label>
                <input class="form-control" type="date" placeholder="期限を入力してください">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">言語</label>
                <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>Java</option>
                    <option>JavaScript</option>
                    <option>Julia</option>
                    <option>J#</option>
                    <option>jQuery</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">コメント</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="15"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControl3">Git url</label>
                <input class="form-control" type="text" placeholder="gitのurlを入力してください">
            </div>
            <div class="form-group">
                <p><button type="submit" class="btn btn-primary">Submit</button></p>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
