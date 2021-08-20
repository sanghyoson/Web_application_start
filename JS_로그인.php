<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
</head>
<body>
   <script type="text/javascript">

    password = prompt("비밀번호");
    while(password != '상효')
    {
      password = prompt("다시 입력하세요");
    }
    document.write("안녕    " + password +'!');
   </script>
</body>
</html>
