<?php


/**
 * Cat
 * 
 * The class cat is used to represent a basic cat, with a name,
 *  an age, a color , a sex and a race.
 * 
 * @author cedric correia alves <cedric.correia.alves@gmail.com>
 */
class Cat {

    /**
     * First Name
     *
     * Store the current object firstName value
     *
     * @var string
     */
    private $firstName;

    /**
     * Age
     *
     * Store the current object age value
     *
     * @var int
     */
    private $age;

    /**
     * Color
     *
     * Store the current object color value
     *
     * @var string
     */
    private $color;

    /**
     * Sex 
     *
     * Store the current object sex value
     *
     * @var string
     */
    private $sex;

    /**
     * Race
     *
     * Store the current object race value
     *
     * @var string
     */
    private $race;


    /**
     * Allways place the constructor before the other methods.
     *
     * Initializes an object with the given input
     */ 
    public function __construct(string $firstname , int $age , string $color , string $sex , string $race)
    {
        $this->setFirstName($firstname)
            ->setAge($age)
            ->setColor($color)
            ->setSex($sex)
            ->setRace($race);
    }
    

    /**
     * Get the value of firstName
     * 
     * @return string
     */ 
    public function getFirstName() : string
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName(string $firstName)
    {
        if(strlen($firstName) < 3 || strlen($firstName) > 20)
        {
            throw new \RuntimeException('First Name needs to be between 3 and 20 characters long');
        }
        
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get the value of age
     * 
     * @return int
     */ 
    public function getAge() : int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of color
     * 
     * @return string
     */ 
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor(string $color)
    {
        if(strlen($color) < 3 || strlen($color) > 10)
        {
            throw new \RuntimeException('Color needs to be between 3 and 10 characters long');
        }
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of sex
     * 
     * @return string
     */ 
    public function getSex() : string
    {
        return $this->sex;
    }

    /**
     * Set the value of sex
     *
     * @return  self
     */ 
    public function setSex(string $sex)
    {
        if(!in_array($sex , ['male','female']))
        {
            throw new \RuntimeException('Sex needs to be male or female');
        }
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get the value of race
     * 
     * @return string
     */ 
    public function getRace() : string
    {
        return $this->race;
    }

    /**
     * Set the value of race
     *
     * @return  self
     */ 
    public function setRace(string $race)
    {
        if(strlen($race) < 3 || strlen($race) > 20)
        {
            throw new \RuntimeException('Race needs to be between 3 and 20 characters long');
        }
        $this->race = $race;

        return $this;
    }

    /**
     * Returns the information of the current object as
     * an array 
     *
     * @return  array
     */ 
    public function getInfo() : array
    {
        $result = [];
        $result["firstName"] = $this->firstName;
        $result["age"] = $this->age;
        $result["color"] = $this->color;
        $result["sex"] = $this->sex;
        $result["race"] = $this->race;
        return $result;
    }
}
