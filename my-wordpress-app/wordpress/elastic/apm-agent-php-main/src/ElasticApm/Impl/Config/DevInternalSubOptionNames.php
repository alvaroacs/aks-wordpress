<?php

/*
 * Licensed to Elasticsearch B.V. under one or more contributor
 * license agreements. See the NOTICE file distributed with
 * this work for additional information regarding copyright
 * ownership. Elasticsearch B.V. licenses this file to you under
 * the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

declare(strict_types=1);

namespace Elastic\Apm\Impl\Config;

use Elastic\Apm\Impl\Util\StaticClassTrait;

/**
 * Code in this file is part of implementation internals and thus it is not covered by the backward compatibility.
 *
 * @internal
 */
final class DevInternalSubOptionNames
{
    use StaticClassTrait;

    public const DROP_EVENT_AFTER_END = 'drop_event_after_end';
    public const DROP_EVENTS_BEFORE_SEND_C_CODE = 'drop_events_before_send_c_code';
    public const GC_COLLECT_CYCLES_AFTER_EVERY_TRANSACTION = 'gc_collect_cycles_after_every_transaction';
    public const GC_MEM_CACHES_AFTER_EVERY_TRANSACTION = 'gc_mem_caches_after_every_transaction';
}
