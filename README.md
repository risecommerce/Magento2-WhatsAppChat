Risecore Technologies Pvt.Ltd.
![image](https://github.com/risecommerce/Magento2-WhatsAppChat/assets/20417583/5c036715-f25a-47c0-be43-9291b43c604a)

##WhatsApp Chat Extension

This extension is a perfect tool for store visitors to communicate instantly with the admin regarding any inquiries, queries, guidance service via WhatsApp ..

Demo Links
Frontend Demo Link: https://demo.risecommerce.com/

Backend Demo Link: https://demo.risecommerce.com/admindemo/

Username: whatsapp_user

Password: Test@123

Buy Link : https://risecommerce.com/magento2-whatsapp-chat-integration.html

##Support: 
version - 2.3.*,2.4.*

##How to install Extension

Method I)
1. Download the archive file.
2. Unzip the file
3. Create a folder [Magento_Root]/app/code/Risecommerce/WhatsAppChat
4. Drop/move the unzipped files to directory '[Magento_Root]/app/code/Risecommerce/WhatsAppChat'

Method II)

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
``

 <h3>Configuration:</h3>
![image](https://github.com/risecommerce/Magento2-WhatsAppChat/assets/20417583/41672409-48a2-4ac7-ae29-7ea635d4f5fe)
