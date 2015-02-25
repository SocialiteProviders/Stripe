<?php
namespace SocialiteProviders\Stripe;

use SocialiteProviders\Manager\SocialiteWasCalled;

class StripeExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'stripe', __NAMESPACE__.'\Provider'
        );
    }
}
