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

        protected function horn(){
            echo $this->horhSong;
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

    class Car extends Machine{
        protected $hornSong = "longSong";
        public $nitro = 100;

        public function checkNitro(){
            return $this->nitro > 0;
        }

        public function useNitro(){

            echo ("Осталось азота: " . $this->nitro-10 . "%\n");
            $this->nitro -= 10;
        }
    }

    $machine = new Tank;
    $car = new Car;
    
    
    function testMachine(Machine $machine){
        $machine->moveSterigth();
        $machine->moveTurelLeft();
    }

    function testCar(Machine $car){
        $car->powerOn();
        $car->moveSterigth();
        $car->useNitro();
        $car->useNitro();
        $car->useNitro();
    }
    testCar($car);
    // testMachine($machine);

