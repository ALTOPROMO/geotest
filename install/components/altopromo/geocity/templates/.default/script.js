$(
    function () {

        let geotext = document.getElementById('geocity_text_value');

        $('#geocity_yes').click(
            function () {
                $('#geocity_popup').hide();
            }
        );

        $('#geocity_no').click(
            function () {
                $('#geocity_popup').hide();
                $('#geocity_popup_window').show();
            }
        );

        $('#realcity_agree').click(
            function () {
                $('#geocity_popup_window').hide();

                let cityName = $('#realcity').val();

                $.ajax({
                    url: '/local/components/altopromo/geocity/ajax.php',
                    method: 'post',
                    data: {'action': 'selectCity', 'cityName': cityName},
                    success: function () {
                        geotext.innerHTML = cityName;
                    }
                });
            }
        )
    }
)