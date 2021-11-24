<?php
namespace Wishusucess\SigninPhoneNumber\Api;

/**
 * @api
 */
interface SigninInterface
{
    /**
     * Return if module is enabled.
     *
     * @see \Wishusucess\SigninPhoneNumber\Helper\Data\Helper
     * @param string|null $scopeCode
     * @return bool
     */
    public function isEnabled($scopeCode);
    
    /**
     * @see \Wishusucess\SigninPhoneNumber\Helper\Data\Helper
     * @param string|null $scopeCode
     * @return string
     */
    public function getSigninMode($scopeCode);

    /**
     * Load customer object by phone attribute.
     *
     * @param string $phone
     * @return boolean|object
     */
    public function getByPhoneNumber(string $phone);
}
