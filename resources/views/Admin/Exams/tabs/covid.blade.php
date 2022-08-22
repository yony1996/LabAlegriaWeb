<form action="{{ route('store.cov') }}" method="POST">
    @csrf
    <input type="hidden" id="id4" value="{{ old('user_id') }}" name="user_id">
    <input type="hidden" id="doc4" value="{{ old('doctor') }}" name="doctor">
    <input type="hidden" id="ord4" value="{{ old('orden') }}" name="orden">
    <input type="hidden" name="type" value="covid">
    <input type="hidden" name="fechaMuestra" id="fechaMu4" value="{{ old('fechaMuestra') }}">
    <div class="col text-right m-4">
        <button type="submit" class="btn btn-sm btn-success">Crear Resultado</button>
    </div>

    <div class="d-flex justify-content-center" style="background: #033c6c; color:#ffff; padding:8px;">
        DETECCIÓN DE SARS-CoV-2(COVID-19)
    </div>
    <div class="table-responsive" style="border: 1px solid black">
        <table class="table center">
            <thead>
                <tr style="background: #74c7d6">
                    <th style="text-align: center">EXAMEN</th>
                    <th style="text-align: center">RESULTADO</th>
                    <th style="text-align: center">V.de REF</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align: center">ANTIGENO SARS COVID19</th>
                    <th style="text-align: center"><input type="text" name="antigenoCov" class="form-control"
                            style=" margin-left:20px; width:300px;">
                    </th>
                    <th></th>
                </tr>
                <tr>
                    <th class="d-flex">Metodo:<input type="text" name="metodo" class="form-control"
                            style=" margin-left:20px; width:300px;"></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th class="d-flex">Muestra:<input type="text" name="muestra" class="form-control"
                            style=" margin-left:20px; width:300px;"></th>
                    <th></th>
                    <th></th>
                </tr>
            </tbody>
        </table>
        <hr>
        <div class="form-group" style="padding: 8px;">

            <label style="color: black; font-weight: bold;">INTERPRETACION</label>

            <textarea class="form-control" name="interpretacion" rows="4"></textarea>

        </div>
    </div>
</form>
