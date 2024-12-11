<?php
// Tính tổng của các phần tử trong mảng:
// Viết một hàm nhận một mảng số nguyên là đối số và trả về tổng của tất cả các phần tử trong mảng. 
    $soNguyen = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $tong = 0;
        foreach($soNguyen as $soNguyens){
            $tong += $soNguyens;
        }
        echo $tong;
        echo "<br>";
        // cahs 2 
        $tong2 = 0;
        for($i = 0; $i < count($soNguyen);$i++){
            $tong2 += $soNguyen[$i];
        }
        echo $tong2;
        echo "<br>";

// Tìm giá trị lớn nhất trong mảng:
// Viết một hàm nhận một mảng số nguyên là đối số và trả về giá trị lớn nhất trong mảng.
        for($i = 0; $i < $soNguyen;$i++){
            echo max($soNguyen);
            break;
        }
        echo "<br>";


// Đảo ngược các phần tử trong mảng:
// Viết một hàm nhận một mảng là đối số và trả về mảng mới với các phần tử đã được đảo ngược.
        // $arr = ["lam"];
        // echo strrev($arr);

// Kiểm tra số nguyên tố:
// Viết một hàm nhận một số nguyên là đối số và trả về true nếu số đó là số nguyên tố, ngược lại trả về false.

        function songuyento($ngTo){
            for($i = 2; $i <= sqrt($ngTo);$i++){
                if($ngTo % $i != 0){
                    echo $ngTo . " là số Nguyên Tố ";
                    echo "<br>";
                    return true;
                }else{
                    echo $ngTo . " khoogn phải là số nguyên tố";
                    return false;
                }
            }
        }
       echo  songuyento(13  );
       echo "<br>";

// Tìm các số nguyên tố nhỏ hơn hoặc bằng một số đã cho:
// Viết một hàm nhận một số nguyên là đối số và trả về một mảng chứa tất cả các số nguyên tố nhỏ hơn hoặc bằng số đã cho
        function check($so){
            for($i = 0; $i < $so;$i++){
                echo "số nhỏ hơn " . $so . " là " . $i . "<br>";
            }
        }
        echo check(9);
        echo "<br>";

// Số lượng phần tử xuất hiện nhiều nhất trong mảng:
// Viết một hàm nhận một mảng là đối số và trả về số lượng phần tử xuất hiện nhiều nhất trong mảng.
        $array = ["lam" , "nam" , "hiếu", "lam", "nam", "lam", "lam"];
        function check_var($array){
            $max_values = array_count_values($array);
            $max_count = max($max_values);
            echo  $max_count;
        }
        echo check_var($array);


// Loại bỏ các giá trị trùng lặp:
// Viết một hàm nhận một mảng là đối số và trả về một mảng mới chỉ chứa các giá trị duy nhất từ mảng ban đầu.
        function loaibo($arrayy){
           echo array_unique($arrayy);
        }
        echo loaibo($array);
// Tìm median của mảng số nguyên:
// Viết một hàm nhận một mảng số nguyên là đối số và trả về median của các phần tử trong mảng.


// Kiểm tra chuỗi đối xứng:
// Viết một hàm nhận một chuỗi là đối số và trả về true nếu chuỗi đó là chuỗi đối xứng, ngược lại trả về false.

// Kiểm tra chuỗi có chứa từ đã cho hay không:
// Viết một hàm nhận một chuỗi và một từ là đối số và trả về true nếu chuỗi chứa từ đã cho, ngược lại trả về false.
//




?>