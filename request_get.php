
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/request_get.css">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <title>Booking!</title>
</head>

<body>
  <!-- formにはaction, method, nameを設定！ -->
   
<form action="request_get_confirm.php" method= "GET">
<fieldset>
<legend>Request your staying!</legend>
<div>
  Request: <textarea name = 'request'></textarea>
</div>
<div>
  Date: <input type="date" name = 'date'>
</div>
<div>
  Time: <input type="time" name= 'time'>
</div>
<div>
  <button>Send</button>
</div>
</fieldset>

</form>

</body>

</html>