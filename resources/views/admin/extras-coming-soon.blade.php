@extends('layouts.master-without-nav')

@section('body')
    <body class="authentication-bg">
@endsection

@section('content')

        <div class="mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="text-center">
                            <h2>
                                <a href="index">
                                    <img src="assets/images/logo-dark.png" alt="main-logo" height="24" />
                                </a>
                            </h2>

                            <svg class="svg-rocket mt-md-5 mt-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 83.07909 127.50572">
                                <g class="rocket-inner">
                                    <g class="rocket-clouds">
                                        <g>
                                            <path class="rocket-clouds__bubble" d="M4.91835,105.17388a4.9187,4.9187,0,1,1,4.91895-4.91846A4.92378,4.92378,0,0,1,4.91835,105.17388Zm0-7.79053a2.87183,2.87183,0,1,0,2.87207,2.87207A2.875,2.875,0,0,0,4.91835,97.38335Z"/>
                                            <path class="rocket-clouds__bubble" d="M12.85194,93.10942a2.49194,2.49194,0,1,1,2.49219-2.49219A2.4944,2.4944,0,0,1,12.85194,93.10942Zm0-2.937a.44507.44507,0,1,0,.44531.44482A.44512.44512,0,0,0,12.85194,90.17241Z"/>
                                            <path class="rocket-clouds__bubble" d="M19.66932,92.21489a2.36426,2.36426,0,1,1,2.36426-2.36377A2.36655,2.36655,0,0,1,19.66932,92.21489Zm0-2.68164a.31738.31738,0,1,0,.31738.31787A.31727.31727,0,0,0,19.66932,89.53325Z"/>
                                            <path class="rocket-clouds__bubble" d="M68.19862,90.04448a2.36475,2.36475,0,1,1,2.36426-2.36475A2.36718,2.36718,0,0,1,68.19862,90.04448Zm0-2.68262a.31787.31787,0,1,0,.31738.31787A.31831.31831,0,0,0,68.19862,87.36186Z"/>
                                            <path class="rocket-clouds__bubble" d="M78.73475,93.68462a4.34424,4.34424,0,1,1,4.34473-4.34424A4.34946,4.34946,0,0,1,78.73475,93.68462Zm0-6.6416a2.29736,2.29736,0,1,0,2.29785,2.29736A2.3006,2.3006,0,0,0,78.73475,87.043Z"/>
                                        </g>
                                        <path class="rocket-clouds__cloud" d="M56.13026,127.50542a11.822,11.822,0,0,1-11.7959-10.48584,11.439,11.439,0,0,1-8.61914-4.64795,6.63761,6.63761,0,0,1-2.00391.79346,9.83371,9.83371,0,0,1-14.46973,9.82031,7.56926,7.56926,0,0,1-4.10645,1.19922,7.67293,7.67293,0,0,1-7.66406-7.66406,7.56854,7.56854,0,0,1,1.2793-4.23437,6.51262,6.51262,0,0,1,10.92383-6.79736,9.69137,9.69137,0,0,1,1.85938-.67627,3.95529,3.95529,0,0,1,5.96094-3.06445,6.74268,6.74268,0,0,1,7.36523-1.43262,11.36822,11.36822,0,0,1,19.72559-.58643,9.89618,9.89618,0,0,1,.94629-.54541,5.49322,5.49322,0,1,1,10.63477,1.1499,9.89586,9.89586,0,0,1,2.77832,3.62549,7.66,7.66,0,0,1,3.50781-.71777,5.61945,5.61945,0,1,1,7.55859,7.55713c.00293.07666.00391.15332.00391.231a7.7932,7.7932,0,0,1-12.15137,6.46A11.89851,11.89851,0,0,1,56.13026,127.50542ZM45.2035,114.97954a1.09452,1.09452,0,0,1,1.10352.98633,9.83054,9.83054,0,0,0,19.65527-.33936l-.00586-.22705a1.05829,1.05829,0,0,1,.65918-1.02344,1.0122,1.0122,0,0,1,1.1543.28223,5.72485,5.72485,0,0,0,10.1416-4.37744,1.02367,1.02367,0,0,1,.6875-1.10352,3.57235,3.57235,0,1,0-4.52539-4.52539,1.02728,1.02728,0,0,1-1.10156.688,5.8067,5.8067,0,0,0-3.98828.94531,1.02326,1.02326,0,0,1-1.55859-.55176,7.82342,7.82342,0,0,0-3.09863-4.22021,1.02317,1.02317,0,0,1-.32227-1.34033,3.44655,3.44655,0,1,0-6.3252-.68262,1.02349,1.02349,0,0,1-.60156,1.23975,7.75063,7.75063,0,0,0-2.16309,1.30518,1.02426,1.02426,0,0,1-1.58984-.34229,9.32269,9.32269,0,0,0-17.04883.4126,1.02317,1.02317,0,0,1-1.49609.47168,4.70254,4.70254,0,0,0-6.33008,1.18408,1.0244,1.0244,0,0,1-.76465.41406,1.0445,1.0445,0,0,1-.80664-.32324,1.897,1.897,0,0,0-1.39941-.61182,1.91612,1.91612,0,0,0-1.91309,1.91455,2.12129,2.12129,0,0,0,.03027.32666,1.02369,1.02369,0,0,1-.85352,1.17236,7.70025,7.70025,0,0,0-2.82715,1.03125,1.0231,1.0231,0,0,1-1.39453-.32568A4.466,4.466,0,0,0,10.83436,111.9a1.02394,1.02394,0,0,1-.09473,1.12988A5.55351,5.55351,0,0,0,9.518,116.52056a5.62344,5.62344,0,0,0,5.61719,5.61719,5.55646,5.55646,0,0,0,3.43164-1.1792,1.02243,1.02243,0,0,1,1.17969-.05225,7.78685,7.78685,0,0,0,11.77441-8.37549,1.02262,1.02262,0,0,1,.94824-1.26074,4.65785,4.65785,0,0,0,2.84668-1.126,1.024,1.024,0,0,1,1.54785.25586,9.369,9.369,0,0,0,8.02832,4.58643l.27734-.00635Z"/>
                                    </g>
                                    <g class="rocket-inner__rocket-and-lines">
                                        <g class="rocket-lines">
                                            <path class="rocket-lines__lines" d="M42.72108,95.51616a1.02318,1.02318,0,0,1-1.02344-1.02344V73.50493a1.02344,1.02344,0,0,1,2.04688,0V94.49272A1.02318,1.02318,0,0,1,42.72108,95.51616Z"/>
                                            <path class="rocket-lines__lines" d="M30.65272,100.7144A1.02318,1.02318,0,0,1,29.62929,99.691V69.15972a1.02344,1.02344,0,0,1,2.04688,0V99.691A1.02318,1.02318,0,0,1,30.65272,100.7144Z"/>
                                            <path class="rocket-lines__lines" d="M54.66151,100.09136a1.02318,1.02318,0,0,1-1.02344-1.02344V69.15972a1.02344,1.02344,0,0,1,2.04688,0v29.9082A1.02318,1.02318,0,0,1,54.66151,100.09136Z"/>
                                            <path class="rocket-lines__lines" d="M58.23768,95.59136a1.02318,1.02318,0,0,1-1.02344-1.02344V69.15972a1.02344,1.02344,0,0,1,2.04688,0v25.4082A1.02318,1.02318,0,0,1,58.23768,95.59136Z"/>
                                            <path class="rocket-lines__lines" d="M51.08632,97.39116a1.02318,1.02318,0,0,1-1.02344-1.02344v-27.208a1.02344,1.02344,0,0,1,2.04688,0v27.208A1.02318,1.02318,0,0,1,51.08632,97.39116Z"/>
                                            <path class="rocket-lines__lines" d="M46.36073,95.34966a1.02318,1.02318,0,0,1-1.02344-1.02344V73.50493a1.02344,1.02344,0,0,1,2.04688,0V94.32622A1.02318,1.02318,0,0,1,46.36073,95.34966Z"/>
                                            <path class="rocket-lines__lines" d="M39.20839,96.84966a1.02318,1.02318,0,0,1-1.02344-1.02344V73.50493a1.02344,1.02344,0,0,1,2.04688,0V95.82622A1.02318,1.02318,0,0,1,39.20839,96.84966Z"/>
                                            <path class="rocket-lines__lines" d="M27.07655,102.09673a1.02318,1.02318,0,0,1-1.02344-1.02344V69.15972a1.02344,1.02344,0,0,1,2.04688,0v31.91357A1.02318,1.02318,0,0,1,27.07655,102.09673Z"/>
                                            <path class="rocket-lines__lines" d="M34.22792,100.99126a1.02318,1.02318,0,0,1-1.02344-1.02344V69.15972a1.02344,1.02344,0,0,1,2.04688,0V99.96782A1.02318,1.02318,0,0,1,34.22792,100.99126Z"/>
                                        </g>
                                        <path class="rocket-rocket" d="M43.62636,74.51519c-1.999,0-4.5293-.01416-7.62207-.05615a1.02257,1.02257,0,0,1-.98242-1.25684c.17578-.75342.51367-2.19385.93262-3.979H24.83729a1.02349,1.02349,0,0,1-.998-1.248c.09863-.439,2.42188-10.7627,2.66016-11.68555.10156-.3877,1.02539-3.81836,2.50781-5.41992a6.61129,6.61129,0,0,1,3.01172-1.8042V21.69731a1.027,1.027,0,0,1-.02832-.24023c0-11.28223,9.50977-20.76514,9.91406-21.16309A1.02492,1.02492,0,0,1,43.33729.29058c.4082.39844,9.89746,9.77588,10.12988,20.75928a1.10456,1.10456,0,0,1,.01074.15137V49.16167a6.557,6.557,0,0,1,2.70117,1.70752c1.48633,1.60645,2.40625,5.03418,2.50586,5.41992.24023.92285,2.56348,11.24707,2.66211,11.686a1.02349,1.02349,0,0,1-.998,1.248H49.53065c.51855,2.18506.8916,3.75635.94434,3.97607a1.02409,1.02409,0,0,1-.96484,1.25928C49.4828,74.45952,47.60682,74.51519,43.62636,74.51519Zm-6.32129-2.08691c5.60449.06641,9.15527.03613,10.88477.00977-.208-.875-.51172-2.15625-.86719-3.64844a1.022,1.022,0,0,1-.18652-.58984,1.08488,1.08488,0,0,1,.01074-.15039c-1.39551-5.86963-3.40234-14.3042-3.55371-14.88867a4.15492,4.15492,0,0,0-.834-1.85205,4.74017,4.74017,0,0,0-.80957,1.72852l-.06934.20313C41.6664,53.90483,39.12929,64.64507,37.30507,72.42827Zm11.91992-5.252h9.84473c-.874-3.87646-2.19922-9.73389-2.36523-10.373a13.167,13.167,0,0,0-2.02734-4.54395,4.29723,4.29723,0,0,0-1.19922-.8833v7.24512A10.72867,10.72867,0,0,1,49.225,67.17632Zm-23.1084,0H36.27284a10.7394,10.7394,0,0,1-4.25391-8.55518V51.23149a4.45406,4.45406,0,0,0-1.50977,1.02832,13.20048,13.20048,0,0,0-2.02832,4.54395C28.29921,57.50884,26.76015,64.32134,26.11659,67.17632ZM42.74843,49.22905c.88477,0,2.09277.59277,2.82617,3.418.13672.52539,1.6582,6.916,2.97168,12.4375A8.68392,8.68392,0,0,0,51.431,58.62114V50.40386a1.01378,1.01378,0,0,1-.10449-.627,1.03184,1.03184,0,0,1,.10449-.3208V22.48052H34.06581V58.62114A8.69014,8.69014,0,0,0,36.932,65.06743c1.3291-5.63623,2.8457-12.01562,3.01465-12.5l.06445-.187C40.38319,51.27935,41.07753,49.22905,42.74843,49.22905Zm-8.665-29.05127h17.293c-.59668-8.09277-6.64258-15.36035-8.75-17.665C40.55507,4.80767,34.65956,12.00786,34.08339,20.17778Zm8.99707,16.98828a6.51489,6.51489,0,1,1,6.51563-6.51514A6.52263,6.52263,0,0,1,43.08046,37.16606Zm0-10.98291a4.468,4.468,0,1,0,4.46875,4.46777A4.47272,4.47272,0,0,0,43.08046,26.18315Z"/>
                                    </g>
                                </g>
                            </svg>

                            <h3 class="mt-4">Stay tunned, we're launching very soon</h3>
                            <p class="text-muted">We're making the system more awesome.</p>

                            <div class="row mt-5 justify-content-center">
                                <div class="col-md-8">
                                    <div data-countdown="2020/01/17" class="counter-number"></div>
                                </div> <!-- end col-->
                            </div> <!-- end row-->
                        </div> <!-- end /.text-center-->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2015 - {{date('Y')}} &copy; UBold theme by <a href="" class="text-body">Coderthemes</a> 
        </footer>
    
@endsection


@section('script')
        <!-- Plugins js-->
        <script src="{{ URL::asset('assets/libs/jquery-countdown/jquery-countdown.min.js')}}"></script>

        <!-- Countdown js -->
        <script src="{{ URL::asset('assets/js/pages/coming-soon.init.js')}}"></script>    
@endsection
