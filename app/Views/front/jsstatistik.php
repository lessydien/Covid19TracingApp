
  


    <!-- owl-carousel -->

    <script src="/frontassets/js/owl-carousel/owl.carousel.min.js"></script>



    <!-- Counter -->

    <script src="/frontassets/js/counter/jquery.countTo.js"></script>



    <!-- Jquery Appear -->

    <script src="/frontassets/js/jquery.appear.js"></script>



    <!-- Magnific Popup -->

    <script src="/frontassets/js/magnific-popup/jquery.magnific-popup.min.js"></script>



    <!-- Retina -->

    <script src="/frontassets/js/retina.min.js"></script>



    <!-- wow -->

    <script src="/frontassets/js/wow.min.js"></script>



    <!-- Countdown -->

    <script src="/frontassets/js/jquery.countdown.min.js"></script>



    <!-- Custom -->

    <script src="/frontassets/js/custom.js"></script>
    <script  type="text/javascript" >
    $(document).ready(function(){		
        var table = $('#dataTable').DataTable({
					  "dom": 'lBPfrtip',
                buttons:[
                    'copy',
                    {
                        extend: 'excel',
                        title: '',
                        messageTop: 'Laporan'
                    },
                    'csv',
                    {
                        extend: 'pdf',
                        title: '',
                        messageTop:  function () {
                            //x = x + 1;
                            return $('#tgl_awal_ekspor').val();
                        },
                        className: 'text-center'
                    },
                    {
                        extend: 'print',
                        messageTop: 'Laporan Data Covid-19'
                    },
                    
                ],
					 columns: [
						{ data: 'no' },
						{ data: 'kec' },
						{ data: 'sembuh' },
                        { data: 'rawat' },
                        { data: 'meninggal' },
                        { data: 'total' }
							]
                });
            });			

    </script>

</body>



</html>