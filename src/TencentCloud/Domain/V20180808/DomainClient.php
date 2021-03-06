<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TencentCloud\Domain\V20180808;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Domain\V20180808\Models as Models;

/**
 * @method Models\BatchModifyDomainInfoResponse BatchModifyDomainInfo(Models\BatchModifyDomainInfoRequest $req) 本接口 ( BatchModifyDomainInfo ) 用于批量域名信息修改 。

默认接口请求频率限制：20次/秒。
 * @method Models\CheckBatchStatusResponse CheckBatchStatus(Models\CheckBatchStatusRequest $req) 本接口 ( CheckBatchStatus ) 用于查询批量操作日志状态 。

默认接口请求频率限制：20次/秒。
 * @method Models\CheckDomainResponse CheckDomain(Models\CheckDomainRequest $req) 检查域名是否可以注册。
 * @method Models\CreateDomainBatchResponse CreateDomainBatch(Models\CreateDomainBatchRequest $req) 本接口 ( CreateDomainBatch ) 用于批量注册域名 。

默认接口请求频率限制：20次/秒。
 * @method Models\CreateTemplateResponse CreateTemplate(Models\CreateTemplateRequest $req) 本接口 ( CreateTemplate ) 用于添加域名信息模板 。

默认接口请求频率限制：20次/秒。
 * @method Models\DeleteTemplateResponse DeleteTemplate(Models\DeleteTemplateRequest $req) 本接口 ( DeleteTemplate ) 用于删除域名信息模板。

默认接口请求频率限制：20次/秒。
 * @method Models\DescribeDomainBaseInfoResponse DescribeDomainBaseInfo(Models\DescribeDomainBaseInfoRequest $req) 本接口 (  DescribeDomainBaseInfo) 获取域名基础信息。

默认接口请求频率限制：20次/秒。

 * @method Models\DescribeDomainNameListResponse DescribeDomainNameList(Models\DescribeDomainNameListRequest $req) 本接口 (  DescribeDomainNameList ) 获取域名列表。

默认接口请求频率限制：20次/秒。

 * @method Models\DescribeDomainPriceListResponse DescribeDomainPriceList(Models\DescribeDomainPriceListRequest $req) 按照域名后缀获取对应的价格列表
 * @method Models\DescribeTemplateListResponse DescribeTemplateList(Models\DescribeTemplateListRequest $req) 本接口 (DescribeTemplateList) 用于获取模板列表。

默认接口请求频率限制：20次/秒。

 * @method Models\ModifyDomainDNSBatchResponse ModifyDomainDNSBatch(Models\ModifyDomainDNSBatchRequest $req) 本接口 ( ModifyDomainDNSBatch) 用于批量修改域名DNS信息 。

默认接口请求频率限制：20次/秒。
 * @method Models\ModifyDomainOwnerBatchResponse ModifyDomainOwnerBatch(Models\ModifyDomainOwnerBatchRequest $req) 本接口 ( ModifyDomainOwnerBatch) 用于域名批量账号间转移 。

默认接口请求频率限制：20次/秒。
 * @method Models\RenewDomainBatchResponse RenewDomainBatch(Models\RenewDomainBatchRequest $req) 本接口 ( RenewDomainBatch ) 用于批量续费域名 。

默认接口请求频率限制：20次/秒。

 * @method Models\SetDomainAutoRenewResponse SetDomainAutoRenew(Models\SetDomainAutoRenewRequest $req) 本接口 ( SetDomainAutoRenew ) 用于设置域名自动续费。

默认接口请求频率限制：20次/秒。
 * @method Models\TransferInDomainBatchResponse TransferInDomainBatch(Models\TransferInDomainBatchRequest $req) 本接口 ( TransferInDomainBatch ) 用于批量转入域名 。

默认接口请求频率限制：20次/秒。
 * @method Models\TransferProhibitionBatchResponse TransferProhibitionBatch(Models\TransferProhibitionBatchRequest $req) 本接口 ( TransferInDomainBatch ) 用于批量禁止域名转移 。

默认接口请求频率限制：20次/秒。
 * @method Models\UpdateProhibitionBatchResponse UpdateProhibitionBatch(Models\UpdateProhibitionBatchRequest $req) 本接口 ( UpdateProhibitionBatch ) 用于批量设置禁止域名更新 。

默认接口请求频率限制：20次/秒。
 * @method Models\UploadImageResponse UploadImage(Models\UploadImageRequest $req) 本接口 ( UploadImage ) 用于上传资质照片 。

默认接口请求频率限制：20次/秒。
 */

class DomainClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "domain.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2018-08-08";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("domain")."\\"."V20180808\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
