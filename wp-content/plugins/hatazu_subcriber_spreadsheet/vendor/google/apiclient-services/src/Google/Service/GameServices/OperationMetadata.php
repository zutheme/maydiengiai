<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_GameServices_OperationMetadata extends Google_Collection
{
  protected $collection_key = 'unreachable';
  public $apiVersion;
  public $createTime;
  public $endTime;
  protected $operationStatusType = 'Google_Service_GameServices_OperationStatus';
  protected $operationStatusDataType = 'map';
  public $requestedCancellation;
  public $statusMessage;
  public $target;
  public $unreachable;
  public $verb;

  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  public function getApiVersion()
  {
    return $this->apiVersion;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * @param Google_Service_GameServices_OperationStatus
   */
  public function setOperationStatus($operationStatus)
  {
    $this->operationStatus = $operationStatus;
  }
  /**
   * @return Google_Service_GameServices_OperationStatus
   */
  public function getOperationStatus()
  {
    return $this->operationStatus;
  }
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  public function setTarget($target)
  {
    $this->target = $target;
  }
  public function getTarget()
  {
    return $this->target;
  }
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  public function getUnreachable()
  {
    return $this->unreachable;
  }
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  public function getVerb()
  {
    return $this->verb;
  }
}
