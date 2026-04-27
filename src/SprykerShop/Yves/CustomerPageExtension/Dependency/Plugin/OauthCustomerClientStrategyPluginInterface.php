<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\CustomerPageExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ResourceOwnerRequestTransfer;
use Generated\Shared\Transfer\ResourceOwnerResponseTransfer;

/**
 * Use this plugin to provide OAuth customer authentication clients.
 *
 * Implement this interface to support a specific OAuth provider (e.g., Keycloak, Azure AD).
 * The plugin is called during the OAuth callback to exchange the authorization code for user information.
 */
interface OauthCustomerClientStrategyPluginInterface
{
    /**
     * Specification:
     * - Checks if this plugin is applicable for the provided ResourceOwnerRequest.
     * - The check MUST be done by matching a state prefix against the "state" parameter to identify the OAuth provider.
     *
     * @api
     *
     * @see \SprykerShop\Yves\CustomerPageExtension\Dependency\Plugin\CustomerAuthenticationLinkPluginInterface::getAuthenticationLinks()
     *
     * @param \Generated\Shared\Transfer\ResourceOwnerRequestTransfer $resourceOwnerRequestTransfer
     *
     * @return bool
     */
    public function isApplicable(ResourceOwnerRequestTransfer $resourceOwnerRequestTransfer): bool;

    /**
     * Specification:
     * - Requests a resource owner using the authorization code from the OAuth provider.
     * - Exchanges the authorization code for an access token.
     * - Fetches user information from the OAuth provider.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ResourceOwnerRequestTransfer $resourceOwnerRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ResourceOwnerResponseTransfer
     */
    public function getResourceOwner(ResourceOwnerRequestTransfer $resourceOwnerRequestTransfer): ResourceOwnerResponseTransfer;
}
