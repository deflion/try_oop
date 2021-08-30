class Machine{
    public $fuel = 100;
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
        if ($this->checkNitro){
            parent:useNitro;
            $this->speed *= 0.3;
            $this->nitro -= 10;
        }
    }
    
}

class Tank extends Machine{
    public $bullet = 5;
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

class Spec extends Machine{
    public function moveLadle(){
        <!-- Движение ковшом  -->
    }
}


