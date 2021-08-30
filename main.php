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

class Car{
    public function Nitro(){
        <!-- Заккись азота -->
    }
    
}

class Tank {
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

class Spec{
    public function moveLadle(){
        <!-- Движение ковшом  -->
    }
}


