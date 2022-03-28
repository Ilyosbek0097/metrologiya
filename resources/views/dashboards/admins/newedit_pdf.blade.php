@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Tahrirlash')

@section('content')

<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tahrirlab Yangi Hujjat Yaratish Bo'limi</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.newedit_form')}}" method="POST">
                @csrf               
                <div class="form-group">
                    <label>(o'lchash vositasini qiyoslashni o'tkazgan metrologiya xizmatining nomi):</label>
                    <input required type="text" class="form-control" name="xizmat_nomi" value="{{ $shablon->xizmat_nomi}}">
                </div>
                <div class="form-group">
                    <label>Tartib Raqami:</label>
                    <input required type="text" class="form-control" name="tartib_raqami" value="{{ $shablon->tartib_raqami}}">
                </div>
                <div class="form-group">
                    <label>Amal qilish muddati:</label>
                    <input required type="date" class="form-control" name="amal_qilish_muddati" value="{{ $shablon->amal_qilish_muddati}}">
                </div>
                <div class="form-group">
                    <label>(etalonlar (namunaviy o'lchash vositalari)ning belgilanishi va nomi, qiyoslangan sanasi):</label>
                    <input required type="text" class="form-control" name="etalonlar_nomi" value="{{ $shablon->etalonlar_nomi}}">
                </div>
                <div class="form-group">
                    <label>(qiyoslash bo'yicha xujjatning belgilanishi va nomlanishi):</label>
                    <input required type="text" class="form-control" name="xujjat_belgilanishi" value="{{ $shablon->xujjat_belgilanishi }}">
                </div>
                <div class="form-group">
                    <label>(o'lchash vositalarini qiyoslagan metrologiya xizmatining nomi):</label>
                    <input required type="text" class="form-control" name="metrologik_xizmat_nomi" value="{{ $shablon->metrologik_xizmat_nomi }}">
                </div>
                <div class="form-group">
                    <label>(o'lchash vositalarining egasi - yuridik shaxs):</label>
                    <input required type="text" class="form-control" name="xizmat_egasi" value="{{ $shablon->xizmat_egasi }}">
                </div>
                <div class="form-group">
                    <label>(o'lchash vositalarini tayyorlovchi):</label>
                    <input required type="text" class="form-control" name="tayyorlovchi" value="{{ $shablon->tayyorlovchi }}">
                </div>
                <div class="form-group">
                    <label>(o'lchash vositalarining tayyorlovchi - import qiluvchi mamlakat):</label>
                    <input required type="text" class="form-control" name="import_mamlakat" value="{{ $shablon->import_mamlakat }}">
                </div>
                <div class="form-group">
                    <label>(o'lchash vositalari parametrlarining nomi, :</label>
                    <input required type="text" class="form-control" name="parametrlari_nomi" value="{{ $shablon->parametrlari_nomi }}">
                </div>
                <div class="form-group">
                    <label>o'lchashlar,xatolik chegaralari, aniqlik klassi):</label>
                    <input type="text" required class="form-control" name="xatolik_chegaralari" value="{{ $shablon->xatolik_chegaralari }}">
                </div>
                <div class="form-group">
                    <label>(o'lchash vositalarining nomlanishi va belgilanishi, zavod raqami):</label>
                    <input required type="text" class="form-control" name="nomlanishi_zavod_raqami" value="{{ $shablon->nomlanishi_zavod_raqami }}">
                </div>
                <div class="form-group">
                    <label>(o'lchash vositalariga qo'yiladigan talablarni reglamentlovchi normativ xujjat belgilanishi va nomi):</label>
                    <input required type="text" class="form-control" name="normativ_hujjat_nomi" value="{{ $shablon->normativ_hujjat_nomi }}">
                </div>
                <div class="form-group">
                    <label>(o'lchash vositasi turining ta'rifi):</label>
                    <input required type="text" class="form-control" name="turining_tarifi" value="{{ $shablon->turining_tarifi }}">
                </div>
                <div class="form-group">
                    <label>Qiyoslovchi:</label>
                    <input required type="text" class="form-control" name="qiyoslovchi" value="{{ $shablon->qiyoslovchi }}">
                </div>
                <div class="form-group">
                    <label>Qiyoslash sanasi:</label>
                    <input required type="date" class="form-control" name="sanasi" value="{{ $shablon->sanasi }}">
                </div>
                <div class="form-group text-right mt-5">
                    <input type="submit" class="btn btn-success" name="btn_tasdiq" value="Tasdiqlash">
                    <input required type="reset" class="reset btn btn-danger" name="btn_reset" value="Bekor Qilish">
                </div>
            </form>

        </div>


    </div>


</div>

@endsection
