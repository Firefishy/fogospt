<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

@stack('scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{env('GOOGLE_ANALYTICS')}}"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', '{{env('GOOGLE_ANALYTICS')}}');
</script>

<script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyCxxu_jTrBrGE8Em1kaqn3wTbCBa8_Ra7M",
        authDomain: "admob-app-id-6663345165.firebaseapp.com",
        databaseURL: "https://admob-app-id-6663345165.firebaseio.com",
        projectId: "admob-app-id-6663345165",
        storageBucket: "admob-app-id-6663345165.appspot.com",
        messagingSenderId: "726949968874"
    };
    firebase.initializeApp(config);
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js" integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg==" crossorigin="anonymous"></script>

<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="55340827-93d2-4bcc-a2e2-2e3ba451bafb" type="text/javascript" async></script>