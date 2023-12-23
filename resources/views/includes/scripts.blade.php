<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('front/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('front/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('front/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('front/js/datatables-simple-demo.js')}}"></script>
        <script>
                function goToUrl(url){
                     var url=url.value;
                     if(url =='redirect'){
                         window.location.href='../author/create';
                     }}
        </script>

<script>
    function goToUrl2(url){
         var url=url.value;
         if(url =='redirect'){
             window.location.href='../book/create';
         }}
</script>

