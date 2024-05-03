<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register-Suara Merdeka Generation</title>
    <link rel="icon" type="image/png" href="{!! asset('images/logosmgen.png') !!}">
    <link href="{{ asset('css/login_register_user.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="main">
        <div id="loading" class="spinner-container loading-overlay">
            <div class="spinner">
                <div class="spinner">
                    <div class="spinner">
                        <div class="spinner">
                            <div class="spinner">
                                <div class="spinner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    @if(session('success'))
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Akun Berhasil Didaftarkan !',
                            text: '{{ session('
                            success ') }}' + ' Nomor Keanggotaan Anda adalah: ' + '{{ $card['membership'] }}',
                        });
                    </script>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="{{ route('form_register_user_act') }}" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="membership"><i class="zmdi zmdi-balance-wallet"></i></label>
                                <input type="hidden" name="membership" id="membership" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Your Name" />
                            </div>
                            <input type="hidden" name="role_id" id="role_id" value="4" placeholder="Your Name" />
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation" id="re_pass" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <label for="provinsi"><i class="zmdi zmdi-pin"></i></label>
                                <select name="provinsi" id="provinsi" class="dynamic" data-dependent="provinsi">
                                    <option value="" disabled selected>~ Pilih Provinsi ~</option>
                                    @foreach($card['get_provinsi'] as $provinsi)
                                    <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kota"><i class="zmdi zmdi-pin-drop"></i></label>
                                <select name="kota" id="kota" class="dynamic" data-dependent="kota">
                                    <option value="">~ Pilih Kota/Kabupaten ~</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kecamatan"><i class="zmdi zmdi-pin"></i></label>
                                <select name="kecamatan" id="kecamatan" class="dynamic" data-dependent="kecamatan">
                                    <option value="">~ Pilih Kecamatan ~</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kelurahan"><i class="zmdi zmdi-pin-drop"></i></label>
                                <select name="kelurahan" id="kelurahan" class="dynamic" data-dependent="kelurahan">
                                    <option value="">~ Pilih Kelurahan ~</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ URL::asset('/images/registrasi.jpg') }}" alt="sing up image"></figure>
                        <a href="/portal/login_user" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function () {
            $('#provinsi').change(function () {
                $('#loading').show();
                if ($(this).val() != '') {
                    var select = $(this).attr("id");
                    var value = $(this).val();
                    var dependent = $(this).data('dependent');
                    var _token = $('input[name="_token"]').val();
                    var provinsiValue = $('#provinsi option:selected').val();
                    
                    $.ajax({
                        url: "{{ route('getkota.fetch')}}",
                        method: "POST",
                        data: {
                            select: select,
                            value: value,
                            provinsi: provinsiValue,
                            _token: _token,
                            dependent: dependent
                        },
                        success: function (result) {
                            $('#kota').html(result);
                        },
                        complete: function () {
                            $('#loading').hide();
                        }
                    });
                }
            });

            $('#kota').change(function () {
                $('#loading').show();
                if ($(this).val() != '') {
                    var select = $(this).attr("id");
                    var value = $(this).val();
                    var dependent = $(this).data('dependent');
                    var _token = $('input[name="_token"]').val();
                    var kotaValue = $('#kota option:selected').val();
                    
                    $.ajax({
                        url: "{{ route('getkecamatan.fetch')}}",
                        method: "POST",
                        data: {
                            select: select,
                            value: value,
                            kota: kotaValue,
                            _token: _token,
                            dependent: dependent
                        },
                        success: function (result) {
                            $('#kecamatan').html(result);
                        },
                        complete: function () {
                            $('#loading').hide();
                        }
                    });
                }
            });

            $('#kecamatan').change(function () {
                $('#loading').show();
                if ($(this).val() != '') {
                    var select = $(this).attr("id");
                    var value = $(this).val();
                    var dependent = $(this).data('dependent');
                    var _token = $('input[name="_token"]').val();
                    var kecamatanValue = $('#kecamatan option:selected').val();
                    
                    $.ajax({
                        url: "{{ route('getkelurahan.fetch')}}",
                        method: "POST",
                        data: {
                            select: select,
                            value: value,
                            kecamatan: kecamatanValue,
                            _token: _token,
                            dependent: dependent
                        },
                        success: function (result) {
                            $('#kelurahan').html(result);
                        },
                        complete: function () {
                            $('#loading').hide();
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
