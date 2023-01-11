##WhatsApp Chat Extension

This extension is a perfect tool for store visitors to communicate instantly with the admin regarding any inquiries, queries, guidance and after-sale service..

##Support: 
version - 2.3.x, 2.4.x

##How to install Extension

Method I)
1. Download the archive file.
2. Unzip the file
3. Create a folder [Magento_Root]/app/code/Risecommerce/WhatsAppChat
4. Drop/move the unzipped files to directory '[Magento_Root]/app/code/Risecommerce/WhatsAppChat'

Method II)
Using Composer
  composer require risecommerce/whatsapp-chat-extension:1.0.1

#Enable Extension:
- php bin/magento module:enable Risecommerce_WhatsAppChat
- php bin/magento setup:upgrade
- php bin/magento cache:clean
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush

#Disable Extension:
- php bin/magento module:disable Risecommerce_WhatsAppChat
- php bin/magento setup:upgrade
- php bin/magento cache:clean
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush
