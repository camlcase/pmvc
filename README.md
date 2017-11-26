# pMVC
> pMVC is not a framework nor a class library. It´s a simple MVC model for the PHP plattform.

pMVC is a simple MVC model with structure and separate of concerns in mind. It does not contains all the fancy full-fledged framework stuffs like [Zend Framework](https://framework.zend.com "More about Zend Framework"), [CodeIgniter](https://www.codeigniter.com "More about CodeIgniter") or [Symfony](https://symfony.com "More about Symfony"). But it do contains models, views, controllers, helpers, class autoloading and controller-action-routing.

pMVC is running on PHP 5.6.31 and PHP 7 and above, but any future versions will be made for PHP 7.x only. You´ll find the documentation in the source.

## Usage
### Apache
To run pMVC - as is - on Apache, create a new folder named 'pmvc' in your server root www folder and copy all the files from the src repo folder. To run pMVC in another folder, you´ll have to change the APPLICATION_URI configuration setting to match that folder in the config.php.

*Delete the /Web.config file as it is only needed when running pMVC on Microsoft IIS.*

### Microsoft IIS
Create a new instance in IIS and copy all files from the src repo folder. You will need to remove the APPLICATION_URI configuration setting in the config.php or change the path to just a forward slash / - if running in server root. This setup works on Azure as well.

*Delete /.htaccess and /lib/.htaccess files as they are needed on Apache only.*

## Demo site
[Here](https://github.com/camlcase/pmvc-demo "pMVC demo site on GitHub") you´ll find a demo site built with pMVC, MySQL/MariaDB and Bootstrap.