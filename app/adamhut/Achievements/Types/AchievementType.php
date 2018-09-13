<?php 
namespace Adamhut\Achievements\Types;

use Adamhut\Achievements\Achievement;


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
            'name' => $this->name() ,
            'description' => $this->description,
            'icon' => $this->icon
        ]);
    }

    abstract public function qualifier($user);

    /**
     * fetch the descption
     *
     * @return void
     */
    abstract public function description();
    
    public function modelKey()
    {
        return $this->model->getKey();
    }


    public function name()
    {
        if(property_exists($this,'name')) {
            return $this->name;
        }
        return  trim(preg_replace('/[A-Z]/',' $0', class_basename($this)));
    }

    /**
     * Fetch the icon file name of the achievement 
     *
     * @return string
     */
    public function icon()
    {
        if (property_exists($this, 'icon')) {
            return $this->icon;
        }
        return  kebab_case(class_basename($this)).'.svg';
    }


    
}