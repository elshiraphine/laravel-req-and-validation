<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="bg-white h-screen m-auto flex items-center justify-center">
        <h2>Data Pendaftar</h2>
        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col items-center pb-10">
                <img class="mb-3 w-48 h-48 rounded-full shadow-lg" src="{{ $data->user_avatar }}" alt="foto_pendaftar"/>
                <h3 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $data->name }}</h3>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{ $data->nrp }}</span>
                <table class="table">
                    <tr>
                        <td>Departemen</td>
                        <td>{{ $data->department }}</td>
                    </tr>
                    <tr>
                        <td>IPK</td>
                        <td>{{ $data->department }}</td>
                    </tr>
                    <tr>
                        <td>Alasan</td>
                        <td>{{ $data->alasan }}</td>
                    </tr>
                    <tr>
                        <td>Pilihan Departemen</td>
                        <td>{{ $data->option }}</td>
                    </tr>
                    <tr>
                        <td>Komitmen</td>
                        <td>{{ $data->commitment }}</td>
                    </tr>
                </table>
                <a href="/form" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</body>
@include('sweetalert::alert')
</html>