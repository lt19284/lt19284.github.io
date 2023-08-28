<?php
@include 'config.php';
$answers = array(
    '1' => array('To buy some ink'),
    '2' => array('The shop assistant'),
    '3' => array('To return the change to the shop assistant')
);

$score = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($answers as $key => $value) {
        if (isset($_POST[$key])) {
            $selectedAnswers = $_POST[$key];
            sort($selectedAnswers);
            if ($selectedAnswers == $value) {
                $score++;
            }
        }
    }
}
$sql = "INSERT INTO `nep2test` (`id`, `diem`) VALUES (NULL, '$score')";
if (mysqli_query($conn, $sql)) {
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>Test Nep 2</title>
</head><div class="header">
  <div>
      <h1 class="title1">ENGLISH FOR CHILDREN</h1>
      <div class="icon">
        <a href="home.php"><i class="fa-solid fa-house home"></i></a>
    </div>
  </div>
</div> <style>		
.header{
  background-color: #3b3890;
	color: #fffefd;
	padding: 10px 0;
	text-align: center;
  box-shadow: 0px 0px 5px 5px #9c9ca1;
}
.home{
  text-decoration: none;
  color: #fdfdfd;
  font-size: 50px;
}
.button{
  padding: 15px 25px ;
  border: 2px solid #333;
  border-radius: 20px;
  font-weight: bolder;
  text-decoration: none;
  display: flex;
  justify-content: center;
  margin-top: 20px;
  margin-bottom: 20px;
  color: rgb(250, 252, 251);
  background-color: #29c47b;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
.btn{
  border: none;
  padding: 0;
  background: none;
  color: white;
}
</style>
<br></html></br>
<body>
<div class="handsome">
  <div class="content">
      <div class="container">
         <div class="column">
           <center><img src="img/muado.jpg" alt=""style height="50%" width="50%"></center>
         </div>
      </div>
  </div>
</div>
<h1>NEP 2 :</h1>
<div class="doanvan">
<h2>One afternoon, I went to a shop to buy some ink. There was only one young shop assistant in it. He was reading a book.
    “I want to buy a bottle of ink”, I said. There was no answer. He was still going on reading his book. Then I asked again.
    He stood up and gave me a bottle of ink. When I was out of the shop, I found that the change he gave me was too much. So I went back to the shop. The man pulled a long face when he saw me again.
    “Now, what do you want to buy?”, he said angrily.
    “Nothing”, I said: “You gave me too much change just now. I want to give you back the money”.
     “Ah, ah, thank you”, the man said with a red face.</h2>
    <h2>QUESTION :</h2>
    <form method="post">
    <h2><label>1.Why do the " I " go to the store ?</label><br/>
      <input type="radio" name="1[]" value="To buy some ink">To buy some ink<br/>
      <input type="radio" name="1[]" value="To drink water">To drink water<br/>
      <input type="radio" name="1[]" value="To read a book">To read a book<br/></h2>
    <h2><label>2.Who does not reply him?</label><br/>
      <input type="radio" name="2[]" value="The dog" >The dog<br/>
      <input type="radio" name="2[]" value="The shop assistant">The shop assistant<br/>
      <input type="radio" name="2[]" value="A girl" >A girl<br/></h2>
    <h2><label>3.Why does he come back?</label><br/>
      <input type="radio" name="3[]" value="To return the change to the shop assistant">To return the change to the shop assistant<br/>
      <input type="radio" name="3[]" value="To go to the toilet">To go to the toilet<br/>
      <input type="radio" name="3[]" value="To find his money">To find his money<br/></h2>
      <div class="button">
          <button class="btn">SUBMIT</button>
      </div>
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Your score: $score / " . count($answers) . "</h2>";
}
?>
</body>
</html>