# laravel-api-demo
laravel 5.4 + JWT + Dingo RESTful API demo

	1.git clone https://github.com/osca0912/laravel-api-demo.git
	2.cp .env.example .env
	3.Modify your local database configuration(修改本地数据库配置)
	4.php artisan serve(设置虚拟机者请忽略此命令)
	5.php artisan migrate(生成数据表)

#API 说明

	#注册接口 POST
	your domain name/api/user/register
	form-data: email,password,name

	#登录接口 POST
	your domain name/api/user/login
	form-data: email,password,

	#查看用户信息 GET
	your domain name/api/user/me?token=your token 