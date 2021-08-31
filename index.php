<?
    interface MachineInterface{
        public function horn();

        public function wipers();
    }

    abstract class Machine implements MachineInterface{

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

    abstract class AbstractTank extends Machine {
        protected $hornSong = "loudSong";
        const bullet = 5;

        public function moveTurelLeft(){
            echo ("Поворот башни влево\n");
        }
        
        public function moveTurelRigth(){
            echo ("Поворот башни вправо\n");
        }

        public function fire(){
            if ($this->checkBullets()){
                echo ("");
            } else {
                echo ("Боезапас закончился\n");
            }
        }

        public function checkBullets(){
            return $this->bullets > 0;
        }
    }

    abstract class AbstractCar extends Machine {
        protected $hornSong = "beepSong";
        public $nitro = 10;

        public function checkNitro(){
            return $this->nitro > 0;
        }

        public function useNitro(){

            if ($this->checkNitro()){
                echo ("Осталось азота: " . $this->nitro-10 . "%\n");
                $this->nitro -= 10;
            } else {
                echo ("Азот закончился\n");
            }

        }
    }

    abstract class AbstractSpec extends Machine {
        protected $hornSong = "longSong";

        public function moveLadle(){
            echo ("Движение ковшом\n");
        }
    }

    class Tank extends AbstractTank {
        public function horn(){
            echo($this->hornSong);
        }

        public function wipers(){

        }
    }

    class Spec extends AbstractSpec{
        

        public function horn(){
            echo($this->hornSong);
        }

        public function wipers(){
            
        }
    }

    class Car extends AbstractCar{
        
        public function horn(){
            echo($this->hornSong);
        }

        public function wipers(){
            
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
        $car->horn();
    }

    testCar($car);
    // testMachine($machine);

