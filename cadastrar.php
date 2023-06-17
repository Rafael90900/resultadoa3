<style>
      body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, purple, black);
        }
        center{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 75px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 10px;
            border: none;
            outline: none;
            font-size: 13px;
            border-radius: 10px;
        }
        input[type=submit] {
            background-color: white;
            border: none;
            padding: 10px;
            width: 50%;
            border-radius: 10px;
            font-size: 13px;
            
        }
        input[type=submit]:hover {
            background-color: rgb(73, 2, 73);
            cursor: pointer;
        }
</style>
<html>

<body>
    <center>
      <h1>Cadastre-se</h1>
  <form id="cadastro" action="cadastro.php" method="POST">
    Nome: <input type="text" name="nome" required><br><br>
    Login: <input type="text" name="login" required><br><br>
    Senha: <input type="password" name="senha" required><br><br>
    <input type="submit" id="cadastrar" value="cadastrar">
  </form>

    </center>
</body>
</html>