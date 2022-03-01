<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="bg-white h-screen m-auto flex items-center justify-center">
        <div class="container p-4 m-auto justify-center max-w-3xl bg-gray-200 border border-gray-400 text-gray-900 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-white">
            <h1 class="text-3xl text-center font-semibold mb-6">
                Formulir Pendaftaran Staff Bidikmisi ITS
            </h1>
                <form action="/valid" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required
                            value="{{ old('name') }}" class="@error('name') is-invalid @enderror">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-6">
                        <label for="nrp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NRP</label>
                        <input type="text" id="nrp" name="nrp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required
                        value="{{ old('nrp') }}" class="@error('nrp') is-invalid @enderror">
                        @error('nrp')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="ipk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Index Prestasi Kumulatif</label>
                        <input type="text" id="ipk" name="ipk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required
                        value="{{ old('nrp') }}" class="@error('ipk') is-invalid @enderror">
                    </div>
                    <div class="mb-6">
                        <label for="alasan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alasan Mendaftar</label>
                        <input type="text" id="alasan" name="alasan" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ old('alasan') }}" class="@error('alasan') is-invalid @enderror">
                    </div>
                    <div class="mb-6">
                        <label for="commitment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Komitmen (Skala 1-10)</label>
                        <input type="text" id="commitment" name="commitment" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required
                        value="{{ old('commitment') }}" class="@error('commitment') is-invalid @enderror"
                        >
                    </div>
                    <div class="mb-6">  
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload Foto</label>
                        <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" name="user_avatar" type="file"
                        value="{{ old('user_avatar') }}" class="@error('user_avatar') is-invalid @enderror">
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>        
                </form>
        </div>
    </div>
</body>
</html>