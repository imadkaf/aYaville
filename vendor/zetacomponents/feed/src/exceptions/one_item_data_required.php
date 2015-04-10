<?php
/**
 * File containing the ezcFeedAtLeastOneItemDataRequiredException class.
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @package Feed
 * @version //autogentag//
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @filesource
 */

/**
 * Thrown when at least one of the required attributes is missing for a feed
 * item.
 *
 * @package Feed
 * @version //autogentag//
 */
class ezcFeedAtLeastOneItemDataRequiredException extends ezcFeedException
{
    /**
     * Constructs a new ezcFeedAtLeastOneItemDataRequiredException.
     *
     * @param array(string) $attributes The attributes of which at least one is required
     */
    public function __construct( $attributes )
    {
        $attributes = implode( ', ', $attributes );
        parent::__construct( "At least one of these elements is required: {$attributes}." );
    }
}
?>
