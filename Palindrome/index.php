<!DOCTYPE html>
<html>
<head>

</head>
<style>
body {
  background-color: #8fb6ff;
  margin: 0;
  padding: 3rem;
}
.stage {
  animation: animateBg 2s infinite linear;
  background-color: #fff;
  background-image: linear-gradient(90deg, #da3287, #ffde5e, #da3287, #ffde5e);
  background-size: 300% 100%;
  box-shadow: 0 3px 14px #000;
  border-radius: 1rem;
  height: 400px;
  width: 600px;
}
@keyframes animateBg {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 100% 0;
  }
}

  </style>
<body>
<article class="stage">
<form method="get" action="result.php">
<br><br><br><b>Input your word: <b> <input type="text" name="name"> <br>
<button type="submit" > submit</button>

</form>
</article>
</body>

</html>
