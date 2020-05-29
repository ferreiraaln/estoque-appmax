
Versões:
PHP - 7.4.1
Laravel 7.0

Passor para iniciar o projeto:
 
 - php artisan migrate
 - php artisan migrate:fresh --seed
 
 
 
 Dados de Acesso:
 
 email - teste@gmail.com
 senha - 123456

 
 
 Api Endpoints:
   
  - POST -  cadastros de Produto
 {baseurl}/estoque-appmax/public/api/adicionar-produtos
 exemplo de corpo:
    {
	"states_id":2,
	"nome":"sdsds" ,
	"quantidade":200 ,
	"descricao":"asa"
    }
    
   PUT - baixa de Produto
    {baseurl}/estoque-appmax/public/api/baixar-produtos/1
  




