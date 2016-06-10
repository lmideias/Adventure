<!DOCTYPE html>
<html ng-app="testeApp">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro do Usuário</title>
        <link href="caduser.css" rel="stylesheet"/>
        <link href="/Content/bootstrap.css" rel="stylesheet"/>
        <script src="/Scripts/angular.js" ></script>
        <script src="/Views/usuario/userApp.js" ></script>
        
        
    </head>
    <body class="body-a" >
   
       
    <div class="cad-body">
            <div class="cad-termo container"> 
                <h3>Termo de Uso do site</h3><br />
                {{"Eun"}}
                <h5>Suas Imagens e videos</h5><br />
                 <h5>Suas Imagens e videos</h5><br />
                  <h5>Suas Imagens e videos</h5><br />
     
           </div>
        
        
        
        <div class="cad-usuario cad-container">
                      
            <form>
                <div ng-controller="userControl" class="cad-form">
                     <h4> {{2+2}} </h4><br />
                     <input type="text" class="form-control" ng-model="email" name="email" placeholder="Digite seu Email" /> <br />
                     <input type="text" class="form-control" ng-model="senha" name="senha" placeholder="Digite sua Senha" /><br />
                     <button type="submit" value="submit" ng-click="CadastroUser()" class="btn btn-success">Próximo</button>
                </div>
            </form>
        
        
        </div>
        
        
        
        <div class="cad-pessoa cad-container">
             
            <form >
               
                <div class="cad-form" ng-controller="userControl" ng-repeat="post in posts">
                      <div class="">
                        Codigo: {{post.userid}}
                      </div>
                       <div class="">
                         Email: {{post.email}}
                      </div>
                      <div class="">
                         Senha: {{post.senha}}
                      </div>
                     <div class="">
                         Ativo: {{post.ativo}}
                      </div>
                     <div class="">
                         Pessoa Id: {{post.pessoaId}}
                      </div>
                 </div>
                
                <div class="cad-form">
                <h4> Dados Pessoais </h4><br />
                <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                 <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <button type="submit" class="btn btn-success">Endereço</button>
                </div>
            </form>
        </div>
        <div class="cad-endereco cad-container"> 
             <form action="" method="post">
                <div class="cad-form">
                <h4> Endereço </h4><br />
                 <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                 <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <button type="submit" class="btn btn-success">Endereço</button>
                </div>
            </form>
        
        </div>
        <div class="cad-contato cad-container"> 
            
             <form action="" method="post">
                <div class="cad-form">
                <h4> Contatos de Emergencia </h4><br />
                 <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                 <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha" /><br />
                <button type="submit" class="btn btn-success">Endereço</button>
                </div>
            </form>
        </div>
        <div class="cad-experiencia cad-container">Experiencia </div>
        
        </div>            
        
        
    </body>
</html>
