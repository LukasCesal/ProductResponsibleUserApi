<?php
declare(strict_types=1);

namespace Aiti\ProductResponsibleUserApi\Api\Data;

use Aiti\ProductResponsibleUser\Model\ProductResponsibleUser;

interface ProductResponsibleUserInterface
{

    const USER_ID = 'user_id';
    const FIRST_NAME = 'first_name';
    const LAST_NAME = 'last_name';
    const DEPARTMENT_ID = 'department_id';
    const CREATED_AT = 'created_at';

    /**
     * Get user_id
     * @return int|null
     */
    public function getUserId() : ?int;

    /**
     * Set user_id
     * @param int|null $userId
     * @return ProductResponsibleUser
     */
    public function setUserId(?int $userId) : ProductResponsibleUser;

    /**
     * Get first_name
     * @return string|null
     */
    public function getFirstName(): string;

    /**
     * Set first_name
     * @param string $firstName
     * @return ProductResponsibleUser
     */
    public function setFirstName(string $firstName) : ProductResponsibleUser;

    /**
     * Get last_name
     * @return string|null
     */
    public function getLastName(): string;

    /**
     * Set last_name
     * @param string $lastName
     * @return ProductResponsibleUser
     */
    public function setLastName(string $lastName) : ProductResponsibleUser;

    /**
     * Get department_id
     * @return int|null
     */
    public function getDepartmentId() : ?int;

    /**
     * Set department_id
     * @param int|null $departmentId
     * @return ProductResponsibleUser
     */
    public function setDepartmentId(?int $departmentId) : ProductResponsibleUser;

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt(): ?string;
}

