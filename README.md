# Módulo de integração para Correios compatível com Magento 2.x

[![N|Solid](http://www.imaginationmedia.com.br/static/version1515793477/frontend/ImaginationMedia/modern/pt_BR/images/logo.svg)](https://www.imaginationmedia.com.br/)

Este é um módulo gratuito para Magento 2, fornecendo um método de envio para armazenar calculando o custo de envio com o serviço dos Correios.

Você pode obter o preço, dias de entrega para muitas faixas de CEP e armazenar os valores offline, e se os webservices dos Correios falharem você pode calcular usando os dados offline. Você pode configurar um intervalo em dias para a atualização da loja automaticamente com o cron o código postal offline rastreia os dados.

Esta extensão foi originalmente desenvolvida e mantida por Imagination Media (https://bitbucket.org/imagination-media/correios).

A instalação está disponível de 2 formas:
  - Composer
  - Upload dos Arquivos

### Instalação

Via composer:

Você deve acessar o ssh e também a pasta aonde está os arquivs do magento 2. Depois digitar esses comandos:
```
composer require nltecnologia/magento-correios
php bin/magento setup:upgrade

```

#### License


OSL 3.0


**Free Software**

 IMAGINATION MEDIA http://www.imaginationmedia.com.br/