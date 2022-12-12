<pre><?php

        //1.Создайте массив arrRange и заполните его числами в промежутке [-50; 50] с шагом=8. Перемешайте элементы этого массива
        $arrRange = range(-50, 50, 8);
        print_r($arrRange);
        shuffle($arrRange);
        print_r($arrRange);


        //2.Выведите элементы этого массива в строку через « ** ».
        echo (implode("**", $arrRange) . "<br>");


        //3.Удалите четные элементы этого массива, определите количество оставшихся
        $res = array_filter($arrRange, fn ($item) => $item % 2 == 0);
        $result1 = array_filter($arrRange, fn ($item) => $item % 2 == 0);
        unset($arrRange);
        count($result1);


        //4.Замените все отрицательные значения положительными
        // for ($i = 0; $i < count($arrRange); $i++) {
        //     if ($arrRange[$i] < 0) {
        //     $arrRange[$i] = $arrRange[$i] * -1;
        //     }
        //     }
        //     print_r($arrRange);

        //5.Создайте новый массив arrRandom и заполните его на 20 элементов случайными числами в промежутке [-5; 10].
        $arrRandom = [];
        for ($a = 0; $a <= 20; $a++) {
            $arrRandom[$a] = rand(-5, 10);
        };


        //6. Определите количество значений в массиве arrRandom (количество повторений)     
        $count = array_count_values($arrRandom);
        print_r($count);


        //7.Определите сумму элементов массива arrRandom
        $summa = array_reduce($arrRandom, function ($carry, $item) {
            if ($item > 0) {
                $carry += $item;
            };
            return $carry;
        }, 1);
        echo ($summa . '<br>');


        //8.Определите произведение элементов массива arrRange, кратных 3
        // $arrRange = array_filter($arrRange, function($item){
        //     if ($item%3==0){
        //     return $item;
        //     }
        //    },
        // );
        // $product = array_product($arrRange);
        // print_r($arrRange);


        //9.Объедините массивы arrRange и arrRandom двумя способами
        // $arr1 = array_merge($arrRandom, $arrRangeRes);
        // print_r($arr1);
        // $arr2 = $arrRandom+$arrRangeRes;
        // print_r($arr2);

        //10.В массиве arrRandom удалите 2, 3 и 4 элементы
        print_r($arrRandom);
        $delete = array_splice($arrRandom, 2, 3, 4);
        print_r($delete);

        //11.В массиве arrRandom определите количество элементов, не превышающих его среднее значение
        $sred = $summa / count($arrRandom);
        echo ($sred . "<br>");
        $res = array_filter($arrRandom, fn ($item) => $item < $sred);
        echo (count($res) . "<br>");


        //12.Добавьте в конец массива arrRandom элемент=1000 (2 способа)
        //1 способ
        array_splice($arrRandom, -1, 0, 1000);
        print_r($arrRandom);

        //2 способ
        array_push($arrRandom, 1000);
        print_r($arrRandom);


        //14.Сформируйте массив из переменных, представленных ниже. Формирование массива выполните двумя способами
        $arr3 = [];
        $apple = "Черешня";
        $grape = "Виноград";
        $strawberry = "Земляника";
        $pear = "Груша";

        $arr4 = [$apple, $grape, $strawberry, $pear];
        $arr5 = compact("apple", "grape", "strawberry", "pear", $arr3);
        print_r($arr4);
        print_r($arr5);


        //15.Имеется массив. Выполните сортировку элементов массива по номеру дома в порядке возрастания. Результат отобразите на странице в виде таблицы
        $Home = [
            [
                "street" => "Гагарина",
                "house" => 7,
                "flat" => 303
            ],
            [
                "street" => "Елькина",
                "house" => 12,
                "flat" => 12
            ],
            [
                "street" => "Доватора",
                "house" => 113,
                "flat" => 24
            ],
        ];
        uasort($Home, function ($a, $b) {
            if ($a['house'] < $b['house']) return -1;
            if ($a['house'] == $b['house']) return 0;
            if ($a['house'] > $b['house']) return 1;
        });
        print_r($Home);
