<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "",

		//商户私钥，您的原始格式RSA私钥
		'merchant_private_key' => "",
		
		//异步通知地址
		'notify_url' => "http://工程公网访问地址/alipay.trade.wap.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://mitsein.com/alipay.trade.wap.pay-PHP-UTF-8/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAglSXeuFYqbDkdz8sHLXWRZCXPzkbGY6cpAslY48w9bnJcq/ExFpI6gNLiIzOCldlep4nDW/UjuGnmKvvdqkAN0z1PrzPC+QzGN0fIUM4CUrvOIlsfHIz0eh2MhHu8J/bT2ka/sQdJbOsShiFf1f+nQrY8WItPb71+XoZ6x+St+T4lD+s3rRBhvKoJejxfnXE04C2AN59mhlM8V2eIXXVPinT9P8/EZyE5/3bJebl56exQREpBdUCKDqy4Z69EGIkid/ccYuOrVvf+SjPcBpOH+EfwqGxumjy285tLAGfw86/lV+VmU9Qiku897XAh9llXLbhiHqnCW7721UguOGQ2QIDAQAB",
		
	
);