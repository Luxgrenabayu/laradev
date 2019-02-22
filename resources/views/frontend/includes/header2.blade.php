<header class="py-5 mb-5" style="background: url('{{ URL::asset('bootstrap/img/bg.jpg') }}');height: 329px;">
    <div class="container text-center text-white">
        <h2 class="title py-3 mb-3 "><i class="fa fa-align-justify"></i> Artikel </h2>
        <p>Situs yang menyediakan tutorial, screencast pemrogramman web &amp; perkembangan dunia teknologi.</p>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="inline">
                    <div class="input-group">
                        <input type="text" id="search" name="q" class="form-control input-lg" placeholder="Apa yang anda cari ?">
                        {{ csrf_field() }}
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Cari</button>
                            </span>
                        </div>
                </form>
            </div>
        </div>
    </div>
</header>