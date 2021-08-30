abstract class Machine{

    public function powerOn(){
        <!-- Запуск двигателя -->
    }
 
    public function powerOff(){
        <!-- Отсановка двигателя  -->
    }

    public function moveSterigth(){
        <!-- Движение прямо -->
    }

    public function moveForward(){
        <!-- Движение назад -->
    }

    public function turnLeft(){
        <!-- Поворот налево -->
    }

    public function turnRigth(){
        <!-- Поворот направо -->
    }

}

class Car extends Machine{
    public $nitro = 100;


    public function checkNitro(){
        return $this->nitro > 0;
    }

    public function useNitro(){
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

$machine = new Spec;

function testMachine(Machine $machine){
    $machine->moveSterigth();
    $machine->moveLadle();
}