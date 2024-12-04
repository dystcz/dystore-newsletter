<?php

namespace Dystore\Newsletter\Domain\Newsletter\Http\Controllers;

use Dystore\Api\Base\Controller;
use Dystore\Newsletter\Domain\Newsletter\Actions\SubscribeToNewsletter;
use Dystore\Newsletter\Domain\Newsletter\JsonApi\V1\NewsletterSubscriptionRequest;
use Illuminate\Http\Response;

class SubscribeToNewsletterController extends Controller
{
    /**
     * Subscribe to newsletter.
     */
    public function subscribe(
        NewsletterSubscriptionRequest $request,
        SubscribeToNewsletter $subscribeToNewsletter
    ): Response {
        $subscribeToNewsletter($request->input('data.attributes.email'));

        return response('', 201);
    }
}
