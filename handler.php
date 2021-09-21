        <?php
        $str = $_GET['information'];

        function strrev_enc($str) {
            $str = iconv('utf-8', 'windows-1251', $str);
            $str = strrev($str);
            $str = iconv('windows-1251', 'utf-8', $str);
            return $str;
        }
        
        $str = strrev_enc($str);
        
        echo $str;
        echo "<br><a href='lesson_three.php'>Назад</a>";

