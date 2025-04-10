<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>{{ $siteConfigs["site_name"]->value ?? "Site Name" }} - Inbox Mail</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
    </head>

    <body class="bg-gray-100 text-gray-800">
        <div class="mx-auto mt-10 max-w-xl rounded-lg bg-white p-6 shadow-md">
            <h3 class="mb-4 text-2xl font-semibold text-gray-700">Inbox Mail</h3>

            <p class="mb-2">
                <strong class="font-medium">Name:</strong>
                <span class="text-gray-600">{{ $data->name }}</span>
            </p>
            <p class="mb-2">
                <strong class="font-medium">Email:</strong>
                <span class="text-gray-600">{{ $data->email }}</span>
            </p>
            <p class="mb-4">
                <strong class="font-medium">Message:</strong>
                <span class="text-gray-600">
                    {!! str($data->message)->sanitizeHtml() !!}
                </span>
            </p>

            <footer class="mt-6 border-t border-gray-200 pt-4 text-center text-sm text-gray-500">
                <p>
                    Copyright &copy; 2024 {{ $siteConfigs["site_name"]->value ?? "Site Name" }} by
                    <a href="{{ env("COPYRIGHT_URL", "Copyright URL") }}" target="_blank" class="text-{{ $primary_color }}-400 font-semibold">
                        {{ env("COPYRIGHT_NAME", "Copyright Name") }}
                    </a>
                    . All rights reserved.
                </p>
            </footer>
        </div>
    </body>
</html>
