<?php

namespace App\Contracts;

/**
 * Interface CategoryContract
 * @package App\Contracts
 */
interface CategoryContract
{


    /**
     * @param $slug
     * @return mixed
     */
    public function findBySlug($slug);

    /**
     * @return mixed
     */
    public function treeList();

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listCategories(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    /**
     * @param int $id
     * @return mixed
     */
    public function findCategoryById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function createCategory(array $params);

    /**
     * @param array $params
     * @return mixed
     */
    public function updateCategory(array $params);

    /**
     * @param $id
     * @return bool
     */
    public function deleteCategory($id);
}
