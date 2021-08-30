abstract class Machine{

    protected function moveSterigth(){
        <!-- Движение прямо -->
    }

    protected function moveForward(){
        <!-- Движение назад -->
    }

    protected function turnLeft(){
        <!-- Поворот налево -->
    }

    protected function turnRigth(){
        <!-- Поворот направо -->
    }

    public $fuel = 100;

}

class Car extends Machine{
    public $nitro = 100;

    public static 

    public function checkNitro(){
        return $this->nitro > 0;
    }

    public function useNitro(){
        if ($this->checkNitro){
            parent:useNitro;
            $this->speed *= 0.2;
            $this->nitro -= 10;
        }
    }
    
}

interface TankInterface(){
    const bullet = 5;
    
    public function moveTurelLeft(){
        <!-- Поворот башни влево  -->
    }
    
    public function moveTurelRigth(){
        <!-- Поворот башни вправо -->
    }

    public function fire(){
        if ($this->checkBullets){
            parent::fire;
        }
    }

    public function checkBullets(){
        return $this->bullets > 0;
    }
}

class Tank extends Machine implements TankInterface{
    
}

class Spec extends Machine{
    public function moveLadle(){
        <!-- Движение ковшом  -->
    }
}

$car = new Car();
$panzar = new Tank();
$buldozer = new Spec();

$car->moveSterigth();


