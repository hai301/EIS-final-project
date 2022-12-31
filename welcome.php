<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
<link rel="stylesheet" href="alarm.css">
<link rel="stylesheet" href="NoteApp.css">
<link rel="stylesheet" href="weather.css">
<link rel="stylesheet" href="todolist.css">
    <title>EIS final project</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . " to my final EIS project</h1>"; ?>
    <hr>
    <section class="container-clock">
        <div id="clock"></div>
        <input onchange="setAlarmTime(this.value)" name="alarmTime" type="datetime-local">
        <div class="controls">
            <button onclick="setAlarm()" class="button set-alarm">Set alarm</button>
            <button onclick="clearAlarm()" class="button clear-alarm">Clear alarm</button>
        </div>
    </section>
    <script src="alarm.js"></script>
    <br>
    <!-- todo list app -->
    <div class="wrapper">
    <header>Todo App</header>
    <div class="inputField">
      <input type="text" placeholder="Add your new todo">
      <button>+<i class="fas fa-plus"></i></button>
    </div>
    <ul class="todoList">
      <!-- data are comes from local storage -->
    </ul>
    <div class="footer">
      <span>You have <span class="pendingTasks"></span> pending tasks</span>
      <button>Clear All</button>
    </div>
  </div>
  <script src="todolist.js"></script>
    
   <br>
    <!--Sticky Note App-->
    <h2>This is a sticky note. Note here!</h2>
    <div id="app"><button class="add-note" >+</button></div>
    <script src="NoteApp.js"></script>
    
    <h2>For Python learning</h2>
    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/XKHEtdqhLK8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br>
    <br>
    <br>
    <h2> For PHP learning </h2>
    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/OK_JCtrrv-c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br>
    <br>
    <br>
    <h2>For R learning </h2>
    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/_V8eKsto3Ug" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br>
    <br>
    <br>
    <h2> For Testing Software learning</h2>
    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/sO8eGL6SFsA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br>
    
    
    <br>
    <br>
    <h2> This is location of Hanoi University</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14900.382231590916!2d105.78689778271624!3d20.98880631148118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135adb29ed54487%3A0xbe22035eae87b5d7!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1638694648734!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
    <br>
    <br>
    <a class="logout" href="logout.php">Logout</a>
    <br>
</body>
</html>