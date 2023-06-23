Risecore Technologies Pvt.Ltd.
<a href="https://risecommerce.com/"><img width="830" height="208" src="https://risecommerce.com/media/wysiwyg/riselogoOld.svg"></a>

##WhatsApp Chat Extension

<a href="https://risecommerce.com/magento2-whatsapp-chat-integration.html"><img width="190" height="70" src="https://risecommerce.com/media/wysiwyg/risedownload.png"></a>


This extension is a perfect tool for store visitors to communicate instantly with the admin regarding any inquiries, queries, guidance service via WhatsApp ..

Demo Links
Frontend Demo Link: <a href="https://demo.risecommerce.com/"> Open </a>


Backend Demo Link: <a href="https://demo.risecommerce.com/admindemo"> Open </a>

Username: whatsapp_user

Password: Test@123

##Support: 
version - 2.3.*,2.4.*

##How to install Extension

<h4>Method I:</h4>
1. Download the archive file.
2. Unzip the file
3. Create a folder [Magento_Root]/app/code/Risecommerce/WhatsAppChat
4. Drop/move the unzipped files to directory '[Magento_Root]/app/code/Risecommerce/WhatsAppChat'

<h4>Method II:</h4>

Using Composer

```
 composer require risecommerce/whatsapp-chat-extension
```

<h4>Enable Extension:</h4>

```
 php bin/magento module:enable Risecommerce_WhatsAppChat
 php bin/magento setup:upgrade
 php bin/magento cache:clean
 php bin/magento setup:static-content:deploy
 php bin/magento cache:flush
```

<h4>Disable Extension:</h4>

```
 php bin/magento module:disable Risecommerce_WhatsAppChat
 php bin/magento setup:upgrade
 php bin/magento cache:clean
 php bin/magento setup:static-content:deploy
 php bin/magento cache:flush
```

 <h3>Configuration:</h3>
<img width="830" height="430" src="https://risecommerce.com/media/wysiwyg/WhtsappConf.png">
