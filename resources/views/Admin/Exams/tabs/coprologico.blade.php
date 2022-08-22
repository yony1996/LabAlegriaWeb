<form action="{{ route('store.copro') }}" method="POST">
    @csrf
    <input type="hidden" id="id2" value="{{ old('user_id') }}" name="user_id">
    <input type="hidden" id="doc2" value="{{ old('doctor') }}" name="doctor">
    <input type="hidden" id="ord2" value="{{ old('orden') }}"name="orden">
    <input type="hidden" name="type" value="heces">
    <input type="hidden" name="fechaMuestra" id="fechaMu2" value="{{ old('fechaMuestra') }}">
    <div class="col text-right m-4">
        <button type="submit" class="btn btn-sm btn-success">Crear Resultado</button>
    </div>
    <div class="col-md stretch-card">
        <div class="col-md stretch-card">
            <div class="card-body">
                <div class="mt-4">
                    <div class="accordion" id="accordion" role="tablist">
                        <div class="card">
                            <div class="card-header" role="tab" id="heading-9">
                                <h6 class="mb-0">
                                    <a data-toggle="collapse" href="#collapse-9" aria-expanded="false"
                                        aria-controls="collapse-9" class="collapsed">
                                        EXAMEN FISICO
                                    </a>
                                </h6>
                            </div>
                            <div id="collapse-9" class="collapse" role="tabpanel" aria-labelledby="heading-9"
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
                                                        <input type="text" class="form-control" name="examFisiCol[]">
                                                    </td>
                                                    <td>Consistencia:</td>
                                                    <td>
                                                        <input type="text" class="form-control" name="examFisiCon[]">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Aspecto:</td>
                                                    <td>
                                                        <input type="text" class="form-control" name="examFisiAsp[]">
                                                    </td>
                                                    <td>Restos Alimenticios:</td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                            name="examFisiResA[]">
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
                            <div class="card-header" role="tab" id="heading-10">
                                <h6 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-10"
                                        aria-expanded="false" aria-controls="collapse-10">
                                        EXAMEN MICROSCÓPICO
                                    </a>
                                </h6>
                            </div>
                            <div id="collapse-10" class="collapse" role="tabpanel" aria-labelledby="heading-10"
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
                                                    <td></td>
                                                    <td>
                                                        Almidon:
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                            name="examMicroAlm[]">
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        Levadura:
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"name="examMicroLev[]">
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        Grasa:
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                            name="examMicroGra[]">
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        Flora Bacteriana:
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                            name="examMicroFloB[]">
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Parásitos:</td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                            name="examMicroPar[]">
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>PMN:</td>
                                                    <td>
                                                        <input type="text" class="form-control"name="examMicroPmn[]">
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
                            <div class="card-header" role="tab" id="heading-11">
                                <h6 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-11"
                                        aria-expanded="false" aria-controls="collapse-11">
                                        SANGRE OCULTA
                                    </a>
                                </h6>
                            </div>
                            <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>SANGRE OCULTA</th>
                                                    <th>RESULTADO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Metodo</td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                            name="sangreOcMet[]">
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                            name="sangreOcMet[]">
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                    </td>
                                                </tr>
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
</form>
