<?php

namespace Dystore\Newsletter\Domain\Newsletter\JsonApi\V1;

use Dystore\Api\Domain\JsonApi\Resources\JsonApiResource;
use Illuminate\Http\Request;

class NewsletterResource extends JsonApiResource
{
    /**
     * Get the resource's attributes.
     *
     * @param  Request|null  $request
     */
    public function attributes($request): iterable
    {
        return parent::attributes($request);
    }
}
