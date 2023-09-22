<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>API COMPLETO</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styls.css" media="screen" />
  </head>
<style>
    .botoes{
    border: 0.5px;
    background-color: rgba(255, 255, 255, 0)!important;
}

.div2 {
    
    height: 30em; 
    overflow: hidden;
    text-overflow: ellipsis; 
    
}

</style>
  <body>
    <!-- inicio menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-translucent">
      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto"></ul>
        <form class="form-inline my-2 my-lg-0" style="margin-left: 50px; width: 30%;">
          <input
            id="textinput"
            name="textinput"
            class="form-control mr-sm-2"
            placeholder="Pesquisar livro"
          />
        </form>
        <button
        style="margin-left: 100px;"
        name="busca"
        id="busca"
          class="btn btn-outline-success my-2 my-sm-0"
          type="submit"
          onclick="Busca()";        
        >
          Buscar
        </button>
        <button
          class="btn btn-outline-success my-2 my-sm-0"
          type="submit"
          onclick="Limpar()"
          style="margin-left: 20px;"
        >
          Limpar
        </button>
      </div>
    </nav>
    <!-- inicio div livros -->
<!-- Large modal -->
<div class="modal fade bd-example-modal-lg0 " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="container">
        <div class="row">
          <center><div class="col-9"><h1 id="0t" ></h1></div></center>
          <div class="col-4"><img id="0f" style=" min-height:  500px; "></div>
          <div class="col-6"><p id="0m"><p id="0d"class="div2"></p>
            <div class="container text-center">
              <div class="row">
                <div class="col-6"><a href="#" class="myButton">Requisitar</a></div>
                <div class="col-6"><a href="#" class="myButton">Classificar</a></div>
              </div>
            </div></div>
        </div>
      </div>
      </div>
      <div class="clearfix">
        </p>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg1 " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="row">
        <center> <div class="col-9"><h1 id="1t"></h1></div></center>
      <div class="col-4"><img id="1f"style=" min-height:  500px; "></div>
      <div class="col-6"><p id="1m"><p id="1d" class="div2"></p>
        <div class="container text-center">
          <div class="row">
            <div class="col-6"><a href="#" class="myButton">Requisitar</a></div>
            <div class="col-6"><a href="#" class="myButton">Classificar</a></div>
          </div>
        </div></div>
    </div>
  </div>
  </div>
      </div>
      <div class="clearfix">
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg2 " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="row">
        <center> <div class="col-9"><h1 id="2t"></h1></div></center>
        <div class="col-4"><img id="2f" style=" min-height:  500px; max-width:  330px;  "></div>
        <div class="col-6"><p id="2m"><p id="2d" class="div2"></p><div class="container text-center">
          <div class="row">
            <div class="col-6"><a href="#" class="myButton">Requisitar</a></div>
            <div class="col-6"><a href="#" class="myButton">Classificar</a></div>
          </div>
        </div></div>
      </div>
    </div>
    </div>
        </div>
      <div class="clearfix">  
      </div>
    </div>
    </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg3 " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="clearfix">
        <div class="row">
          <center>   <div class="col-9"><h1 id="3t"></h1></div></center>
          <div class="col-4"><img id="3f" style=" min-height:  500px; max-width:  330px;  "></div>
          <div class="col-6"><p id="3m"><p id="3d" class="div2"></p>
            <div class="container text-center">
              <div class="row">
                <div class="col-6"><a href="#" class="myButton">Requisitar</a></div>
                <div class="col-6"><a href="#" class="myButton">Classificar</a></div>
              </div>
            </div></div>
        </div>
      </div>
      </div>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg4 " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="clearfix">
        <div class="row">
          <center>   <div class="col-9"><h1 id="4t"></h1></div></center>
          <div class="col-4"><img id="4f" style=" min-height:  500px; max-width:  330px;  "></div>
          <div class="col-6"><p id="4m"><p id="4d" class="div2"></p>
            <div class="container text-center">
              <div class="row">
                <div class="col-6"><a href="#" class="myButton">Requisitar</a></div>
                <div class="col-6"><a href="#" class="myButton">Classificar</a></div>
              </div>
            </div>
          </div>
        </div>
        </div></div>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg5 " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="clearfix">
        <div class="row">
          <center> <div class="col-9"><h1 id="5t"></h1></div></center>
          <div class="col-4"><img id="5f" style=" min-height:  500px;  max-width:  330px; " ></div>
          <div class="col-6"><p id="5m"><p id="5d" class="div2" ></p>
            <div class="container text-center">
              <div class="row">
                <div class="col-6"><a href="#" class="myButton">Requisitar</a></div>
                <div class="col-6"><a href="#" class="myButton">Classificar</a></div>
              </div>
            </div>
          </div>
        </div>
        </div></div>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg6 " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="clearfix">
        <div class="row">
          <center>  <div class="col-9"><h1 id="6t"></h1></div></center>
          <div class="col-4"><img id="6f" style=" min-height:  500px; max-width:  330px;  "></div>
          <div class="col-6"><p id="6m"><p id="6d" class="div2"></p>
            <div class="container text-center">
              <div class="row">
                <div class="col-6"><a href="#" class="myButton">Requisitar</a></div>
                <div class="col-6"><a href="#" class="myButton">Classificar</a></div>
              </div>
            </div>
          </div>
        </div>
        </div></div>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg7 " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="clearfix">
        <div class="row">
          <center>  <div class="col-9"><h1 id="7t"></h1></div></center>
          <div class="col-4"><img id="7f" style=" min-height:  500px; max-width:  330px;  "></div>
          <div class="col-6"><p id="7m"><p id="7d" class="div2"></p>
            <div class="container text-center">
              <div class="row">
                <div class="col-6"><a href="#" class="myButton">Requisitar</a></div>
                <div class="col-6"><a href="#" class="myButton">Classificar</a></div>
              </div>
            </div>
          </div>
        </div>
        </div></div>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg8 " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="clearfix">
        <div class="row">
          <center>   <div class="col-9"><h1 id="8t"></h1></div></center>
          <div class="col-4"><img id="8f" style="min-height:  500px; max-width:  330px; "></div>
          <div class="col-6"><p id="8m"><p id="8d" class="div2"></p>
            <div class="container text-center">
              <div class="row">
                <div class="col-6"><a href="#" class="myButton">Requisitar</a></div>
                <div class="col-6"><a href="#" class="myButton">Classificar</a></div>
              </div>
            </div>
          </div>
        </div>
        </div></div>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg9 " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="clearfix">
        <div class="row">
          <center>  <div class="col-9"><h1 id="9t"></h1></div></center>
          <div class="col-4"><img id="9f" style=" min-height:  500px; max-width:  330px; " ></div>
          <div class="col-6"><p id="9m"><p id="9d" class="div2"></p>
            <div class="container text-center">
              <div class="row">
                <div class="col-6"><a href="#" class="myButton">Requisitar</a></div>
                <div class="col-6"><a href="#" class="myButton">Classificar</a></div>
              </div>
            </div>
          </div>
        </div>
        </div></div>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- modal -->
    <div class="container text-center" style="display:none" id="div" >
      <div class="row row-cols-4">
      <button type="button" onclick="zero()" data-toggle="modal" data-target=".bd-example-modal-lg0" class="botoes">
        <div class="col">
          <img id="0" />
          <p id="0p" ></p>
        </div></button>
        <button type="button"  onclick="um()" data-toggle="modal" data-target=".bd-example-modal-lg1" class="botoes">
        <div class="col">
          <img id="1"/>
          <p id="1p"></p>
        </div></button>
        <button type="button"  onclick="dois()" data-toggle="modal" data-target=".bd-example-modal-lg2" class="botoes">
        <div class="col">
          <img id="2" />
          <p id="2p"></p>
        </div></button>
        <button type="button"  onclick="tres()" data-toggle="modal" data-target=".bd-example-modal-lg3" class="botoes">
        <div class="col">
          <img id="3" />
          <p id="3p"></p>
        </div></button>
        <button type="button"  onclick="quatro()" data-toggle="modal" data-target=".bd-example-modal-lg4" class="botoes">
        <div class="col">
          <img id="4" />
          <p id="4p"></p>
        </div></button>
        <button type="button"  onclick="cinco()" data-toggle="modal" data-target=".bd-example-modal-lg5" class="botoes">
        <div class="col">
          <img id="5" />
          <p id="5p"></p>
        </div></button>
        <button type="button"  onclick="seis()" data-toggle="modal" data-target=".bd-example-modal-lg6" class="botoes">
        <div class="col">
          <img id="6" />
          <p id="6p"></p>
        </div></button>
        <button type="button"  onclick="sete()" data-toggle="modal" data-target=".bd-example-modal-lg7" class="botoes">
        <div class="col">
          <img id="7" />
          <p id="7p"></p>
        </div></button>
        <button type="button"  onclick="oito()" data-toggle="modal" data-target=".bd-example-modal-lg8" class="botoes">
        <div class="col">
          <img id="8" />
          <p id="8p"></p>
        </div></button>
        <button type="button"  onclick="nove()" data-toggle="modal" data-target=".bd-example-modal-lg9" class="botoes">
        <div class="col">
          <img id="9" />
          <p id="9p"></p>
        </div></button>
      </div>
    </div>
        <!-- inicio div -->
    <script>
  document.addEventListener("keydown", function(e) {
  if(e.keyCode === 13) {
    e.preventDefault();
  }
});
   function zero(){
document.getElementById("modalp").innerHTML = document.getElementById("0p").innerHTML;
}
function um(){
document.getElementById("modalp").innerHTML = document.getElementById("1p").innerHTML;
}
function dois(){
document.getElementById("modalp").innerHTML = document.getElementById("2p").innerHTML;
}
function tres(){
document.getElementById("modalp").innerHTML = document.getElementById("3p").innerHTML;
}
function quatro(){
document.getElementById("modalp").innerHTML = document.getElementById("4p").innerHTML;
}
function cinco(){
document.getElementById("modalp").innerHTML = document.getElementById("5p").innerHTML;
}
function seis(){
document.getElementById("modalp").innerHTML = document.getElementById("6p").innerHTML;
}
function sete(){
document.getElementById("modalp").innerHTML = document.getElementById("7p").innerHTML;
}
function oito(){
document.getElementById("modalp").innerHTML = document.getElementById("8p").innerHTML;
}
function nove(){
document.getElementById("modalp").innerHTML = document.getElementById("9p").innerHTML;
}
console.log(asa);
      function Limpar() {
        window.location.reload();
      }
      function Busca() {
        var x = document.getElementById("div");
 x.style.display = "block";
        let valor = document.getElementById("textinput").value;
        let resposta =
          "https://www.googleapis.com/books/v1/volumes?q=" +
          valor +
          "&callback=handleResponse";
        document.getElementById("resposta").setAttribute("src", resposta);
      }
      function handleResponse(response) {
        for (var i = 0; i < response.items.length; i++) {
          var item = response.items[i];
          document.getElementById(i.toString() + "t").innerHTML +=
            item.volumeInfo.title
            ;
          document.getElementById(i.toString() + "m").innerHTML +=
            "<br> AUTOR: ".bold() +
            item.volumeInfo.authors
            ;
          document.getElementById(i.toString() + "p").innerHTML +=
            "TITULO: ".bold() +
            item.volumeInfo.title+
            "<br> AUTOR: ".bold() +
            item.volumeInfo.authors
            ;
          //document.getElementById("content").innerHTML += i + "<br>" + item.volumeInfo.title + "<br> AUTOR: "+ item.volumeInfo.authors + "<br>"      ;
          var r = i + 1;
         var asa;
         try {  
          document.getElementById(i.toString() + "d").innerHTML = "Descrição: ".bold() + item.volumeInfo.description +"..." + "<br>"  ;
        } catch (error) {  
          document.getElementById(i.toString() + "d").innerHTML = "sem descrição" + "<br>";
} 
    // document.getElementById(i.toString() + "f").innerHTML += item.volumeInfo.imageLinks.thumbnail;
    try {  
      console.log(item.volumeInfo.imageLinks.thumbnail);
document.getElementById(i.toString() + "f").setAttribute("src", item.volumeInfo.imageLinks.thumbnail);
        } catch (error) {  
         document.getElementById(i.toString() + "f").setAttribute("src", 'nofoto.png');
} 
        try {  
document.getElementById(i.toString()).setAttribute("src", item.volumeInfo.imageLinks.thumbnail);
        } catch (error) {  
         document.getElementById(i.toString()).setAttribute("src", 'nofoto.png');
} 
//asdasdsadsa
          document.getElementById("resul").innerHTML = "resultados " + r;   
      /////AS
        }
}
    </script>
      <script id="resposta"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <center><footer> <p id="resul"></p></footer></center>
  </body>
</html>
