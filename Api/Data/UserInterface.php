<?php
declare(strict_types=1);

namespace Aiti\ProductResponsibleUserApi\Api\Data;

interface UserInterface
{

    const USER_ID = 'user_id';
    const USER_ID = 'user_id';

    /**
     * Get user_id
     * @return string|null
     */
    public function getUserId();

    /**
     * Set user_id
     * @param string $userId
     * @return \Aiti\ProductResponsibleUserApi\User\Api\Data\UserInterface
     */
    public function setUserId($userId);
}

