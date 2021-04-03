       <!-- Footer -->
       <div class="copyright row">
        <div class="col-md-6 text-left">
            &copy; Copyright 2021 | All Rights Reserved
        </div>
        <div class="col-md-6 text-right">
            Design By <a href="#!">Yarddiant</a>.
        </div>
    </div>
</div>
</main>
</div>
<!-- / .page-wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://traineaze.yarddiant.xyz//users/js/vendor.js"></script>
<script src="http://traineaze.yarddiant.xyz//users/layouts/js/app.js"></script>
<script type="text/javascript">
var lang = new Vue({
data: {
    message: '{}'
},
el: '#langDv',
methods: {
    select_Lang: function(language) {
        axios.post(COMPANY_URL + 'set-language', {
                language
            })
            .then(response => {
                window.location.reload();
            })
    }
}
});

</script>
<script src="http://traineaze.yarddiant.xyz//js/common.js"></script>
<script src="http://traineaze.yarddiant.xyz//js/global-auth.js"></script>
<script src="http://traineaze.yarddiant.xyz//users/vendor/amcharts/amcharts.js"></script>

@yield('js')
