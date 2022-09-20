# tibia-web realizado por Adam Everson

[![license](https://img.shields.io/github/license/daviduser/GraphQL-Cpp.svg)](https://github.com/adameverson/tibia-web)

* Magic Level v2.0.0 - Game Web semelhante ao Tibia

* Motivação: realizar um Tibia Web

[![image](https://user-images.githubusercontent.com/24993219/191139955-850b486d-ada6-45cb-bca2-d0fc2678499b.png)](https://magiclevel.ml)

# DEPLOY

https://magiclevel.ml

# FEATURES

* Implementação de funcionalidades semelhantes ao do Tibia

* Mais integração com o back-end

# Tibia
#### O desafio:
Implementação de funcionalidades semelhantes ao do Tibia
#### Características :
  - Diferencial Web
  - Animações
  - Usuários
 
#### Tecnologias:
  - PHP
  - Mysql
  - Ajax
  - JSON
  - HTML
  - Javascript
  - CSS

### Considerações
O conhecimento adquirido pode ser utilizado para novas aplicações

Período indeterminado

# README

This README would normally document whatever steps are necessary to get the
application up and running.

Things you may want to cover:

* Server PHP
* SQL Table
![image](https://user-images.githubusercontent.com/24993219/162581183-3b399bc6-162e-4ac7-a3e3-6bb39b05fe2a.png)
* SQL Code MySQL\
CREATE TABLE `ottibia` (\
 `id` int(11) NOT NULL AUTO_INCREMENT,\
 `username` varchar(20) NOT NULL,\
 `password` varchar(20) NOT NULL,\
 `online` bit(1) DEFAULT NULL,\
 `x` int(11) NOT NULL,\
 `y` int(11) NOT NULL,\
 `direcao` int(11) NOT NULL,\
 `nivel` int(11) NOT NULL,\
 `hp` int(11) NOT NULL,\
 `outfit` varchar(20) NOT NULL,\
 `mensagem` varchar(100) NOT NULL,\
 `json` varchar(150) NOT NULL,\
 PRIMARY KEY (`id`)\
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1
