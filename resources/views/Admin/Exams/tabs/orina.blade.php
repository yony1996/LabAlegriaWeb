<form action="{{route('store.orin')}}" method="post">
    @csrf
    <input type="hidden" id="id3" value="{{old('user_id')}}" name="user_id">
    <input type="hidden" id="doc3"value="{{old('doctor')}}" name="doctor">
    <input type="hidden" id="ord3" value="{{old('orden')}}" name="orden">
    <input type="hidden" name="fechaMuestra" id="fechaMu3" value="{{old('fechaMuestra')}}">
    <input type="hidden"  name="type" value="orina">
    <div class="col-md stretch-card">
        <div class="col-md stretch-card">
            <div class="card">
                <div class="col text-right mt-4">
                    <button type="submit" class="btn btn-sm btn-success">Crear Resultado</button>
                </div>
                <div class="card-body">
                    <div class="mt-4">
                        <div class="accordion" id="accordion" role="tablist">
                            <div class="card">
                                <div class="card-header" role="tab" id="heading-5">
                                    <h6 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse-5" aria-expanded="false"
                                            aria-controls="collapse-5" class="collapsed">
                                            EXAMEN FISICO
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse-5" class="collapse" role="tabpanel" aria-labelledby="heading-5"
                                    data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>EXAMEN FISICO</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Color:</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examFisiColor[]">
                                                        </td>
                                                        <td>
                                                            Reacción:
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examFisiReac[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Aspecto:</td>
                                                        <td>
                                                            <input type="text" class="form-control"name="examFisiAsp[]">
                                                        </td>
                                                        <td>
                                                            pH:
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"name="examFisiPh[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Densidad:</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examFisiDen[]">
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <hr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="heading-6">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse-6" aria-expanded="false"
                                            aria-controls="collapse-6">
                                            EXAMEN QUÍMICO
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse-6" class="collapse" role="tabpanel" aria-labelledby="heading-6"
                                    data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>EXAMEN QUÍMICO</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Leucositos:</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examQuimLeu[]">
                                                        </td>
                                                        <td>
                                                            Cetonas:
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examQuimCet[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nitritos:</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examQuimNi[]">
                                                        </td>
                                                        <td>
                                                            Urobilinógeno:
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examQuimUro[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Proteinas:</td>
                                                        <td>
                                                            <input type="text" class="form-control"name="examQuimPro[]">
                                                        </td>
                                                        <td>
                                                            Bilirrubinas:
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examQuimBili[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Glucosa:</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examQuimGlu[]">
                                                        </td>
                                                        <td>
                                                            Sangre:
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examQuimSan[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                        </td>
                                                        <td>
                                                            Hemoglobina:
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examQuimHemo[]">
                                                        </td>
                                                    </tr>
    
                                                </tbody>
                                                <hr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="heading-7">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse-7" aria-expanded="false"
                                            aria-controls="collapse-7">
                                            EXAMEN MICROSCÓPICO
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse-7" class="collapse" role="tabpanel" aria-labelledby="heading-7"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>EXAMEN MICROSCÓPICO</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Células Epiteliales:</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examMicroCeEp[]">
                                                        </td>
                                                        <td>
                                                            Cristales:
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examMicroCris[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Células Redondas:</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examMicroCeRe[]">
                                                        </td>
                                                        <td>
                                                            Bacterias:
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examMicroBac[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Piocitos:</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examMicroPio[]">
                                                        </td>
                                                        <td>
                                                            Filamento Mucoso:
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examMicroFiMu[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hematíes: </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="examMicroHema[]">
                                                        </td>
                                                        <td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                    </tr>
    
                                                </tbody>
                                                <hr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="heading-8">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse-8"
                                            aria-expanded="false" aria-controls="collapse-8">
                                            GRAM GOTA FRESCA
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse-8" class="collapse" role="tabpanel" aria-labelledby="heading-8"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="gotaFres" rows="4"></textarea>
                                                    </div>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

