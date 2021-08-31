<?
    abstract class Machine{

        public function powerOn(){
            echo ("Двигатель запушен\n");
        }
    
        public function powerOff(){
            echo ("Двигатель остановлен\n"); 
        }

        public function moveSterigth(){
            echo ("Движение вперед\n");
        }

        public function moveForward(){
            echo ("Движение назад\n");
        }

        public function turnLeft(){
            echo ("Поворот налево\n");
        }

        public function turnRigth(){
            echo ("Движение направо\n");
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

    abstract class AbstractTank extends Machine {
        const bullet = 5;
        
        public function moveTurelLeft(){
            echo ("Поворот башни влево\n");
        }
        
        public function moveTurelRigth(){
            echo ("Поворот башни вправо\n");
        }

        public function fire(){
            // Выстрел
        }

        public function checkBullets(){
            return $this->bullets > 0;
        }
    }

    class Tank extends AbstractTank {
        
    }

    class Spec extends Machine{
        public function moveLadle(){
            echo ("Движение ковшом\n");
        }
    }

    $machine = new Spec;

    function testMachine(Machine $machine){
        $machine->moveSterigth();
        $machine->moveLadle();
    }

    testMachine($machine);

