<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculate(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operation = $request->input('operation');
        $result = 0;

        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero!";
                }
                break;
            case '^':
                $result = pow($num1, $num2);
                break;
        }

        return redirect('/')->with('result', $result);
    }

    public function calculateFactorial(Request $request)
    {
        $number = $request->input('number');
        $factorialResult = 1;

        for ($i = 1; $i <= $number; $i++) {
            $factorialResult *= $i;
        }

        return redirect('/')->with('factorialResult', $factorialResult);
    }

    public function calculateBMI(Request $request)
    {
        $weight = $request->input('weight');
        $height = $request->input('height');

        // بررسی اینکه قد و وزن معتبر باشند
        if ($weight <= 0 || $height <= 0) {
            return redirect('/')->with('bmiResult', 'Invalid height or weight!');
        }

        // محاسبه BMI
        $bmi = $weight / pow($height, 2);

        return redirect('/')->with('bmiResult', $bmi);
    }

    public function calculateRectangle(Request $request)
    {
        $length = $request->input('length');
        $width = $request->input('width');

        // بررسی اینکه طول و عرض معتبر باشند
        if ($length <= 0 || $width <= 0) {
            return redirect('/')->with('area', 'Invalid length or width!')->with('perimeter', 'Invalid length or width!');
        }

        // محاسبه مساحت و محیط مستطیل
        $area = $length * $width;
        $perimeter = 2 * ($length + $width);

        return redirect('/')->with('area', $area)->with('perimeter', $perimeter);
    }
}

namespace App\Http\Controllers;


