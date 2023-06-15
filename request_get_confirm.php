<?php
// 1. you must make sure as if this file accepts the data.
// var_dump($_GET);
// exit();

// 2. we are going to take out the data individually.

$request = $_GET['request'];
$date = $_GET['date'];
$time=$_GET['time'];


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/request_get_confirm.css" >
  <title>Sending Message</title>
</head>

<body>
  <fieldset>
  <h2 class="fieldset-heading">Your message has been sent!</h2>
    <table>
      <thead>
        <tr>
          <th>Request</th>
          <th>Date</th>
          <th>Time</th>

        </tr>
      </thead>
      <tbody>
        <!-- display the data you got by $_GET -->
        <tr>
          <td><?=$request?></td>
          <td><?=$date?></td>
          <td><?=$time?></td>
          
        </tr>
      </tbody>
    </table>
  </fieldset>

  <button id= 'goBackButton'>Go Back</button>

  <!-- fireworks function -->
  <script>
function createFirework() {
  const firework = document.createElement('div');
  firework.classList.add('firework');

  const xPos = Math.random() * window.innerWidth;
  const yPos = Math.random() * window.innerHeight;

  firework.style.left = `${xPos}px`;
  firework.style.top = `${yPos}px`;

  document.body.appendChild(firework);

  setTimeout(() => {
    firework.remove();
  }, 1000);
}

setInterval(createFirework, 100);

// go back button.
document.getElementById('goBackButton').addEventListener('click',function() {
  history.back();
})


  </script>
</body>

</html>