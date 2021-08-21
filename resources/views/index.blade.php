<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honey Hunters</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header>
    <div class="container">
        <div class="logo">
            <a href="#"><img src="{{ asset('img/Слой 1.png') }}" class="img-fluid mt-4" alt="Logotip" width="210px"></a>
        </div>

        <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-center">
                <img src="{{ asset('img/red-emaijpg.jpg') }}" alt="Email image">
            </div>
        </div>

        <form action="{{ route('hunter.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6">
                    <label for="name" class="text-white mb-1">Имя @error('name') <span class="text-danger">*</span> @enderror</label>
                    <input type="text" class="style" id="name" name="name" value="{{ old('name') }}">
                    @foreach($errors->get('name') as $message)
                        <span class="text-danger pt-0 mt-0">{{ $message }}</span>
                    @endforeach

                    <label for="email" class="text-white mb-1 label">E-Mail @error('name') <span class="text-danger">*</span> @enderror</label>
                    <input type="email" class="style" id="email" name="email" value="{{ old('email') }}">
                    @foreach($errors->get('email') as $message)
                        <span class="text-danger">{{ $message }}</span>
                    @endforeach
                </div>

                <div class="col-6">
                    <label for="comment" class="text-white mb-1">Комментарий @error('name') <span class="text-danger">*</span> @enderror</label>
                    <textarea name="comment" class="style" id="comment" rows="5">{{ old('comment') }}</textarea>
                    @foreach($errors->get('comment') as $message)
                        <span class="text-danger">{{ $message }}</span>
                    @endforeach
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <button class="btn btn-danger mb-5">Записать</button>
                </div>
            </div>
        </form>
    </div>
</header>

<section>
    <div class="container">
        <h3 class="text-center">Выводим комментарии</h3>
        <div class="row">
            @foreach($hunters as $hunter)
                <div class="col-4">
                    <div class="name">
                        <h4 class="text-center">{{ $hunter->name }}</h4>
                    </div>
                    <div class="info">
                        <h5 class="text-center">{{ $hunter->email }}</h5>
                        <p class="text-center">{{ $hunter->comment }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<div class="footer">
    <div class="container">
        <div class="logo">
            <a href="#"><img src="{{ asset('img/Слой 1.png') }}" class="img-fluid" alt="Logotip" width="210px"></a>
        </div>
        <div class="links">
            <a href="#"><i class="fab fa-vk"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="{{ asset('js/jquery.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
