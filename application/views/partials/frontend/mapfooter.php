    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/frontend/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/frontend/js/scriptall.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="<?php echo base_url();?>assets/frontend/js/allchart.js"></script>
    <script src="<?php echo base_url();?>assets/frontend/js/jquery.nicescroll.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".mapAccordion,.detItemLinkWrp,.rightinner").niceScroll({
                cursorcolor: "#502e8e"
            });
            $(".mapAccordion,.detItemLinkWrp,.rightinner").mouseover(function () {
                $(".mapAccordion,.detItemLinkWrp,.rightinner").getNiceScroll().resize();
            });
            iframeHeight();
            $("body ").addClass("hidden");

            function iframeHeight() {



                var deviceFullHeight = $(window).height();
                var canvasHeight = deviceFullHeight - $("#mapHolder").offset().top;
                var leftHeight = canvasHeight - 5;
                var scrollHeight = deviceFullHeight - $(".tabinner").offset().top - 10;
                var rightHeight = deviceFullHeight - $(".rightSectionBody").offset().top - 10;
                $(".frameHolder iframe").css("height", canvasHeight);

                $(".tabinner ").css("height", scrollHeight);

                $(".leftSection").css("height", leftHeight);
                $(".rightSection").css("height", leftHeight);
                $(".rightSectionBody").css("height", rightHeight);


            }

            $(window).resize(function () {
                iframeHeight();
            });
            $(".rightinner").find(".nicescroll-rails").css("display", "none");

            $(".itemsCat .label-default").click(function () {


                $(".rightSection").addClass("show");

                $(this).closest(".itemsCat").toggleClass("showList");


            })
            $(".rightToggle").click(function () {
                $(".rightSection").removeClass("show");
            })



            $(".closeitem").click(function () {


                var all = $(this).closest(".detItem").fadeOut("slow");


            });
            $(".rmbtn").click(function () {
                $(".rightinner > div").toggleClass("show");

            });

            $(".leftToggle").click(function () {
                $(".leftToggle i").toggleClass("show");
                $(".leftSection").toggleClass("hide");

            });


            $(".ellipse").click(function () {

                $(this).siblings(".inlist").toggleClass("visible");
            })



        });
    </script>
    <script>
        $(document).ready(function (e) {
            $(".mobile-button").click(function (event) {
                $("#content").addClass("mobile-open");
                event.stopPropagation();
            });

            $(document).click(function (event) {
                $(".ellipse").click(function (event) {
                    $(this).siblings(".inlist").addClass("visible");
                    event.stopPropagation();
                });

                $(document).click(function (event) {
                    if (!$(event.target).hasClass('visible')) {
                        $(".inlist").removeClass("visible");
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $('#bar').highcharts({
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Incidents Graph'
                },
                subtitle: {
                    // text: 'Source: P.A. Dept. of Education'
                },
                xAxis: {
                    categories: [' ward 1',
                        'ward 2',
                        'ward 3',
                        'ward 4',
                        'ward 5',
                        'ward 6',
                        'ward 7',
                        'ward 8',
                        'ward 9',
                        'ward 10',
                        'ward 11',
                        'ward 12',
                        'ward 13',
                        'ward 14',
                        'ward 15',
                        'ward 16',
                        'ward 17',
                        'ward 18',
                        'ward 19',
                        'ward 20',
                        'ward 21',
                        'ward 22',
                        'ward 23',
                        'ward 24',
                        'ward 25',
                        'ward 26',
                        'ward 27',
                        'ward 28',
                        'ward 29',
                        'ward 30',
                        'ward 31',
                        'ward 32'
                    ],
                    title: {
                        text: null
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'incidents counts',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    }
                },
                tooltip: {
                    valueSuffix: ''
                },
                plotOptions: {
                    bar: {
                        dataLabels: {
                            enabled: true
                        }
                    }
                },
                /*
        legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -40,
                    y: 100,
                    floating: true,
                    borderWidth: 1,
                    backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                    shadow: true
                },
        */
                credits: {
                    enabled: false
                },
                series: [{
                    data: [89.2,
                        88.4,
                        87.7,
                        86.6,
                        86.1,
                        83.9,
                        83.8,
                        81.8,
                        81.5,
                        79.5,
                        79.5,
                        77,
                        76.7,
                        74.8,
                        74.7,
                        74.6,
                        74.1,
                        74.1,
                        73.9,
                        72.5,
                        72.4,
                        72.4,
                        71.9,
                        71.7,
                        71.2,
                        70.2,
                        69.9,
                        69.8,
                        69.8,
                        69.4,
                        67.9,
                        67.6
                    ],
                    name: 'Incidents in different wards'
                }]

            });
        });
    </script>