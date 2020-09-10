<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" >

    <title>Unsubscribe</title>
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
    <style>
        body {
            font-family: 'Comfortaa';
        }
    </style>
</head>
<body>


<div class="container">
    <div class="logo pt-3">
        <a href="{{route('Homepage')}}"><img style="max-width: 100px" src="{{ asset("storage")."/".setting('site.logo') }}" alt="Logo"></a>
    </div>
    <div class="row pt-3 d-flex justify-content-center">
        <div class="col-8">
            <h1 class="text-center font-weight-bold">Abunəlik Ayarları</h1>
            <p style="font-size: 20px;color: #4c4c4c" class="text-justify font-weight-light pt-4">Salam, əziz abunəçi. Siz buradan abunə olduğun məzmunları idarə edə bilərsiniz.
                Zəhmət olmasa aşağıdakılardan sizə uyğun olanı seçib yadda saxla düyməsini klikləyin.
            </p>
            <p style="color: #a5a5a5" class="pl-4">
                 {{$subscriber->email}} üçün ayarlar
            </p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="form-group pt-2">
                        <input type="checkbox"  name="weekly" id="weekly"  @if (strstr( $subscriber->subscribe, 'news' )) checked @endif >
                        <label for="weekly"> Həftəlik xəbər bildirişləri</label>
                        <p style="color: #9b9b9b" class="pl-4">Hər həftə paylaşılan xəbərlər toplanır və sizə email ilə bildiriş göndərilir</p>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-group pt-2">
                        <input type="checkbox"  name="courses" @if (strstr( $subscriber->subscribe, 'courses' )) checked @endif id="courses" >
                        <label for="courses"> Yeni təlim bildirişləri</label>
                        <p style="color: #9b9b9b" class="pl-4">Yeni təlim əlavə olunduqda sizə email ilə bildiriş göndərilir</p>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-group pt-2">
                        <input type="checkbox"  name="delete" id="unsubscribe" >
                        <label class="text-danger" for="unsubscribe"> Bütün abunəliklərimi ləğv et</label>
                        <p style="color: #9b9b9b" class="pl-4">Bütün abunəliklərinizi ləğv edir. Elektron poçt ünvanınzı bazamızdan silir. Lazım gəldikdə siz yenə abunə ola bilərsiniz.</p>
                    </div>
                </li>
                <br>

                <li class="row">
                    <div class="col-md-6">
                        <a href="{{route('Homepage')}}">
                            <button class="btn btn-lg btn-outline-primary">Sayta qayıt</button>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-lg btn-outline-success float-right">Yadda saxla</button>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('assets/js/jquery/jquery-2.2.4.min.js')}}" ></script>

</body>
</html>
