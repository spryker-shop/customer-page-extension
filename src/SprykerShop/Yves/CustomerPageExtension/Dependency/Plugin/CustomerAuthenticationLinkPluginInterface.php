<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\CustomerPageExtension\Dependency\Plugin;

/**
 * Use this plugin to add third-party authentication links to the customer login page.
 *
 * Implement this interface to provide OAuth login buttons for the storefront.
 * Each plugin may represent one or more OAuth providers (e.g., Keycloak, Google, Azure AD).
 */
interface CustomerAuthenticationLinkPluginInterface
{
    /**
     * Specification:
     * - Provides data necessary to render OAuth authorization links on the customer login page.
     * - Returns one link per configured provider.
     * - Each link href is a direct authorization URL with an embedded state parameter for callback routing.
     *
     * @api
     *
     * @return array<\Generated\Shared\Transfer\OauthAuthenticationLinkTransfer>
     */
    public function getAuthenticationLinks(): array;
}
