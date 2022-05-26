<footer class="footer-dark">
    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-md-3 item">
                <h3>Контакт</h3>
                <ul>
                    <li>VSG Apartments</li>
                    <li><i class="fas fa-phone"></i>&nbsp; {{$profile->phone_1}}</li>
                    <li><i class="fas fa-phone"></i>&nbsp; {{$profile->phone_2}}</li>
                    <li><i class="far fa-envelope"></i>&nbsp; {{$profile->email}}</li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3 item">
                <h3>За нас</h3>
                <ul>
                    <li><a href="{{url('/condition')}}">Общи условия</a></li>
                    <li><a href="{{url('/shared')}}">Споделено с нас</a></li>
                    <li><a href="{{url('/aboutus')}}">За нас</a></li>
                </ul>
            </div>
            <div class="col-md-6 item text"></div>
            <div class="col item social"><a href="{{$profile->facebook}}"><i class="icon ion-social-facebook"></i></a>
                  <a href="{{$profile->instagram}}"><i class="icon ion-social-instagram"></i></a></div>
        </div>
        <p class="copyright">VSG apartments © 2022 created by batvan13</p>
    </div>
</footer>

<script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</body>

</html>