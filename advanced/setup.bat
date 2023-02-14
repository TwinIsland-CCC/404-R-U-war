@echo off
chcp 65001
start "composer install" cmd /k composer install --ignore-platform-reqs

echo ***重要***请等待composer install完成之后再进行下一步操作。

echo 另外，请确保本脚本中每一步都完整执行，否则系统可能不完全部署，这可以通过再次执行脚本解决。

call init.bat

echo 初始化成功。请输入数据库root用户的密码。   

@echo off
set "OldStr=%~dp0"
set "NewStr=%OldStr:\=/%"
set "main-local=%NewStr%common/config/main-local.php"

set "dbname=ru_war"


set /p password=请输入数据库root用户的密码:
set "qout_password='%password%'"

@echo off & setlocal enabledelayedexpansion 
for /f "eol=* tokens=*" %%i in (%main-local%) do ( 
set a=%%i 

set "a=!a:yii2advanced=%dbname%!" 
set "a=!a:''=%qout_password%!" 
echo !a!>>$
)
move $ %main-local%


mysql -u root -p -e "drop database if exists %dbname%; create database %dbname%; use %dbname%; source %NewStr%data/install.sql;"

echo 200 OK