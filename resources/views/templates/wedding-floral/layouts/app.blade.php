<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Undangan @stack("wedding_couple_name") - {{ $siteConfigs["site_name"]->value ?? "Site Name" }}</title>

        <!-- <link rel="icon" href="" type="image/x-icon" />
    <link rel="apple-touch-icon" href="" /> -->

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />

        <link href="{{ asset("/") }}assets/fortawesome/fontawesome-free/css/all.css" rel="stylesheet" />
        <link href="{{ asset("/") }}assets/aos/dist/aos.css" rel="stylesheet" />
        <link href="{{ asset("/") }}assets/fancyapps/ui/dist/fancybox/fancybox.css" rel="stylesheet" />
        <script src="{{ asset("/") }}assets/sweetalert2/dist/sweetalert2.all.min.js"></script>
        <script src="{{ asset("/") }}assets/moment/moment.js"></script>
        <script src="{{ asset("/") }}assets/moment-countdown/dist/moment-countdown.min.js"></script>
        {{-- <link href="{{ asset('/') }}assets/floral-template/tailwind-output.css" rel="stylesheet" /> --}}
        <link href="{{ asset("/") }}assets/floral-template/style-custom.css" rel="stylesheet" />
        @vite(["resources/css/app.css", "resources/js/app.js"])
        @stack("styles")

        <style>
            html,
            body {
                margin: 0;
                padding: 0;
            }
        </style>
    </head>

    <body class="font-worksans">
        @yield("content")

        <script src="{{ asset("/") }}assets/aos/dist/aos.js"></script>
        <script src="{{ asset("/") }}assets/fancyapps/ui/dist/fancybox/fancybox.umd.js"></script>
        <script src="{{ asset("/") }}assets/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset("/") }}assets/floral-template/script-custom.js"></script>
        @stack("scripts")

        <script>
            $(document).ready(function () {
                const invitation_id = $('#invitation_id').val();

                if (invitation_id) {
                    $('#send-message-btn').on('click', function (e) {
                        e.preventDefault();

                        let sendMessageButton = $('#sendMessageButton');
                        let formData = $('#message-form').serialize();

                        sendMessageButton.attr('disabled', true).text('Sending...');

                        $.ajax({
                            type: 'POST',
                            url: '{{ route("invitations.send_message") }}',
                            data: formData,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            },
                            success: function (response) {
                                Swal.fire({
                                    toast: true,
                                    position: 'top-end',
                                    icon: 'success',
                                    title: response.message,
                                    showConfirmButton: false,
                                    showCloseButton: true,
                                    timer: 3000,
                                    timerProgressBar: true,
                                });

                                $('#message-form')[0].reset();

                                sendMessageButton.attr('disabled', false).text('Send');

                                fetchLatestMessages();
                            },
                            error: function (xhr) {
                                let errorMessage = xhr.responseJSON.message || 'Something went wrong! Please try again later.';
                                let errors = xhr.responseJSON.errors;

                                if (xhr.status === 422) {
                                    errorMessage = '';
                                    $.each(errors, function (key, value) {
                                        errorMessage += value[0] + '<br>';
                                    });
                                }

                                Swal.fire({
                                    toast: true,
                                    position: 'top-end',
                                    icon: 'error',
                                    title: errorMessage,
                                    showConfirmButton: false,
                                    showCloseButton: true,
                                    timer: 3000,
                                    timerProgressBar: true,
                                });

                                sendMessageButton.attr('disabled', false).text('Send');
                            },
                        });
                    });

                    function fetchLatestMessages() {
                        const color = $('#messages').data('color');

                        $.ajax({
                            url: '{{ route("invitations.get_message") }}',
                            data: {
                                invitation_id: invitation_id,
                            },
                            method: 'GET',
                            success: function (response) {
                                const messagesContainer = $('#messages');
                                messagesContainer.empty();

                                $.each(response.data, function (index, item) {
                                    const messageCard = `
                            <div class="bg-green-100 p-4 rounded-md shadow-md">
                                <p class="font-semibold ${color} text-sm">${item.name}</p>
                                <p class="text-gray-700 text-sm">${item.message}</p>
                            </div>
                        `;
                                    messagesContainer.append(messageCard);
                                });

                                messagesContainer.removeClass('hidden');
                            },
                            error: function () {
                                console.error('Error fetching messages');
                            },
                        });
                    }

                    fetchLatestMessages();
                }
            });
        </script>
    </body>
</html>
