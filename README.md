
Passor para iniciar o projeto:
 
 - php artisan migrate
 - php artisan migrate:fresh --seed
 
 
 
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
  




