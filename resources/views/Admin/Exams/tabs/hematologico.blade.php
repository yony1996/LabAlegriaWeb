<form  action="{{route('store.hemato')}}" method="POST">
    @csrf
    <input type="hidden" id="id"  value="{{old('user_id')}}" name="user_id">
    <input type="hidden" id="doc"  value="{{old('doctor')}}" name="doctor">
    <input type="hidden" id="ord"  value="{{old('orden')}}" name="orden">
    <input type="hidden" name="type" value="sangre">
    <input type="hidden" name="fechaMuestra" id="fechaMu" value="{{old('fechaMuestra')}}">
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
                                <div class="card-header" role="tab" id="heading-1">
                                    <h6 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse-1" aria-expanded="false"
                                            aria-controls="collapse-1" class="collapsed">
                                            BIOMETRIA HEMATICA
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse-1" class="collapse" role="tabpanel" aria-labelledby="heading-1"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>BIOMETRIA HEMATICA</th>
                                                        <th>RESULTADOS</th>
                                                        <th>UNIDAD</th>
                                                        <th>V.de REF</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>GLOBULOS BLANCOS</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHGB[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHGB[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHGB[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>NEUTROFILOS</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHNEU[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHNEU[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHNEU[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>LINFOCITOS</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHLIN[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHLIN[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHLIN[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>MONOCITOS</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHMON[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHMON[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHMON[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>EOSINOFILOS</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHEOS[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHEOS[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHEOS[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>BASOFILOS</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHBAS[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHBAS[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHBAS[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>GLOBULOS ROJOS</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHGR[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHGR[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHGR[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>HEMOGLOBINA</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHEMO[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHEMO[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHEMO[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>HEMATOCRITO</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHEMA[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHEMA[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHEMA[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>VOLUMEN CORPUSCULAR MEDIO</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHVCM[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHVCM[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHVCM[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>HB CORPUSCULAR MEDIA</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHHB[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHHB[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHHB[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CONC. HB CORPUSCULAR</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHCOR[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHCOR[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHCOR[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>RDW CV</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHRDW[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHRDW[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHRDW[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>PLAQUETAS</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHPLA[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHPLA[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                name="biometriaHPLA[]">
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
                                <div class="card-header" role="tab" id="heading-2">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse-2"
                                            aria-expanded="false" aria-controls="collapse-2">
                                            QUIMICA SANGUINEA
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse-2" class="collapse" role="tabpanel" aria-labelledby="heading-2"
                                    data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>QUIMICA SANGUINEA</th>
                                                        <th>RESULTADOS</th>
                                                        <th>UNIDAD</th>
                                                        <th>V.de REF</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>GLUCOSA</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaGLU[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaGLU[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaGLU[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>UREA</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaURE[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaURE[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaURE[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CREATININA</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaCRE[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaCRE[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaCRE[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>COLESTEROL</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaCOL[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaCOL[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaCOL[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>TRIGLICERIDOS</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaTRIG[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaTRIG[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaTRIG[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>TGO</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaTGO[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaTGO[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaTGO[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>TGP</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaTGP[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaTGP[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaTGP[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>FOSFATASA ALCALINA</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaFAL[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaFAL[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="quimicaFAL[]">
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
                                <div class="card-header" role="tab" id="heading-3">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse-3"
                                            aria-expanded="false" aria-controls="collapse-3">
                                            HORMONAS
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse-3" class="collapse" role="tabpanel" aria-labelledby="heading-3"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>HORMONAS</th>
                                                        <th>RESULTADOS</th>
                                                        <th>UNIDAD</th>
                                                        <th>V.de REF</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>TSH</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="hormonasTSH[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="hormonasTSH[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="hormonasTSH[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T3 Total</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="hormonasT3[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="hormonasT3[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="hormonasT3[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>T4 Total</td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="exampleInputUsername1">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="exampleInputUsername1">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control"
                                                                id="exampleInputUsername1">
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
                                <div class="card-header" role="tab" id="heading-4">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse-4"
                                            aria-expanded="false" aria-controls="collapse-3">
                                            ELECTROLITOS
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse-4" class="collapse" role="tabpanel" aria-labelledby="heading-4"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ELECTROLITOS</th>
                                                        <th>RESULTADOS</th>
                                                        <th>UNIDAD</th>
                                                        <th>V.de REF</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>CALCIO TOTAL</td>
                                                        <td>
                                                            <input type="text" class="form-control" name="electrolitosCTOL[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="electrolitosCTOL[]">
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="electrolitosCTOL[]">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <hr>
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
