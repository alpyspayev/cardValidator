<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{--Scripts--}}
    <script src="{{ asset('libs/jquery-3.4.1/js/jquery.js') }}"></script>
    <script src="{{ asset('libs/jquery-mask-1.14.10/jquery.mask.js') }}"></script>
    <script src="{{ asset('libs/bootstrap-4.3.1/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('libs/popper-1.15.0/popper.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap-select-1.13.9/js/bootstrap-select.min.js') }}"></script>

    {{--Styles--}}
    <link rel="stylesheet" href="{{ asset('libs/bootstrap-select-1.13.9/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/bootstrap-4.3.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/fontawesome/css/all.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Валидация кредитной карты</div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <form role="form" method="post" action="{{route('val_card')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Имя владельца карты</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="username" placeholder="NAME SURNAME" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="card_number">Номер карты</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                        </div>
                                        <input type="number" class="form-control" name="card_number" placeholder="0000 0000 0000 0000" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label><span class="hidden-xs">Срок действия</span> </label>
                                            <div class="form-inline">
                                                <select class="form-control" style="width:45%" name="expiration_month" required>
                                                    <option>МЕСЯЦ</option>
                                                    <option value="1">1 - Январь</option>
                                                    <option value="2">2 - Февраль</option>
                                                    <option value="3">3 - Март</option>
                                                    <option value="4">4 - Апрель</option>
                                                    <option value="5">5 - Май</option>
                                                    <option value="6">6 - Июнь</option>
                                                    <option value="7">7 - Июль</option>
                                                    <option value="8">8 - Август</option>
                                                    <option value="9">9 - Сентябрь</option>
                                                    <option value="10">10 - Октябрь</option>
                                                    <option value="11">11 - Ноябрь</option>
                                                    <option value="12">12 - Декабрь</option>
                                                </select>
                                                <span style="width:10%; text-align: center"> / </span>
                                                <select class="form-control" style="width:45%" name="expiration_year" required>
                                                    <option>ГОД</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2030">2030</option>
                                                    <option value="2031">2031</option>
                                                    <option value="2032">2032</option>
                                                    <option value="2033">2033</option>
                                                    <option value="2034">2034</option>
                                                    <option value="2035">2035</option>
                                                    <option value="2036">2036</option>
                                                    <option value="2037">2037</option>
                                                    <option value="2038">2038</option>
                                                    <option value="2039">2039</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVC <i class="fa fa-question-circle"></i></label>
                                            <input class="form-control" name="cvc" type="number" required>
                                        </div>
                                    </div>
                                </div>
                                <button class="subscribe btn btn-primary btn-block" type="submit">Проверить</button>
                            </form>
{{--                        <form method="post" action="{{route('val_card')}}">--}}
{{--                            @csrf--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>Номер карты</label>--}}
{{--                                        <input type="number" name="card_number" class="form-control">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>CVC/CVV</label>--}}
{{--                                        <input type="text" name="cvc" class="form-control">--}}
{{--                                    </div>--}}
{{--                                    <button type="submit" class="btn btn-outline-success">Принять</button>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>Месяц</label>--}}
{{--                                        <select name="expiration_month" id="month" class="form-control">--}}
{{--                                            <option value="1">1</option>--}}
{{--                                            <option value="2">2</option>--}}
{{--                                            <option value="3">3</option>--}}
{{--                                            <option value="4">4</option>--}}
{{--                                            <option value="5">5</option>--}}
{{--                                            <option value="6">6</option>--}}
{{--                                            <option value="7">7</option>--}}
{{--                                            <option value="8">8</option>--}}
{{--                                            <option value="9">9</option>--}}
{{--                                            <option value="10">10</option>--}}
{{--                                            <option value="11">11</option>--}}
{{--                                            <option value="12">12</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>Год</label>--}}
{{--                                        <select name="expiration_year" class="form-control" id="year">--}}
{{--                                            <option value="2019">2019</option>--}}
{{--                                            <option value="2020">2020</option>--}}
{{--                                            <option value="2021">2021</option>--}}
{{--                                            <option value="2022">2022</option>--}}
{{--                                            <option value="2023">2023</option>--}}
{{--                                            <option value="2024">2024</option>--}}
{{--                                            <option value="2025">2025</option>--}}
{{--                                            <option value="2026">2026</option>--}}
{{--                                            <option value="2027">2027</option>--}}
{{--                                            <option value="2028">2028</option>--}}
{{--                                            <option value="2029">2029</option>--}}
{{--                                            <option value="2030">2030</option>--}}
{{--                                            <option value="2031">2031</option>--}}
{{--                                            <option value="2032">2032</option>--}}
{{--                                            <option value="2033">2033</option>--}}
{{--                                            <option value="2034">2034</option>--}}
{{--                                            <option value="2035">2035</option>--}}
{{--                                            <option value="2036">2036</option>--}}
{{--                                            <option value="2037">2037</option>--}}
{{--                                            <option value="2038">2038</option>--}}
{{--                                            <option value="2039">2039</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </form>--}}
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
