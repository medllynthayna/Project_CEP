<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
input {
    width: 30%;
    border: 0;
    padding: 10px;
    font-size: 1.3em;
    color: #687f7f;
    
}
.btnInput {
    width: 150px;
    float:right;
    display: inline;
    border: 0;
    padding: 20px;
    font-size: 1.3em;
    background-color: rgb(116, 115, 115);
}
.btnInput:hover {
    padding: 20px;
    margin: 0px;
    border: 0px;
}


</style>
</head>
<body>
<div class="barraTop">
<nav class="marginPrincipal">

</nav>
<h3>Pesquisar Cep</h3>
</div>

<form action="/" method="GET">

<div class="form-group">
<label for="exampleInputEmail1">CEP : </label>
<input type="text" onchange="getCep()"  class="input"  name="codCep" id="codCep" placeholder="Digite o CEP ">
</div>

<div class="form-group">
<label for="text">Logradouro : </label>
<input type="text"  class="input" name="logradouro" id="logradouro" >
</div>

<div class="form-group">
<label for="text">Complemento : </label>
<input type="text"  class="input" name="complemento" id="complemento" >
</div>

<div class="form-group">
<label for="text">Bairro : </label>
<input type="text"  class="input" name="bairro" id="bairro" >
</div>

<div class="form-group">
<label for="text">Localidade :</label>
<input type="text"   class="input" name="localidade" id="localidade" >
</div>

<div class="form-group">
<label for="text">Estado : </label>
<input type="text"   class="input" name="uf" id="uf" >
</div>
</div>
<button type="submit" class="btn btn-primary mb-2">Pesquisar</button>

</form>
</body>


<script
src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>


$( document ).ready(function() {
});

function getCep(){
    var cep = $("#codCep").val();
    $.ajax({
        url: "https://viacep.com.br/ws/"+ cep +"/json/", 
        success: function(result){
            $("#logradouro").val(result.logradouro);
            $("#complemento").val(result.complemento);
            $("#bairro").val(result.bairro);
            $("#localidade").val(result.localidade);
            $("#uf").val(result.uf);
        }});
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </script>