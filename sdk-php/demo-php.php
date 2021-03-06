<?php
//
// Akaxin
// ====
//
// > Github: https://github.com/akaxincom/openzaly
// > 扩展体验：下载阿卡信客户端，访问 demo.akaxin.com 站点
//
// 如需帮助，请进我们的QQ群咨询：655249600
//
//

// 初始化设置
// =========
// 本源码以获取用户Profile接口为例
$innerApiHost = "127.0.0.1";        // 对应启动服务器时的 -Dhttp.address 参数
$innerApiPort = 8280;               // 对应启动服务器时的 -Dhttp.port 参数
$pluginAuthKey = "SgG64DAKUhS2eroo";// 管理平台->扩展列表，点击相应的扩展获取。
$pluginId = 3;


require_once(__DIR__ . "/AkaxinPluginApiClient.php");
$akaxinApiClient = new AkaxinPluginApiClient($innerApiHost, $innerApiPort, $pluginId, $pluginAuthKey);


// 构造Request
// ==========
$siteUserIdForQuery = "63694fc0-7236-4dc8-aa3d-0956fa6d80c9";
$requestMessage = new Akaxin\Proto\Plugin\HaiUserProfileRequest();
$requestMessage->setSiteUserId($siteUserIdForQuery);


// 执行请求
// =======
$responseData = $akaxinApiClient->request("/hai/user/profile", $requestMessage);


// 处理返回逻辑
// ========
$userProfileResponse = new Akaxin\Proto\Plugin\HaiUserProfileResponse();
$userProfileResponse->mergeFromString($responseData);
$userProfile = $userProfileResponse->getUserProfile();

var_dump($userProfile->getSiteUserId(), $userProfile->getUserName());
