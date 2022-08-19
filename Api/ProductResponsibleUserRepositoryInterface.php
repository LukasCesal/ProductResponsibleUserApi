<?php
declare(strict_types=1);

namespace Aiti\ProductResponsibleUserApi\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface ProductResponsibleUserRepositoryInterface
{

    /**
     * Save User
     * @param \Aiti\ProductResponsibleUserApi\Api\Data\ProductResponsibleUserInterface $user
     * @return \Aiti\ProductResponsibleUserApi\Api\Data\ProductResponsibleUserInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Aiti\ProductResponsibleUserApi\Api\Data\ProductResponsibleUserInterface $user
    );

    /**
     * Retrieve User
     * @param string $userId
     * @return \Aiti\ProductResponsibleUserApi\Api\Data\ProductResponsibleUserInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($userId);

    /**
     * Retrieve User matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Aiti\ProductResponsibleUserApi\Api\Data\UserSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete User
     * @param \Aiti\ProductResponsibleUserApi\Api\Data\ProductResponsibleUserInterface $user
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Aiti\ProductResponsibleUserApi\Api\Data\ProductResponsibleUserInterface $user
    );

    /**
     * Delete User by ID
     * @param string $userId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($userId);
}

