<?php
require_once 'BaseModel.php';

class SuperCategoryModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct('categories');
    }

    public function getSubcategories($parentId)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM $this->table WHERE parent_id = :parentId");
        $stmt->execute(['parentId' => $parentId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
