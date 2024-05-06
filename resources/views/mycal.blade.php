<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ route('calculate') }}">
    @csrf
    <input type="number" name="num1" placeholder="Num 1">
    <input type="number" name="num2" placeholder="Num 2">
    <button type="submit" name="operation" value="+">+</button>
    <button type="submit" name="operation" value="-">-</button>
    <button type="submit" name="operation" value="*">*</button>
    <button type="submit" name="operation" value="/">/</button>
    <button type="submit" name="operation" value="^">^</button>
</form>

@if(session('result'))
    <h1>{{ session('result') }}</h1>
@endif
<form method="POST" action="{{ route('calculateFactorial') }}">
    @csrf
    <input type="number" name="number" placeholder="Enter a number">
    <button type="submit">Calculate Factorial</button>
</form>

@if(session('factorialResult'))
    <h1>Factorial Result: {{ session('factorialResult') }}</h1>
@endif
<form method="POST" action="{{ route('calculateBMI') }}">
    @csrf
    <input type="number" step="0.01" name="weight" placeholder="Weight (kg)">
    <input type="number" step="0.01" name="height" placeholder="Height (m)">
    <button type="submit">Calculate BMI</button>
</form>

@if(session('bmiResult'))
    <h1>BMI Result: {{ session('bmiResult') }}</h1>
@endif
<form method="POST" action="{{ route('calculateRectangle') }}">
    @csrf
    <input type="number" step="0.01" name="length" placeholder="Length">
    <input type="number" step="0.01" name="width" placeholder="Width">
    <button type="submit">Calculate</button>
</form>

@if(session('area') && session('perimeter'))
    <h1>Perimeter: {{ session('perimeter') }}</h1>
    <h1>Area: {{ session('area') }}</h1>
@endif

</body>
</html>
