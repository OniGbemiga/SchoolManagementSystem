{{--@if (count($errors) > 0)--}}
{{--    @foreach ($errors->all() as $error)--}}
{{--        <header id="header_2">--}}
{{--            <!--kode top bar start-->--}}
{{--            <div class="top_bar_2">--}}
{{--                <div class="modal-fade">--}}
{{--                    <div class="modal-dialog">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="user-box">--}}
{{--                                {{$error}}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </header>--}}
{{--    @endforeach--}}
{{--@endif--}}

@if (session('success'))
        <div class="alert alert-success" style="text-align: center">
            {{session('success')}}
        </div>
@endif

@if (session('error'))
        <div class="alert alert-danger" style="text-align: center">
            {{session('error')}}
        </div>
@endif
