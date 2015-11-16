<?php
    class BMIService 
    {
        public static function getBmiIndex($weight, $height) {
            return $weight / ($height * $height);
        }
        
        public static function getBmiDescription($bmiIndex)
        {
            if($bmiIndex < 17)
                return 'Muito Abaixo do Peso Ideal :(';            
            else if($bmiIndex > 17 && $bmiIndex < 18.49)
                return 'Abaixo do Peso Ideal :/';
            else if($bmiIndex > 18.50 && $bmiIndex < 24.99)
                return 'Peso Ideal :D';
            else if($bmiIndex > 25 && $bmiIndex < 29.99)
                return 'Acima do Peso Ideal :/';
            else if($bmiIndex > 30 && $bmiIndex < 34.99)
                return 'Obesidade I :(';
            else if($bmiIndex > 35 && $bmiIndex < 39.99)
                return 'Obesidade II(Severa) :((';
            else if($bmiIndex > 40)
                return 'Obesidade III(Morbida) :(((';
            else        
    		    return "";   
        }
    }
?>