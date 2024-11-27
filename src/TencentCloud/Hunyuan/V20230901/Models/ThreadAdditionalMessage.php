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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话额外消息
 *
 * @method string getRole() 获取角色
 * @method void setRole(string $Role) 设置角色
 * @method string getContent() 获取内容
 * @method void setContent(string $Content) 设置内容
 * @method array getAttachments() 获取附件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachments(array $Attachments) 设置附件
注意：此字段可能返回 null，表示取不到有效值。
 */
class ThreadAdditionalMessage extends AbstractModel
{
    /**
     * @var string 角色
     */
    public $Role;

    /**
     * @var string 内容
     */
    public $Content;

    /**
     * @var array 附件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Attachments;

    /**
     * @param string $Role 角色
     * @param string $Content 内容
     * @param array $Attachments 附件
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Attachments",$param) and $param["Attachments"] !== null) {
            $this->Attachments = [];
            foreach ($param["Attachments"] as $key => $value){
                $obj = new ThreadMessageAttachmentObject();
                $obj->deserialize($value);
                array_push($this->Attachments, $obj);
            }
        }
    }
}