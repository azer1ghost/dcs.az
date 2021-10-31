<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <link rel="stylesheet" href="{{asset('assets/certificate/style.css')}}">
</head>
<body>
    <div class="all">
        <div class="back-side" >
            <img class="image" src="{{asset('assets/certificate/goldenblur.jpg')}}">
            <div class="front-side">
                <p class="certificate">CERTİFİCATE</p>
                <hr class="first-line">
                <p><b class="achievement">OF ACHİEVEMENT</b></p>
                <p class="this">THİS CERTİFİCATE İS PROUDLY PRESENTED TO</p>
                <div class="kimberly">{{$certificate->user->fullname}}</div>
                <hr class="first-line">
                <p class="watercolor">for submitting her watercolor artwork to the "Watercolor Art <br> Convention" in the month of August 2021.</p>
                <div class="left-line"></div>
                <div class="right-line"></div>
                <hr class="second-line">

                <img src="{{$certificate->qrCode}}" class="qr-code">
                <div class="first-name">
                    <p>Commencement date: 25.10.2021</p>
                    <p>Duration of Training: 3 day</p>
                    <p>Instructor's/Examiner's Name: Fizuli M.</p>
                    <p>Registration Certificate : APC / 086</p>
                    <p>Expiry date: 25.10.2024</p>
                </div>

                <div class="left-corner"></div>
                <img src="{{asset('assets/certificate/logo.png')}}" class="logo">
                <div class="right-corner"></div>
            </div>
        </div>
    </div>
</body>
</html>
