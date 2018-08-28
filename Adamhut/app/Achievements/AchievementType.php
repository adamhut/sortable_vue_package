<?php 
namespace Adamhut\app\Achievemnts;


abstract class AchievementType{

    protected $model;
    
    /**
     * FirstThousandPoint Constructor
     *
     * @param [type] $property
     */
    public function __construct()
    {
        $this->model = Achievement::firstOrCreate([
            'name' => $this->name,
            'description' => $this->description,
            'icon' => $this->icon
        ]);
    }
    
    public function modelKey()
    {
        return $this->model->getKey();
    }
}