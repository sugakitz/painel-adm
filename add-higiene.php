<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Adicionar higiene pessoaal</title>
</head>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<body>
     <header class="cabecalho"> 
       <img class="cabecalho-imagem" src="image/logovr_colorido.png">
         <nav class="cebecalho-menu">
            <a class="cabecalho-pag" href="add-categorias.html">Categorias</a>
         </nav>
     </header>
     <div class="linha"></div>
       
     <div id="adicionar-container">
        <h1 class="">Adicionar higiene pessoal </h1>
         <form action="#" method="POST">

            <label for="nome">Nome</label>
              <input type="text" name="nome" id="nome" placeholder="Digite o nome do produto" autocomplete="off" required>

            <label for="subtitulo">Subtitulo</label>
               <input for="a" name="subtitulo" id="subtitulo" placeholder="Digite o subtitulo do produto" required>

            <label for="marca">Marca</label>
               <input type="text" for="marca" name="marca" id="marca" placeholder="Digite a marca do produto" required>

            <label for="Validade">Validade</label>
               <input type="date" for="validade" name="validade" id="validade" placeholder="Digite a validade do produto" required>

            <label for="fabricacao">Fabricacao</label>
               <input type="date" for="fabricacao" name="fabricacao" id="fabricacao" placeholder="Digite a fabricacao do produto" required>

            <label for="descricao">Descricao</label>
                <input type="text" for="descricao" name="descricao" id="descricao" placeholder="Digite a descricao do produto">

            <label for="categoria">Categoria</label>
                <input type="number" for="categoria" name="categoria" id="categoria" placeholder="Selecione a categoria do produto">

            <label for="apresentacao">Apresentacao</label>
                <input type="text" for="apresentacao" name="apresentacao" id="apresentacao" placeholder="Digite a presentacao do produto" required>

            <label for="preco">Preco</label>
               <input type="text" for="preco" name="preco" id="preco" placeholder="Digite o valor do produto" required>

            <input type="submit" name="btnadicionar" value="Adicionar">
           
         </form>
    </div>
     <br>
     <br>
     <br>
     <br>
    <footer class="rodape">
    </footer>


 <style type="text/css">
     /* <label for="categoria">Categoria</label>
     <input for="categoria" name="categoria" id="categoria" placeholder="Digite a categoria do produto">*/
   *{
    margin:0;
    padding:0%;
    box-sizing: border-box;
    text-decoration: none;
    font-family: "Poppins", sans-serif;
    color:black;
    border:none;
}

body {
    font-size: 100%;
    background-color: #DCDCDC;
}

.cabecalho {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;
    padding: 24px;
}
 
.cabecalho-imagem {
    height: 72px;
}

/* .cabecalho-menu{
   display: flex;
   gap: 12px;
} */

.cabecalho-pag{
    color: rgb(4, 73, 25);
    /* font-weight: 400; */
    font-size: 18px;
}

a:hover {
    color:#3CB371; /*página inicial fica dessa cor*/
}

.linha{
    border-top: 0.4px solid rgb(4, 73, 25); /* linha */
    padding-top: 1px;
    color: white;
  /*margin-bottom: 16px;*/
}

/* Chrome/Opera/Safari */
::-webkit-input-placeholder { /*deixa o escrito do placeholder preto */
  color: black;
}

/*container adicionar */
#adicionar-container{
     background-color: white;
     width: 500px;
     margin-left: auto;
     margin-right: auto;
     padding: 10px 30px;
     margin-top: 10vh; /*a distancia entre o container e a linha*/
     border-radius: 10px; /*a redonda os cantos*/
     text-align: center;
 }

 /* formulario */    
 form {
     margin-top: 35px;
     margin-bottom: 40px;
 }

 label, input {
     display: block;
     width: 100%;
     text-align: left;
 }

 label {
     font-weight: bold;
 }

  /* area do digite informações  */
  input{
     border-bottom: 2px solid #015f40; 
     padding: 15px;
     font-size: 1rem;
     margin-bottom: 20px; 
 }


 input:focus { /* quando receber foco fica dessa cor*/
     border-bottom: 2px solid #3CB371;
 }

 /*adicionar*/
 input[type="submit"] {
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
    border: none;
    height: 40px;
    border: 20px;
    height: 40px;
    border-radius: 10px;
    margin-top: 3px;
    color: #015f40;
    cursor: pointer; 
 }
 
 input[type="submit"]:hover { /*botão adicionar*/
    background-color: rgb(60, 206, 113);
    transition: .5s;
 }

 .selecionar select {
background: transparent;
width: 403px;
color: black; /*ajustar cor*/
padding: 6px 6px 6px 6px;
font-size: 1rem;
line-height: 1;
height: 45px;
-webkit-appearance: none;}

.selecionar option { /*checar este tb*/
    height: 30px;
    border: 1px solid #cbcbcb;
 
    padding-top: 12px;
    
}

.selecionar {
    width: 100%;
    height: 80px;
    overflow: hidden;
    border-radius: 3px;
    margin-top: 20px;
    border-radius: 10px; /*a redonda os cantos*/
    text-align: center;
 }

 .rodape{
    display:flex;
    flex-direction: column;
    align-items: center;
    border-top: 0.4px solid rgb(4, 73, 25); /* linha */
    padding: 24px;
}

 </style>

