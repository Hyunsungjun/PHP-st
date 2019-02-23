<html>
<head>
<title>XSS</title>
</head>
<body>
    <h1>Cross site scripting</h1>
    <?php
    echo htmlspecialchars('<script>alert("dd");</script>');
    //스크립트를 char로 바꿔주는 함수
    ?>
</body>
</html>