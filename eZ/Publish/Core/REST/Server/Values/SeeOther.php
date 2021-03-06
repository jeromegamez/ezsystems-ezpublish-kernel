<?php

/**
 * File containing the SeeOther class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\Core\REST\Common\Value as RestValue;

class SeeOther extends RestValue
{
    public function __construct($redirectUri)
    {
        $this->redirectUri = $redirectUri;
    }
}
