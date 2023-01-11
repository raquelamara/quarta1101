<?php

if(isset( $ _POST [ 'enviar' ])){

/////

include_once ( 'config.php' );

$nome = $ _POST [ 'nome' ];
$email = $ _POST [ 'email' ];
$data_nasc = $ _POST [ 'data_nasc' ];
$genero = $ _POST [ 'genero' ];
$cpf = $ _POST [ 'cpf' ];

$resultado = mysqli_query( $ conexao , "INSERT INTO users(nome,email,data_nasc,genero,cpf) values(' $ nome ',' $ email ',' $ data_nasc ',' $ genero ', ' $ cpf ') ");

}

?>
<!DOCTYPE html >
<html  lang =" en " >
<head >
    <meta  charset =" UTF-8 " >
    <meta  http-equiv =" X-UA-Compatible " content =" IE=edge " >
    <meta  name =" janela de visualização " conteúdo =" largura=largura do dispositivo, escala inicial=1,0 " >
    <title > Aula 2 </title >
    <style >
        .box {
             position : absolute;
            
             transform : translate( -50 % , -50 % );
             background color : green;
         }

         .field {
             border : 1px solid #fff ;
             padding: 30px;
             alignment items: center;
             margin: 20px;
             display : online;
             border radius : 36px 35px 35px 10px ;
             -webkit-border-radius : 36px 35px 35px 10px ;
             -moz-border-radius : 36px 35px 35px 10px ;
         }
         .subtitle {
             color : #fff ;
             text alignment : center;
             display : flexible;
         }
         .Register {
             text-align : center;
             justify-content : center;
             align-items: center;
             margin: 0;
             display : flexible;
         }

         .inputUser {
             border radius: 10 px;
            
         }

         .input text {
             color : #fff ;
         }

         .submit button {
             justify-content : center;
             border radius: 15 px;
             display : flexible;
             padding: 5 px;
         }
    </style >
</head >
<body >
    <form  action =" index.php " method =" POST " >
        <div  class =" caixa " >
        <fieldset class =" campo " >
            <legend  class =" legend " > Banco Niterói </legend >
                <label  class =" cadastrar " > Cadastre-se </label >
                    <br >
                        <label  for =" nome " class =" inputtext " > Nome Completo </label >
                            <br >
                            <input  type =" text "   name =" nome " id =" nome " class =" inputUser " obrigatório />  
                            <br >
                            <br >
                        <label  for =" email " class =" inputtext " > email </label >
                            <br >
                            <input  type =" text "   name =" email " id =" email " class =" inputUser " obrigatório />  
                            <br >
                            <br >
                        <label  for =" data_nasc " class =" inputtext " > Data de Nascimento </label >
                            <br >    
                        <input  type =" date "   name =" data_nasc " id =" data_nasc " class =" inputUser " obrigatório />
                            <br >
                            
                        <p  class =" inputtext " > Gênero </p >
                            <input  type =" radio " id =" masculino "   name =" genero "   value =" masculino " obrigatório />
                            <label  for =" masculino " > masculino </label >
                            <br >
                            <input  type =" radio " id =" feminino "   name =" genero "   value =" feminino " obrigatório />
                            <label  for =" feminino " > feminino </label >
                            <br >
                            <input  type =" radio " id =" naores "   name =" genero "   value =" naores " obrigatório />
                            <label  for =" feminino " > prefiro nao responder </label >
                            <br >
                            <br >
                        <label  for =" cpf " class =" inputtext " > CPF </label >
                        <br >
                            <input  type =" text "   name =" cpf " id =" cpf " class =" inputUser " obrigatório />
                            <br >
                            <br >
                            <input  type =" submit " name =" submit " id =" submit " class =" submit-button "/>
            
        </fieldset >
        </div >
    </forma >

</body >
</html >

